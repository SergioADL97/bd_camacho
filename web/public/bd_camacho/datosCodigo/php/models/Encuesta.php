<?php 

// requerimos el archivo de modelo principal
require_once('Model.php');

class Encuesta extends Model
{

	// funcion constructor del modelo
	function __construct()
	{
		// inicializamos el constructor del padre
		parent::__construct();
		// asginamos el nombre de la tabla
		$this->table = "encuesta";
		// variable que contiene los nombres de los campos en la base de datos
		$this->fillable = ["nombre", "apellidos", "ano", "sexo", "apartamento", "guardas", "halloween", "lavado", "fiesta", "parqueo"];
	}

	public function encuesta( $array )
	{
		$result = $this->all();
		if( $result->num_rows < 1 )
		{
			$this->create( $array );
		}
		else
		{
			$encuesta = mysqli_fetch_assoc( $result );
			$array['id'] = $encuesta['id'];
			$this->update( $array );
		}
		return "success";
	}
}