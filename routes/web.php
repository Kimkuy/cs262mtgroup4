<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', function () { return view('index');});
Route::get('/about', function () { return view('about');});
Route::get('/merchandise', function () { return view('merchandise');});
Route::get('/signup', function () { return view('signup');});
Route::get('/homepage', function () { return view('homepage');});
Route::get('/thenews', function () { return view('thenews');});
Route::get('/index', function () { return view('index');});
// Route::get('/layout', function () { return view('layout');});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/dashboard', function () {
    $posts = [];
    if(auth()->check()){
        $posts = auth()->user()->usersCoolPosts()->latest()->get();
    }
    return view('dashboard', ['posts' => $posts]);
});

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
