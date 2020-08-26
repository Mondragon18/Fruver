<?php include_once "./core/inicio.inc.php"; ?>

</head>
<body

<!-- Page Content -->
<div class="bg-image" style="background-image: url('assets/media/photos/photo15@2x.jpg');">
    <div class="hero-static bg-white-95">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5 col-xl-4">
                    <!-- Sign In Block -->
                    <div class="block block-themed block-fx-shadow mb-0">
                        <div class="block-header" style="background-color: #F8931F !important">
                            <h3 class="block-title">Inicio de sesión</h3>
                            <div class="block-options">
                                <a class="btn-block-option font-size-sm" href="op_auth_reminder.php" data-toggle="tooltip"  title="Recuperar su contraseña">
                                    Olvidó su contraseña?
                                </a>
                               
                            </div>
                        </div>
                        <div class="block-content" style="background-color: #F8931F !important; color: #EEE">
                            <div class="p-sm-3 px-lg-4 py-lg-3">
                                <div class="col-12" >
                                    <img src="assets/media/favicons/logo-04.png" alt="logo" style="margin-left: auto;margin-right: auto; display:block; width:150px;">
                                </div>
                                <!-- Sign In Form -->
                                <form id="formulario" autofocus="off" class="form-signin">
                                    <div class="py-3">
                                         <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="si si-user"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control form-control-alt form-control-sm" required id="usuario" name="usuario" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group my-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="si si-key"></i>
                                                    </span>
                                                </div>
                                                
                                                <input type="password" class="form-control form-control-alt form-control-sm" required id="clave" name="clave"  placeholder="Contraseña" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text" style="cursor:pointer;" >
                                                        <i class="far fa-eye" id="show"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group ">
                                            <div class="custom-control custom-checkbox custom-control-light mb-1">
                                                <input type="checkbox" class="custom-control-input" id="example-cb-custom-light2"   name="login-remember">
                                                <label class="custom-control-label" for="example-cb-custom-light2" _msthash="3336736" _msttexthash="33358">Recuerdame</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-md-12 col-xl-12" style="margin-left: auto;margin-right: auto; display:block;">
                                            <button type="submit" class="btn btn-block btn-light" id="enviar" >
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Iniciar sesión
                                            </button>
                                        </div>

                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sign In Block -->
                </div>
            </div>
        </div>
        <div class="content content-full font-size-sm text-muted text-center">
            <strong>Panel administrativo</strong> &copy; <span data-toggle="year-copy">2020</span>
        </div>
    </div>
</div>
<!-- <!-- END Page Content -->


<script src="<?php echo RUTA_CON;?>loginControlador.js"></script>

<script src="<?php echo RUTA_JS;?>app.js"></script>
<script src="<?php echo RUTA_JS;?>toastr.min.js"></script>

