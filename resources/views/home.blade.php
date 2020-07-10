@extends('template')
@section('titulo', 'SKG')
@section('body')

<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">

        <!--<h1><a href="index.html">SKG</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <span>
            <img src="{{ URL::asset('img/SKG-LOGO-PNG2.png') }}" alt="Logo" width="200" height="125">
            <p>
                <h2>Una comunidad con el unico
                    <span>objetivo</span> de pasarla bien entre amigos.
                </h2>
            </p>
        </span>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a class="negro" href="{{ route('inicio') }}">Inicio</a></li>
                <li><a class="negro" href="{{ route('acerca') }}">Acerca de</a></li>
                <li><a class="negro" href="{{ route('novedades') }}">Novedades</a></li>
                <li><a class="negro" href="{{ route('servicios') }}">Servicios</a></li>
                <li><a class="negro" href="{{ route('portafolio') }}">Portafolio</a></li>
                <li><a class="negro" href="{{ route('contacto') }}">Contacto</a></li>
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
