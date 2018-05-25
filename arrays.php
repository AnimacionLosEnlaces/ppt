<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body onLoad="elegirCarta()">
<img src="img/back/blue_back.png" id="imagenNaipe">
<script>

palos = [];
palos[0] = "C";
palos[1] = "D";
palos[2] = "H";
palos[3] = "S";

function elegirCarta(){
	var numCarta = getRandomInt(1, 13);
	var cartaDefi = numCarta;
	if(numCarta == 1)
	{
		cartaDefi = "A";
	}
	else if(numCarta == 11)
	{
		cartaDefi = "J";
	}
	else if(numCarta == 12)
	{
		cartaDefi = "Q";
	}
	else if(numCarta == 13)
	{
		cartaDefi = "K";
	}
	var palo = getRandomInt(0, 3);
	var carta = cartaDefi + palos[palo] + ".png";
	console.log(carta);
	
	document.getElementById('imagenNaipe').src = "img/naipes/" + carta;
	
}

//Funcion elige un nº al azar
function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}




</script>

</body>
</html>