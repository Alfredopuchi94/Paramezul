
	$(function() {
 
		$("#form_create").validate({
			rules: {
				fname: "required",
				lname: "required",
				pass: {
					required: true,
					minlength: 6
				},
				vpass: {
					required: true,
					minlength: 6,
					equalTo: "#pass"
				},
				email: {
					required: true,
					email: true
				},
				tlf: {

					required: true,
					minlength: 11

				},
			},
			messages: {
				fname: "Por favor ingrese su primer nombre",
				lname: "Por favor ingrese su apellido",
				pass: {
					required: "Por favor ingrese una contraseña",
					minlength: "Su contraseña debe tener al menos 6 caracteres"
				},
				vpass: {
					required: "Por favor ingrese una contraseña",
					minlength: "Su contraseña debe tener al menos 6 caracteres",
					equalTo: "Las contraseñas son diferentes. Por favor ingrese las mismas."
				},
				email: { 
					required: "Por favor ingrese un correo",
					email: "Por favor ingrese un correo valido"


					  },
				tlf:"Ingrese un numero de telefono valido"
			}
		});



	});



	$("#form_ambulancias").validate({
		rules: {
			placa: {
				required: true,
				minlength: 7

			},
			modelo: {
				required: true,
				minlength: 2

			},
			tipo: {
				required: true

			}



		},

		messages: {
			placa: {
				required: "Por favor ingrese un numero de placa",
				minlength: "Por favor ingrese una placa valida"

			},
			modelo: {
				required: "Por favor ingrese un modelo de ambulancia",
				minlength: "Por favor ingrese un modelo valido"

			},
			tipo: {
				required: "Por favor ingrese un tipo de ambulancia"
				
			},



		},



	});


	$("#form_login").validate({
		rules: {
			email: {
				required: true,
				email: true

			},
			pass_cliente: {
				required: true,
				minlength: 6

			},

		},

		messages: {
			
			pass_cliente: {
				required: "Por favor ingrese su contraseña",
				minlength: "Por favor ingrese una contraseña valida"

			},
		    email: {
				required: "Por favor ingrese su correo electronico",
				email: "Por favor ingrese un correo valido"
		           }
		},

		onfocusout: false,
		onkeyup: false,
		onclick: false



	});


