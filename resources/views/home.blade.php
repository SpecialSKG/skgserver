@extends('template')
@section('titulo', 'Inicio')
@section('body')

<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">

        <!--<h1><a href="index.html">SKG</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <span>
            <img src="{{ URL::asset('img/SKG-LOGO-PNG2.png') }}" alt="Logo" width="200" height="125">

            <h2>Una comunidad con el unico <span>objetivo</span> del poder pasarla bien</h2>
        </span>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('acerca') }}">Acerca de</a></li>
                <li><a href="{{ route('novedades') }}">Novedades</a></li>
                <li><a href="{{ route('servicios') }}">Servicios</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <!--<div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
        </div> -->

    </div>
</header>
<!-- End Header -->

@endsection
