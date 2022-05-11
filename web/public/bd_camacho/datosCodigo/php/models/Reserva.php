<?php 

// requerimos el archivo de modelo principal
require_once('Model.php');

class Reserva extends Model
{

	// funcion constructor del modelo
	function __construct()
	{
		// inicializamos el constructor del padre
		parent::__construct();
		// asginamos el nombre de la tabla
		$this->table = "reservas";
		// variable que contiene los nombres de los campos en la base de datos
		$this->fillable = ["fecha", "estado", "area_comun_id", "usuario_id"];
	}
}