<?php require_once("../../templates/security.php"); ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>El Bosque</title>
	<meta name="viewport" content="initial-scale, width=device-width">
	<meta charset="utf-8">
	
	<!-- Link de página BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Link de la página CSS -->
	<link rel="stylesheet" type="text/css" href="../../../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../../../css/all.min.css">
	
	<!-- Script de librería Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	
	<!-- Script para Java Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<script src="../../../js/forms.js" ></script>
	
</head>
<body>


	<!-- Estilos para imagen de fondo -->
	<style type="text/css">
		body {
			background-image: url(../../../img/fondo.jpg) ;
			background-size: cover;
			background-repeat: repeat;
			background-position: top center;
			background-attachment: fixed;
		}
	</style>


	<!-- PRUEBA -->
	<header class="header" style="z-index: 9000" >

		<div class="margin-auto">
			<div class="color-cabecera col-12 text-center sombra" >
				<img id="logo" src="../../../img/elbosque.jpg">
			</div>
		</div>


		<ul class="color-cabecera nav col-12 mr-auto">
			<li class="nav-item">
				<a class="nav-link color-link text-white" href="../aparmentos/index.php">Apartamentos</a> 
			</li>
			<!-- formulario con api-->
			<li class="nav-item ml-auto d-flex align-items-center">
				<a class="nav-link color-link text-white" href="../../../php/controllers/loginController.php">
					Cerrar sesión <i class="fas fa-sign-out-alt"></i>
				</a>
			</li>
		</ul>

</header>

