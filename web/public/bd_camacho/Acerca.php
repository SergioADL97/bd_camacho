<?php require_once 'datosCodigo/views/templates/page/header.php'; ?>


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


<div class="accordion" id="accordionExample">
	<div class="card">
		<div class="card-header" id="headingOne">
			<h2 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					¿Quiénes Somos?
				</button>
			</h2>
		</div>

		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
				Somos un conjunto residencial con mas de 38 años existencia, somos una gran familia conformada por mas de 240 residente y mas de 7 empleados al servicio del conjunto, estamos ubicados en la direccion carrera 25 # 25-32, somos un conjunto muy bien ubicado, con clinicas, supermercados, centros comerciales, zonas recreativas, cerca a la autopista floridablanca para mejor acceso.
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingTwo">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					<span>M</span>isión
				</button>
			</h2>
		</div>
		<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
			<div class="card-body">
				La Misión del Conjunto Residencial, es la de conformar un espacio de vivienda organizado y en donde se busca propiciar espacios de comunicación, sana convivencia y en donde reine la armonía, la paz, el respeto y la equidad para todos los propietarios siguiendo los lineamientos establecidos en nuestro reglamento con el fin de lograr un desarrollo humano sostenible, Mejorar los aspectos visuales de los edificios del conjunto residencial bosque, mejoramiento en las zonas de parqueo, area infantil ademas de innovar en seguridad.
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingThree">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					<span>V</span>isión
				</button>
			</h2>
		</div>
		<div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
			<div class="card-body">
				La Visión del Conjunto Residencial, es ser reconocido como un ejemplo a seguir desde el punto de vista de organización residencial: propietarios, empleados y visitas en general, así mismo motivo de orgullo de todos los propietarios por ser reconocidos como el mejor conjunto residencial del sector, comprometidos con el progreso y caracterizados por la integridad de todos los Copropietarios, El conjunto residencial el bosque se ve como uno de los conjuntos con mejores areas comunes, seguridad de primera, pioneros de reciclaje en la zona de floridablanca ademas de ser amigables con las mascotas de los residentes.
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingFour">
			<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					Conoce nuestro equipo desarrollador
				</button>
			</h2>
		</div>
		<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-3" style="height: 450px;">
						<img class="imgacer" src="./datosCodigo/img/diana.png" alt="hoja">
					</div>
					<div class="col-sm-3" style="height: 450px;">
						<img class="imgacer" src="./datosCodigo/img/karen.png" alt="hoja">
					</div>
					<div class="col-sm-3" style="height: 450px;">
						<img class="imgacer" src="./datosCodigo/img/christian.png" alt="hoja">
					</div>
					<div class="col-sm-3" style="height: 450px;">
						<img class="imgacer" src="./datosCodigo/img/pertuz.png" alt="hoja">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require_once 'datosCodigo/views/templates/page/footer.php'; ?>