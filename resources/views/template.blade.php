<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo')</title>

    <!-- Fonts -->

    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{  URL::asset('img/128x128-PNG-ICONO-SKG.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!--<link href="//db.onlinewebfonts.com/c/f60a8c66a7769db837af63d5d4181a73?family=adineue+PRO+KZ+Light" rel="stylesheet"
        type="text/css" />-->

    <link href="{{  URL::asset('css/mdb.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{  URL::asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{  URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('css/loading.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        .negro {
            color: #000 !important;
        }

        .blanco {
            color: #ffff !important;
        }

        .rojo {
            color: #c10000 !important;
        }

        .activo {
            color: #288799 !important;
        }

    </style>
</head>

<body>

    <div class="contenedor_loader">
        <div class="loader"></div>
    </div>

    <div class="indicador_contenedor">
        <div class="indicador_scroll"></div>
    </div>

    <div id="ir_arriba_boton" class="ocultar">
        <i class="icofont-swoosh-up icofont-3x"></i>
    </div>

    @yield('body')section

    <!--<div class="credits"> -->
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    <!--</div> -->
    <div id="fb-root"></div>

    @include('Menu.footer')

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js')}}"></script>

    <!--<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>-->

    <script src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ URL::asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/venobox/venobox.min.js')}}"></script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v7.0" nonce="eb4wR0jD"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('js/bootstrap.js')}}"></script>

    <script src="{{ URL::asset('js/main.js')}}"></script>
    <script src="{{ URL::asset('js/loading.js')}}"></script>
    <script src="{{ URL::asset('js/mdb.js')}}"></script>



</body>

</html>
