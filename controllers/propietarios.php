<?php
require '../libs/database.php';

class propietarios{
	public function consultar($parametros){
		$query = "SELECT * FROM propietarios";
		$db = new database();
		return $db->ejecutarConsulta($query);
	}
}