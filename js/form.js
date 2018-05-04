var DOM_enviar = document.getElementById('btn_enviar');
var DOM_form = document.getElementById('myForm');

//Elementos DOM del formulario
var DOM_inputName = document.getElementById('input_nombre');
var DOM_alertName = document.getElementById('alertName');
var DOM_inputPass = document.getElementById('input_pass');
var DOM_alertPass = document.getElementById('alertPass');


DOM_enviar.addEventListener('click',validarForm);

function init(){
	DOM_inputName.focus();
}

function validarForm(){
		
		var correcto = true;
		
		//Compruebo si el nombre está escrito
		var nameValue = DOM_inputName.value;
		if(nameValue.trim() == '')
		{
			correcto = false;
			DOM_alertName.style.display = "block";
		}
		else
		{
			DOM_alertName.style.display = "none";

		}
		
		//Compruebo si la contraseña está escrita
		//Esta vez usamos JQuery para mostrar las alertas
		var passValue = DOM_inputPass.value;
		if(passValue.trim() == '')
		{
			correcto = false;
			//DOM_alertName.style.display = "block";
			$("#alertPass").slideDown();
		}
		else
		{
			//DOM_alertName.style.display = "none";
			$("#alertPass").slideUp();
		}
		
		//Si está todo bien, mando el form
		if(correcto == true)
		{
			//DOM_form.submit();
			console.log('Se ha enviado');
		}
		else
		{
			console.log('Falla algo');
		}

}