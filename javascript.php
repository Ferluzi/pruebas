<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
		<title>Pruebas de codigo</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estylo.css">
   
  
  

	</head>
	<body>
 
	<?php include "php/navbar.php"; ?>

<section>
    
    <div class="container"> 
       <h1>Aprendiedno javascript</h1> 
    </div>   

<div class="container">
	<h2 class="text-muted">¿que es una Variable?</h2>
	<div class="row">
	<p class="text-ino">Las variables son basicamente contenedores de valores
	<p class="font-weight-bold"> (como numeros o cadenas de texto)</p> , se crea una variable con las palabras
	 claves</p>
	<span class="badge badge-info">LET</span> o <span class="badge badge-info">VAR</span><p>seguido de un nombre para la variable </p>
	</div>
</div>

<div class="col-lg-12">



	<figure class="highlight">
		<pre>
			<code>

			<!-- definiendo variable con let -->
				<span class="etiqueta">&lt;script&gt;</span>
					<span class="var">let</span> <span class="texto">nombre;</span>
			<!-- definiendo variable con var	 -->
					<span class="var">var</span> <span class="texto">nombre;</span>
				<span class="etiqueta">&lt;/script&gt;</span>
				
			</code>
		</pre>
	</figure>



</div>







</section>

  
    <script src="js/jquery.min.js" type="text/javascript"></script>  
    <script src="js/bootstrap.min.js" type="text/javascript"></script>  

		  <!-- aprendiendo javascript -->
    <script src="js/aprendiendoJS.js"></script>
	</body>
</html>