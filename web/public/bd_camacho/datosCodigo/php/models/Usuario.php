<?php 

// requerimos el archivo de modelo principal
require_once('Model.php');

class Usuario extends Model
{

	// funcion constructor del modelo
	function __construct()
	{
		// inicializamos el constructor del padre
		parent::__construct();
		// asginamos el nombre de la tabla
		$this->table = "usuarios";
		// variable que contiene los nombres de los campos en la base de datos
		$this->fillable = ["nombre", "correo", "pass", "rol"];
	}


	public function listar_administradores()
	{
		return parent::customer( "SELECT * FROM " . $this->table . " WHERE rol = 1" );
	}

	public function listar_propietarios()
	{
		return parent::customer( "SELECT * FROM " . $this->table . " WHERE rol = 2" );
	}
}