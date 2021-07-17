<?php
error_reporting(E_ERROR | E_PARSE);

class database extends mysqli {
	private $HOST = 'localhost';
	private $DB = 'kinjo';
	private $USER = 'root';
	private $PASS = '';

	public function __construct(){
		parent::__construct($this->HOST, $this->USER, $this->PASS, $this->DB);
		if($this->connect_errno){
			echo 'Fallo la conexión, error número:'.$this->connect_errno.'-'.$this->connect_error;
			exit;
		}
	}

	public function ejecutarConsulta($query){
		$respuesta = [];
		$resultado = $this->query($query);
		if(is_object($resultado)){
			$respuesta['ejecuto'] = true;			
			while($fila = $resultado->fetch_assoc()){
				$respuesta['datos'][] = $fila;
			}
		}elseif($resultado == true){
			$respuesta['ejecuto'] = true;
		}else{
			$respuesta['ejecuto'] = false;
			$respuesta['error'] = $this->error;
		}
		$this->close();
		return $respuesta;
	}
}