<div class="modal fade" id="agregaradministrador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document" >
		<div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-info-dark">
                    <h3 class="block-title"><i class="fa fa-plus"></i> Agregar nuevo administrador</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form enctype="multipart/form-data" id="formularioagregar">
                    <div class="block-content font-size-sm">
                        <h3>Datos Personales</h3>
                    <div class='row'>
                        <input type="hidden" id="id" name="id">

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Identificacion</label> <small class="text-danger">*</small>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-id-card"> </i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="identificacion" id="identificacion">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Nombres <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="nombres" id="nombres">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Apellidos <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Departamento <small class="text-danger">*</small></label>
                                <select name="departamento" id="departamento" class="form-control" style="width: 100%;">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Ciudad <small class="text-danger">*</small></label>
                                <select name="ciudad" id="ciudad" class="form-control" style="width: 100%;">
                                </select>
                            </div>
                        </div> -->

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Direccion</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="si si-phone"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                            </div>
                        </div>

                    </div>
                    <h3>Datos de la cuenta</h3>
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="form-group">
                                <label for="">Email <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-mail"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="email" id="correo" name="correo">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="form-group">
                                <label for="">Contraseña <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="si si-key"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" id="clave1" name="clave1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="form-group">
                                <label for="">Repetir contraseña <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="si si-key"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" id="clave2" name="clave2">
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label>Genero:</label>
                                <select name="genero" id="genero" class="form-control" style="width: 100%;">
                                    <option value="">Seleccione una Genero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Privilegio <small class="text-danger">*</small></label>
                                <select name="privilegio" id="privilegio"  class="form-control" style="width: 100%;">
                                    <option value="">--- Seleccione el privilegio ---</option>
                                    <?php 
                                        if ($_SESSION['privilegio_cms'] == 1) {
                                            echo "<option value='1'>Control total del sistema</option>
                                                <option value='3'>Permiso para registro y actualizacion</option>
                                                <option value='5'>Permiso para registro</option>
                                                <option value='2'>Control total de la tienda</option>
                                                <option value='4'>Permiso para registro y actualizacion, tienda</option>
                                                <option value='6'>Permiso para registro, tienda</option>
                                            ";
                                        }elseif($_SESSION['privilegio_cms'] == 2){
                                            echo "<option value='2'>Control total de la tienda</option>
                                                <option value='4'>Permiso para registro y actualizacion, tienda</option>
                                                <option value='6'>Permiso para registro, tienda</option>
                                            ";										
                                        }elseif($_SESSION['privilegio_cms'] == 3){
                                            echo "<option value='3'>Permiso para registro y actualizacion</option>
                                                <option value='5'>Permiso para registro</option>
                                            ";				
                                        }elseif ($_SESSION['privilegio_cms'] == 4) {
                                            echo "<option value='4'>Permiso para registro y actualizacion, tienda</option>
                                                <option value='6'>Permiso para registro, tienda</option>
                                            ";
                                        }elseif($_SESSION['privilegio_cms'] == 5){
                                            echo "<option value='5'>Permiso para registro</option>";										
                                        }elseif($_SESSION['privilegio_cms'] == 6){
                                            echo "<option value='5'>Permiso para registro, tiendas</option>";										
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        </div>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="submit" name="ingresar" class="btn btn-sm btn-success submit-btn">
                            <i class="fa fa-save mr-1"></i>
                            Guardar
                        </button>
                        <button type="button" class="btn btn-sm btn-danger mb-1" data-dismiss="modal">
                            <i class="fa fa-fw fa-times mr-1"></i>Cancelar
                        </button>
                        <!-- <button type="submit" name="ingresar" class="btn btn-primary submit-btn">guardar</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>