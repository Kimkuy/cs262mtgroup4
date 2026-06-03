<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('homepage')});
Route::get('/signup', function () { return view('signup')});
Route::get('/welcome', function () { return view('welcome')});