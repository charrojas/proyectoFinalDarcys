@extends('plantilla')

@section('gestion_nombre', 'Agregar nuevo cóctel')

@section('contenido')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<h3 class="text-secondary mb-4">Editando el Coctel: {{ $ite->nombre }} </h3>
    <hr>

    <div class="row">

        <div class="col-4" id="titulo">


            <form action="{{ route('cocteles.update', $ite) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="mt-2">
                    <label for="" id="tituloLabel"> Nombre </label>
                    <input type="text" value="{{ $ite->nombre }}" class="form-control" id="inputtitulopag"
                        name="nombre" required placeholder="Escriba el nombre">
                </div>
                <div class="mt-2">
                    <label for="" id="tituloLabel"> Descripción </label>
                    <textarea cols="30" rows="3" type="text" class="form-control" id="inputtitulopag" name="descripcion"
                        placeholder="Escriba una descripción" >{{ $ite->descripcion }}</textarea>
                </div>
                <div class="mt-2">
                    <label for="" id="tituloLabel"> Precio </label>
                    <input type="text" value="{{ $ite->precio }}" class="form-control" id="inputtitulopag"
                        name="precio" required placeholder="00.00">
                </div>
                <div class="mt-2">
                    <label for="" id="tituloLabel"> Disponible </label>
                    <select class="form-select" aria-label="Default select example" name="disponibilidad">
                        @if ($ite->disponibilidad==1)
                        <option value="1">Si</option>
                        <option value="0">No</option>
                        @else
                        <option value="1">Si</option>
                        <option value="0">No</option>
                        @endif
                        
                    </select>
                </div>
                <div class="mt-2">
                    <label for="" id="tituloLabel">Categoria</label>
                    <select class="form-select" aria-label="Default select example" name="id_categoria">
                        <option value="{{ $cat[0]->id_categoria }}" selected>{{ $cat[0]->nombre }}</option>
                        @foreach ($cate as $item)
                            @if ($item->id_categoria !== $cat[0]->id_categoria)
                                <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                
                <div class="mt-2">
                    <label for="" id="tituloLabel"> Imagen </label>
                    <input class="form-control @error('img') is-invalid @enderror" type="file" name="nueva_img"
                        accept="image/*">
                    @if ($ite->img)
                        <div class="text-center">
                            <img src="/img/{{ $ite->img }}" class="mt-2 rounded" alt="{{ $ite->img }}"
                                style="width:200px; height: 200px; object-fit: cover;">
                        </div>
                    @endif
                </div>

                
                <div class="mt-4">

                    <button class="btn btn-primary">Actualizar</button>

                </div>

            </form>

        </div>
        <div class="col-7" id="tablita">

            <div class="card-body">

                <div class="mb-3">

                    <form id="formularioCocteles" action="{{route('coctelesIngredientes.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="row">

                                <div class="col-10">

                                    <div class="row">

                                        <div class="col">
                                            <div class="mt-2">

                                                <input type="hidden" name="id_coctel" value="{{ $ite->id_coctel }}">

                                                <label for="" id="tituloLabel"> Ingredientes </label>
                                                <select style="width: 260px" class="form-select" aria-label="Default select example"
                                                    name="id_ingrediente">
                                                    <option selected>Seleccione un ingrediente</option>
                                                     @foreach ($ingredientes as $item)
                                                     <option value="{{$item->id_ingrediente}}">{{$item->nombre}}</option>
                                                     @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mt-2">
                                                <label for="" id="tituloLabel"> Cantidad </label>
                                                <input type="number" value="" class="form-control"
                                                    id="inputtitulopag" name="cantidad" placeholder="0" required
                                                    min="0" pattern="\d+">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-2">

                                    <div class="mt-4" style="padding-top: 15px">

                                        <button style="margin-top: -11px;" class="btn btn-primary">+</button>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </form>

                </div>


                <div class="card-body border p-3 rounded-2">
                    <table class="datatable table table-hover table-bordered text-center">


                        <thead class="bg-primary">
                            <tr>
                               
                                <th style="background-color: #25bfab; color: #F2F2F2" class="text-center">Ingrediente</th>

                                <th style="background-color: #25bfab; color: #F2F2F2" class="text-center">Cantidad</th>
                                <th style="background-color: #25bfab; color: #F2F2F2" class="text-center">Acciones</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($datos as $i)
                                <tr>
                                    
                                    <td class="text-center">{{ $i->ingrediente->nombre }}</td>

                                    <td class="text-center">{{ $i->cantidad }}</td>


                                    <td class="text-center d-flex justify-content-center">

                                        <form action="{{ route('coctelesIngredientes.destroy', $i) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger me-1"><b>-</b></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

                


            </div>

        </div>
    </div>
    
@endsection
