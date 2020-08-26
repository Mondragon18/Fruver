<?php include_once "./core/inicio.inc.php"; ?>

</head>
<body

<?php include_once "./core/header.inc.php"; ?>  
<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    <i class="nav-main-link-icon far fa-building"> </i>
                    Tiendas - <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Gestor</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
						<li class="breadcrumb-item">Panel administrativo</li>
						<li class="breadcrumb-item">
                            <a  href="">Tiendas</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                           <a class="link-fx" href="">Listado</a>
                        </li>
                    </ol>
                </nav>
            </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

    <!-- Dynamic Table Full Pagination -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Listado <small></small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle">
                    <i data-toggle= "tooltip" title="tamaño del contenido" class="si si-size-fullscreen"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                    <i data-toggle= "tooltip" title="Fijar" class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle">
                    <i data-toggle= "tooltip" title="desplegar" class="si si-arrow-up"></i>
                </button>
                <a href="<?php echo RUTA_M;?>agregarempresa/" class="btn-block-option" >
                    <i data-toggle= "tooltip" title="Agregar nueva tiendas" class="si si-plus"></i>
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table  class="table table-border table-sm table-striped table-vcenter custom-table datatable" id="tablaempresa">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIT</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    
                </table>

            </div>   
        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->
   
</div>

<div class="modal fade" id="editarempresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document" >
		<div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-info-dark">
                    <h3 class="block-title"><i class="fa fa-edit"></i> Modificar datos de la tiendas</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form enctype="multipart/form-data" id="formulario">
                    <div class="block-content font-size-sm">
                        <div class='row'>
                            <input type="hidden" id="id" name="id">

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="">NIT</label> <small class="text-danger">*</small>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-id-card"> </i> 
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="nit" id="nit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="">Nombre <small class="text-danger">*</small></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-building"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="nombres" id="nombres">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="">Marca <small class="text-danger">*</small></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="si si-handbag"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="marca" id="marca">
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
                                                <i class="fa fa-map-marker-alt"></i>
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
                        <h3><i class="nav-main-link-icon fa fa-user-cirle"></i> Informacion de la cuenta</h3>
                        <div class="row">
                            <div class="col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <label for="">Email <small class="text-danger">*</small></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-mail-bulk"></i>
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
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <input type="hidden" name="privilegio" id="privilegio" value="4">
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

<?php include_once './core/footer.inc.php'; ?>
                
        <script src="<?php echo RUTA_JS;?>select2.min.js"></script>
        <script src="<?php echo RUTA_JS;?>app.js"></script>
        <script src="<?php echo RUTA_JS;?>toastr.min.js"></script>
        <script src="<?php echo RUTA_DAT ?>datatables.min.js"></script>

<!-- END Page Content -->
<script src="<?php echo RUTA_CON;?>empresaControlador.js"></script>
<script src="<?php echo RUTA_CON;?>logControlador.js"></script>
<script src="<?php echo RUTA_CON;?>global.js"></script>