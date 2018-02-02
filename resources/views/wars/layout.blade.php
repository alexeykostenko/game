<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('description', env('APP_DESCRIPTION'))">
        <meta name="author" content="@yield('title', env('APP_AUTHOR'))">
        <meta name="robots" content="noindex, nofollow">
        <title>@yield('title', env('APP_NAME'))</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        @include('wars.menu')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
