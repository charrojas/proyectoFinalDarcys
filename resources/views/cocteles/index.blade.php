@extends('plantilla')

@section('gestion_nombre', 'Agregar nuevo cóctel')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                            <h5 class="mb-0 text-dark" title="">Gestion de cocteles</h5>
                                        </div>
                                        <div class="d-flex align-items-center">

                                            <div class="me-2">
                                                <button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#modalAgregarContacto"
                                                    style="background-color: #003a2f; border-color: #112a2a;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Agregar Contacto">Registrar</button>
                                            </div>


                                            {{-- Modal agregar --}}
                                            <div class="modal fade" id="modalAgregarContacto" tabindex="-1"
                                                aria-labelledby="modalAgregarContactoLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalAgregarContactoLabel">
                                                                Agregar Cóctel</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('cocteles.store')}}" method="POST" enctype="multipart/form-data" >
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
                                                                    <label for="direccionLabel"
                                                                        class="col-sm-4 col-form-label">Precio:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="number" class="form-control"
                                                                            name="precio" placeholder="precio">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="tipoPlanLabel"
                                                                        class="col-sm-4 col-form-label">Tipo de
                                                                        Categoria:</label>
                                                                    <div class="col-sm-8">
                                                                        <select required name="id_categoria" class="form-select" id="tipoPlan"
                                                                            aria-label="Seleccione el tipo de plan">
                                                                            <option selected disabled>Seleccionar una categoria</option>
                                                                            @foreach ($categoria as $item)
                                                                                <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="direccionLabel"
                                                                        class="col-sm-4 col-form-label">Descripción:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="textarea" class="form-control"
                                                                        name="descripcion" placeholder="descripcion">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="mt-2">

                                                                    <div class="">
                                                                        <label for="nuevoInput" class="form-label">Insertar imagen:</label>
                                                                        <input type="file" class="form-control input-imagen colorImput form-control2" id="nuevoInput"
                                                                            name="img">
                                                                        <div class="text-center mt-3">
                                                
                                                                            <img src="#" alt="Vista previa de la imagen" id="nuevoInput-preview"
                                                                                class="mt-2 rounded-4 imagen-preview"
                                                                                style="width:200px; height: 200px; object-fit: cover; display: none;">
                                                
                                                                            <i id="nuevoInput-icon" class="fas fa-images" style="font-size: 50px; color: #7a7777;"></i>
                                                                            
                                                                        </div>
                                                                    </div>
                                                
                                                                </div>
                                                                






                                                            
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-info text-white"
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
                                    </div>

                                    <hr />

                                    <div class="">
                                        <table id="tablaContacto_1" class="table table-bordered">
                                            <thead class="theadInventario">
                                                <tr class="text-center">

                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Nombre
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Precio
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Categoria
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Disponibilidad
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #25bfab; color: #F2F2F2">Acciones
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($data as $item)
                                               <tr>
                                                    
                                                <td>{{$item->nombre}}</td>
                                                <td>${{$item->precio}}</td>
                                                <td>{{$item->nombre_categoria}}</td>
                                                @if ($item->disponibilidad==1)
                                                <td>Disponible</td>
                                                @else
                                                <td>No disponible</td>
                                                @endif
                                                

                                                <td>
                                                    <div class="text-center">


                                                        {{-- Botón de visualizar --}}


                                                        <!-- Botón de editar con modal -->
                                                        <a href="{{route('cocteles.edit', $item->id_coctel)}}" class="btn btn-warning btn-sm btn-block">
                                                            <div class="text-center">
                                                                <i class="lni lni-pencil-alt"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </div>
                                                        </a>

                                                        <!-- Botón de eliminar -->
                                                        <button class="btn btn-danger btn-sm btn-block"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#eliminarContactoModal{{$item->id_coctel}}">
                                                            <i class="lni lni-trash"
                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </button>
                                                    </div>


                                                    <!-- Modal de visualizacion -->
                                                    

                                                    <!-- Modal de edición -->
                                                    {{-- <div class="modal fade" id="editarContactoModal" tabindex="-1"
                                                        aria-labelledby="editarContactoModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editarContactoModalLabel">
                                                                        Editar cóctel</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                            
                                                                        <div class="row mb-3">
                                                                            <label for="nombreLabel"
                                                                                class="col-sm-4 col-form-label">Nombre:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control"
                                                                                    id="nombre" placeholder="Nombre">
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="row mb-3">
                                                                            <label for="direccionLabel"
                                                                                class="col-sm-4 col-form-label">Precio:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="number" class="form-control"
                                                                                    id="direccion" placeholder="precio">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="tipoPlanLabel"
                                                                                class="col-sm-4 col-form-label">Tipo de
                                                                                Categoria:</label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-select" id="tipoPlan"
                                                                                    aria-label="Seleccione el tipo de plan">
                                                                                    <option selected disabled>Seleccionar una categoria</option>
                                                                                    <option value="planClasico">Coctel Dulce
                                                                                    </option>
                                                                                    <option value="planInfantil">Coctel Elegante
                                                                                    </option>
                                                                                    <option value="planPreferencial">Coctel Artesanal</option>
                                                                                    <option value="planPresidencial">Coctel de temporada</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="direccionLabel"
                                                                                class="col-sm-4 col-form-label">Descripción:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="textarea" class="form-control"
                                                                                    id="direccion" placeholder="descripcion">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div style="margin-left: 103px" class="col-lg-6 col-md-12 mt-4">
                                                                            <div class="">
                                                                                 <!-- Vista previa de la imagen y ícono -->
                                                                                 <div style="margin-left: -22px" class="text-center p-3">
                                                                                    <img  src="https://cdn-icons-png.flaticon.com/512/9773/9773166.png" alt="Vista previa de la imagen" id="nuevoInput-preview" class="rounded-4 imagen-preview border border-3" style="width:300px; height: 200px; object-fit: cover; ">
                                                                                    <i id="nuevoInput-icon" class="bi bi-image" style="font-size: 50px; color: #7a7777;"></i>
                                                                                </div>
                                                                                <!-- Input de tipo "file" oculto -->
                                                                                <input  type="file" class="form-control input-imagen colorImput form-control2" id="nuevoInput" name="imagen" style="display: none;">
                                                                        
                                                                                <!-- Botón con ícono de cámara -->
                                                                                <button style="margin-left: 40px " type="button" class="btn btn-secondary" onclick="document.getElementById('nuevoInput').click();">
                                                                                    <i class="fas fa-camera"></i> Seleccionar Imagen
                                                                                </button>
                                                                        
                                                                               
                                                                            </div>
                                                                        </div>
                                                                        
        
        
        
        
        
        
                                                                    </form>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="button"
                                                                        class="btn btn-info text-white"
                                                                        style="background-color: #51cbcb; border-color: #333737;">
                                                                        <i class="bx bx-save"
                                                                            style="color: #F2F2F2;"></i>
                                                                        Guardar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                </div>
                            </div>

                            {{-- Modal de eliminar --}}
                            <div class="modal fade" id="eliminarContactoModal{{$item->id_coctel}}" tabindex="-1"
                                aria-labelledby="eliminarContactoModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="eliminarContactoModalLabel{{$item->id_coctel}}">
                                                Confirmar
                                                eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estás seguro de que deseas eliminar este
                                            Cóctel?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>

                                                <form action="{{route('cocteles.destroy',$item->id_coctel)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">
                                                        Eliminar
                                                    </button>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".input-imagen").change(function() {
                var inputId = $(this).attr('id');
                var previewId = inputId + "-preview";
                var iconId = inputId + "-icon";
                readURL(this, previewId, iconId);
            });
        });

        function readURL(input, previewId, iconId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#" + previewId).attr('src', e.target.result);
                    $("#" + previewId).show();
                    $("#" + iconId).hide(); 
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#" + previewId).hide();
                $("#" + iconId).show(); 
            }
        }
    </script>
@endsection
