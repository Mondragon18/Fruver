var validarceluda = true;
$(document).ready(function (e) {
	
	validarExitenciaCorreo();
	listarClientes();


	// alert("hola clientes");
	$('#formulario').on('submit', function (e) {
		e.preventDefault();
		if ($('#id').val() == '') { 
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
		} else {
			if (validar()) { 
				$.ajax({
					type: 'POST',
					url: '../models/cliente/update.php',
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
							toastr["success"]("Cliente Actualizado con Exito");
							listarClientes();
							$('#editarcliente').modal('hide');
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
		}

	});

});

//controlador para mostrar la lista de administradores
function listarClientes() {
	var estado = 1;
	$(document).ready(function () {
		$('#tablaacliente').DataTable({
			"destroy": true,
			"searching": true,
			"ajax": "../models/cliente/listar.php",
			"dataSrc": "",
			"method": "POST",
			"columns": [{
					// 1
					"data": "id"
				},
				{
					// 2
					"data": "nombre"
				},
				{
					// 3
					"data": "correo"
				},
				{
					// 4
					"data": "telefono"
				},
				{
					// 5
					"data": "direccion"
				},
				{
					// 6
					"data": "genero"
				},
				{
					// 7
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
					// 8
					"data": "privilegio",
					render: function (data) {
						privilegio = data;
						return "";
					}
				},
				{
					// 9
					"data": "codigo",
					render: function (data) {
						if (privilegio == 1) {
							if (estado == 'Activo') {
								return "<div class='dropdown dropdown-action'><a href='#''  class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#' onclick='preparar(" + data + ")' data-toggle='modal' data-target='#editarcliente'><i class='si si-pencil'></i> Editar</a><a class='dropdown-item' href='#'' value=" + data + " onclick='eliminar(" + data + ")'><i class='fa fa-trash m-r-5'></i> Eliminar</a></div></div>";
							} else {
								return "<div class='dropdown dropdown-action'><a href='#'' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#'' value=" + data + " onclick='renovar(" + data + ")'><i class='fa fa-undo'></i> Renovar</a></div></div>";
							}
						} else if (privilegio == 4) {

							return "<div class='dropdown dropdown-action'><a href='#''  class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a><div class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' href='#' value=" + data + " onclick='preparar(" + data + ")' data-toggle='modal' data-target='#editarcliente'><i class='fa fa-pencil m-r-5'></i> Editar</a></div></div>";

						} else {
							return "";
						}
					}
				}

			]
		});
	});
}

function preparar(codigo) {
	$.post('../models/cliente/preparar.php', {
		codigo
	}, function (respuesta) {
		let ciudad = JSON.parse(respuesta);
		ciudad.data.forEach(dep => {
			$('#id').val(dep.PersonaCodigo);
			$('#nombres').val(dep.ClienteNombreFull);
			$('#direccion').val(dep.ClienteDireccion);
			$('#telefono').val(dep.ClienteTelefono);
			$('#correo').val(dep.PersonaEmail);
			$('#generou').val(dep.PersonaGenero);
			$('#privilegiou').val(dep.PrivilegioCodigo);
		});
	});
}

function eliminar(codigo) {
	$.post('../models/cliente/desactivar.php', {
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
			toastr["success"]("Cliente deshabilitado correctamente, puede Hablitarlo despues.", "Exito!");
			listarClientes();

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
			toastr["error"]("No se pudo des habilitar al cliente, por favor vuelva a intentarlo.", "Erorr!");
		}
	});
}

function renovar(codigo) {
	$.post('../models/cliente/activar.php', {
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
			toastr["success"]("Cliente Renovado correctamente.", "Exito!");
			listarClientes();

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
			toastr["error"]("No se pudo des habilitar al cliente, por favor vuelva a intentarlo.", "Erorr!")
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


function validar() {
	var cont = 0;


	var nombres = $('#nombres').val();
	if (nombres != "") {
		$('#nombres').removeClass('is-invalid');
		cont++;
	} else {
		$('#nombres').addClass('is-invalid');
	}


	var correo = $('#correo').val();
	if (correo != "" && correo.length > 0) {
		$('#correo').removeClass('is-invalid');
		cont++;
	} else {
		$('#correo').addClass('is-invalid');
	}


	if (cont == 2) {
		return true;
	} else {
		return false;
	}


}