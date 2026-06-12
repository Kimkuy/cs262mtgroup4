<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function cambodia()
    {
        $posts = Post::where('news_type', 'cambodia')->latest()->get();
        $newsArticles = News::orderBy('published_date', 'desc')->get();

        
        return view('cambodia', compact('posts', 'newsArticles'));
    }
}