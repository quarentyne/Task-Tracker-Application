<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Daily Task Tracker') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,700|montserrat:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-[Inter] antialiased">
        <div class="min-h-screen bg-[#F5F8FF] flex flex-col w-full">
{{--            @include('layouts.navigation')--}}

            <!-- Page Heading -->
            <x-header />

            <!-- Page Content -->
            <main class="flex flex-row w-full flex-1">
                @include('layouts.sidebar')
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
