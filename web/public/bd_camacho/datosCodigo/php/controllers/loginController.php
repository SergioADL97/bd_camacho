<?php
// eliminar alertas de errores
error_reporting(0);
// incluimos el modelo
require_once("../models/Login.php");
// incluimos el modelo
require_once("../models/Usuario.php");

$loginModel = new Login();
$userModel = new Usuario();

// obtenemos el action
$action = $_POST["action"];
// validamos que existe alguna acción a realizar
if( isset( $action ) && !empty( $action ) )
{
	// validamos cual es el valor de la acción
	switch ($action) 
	{
		case 'login':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// realizamos el login
			$result = $loginModel->auth($_POST['correo'], $_POST['pass']);
			// validamos que exista un resultado
			if ( isset( $result['id'] ) && !empty( $result['id'] ) ) 
			{
				// iniciamos una sesión
				session_start();
				// iniciamos las variables de sesión
				$_SESSION['id'] = $result['id'];
				$_SESSION['nombre'] = $result['nombre'];
				$_SESSION['correo'] = $result['correo'];
				$_SESSION['rol'] = $result['rol'];
				// retornamos mensaje de exito
				echo "true";
			}
			else
			{
				echo "Usuario no encontrado";
			}
		break;
		case 'register':
			// eliminamos el valor de la acción arealizar
			unset( $_POST['action'] );
			// campturamos la contraseña original
			$pass_original = $_POST['pass'];
			// encriptamos la contraseña
			$_POST['pass'] = md5( $_POST['pass'] );
			// registramos el usuario
			$result = $userModel->create( $_POST );
			// validamos si la respuesta es exitosa
			if ( $result == "sucess" ) 
			{
				// realizamos el login
				$result = $loginModel->auth( $_POST['correo'], $pass_original );
				// validamos que exista un resultado
				if ( isset( $result['id'] ) && !empty( $result['id'] ) ) 
				{
					// iniciamos una sesión
					session_start();
					// iniciamos las variables de sesión
					$_SESSION['id'] = $result['id'];
					$_SESSION['nombre'] = $result['nombre'];
					$_SESSION['correo'] = $result['correo'];
					$_SESSION['rol'] = $result['rol'];
					// retornamos mensaje de exito
					echo "true";
				}
				else
				{
					echo "Usuario no encontrado";
				}
			}
			else
				echo "Usuario no registrado";	
		break;
	}

}
else
{
	session_start();
	session_destroy();
	header("Location: ../../../index.php");
}



?>