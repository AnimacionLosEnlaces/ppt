<?php
include('includes/config.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    die("Se ha producido un error al conectar con la base datos: " . $e->getMessage());
    }


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bases de datos</title>
</head>

<body>
</body>
</html>