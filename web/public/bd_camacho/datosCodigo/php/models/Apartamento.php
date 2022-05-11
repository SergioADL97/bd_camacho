<?php 

// requerimos el archivo de modelo principal
require_once('Model.php');

class Apartamento extends Model
{

	// funcion constructor del modelo
	function __construct()
	{
		// inicializamos el constructor del padre
		parent::__construct();
		// asginamos el nombre de la tabla
		$this->table = "apartamentos";
		// variable que contiene los nombres de los campos en la base de datos
		$this->fillable = ["num", "parqueadero", "usuario_id", "torre_id"];
	}

	public function listar()
	{
		return parent::customer( " SELECT t1.*, t2.nombre as administrador, t3.nombre as torre, t4.nombre as conjunto FROM " . $this->table . " as t1 INNER JOIN usuarios as t2 ON t1.usuario_id = t2.id INNER JOIN torres as t3 ON t1.torre_id = t3.id INNER JOIN conjuntos as t4 ON t3.conjunto_id = t4.id " );
	}

	public function listar_user_id( $usuario_id )
	{
		return parent::customer( " SELECT t1.*, t2.nombre as administrador, t3.nombre as torre, t4.nombre as conjunto FROM " . $this->table . " as t1 INNER JOIN usuarios as t2 ON t1.usuario_id = t2.id INNER JOIN torres as t3 ON t1.torre_id = t3.id INNER JOIN conjuntos as t4 ON t3.conjunto_id = t4.id WHERE t1.usuario_id = '".$usuario_id."' " );
	}
}