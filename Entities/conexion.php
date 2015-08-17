<?php 
class MySQL{
	
	const SERVER = 'localhost';
	const USER = 'root';
	const PASSWORD = '';
	const DATABASE = 'marmoleria';

	
	private $conexion; 
	private $total_consultas;
	private $_query;
	
	public function conecta(){ 
		if(!isset($this->conexion)){
			$this->conexion = (mysqli_connect(MySQL::SERVER,MySQL::USER,MySQL::PASSWORD))
			or die(mysqli_error());
			mysqli_select_db( $this->conexion,MySQL::DATABASE) or die(mysqli_error());
		}
	}
	
	public function consulta($consulta){ 
		$this->total_consultas++; 
		$resultado = mysql_query($consulta,$this->conexion);
		if(!$resultado){ 
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}
		return $resultado;
	}
	
	public function fetch_array($consulta){
		return mysql_fetch_array($consulta);
	}
	
	public function num_rows($consulta){
		return mysql_num_rows($consulta);
	}
	
	public function getTotalConsultas(){
		return $this->total_consultas; 
	}
	
	public function insert($datos) {
		
        if($insertar_datos = mysqli_query($this->conexion,$datos)){
			echo "Te has registrado correctamente";
		}
		else{
			echo mysqli_error($this->conexion);
		}
    }
}



/*
*********************************************************************************
*********************CODIGO DE EJEMPLO PARA USAR LA CLASE************************
*********************************************************************************

include("conexion.php");
$db = new MySQL();
$consulta = $db->consulta("SELECT id FROM mitabla1");
if($db->num_rows($consulta)>0){
	while($resultados = $db->fetch_array($consulta)){ 
		echo "ID: ".$resultados['id']."<br/>"; 
	}
}*/
?>

