<?php require_once '../../templates/propietario/header.php'; ?>

<div class="container">
	<div class="row justify-content-center my-4">
		<div class="col-12 col-md-10">
			<div class="card">
				<div class="card-header align-items-center justify-content-between d-flex">
					<h3>Listado de Apartamentos</h3>
				</div>
				<div class="card-body">
					<table>
						<table class="table table-hover">
							<thead class="bg-primary text-white">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Numero</th>
									<th scope="col">Parqueadero</th>
									<th scope="col">Propietario</th>
									<th scope="col">Torre</th>
								</tr>
							</thead>
							<tbody class="content-list" data-url="../../../php/controllers/Propietario/ApartamentoController.php">
								
							</tbody>
						</table>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require_once '../../templates/propietario/footer.php'; ?>