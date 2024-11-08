<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="{{asset ('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">

</head>
<body class="" style="background-color: #a1aca1;">

    <div class="d-flex flex-column min-vh-100">
        @include('components.navbar')
    
        <main class="flex-grow-1">
            @yield('content')
        </main>
    
        @include('components.footer')
    </div>

</body>

</html>