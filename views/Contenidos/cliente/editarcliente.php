<div class="modal fade" id="editarcliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document" >
		<div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-info-dark">
                    <h3 class="block-title"><i class="fa fa-edit"></i> Modificar datos del cliente</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form enctype="multipart/form-data" id="formulario">
                    <div class="block-content font-size-sm">
                        <h3>Datos Personales</h3>
                        <div class='row'>
                        <input type="hidden" id="id" name="id">

                        <!-- <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Identificacion</label> <small class="text-danger">*</small>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-id-card"> </i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="identificacionu" id="identificacion">
                                </div>
                            </div>
                        </div> -->
                    </div>
                     <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label for="">Nombres completo <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="nombresu" id="nombres">
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
                                    <input type="text" class="form-control" id="direccion" name="direccionu">
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
                                    <input type="text" class="form-control" id="telefono" name="telefonou">
                                </div>
                            </div>
                        </div>

                    </div>
                    <h3><i class="nav-main-link-icon fa fa-user-cirle"></i> Informacion de la cuenta</h3>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Email <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-mail"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="email" id="correo" name="correou">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label>Genero:</label>
                                <select name="generou" id="generou" class="form-control" style="width: 100%;">
                                    <option value="">Seleccione una Genero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
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