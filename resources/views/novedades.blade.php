@extends('template')
@section('titulo', 'Novedades')
@section('body')

@include('Menu.nav')
<br><br>

<div class="card bg-transparent" style="border: 0px">
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Novedades</h2>
                <p>Cambios en el Servidor</p>
            </div>

            <div class="row">
                <div class="col align-self-center">

                    <h3 class="resume-title">Mantenimiento</h3>
                    <div class="resume-item">
                        <h4>Servidor en Mantenimiento</h4>
                        <h5>05/07/2020</h5>
                        <p>
                            Nos tomaremos el tiempo para poder realizar todas las pruebas,
                            por eso el tiempo de 2 semanas, también estas como la cuarentena quien sabe y se extienda.
                        </p>
                    </div>

                    <h3 class="resume-title">Resultados</h3>
                    <div class="resume-item">
                        <h4>Resultados de la votacion.</h4>
                        <h5>04/07/2020</h5>
                        <p>
                            La votacion fue arrasadora con la opcion numero 3, de esa manera se “intentará” llevar acabo.
                        </p>
                    </div>

                    <h3 class="resume-title">Votacion</h3>
                    <div class="resume-item pb-0">
                        <h4>A que version se mudara</h4>
                        <h5>29/06/2020</h5>
                        <p>
                            Consulta ala comunidad aque version trasladar el servidor de Minecraft,
                            Actualmente en la version 1.15.2
                        </p>
                        <p>
                            <ul>
                                <li>Regresar a la versión 1.14.4</li>
                                <li>Mantenernos en la versión 1.15.2</li>
                                <li>Intentar migrar ala 1.16, pero VANILLA y progresivamente incluyendo plugin.</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <!--
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>Senior graphic design specialist</h4>
                        <h5>2019 - Present</h5>
                        <p><em>Experion, New York, NY </em></p>
                        <p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                            </ul>
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Graphic design specialist</h4>
                        <h5>2017 - 2018</h5>
                        <p><em>Stepping Stone Advertising, New York, NY</em></p>
                        <p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                            </ul>
                        </p>
                    </div>
                </div>
            -->
            </div>

        </div>
    </section>
    <!-- End Resume Section -->

</div>
<br><br>
@endsection
