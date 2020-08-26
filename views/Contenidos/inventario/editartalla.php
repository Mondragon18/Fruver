<!-- //superior -->
<div class="modal fade" id="editartallasuperior" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top" role="document" >
		<div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-info-dark">
                    <h3 class="block-title"><i class="fa fa-plus"></i> Editar talla superior</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form enctype="multipart/form-data" id="formularioeditarsuperior">
                    <div class="block-content font-size-sm">
                    <h4>Datos de la parte del cuerpo superior</h4> 
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <input type="hidden" name="idsu" id="idsu">
                        </div>
						<div class="col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label>Genero <small class="text-danger">*</small></label>
                                <select class="custom-select" name="generosu" id="generosu" class="form-control" style="width: 100%;">
                                    <option value="">Seleccione una Genero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
						</div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Talla <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-pencil-ruler"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="tallasu" id="tallasu">
                                </div>
                            </div>
						</div>
						

						<div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Altura <small class="text-danger"></small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-ruler-vertical"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="alturasuperior" id="alturasuperioru">
                                </div>
                            </div>
						</div>

						<div class="col-lg-4 col-xl-4">
                            <div class="form-group">
                                <label for="">Espalda <small class="text-danger"></small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-ruler"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="espaldasuperior" id="espaldasuperioru">
                                </div>
                            </div>
						</div>
						<div class="col-lg-4 col-xl-4">
                            <div class="form-group">
                                <label for="">Pecho <small class="text-danger"></small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-ruler-combined"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="pechosuperior" id="pechosuperioru">
                                </div>
                            </div>
						</div>
						<div class="col-lg-4 col-xl-4">
                            <div class="form-group">
                                <label for="">Cintura <small class="text-danger"></small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-ruler-horizontal"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="cinturasuperior" id="cinturasuperioru">
                                </div>
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

<!-- //inferior -->
<!-- //inferior -->
<div class="modal fade" id="editartallainferior" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top" role="document" >
		<div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-info-dark">
                    <h3 class="block-title"><i class="fa fa-plus"></i>Editar talla inferior</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form enctype="multipart/form-data" id="formularioeditarinferior">
                    <div class="block-content font-size-sm">
                    <h5>Datos de la parte del cuerpo inferior</h5> 
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <input type="hidden" name="idinferioru" id="idinferioru">
                        </div>
						<div class="col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label>Genero <small class="text-danger">*</small></label>
                                <select class="custom-select" name="generoinferioru" id="generoinferioru" class="form-control" style="width: 100%;">
                                    <option value="">Seleccione una Genero</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
						</div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Talla <small class="text-danger">*</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-pencil-ruler"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="tallainferioru" id="tallainferioru">
                                </div>
                            </div>
						</div>
						<div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Altura <small class="text-danger"></small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-ruler-vertical"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="alturainferioru" id="alturainferioru">
                                </div>
                            </div>
						</div>
						<div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Cadera <small class="text-danger"></small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-ruler"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="caderainferioru" id="caderainferioru">
                                </div>
                            </div>
						</div>
						<div class="col-lg-6 col-xl-6">
                            <div class="form-group">
                                <label for="">Entrepierna <small class="text-danger"></small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-ruler-combined"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="entrepiernainferioru" id="entrepiernainferioru">
                                </div>
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




