@extends('components.master')

@section('title')
<title>Popular</title>
@endsection

@section('content')
<main class="main flex-grow-1">
    <h1 class="container-fluid pt-4 fw-bold">
        Popular
    </h1>

    <div class="container-fluid">
        <div class="row py-2 g-5 m-0">
            @foreach($populars as $popular)
                    <div class="col-lg-4">
                        <img src="{{ asset($popular->thumbnail) }}" alt="content" class="img-fluid w-100" style="border-radius: 60px; max-height: 300px; height: auto; margin-left: 20px; object-fit: cover; " >
                    </div>
                    <div class="col-lg-8 pt-3 pl-3">
                        <h3 class="larger_text">{{ $popular->title }}</h1>
                            <p class="text-muted">
                                {{ \Carbon\Carbon::parse($popular->published_date)->format('d M Y') . ' | ' . $popular->writer->name . '' }}</p>
                            <p class="larger_text text-truncate"  style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                {{ $popular->short_description }}
                            </p>
                            <a href="{{ route('module', $popular->slug) }}" class="btn btn-dark px-5 rounded-5 float-end" style="border-radius: 40px;">Read more...</a>
                    </div>
             @endforeach
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center pt-5">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <div>Page | {{ $populars->links() }} </div>
            </ul>
        </nav>
    </div>
</main>
@endsection