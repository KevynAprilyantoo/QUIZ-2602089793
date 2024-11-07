@extends('components.master')

@section('title')
<title>Writer</title>
@endsection

@section('content')
<main class="flex-grow-1">
    <div class="container-fluid pt-4">
        <h1>Our Writers:</h1>
    </div>

    <div class="container-fluid">
        <div class="row py-2 g-5 m-0 text-center">
            @forelse ($writers as $writer)
                <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset($writer->image) }}" alt="content" class="img-fluid w-50 mb-2 rounded-circle">
                    <a href="{{ route('writerdetail', $writer->id) }}" class="text-decoration-none text-dark">
                        <p class="mb-0 fw-bold">{{ $writer->name }}</p>
                        <p>Spesialis {{ $writer->posts->first()->category->name }}</p>
                    </a>
                </div>
            @empty
                <p class="text-center">No authors yet</p>
            @endforelse
        </div>
    </div>
</main>
@endsection