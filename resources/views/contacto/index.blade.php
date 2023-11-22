@extends('plantilla')

@section('gestion_nombre', 'Contactos')

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
                                            <h5 class="mb-0 text-dark" title="">Gestion de Contacto</h5>
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
                                                                Agregar nuevo contacto</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('clientes.store')}}" method="post">
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
                                                                    <label for="apellidosLabel"
                                                                        class="col-sm-4 col-form-label">Apellidos:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="apellidos" placeholder="Apellidos">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="direccionLabel"
                                                                        class="col-sm-4 col-form-label">Dirección:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="direccion" placeholder="Dirección">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="telefonoLabel"
                                                                        class="col-sm-4 col-form-label">Télefono:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="telefono" placeholder="Télefono">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="correoLabel"
                                                                        class="col-sm-4 col-form-label">Correo
                                                                        Electrónico:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="email" class="form-control"
                                                                            name="correo" placeholder="Correo Electrónico">
                                                                    </div>
                                                                </div>

                                                                

                                                                <div class="row mb-3">
                                                                    <label for="tipoPlanLabel"
                                                                        class="col-sm-4 col-form-label">Tipo de
                                                                        Plan:</label>
                                                                    <div class="col-sm-8">
                                                                        <select class="form-select" name="tipoPlan"
                                                                            aria-label="Seleccione el tipo de plan">
                                                                            <option selected disabled>Seleccionar tipo de
                                                                                plan</option>
                                                                            <option value="planClasico">Plan Clásico
                                                                            </option>
                                                                            <option value="planInfantil">Plan Infantil
                                                                            </option>
                                                                            <option value="planPreferencial">Plan Preferencial</option>
                                                                            <option value="planPresidencial">Plan Presidencial</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    
                                                                        <div class="col-lg-8">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" name="recibir_publicidad" type="checkbox">
                                                                                <label class="form-check-label" for="recibir_publicidad">Proporciona permiso para utilizar sus datos?</label>
                                                                            </div>
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
                                                        style="background-color: #25bfab; color: #F2F2F2">Apellidos
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Email
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Telefono
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Acciones
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($clientes as $item)
                                                <tr>
                                                    <td>{{$item->nombre}}</td>
                                                    <td>{{$item->apellidos}}</td>
                                                    <td>{{$item->correo}}</td>
                                                    <td>{{$item->telefono}}</td>
                                                    <td>
                                                        <div class="text-center">


                                                            <!-- Botón de editar con modal -->
                                                            <button class="btn btn-warning btn-sm btn-block"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editarIngredienteModal{{$item->id_cliente}}"
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
                                                                data-bs-target="#eliminarIngredienteModal{{$item->id_cliente}}">
                                                                <i class="lni lni-trash"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </button>
                                                        </div>

                                                        <!-- Modal de edición -->
                                                        <div class="modal fade" id="editarIngredienteModal{{$item->id_cliente}}"
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
                                                                        <form action="{{route('clientes.update',$item->id_cliente)}}" method="post">
                                                                            @csrf
                                                                            @method('put')
                                                                            <div class="row mb-3">
                                                                                <label for="nombreLabel"
                                                                                    class="col-sm-4 col-form-label">Nombre:</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control"
                                                                                        name="nombre" placeholder="Nombre" value="{{$item->nombre}}">
                                                                                </div>
                                                                            </div>
            
                                                                            <div class="row mb-3">
                                                                                <label for="apellidosLabel"
                                                                                    class="col-sm-4 col-form-label">Apellidos:</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control"
                                                                                        name="apellidos" placeholder="Apellidos" value="{{$item->apellidos}}">
                                                                                </div>
                                                                            </div>
            
                                                                            <div class="row mb-3">
                                                                                <label for="direccionLabel"
                                                                                    class="col-sm-4 col-form-label">Dirección:</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control"
                                                                                        name="direccion" placeholder="Dirección" value="{{$item->direccion}}">
                                                                                </div>
                                                                            </div>
            
                                                                            <div class="row mb-3">
                                                                                <label for="telefonoLabel"
                                                                                    class="col-sm-4 col-form-label">Télefono:</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control"
                                                                                        name="telefono" placeholder="Télefono" value="{{$item->telefono}}">
                                                                                </div>
                                                                            </div>
            
                                                                            <div class="row mb-3">
                                                                                <label for="correoLabel"
                                                                                    class="col-sm-4 col-form-label">Correo
                                                                                    Electrónico:</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="email" class="form-control"
                                                                                        name="correo" placeholder="Correo Electrónico" value="{{$item->correo}}">
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                            <div class="row mb-3">
                                                                                <label for="tipoPlanLabel"
                                                                                    class="col-sm-4 col-form-label">Tipo de
                                                                                    Plan:</label>
                                                                                <div class="col-sm-8">
                                                                                    <select class="form-select" name="tipoPlan"
                                                                                        aria-label="Seleccione el tipo de plan">
                                                                                        <option selected disabled>{{$item->tipo_plan}}</option>
                                                                                        <option value="planClasico">Plan Clásico
                                                                                        </option>
                                                                                        <option value="planInfantil">Plan Infantil
                                                                                        </option>
                                                                                        <option value="planPreferencial">Plan Preferencial</option>
                                                                                        <option value="planPresidencial">Plan Presidencial</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
            
                                                                            <div class="row mb-3">
                                                                                
                                                                                <div class="col-lg-8">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" 
                                                                                               name="recibir_publicidad" 
                                                                                               type="checkbox" 
                                                                                               value="on" 
                                                                                               {{ $item->recibir_publicidad == 1 ? 'checked' : '' }}>
                                                                                        <label class="form-check-label" for="recibir_publicidad">Proporciona permiso para utilizar sus datos?</label>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                    </div>
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
                                                        <div class="modal fade" id="eliminarIngredienteModal{{$item->id_cliente}}"
                                                            tabindex="-1" aria-labelledby="eliminarIngredienteModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="eliminarIngredienteModalLabel">
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
                                                                        <form action="{{route('clientes.destroy',$item->id_cliente)}}"  method="POST" >
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
