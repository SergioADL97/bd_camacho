<!DOCTYPE html>
<html lang="es">
<head>
	<title>El Bosque</title>
	<meta name="viewport" content="initial-scale, width=device-width">
	<meta charset="utf-8">
	
	<!-- Link de página BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Link de la página CSS -->
	<link rel="stylesheet" type="text/css" href="./datosCodigo/css/estilos.css">
	<!-- Link de la página CSS -->
	<link rel="stylesheet" type="text/css" href="./datosCodigo/css/all.min.css">
	
	<!-- Script de librería Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	
	<!-- Script para Java Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<script src="./datosCodigo/js/JS.js" ></script>
	<script src="./datosCodigo/js/login.js" ></script>
	<script src="./datosCodigo/js/validate_form.js" ></script>
	
</head>
<body>


	<!-- Estilos para imagen de fondo -->
	<style type="text/css">
		body {
			background-image: url(datosAdmin/fondo.jpg) ;
			background-size: cover;
			background-repeat: repeat;
			background-position: top center;
			background-attachment: fixed;
		}
	</style>


	<!-- Estilos para imagen de fondo -->
	<style type="text/css">
		body {
			background-image: url(./datosCodigo/img/fondo.jpg) ;
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
				<img id="logo" src="./datosCodigo/img/elbosque.jpg">
			</div>
		</div>


		<ul class="color-cabecera nav col-12 mr-auto"> <!--Barra de navegación-->
			<li class="nav-item ml-2">
				<a class="nav-link color-link text-white" href="./index.php">Inicio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link color-link text-white" href="./Acerca.php">Acerca de nosotros</a>
			</li>
			<li class="nav-item">
				<a class="nav-link color-link text-white" href="./Encuesta2.php">Encuesta</a> 
			</li>
			<!-- formulario con api-->
			<li class="nav-item ml-auto d-flex align-items-center"><!--margin left auto para que se acomode todo a la derecha y el align para centrar verticalemnete ese botón-->
				<button type="button" class="btn text-white" data-toggle="modal" data-target="#modal"><!-- Botón para ingresar -->Ingresar <i class="fas fa-sign-in-alt"></i></button>
			</li>
			<li class="nav-item d-flex align-items-center text-white">
				<button type="button" class="btn ml-1 text-white" data-toggle="modal" data-target="#modal1">Registrarse <i class="fas fa-users"></i></button><!-- Botón para registrarse -->
			</li>			
		</ul>

		<!-- Modal para ingresar -->
		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form id="form-login" method="post" action="datosCodigo/php/controllers/loginController.php">
					<input type="hidden" name="action" value="login">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title " id="modal">INGRESAR</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mensaje-login"></div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="correo">Correo</label>
										<input type="text" class="form-control" name="correo" id="correo">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="pass">Contraseña</label>
										<input type="password" class="form-control" name="pass" id="pass">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">Cancelar <i class="fas fa-times"></i></button>
							<button type="submit" class="btn btn-primary">Ingresar <i class="fas fa-check-circle"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Modal para registrarse -->
		<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<form id="form-register" method="post" action="datosCodigo/php/controllers/loginController.php">
						<input type="hidden" name="action" value="register">
						<div class="modal-header">
							<h5 class="modal-title" id="modal1">REGISTRARSE</h5>

							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" id="uno">
							<div class="row">
								<div class="col-12">
									<div class="mensaje-register"></div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="nombre">Nombre</label>
										<input type="text" class="form-control" name="nombre" id="nombre">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="correo">Correo</label>
										<input type="text" class="form-control" name="correo" id="correo">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="pass">Contraseña</label>
										<input type="password" class="form-control" name="pass" id="pass">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="pass">Rol</label>
										<select class="browser-default form-control" name="rol" id="rol">
											<option value="1">Administrador</option>
											<option value="2">Propietario</option>
											<option value="3">Residente</option>
										</select>
									</div>
								</div>
							</div>
					</div>
					<div class="modal-footer"><!-- pie del modal -->
						<button type="button" class="btn btn-secondary bg-danger" data-dismiss="modal">Cancelar <i class="fas fa-times"></i></button>
						<button type="submit" class="btn btn-primary">Registrarse <i class="fas fa-check-circle"></i></button>
					</div>
				</form>
			</div>
		</div>

	</header>