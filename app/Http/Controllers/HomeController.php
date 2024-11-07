<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class HomeController extends Controller
{
    public function homes()
    {
        
        $modules = post::with(['category', 'writer'])
            ->orderBy('published_date', 'desc')
            ->take(2)
            ->get();
        
        $popularModules = post::where('is_popular', true)
            ->with(['category', 'writer'])
            ->orderBy('published_date', 'desc')
            ->take(2)
            ->get();

        return view('home', compact('modules', 'popularModules'));
    }
}
