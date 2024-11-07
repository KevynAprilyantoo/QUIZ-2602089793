@extends('components.master')

@section('title')
<title>Module</title>
@endsection

@section('content')
<main class="flex-grow-1">
    <div class="container-fluid pt-4">
        <a href="{{ route('category', $modules->category->slug) }}" class="text-decoration-none text-dark">
            <h1>{{ $modules->category->name }}</h1>
        </a>
    </div>

    <div class="container-fluid p-0 d-flex justify-content-center p-5 flex-column">
        <img src="{{ asset($modules->thumbnail) }}" alt="content" class="img-fluid w-100 rounded-5" style="max-height: 550px; border-radius: 60px; height: auto;">
        <p class="text-muted pt-2">
            {{ \Carbon\Carbon::parse($modules->published_date)->format('d M Y') . ' | ' . $modules->writer->name . '' }}</p>
        <p class="">
            {{ $modules->content }}
        </p>
    </div>

    <div class="container-fluid">

    </div>
</main>
@endsection