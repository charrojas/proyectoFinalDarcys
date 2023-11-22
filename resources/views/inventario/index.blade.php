@extends('plantilla')

@section('gestion_nombre', 'Inventario de Ingredientes')

@section('contenido')
    <section class="content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4" style="margin: 5%; border-color: #25bfab!important;">
                    <div class="card-body">


                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                <div class="border p-3 rounded">
                                    <div class="card-title d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div><i class="fadeIn animated bx bx-notepad me-1 font-22"
                                                    style="color: #25bfab; border-color: #25bfab;"></i>

                                            </div>
                                            <h5 class="mb-0 text-dark" title="">Inventario de Ingredientes</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#modalAgregarIngrediente"
                                                    style="background-color: #003a2f; border-color: #112a2a;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Agregar ingrediente">Registrar</button>
                                            </div>

                                            <div class="modal fade" id="modalAgregarIngrediente" tabindex="-1"
                                                aria-labelledby="modalAgregarIngredienteLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalAgregarIngredienteLabel">
                                                                Agregar ingrediente al inventario</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('ingredientes.store')}}" method="post">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                    <label for="nombreLabel"
                                                                        class="col-sm-4 col-form-label">Nombre:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nombre" placeholder="Nombre">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="cantidadLabel"
                                                                        class="col-sm-4 col-form-label">Cantidad:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="cantidad" placeholder="Cantidad">
                                                                    </div>
                                                                </div>


                                                                <div class="row mb-3">
                                                                    <label for="fecha_vencimientoLabel"
                                                                        class="col-sm-4 col-form-label">Fecha
                                                                        vencimiento:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date" class="form-control"
                                                                            name="fecha_vencimiento"
                                                                            placeholder="Fecha vencimiento">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="lblProveedor"
                                                                        class="col-sm-4 col-form-label">Proveedor:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" name="proveedor">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-info text-white"
                                                                        style="background-color: #FFC77D; border-color: #FFC77D;">
                                                                        <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                                        Guardar
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="table-responsive">
                                        <table id="tablaIngredientes" class="table table-bordered">
                                            <thead class="theadInventario">
                                                <tr class="text-center">

                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Nombre
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Cantidad
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Fecha vencimiento
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Proveedor
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Acciones
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                <tr>
                                                    <td>{{$item->nombre}}</td>
                                                    <td>{{$item->cantidad}}</td>
                                                    <td>{{$item->fecha_vencimiento}}</td>
                                                    <td>{{$item->nombre_proveedor}}</td>
                                                    <td>
                                                        <div class="text-center">


                                                            <!-- Botón de editar con modal -->
                                                            <button class="btn btn-warning btn-sm btn-block"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editarIngredienteModal{{$item->id_ingrediente}}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Editar ingrediente">
                                                                <div class="text-center">
                                                                    <i class="lni lni-pencil-alt"
                                                                        style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                </div>
                                                            </button>

                                                            <!-- Botón de eliminar -->
                                                            <button class="btn btn-danger btn-sm btn-block"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#eliminarIngredienteModal{{$item->id_ingrediente}}">
                                                                <i class="lni lni-trash"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </button>
                                                        </div>

                                                        <!-- Modal de edición -->
                                                        <div class="modal fade" id="editarIngredienteModal{{$item->id_ingrediente}}"
                                                            tabindex="-1" aria-labelledby="editarIngredienteModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editarIngredienteModalLabel">
                                                                            Editar ingrediente</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Cerrar"></button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <form action="{{route('ingredientes.update',$item->id_ingrediente)}}" method="post">
                                                                            @csrf
                                                                            @method('put')
                                                                            <div class="mb-3">
                                                                                <label for="editNombre"
                                                                                    class="col-sm-4 col-form-label">Nombre</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="nombre" placeholder="Nombre" value="{{$item->nombre}}">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="editCantidad"
                                                                                    class="form-label">Cantidad</label>
                                                                                <input type="number" class="form-control"
                                                                                    name="cantidad" placeholder="Cantidad" value="{{$item->cantidad}}">
                                                                            </div>
                                                                           
                                                                            <div class="mb-3">
                                                                                <label for="editFechaVencimiento"
                                                                                    class="form-label">Fecha
                                                                                    vencimiento</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="fecha_vencimiento"
                                                                                    placeholder="" value="{{$item->fecha_vencimiento}}">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="editProveedor"
                                                                                    class="form-label">Proveedor</label>
                                                                                <input type="text" name="proveedor" class="form-control" value="{{$item->nombre_proveedor}}">
                                                                                </select>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cerrar</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-info text-white"
                                                                                    style="background-color: #FFC77D; border-color: #FFC77D;">
                                                                                    <i class="bx bx-save"
                                                                                        style="color: #F2F2F2;"></i>
                                                                                    Guardar
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- Modal de eliminar --}}
                                                        <div class="modal fade" id="eliminarIngredienteModal{{$item->id_ingrediente}}"
                                                            tabindex="-1" aria-labelledby="eliminarIngredienteModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="eliminarIngredienteModalLabel{{$item->id_ingrediente}}">
                                                                            Confirmar
                                                                            eliminación</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        ¿Estás seguro de que deseas eliminar este
                                                                        ingrediente?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                        <form action="{{route('ingredientes.destroy',$item->id_ingrediente)}}"  method="POST" >
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="submit" class="btn btn-danger">
                                                                                Eliminar</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
