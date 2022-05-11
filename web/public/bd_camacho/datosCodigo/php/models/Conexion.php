<?php 

// clase para conectarse a la base de datos y ejecutar las consultas con PDO

class Conex
{
	// definimos las variables de conexion
	private $host = "mysql";
	private $user = "test";
	private $pass = "test";
	private $db = "test";
	private $charset = "utf-8";

	// creamos una variable que contiene la conexion
	protected $conex;

	public function __construct()
	{
		// realizamos la conexion a la base de datos
		$this->conex = new mysqli( $this->host, $this->user, $this->pass, $this->db );
		// validamos que se conecte bien
		if ( $this->conex->connect_errno ) 
		{ 
			die("Error al conectarse al servidor: ". $this->conex->connect_error);    
		}
	    // asignamos el charset por defecto a la base de datos
		$this->conex->set_charset( $this->charset );
	}

}