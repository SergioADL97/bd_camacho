<?php require_once 'datosCodigo/views/templates/page/header.php'; ?>




	<!-- Cuerpo de la página de inicio -->
	<div class="col-12" >	
		<h2 style="color: black; font-style: italic;"><b>...Bienvenido...</b></h2>
	</div>

	<div  class="col-12 mt-2" style="padding-top:12px; padding-bottom: 12px; background-color: black; padding-left: 15% " > <!-- Contiene todo el carrusel -->
		<div id="carousel" class=" col-10 bd-example" style="margin: 0">
			<!-- Carrusel de la página principal -->
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active" >

						<img src="./datosCodigo/img/administrativo.jpg" class="d-block w-100" alt="tareas">
						<div class="carousel-caption d-none d-md-block sombra">
							<h5><b>Trabajos administrativos</b></h5>
							<p><b>Las principales tareas que podrás realizar son:</b>
								<ul class="trabajos">
									<li><b>Gestión de presupuestos</li>
										<li>Informes</li>
										<li>Seguimiento de incidencias</li>
										<li>Administrar las reservas de espacios comunes</b></li>
									</ul>
								</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./datosCodigo/img/tenis.jpg" class="d-block w-100" alt="espacios">
							<div class="carousel-caption d-none d-md-block d-flex align-items-center justify-content-center flex-column sombra ">
								<h5><b>Reservas de espacios comunes</b></h5>
								<p><b>Planing de ocupación de instalaciones, pistas de tenis, canchas de baloncesto, gimnasio, sala de reuniones, etc. 

									Aquí, se logra fácilmente la reserva de las instalaciones del condominio, ya que en todo momento estará publicada su situación. Podrán acceder tanto el administrador como los propietarios para efectuar sus reservas. 

								De esta manera, podremos saber por ejemplo, si tenemos libre la pista de tenis para el fin de semana, o el local social para celebrar un cumpleaños, etc.</b></p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./datosCodigo/img/contacto.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>



		<!-- Galeria 2 -->
		<div class="col-12" style="align-content: center">
			<br>
			<h3 style="color: black; font-family: italic; text-align: center">¿Qué esperas para vivir en el lugar de tus sueños?</h3>
			<br>
		</div>


		<!-- ejemplo video -->
		<div style="background-color: black" align="center">
			<video src="./datosCodigo/img/dron.mp4" width="75%" controls></video>
		</div>
		<br></br>

		<!--Carrusel para galeria -->
		<div class="col-6 mt-2" style="margin: auto; ">
			<div class="bd-example">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="./datosCodigo/img/Vista al Parque.jpg" class="d-block w-100" alt="tareas">
							<div class="carousel-caption d-none d-md-block sombra">
								<h5><b>Vista al parque del conjunto</b></h5>		
							</div>
						</div>
						<div class="carousel-item">
							<img src="./datosCodigo/img/Vista al Parqueadero.jpg" class="d-block w-100" alt="espacios">
							<div class="carousel-caption d-none d-md-block d-flex align-items-center justify-content-center flex-column sombra ">
								<h5><b>Vista del parqueadero aereo</b></h5>				
							</div>
						</div>
						<div class="carousel-item">
							<img src="./datosCodigo/img/Vista parqueadero y tienda.jpg" class="d-block w-100" alt="Parqueadero">
							<div class="carousel-caption d-none d-md-block"></div>
							<h5><b>Vista del parqueadero principal desde la porteria</b></h5>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-6" style="text-align: center">

			<br><br><br><br><br><br><br><br>
			<h1 style="font-style: italic">¿Por qué escogernos?</br><hr></h1>
			<br><br>
			<h3 style="font-style: italic">Los factores más importantes por los cuales escoger el bosque, a parte de lo hermoso que se ve el futuro complejo, son la buena ubicación y los precios accesibles; es el lugar perfecto para convertirlo en un futuro hogar</h3>
		</div>

		<ul>
			<li class="nav-item ml-auto d-flex align-items-center"><!--margin left auto para que se acomode todo a la derecha y el align para centrar verticalemnete ese botón-->
				<button type="button" class="btn text-white" data-toggle="modal" data-target="#modal"><!-- Botón para ingresar -->Ingresar <i class="fas fa-sign-in-alt"></i></button>
			</li>
			<li class="nav-item d-flex align-items-center text-white">
				<button type="button" class="btn ml-1 text-white" data-toggle="modal" data-target="#modal1">Registrarse <i class="fas fa-users"></i></button><!-- Botón para registrarse -->
			</li>
		</ul>


<?php require_once 'datosCodigo/views/templates/page/footer.php'; ?>