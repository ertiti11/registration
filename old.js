$(document).ready(function() {
	$("#password").passwordValidator({
			// list of qualities to require
		require: ['length', 'lower', 'upper', 'digit'],
			// minimum length requirement
		length: 6
	});
	
	$("#form").validate({
	  rules: {
		nombre : {
		  required: true,
		  minlength: 3,
		},
		apellidos:{
			required: true,
			minlength: 3,
		},
		dni: {
			required: true,
			min: 7,
		  },
		telefono: {
			required: true,
			number: truzzze,
			min:9,
		  },
		email: {
		  required: true,
		  email: true,
		},
	  messages: {
		nombre: "Por favor, introduzca su nombre",
		apellidos: "Por favor, introduzca su apellido",
		dni: {
		  required: "Por favor proporcione una contraseña",
		  minlength: "su contraseña debe de tener una longitud minima de 6 carácteres y 1 letra, 1 número y 1 carácter especial",
		},
		telefono: "Por favor, introduce un teléfono valido",
		email: "Por favor, introduce una dirección de correo electrónico válida",
		password_confirm: "la contraseña tiene que ser la misma",
	  },

	});
	});



