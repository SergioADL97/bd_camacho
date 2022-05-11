<?php require_once '../../templates/administrador/header.php'; ?>

<div class="container">
	<div class="row justify-content-center my-4">
		<div class="col-12 col-md-10">
			<div class="card">
				<div class="card-header align-items-center justify-content-between d-flex">
					<h3>Actualizar registro</h3>
					<a href="./index.php" class="btn-primary btn">Listado</a>
				</div>
				<div class="card-body">
					<form action="../../../php/controllers/ApartamentoController.php" method="post" class="form-editar">
						<input type="hidden" name="action" value="editar">
						<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>" data-url="../../../php/controllers/ApartamentoController.php">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="num">Número</label>
									<input type="text" name="num" id="num" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="parqueadero">Parqueadero</label>
									<input type="text" name="parqueadero" id="parqueadero" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-12">
								<div class="form-group">
									<label for="torre_id">Torre</label>
									<select name="torre_id" id="torre_id" class="browser-default form-control" data-url="../../../php/controllers/TorreController.php">
										<!-- cargamos los datos con ajax -->
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 ">
								<div class="form-group">
									<label for="usuario_id">Propietario</label>
									<select name="usuario_id" id="usuario_id" class="browser-default form-control" data-url="../../../php/controllers/UserController.php">
										<!-- cargamos los datos con ajax -->
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary">Actualizar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require_once '../../templates/administrador/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {
		// obtenemos la urta para buscar los usuarios que son administradores
		var url_find_usuario = $("#usuario_id").data('url');
		// ejecutamos un ajax
		$.ajax({
			url: url_find_usuario,
			type: 'POST',
			data: { 'action': 'buscar_propietario'},
			success: function( response ) {
				// cargamos los datos
				$("#usuario_id").html(response);
			},
		});
		// obtenemos la urta para buscar los usuarios que son administradores
		var url_find_conjunto = $("#torre_id").data('url');
		// ejecutamos un ajax
		$.ajax({
			url: url_find_conjunto,
			type: 'POST',
			data: { 'action': 'buscar_torres'},
			success: function( response ) {
				// cargamos los datos
				$("#torre_id").html(response);
				buscar_datos();
			},
		});
	});

	// función para buscar los datos del conjunto
	function buscar_datos()
	{
		var url = $("#id").data('url');
		// ejecutamos un ajax
		$.ajax({
			url: url,
			type: 'POST',
			data: { 'action': 'buscar', 'id': $("#id").val()},
			dataType: 'json',
			success: function( response ) {
				// cargamos el valor del nombre en el campo correspondiente
				$("#num").val( response.apartamento.num );
				// cargamos el valor de la dirección en el campo correspondiente
				$("#parqueadero").val( response.apartamento.parqueadero );
				// recorremos los options del select para validar seleccionar el usuario correspondiente al conjunto
				$("#torre_id").val( response.apartamento.parqueadero_id );
				// 
				$("#torre_id option").each(function(){
					// validamos que el usuario coincida
					if( $(this).attr('value') == response.apartamento.torre_id )
					{
						// seleccionamos el option
						$(this).attr("selected", "selected");
					}
				});
			},
		});
	}

</script>