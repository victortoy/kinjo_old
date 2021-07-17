<?php
require '../libs/database.php';

class usuarios{
	public function insertar($parametros){
		$query = "INSERT INTO 
						usuarios 
					SET 
						nombres = '".$parametros['nombres']."',
						apellidos = '".$parametros['apellidos']."',
						correo = '".$parametros['correo']."',
						telefono = ".$parametros['telefono'].",
						fecha_nacimiento = '".$parametros['fn']."'";
		$db = new database();
		return $db->ejecutarConsulta($query);
	}

	public function consultar($parametros){
		$query = "SELECT * FROM usuarios";
		$db = new database();
		return $db->ejecutarConsulta($query);	
	}

	public function eliminar($parametros){
		$query = "DELETE FROM usuarios 
				WHERE id = ".$parametros['id'];
		$db = new database();
		return $db->ejecutarConsulta($query);
	}
}