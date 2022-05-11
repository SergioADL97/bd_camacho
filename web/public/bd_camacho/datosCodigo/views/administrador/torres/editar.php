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
					<form action="../../../php/controllers/TorreController.php" method="post" class="form-editar">
						<input type="hidden" name="action" value="editar">
						<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>" data-url="../../../php/controllers/TorreController.php">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" name="nombre" id="nombre" class="form-control">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="conjunto_id">Conjunto</label>
									<select name="conjunto_id" id="conjunto_id" class="browser-default form-control" data-url="../../../php/controllers/ConjuntoController.php">
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
		var url_find_conjunto = $("#conjunto_id").data('url');
		// ejecutamos un ajax
		$.ajax({
			url: url_find_conjunto,
			type: 'POST',
			data: { 'action': 'buscar_conjuntos'},
			success: function( response ) {
				// cargamos los datos
				$("#conjunto_id").html(response);
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
				console.log(response);
				// cargamos el valor del nombre en el campo correspondiente
				$("#nombre").val( response.torre.nombre );
				// recorremos los options del select para validar seleccionar el usuario correspondiente al conjunto
				$("#conjunto_id option").each(function(){
					// validamos que el usuario coincida
					if( $(this).attr('value') == response.torre.conjunto_id )
					{
						// seleccionamos el option
						$(this).attr("selected", "selected");
					}
				});
			},
		});
	}

</script>