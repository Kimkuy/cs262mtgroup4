<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        // Fetch only featured items
        $featuredItems = Merchandise::where('is_featured', true)->get();

        return view('merchandise', compact('featuredItems'));
    }
}