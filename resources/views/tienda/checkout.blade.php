@extends('plantillaCatalogo')

@section('contenido')
    <div class="container">

        <section class="py-5 bg-light">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">

            <h2 class="h5 text-uppercase mb-4">Registro de datos</h2>
            <div class="row">
                <div class="col-lg-8">
                  <form action="{{route('paypal')}}" method="post">
                  @csrf
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <label class="form-label text-uppercase" for="nombre">Nombre completo</label>
                            <input class="form-control" type="text" name="nombre" placeholder="Ingrese su nombre completo">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-uppercase" for="apellidos">Apellidos</label>
                            <input class="form-control" type="text" name="apellidos" placeholder="Ingrese sus apellidos">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-uppercase" for="direccion">Dirección</label>
                            <input class="form-control" type="text" name="direccion" placeholder="Ingrese su dirección">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-uppercase" for="telefono">Número telefónico</label>
                            <input class="form-control" type="tel" name="telefono" placeholder="Ej: +02 245354745">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-uppercase" for="correo">Correo electrónico</label>
                            <input class="form-control" type="email" name="correo" placeholder="Ej: ejemplo@dominio.com">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-uppercase" for="plan">Fecha del evento:</label>
                            <input name="fecha_evento" type="date" id="plan" class="form-control">
                        </div>
                        <div class="col-lg-8">
                            <div class="form-check">
                                <input class="form-check-input" name="recibir_publicidad" type="checkbox">
                                <label class="form-check-label" for="recibir_publicidad">Proporciona permiso para utilizar sus datos?</label>
                            </div>
                        </div>
                        <input hidden type="text" name="tipo_plan" value="{{$tipoPlan}}">

                        <input hidden type="numer" name="price" value="{{$precio}}">
                        <div class="col-lg-12">
                            <button class="btn btn-dark" type="submit"><i class="far fa-credit-card"></i> Pagar ya</button>
                        </div>
                    </div>
                </form>
                
                </div>
                <!-- ORDER SUMMARY-->
                <div class="col-lg-4">
                    <div class="card border-0 rounded-0 p-lg-4 bg-light">
                        <div class="card-body">
                            <h5 class="text-uppercase mb-4">Su pedido</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="small fw-bold">{{$tipoPlan}}</strong><span
                                        class="text-muted small">${{$precio}}</span></li>
                                <li class="border-bottom my-2"></li>
                                <li class="d-flex align-items-center justify-content-between"><strong
                                        class="text-uppercase small fw-bold">Total</strong><span>${{$precio}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
