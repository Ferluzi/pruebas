<?php
session_start();
?>
<html>
	<head>
		<title>Pruebas de codigo</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estylo.css">
	</head>
	<body>
    <script src="js/jquery.min.js" type="text/javascript"></script>	
	<script src="js/bootstrap.min.js" type="text/javascript"></script>	

	<?php include "php/navbar.php"; ?>
	<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
               <!--NOTA: la etiqueta alt="" es pera mostrar un texto en caso de que la imagen no llegase a cargar o se demorara mucho-->
                <img class="fill" src="img/bardo.jpg" alt="">
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <img class="fill" src="img/B95.jpg" alt="">
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <img class="fill" src="img/hack.jpg" alt="">
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <div class="container">
      <h1 class="text-info text-center"><i class="fa fa-users"></i> Sobre nosotros</h1>
      <hr>
    </div>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
						<h2>REGISTRO Y LOGIN BASICO</h2>
						<p class="lead">Sistema de Registro y Login Sencillo con PHP y MySQL</p>
						<p>Instrucciones:</p>
						<ol>
							<li>Registrate en la opcion de registro.</li>
							<li>Inicie sesion en la opcion de login.</li>
							<li>Para finalizar la sesion, click en la opcion salir .</li>
						</ol>
						<br>
						<ul type="none">
						<li><i class="glyphicon glyphicon-ok"></i> Facil de instalar y modificar</li>
						<li><i class="glyphicon glyphicon-ok"></i> Ideal para tu proximo proyecto web</li>
						</ul>

				</div>
			</div>
		</div>

  

		
	</body>
</html>
