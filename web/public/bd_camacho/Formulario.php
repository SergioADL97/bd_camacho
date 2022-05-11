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
		<div class="col-sm-3"> 
			<h5>Por favor llena nuestra encuesta</h5>
			<img src="./datosCodigo/img/encuesta.png" class="d-block w-100" alt="...">
			
		</div>
		<div class="col-sm-6">
			<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfYWN4nW6L3A8lh3biZhOvUpGEPCCZZlf4t_54U7xpKNC9mfA/viewform?embedded=true" width="390" height="3098" frameborder="10" marginheight="10" marginwidth="10">Cargando…</iframe>
			

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