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
    <link href="{{  URL::asset('img/SKG-LOGO-PNG2.png') }}" rel="icon">
    <link href="{{  URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{  URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{  URL::asset('vendor/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{  URL::asset('css/style.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        #page-top {
            position: relative;
            min-height: 100vh;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 2.5rem;
            /* Footer height */
        }

        .fondo1 {
            /*height: 100vh;*/
            background-image: url("{{  URL::asset('img/fondo.jpg') }}") !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            overflow: scroll;
        }

        .blanco {
            background: rgba(255, 255, 255, 0.6);
            /*color: #FFFFFF*/
        }

        .top-nav-collapse {
            /*background: rgba(63,63,191,0.7) !important;*/
            background: rgba(209, 209, 209, 0.9) !important;
            /*color: #FFFFFF !important;*/
        }

        .status {
            background-color: #ccc;
            border-radius: 50%;
            display: inline-block;
            height: 10px;
            width: 10px;
        }

        .status.online {
            background-color: #55ce63;
        }

        #content-wrapper {
            background: rgba(0, 0, 0, 0.0) !important;
            /*padding-bottom: 2.5rem !important;*/
        }

        /* .t {
      height: 655px;
      } */

        .md-form {
            margin-top: 0rem !important;
        }

        .md-form .prefix~label {
            margin-left: 3rem !important;
        }

        .modal-dialog.cascading-modal {
            margin-top: 1% !important;
        }

        .container-fluid {
            margin-top: 25px;
        }

        @import url(//fonts.googleapis.com/css?family=Lato:300:400);

        /*body {
      margin:0;
    }

    h1 {
      font-family: 'Lato', sans-serif;
      font-weight:300;
      letter-spacing: 2px;
      font-size:48px;
    }
    p {
      font-family: 'Lato', sans-serif;
      letter-spacing: 1px;
      font-size:14px;
      color: #333333;
      }*/

        /* .header {
        position: relative;
      } */

        .logo {
            width: 50px;
            fill: white;
            padding-right: 15px;
            display: inline-block;
            vertical-align: middle;
        }

        .inner-header {
            height: 65vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px;
            /*Fix for safari gap*/
            min-height: 100px;
            max-height: 100px;
        }

        .content {
            position: relative;
            height: 10vh;
            text-align: center;
            background-color: white;
        }

        /* Animation */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /*Shrinking for mobile*/
        @media (max-width: 768px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }

            h1 {
                font-size: 24px;
            }
        }

        .btn {
            border: 0px solid #0000 !important;
            /*border-radius: 0rem !important;*/
        }

    </style>
</head>

<body>
    @yield('body')section

    <!--<div class="credits"> -->
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    <!--</div> -->

    <footer>
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                </g>
            </svg>
        </div>

        <div class="content flex">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span style="color: #000">&copy; Copyright 2020</span>
                    <span style="color: #c10000">Todos los derechos reservados.</span>
                </div>
            </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ URL::asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/venobox/venobox.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>
