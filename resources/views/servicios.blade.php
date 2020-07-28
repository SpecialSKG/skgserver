@extends('template')
@section('titulo', 'Server')
@section('body')

@include('Menu.nav')
<br><br>

<div class="card bg-transparent z-depth-0" style="border: 0px">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Server</h2>
                <p>SKG Network</p>
            </div>

            <div class="row justify-content-md-center">
                <!-- <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left"> -->
                <div class="col-lg-8 pt-4 pt-lg-0 text-center" data-aos="fade-left">

                    <p class="font-italic">
                        Este es un servidor dedicado para usuarios Premium/No Premium FREE. Con la última versión de
                        Minecraft 1.16.1 para que te puedas unir a la comunidad.
                    </p>
                    <h3>IP: play.skgteam.net</h3>
                    <p class="font-italic">
                        Sumérgete con nosotros en aquella experiencia Vanilla y poder explorar el mundo como el
                        inframundo. Investigando nuevas estructuras y nuevos enemigos que estarán al asecho si no estas
                        lo suficiente preparado te aran saltar de tu asiento.
                    </p>
                    <p class="font-italic">
                        Existen algunos rangos que puedes adquirir en este servidor, aclaramos que no es necesario tener
                        alguno de ellos para poder jugar. Pero si, nos ayudaras para poder mantener el servidor y que
                        sea renovado el próximo año.
                    </p>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-left">
                    <div class="cuerpo">
                        <div class="contenedor">


                            <div class="carta">
                                <div class="carta-encabezado">
                                    <img src="{{ URL::asset('img/coin.png') }}" alt="">
                                </div>
                                <div class="carta-iconos">
                                    <li class="agrandar"><a href=""><span class="icofont-ui-chat"></span></a></li>
                                    <li class="agrandar"><a href=""><span class="icofont-ui-flash-light"></span></a>
                                    </li>
                                    <li class="agrandar"><a href=""><span class="icofont-ui-game"></span></a></li>
                                </div>

                                <div class="carta-contenido">
                                    <div class="info-personal desplazar">
                                        SKG Coins
                                    </div>
                                    <div class="info-personal desplazar">
                                        Compra de cierta cantidad de dinero para la tienda
                                    </div>
                                    <div class="info-personal desplazar">
                                        Y donacion para el Host.
                                    </div>
                                </div>

                                <div class="carta-aciones">
                                    <button class="btn aqua-gradient btn-block btn-rounded" data-toggle="modal"
                                        data-target="#SKGCoin">
                                        <span class="icofont-ui-rate-add blanco">Sobre:</span>
                                    </button>
                                </div>
                            </div>


                            <div class="carta">
                                <div class="carta-encabezado">
                                    <img src="{{ URL::asset('img/oro.jpg') }}" alt="">
                                </div>
                                <div class="carta-iconos">
                                    <li class="agrandar"><a href=""><span class="icofont-ui-chat"></span></a></li>
                                    <li class="agrandar"><a href=""><span class="icofont-ui-flash-light"></span></a>
                                    </li>
                                    <li class="agrandar"><a href=""><span class="icofont-ui-game"></span></a></li>
                                </div>

                                <div class="carta-contenido">
                                    <div class="info-personal desplazar">
                                        Rango GOLD
                                    </div>
                                    <div class="info-personal desplazar">
                                        Adquieres el primer rango
                                    </div>
                                    <div class="info-personal desplazar">
                                        de nuestro servidor
                                    </div>
                                </div>

                                <div class="carta-aciones">
                                    <button class="btn aqua-gradient btn-block btn-rounded" data-toggle="modal"
                                        data-target="#RangoGOLD">
                                        <span class="icofont-ui-rate-add blanco">Sobre:</span>
                                    </button>
                                </div>
                            </div>


                            <div class="carta">
                                <div class="carta-encabezado">
                                    <img src="{{ URL::asset('img/diamante.jpg') }}" alt="">
                                </div>
                                <div class="carta-iconos">
                                    <li class="agrandar"><a href=""><span class="icofont-ui-chat"></span></a></li>
                                    <li class="agrandar"><a href=""><span class="icofont-ui-flash-light"></span></a>
                                    </li>
                                    <li class="agrandar"><a href=""><span class="icofont-ui-game"></span></a></li>
                                </div>

                                <div class="carta-contenido">
                                    <div class="info-personal desplazar">
                                        Rango DIAMOND
                                    </div>
                                    <div class="info-personal desplazar">
                                        Adquieres el segundo rango
                                    </div>
                                    <div class="info-personal desplazar">
                                        de nuestro servidor
                                    </div>
                                </div>

                                <div class="carta-aciones">
                                    <button class="btn aqua-gradient btn-block btn-rounded" data-toggle="modal"
                                        data-target="#RangoDIAMOND">
                                        <span class="icofont-ui-rate-add blanco">Sobre:</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <br>

            <!-- <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div>

            </div> -->




        </div>
    </section>
    <!-- End Services Section -->

    <section id="about" class="about">
        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="section-title">
                <h2>Paises de miembros</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <img src="{{ URL::asset('ico/unitedstates_flags_flag_9093.ico') }}" alt="">
                        <h3>Estados Unidos</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <img src="{{ URL::asset('ico/Mexico_flags_flag_9191.ico') }}" alt="">
                        <h3>Mexico</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="icon-box align-center">
                        <img src="{{ URL::asset('ico/Guatemala_flags_flag_9239.ico') }}" alt="">
                        <h3>Guatemala</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="icon-box align-center">
                        <img src="{{ URL::asset('ico/ElSalvador_flags_flag_9267.ico') }}" alt="">
                        <h3>El Salvador</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="icon-box align-center">
                        <img src="{{ URL::asset('ico/Honduras_flags_flag_9235.ico') }}" alt="">
                        <h3>Honduras</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <img src="{{ URL::asset('ico/Colombia_flags_flag_9283.ico') }}" alt="">
                        <h3>Colombia</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <img src="{{ URL::asset('ico/Ecuador_flags_flag_9268.ico') }}" alt="">
                        <h3>Ecuador</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <img src="{{ URL::asset('ico/Bolivia_flags_flag_9306.ico') }}" alt="">
                        <h3>Bolivia</h3>
                    </div>
                </div>

                <!--
            <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                    <h3>Flavor Nivelanda</h3>
                </div>
            </div>
            -->
            </div>

            <br>

            <div class="row justify-content-md-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=UvK-NME5jqs&feature=youtu.be"></iframe>
                </div>
            </div>

        </div>
        <!-- End Interests -->
    </section>
</div>
<br><br>

@include('Menu.servermodal')
@endsection
