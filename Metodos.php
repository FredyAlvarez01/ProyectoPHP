<?php
require_once('Conexion.php');
class Metodos extends Conexion {


public function __construct(){
		$this->db=parent::__construct();
	}	
	
	
	public function getMaterias(){
		$rows =null; //array para almacenar registros
		$statement = $this->db->prepare("SELECT * FROM materias");
		$statement->execute();
		while($result=$statement->fetch()){// se almacena un regitro por cada ciclo 
				$rows[]=$result;
		}
		return $rows;

	}
	

	public function getDocentes (){

		$rows =null; //array para almacenar registros
		$statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL='Docente'");
		$statement->execute();
		while($result=$statement->fetch()){// se almacena un regitro por cada ciclo 
				$rows[]=$result;
		}
		return $rows;


	}
	
}

?>