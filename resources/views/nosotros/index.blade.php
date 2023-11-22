@extends('plantillaCatalogo')

@section('contenido')
    <div class="page-holder">
        <!-- Contenido de la página -->

        <section class="nosotros-section mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Sobre Nosotros - Darcy's</h2>
                        <p class="section-subtitle">Casa Coctelera</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h3>Nuestra Historia</h3>
                            <p>Desde nuestros humildes comienzos, Darcy's se ha dedicado a la creación de cócteles
                                artesanales con pasión y dedicación. Fundada con la visión de ofrecer experiencias únicas a
                                nuestros clientes, hemos crecido para convertirnos en una marca reconocida por la calidad y
                                la innovación en el mundo de los cócteles.</p>
                        </div>
                        <div>
                            <h3>Nuestra Filosofía</h3>
                            <p>En Darcy's, creemos en la artesanía y la calidad. Nos esforzamos por desarrollar nuevos
                                sabores que deleiten a nuestros clientes y nos mantenemos comprometidos con estándares
                                excepcionales en cada paso de nuestro proceso de producción. Nos enorgullece ser líderes en
                                el mercado nacional de cócteles artesanales.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                  
                        <div class="embed-responsive embed-responsive-16by9" style="margin-top: 30px;">
                            <iframe class="embed-responsive-item" 
                                src="https://www.youtube.com/embed/l6xu_f8unac?si=u9Rz73JDaJOsRXcR"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen
                                style="width: 80%; max-width: 100%; height: 272px; max-height: 100%"></iframe>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>

    </div>
@endsection
