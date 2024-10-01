<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME','Laravel')}}</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.jpg') }}">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- animate css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <!-- slick css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- swiper css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- flipclock css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/flipclock.css') }}">
    <!-- jqvmap css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/jqvmap.min.css') }}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        .footer-bottom {
            background-color: #f8f9fa !important;
        }
    </style>
    @yield('styles')
</head>

<body>

    <!-- preloader start -->
    <div id="preloader"></div>
    <!-- preloader end -->

    <!-- template-version start -->
    {{-- <div class="template-version">
        <button type="button"><i class="fa fa-cog"></i></button>
        <div class="color-version-area">
            <a href="dark-index.html" class="dark-vesion">Dark Version</a>
            <a href="index.html" class="light-vesion">Light Version</a>
        </div>
    </div> --}}

    <div class="main-light-version">

        <!--  header-section start  -->
        @include('layout.header')
        <!--  header-section end  -->

        @yield('content')

        <!-- footer-section start -->
        @include('layout.footer')
        <!-- footer-section end -->

    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-angle-up"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstrap js file -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- flipclock js file -->
    <script src="{{ asset('assets/js/flipclock.min.js') }}"></script>
    <!-- countdown js file -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- slick js file -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- swiper js file -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!-- lightcase js file -->
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <!-- wow js file -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- vamp js files -->
    {{-- <script src="{{ asset('assets/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.vmap.world.js') }}"></script> --}}
    <!-- main script js file -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        const now = new Date();
        const nextSunday = new Date();
        if (now.getDay() !== 0) {
            nextSunday.setDate(now.getDate() + (7 - now.getDay()));
        } else {
            nextSunday.setDate(now.getDate());
        } // Set to Sunday
        nextSunday.setHours(23, 59, 59, 999); // End of the day
        const differenceInMilliseconds = nextSunday - now;
        const differenceInSeconds = Math.floor(differenceInMilliseconds / 1000);
        var clock = $('.clock').FlipClock(differenceInSeconds, {
            clockFace: 'DailyCounter',
            countdown: true
        });
        // jQuery(document).ready(function() {
        //     jQuery('#vmap').vectorMap({
        //         map: 'world_en',
        //         color: '#eaedef',
        //         backgroundColor: '#f7fcff',
        //         hoverOpacity: 0.8,
        //         selectedColor: '#eaedef',
        //         scaleColors: ['#f7fcff', '#f7fcff'],
        //         normalizeFunction: 'polynomial'
        //     });
        // });
    </script>

    @yield('scripts')
</body>

</html>
