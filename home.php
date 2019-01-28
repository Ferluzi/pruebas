<?php
session_start();
if(!isset($_SESSION["username"]) || $_SESSION["username"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Pruebas</title>
		<!-- Libreria de iconos font-awesome -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
		<!-- Framewor de CSS bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- Estylos css propios para la pagina --> 
		<link rel="stylesheet" type="text/css" href="css/estylo.css">
	</head>
	<body>


<?php include "php/navbar.php";?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-3">
			<a href="" class="thumbnail" >
				<img src="img/niko.jpg" class="img-fluid" alt="Responsive image" >
			</a>	
		</div>
		<div class="col-md-6">
				<h1 class="text-success">Bienvenido
					<?php 
						echo $_SESSION['username'];
					?>
				</h1>
		</div>
	
		<div class="col-md-6">
			<button type="button" class="btn btn-default"> Boton</button>
			<button type="button" class="btn btn-primary"> Boton</button>
			<button type="button" class="btn btn-success"> boton</button>
			<button type="button" class="btn btn-info"> Boton</button>
			<button type="button" class="btn btn-warning"> boton</button>
			<button type="button" class="btn btn-danger"> Boton</button>
															
		</div>
	</div>
   <hr>
</div>

    <div class="container">
        <div class="row">
            <h2 class="text-success">Introduccion:</h2>
                <h4 class="text-info">  Esta pagina sera utilizada para probar, ejecutar y archivar codigo para poder re-utilizarlo en el futuro.</h4>
              
        </div>    
    </div>
	    <div id="footer">
        <div class="container">
            <div class="col-xs-12">
			
			<div class="col-lg-4">
            <!-- Derechos recrbados Copy right -->
                &copy; Creado por Nicolas Muñoz Palacios 
				</div>
				
			<div class="col-lg-4">
            <!-- Derechos recrbados Copy right -->
                &copy; Creado por Nicolas Muñoz Palacios 
				</div>
				
			<div class="col-lg-4">
            <!-- Derechos recrbados Copy right -->
                &copy; Creado por Nicolas Muñoz Palacios 
				</div>
				
            </div>
        </div>
    </div>
		

	<!--JS-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	</body>
</html>
