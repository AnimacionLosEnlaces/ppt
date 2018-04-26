<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recepción</title>
</head>

<body>
<PRE>
<?php 
if(isset($_POST) && count($_POST) != 0)
{
	print_r($_POST);
}
else
{
	print_r($_GET);
}
?>
 </PRE>
 <a href="formulario.php">Volver</a>
</body>
</html>