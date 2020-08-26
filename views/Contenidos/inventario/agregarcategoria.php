<div class="modal fade" id="agregarcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document" >
		<div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-info-dark">
                    <h3 class="block-title"><i class="fa fa-plus"></i> Agregar nuevo categoria</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form enctype="multipart/form-data" id="formularioagregar">
                    <div class="block-content font-size-sm">
                    <h3>Datos de la categoria</h3>
                    <div class='row'>
                        <input type="hidden" id="id" name="id">
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
                                    <input type="text" class="form-control" name="nombre" id="nombre">
                                </div>
                            </div>
						</div>
						<div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label>Genero <small class="text-danger">*</small></label>
                                <select class="custom-select" name="genero" id="genero" class="form-control" style="width: 100%;">
                                    <option value="">Seleccione una Genero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
						</div>
						<div class="col-lg-12 col-xl-12">
							<div class="form-group">
								<label>Descripcion:</label>
								<textarea class="form-control" name="descripcion" id="" cols="10" rows="5"></textarea>
							</div>
						</div>
                    </div>

                    
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button onclick="insertar()" name="ingresar" class="btn btn-sm btn-success submit-btn">
                            <i class="fa fa-save mr-1"></i>
                            Guardar
                        </button>
                        <button type="button" class="btn btn-sm btn-danger mb-1" data-dismiss="modal">
                            <i class="fa fa-fw fa-times mr-1"></i>Cancelar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>