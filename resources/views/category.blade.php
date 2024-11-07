@extends('components.master')

@section('title')
<title>Category</title>
@endsection

@section('content')

<div class="row">
    <div class="container-fluid" >
        @if(isset($category))
            <h2 class="mt-4 ml-3" style="font-size: 30px; font-weight: bold;">{{ $category->name }}</h2>
            <div class="row pt-2 g-5 m-0">
                @foreach($category->posts as $module)
                    <div class="col-lg-4">
                        <img src="{{ asset($module->thumbnail) }}" alt="content" class="img-fluid w-100" style="border-radius: 60px; max-height: 300px; height: auto; margin-left: 20px; object-fit: cover; " >
                    </div>
                    <div class="col-lg-8 pt-3" style="padding-left = 10px">
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
        @endif
    </div>
</div>


@endsection