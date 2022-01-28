<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Red social</title>

        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="bootstrap.bundle.min.js"></script>
    </head>
    <body>
        @include('layout.menu')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.footer')
    </body>
</html>
