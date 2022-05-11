<?php
	session_start();
	// validamos si no existe una sesión
	if( !isset($_SESSION["id"]) || empty($_SESSION["id"]) ) {
		header("Location: ../../../../index.php");
	}
?>