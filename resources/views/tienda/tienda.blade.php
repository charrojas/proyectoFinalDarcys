@extends('plantillaCatalogo')
@section('contenido')
<div class="page-holder">
    <!-- navbar-->
   
    <!--  Modal -->
    @foreach ($cocteles as $item)
    <div class="modal fade" id="productView{{$item->id_coctel}}" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden border-0">
          <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body p-0">
            <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style=" width: 352px;background: url(img/{{$item->img}})" href="img/{{$item->img}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
              <div class="col-lg-6">
                <div class="p-4 my-md-4">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                  </ul>
                  <h2 class="h4">{{$item->nombre}}</h2>
                  <p class="text-muted">${{$item->precio}}</p>
                  <p class="text-sm mb-4">{{$item->descripcion}}</p>
                         
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <!-- HERO SECTION-->
    <div class="container">
      <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/hero-banner-alt.jpg)">
        <div class="container py-5">
          <div class="row px-4 px-lg-5">
            <div class="col-lg-6">
              <p class="text-muted small text-uppercase mb-2">Nuevo local</p>
              <h1 class="h2 text-uppercase mb-3">30% DE DESCUENTO EN INAUGURACIÓN</h1><a class="btn btn-dark" href="#">Reserva tu espacio</a>
            </div>
          </div>
        </div>
      </section>
      <!-- CATEGORIES SECTION-->
      <section class="pt-5">
        <header class="text-center">
          <p class="small text-muted small text-uppercase mb-1">COLECCIONES CUIDADOSAMENTE CREADAS</p>
          <h2 class="h5 text-uppercase mb-4">NAVEGA POR NUESTRAS CATEGORÍAS</h2>
        </header>
        <div class="row">
          <div class="col-md-4"><a class="category-item" href="{{route('categoria',$categoria[0]->id_categoria)}}"><img class="img-fluid" src="img/cat-img-1.jpg" alt=""/><strong class="category-item-title">Elegantes</strong></a>
          </div>
          <div class="col-md-4"><a class="category-item mb-4" href="{{route('categoria',$categoria[1]->id_categoria)}}"><img class="img-fluid" src="img/cat-img-2.jpg" alt=""/><strong class="category-item-title">Infantil</strong></a><a class="category-item" href="{{route('categoria',$categoria[3]->id_categoria)}}"><img class="img-fluid" src="img/cat-img-3.jpg" alt=""/><strong class="category-item-title">Artesanales</strong></a>
          </div>
          <div class="col-md-4"><a class="category-item" href="{{route('categoria',$categoria[2]->id_categoria)}}"><img class="img-fluid" src="img/cat-img-4.jpg" alt=""/><strong class="category-item-title">Temporada</strong></a>
          </div>
        </div>
      </section>
      <!-- TRENDING PRODUCTS-->
      <section class="py-5">
        <header>
          <p class="small text-muted small text-uppercase mb-1">HECHO PARA USTEDES</p>
          <h2 class="h5 text-uppercase mb-4">LOS PRODUCTOS MÁS POPULARES</h2>
        </header>
        <div class="row">
          <!-- PRODUCT-->
          @foreach ($cocteles as $item)
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="product text-center">
              <div class="position-relative mb-3">
                <div class="badge text-white bg-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="img/{{$item->img}}" alt="..."></a>
                <div class="product-overlay">
                  <ul class="mb-0 list-inline">
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark">Ven y probalo</a></li>
                    <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView{{$item->id_coctel}}" data-bs-toggle="modal" data-bs-target="#productView{{$item->id_coctel}}">
                      <i class="fas fa-expand"></i>
                  </a></li>
                  </ul>
                </div>
              </div>
              <h6> <a class="reset-anchor" href="detail.html">{{$item->nombre}}</a></h6>
              <p class="small text-muted">${{$item->precio}}</p>
            </div>
          </div> 
          @endforeach
        </div>
      </section>
      <!-- SERVICES-->
      <section class="py-5 bg-light">
        <div class="container">
          <div class="row text-center gy-3">
            <div class="col-lg-4">
              <div class="d-inline-block">
                <div class="d-flex align-items-end">
                  <svg class="svg-icon svg-icon-big svg-icon-light">
                    <use xlink:href="#delivery-time-1"> </use>
                  </svg>
                  <div class="text-start ms-3">
                    <h6 class="text-uppercase mb-1">Envios a todo el pais</h6>
                    <p class="text-sm mb-0 text-muted">cotiza tu pedido</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="d-inline-block">
                <div class="d-flex align-items-end">
                  <svg class="svg-icon svg-icon-big svg-icon-light">
                    <use xlink:href="#helpline-24h-1"> </use>
                  </svg>
                  <div class="text-start ms-3">
                    <h6 class="text-uppercase mb-1">servicio 24 x 7 </h6>
                    <p class="text-sm mb-0 text-muted">cotiza según tu horario</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="d-inline-block">
                <div class="d-flex align-items-end">
                  <svg class="svg-icon svg-icon-big svg-icon-light">
                    <use xlink:href="#label-tag-1"> </use>
                  </svg>
                  <div class="text-start ms-3">
                    <h6 class="text-uppercase mb-1">Ofertas de apertura</h6>
                    <p class="text-sm mb-0 text-muted">cotiza sin compromiso</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- NEWSLETTER-->
      
    </div>
    
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  @if ( session('CraerArticulo') )
  <div> 
      <script> 
          Swal.fire({
          icon: 'success',
          title: 'Excelente',
          text: '{{session('CraerArticulo')}}'
          })
      </script>
  </div>
  
  @endif
  
  @if ( session('Cancelar') )
  <div> 
      <script> 
          Swal.fire({
          icon: 'error ',
          title: 'ERROR',
          text: '{{session('Cancelar')}}'
          })
      </script>
  </div>
  
  @endif
 
@endsection