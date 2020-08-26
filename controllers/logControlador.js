$(document).ready(function () {
  $('#btn-exit-system').on('click', function(event) {
	  event.preventDefault();
    swal({
        title: "Estas seguro?",
        text: "La sesion actual se cerrara y deberas iniciar sesion nuevamente!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          const datos = 1;
          $.post('../models/login/cerrar.php', datos, function (response) {
            if (response == 1) {
              window.location.href="login/";
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
							toastr["error"]("Error, no se pudo cerrar la sesion, intente nuevamente!");
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
          toastr["info"]("Cancelo cerrar la sesion");
        }
      });
		});
});