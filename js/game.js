// JavaScript Document
var activo = false;

//Elemtos del DOM
var DOM_countdown = document.getElementById('countDown');

function init(){
	//console.log('FUNCIONA!');
	cuentaAtras();
	
}

function cuentaAtras(){
	console.log('se ejecuta la cuenta atras');
	var inicial = 5;
	
	DOM_countdown.innerHTML = inicial;

	var counter = setInterval(function()  {
		console.log('ejecutando ca ' + inicial);
		inicial = inicial -1;
		DOM_countdown.innerHTML = inicial;
		
	},1000);

}



