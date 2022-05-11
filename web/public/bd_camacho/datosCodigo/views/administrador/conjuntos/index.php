<?php require_once '../../templates/administrador/header.php'; ?>



<div class="container">
	<div class="row justify-content-center my-4">
		<div class="col-12 col-md-10">
			<div class="card">
				<div class="card-header align-items-center justify-content-between d-flex">
					<h3>Listado</h3>
					<a href="./crear.php" class="btn-primary btn">Nuevo</a>
				</div>
				<div class="card-body">
					<table>
						<table class="table table-hover">
							<thead class="bg-primary text-white">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Dirección</th>
									<th scope="col">Administrador</th>
									<th scope="col" colspan="2">Acciones</th>
								</tr>
							</thead>
							<tbody class="content-list" data-url="../../../php/controllers/ConjuntoController.php">
								
							</tbody>
						</table>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require_once '../../templates/administrador/footer.php'; ?>