<?php
require '../libs/database.php';

class crud {
	protected $tabla;

	public function insertar($parametros){
		$query = "INSERT INTO 
						$this->tabla
					SET ";
		foreach ($parametros as $clave => $valor) {
			$query .= $clave."='".$valor."',";
		}
		$query = rtrim($query, ",");
		$db = new database();
		return $db->ejecutarConsulta($query);
	}

	public function consultar($parametros){
		$query = "SELECT 
					* 
				FROM 
					$this->tabla
				WHERE 1";
		foreach ($parametros as $clave => $valor) { 
				$query .= " AND ".$clave." = '".$valor."'";
		}
		$db = new database();
		return $db->ejecutarConsulta($query);
	}

	public function actualizar($parametros){
		$query = "	UPDATE
						$this->tabla
					SET ";
		foreach ($parametros as $clave => $valor) {
			$query .= $clave."='".$valor."',";
		}		
		$query = rtrim($query, ",");
		$query .= " WHERE id = ".$parametros['id'];
		$db = new database();
		return $db->ejecutarConsulta($query);
	}

	public function eliminar($parametros){
		$query = "DELETE FROM 
					$this->tabla 
				WHERE 
					id = ".$parametros['id'];
		$db = new database();
		return $db->ejecutarConsulta($query);
	}
}