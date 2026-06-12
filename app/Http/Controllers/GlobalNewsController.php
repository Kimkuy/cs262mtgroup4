<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\GlobalNews;

class GlobalNewsController extends Controller
{
     public function global()
    {
        $globalDashboardPosts = Post::where('news_type', 'global')->latest()->get();
        $newsArticles = GlobalNews::orderBy('published_date', 'desc')->get();

        
        return view('global', compact('newsArticles', 'globalDashboardPosts')); 
    }
}
