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
    @livewireStyles
</head>
    <body class='body-content'>
        @include('web.core.header')
        <main class='main-content mt-6 ml-2 mr-4 mb-8 bg-white dark:bg-gray-900 rounded-lg'>
            <div class='grid grid-cols-[1fr_3fr]'>
                <div class='side-bar border-r border-gray-300 dark:border-gray-600'>
                    @include('web.core.sidebar')
                </div>
                <div class='content'>
                    @yield('content')
                </div>
            </div>
        </main>
        @include('web.core.footer')
        @livewireScripts
    </body>
</html>
