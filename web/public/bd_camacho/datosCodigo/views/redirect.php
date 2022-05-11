<?php 
// iniciamos la sesion
session_start();
// validamos que exista una sesión
if( isset( $_SESSION['id'] ) )
{
	// clasificamos la sesión
	switch ( $_SESSION['rol']  ) {
		case 1:
			header("Location: ./administrador/conjuntos/index.php");
		break;
		case 2:
			header("Location: ./propietario/aparmentos/index.php");
		break;
		default:
			header("Location: ./residente/aparmentos/index.php");
		break;
	}
}
else
{
	header("Location: ../../index.php");
}