<?php

use App\Http\Controllers\ProductController;
use App\Livewire\Post;
use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\CreatePost;
use App\Livewire\UploadPhoto;
use Illuminate\Support\Facades\Route;



Route::get('/', Post::class);
Route::get('/show-posts', ShowPosts::class)->lazy();

Route::get('/create-post', CreatePost::class);

Route::get('/counter', Counter::class);

Route::get('/todos', Todos::class);

Route::get('/photo', UploadPhoto::class);


Route::get('/product', [ProductController::class, 'index']);

Route::get('/home', function(){
    return view('welcome');
});
