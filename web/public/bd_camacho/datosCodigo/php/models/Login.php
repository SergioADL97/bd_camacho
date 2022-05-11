<?php 

// requerimos el archivo de modelo principal
require_once('Model.php');

class Login Extends Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function auth($user, $pass)
	{
		$sql= 'Select * from usuarios where correo = "'.$user.'" and pass="'.$pass.'"';
		$result = $this->conex->query( $sql );
		if ($result)
			$user=mysqli_fetch_assoc($result);
		else
			$user=[];
		return $user;
	}
}