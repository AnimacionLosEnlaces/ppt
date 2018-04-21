<?php
//Declaro las variables al comienzo del documento

//Array con las imágenes (archivos)
$images = array();
//Añado los elementos del array dejando la clave vacía para se añada un nº autoincremental
$images[] = 'flores.jpg';
$images[] = 'gota.jpg';
$images[] = 'hierba.jpg';
$images[] = 'hoja.jpg';
$images[] = 'lago.jpg';
$images[] = 'nubes.jpg';
$images[] = 'mirador.jpg';
$images[] = 'rio.jpg';

//Si quiero mostrar cómo queda el array lo puedo hacer con este comando: print_r($images);

//Ahora creo un array con los títulos de cada imagen
//Usaré otro método para crear arrays pero el resultado es el mismo
$titulos = array('Primera foto', 'Segunda foto','Tercera foto','Cuarta foto','Quinta foto','Sexta foto','Séptima foto','Octava foto');

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Ejemplos</title>
  </head>
  <body>
   	<div class="container">
    <h1>Ejemplo de bucle con PHP</h1>
	<h3>Veremos cómo poner varias imágenes mediante arrays y bucles, usando un diseño responsive</h3>
    
    	<div class="row">
        
        	<?php for($n=0;$n<8;$n++) : ?>
        	
        	<div class="col-md-3 col-sm-6 col-xs-12">
				<img src="img/<?php echo $images[$n] ?>" class="img-fluid" alt="<?php echo $titulos[$n] ?>">
				<p><?php echo $titulos[$n] ?></p>
			</div>
       	
        	<?php endfor ?>
        </div>
    	

    	
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    </div>
  </body>
</html>
