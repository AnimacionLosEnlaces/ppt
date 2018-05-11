<?php
session_start();

if(isset($_POST['nombre']))
{
	$_SESSION['session_name'] = $_POST['nombre'];
	$_SESSION['session_lastname'] = $_POST['apellido'];
	$_SESSION['session_time'] = time();
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>External vars</title>
</head>

<body>

<?php if(isset($_GET['logout'])) : ?>
<!--Vengo de la página logout-->
<h2>Has salido de la sesión</h2>
<?php endif ?>

<?php if(!isset($_SESSION['session_name'])) : ?>
<!--No existe la variable de sesión, así que muestro el form-->
<form method="post" action="">

<input type="text" name="nombre" placeholder="Tu nombre?">
<input type="text" name="apellido" placeholder="Escribe tu apellido">

<button type="submit">Enviar</button>

</form>


<?php else : ?>
<!--Existe la variable de sesión así que saludo-->
<p>Hola <?php echo $_SESSION['session_name'] . " " .  $_SESSION['session_lastname'] ?>.</p>
<p>Llevas logeado <strong><span id="span_logged">-</span></strong> segundos.</p>
<p>Pincha <a href="logout.php">aquí</a> para logout.</p> 


<?php endif ?>

<h1>

<script>
//Declaro las variables que me pasa PHP
var nombre = '<?php echo $_SESSION['session_name']; ?>';
var loggedTime = '<?php echo $_SESSION['session_time']; ?>';

</script>

<script src="js/vars.js"></script>





</h1>


<h1>






<PRE>
<?php

//print_r($_POST);
/*
if(isset($_POST['nombre']) && $_POST['nombre'] != '')
{
	
	echo $_POST['nombre'] . " dice: " . $_POST['nombre'];

}
*/
echo "Tiempo Timestamp: " . time();
?>
</PRE>
</h1>

</body>
</html>