<?php include_once "./core/inicio.inc.php"; ?>

</head>
<body

<?php include_once "./core/header.inc.php"; ?>  


<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    <i class="nav-main-link-icon fa fa-users-cog"> </i>
                    Administrador - <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Gestor</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
						<li class="breadcrumb-item">Panel administrativo</li>
						<li class="breadcrumb-item">
                            <a  href="">Administrador</a>
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
                    <i data-toggle= "tooltip" title="Tamaño del contenido" class="si si-size-fullscreen"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                    <i data-toggle= "tooltip" title="fijar" class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle">
                    <i  data-toggle= "tooltip" title="" class="si si-arrow-up"></i>
                </button>
                <a data-toggle='modal' data-target='#agregaradministrador' class="btn-block-option"  >
                    <i data-toggle= "tooltip" title="Agregar nuevo administrador" class="fa fa-user-plus"></i>
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">

            <div class="table-responsive">
                <table  class="table  custom-table datatable" id="tablaadministrador" style="width:100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th style="width:100% !important">Nombre completo</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            
                            <th></th>
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    
                </table>

            </div>
        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->
</div>


    <!-- prueba 1 -->

    <!-- <a class='dropdown-item' href='#' data-toggle='modal' data-target='#agregaradministrador'>
    <i class='si si-pencil'></i> Editar</a> -->
    <?php include_once 'administrador/editaradministrador.php'; ?>
    <?php include_once 'administrador/agregaradministrador.php'; ?>

    
<?php include_once './core/footer.inc.php'; ?>

<!-- <script src="<?php echo RUTA_JS;?>plugins/sweetalert2/sweetalert2.js"></script> -->
<script src="<?php echo RUTA_JS;?>select2.min.js"></script>
<script src="<?php echo RUTA_JS;?>app.js"></script>
<script src="<?php echo RUTA_JS;?>toastr.min.js"></script>
<script src="<?php echo RUTA_DAT ?>datatables.min.js"></script>

<script src="<?php echo RUTA_CON;?>administradorControlador.js"></script>
<script src="<?php echo RUTA_CON;?>logControlador.js"></script>
<script src="<?php echo RUTA_CON;?>global.js"></script>
