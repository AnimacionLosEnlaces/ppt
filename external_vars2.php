<?php
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paso de variables</title>
</head>

<body>
<?php

echo $_SESSION['session_var'];

?>


</body>
</html>