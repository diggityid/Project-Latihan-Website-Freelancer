<!DOCTYPE html>
<html x-data="data()" lang="en">
    <head>

        @include ('includes.landing.meta')
        
        <title>@yield('title', 'SERV')</title>

        @stack('berfore-style')

        @include('includes.landing.style')

        @stack('after-style')
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> -->

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Styles -->
        <!-- @livewireStyles -->

        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script> -->
    </head>
    <body class="antialiased">
        <!-- <x-jet-banner /> -->

        <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }"> 

            @include('components.dashboard.desktop')

            <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center"></div>

            @include('components.dashboard.mobile')

            <div class="flex flex-col flex-1 w-full">

            @include('components.dashboard.header')

            @yield('content')

            </div>

        </div>

        @stack('berfore-script')

        @include('includes.landing.script')

        @stack('after-script')
            
    </body>
</html>
