// JavaScript Document
var activo = false;
var inicial = 0;
var avisoAlerta = "Todavía no";

//Array con las jugadas
var jugadas = [];
jugadas[0] = "Piedra";
jugadas[1] = "Papel";
jugadas[2] = "Tijera";

//console.log(jugadas[0]);

//Elementos del DOM
var DOM_countdown = document.getElementById('countDown');
var DOM_koala = document.getElementById('imgKoala');



function init(){
	//console.log('FUNCIONA!');
	cuentaAtras();
	
}

function cuentaAtras(){
	console.log('se ejecuta la cuenta atras');
	
	
	DOM_countdown.innerHTML = jugadas[inicial];

	var counter = setInterval(function()  {
		console.log('ejecutando ca ' + inicial);
		if(inicial  < 2) {
			inicial++;
			DOM_countdown.innerHTML = jugadas[inicial];
		}
		else{
			DOM_countdown.innerHTML = "¡YA!";
			activo = true;
			setTimeout(function(){
				activo = false;
				avisoAlerta = 'Se ha pasado el tiempo';
				console.log('Se ha pasado el tiempo');
			}, 3000);
			clearInterval(counter);
		}
	},1000);

}

//Pausar
setTimeout(function(){
		console.log('Han pasado 3 segundos')
	}, 3000);

//Interactividad del koala
DOM_koala.addEventListener('click',koala);

function koala(){
	
	if(activo == false)
	{
		alert(avisoAlerta);
	}
	else 
	{
		console.log('KOALA');
	}
}
	


