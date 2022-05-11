<?php 

// eliminar alertas de errores
error_reporting(0);
// incluimos el modelo
require_once("../models/Usuario.php");
// instanciamos el modelo
$userModel = new Usuario();
// obtenemos el action
$action = $_POST["action"];
// validamos que existe alguna acción a realizar
if( isset( $action ) && !empty( $action ) )
{
	// validamos cual es el valor de la acción
	switch ($action) 
	{
		// función para crear
		case 'create':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// encriptamos la contraseña
			$_POST['pass'] = md5( $_POST['pass'] );
			// realizamos la consulta
			echo $userModel->create( $_POST );
		break;
		// función para actualizar
		case 'update':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// encriptamos la contraseña
			$_POST['pass'] = md5( $_POST['pass'] );
			// realizamos la consulta
			echo $userModel->update( $_POST );
		break;
		// función para eliminar
		case 'delete':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// encriptamos la contraseña
			$id = $_POST['id'];
			// realizamos la consulta
			echo $userModel->delete( $id );
		break;
		case 'buscar_administradores':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			$result =  $userModel->listar_administradores();
			// variable que contiene el listado de la paginación
			$rows = "";
			// recorremos el resultado de la busqueda
			foreach ($result as $usuario) 
			{
				// concatenamos los valores de cada conjunto conjunto
				$rows .= '
					<option value="'.$usuario['id'].'">'.$usuario['nombre'].'</option>
				';
			}
			echo $rows;
		break;
		case 'buscar_propietario':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos la consulta
			$result =  $userModel->listar_propietarios();
			// variable que contiene el listado de la paginación
			$rows = "";
			// recorremos el resultado de la busqueda
			foreach ($result as $usuario) 
			{
				// concatenamos los valores de cada conjunto conjunto
				$rows .= '
					<option value="'.$usuario['id'].'">'.$usuario['nombre'].'</option>
				';
			}
			echo $rows;
		break;
		// función para listar
		default:
			// buscamos todos los datos de la tabla
			$resultado = $userModel->all();
			// variable que contendra los datos a mostrar
			$rows = '';
			// recorremos los datos que retorna la base de tados
			foreach ($resultado as $userModel) 
			{
				// validamos el tipo de usuario que es
				switch ( $userModel['rol'] ) {
					case '1':
						$rol = "Administrador";
					break;
					case '2':
						$rol = "Propietario";
					break;					
					default:
						$rol = "Residente";
					break;
				}
				$rows .= "
					<tr>
						<td>".$userModel['id']."</td>
						<td>".$userModel['nombre']."</td>
						<td>".$userModel['correo']."</td>
						<td>".$rol."</td>
						<td>
							<a href='./'>Editar</a>
						</td>
					</tr>
				";
			}
			echo $rows;
		break;
	}
}
else
{
	echo "Error: No se ha encontrado un acción a realizar";
}