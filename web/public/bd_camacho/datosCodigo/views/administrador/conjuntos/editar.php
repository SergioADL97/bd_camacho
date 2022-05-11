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
					<form action="../../../php/controllers/ConjuntoController.php" method="post" class="form-editar">
						<input type="hidden" name="action" value="editar">
						<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>" data-url="../../../php/controllers/ConjuntoController.php">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" name="nombre" id="nombre" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="dir">Dirección</label>
									<input type="text" name="dir" id="dir" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label for="usuario_id">Administrador</label>
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
		var url_find_users = $("#usuario_id").data('url');
		// ejecutamos un ajax
		$.ajax({
			url: url_find_users,
			type: 'POST',
			data: { 'action': 'buscar_administradores'},
			success: function( response ) {
				// cargamos los datos
				$("#usuario_id").html(response);
				// ejecutamos la función para buscar los datos del conjunto
				buscar_datos();
			},
		});
	});

	// función para buscar los datos del conjunto
	function buscar_datos()
	{
		var url_find_conjunto = $("#id").data('url');
		// ejecutamos un ajax
		$.ajax({
			url: url_find_conjunto,
			type: 'POST',
			data: { 'action': 'buscar', 'id': $("#id").val()},
			dataType: 'json',
			success: function( response ) {
				// cargamos el valor del nombre en el campo correspondiente
				$("#nombre").val( response.conjunto.nombre );
				// cargamos el valor de la dirección en el campo correspondiente
				$("#dir").val( response.conjunto.dir );
				// recorremos los options del select para validar seleccionar el usuario correspondiente al conjunto
				$("#usuario_id option").each(function(){
					// validamos que el usuario coincida
					if( $(this).attr('value') == response.conjunto.usuario_id )
					{
						// seleccionamos el option
						$(this).attr("selected", "selected");
					}
				});
			},
		});
	}

</script>