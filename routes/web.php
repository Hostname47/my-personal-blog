<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{IndexController, AdminController, PostController, CategoryController};

Route::get('/', [IndexController::class, 'index']);
Route::get('/home', [IndexController::class, 'index']);

Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('create.new.category');
Route::get('/admin/categories/hierarchy/select-category-parent/viewer', [CategoryController::class, 'get_category_parent_selection_viewer']);
Route::get('/admin/categories/hierarchy/select-category-parent/subcategories_level', [CategoryController::class, 'get_subcategories_level']);
Route::post('/admin/categories', [CategoryController::class, 'store']);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('create.new.post');
Route::post('/admin/posts', [PostController::class, 'store']);
Route::patch('/admin/posts', [PostController::class, 'update']);
