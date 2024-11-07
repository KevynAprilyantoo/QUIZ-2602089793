@extends('components.master')

@section('title')
<title>Home</title>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <img src={{asset ('images/home.jpg')}} class="gambar1">
  </div>

  <div class="container-fluid">
    <div class="row py-4 g-5 m-0">
        @foreach($modules as $module)
            <div class="col-lg-5">
                <img src="{{ url($module->thumbnail) }}" alt="content" class="img-fluid w-100 rounded-10" style="border-radius: 60px; max-height: 300px; height: auto; margin-left: 20px; object-fit: cover;" >
            </div>
            <div class="col-lg-7 pt-3" >
                <h3 class="larger_text">{{ $module->title }}</h1>
                    <p class="text-muted pt-3">
                        {{ \Carbon\Carbon::parse($module->published_date)->format('d M Y') . ' | ' . $module->writer->name . '' }}</p>
                    <p class="larger_text text-truncate">
                        {{ $module->short_description }}
                    </p>
                    <a href="{{ route('module', $module->slug) }}" class="btn btn-dark px-5 rounded-5 float-end" style="border-radius: 60px;">Read more...</a>
              </div>
        @endforeach
    </div>
  </div>
</div>
@endsection







  