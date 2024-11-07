@extends('components.master')

@section('title')
<title>Writer Detail</title>
@endsection

@section('content')
<main class="main flex-grow-1">
    <div class="container-fluid pt-4 d-flex gap-3">
        <img src="{{ asset($writer->image) }}" alt="content" class="img-fluid object-fit-cover mb-2 rounded-circle" style="width: 10%">
        <a href="{{ route('writer') }}" class="text-center d-flex flex-column justify-content-between py-3 text-decoration-none text-dark">
                <h3>{{ $writer->name }}</h3>
                <p class="">Spesialis {{ $writer->posts->first()->category->name }}</p>
        </a>
    </div>

    <div class="container-fluid">
        <div class="row py-2 g-5 m-0">
            @foreach($writer->posts as $module)
                    <div class="col-lg-4 p-0">
                        <img src="{{ asset($module->thumbnail) }}" alt="content" class="img-fluid w-100" style="border-radius: 60px; max-height: 300px; height: auto; margin-left: 20px; object-fit: cover; " >
                    </div>
                    <div class="col-lg-8" style="padding-left = 10px">
                        <h3 class="larger_text">{{ $module->title }}</h1>
                            <p class="text-muted">
                                {{ \Carbon\Carbon::parse($module->published_date)->format('d M Y') . ' | ' . $module->writer->name . '' }}</p>
                            <p class="larger_text text-truncate"  style="display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                {{ $module->short_description }}
                            </p>
                            <a href="{{ route('module', $module->slug) }}" class="btn btn-dark px-5 rounded-5 float-end" style="border-radius: 40px;">Read more...</a>
                    </div>
                @endforeach
        </div>
    </div>
</main>
@endsection