@extends('tienda.plantillaCategoria')
@section('categoria')

@foreach ($cocteles as $item)
<div class="modal fade" id="productView{{$item->id_coctel}}" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content overflow-hidden border-0">
      <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="row align-items-stretch">
          <div class="col-lg-6 p-lg-0"><a class=" img-fluid glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/{{$item->img}})" href="img/{{$item->img}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
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

     <div class="row">
                  @foreach ($cocteles as $item)
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/{{$item->img}}" alt="..." style="    height: 291px;"></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark">Ven y probalo</a></li>
                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView{{$item->id_coctel}}" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="">{{$item->nombre}}</a></h6>
                      <p class="small text-muted">${{$item->precio}}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
@endsection