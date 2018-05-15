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

<body onLoad="init()">
<div class="container">
    <h1>Formulario Bootstrap</h1>
    <p>Los datos se mandarán a la página "destino.php"</p>

<form id="myForm" action="destino.php" method="get">
<div class="form-group">
    <label for="input_nombre">NOMBRE:</label>
    <br>
    <input type="text" id="input_nombre" name="form_nombre" class="form-control">
</div>
<!--Inicio alerta Nombre-->
<div class="alert alert-warning" style="display:none" id="alertName">
  <strong>¡Alerta!</strong> No puedes dejar esta campo en blanco.
</div>
<!--Fin alerta nombre-->

<!--Input PASS-->
<div class="form-group">
	<label for="input_pass">CONTRASEÑA:</label>
	<input type="password" id="input_pass" name="form_pass" class="form-control">
</div>
<!--Fin Input PASS-->
<!--Inicio alerta Pass-->
<div class="alert alert-warning" style="display:none" id="alertPass">
  <strong>Warning!</strong> La contraseña no puede estar vacía
</div>
<!--Fin alerta Pass-->

<!--Input PASS REP-->
<div class="form-group">
	<label for="input_pass2">Repite la contraseña:</label>
	<input type="password" id="input_pass2" name="form_pass2" class="form-control">
</div>
<!--Fin Input PASS   REP-- 
<!--Inicio alerta Pass rep-->
<div class="alert alert-warning" style="display:none" id="alertPass2">
  <strong>Warning!</strong> Las contraseñas no son iguales
</div>
<!--Fin alerta Pass rep-->


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
Acepto las <a href="#" data-toggle="modal" data-target="#myModal">condiciones</a> del sitio web
<input type="checkbox" id="inputCheckbox">
</div>
<!--Inicio alerta Check-->
<div class="alert alert-warning" style="display:none" id="alertCheck">
  <strong>Warning!</strong> Debes aceptar las normas
</div>
<!--Fin alerta check-->
<div class="form-group">
	<label for="input_select">Selecciona país</label>
	<br>
    <select name="form_country" id="input_select"  class="form-control" >
        <option value="es">España</option>
        <option value="fr">Francia</option>
    </select>
</div>
<?php if(isset($_SESSION['id_usuario'])) : ?>
<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario'] ?>">
<?php else : ?>
<input type="hidden" name="id_usuario" value="nop">
<?php endif ?>
<span class="btn btn-warning" id="btn_enviar" >Enviar</span>

</form>





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Condiciones de la web</h4>
      </div>
      <div class="modal-body">
        <p>Acepto vender mi alma al webmaster</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--Fin modal-->



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="js/jquery-3.2.1.slim.min.js"></script>-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/form.js"></script>
</body>
</html>