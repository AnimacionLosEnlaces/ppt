<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <!--CSS propio-->
    <link rel="stylesheet" href="css/styles.css">
<title>Formulario</title>
</head>

<body>
<div class="container">
    <h1>Formulario Bootstrap</h1>
    <p>Los datos se mandarán a la página "destino.php"</p>

<form id="myForm" action="destino.php" method="get">
<div class="form-group">
    <label for="input_nombre">NOMBRE:</label>
    <br>
    <input type="text" id="input_nombre" name="form_nombre" class="form-control">
</div>
<div class="form-group">
	<label for="input_pass">CONTRASEÑA:</label>
	<input type="password" id="input_pass" name="form_pass" class="form-control">
</div>
<div class="form-group">
    <label>RAZA</label>
    <br>
    <label for="radio1">Elfo </label>
        <input type="radio" name="form_raza" value="elf" id="radio1"> 
    Humano 
        <input type="radio" name="form_raza" value="human"> 
    Orco 
        <input type="radio" name="form_raza" value="orc">
</div>
<div class="form-group">
Entrada check
<input type="checkbox">
</div>
<div class="form-group">
	<label for="input_select">Selecciona país</label>
	<br>
    <select name="form_country" id="input_select"  class="form-control" >
        <option value="es">España</option>
        <option value="fr">Francia</option>
    </select>
</div>
<span class="btn btn-warning" id="btn_enviar" >Enviar</span>

</form>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/form.js"></script>
</body>
</html>