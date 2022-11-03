<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
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
