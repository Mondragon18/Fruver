var validarceluda = true;
$(document).ready(function (e) {

	

	listarAdministrador();
	validarExitenciaDNI();
	validarExitenciaCorreo();
	
	
	$('#formularioagregar').on('submit', function (e) {
		e.preventDefault();
		if (validaragregar()) {
			if (validarcoincidencia()) {
				$.ajax({
					type: 'POST',
					url: '../models/administrador/insertar.php',
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
							toastr["success"]("Administrador registrado con exito");
							listarAdministrador();
							$('#agregaradministrador').modal('hide');
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
							toastr["error"]("Error, no se pudo registrar administrador!");
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
			toastr["error"]("Rellene los campos necesarios");
		}
	});

	$('#formularioeditar').on('submit', function (e) { 
		e.preventDefault();
		if (validareditar()) {
			$.ajax({
				type: 'POST',
				url: '../models/administrador/update.php',
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
						toastr["success"]("Administrador Actualizado con Exito");
						listarAdministrador();
						$('#editaradministrador').modal('hide');
					} else if (respuesta == 0) {

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
				}
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
	});
});


//controlador para mostrar la lista de administradores
function listarAdministrador() {
	var estado = 1;
	$(document).ready(function () {
		$('#tablaadministrador').DataTable({
			"destroy": true,
			"searching": true,
			"ajax": "../models/administrador/listar.php",
			"dataSrc": "",
			"method": "POST",
			"columns": [
				{
					"data": "Identificacion"
				},
				{
					"data": "nombre"
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
					"data": "privilegio",
					render: function (data) {
						privilegio = data;
						return "";
					}
				},
				{
					"data": "codigo",
					render: function (data) {
						if (privilegio <= 2) {
							if (estado == 'Activo') {
								return "<div class='dropdown dropdown-action'><a href='#''  class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#' onclick='preparar(" + data + ")' data-toggle='modal' data-target='#editaradministrador'><i class='si si-pencil'></i> Editar</a><a class='dropdown-item' href='#'' value=" + data + " onclick='eliminar(" + data + ")'><i class='fa fa-trash m-r-5'></i> Eliminar</a></div></div>";
							} else {
								return "<div class='dropdown dropdown-action'><a href='#'' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#'' value=" + data + " onclick='renovar(" + data + ")'><i class='fa fa-undo'></i> Renovar</a></div></div>";
							}
						} else if (privilegio <= 4) {
							
							return "<div class='dropdown dropdown-action'><a href='#''  class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#' value=" + data + " onclick='preparar(" + data + ")' data-toggle='modal' data-target='#editaradministrador'><i class='fa fa-pencil m-r-5'></i> Editar</a></div></div>";
							 
						} else if (privilegio <= 6) {
							return "";
						}
					}
				}

			]
		});
	});
}

function preparar(codigo) {
	$.post('../models/administrador/preparar.php', {
		codigo
	}, function (respuesta) {
		let ciudad = JSON.parse(respuesta);
		ciudad.data.forEach(dep => {
			$('#id').val(dep.PersonaCodigo);
			$('#identificacionu').val(dep.AdminDNI);
			$('#nombresu').val(dep.AdminNombre);
			$('#apellidou').val(dep.AdminApellido);
			$('#direccionu').val(dep.AdminDireccion);
			$('#telefonou').val(dep.AdminTelefono);
			$('#correou').val(dep.PersonaEmail);
			$('#generou').val(dep.PersonaGenero);
			$('#privilegiou').val(dep.PrivilegioCodigo);
		});
	});
}

function eliminar(codigo) {
	$.post('../models/administrador/desactivar.php', {
		codigo
	}, function (respuesta) {
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
			toastr["success"]("Administrador deshabilitado correctamente, puede Hablitarlo despues.", "Exito!");
			listarAdministrador();

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
			toastr["error"]("No se pudo des habilitar al Doctor por favor Vuelva a intentarlo.", "Erorr!");
		}
	});
}

function renovar(codigo) {
	$.post('../models/administrador/activar.php', {codigo}, function (respuesta) {
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
			toastr["success"]("Administrador Renovado correctamente.", "Exito!");
			listarAdministrador();

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
			toastr["error"]("No se pudo des habilitar al administrador, por favor Vuelva a intentarlo.", "Erorr!")
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

function validaragregar() {
	var cont = 0;

	var cedula = $('#identificacion').val();
	if (cedula != "" && cedula.length > 4) {
		$('#identificacion').removeClass('is-invalid');
		cont++;
	} else {
		$('#identificacion').addClass('is-invalid');
	}

	var nombres = $('#nombres').val();
	if (nombres != "") {
		$('#nombres').removeClass('is-invalid');
		cont++;
	} else {
		$('#nombres').addClass('is-invalid');
	}

	var apellidos = $('#apellidos').val();
	if (apellidos != "") {
		$('#apellidos').removeClass('is-invalid');
		cont++;
	} else {
		$('#apellidos').addClass('is-invalid');
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

function validareditar() {
	var cont = 0;

	var cedula = $('#identificacionu').val();
	if (cedula != "" && cedula.length > 4) {
		$('#identificacionu').removeClass('is-invalid');
		cont++;
	} else {
		$('#identificacionu').addClass('is-invalid');
	}

	var nombres = $('#nombresuu').val();
	if (nombres != "") {
		$('#nombresu').removeClass('is-invalid');
		cont++;
	} else {
		$('#nombresu').addClass('is-invalid');
	}

	var apellidos = $('#apellidosu').val();
	if (apellidos != "") {
		$('#apellidosu').removeClass('is-invalid');
		cont++;
	} else {
		$('#apellidosu').addClass('is-invalid');
	}

	var correo = $('#correou').val();
	if (correo != "" && correo.length > 0) {
		$('#correou').removeClass('is-invalid');
		cont++;
	} else {
		$('#correou').addClass('is-invalid');
	}

	var privilegio = $('#privilegiou').val();
	if (privilegio != "" && privilegio.length > 0) {
		$('#privilegiou').removeClass('is-invalid');
		cont++;
	} else {
		$('#privilegiou').addClass('is-invalid');
	}

	if (cont == 5) {
		return true;
	} else {
		return false;
	}

}

function validarExitenciaDNI() {
	$('#identificacion').keyup(function () {
		if ($('#identificacion').val() != "") {
			var identificacion = $('#identificacion').val();
			console.log("pagina:" + identificacion);
			$.post("../models/administrador/validar.php", {
				identificacion
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
					toastr["warning"]("Esta cedula ya esta en el sistema!");
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