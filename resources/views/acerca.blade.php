@extends('template')
@section('titulo', 'Nosotros')
@section('body')

<div class="row">
    <div class="container">

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a class="negro" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="active"><a class="negro" href="{{ route('acerca') }}">Acerca de</a></li>
                <li><a class="negro" href="{{ route('novedades') }}">Novedades</a></li>
                <li><a class="negro" href="{{ route('servicios') }}">Servicios</a></li>
                <li><a class="negro" href="{{ route('portafolio') }}">Portafolio</a></li>
                <li><a class="negro" href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </nav>

    </div>
</div>
<br><br>

<!-- ======= About Section ======= -->

<div class="card bg-transparent" style="border: 0px">
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>Acerca de</h2>
                <p>Nosotros</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ URL::asset('img/SKG-LOGO.jpg') }}" class="img-fluid" alt="">
                </div>
                <!-- <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left"> -->
                <div class="col-lg-8 pt-4 pt-lg-0" data-aos="fade-left">
                    <h3>SkyGround Team</h3>
                    <br><br>
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
                    <!--
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 1 May 1995</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +123 456 7890</li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 30</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                    -->

                </div>
            </div>

        </div>
        <!-- End About Me -->

        <!-- ======= Counts ======= -->
        <!-- <div class="counts container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <span data-toggle="counter-up">232</span>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="icofont-document-folder"></i>
                        <span data-toggle="counter-up">521</span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="icofont-live-support"></i>
                        <span data-toggle="counter-up">1,463</span>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="icofont-users-alt-5"></i>
                        <span data-toggle="counter-up">15</span>
                        <p>Hard Workers</p>
                    </div>
                </div>

            </div>

        </div>-->
        <!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <!--<div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>-->
        <!-- End Skills -->

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

        </div>
        <!-- End Interests -->

        <!-- ======= Testimonials ======= -->
        <div class="testimonials container">

            <div class="section-title">
                <h2>Administración</h2>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Las cosas no tienen por qué cambiar el mundo para ser importantes. (Steve Jobs)
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="https://minotar.net/avatar/JamesSKG.png" class="testimonial-img" alt="">
                    <h3>James SKG</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Una vez aceptamos nuestros límites, vamos más allá de estos. (Albert Einstein)
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <!--<img src="{{ URL::asset('img/testimonials/testimonials-2.jpg') }}"-->
                    <img src="https://minotar.net/avatar/SpecialSKG.png" class="testimonial-img" alt="">
                    <h3>Special SKG</h3>
                    <h4>Programmer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        El momento que da más miedo es siempre justo antes de empezar.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <!--<img src="{{ URL::asset('img/testimonials/testimonials-2.jpg') }}"-->
                    <img src="https://minotar.net/avatar/RodriSKG.png" class="testimonial-img" alt="">
                    <h3>Rodri SKG</h3>
                    <h4>Ceo &amp; Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        No importa lo que pase, siempre tendrás una historia que contar.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <!--<img src="{{ URL::asset('img/testimonials/testimonials-2.jpg') }}"-->
                    <img src="https://minotar.net/avatar/xJavierx503.png" class="testimonial-img" alt="">
                    <h3>Javier SKG</h3>
                    <h4>Programmer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Rara vez nos damos cuenta que estamos rodeados por lo extraordinario.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <!--<img src="{{ URL::asset('img/testimonials/testimonials-2.jpg') }}"-->
                    <img src="https://minotar.net/avatar/Razorlance.png" class="testimonial-img" alt="">
                    <h3>Razor SKG</h3>
                    <h4>Designer</h4>
                </div>

            </div>

        </div>
        <!-- End Testimonials  -->

    </section>


</div>

<br><br>
<!-- End About Section -->

@endsection
