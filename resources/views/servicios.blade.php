@extends('template')
@section('titulo', 'Servidor')
@section('body')

@include('Menu.nav')
<br><br>

<div class="card bg-transparent z-depth-0" style="border: 0px">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Server</h2>
                <p>Nuestro Servidor</p>
            </div>

            <br>

            <div class="row">
                <!-- <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left"> -->
                <div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-left">
                    <h3>SkyGround Team</h3>

                    <div class="contenedor">
                        <div class="carta">
                            <div class="carta-encabezado">
                                <img src="{{ URL::asset('img/oro.jpg') }}" alt="">
                            </div>
                            <div class="carta-iconos">
                                <li class="agrandar"><a href=""><span class="icofont-ui-chat"></span></a></li>
                                <li class="agrandar"><a href=""><span class="icofont-ui-flash-light"></span></a></li>
                                <li class="agrandar"><a href=""><span class="icofont-ui-game"></span></a></li>
                            </div>

                            <div class="carta-contenido">
                                <div class="info-personal desplazar">
                                    RANGO ORO
                                </div>
                                <div class="info-personal desplazar">
                                    El Salvador
                                </div>
                                <div class="info-personal desplazar">
                                    <p>Programador</p>
                                </div>
                            </div>

                            <div class="carta-aciones">
                                <button class="botones agrandar">
                                    <span class="icofont-ui-email">Enviar corrreo</span>
                                </button>
                            </div>
                        </div>

                        <div class="carta">
                            <div class="carta-encabezado">
                                <img src="{{ URL::asset('img/SKG-LOGO.jpg') }}" alt="">
                            </div>
                            <div class="carta-iconos">
                                <li class="agrandar"><a href=""><span class="icofont-ui-chat"></span></a></li>
                                <li class="agrandar"><a href=""><span class="icofont-ui-flash-light"></span></a></li>
                                <li class="agrandar"><a href=""><span class="icofont-ui-game"></span></a></li>
                            </div>

                            <div class="carta-contenido">
                                <div class="info-personal desplazar">
                                    Jose Alvaro
                                </div>
                                <div class="info-personal desplazar">
                                    El Salvador
                                </div>
                                <div class="info-personal desplazar">
                                    <p>Programador</p>
                                </div>
                            </div>

                            <div class="carta-aciones">
                                <button class="botones agrandar">
                                    <span class="icofont-ui-email">Enviar corrreo</span>
                                </button>
                            </div>
                        </div>

                        <div class="carta">
                            <div class="carta-encabezado">
                                <img src="{{ URL::asset('img/diamante.jpg') }}" alt="">
                            </div>
                            <div class="carta-iconos">
                                <li class="agrandar"><a href=""><span class="icofont-ui-chat"></span></a></li>
                                <li class="agrandar"><a href=""><span class="icofont-ui-flash-light"></span></a></li>
                                <li class="agrandar"><a href=""><span class="icofont-ui-game"></span></a></li>
                            </div>

                            <div class="carta-contenido">
                                <div class="info-personal desplazar">
                                    RANGO DIAMANTE
                                </div>
                                <div class="info-personal desplazar">
                                    El Salvador
                                </div>
                                <div class="info-personal desplazar">
                                    <p>Programador</p>
                                </div>
                            </div>

                            <div class="carta-aciones">
                                <button class="botones agrandar">
                                    <span class="icofont-ui-email">Enviar corrreo</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <br>

                    <p class="font-italic">
                        Somos un grupo de amigos que decidió dar un paso más y comenzar un proyecto que poco a poco se
                        fue formando una comunidad con miembros de diferentes países.
                    </p>
                    <p class="font-italic">
                        Evoluciono de un servidor anterior de MC y poco a poco fue tomando su propia forma, haciendo que
                        crezca de manera progresiva y nosotros mejorando los aspectos en la forma que podemos.
                    </p>
                    <p class="font-italic">
                        Investigando para mejorar y nosotros también ser parte de la mejora, ya que somos dueños, pero
                        también somos jugadores.
                    </p>

                    <br>

                </div>
            </div>

            <div class="row">
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

            </div>

            <br>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ URL::asset('img/update1.16.1.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ URL::asset('img/update1.16.1.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ URL::asset('img/update1.16.1.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
            <br>

        </div>
    </section>
    <!-- End Services Section -->
</div>
<br><br>
@endsection
