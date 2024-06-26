<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Darcy´s</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
</head>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <header class="header bg-white">
            <div class="container px-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand"
                        href="index.html"><span class="fw-bold text-uppercase text-dark">Darcy´s</span></a>
                    <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link" href="{{route('inicio')}}">Inicio</a>
                            </li>
                            {{-- <li class="nav-item">
                                <!-- Link--><a class="nav-link" href="">Tienda</a>
                            </li> --}}
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
                            </li>
                            {{-- <li class="nav-item">
                                <!-- Link--><a class="nav-link" href="">Checkout</a>
                            </li> --}}

                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="{{route('planes')}}"><i class="fas fa-concierge-bell"></i> Catering service</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--  Modal  ver detalle de cada producto -->
        <div class="modal fade" id="productView" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content overflow-hidden border-0">
                    <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-0">
                        <div class="row align-items-stretch">
                            <div class="col-lg-6 p-lg-0"><a
                                    class="glightbox product-view d-block h-100 bg-cover bg-center"
                                    style="background: url(img/product-5.jpg)" href="img/product-5.jpg"
                                    data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a
                                    class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                    href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                    data-glightbox="Red digital smartwatch"></a></div>
                            <div class="col-lg-6">
                                <div class="p-4 my-md-4">
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                        </li>
                                        <li class="list-inline-item m-0 1"><i
                                                class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 2"><i
                                                class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 3"><i
                                                class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 4"><i
                                                class="fas fa-star small text-warning"></i></li>
                                    </ul>
                                    <h2 class="h4">Red digital smartwatch</h2>
                                    <p class="text-muted">$250</p>
                                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                        ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis
                                        dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam
                                        convallis.</p>
                                    <div class="row align-items-stretch mb-4 gx-0">
                                        <div class="col-sm-7">
                                            <div
                                                class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                <span
                                                    class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                                <div class="quantity">
                                                    <button class="dec-btn p-0"><i
                                                            class="fas fa-caret-left"></i></button>
                                                    <input class="form-control border-0 shadow-0 p-0" type="text"
                                                        value="1">
                                                    <button class="inc-btn p-0"><i
                                                            class="fas fa-caret-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5"><a
                                                class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                                                href="cart.html">Add to cart</a></div>
                                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                                            class="far fa-heart me-2"></i>Add to wish list</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">


            {{-- SECCIONES --}}
            <section class="py-5">
                <div class="container-fluid">
                    @yield('titulo')
                </div>
            </section>

            <section class="py-5">
                <div class="container-fluid">
                    @yield('contenido')
                </div>
            </section>

        </div>


        {{-- Footer --}}

        {{-- <footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row py-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Darcy´s</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#!">Douglas Jimenez</a></li>
                            <li><a class="footer-link" href="#!">Alvaro Martinez</a></li>
                            <li><a class="footer-link" href="#!">Randall Casasola</a></li>
                            <li><a class="footer-link" href="#!">Charlotte Rojas</a></li>
                            <li><a class="footer-link" href="#!">Yendry Villalobos</a></li>
                            <li><a class="footer-link" href="#!">Sebastian Cerdas</a></li>

                        </ul>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">-</h6>
                        <ul class="list-unstyled mb-0">

                            <li><a class="footer-link" href="#!">B94110</a></li>
                            <li><a class="footer-link" href="#!">C04603</a></li>
                            <li><a class="footer-link" href="#!">B91709</a></li>
                            <li><a class="footer-link" href="#!">C06875</a></li>
                            <li><a class="footer-link" href="#!">C09323</a></li>
                            <li><a class="footer-link" href="#!">C02019</a></li>
                            <li><a class="footer-link" href="#!"></a></li>
                        </ul>
                    </div>

                </div>
                <div class="border-top pt-4" style="border-color: #1d1d1d !important">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <p class="small text-muted mb-0">&copy; 2023 Todos los derechos reservados</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer> --}}


        <footer class="bg-dark text-white">
            <div class="container py-4">
              <div class="row py-5">
                <div class="col-md-4 mb-3 mb-md-0">
                  <h6 class="text-uppercase mb-3">Atención al cliente</h6>
                  <ul class="list-unstyled mb-0">
                    <li><a class="footer-link" href="#!">Servicios &amp; Dudas</a></li>
                    <li><a class="footer-link" href="#!">Reagendar</a></li>
                    <li><a class="footer-link" href="#!">Cotizaciones</a></li>
                    <li><a class="footer-link" href="#!">Catering service</a></li>
                  </ul>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <h6 class="text-uppercase mb-3">Desarrolladores</h6>
                  <ul class="list-unstyled mb-0">
                             <li><a class="footer-link" href="#!">Douglas Jimenez</a></li>
                            <li><a class="footer-link" href="#!">Alvaro Martinez</a></li>
                            <li><a class="footer-link" href="#!">Randall Casasola</a></li>
                            <li><a class="footer-link" href="#!">Charlotte Rojas</a></li>
                            <li><a class="footer-link" href="#!">Yendry Villalobos</a></li>
                            <li><a class="footer-link" href="#!">Sebastian Cerdas</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <h6 class="text-uppercase mb-3">Redes Sociales</h6>
                  <ul class="list-unstyled mb-0">
                    <li><a class="footer-link" href="#!">Twitter</a></li>
                    <li><a class="footer-link" href="#!">Instagram</a></li>
                    <li><a class="footer-link" href="#!">Tumblr</a></li>
                    <li><a class="footer-link" href="#!">Pinterest</a></li>
                  </ul>
                </div>
              </div>
              <div class="border-top pt-4" style="border-color: #1d1d1d !important">
                <div class="row">
                  <div class="col-md-6 text-center text-md-start">
                    <p class="small text-muted mb-0">&copy; 2023 Todos los derechos reservados.</p>
                  </div>
                  <div class="col-md-6 text-center text-md-end">
                    {{-- <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p> --}}
                    <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
                  </div>
                </div>
              </div>
            </div>
          </footer>
        <!-- JavaScript files-->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/nouislider/nouislider.min.js"></script>
        <script src="vendor/swiper/swiper-bundle.min.js"></script>
        <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="js/front.js"></script>
        <script>
            // ------------------------------------------------------- //
            //   Inject SVG Sprite - 
            //   see more here 
            //   https://css-tricks.com/ajaxing-svg-sprite/
            // ------------------------------------------------------ //
            function injectSvgSprite(path) {

                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                    var div = document.createElement("div");
                    div.className = 'd-none';
                    div.innerHTML = ajax.responseText;
                    document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            // this is set to BootstrapTemple website as you cannot 
            // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
            // while using file:// protocol
            // pls don't forget to change to your domain :)
            injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">
    </div>


</body>

</html>
