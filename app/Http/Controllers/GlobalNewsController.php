<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GlobalNews;

class GlobalNewsController extends Controller
{
     public function global()
    {
        
        $newsArticles = GlobalNews::orderBy('published_date', 'desc')->get();

        
        return view('global', compact('newsArticles')); 
    }
}
