<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use App\Models\{Post,Category};

class PostController extends Controller
{
    public function all(Request $request) {
        $status = 'all';
        if($request->has('status')) {
            $s = $request->validate(['status'=>Rule::in(['published', 'draft', 'private'])])['status'];
            $status = $s;
        }
        $posts = Post::with('author', 'categories')->orderBy('updated_at', 'desc')->paginate(16);

        return view('admin.posts.all')
            ->with(compact('posts'));
    }

    public function view(Request $request, Category $category, Post $post) {
        return view('view-post')
            ->with(compact('post'));
    }

    public function create() {
        $root_categories = Category::whereNull('parent_category_id')->orderBy('priority', 'asc')->get();
        return view('admin.posts.create')
            ->with(compact('root_categories'));
    }

    public function store(Request $request) {
        $postdata = $request->validate([
            'title'=>'required|max:1200',
            'title_meta'=>'required|max:1200',
            'slug'=>'required|max:1200',
            'summary'=>'sometimes|max:2000',
            'status'=>['sometimes', Rule::in(['draft', 'published', 'awaiting-review'])],
            'visibility'=>['sometimes', Rule::in(['public', 'private', 'password-locked'])],
            'content'=>'required|max:50000',
            'allow_reactions'=>['sometimes', Rule::in([0, 1])],
            'allow_comments'=>['sometimes', Rule::in([0, 1])],
        ]);
        $postdata['user_id'] = auth()->user()->id;

        $categories = $request->validate([
            'categories'=>'sometimes|min:1|max:10',
            'categories.*'=>'exists:categories,id',
        ]);

        // Create the post
        $post = Post::create($postdata);

        // Attach categories to the post if the user select categories
        if(count($categories)) {
            foreach($categories as $category)
                $post->categories()->attach($category);
        } else
            // In case the user does not select any category then we have to give uncategorized category to the post
            $post->categories()->attach(Category::where('slug', 'uncategorized')->first()->id);

        Session::flash('message', 'Post has been created successfully. <a href="" class="link-style">click here</a> to view the post');
    }

    public function edit(Request $request) {
        $post = null;
        if($request->has('post'))
            $post = Post::withoutGlobalScopes()->find($request->post);

        return view('admin.posts.edit')
            ->with(compact('post'));
    }

    public function update(Request $request) {
        $postdata = $request->validate([
            'post_id'=>'required|exists:posts,id',
            'title'=>'required|max:1200',
            'title_meta'=>'required|max:1200',
            'slug'=>'required|max:1200',
            'summary'=>'sometimes|max:2000',
            'status'=>['sometimes', Rule::in(['draft', 'published', 'awaiting-review'])],
            'visibility'=>['sometimes', Rule::in(['public', 'private', 'password-locked'])],
            'content'=>'required|max:50000',
            'allow_reactions'=>['sometimes', Rule::in([0, 1])],
            'allow_comments'=>['sometimes', Rule::in([0, 1])],
        ]);

        $categories = $request->validate([
            'categories'=>'sometimes|min:1|max:10',
            'categories.*'=>'exists:categories,id',
        ]);

        $post = Post::withoutGlobalScopes()->find($postdata['post_id']);
        unset($postdata['post_id']);
        $post->update($postdata);

        Session::flash('message', 'Post has been <strong>updated</strong> successfully. <a href="" class="link-style">click here</a> to view the post');
    }

    public function post_data(Request $request) {
        $post_id = $request->validate(['post_id'=>'required|exists:posts,id'])['post_id'];
        $post = Post::withoutGlobalScopes()->find($post_id);

        return [
            'title'=>$post->title,
            'title_meta'=>$post->title_meta,
            'slug'=>$post->slug,
            'content'=>$post->content,
        ];
    }
}
