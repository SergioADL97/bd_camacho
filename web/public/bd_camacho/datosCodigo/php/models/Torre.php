<?php 

// requerimos el archivo de modelo principal
require_once('Model.php');

class Torre extends Model
{

	// funcion constructor del modelo
	function __construct()
	{
		// inicializamos el constructor del padre
		parent::__construct();
		// asginamos el nombre de la tabla
		$this->table = "torres";
		// variable que contiene los nombres de los campos en la base de datos
		$this->fillable = ["nombre", "conjunto_id"];
	}

	public function listar()
	{
		return parent::customer( "SELECT t1.*, t2.nombre as conjunto FROM " . $this->table . " as t1 INNER JOIN conjuntos as t2 ON t1.conjunto_id = t2.id " );
	}
}