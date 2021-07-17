<?php
require '../libs/database.php';

class usuarios{
	public function insertar($parametros){
		$query = "	INSERT INTO 
						usuarios 
					SET 
						nombres = '".$parametros['nombres']."',
						apellidos = '".$parametros['apellidos']."',
						correo = '".$parametros['correo']."',
						telefono = ".$parametros['telefono'].",
						fecha_nacimiento = ".$parametros['fn'];
		$db = new database();
		$db->ejecutarConsulta($query);
	}

	/*public function actualizar

	public function borrar*/

	public function prueba2($parametros){
		$respuesta = [
			'codigo'=>19,
			'msj' => 'Error'
		];
		return $respuesta;
	}
}