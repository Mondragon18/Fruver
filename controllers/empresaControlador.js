var validarceluda = true;
$(document).ready(function (e) {

	listarEmpresa();
	

	validarExitenciaNit();
	validarExitenciaCorreo();
	
	
	$('#formulario').on('submit', function (e) {
		e.preventDefault();
		if ($('#id').val() == '') {
			if (validar()) {
				if (validarcoincidencia()) {
					$.ajax({
						type: 'POST',
						url: '../models/empresa/insertar.php',
						data: new FormData(this),
						contentType: false,
						cache: false,
						processData: false,
						success: function (respuesta) {
							console.log("pagina:" + respuesta);
							if (respuesta == 1) {
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
								toastr["success"]("Empresa registrada con exito");
								listarEmpresa();
								$('#editarempresa').modal('hide');
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
								toastr["error"]("No se puede registrar la empresa!");
							}
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
					toastr["error"]("Las contraseña no coinciden! intente nuevamente");
				}	
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
				toastr["error"]("Relleno los campos necesarios");
			}
		} else {
			if (validar()) {
				$.ajax({
					type: "POST",
					url: "../models/empresa/update.php",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function (respuesta) {
						console.log("pagina:" + respuesta);
						if (respuesta == 1) {
							toastr.options = {
								closeButton: false,
								debug: false,
								newestOnTop: false,
								progressBar: true,
								positionClass: "toast-top-right",
								preventDuplicates: false,
								onclick: null,
								showDuration: "300",
								hideDuration: "1000",
								timeOut: "5000",
								extendedTimeOut: "1000",
								showEasing: "swing",
								hideEasing: "linear",
								showMethod: "fadeIn",
								hideMethod: "fadeOut",
							};
							toastr["success"]("Tienda Actualizada con Exito");
							listarEmpresa();
							$("#editarempresa").modal("hide");
						} else if (respuesta == 0) {
							toastr.options = {
								closeButton: false,
								debug: false,
								newestOnTop: false,
								progressBar: true,
								positionClass: "toast-top-right",
								preventDuplicates: false,
								onclick: null,
								showDuration: "300",
								hideDuration: "1000",
								timeOut: "5000",
								extendedTimeOut: "1000",
								showEasing: "swing",
								hideEasing: "linear",
								showMethod: "fadeIn",
								hideMethod: "fadeOut",
							};
							toastr["error"]("Error!");
						} else if (respuesta == -1) {
							toastr.options = {
								closeButton: false,
								debug: false,
								newestOnTop: false,
								progressBar: true,
								positionClass: "toast-top-right",
								preventDuplicates: false,
								onclick: null,
								showDuration: "300",
								hideDuration: "1000",
								timeOut: "5000",
								extendedTimeOut: "1000",
								showEasing: "swing",
								hideEasing: "linear",
								showMethod: "fadeIn",
								hideMethod: "fadeOut",
							};
							toastr["error"]("Contraseñas no coiciden!");
						}
					},
				});
			} else {
				toastr.options = {
				closeButton: false,
				debug: false,
				newestOnTop: false,
				progressBar: true,
				positionClass: "toast-top-right",
				preventDuplicates: false,
				onclick: null,
				showDuration: "300",
				hideDuration: "1000",
				timeOut: "5000",
				extendedTimeOut: "1000",
				showEasing: "swing",
				hideEasing: "linear",
				showMethod: "fadeIn",
				hideMethod: "fadeOut",
				};
				toastr["error"]("Relleno los campos necesarios");
			}
		}

	});
});


//controlador para mostrar la lista de administradores
function listarEmpresa() {
	var estado = 1;
	$(document).ready(function () {
		$('#tablaempresa').DataTable({
			"destroy": true,
			"searching": true,
			"ajax": "../models/empresa/listar.php",
			"dataSrc": "",
			"method": "POST",
			"columns": [{
					"data": "nit"
				},
				{
					"data": "nombre"
				},
				{
					"data": "marca"
				},
				{
					"data": "telefono"
				},
				{
					"data": "correo"
				},
				{
					"data": "estado",
					render: function (data) {
						estado = data;
						if (data == 'Activo') {
							return "<span class='badge badge-success badge-pill text-center'>Activo</span>";
						} else {
							return "<span class='badge badge-danger badge-pill text-center'>Inactivo</span>";
						}
					}
				},
				{
					"data": "codigo",
					render: function (data) {
						
						if (estado == 'Activo') {
							return "<div class='dropdown dropdown-action'><a href='#''  class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#' onclick='preparar(" + data + ")' data-toggle='modal' data-target='#editarempresa'><i class='si si-pencil'></i> Editar</a><a class='dropdown-item' href='#' onclick='eliminar(" + data + ")'><i class='si si-trash'></i> Eliminar</a></div></div>";
						} else {
							return "<div class='dropdown dropdown-action'><a href='#'' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#'' value=" + data + " onclick='renovar(" + data + ")'><i class='fa fa-undo'></i> Renovar</a></div></div>";
						}

					}
				}

			]
		});
	});
}

function preparar(codigo) {
	$.post('../models/empresa/preparar.php',{codigo}, function (respuesta) {
		let ciudad = JSON.parse(respuesta);
		ciudad.data.forEach(dep => {
			$('#id').val(dep.PersonaCodigo);
			$('#nit').val(dep.EmpresaNit);
			$('#nombres').val(dep.EmpresaNombre);
			$('#marca').val(dep.EmpresaMarca);
			$('#direccion').val(dep.EmpresaDireccion);
			$('#telefono').val(dep.EmpresaTelefono);
			$('#correo').val(dep.PersonaEmail);
		});
	});
}


function eliminar(codigo) {
	$.post("../models/empresa/desactivar.php", { codigo }, function (respuesta) {
    if (respuesta == 1) {
      toastr.options = {
        closeButton: false,
        debug: false,
        newestOnTop: false,
        progressBar: true,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "400",
        hideDuration: "1500",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
      };
      toastr["success"](
        "Tienda deshabilitada correctamente, puede Hablitarlo despues.",
        "Exito!"
      );
      listarEmpresa();
    } else {
      toastr.options = {
        closeButton: false,
        debug: false,
        newestOnTop: false,
        progressBar: true,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "400",
        hideDuration: "1500",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
      };
      toastr["error"](
        "No se pudo des habilitar la tienda por favor Vuelva a intentarlo.",
        "Erorr!"
      );
    }
  });
}

function renovar(codigo) {
	$.post("../models/empresa/activar.php", { codigo }, function (respuesta) {
		if (respuesta == 1) {
			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": true,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "400",
				"hideDuration": "1500",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			}
			toastr["success"]("Tienda Renovada correctamente.", "Exito!");
			listarEmpresa();
		} else {
			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": true,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "400",
				"hideDuration": "1500",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			}
			toastr["error"]("No se pudo habilitar la tienda, por favor Vuelva a intentarlo.", "Erorr!")
		}
	});
}

function validarcoincidencia() {
	var cont = 0;

	var clave1 = $('#clave1').val();
	var clave2 = $('#clave2').val();
	// console.log("pagina:" + clave1 + " " + clave2);
	if (clave1 != "" && clave1.length > 4 && clave2 != "" && clave2.length > 4) {
		if (clave1 == clave2) {
			$('#clave1').removeClass('is-invalid');
			$('#clave2').removeClass('is-invalid');
			cont++;
		}
	} else {
		$('#clave1').addClass('is-invalid');
		$('#clave2').addClass('is-invalid');
	}

	if (cont == 1) {
		console.log("pagina:" + clave1 + " " + clave2);
		return true;
	} else {
		return false;
	}
}

function validar() {
	var cont = 0;

	var cedula = $('#nit').val();
	if (cedula != "" && cedula.length > 5) {
		$('#nit').removeClass('is-invalid');
		cont++;
	} else {
		$('#nit').addClass('is-invalid');
	}

	var nombres = $('#nombres').val();
	if (nombres != "") {
		$('#nombres').removeClass('is-invalid');
		cont++;
	} else {
		$('#nombres').addClass('is-invalid');
	}

	var apellidos = $('#marca').val();
	if (apellidos != "") {
		$('#marca').removeClass('is-invalid');
		cont++;
	} else {
		$('#marca').addClass('is-invalid');
	}

	var correo = $('#correo').val();
	if (correo != "" && correo.length > 0) {
		$('#correo').removeClass('is-invalid');
		cont++;
	} else {
		$('#correo').addClass('is-invalid');
	}

	var privilegio = $('#privilegio').val();
	if (privilegio != "" && privilegio.length > 0) {
		$('#privilegio').removeClass('is-invalid');
		cont++;
	} else {
		$('#privilegio').addClass('is-invalid');
	}


	if (cont == 5) {
		return true;
	} else {
		return false;
	}


}


function validarExitenciaNit(){
	$('#nit').keyup(function () {
		if ($('#nit').val() != "") {
			var nit = $('#nit').val();
			console.log("pagina:" + nit);
			$.post("../models/empresa/validar.php", {nit}, function (respuesta) {
				console.log("pagina:" + respuesta);
				if (respuesta == 1) {
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
					toastr["warning"]("Este nit ya esta en el sistema!");
					validarcedula = false;
				} else {
					$('#error').hide();
					validarcedula = true;
				}
			});
		}
	});
}

function validarExitenciaCorreo() {
	$('#correo').keyup(function () {
		if ($('#correo').val() != "") {
			var correo = $('#correo').val();
			console.log("pagina:" + correo);
			$.post("../models/global/validarcorreo.php", {
				correo
			}, function (respuesta) {
				console.log("pagina:" + respuesta);
				if (respuesta == 1) {
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
					toastr["warning"]("El correo que acaba de ingresa, ya esta en el sistema!");
					validarcedula = false;
				} else {
					$('#error').hide();
					validarcedula = true;
				}
			});
		}
	});
}