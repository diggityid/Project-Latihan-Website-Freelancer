<!DOCTYPE html>
<html lang="en">
<head>
    @include ('includes.landing.meta')
    
    <title>@yield('title', 'SERV')</title>

    @stack('berfore-style')

    @include('includes.landing.style')

    @stack('after-style')

</head>
<body class="antialised">
    <div class="relative">

        @include ('includes.landing.header')

       
        @yield('content')

    @include('includes.landing.footer')

    @stack('berfore-script')

    @include('includes.landing.script')

    @stack('after-script')

    <!--modal -->

    @include('components.modal.login')
    @include('components.modal.register')
    @include('components.modal.register-success')
    </div>
    
</body>
</html>

