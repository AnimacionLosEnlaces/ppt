// JavaScript Document
var activo = true;
var inicial = 0;
var avisoAlerta = "Todavía no";

var usrCount;
var iaCount;

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
	//Pongo los contadores
	usrCount = 0;
	iaCount = 0;
	document.getElementById('usrCount').innerHTML = usrCount;
	document.getElementById('iaCount').innerHTML = iaCount;

}

function cuentaAtras(userPlay){
	inicial = 0;
	console.log('se ejecuta la cuenta atras');
	activo = false;
	DOM_countdown.innerHTML = jugadas[inicial];

	var counter = setInterval(function()  {
		console.log('ejecutando ca ' + inicial);
		if(inicial  < 2) {
			inicial++;
			DOM_countdown.innerHTML = jugadas[inicial];
		}
		else{
			DOM_countdown.innerHTML = "¡YA!";
			//Paramos la cuenta atrás
			clearInterval(counter);
			//La máquina elige jugada
			var iaPlay = getRandomInt(0,2);	
			console.log("La máquina ha elegido:" + jugadas[iaPlay]);
			console.log("El usuario ha elegido:" + jugadas[userPlay]);
			activo = true;
			
			if(userPlay != iaPlay)
			{
				
				resultado = userWins(jugadas[userPlay],jugadas[iaPlay]);
				if(resultado == true)
				{
					usrCount++;
					document.getElementById('usrCount').innerHTML = usrCount;
				}
				else
				{
					iaCount++;
					document.getElementById('iaCount').innerHTML = iaCount;
				}
					
			
			}
			else
			{
				//Han empatado
				
			}
				
		}
	},600);
	

}

///Funcion para comprobar quién gana
function userWins(usrMov, iaMov)
{
	
	usrMov = usrMov.toLowerCase();
	iaMov = iaMov.toLowerCase();
	
	superArray = new Array();
	superArray['piedra'] = new Array();
	superArray['piedra']['img'] = 'piedra.png';
	superArray['piedra']['gana'] = new Array();
	superArray['piedra']['gana'] = ['lagarto','tijera'];
	superArray['papel'] = new Array();
	superArray['papel']['img'] = 'papel.png';
	superArray['papel']['gana'] = ['piedra','spock'];
	superArray['tijera'] = new Array();
	superArray['tijera']['img'] = 'tijera.png';
	superArray['tijera']['gana'] = ['papel','lagarto'];
	superArray['lagarto'] = new Array();
	superArray['lagarto']['img'] = 'lagarto.png';
	superArray['lagarto']['gana'] = ['spock','papel'];
	superArray['spock'] = new Array();
	superArray['spock']['img'] = 'spock.png';
	superArray['spock']['gana'] = ['tijera','piedra'];

	if (superArray[usrMov]['gana'].indexOf(iaMov) === -1) {
    	return false;
	}
	else {
		return true;
	}	
		
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
		cuentaAtras(userPlay);
		/*
		var iaPlay = getRandomInt(0,2);	
		console.log("La máquina ha elegido:" + jugadas[iaPlay]);
		console.log("El usuario ha elegido:" + jugadas[userPlay]);
*/
	}
}

//Funcion elige un nº al azar
function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}




