<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oleez :: {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('./assets/vendors/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/vendors/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/vendors/slick-carousel/slick-theme.css') }}">

    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/images/favicon_io/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon_io/site.webmanifest') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.min.css') }}">


    <link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    {{-- loader --}}
    <div class="oleez-loader"></div>

    @include('partials.header')

    <main class="container mt-5">
        @yield('container')
    </main>


    @include('partials.footer')
    @include('partials.nav-social')

    @include('partials.search')



    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wowjs/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/landing.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>

    <script>
        new WOW({
            mobile: false
        }).init();
    </script>
</body>


</html>
