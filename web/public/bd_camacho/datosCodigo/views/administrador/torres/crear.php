<?php require_once '../../templates/administrador/header.php'; ?>

<div class="container">
	<div class="row justify-content-center my-4">
		<div class="col-12 col-md-10">
			<div class="card">
				<div class="card-header align-items-center justify-content-between d-flex">
					<h3>Nuevo registro</h3>
					<a href="./index.php" class="btn-primary btn">Listado</a>
				</div>
				<div class="card-body">
					<form action="../../../php/controllers/TorreController.php" method="post" class="form-crear">
						<input type="hidden" name="action" value="crear">
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
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require_once '../../templates/administrador/footer.php'; ?>


<!-- Buscar Conjunto -->
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
			},
		});
	});

</script>