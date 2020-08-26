$(document).ready(function () {
    
     $("#show").mousedown(function () {
         $("#clave").removeAttr('type');
         $("#show").addClass('fa-eye-slash').removeClass('fa-eye');
     });

     $("#show").mouseup(function () {
         $("#clave").attr('type', 'password');
         $("#show").addClass('fa-eye').removeClass('fa-eye-slash');
     });
    
    //$('#error').hide();
    $('#enviar').on('click', function(event) {
        event.preventDefault();
        if (validar()) {
                const datos = {
                    usuario: $('#usuario').val(),
                    clave: $('#clave').val()
                }
                $.post('models/login/login.php', datos, function (response) {
                    if (response == 1) {
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr["success"]("Bienvenido a el panel administrativo!");
                        window.location = "home";
                    } else {
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        toastr["error"]("Error, Datos Incorrectos o su cuenta no esta activada!");
                        $('#usuario').val('');
                        $('#clave').val('');
                    }
                });
        } else {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["error"]("Rellene los campos!");
            
            $('#usuario').val('');
            $('#clave').val('');
        }
    });
});

function validar() {
    var cont = 0;

    // var correo = $('#correo').val();
    // if (correo != "" && correo.length > 0) {
    //     $('#correo').removeClass('is-invalid');
    //     cont++;
    // } else {
    //     $('#correo').addClass('is-invalid');
    // }
    
    var usuario = $('#usuario').val();
    if (usuario != "" && usuario.length > 4) {
        $('#usuario').removeClass('is-invalid');
        cont++;
    } else {
        $('#usuario').addClass('is-invalid');
    }

    var clave = $('#clave').val();
    if (clave != "" && clave.length > 4) {
        $('#clave').removeClass('is-invalid');
        cont++;
    } else {
        $('#clave').addClass('is-invalid');
    }

    if (cont == 2) {
        return true;
    } else {
        return false;
    }
}