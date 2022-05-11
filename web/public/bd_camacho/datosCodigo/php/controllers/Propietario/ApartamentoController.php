<?php 

// eliminar alertas de errores
error_reporting(0);
// incluimos el modelo
require_once("../../models/Apartamento.php");
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
		// función para crear
		case 'listar':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// iniciamos la sesión
			session_start();
			// realizamos la consulta
			$result =  $ApartamentoModel->listar_user_id( $_SESSION['id'] );
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