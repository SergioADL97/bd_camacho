<?php 

// eliminar alertas de errores
error_reporting(0);
// incluimos el modelo
require_once("../models/Conjunto.php");
// instanciamos el modelo
$conjuntoModel = new Conjunto();
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
			echo $conjuntoModel->create( $_POST );
		break;
		case 'editar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			echo $conjuntoModel->update( $_POST );
		break;
		case 'eliminar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			echo $conjuntoModel->delete( $_POST['id'] );
		break;
		case 'buscar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// obtenemos los datos del conjunto y los asignamos a una variable de array
			$result['conjunto'] = mysqli_fetch_assoc( $conjuntoModel->find( $_POST['id'] ) );
			// imprimimos los datos en json
			echo json_encode( $result );
		break;
		case 'buscar_conjuntos':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			$result =  $conjuntoModel->all();
			// variable que contiene el listado de la paginación
			$rows = "";
			// recorremos el resultado de la busqueda
			foreach ($result as $conjunto) 
			{
				// concatenamos los valores de cada conjunto conjunto
				$rows .= '
					<option value="'.$conjunto['id'].'">'.$conjunto['nombre'].'</option>
				';
			}
			echo $rows;
		break;
		// función para crear
		case 'listar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			$result =  $conjuntoModel->listar();
			// variable que contiene el listado de la paginación
			$rows = "";
			// recorremos el resultado de la busqueda
			foreach ($result as $conjunto) 
			{
				// concatenamos los valores de cada conjunto conjunto
				$rows .= '
					<tr>
						<th scope="row">'.$conjunto['id'].'</th>
						<td>'.$conjunto['nombre'].'</td>
						<td>'.$conjunto['dir'].'</td>
						<td>'.$conjunto['administrador'].'</td>
						<td class="text-center" width="50px;">
							<a href="./editar.php?id='.$conjunto['id'].'" class="btn btn-sm btn-warning">
								<i class="fa fa-edit"></i>
							</a>
						</td>
						<td class="text-center" width="50px;">
							<a data-href="../../../php/controllers/ConjuntoController.php" data-id="'.$conjunto['id'].'" class="btn btn-sm btn-danger btn-delete-register">
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