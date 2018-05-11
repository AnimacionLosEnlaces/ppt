DOM_logged = document.getElementById('span_logged');

//Cada medio segundo actualizo los segundos que lleva logeado
setInterval(function(){ 
			var unixTime = Math.floor(Date.now() / 1000);
			var secs = (unixTime - loggedTime);
			console.log(secs);
			DOM_logged.innerHTML = secs;
		}, 500);