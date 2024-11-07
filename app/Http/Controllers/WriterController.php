<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\writer;

class WriterController extends Controller
{
    public function writers()
    {
        $writers = writer::all();
        return view('writer', compact('writers'));
    }

    public function detail($id)
    {
        $writer = writer::with(['posts' => function($query) {
            $query->with('category')->latest('published_date');
        }])->findOrFail($id);

        return view('writerdetail', compact('writer'));
    }
}
