<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function module($slug)
    {
        $modules = post::where('slug', $slug)
            ->with(['category', 'writer'])
            ->firstOrFail();
        return view('module', compact('modules'));
    }

    public function isPopular()
    {
        $populars = Post::where('is_popular', true)
            ->with(['category', 'writer'])
            ->paginate(3);
        return view('popular', compact('populars'));
    }
}
