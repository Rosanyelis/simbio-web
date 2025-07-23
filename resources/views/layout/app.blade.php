<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="RossDigital">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simbio</title>
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('web/images/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('web/images/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('web/images/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('web/images/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('web/images/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('web/images/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('web/images/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('web/images/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('web/images/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('web/images/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('web/images/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('web/images/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('web/images/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('web/images/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('web/images/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        <!-- Start Include All CSS -->
        <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/animate.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/font-awesome.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/labflox-icon.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/slick.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/lightcase.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/preloader.css') }}"/>

        <!-- Revolution Slider Setting CSS -->
        <link rel="stylesheet" href="{{ asset('web/css/settings.css') }}">

        <link rel="stylesheet" href="{{ asset('web/css/preset.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/ignore_for_wp.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/theme.css') }}"/>
        <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="{{ asset('web/images/favicon.png') }}">
        <!-- Favicon Icon -->
    </head>
    <body>

        @include('layout.navigation')

        @yield('content')

        @include('layout.footer')
        <!-- Start Include All JS -->
        <script src="{{ asset('web/js/jquery.js') }}"></script>
        <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('web/js/circle-progress.min.js') }}"></script>
        <script src="{{ asset('web/js/slick.js') }}"></script>
        <script src="{{ asset('web/js/lightcase.js') }}"></script>
        <script src="{{ asset('web/js/litepicker.js') }}"></script>

        <!-- Slider Revolution Main Files -->
        <script src="{{ asset('web/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- Slider Revolution Extension -->
        <script src="{{ asset('web/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('web/js/extensions/revolution.extension.video.min.js') }}"></script>

        <script src="{{ asset('web/js/theme.js') }}"></script>
        <!-- End Include All JS -->
        @yield('scripts')
    </body>
</html>