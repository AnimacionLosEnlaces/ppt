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
var DOM_medusa = document.getElementById('imgMedusa');
var DOM_pinguino = document.getElementById('imgPinguino');



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
			}, 10000);
			clearInterval(counter);
		}
	},200);

}


//Interactividad del koala
DOM_koala.addEventListener('click',function() {
		ejecutarIA(0);
	});
DOM_medusa.addEventListener('click',function() {
		ejecutarIA(1);
	});
DOM_pinguino.addEventListener('click',function() {
		ejecutarIA(2);
	});


function ejecutarIA(userPlay){
	
	if(activo == false)
	{
		alert(avisoAlerta);
	}
	else 
	{
		var iaPlay = getRandomInt(0,2);	
		console.log("La máquina ha elegido:" + jugadas[iaPlay]);
		console.log("El usuario ha elegido:" + jugadas[userPlay]);

	}
}

//Funcion elige un nº al azar
function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}




