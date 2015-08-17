<?php 

class Archivo{
	
	var $id;
	var $documento;
	var $descripcion;
	var $nombre;
	var $tipo;
	var $peso;
	var $fecha;
	var $usuario;
	
	//Función que devuelve el valor de la variable id
	function getId(){
		return $this->id;
	}
	
	//Función que modifica el valor de la variable id
	function setId($id){
		$this->id = $id;
	}
	
	//Función que devuelve el valor de la variable documento
	function getDocumento(){
		return $this->documento;
	}
	
	//Función que modifica el valor de la variable documento
	function setDocumento($documento){
		$this->documento = $documento;
	}
	
	//Función que devuelve el nombre de la variable nombre
	function getNombre(){
		return $this->nombre;
	}
	
	//Función que modifica el nombre de la variable nombre
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	
	//Función que devuelve el valor de la variable descripcion
	function getDescripcion(){
		return $this->descripcion;
	}
	
	//Función que modifica el valor de la variable descripcion
	function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	
	//Función que devuelve el valor de la variable tipo
	function getTipo(){
		return $this->tipo;
	}
	
	//Función que modifica el valor de la variable tipo
	function setTipo($tipo){
		$this->tipo = $tipo;
	}
	
	//Función que devuelve el valor de la variable peso
	function getPeso(){
		return $this->peso;
	}
	
	//Función que modifica el valor de la variable peso
	function setPeso($peso){
		$this->peso = $peso;
	}
	
	//Función que devuelve el valor de la variable fecha
	function getFecha(){
		return $this->fecha;
	}
	
	//Función que modifica el valor de la variable fecha
	function setFecha($fecha){
		$this->fecha = $fecha;
	}
	
	//Función que devuelve el valor de la variable usuario
	function getUsuario(){
		return $this->usuario;
	}
	
	//Función que modifica el valor de la variable usuario
	function setUsuario($usuario){
		$this->usuario = $usuario;
	}
}
?>