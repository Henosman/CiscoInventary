const formularioloan = document.getElementById('formularioloan');
const inputsloan = document.querySelectorAll('#formularioloan input');
const textareasloan = document.querySelectorAll('#formularioloan textarea');

const expresiones1 ={
	
	idloan:/^[a-zA-Z0-9\_\-]{1,16}$/, // 7 a 14 numeros.
	dateloan:/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/,
	estimateddate:/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/,
	observations: /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.

}

const campos1 = {
	idloan: false,
	dateloan: false,
	estimateddate: false,
	observations: false
}

const validarFormulario2 = (e) => {
	switch (e.target.name){
		case "idloan":
			validarCampo3(expresiones1.idloan, e.target, 'idloan');
		break;
	
		case "observation":
			validarCampo4(expresiones1.observation, e.target, 'observations');
		break;
	}
}

const validarCampo3 = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error--activo');
		campos1[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos1[campo] = false;
	}
}
const validarCampo4 = (expresion, textarea, campo) => {
	if (expresion.test(textarea.value)) {
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error--activo');
		campos1[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos1[campo] = false;
	}
}

textareasloan.forEach((textarea) => {
	textarea.addEventListener('keyup', validarFormulario2);
	textarea.addEventListener('blur', validarFormulario2);
});
inputsloan.forEach((input) => {
	inputloan.addEventListener('keyup', validarFormulario2);
	input.addEventListener('blur', validarFormulario2);
});
formularioloan.addEventListener('submit', (e) => {
	

	
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
		e.preventDefault();
	
});




