var DOM_enviar = document.getElementById('btn_enviar');
var DOM_form = document.getElementById('myForm');


DOM_enviar.addEventListener('click',validarForm);


function validarForm(){
		
		DOM_form.submit();
	
}