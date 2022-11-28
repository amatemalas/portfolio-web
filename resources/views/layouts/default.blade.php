<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="bg-dark text-light">
    @include('site.header')
    
    <div class="container my-5 pt-5">
        <div class="row">
            <div class="col col-md-4">
                @include('site.sidebar')
            </div>
            <div class="col col-md-8">
                @yield('content')
            </div>
        </div>
    </div>

    @include('site.footer')
</body>
</html>