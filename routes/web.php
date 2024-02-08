<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Post;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;



Route::get('/', Post::class);
Route::get('/show-posts', ShowPosts::class)->lazy();

Route::get('/create-post', CreatePost::class);

Route::get('/counter', Counter::class);

Route::get('/todos', Todos::class);
