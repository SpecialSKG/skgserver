@extends('template')
@section('titulo', 'SKG')
@section('body')

<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">

        <!--<h1><a href="index.html">SKG</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <span>
            <img src="{{ URL::asset('img/PNG-LOGO.png') }}" alt="Logo" width="250" height="250">
            <p>
                <h2>Una comunidad con el unico
                    <span>objetivo</span> de pasarla bien entre amigos.
                </h2>
            </p>
        </span>

        @include('Menu.nav')

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
