<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        
        $newsArticles = News::orderBy('published_date', 'desc')->get();

        
        return view('thenews', compact('newsArticles')); 
    }
}