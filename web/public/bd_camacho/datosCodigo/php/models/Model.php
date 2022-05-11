<?php 

// requerimos el archivo de conexion
require_once('Conexion.php');

// creamos un modelo extendido de la conexion
class Model extends Conex
{
	// variable que contendra el nombre de la tabla de la base de datos en los modelos
	protected $table;
	// variable que contendra los campos de la base datos en los modelos
	protected $fillable = [];
	// variable que contendra los datos del codigo sql para ejecutar en la base de datos
	private $values;

	// funcion constructor del modelo
	function __construct()
	{
		// inicializamos el constructor del padre
		parent::__construct();
	}

	// funcion para obtener todos los registros
	public function all()
	{
		// ejecutamos y retornamos los valores de la consulta
		$query = $this->conex->query(' SELECT * FROM ' . $this->table );
		// validamos si existe un error
		if( !$query )
		{
			// retornamos el error
			return $this->conex->error;
		}
		// retornamos exitoso
		return $query;
	}

	// funcion para ejecutar una consulta personalizada
	public function customer( $sql )
	{
		// ejecutamos y retornamos los valores de la consulta
		$query = $this->conex->query( $sql );
		// validamos si existe un error
		if( !$query )
		{
			// retornamos el error
			return $this->conex->error;
		}
		// retornamos exitoso
		return $query;
	}

	// funcion para obtener buscar un registro por ID
	public function find( $id )
	{
		// ejecutamos y retornamos los valores de la consulta
		$query = $this->conex->query(' SELECT * FROM ' . $this->table . ' WHERE id = ' . $id );
		// validamos si existe un error
		if( !$query )
		{
			// retornamos el error
			return $this->conex->error;
		}
		// retornamos exitoso
		return $query;
	}

	// funcion para crear un registro
	// $request se recibe como array con los valores en orden del fillable
	public function create( $array )
	{
		// obtenemos el arreglo de datos para concatenar a la consulta de registro
		// ejemplo de datos que retorna: ( nombre ) VALUES ( 'nombre ejemplo' )
		$this->arreglar_array_create( $array );
		// ejecutamos el query de la instanciación de la base de datos
		$query = $this->conex->query( " INSERT INTO " . $this->table . " " . $this->values );
		// validamos si existe un error
		if( !$query )
		{
			// retornamos el error
			return $this->conex->error;
		}
		// retornamos exitoso
		return "sucess";
	}

	// funcion para actualizar un registro
	// $array se recibe como array con los valores en orden del fillable,
	// el id tiene que ser por obligacion el primer elemento de la lista
	public function update( $array )
	{
		// obtenemos el id del inicio del array
		$id = $array['id'];
		// eliminamos el id de la lista
		array_shift( $array );
		// arreglamos el request para asignarlo en la variable values
		$this->arreglar_array_update( $array );
		// ejecutamos el query
		$query = $this->conex->query( ' UPDATE ' . $this->table .' SET ' . $this->values .' WHERE id = ' . $id );
		// validamos si existe un error
		if( !$query )
		{
			// retornamos el error
			return $this->conex->error;
		}
		// retornamos exitoso
		return "sucess";
	}


	// funcion para obtener buscar un registro por ID
	public function delete( $id )
	{
		// ejecutamos el query
		$query = $this->conex->query(' DELETE FROM ' . $this->table . ' WHERE id = ' . $id );
		// validamos si existe un error
		if( !$query )
		{
			// retornamos el error
			return $this->conex->error;
		}
		// retornamos exitoso
		return "sucess";
	}


	// funcion para arreglar los datos obtenidos por el array de registro
	private function arreglar_array_create( $array )
	{
		// contamos cuantos campos se pueden guardar
		$cant = count( $this->fillable );
		// abrimos un parantesis para asignar cuales campos se pueden guardar
		$this->values = ' ( ';
		// recorremos la variable que contiene los campos a guardar
		for ($i=0; $i < $cant; $i++) {
			// asignamos los campos que se pueden guardar
			// dejamos un espacio en blanco para separar los campos
			$this->values .= ' ' . $this->fillable[$i] . ',';
		}
		// eliminamos la coma del ultimo caracter para evitar problemas en la base de datos
		$this->values = $this->deleteLastWord( $this->values );
		// cerramos el parentesis para agregar los valores de los campos que se dejan guardar
		$this->values .= ' ) VALUES ( ';
		// llenamos los valores de los campos
		for ($i=0; $i < $cant; $i++) {
			// agreamos los campos que se dejan guardar que provienen del array
			// dejamos un espacio en blanco para separar los campos
			$this->values .= " '". $array[ $this->fillable[$i] ] ."',";
		}
		// eliminamos la coma del ultimo caracter para evitar problemas en la base de datos
		$this->values = $this->deleteLastWord( $this->values );
		// cerramos el ultimo parentesis
		$this->values .= ' ) ';
	}

	// funcion para arreglar los datos obtenidos por el array del update
	private function arreglar_array_update( $array )
	{
		// contamos cuantos campos se pueden guardar
		$cant = count( $this->fillable );
		// limpiamos la variable 
		$this->values = '';
		// recorremos la variable que contiene los campos a guardar
		for ($i=0; $i < $cant; $i++) {
			// validamos que el campo no sea nulo para poder actualizarlo
			if( isset( $array[ $this->fillable[ $i ] ] ) && !empty( $array[ $this->fillable[ $i ] ] ) )
				// arreglamos la variable que contiene los campos y valores
				// dejamos un espacio en blanco para separar los campos,
				// luego seleccionamos de la lista el campo que se desea actualizar con la variable fillable
				// luego se asigna el valor que trae la variable array de acuerdo a los campos que se dejan guardar
				$this->values .= " " . $this->fillable[$i] . " = '". $array[ $this->fillable[$i] ] ."'," ;
		}
		// eliminamos la coma del ultimo caracter para evitar problemas en la base de datos
		$this->values = $this->deleteLastWord( $this->values );
	}


	// funcion para eliminar el ultimo caracter de una cadena
	private function deleteLastWord( $str )
	{
		return substr($str, 0, -1);
	}


}