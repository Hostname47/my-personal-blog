<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RPManagement extends Controller
{
    public function overview() {
        $roles = Role::orderBy('priority', 'asc')->get();
        $roleusers = collect([]);

        foreach($roles as $role) {
            /**
             * For each role (slug) we need to have a collection of users who own that role
             */
            $roleusers[$role->slug] = [];
            
            foreach($role->users as $user) {
                /**
                 * Here, If a user is admin and author at the same times, we only need to insert
                 * him in (high priority role) admins collection; to avoid repitition
                 */
                if(!$roleusers->flatten()->firstWhere('id', $user->id)) {
                    $users = $roleusers->get($role->slug);
                    $users[] = $user;
                    $roleusers->put($role->slug, $users);
                }
            }
        }

        return view('admin.roles-and-permissions.overview')
            ->with(compact('roles'))
            ->with(compact('roleusers'));
    }
}
