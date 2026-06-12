<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GlobalNewsController;


Route::get('/', function () { return view('index');});
Route::get('/about', function () { return view('about');});
Route::get('/merchandise', function () { return view('merchandise');});
Route::get('/signup', function () { return view('signup');});
Route::prefix('thenews')->group(function () {
    Route::get('/cambodia', [NewsController::class, 'cambodia']);
    Route::get('/global', [GlobalNewsController::class, 'global']); // This becomes /thenews/global
});
Route::get('/index', function () { return view('index');});
Route::get('/team', function () { return view('team');});
Route::get('/competition', function () { return view('competiton');});

// Route::get('/thenews1', function () { return view('thenews1');});
// Route::get('/layout1', function () { return view('layout1');});

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




Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise.index');




// Route::get('/thenews1', [NewsController::class, 'index'])->name('news.index');
// Route::get('/thenews1/{news}', [NewsController::class, 'show'])->name('news.show');
