<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>@yield('title')</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        {{-- css読み込み --}}
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
 
    </head>
    <body>
        <header>
            @include('header')
        </header>
 
        <main class='mx-3'>
            @yield('content')
        </main>
 
        <footer>
            @include('footer')
        </footer>
    </body>
</html>