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
    <link rel="stylesheet" href="{{ asset('./assets/css/material-dashboard.css?v=3.0.3') }}">
    <link rel="stylesheet" href="{{ asset('./assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="oleez-loader"></div>

    @include('partials.header')
    <main class="container mt-5">
        @yield('container')
    </main>

    @include('partials.footer')

    @include('partials.nav-social')

    @include('partials.search')





    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wowjs/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/landing.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.3') }}"></script>
    <script>
        new WOW({
            mobile: false
        }).init();
    </script>
</body>


</html>
