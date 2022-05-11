<?php 

// eliminar alertas de errores
error_reporting(0);
// incluimos el modelo
require_once("../models/Apartamento.php");
// instanciamos el modelo
$ApartamentoModel = new Apartamento();
// obtenemos el action
$action = $_POST["action"];
// validamos que existe alguna acción a realizar
if( isset( $action ) && !empty( $action ) )
{
	// validamos cual es el valor de la acción
	switch ($action) 
	{
		case 'crear':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			echo $ApartamentoModel->create( $_POST );
		break;
		case 'editar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			echo $ApartamentoModel->update( $_POST );
		break;
		case 'eliminar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			echo $ApartamentoModel->delete( $_POST['id'] );
		break;
		case 'buscar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// obtenemos los datos del apartamento y los asignamos a una variable de array
			$result['apartamento'] = mysqli_fetch_assoc( $ApartamentoModel->find( $_POST['id'] ) );
			// imprimimos los datos en json
			echo json_encode( $result );
		break;
		// función para crear
		case 'listar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			$result =  $ApartamentoModel->listar();
			// variable que contiene el listado de la paginación
			$rows = "";
			// recorremos el resultado de la busqueda
			foreach ($result as $apartamento) 
			{
				// concatenamos los valores de cada apartamento apartamento
				$rows .= '
					<tr>
						<th scope="row">'.$apartamento['id'].'</th>
						<td>'.$apartamento['num'].'</td>
						<td>'.$apartamento['parqueadero'].'</td>
						<td>'.$apartamento['administrador'].'</td>
						<td>'.$apartamento['torre'].' - '.$apartamento['conjunto'].'</td>
						<td class="text-center" width="50px;">
							<a href="./editar.php?id='.$apartamento['id'].'" class="btn btn-sm btn-warning">
								<i class="fa fa-edit"></i>
							</a>
						</td>
						<td class="text-center" width="50px;">
							<a data-href="../../../php/controllers/ApartamentoController.php" data-id="'.$apartamento['id'].'" class="btn btn-sm btn-danger btn-delete-register">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
				';
			}
			$rows .= "
				<script>
					$(document).ready(function() {
						$('.btn-delete-register').on('click', function(){
							var url = $(this).data('href');
							var id = $(this).data('id');
							// ejecutamos un ajax
							$.ajax({
								url: url,
								type: 'POST',
								data: { 'action': 'eliminar', 'id': id},
								success: function( response ) {
									if( response == 'sucess' )
									{
										alert('Registro eliminado con éxito');
										location.reload();
									}
									else
									{
										alert('Error: ' + response);
									}
								},
							});
						});
					});
				</script>
			";
			// imprimimos la variable que contiene el listado
			echo $rows;
		break;
	}

}