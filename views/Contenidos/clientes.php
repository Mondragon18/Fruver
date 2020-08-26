<?php include_once "./core/inicio.inc.php"; ?>

</head>
<body

<?php include_once "./core/header.inc.php"; ?>      
<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    <i class="nav-main-link-icon fa fa-user"> </i>
                    Clientes - <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Gestor</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
						<li class="breadcrumb-item">Panel administrativo</li>
						<li class="breadcrumb-item">
                            <a  href="">Clientes</a>
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
            </div>
        </div>

        <div class="block-content block-content-full">

            <div class="table-responsive">
                <table  class="table  custom-table datatable" id="tablaacliente" style="width:100%;">
                    <thead class="thead-dark">
                        <tr>
                            <!-- 1 -->
                            <th>ID</th>
                            <!-- 2  -->
                            <th style="width:100% !important">Nombre completo</th>
                            <!-- 3 -->
                            <th>Telefono</th>
                            <!-- 4 -->
                            <th>Correo</th>
                            <!-- 6 -->
                            <th>Dirección</th>
                            <!-- 7 -->
                            <th>Sexo</th>
                            <!-- 8 -->
                            <th>Estado</th>
                            <!-- 9 -->
                            <th></th>
                            <!-- 10 -->
                            <th class="text-right"></th>
                        </tr>
                    </thead>
                    
                </table>

            </div>
        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->
   

</div>


<?php include_once 'cliente/editarcliente.php'; ?>

<?php include_once './core/footer.inc.php'; ?>

        <!-- <script src="<?php echo RUTA_JS;?>moment.min.js"></script> -->
        <!-- <script src="<?php echo RUTA_JS;?>bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo RUTA_JS;?>Chart.bundle.js"></script>
        <script src="<?php echo RUTA_JS;?>chart.js"></script> -->
        
<script src="<?php echo RUTA_JS;?>select2.min.js"></script>
<script src="<?php echo RUTA_JS;?>app.js"></script>
<script src="<?php echo RUTA_JS;?>toastr.min.js"></script>
<script src="<?php echo RUTA_DAT ?>datatables.min.js"></script>


<script src="<?php echo RUTA_CON;?>clienteControlador.js"></script>
<script src="<?php echo RUTA_CON;?>logControlador.js"></script>
<script src="<?php echo RUTA_CON;?>global.js"></script>

