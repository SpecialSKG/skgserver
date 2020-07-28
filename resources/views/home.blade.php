@extends('template')
@section('titulo', 'SKG')
@section('body')

<!-- ======= Header ======= -->
<header id="header" class="header-tops">
    <div class="container">

        <!--<h1><a href="index.html">SKG</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <span>
            <img src="{{ URL::asset('img/PNG-LOGO.png') }}" alt="Logo" width="250" height="250"
                class="animated rollIn delay-1s">
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
    <br>
    <section id="contact" class="contact">
        <div class="container">

            <div class="row mt-2">

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">

                    </div>
                </div>

            </div>
        </div>
    </section>
</header>
<!-- End Header -->

@endsection
