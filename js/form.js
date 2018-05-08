var DOM_enviar = document.getElementById('btn_enviar');
var DOM_form = document.getElementById('myForm');

//Elementos DOM del formulario
var DOM_inputName = document.getElementById('input_nombre');
var DOM_alertName = document.getElementById('alertName');
var DOM_inputPass = document.getElementById('input_pass');
var DOM_alertPass = document.getElementById('alertPass');
var DOM_inputPass2 = document.getElementById('input_pass2');
var DOM_alertPass2 = document.getElementById('alertPass2');
var DOM_check = document.getElementById('inputCheckbox');
var DOM_alertCheck = document.getElementById('alertCheck');


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
		
		//Compruebo si la contraseña está repetida bien
		var passValue2 = DOM_inputPass2.value;
		if(passValue != passValue2)
		{
			correcto = false;
			DOM_alertPass2.style.display = "block";
		}
		else
		{
			DOM_alertPass2.style.display = "none";
		}
		
		//Compruebo si el checkbox esta marcado
		var checked = DOM_check.checked;
		if(checked == false)
		{
			correcto = false;
			DOM_alertCheck.style.display = "block";
		}
		else
		{
			DOM_alertCheck.style.display = "none";
		}
		
		//Si está todo bien, mando el form
		if(correcto == true)
		{
			DOM_form.submit();
			console.log('Se ha enviado');
		}
		else
		{
			console.log('Falla algo');
		}

}