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

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
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
<a href="?id=2"> <img src="img/Koala.jpg" width="200"></a>
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
	
}
else
{
	echo "No hay resultados a esta consulta";
	
}



/*
//Nº de registros:
echo "<p>Registros devueltos: " . mysqli_num_rows($result) . "</p>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id_plataforma"]. " - Name: " . $row["nombre"]. " - Company: " . $row["company"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
mysqli_close($conn);


?>

</div>

</body>
</html>