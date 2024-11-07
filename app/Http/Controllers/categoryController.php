<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;

class categoryController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->get();
        $categories = Category::all();

        return view('category', [
            'category' => $category,
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
