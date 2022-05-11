<?php 

// requerimos el archivo de modelo principal
require_once('Model.php');

class Conjunto extends Model
{

	// funcion constructor del modelo
	function __construct()
	{
		// inicializamos el constructor del padre
		parent::__construct();
		// asginamos el nombre de la tabla
		$this->table = "conjuntos";
		// variable que contiene los nombres de los campos en la base de datos
		$this->fillable = ["nombre", "dir", "usuario_id"];
	}


	public function listar()
	{
		return parent::customer( "SELECT t1.*, t2.nombre as administrador FROM " . $this->table . " as t1 INNER JOIN usuarios as t2 ON t1.usuario_id = t2.id " );
	}
}