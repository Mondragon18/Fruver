<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="">
            <img src="<?php echo RUTA_MEDIA;?>favicons/7-07.png" alt="logo" style="margin-left: auto; margin-top:auto; display:block; width:10em"">
        </a>
        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full ">
        <ul class="nav-main">
            

           <li class="nav-main-heading">Menu</li>

           <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo RUTA_M;?>home/">
                    <i class="nav-main-link-icon si si-grid"></i>
                    <span class="nav-main-link-name">Inicio</span>
                </a>
            </li>

            <li class="nav-main-heading">Gestores</li>

             <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="usuario-view.php">
                    <i class="nav-main-link-icon fa fa-users"></i>
                    <span class="nav-main-link-name">Usuarios</span>
                    
                </a>
                <ul class="nav-main-submenu">
                    <!-- //submenu  -->
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="usuario-view.php">
                            <i class="nav-main-link-icon fa fa-users-cog"></i>
                            <span class="nav-main-link-name">Administradores</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <a class="nav-main-link" href="<?php echo RUTA_M;?>administrador/">
                                <i class="nav-main-link-icon si si-list"></i>
                                <span class="nav-main-link-name">Listado</span>
                            </a>
                            <a class="nav-main-link" href="<?php echo RUTA_M;?>agregaradministrador/">
                                <i class="nav-main-link-icon far si si-plus"></i>
                                <span class="nav-main-link-name">Agregar</span>
                            </a>
                        </ul>
                    </li>
                    <!-- //fin submenu -->
                    <!-- //submenu  -->
                    <!-- //fin submenu -->
                    <!-- //submenu  -->
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="<?php echo RUTA_M;?>clientes/">
                            <i class="nav-main-link-icon fa fa-user"></i>
                            <span class="nav-main-link-name">Clientes</span>
                        </a>
                    </li>
                    <!-- //fin submenu -->
                </ul>
            </li>

            <?php if ($_SESSION['privilegio_cms'] == 1) { ?>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="usuario-view.php">
                        <i class="nav-main-link-icon far fa-building"></i>
                        <span class="nav-main-link-name">Tiendas</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <a class="nav-main-link" href="<?php echo RUTA_M;?>empresa/">
                            <i class="nav-main-link-icon si si-list"></i>
                            <span class="nav-main-link-name">Listado</span>
                        </a>
                        <a class="nav-main-link" href="<?php echo RUTA_M;?>agregarempresa/">
                            <i class="nav-main-link-icon far si si-plus"></i>
                            <span class="nav-main-link-name">Agregar</span>
                        </a>
                    </ul>
                </li>
            <?php } ?>
            
            <li class="nav-main-heading">Inventario</li>

            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo RUTA_M;?>productos/">
                    <i class="nav-main-link-icon fa fa-box-open"></i>
                    <span class="nav-main-link-name">Productos</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo RUTA_M;?>categoria/">
                    <i class="nav-main-link-icon far fa-bookmark"></i>
                    <span class="nav-main-link-name">Categoria</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo RUTA_M;?>tipo/">
                    <i class="nav-main-link-icon fa fa-cubes"></i>
                    <span class="nav-main-link-name">Tipo de ropa</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo RUTA_M;?>talla/">
                    <i class="nav-main-link-icon fa fa-ruler-combined"></i>
                    <span class="nav-main-link-name">Talla</span>
                </a>
            </li>
            
            
            <li class="nav-main-heading">Opcion</li>

            <li class="nav-main-item">
                <a class="btn-exit-system nav-main-link" href="">
                    <i class="nav-main-link-icon si si-bar-chart"></i> 
                    <span class="nav-main-link-name">Estadisticas</span>
                </a>
            </li>

            <li class="nav-main-item">
                <a class="btn-exit-system nav-main-link" href="">
                    <i class="nav-main-link-icon si si-file-alt"></i> 
                    <span class="nav-main-link-name">Reportes</span>
                </a>
            </li>
            
            <li class="nav-main-item">
                <a class="btn-exit-system nav-main-link" href="../control/out.php">
                    <i class="nav-main-link-icon si si-power"></i> 
                    <span class="nav-main-link-name">Salir</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>