<?php
include('includes/config.php');

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
<title>Bases de datos</title>
</head>

<body>
<div>
<?php

$sql = "SELECT * FROM plataformas";
$result = mysqli_query($conn, $sql);

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

mysqli_close($conn);
?>

</div>

</body>
</html>