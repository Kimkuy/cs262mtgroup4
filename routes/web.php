<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () { return view('homepage');});
Route::get('/signup', function () { return view('signup');});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login',[UserController::class, 'login']);
Route::post('/logout',[UserController::class, 'logout']);

Route::get('/dashboard', function () { 
    $posts = [];
    //$posts = Post::all();
    //$posts = Post::where('user_id',auth()->id())->get();
     if(auth()->check()){
        $posts = auth()->user()->usersCoolPosts()->latest()->get();
    }
    return view('dashboard',['posts' => $posts]); 
});

