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


	<div class="container">

		<br><br>
		<div class="row"> <!-- Primera columna -->
			<div class="col-sm-3"> <h5>Por favor llena nuestra encuesta</h5>
				<img src="./datosCodigo/img/encuesta.png" class="d-block w-100" alt="...">
				
			</div>
			<div class="col-sm-5"><h4>Encuesta para los residentes</h4><!-- Segunda columna -->
				<form action="./datosCodigo/php/controllers/encuestaController.php" class="form-encuesta">
					<p>Nombre: <input class="input-update" type="text" id="nombre" name="nombre" placeholder="Escriba su nombre" size="30"></p>
	  				<p>Apellidos: <input class="input-update" type="text" id="apellidos" name="apellidos" size="40" placeholder="Escriba su apellido"></p>
	  				<p>Año de nacimiento: <input class="input-update" type="number" id="fecha" name="ano" min="1930" placeholder="Seleccione su Año" required></p>
					<p>Sexo:
						<br>
	  					<input class="input-update" type="radio" name="sexo" value="h" required> Hombre
	  					<input class="input-update" type="radio" name="sexo" value="m" required> Mujer
	  					<input class="input-update" type="radio" name="sexo" value="m" required> Otro
					</p>
	 				<p>Apartamento: <input class="input-update" type="text" name="apartamento" placeholder="Escriba Torre y Apartamento" size="40"  required></p>
					<p> Que opina del servicio de los guardas de seguridad:
						<br>
	  					<input class="input-update" type="radio" name="guardas" value="Excelente" required> Excelente
	  					<input class="input-update" type="radio" name="guardas" value="Bueno" required> Bueno
	  					<input class="input-update" type="radio" name="guardas" value="Regular" required> Regular
	  					<input class="input-update" type="radio" name="guardas" value="Bajo" required>Bajo
	  					<input class="input-update" type="radio" name="guardas" value="Pesimo" required>Pesimo  
					</p>
	   				<p>Que le gustaria que se realizara para el dia de halloween: <input class="input-update" type="text" name="halloween" placeholder="Escriba su opinion aqui" size="40"  required></p>

					<p> Cada cuanto considera que se deba lavar las torres:
	  					<input class="input-update" type="radio" name="lavado" value="Semanalmente" required> Semanalmente
	  					<input class="input-update" type="radio" name="lavado" value="Cada 2 Semanas" required> Cada 2 Semanas
	  					<input class="input-update" type="radio" name="lavado" value="Mensualmente" required> Mensualmente
	  					<input class="input-update" type="radio" name="lavado" value="Cada 2 Meses" required>Cada 2 Meses
					</p>
					<p>Que considera que realize el consejo de administracion en la fiesta de fin de año 
						<input class="input-update" type="text" name="fiesta" placeholder="Escriba su opinion aqui" size="40"  required></p>
					<p> Que tan deacuerdo esta con que algunos residentes tengan dos espacios en el parqueadero:
	  					<input class="input-update" type="radio" name="parqueo" value="Deacuerdo" required> Deacuerdo
	  					<input class="input-update" type="radio" name="parqueo" value="Ni en acuerdo ni en desacuerdo" required> Ni en acuerdo ni en desacuerdo
						<input class="input-update" type="radio" name="parqueo" value="En desacuerdo" required> En desacuerdo 
					</p>
				</form>
			</div>
			<div class="col-sm-3"> <!-- Tercera columna -->
				<h4>Calendario</h4>
				<script type="text/javascript">
					document.write(myCalendar());
				</script>

				<script type="text/javascript">
					document.write('Bienvenid@, hoy es '+getmyday());
				</script>

				<h5> La Hora es:</h5>
				<div id="reloj" style="font-size:20px;"></div>			

				<script type="text/javascript">
					document.write(contadorcookie());
				</script>
			</div>
		</div>
	</div>


<?php require_once 'datosCodigo/views/templates/page/footer.php'; ?>