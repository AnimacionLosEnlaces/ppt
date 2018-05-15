<?php
include('includes/config.php');

//Vars
if(isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id_producto = $_GET['id'];
}
else
{
	$id_producto = '';
}

//Datos del producto
$datos_producto = array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Antes que nada, especifico que las consultas son en UTF8
mysqli_query($conn,"set names 'utf8'");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $webtitle ?></title>
</head>

<body>

<div>
<?php

//Creo la consulta
//Uso la variable $id_producto que si no está deginida estará vacía (por eso tengo que poner comillas en la consulta)
$sql = "SELECT * FROM `productos` WHERE id_producto = '" . $id_producto . "' LIMIT 1";

//echo $sql;

$result = mysqli_query($conn, $sql);

if( mysqli_num_rows($result) > 0)
{
	
	echo "Resultados de la consulta: " . mysqli_num_rows($result);
	//Obtengo los resultados en un array asociativo
	$datos_producto = mysqli_fetch_assoc($result);
	//print_r($datos_producto);
	
}
else
{
	//echo "No hay resultados a esta consulta";
	
}

?>
<?php if(count($datos_producto) > 0) : ?>
<h1><?php echo $datos_producto['title'] ?></h1>
<h2><?php echo $datos_producto['descr_breve'] ?> €</h2>
<h3><?php echo $datos_producto['precio'] ?> €</h3>
<p>Requisitos: <?php echo $datos_producto['requisitos'] ?></p>
<p>Productos restantes: <?php echo $datos_producto['stock'] ?></p>
<p><img src="img/portadas/<?php echo $datos_producto['imagen'] ?>"> </p>
<p><a href="database.php">Volver</a></p>

<?php else : ?>

<h4>Selecciona un producto:</h4>

<?php
$sql = "SELECT * FROM productos";
//echo $sql;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<a href="?id=' . $row['id_producto'] . '">  <img src="img/portadas/' . $row['imagen'] . '" height="30" title="' . $row['title'] . '" alt="' . $row['title'] . '"></a>&nbsp;
		' . $row['title'] . '<hr>
		';
    }
} else {
    echo "0 results";
}


?>

<?php endif ?>
</div>

</body>
</html>
<?php mysqli_close($conn); ?>