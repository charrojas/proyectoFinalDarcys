@extends('plantillaCatalogo')

@section('contenido')
@foreach ($coctelesE as $item)
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
@foreach ($coctelesA as $item)
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
@foreach ($coctelesT as $item)
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
@foreach ($coctelesI as $item)
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
      <div class="container">
        <section class="py-5">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categorias</h5>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold"><a href="{{route('categoria',$categorias[0]->id_categoria)}}">Cócteles Elegantes</a></strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  @foreach ($coctelesE as $item)
                  <li class="mb-2"><a class="reset-anchor" href="#productView{{$item->id_coctel}}" data-bs-toggle="modal">{{$item->nombre}}</a></li>
                  @endforeach
                  
      
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold"><a href="{{route('categoria',$categorias[1]->id_categoria)}}">Cócteles Infantiles</a></strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  @foreach ($coctelesI as $item)
                  <li class="mb-2"><a class="reset-anchor" href="#productView{{$item->id_coctel}}" data-bs-toggle="modal">{{$item->nombre}}</a></li>
                  @endforeach
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold"><a href="{{route('categoria',$categorias[3]->id_categoria)}}">Cócteles Artesanales</a></strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  @foreach ($coctelesA as $item)
                  <li class="mb-2"><a class="reset-anchor" href="#productView{{$item->id_coctel}}" data-bs-toggle="modal">{{$item->nombre}}</a></li>
                  @endforeach
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold"><a href="{{route('categoria',$categorias[2]->id_categoria)}}">Cócteles de temporada</a></strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  @foreach ($coctelesT as $item)
                  <li class="mb-2"><a class="reset-anchor" href="#productView{{$item->id_coctel}}" data-bs-toggle="modal">{{$item->nombre}}</a></li>
                  @endforeach
                </ul>
                
              </div>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                      <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th-large"></i></a></li>
                      <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th"></i></a></li>
                      
                    </ul>
                  </div>
                </div>
                @yield('categoria')
                <!-- PAGINATION-->
                {{-- <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center justify-content-lg-end">
                    <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav> --}}
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection