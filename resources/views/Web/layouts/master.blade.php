<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> @yield('title') </title>
    <!-- <link rel="icon" href=''> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/web/master.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body class='body-content'>
        <header class='header-content'>
            @include('web.core.header')
        </header>
        <main class='main-content'>
            @yield('content')
        </main>
        <footer class='footer-content'>
            @include('web.core.footer')
        </footer>
    </body>
</html>
