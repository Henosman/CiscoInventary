(function ($) {
 "use strict";
 // Validation for order form
		$(".add-channel").validate(
		{					
			rules:
			{	
				nchannel:
				{
					required: true
				}
			},
			messages:
			{	
				nchannel:
				{
					required: 'Please enter name channel'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
 
 // Validation for order form
		$("#acount-infor").validate(
		{					
			rules:
			{	
				email:
				{
					required: true,
					email: true
				},
				phoneno:
				{
					required: true
				},
				password:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				},
				confarmpassword:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				}
			},
			messages:
			{	
			
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				phoneno:
				{
					required: 'Please enter mobile number'
				},
				password:
				{
					required: 'Please enter your password'
				},
				confarmpassword:
				{
					required: 'Please enter your confarm password'
				}
				
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
 
 // Validation for order form
		$(".add-inventory").validate(
		{					
			rules:
			{	
				
				position:
				{
					required: true
				},
				state:
				{
					required: true
				},
				product:
				{
					required: true
				},
				pdrpid:
				{
					required: true
				},
				serial:
				{
					required: true
				},
				code:
				{
					required: true
				},
				observation:
				{
					required: true,
				}
			},
			messages:
			{	
				
				position:
				{
					required: 'Please enter position'
				},
				state:
				{
					required: 'Please select state'
				},
				product:
				{
					required: 'Please enter product'
				},
				pdrpid:
				{
					required: 'Please enter pdrpid'
				},
				serial:
				{
					required: 'Please enter serial'
				},
				code:
				{
					required: 'Please enter code'
				},
				observation:
				{
					required: 'Please enter observation'
				}
			},					
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
		
		
		
 
	// Validation for login form
		$("#comment").validate(
		{					
			rules:
			{	
				name:
				{
					required: true
				},
				message:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				}
			},
			messages:
			{	
				name:
				{
					required: 'Please enter your name'
				},
				message:
				{
					required: 'Please enter your message'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
		
	// Validation for login form
		$(".addlibrary").validate(
		{					
			rules:
			{	
				nameasset:
				{
					required: true
				},
				subject:
				{
					required: true
				},
				imageico:
				{
					required: true
				},
				type:
				{
					required: true
				},
				price:
				{
					required: true
				},
				year:
				{
					required: true
				},
				status:
				{
					required: true
				},
				department:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				}
			},
			messages:
			{	
				nameasset:
				{
					required: 'Please enter your name of assets'
				},
				subject:
				{
					required: 'Please enter your subject'
				},
				imageico:
				{
					required: 'Please enter image'
				},
				department:
				{
					required: 'Please enter your department'
				},
				type:
				{
					required: 'Please enter library type'
				},
				price:
				{
					required: 'Please enter price'
				},
				year:
				{
					required: 'Please enter year'
				},
				status:
				{
					required: 'Please enter status'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
	// Validation for login form
		$(".add-department").validate(
		{					
			rules:
			{	
				name:
				{
					required: true
				},
				headofdepartment:
				{
					required: true
				},
				email:
				{
					required: true
				},
				phone:
				{
					required: true
				},
				noofstudent:
				{
					required: true
				},
				status:
				{
					required: true
				}
			},
			messages:
			{	
				name:
				{
					required: 'Please enter your name'
				},
				headofdepartment:
				{
					required: 'Please enter head of department'
				},
				email:
				{
					required: 'Please enter email'
				},
				phone:
				{
					required: 'Please enter your phone'
				},
				noofstudent:
				{
					required: 'Please enter no of student'
				},
				status:
				{
					required: 'Please enter status'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
	// Validation for login form
		$("#send-mail").validate(
		{					
			rules:
			{	
				name:
				{
					required: true
				},
				headofdepartment:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
				phone:
				{
					required: true
				},
				noofstudent:
				{
					required: true
				},
				status:
				{
					required: true
				}
			},
			messages:
			{	
				name:
				{
					required: 'Please enter your name'
				},
				headofdepartment:
				{
					required: 'Please enter head of department'
				},
				email:
				{
					required: 'Please enter email'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				noofstudent:
				{
					required: 'Please enter no of student'
				},
				status:
				{
					required: 'Please enter status'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
 
})(jQuery);

const formulario=document.getElementById('formulario');
const inputs= document.querySelectorAll('#formulario input');
const textareas= document.querySelectorAll('#formulario textarea');
const expresiones = {
	position: /^[a-zA-Z0-9\_\-]{1,16}$/, // Letras, numeros, guion y guion_bajo
	product: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	pdrpid: /^[a-zA-Z0-9\_\-]{1,20}$/, // Letras, numeros, guion y guion_bajo
	serial: /^[a-zA-Z0-9\_\-]{4,20}$/, // Letras, numeros, guion y guion_bajo
	code: /^[a-zA-Z0-9\_\-]{1,20}$/, // Letras, numeros, guion y guion_bajo
	observation: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}
const campos = {
	position: false,
	product: false,
	pdrpid: false,
	serial: false,
	code: false,
	observation: false
}

const validarFormulario = (e) => {
	switch (e.target.name){
		case "position":
			validarCampo(expresiones.position, e.target, 'position');
		break;
		case "product":
			validarCampo(expresiones.product, e.target, 'product');
		break;
		case "pdrpid":
			validarCampo(expresiones.pdrpid, e.target, 'pdrpid');
		break;
		case "serial":
			validarCampo(expresiones.serial, e.target, 'serial');
		break;
		case "code":
			validarCampo(expresiones.code, e.target, 'code');
		break;
		case "observation":
			validarCampo1(expresiones.observation, e.target, 'observation');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error--activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}
const validarCampo1 = (expresion, textarea, campo) => {
	if (expresion.test(textarea.value)) {
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error--activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

textareas.forEach((textarea) => {
	textarea.addEventListener('keyup', validarFormulario);
	textarea.addEventListener('blur', validarFormulario);
});
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	

	if (campos.position && campos.product && campos.pdrpid && campos.serial && campos.code && campos.observation ) {
		
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
		e.preventDefault();
	}
});


