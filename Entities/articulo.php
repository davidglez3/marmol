<?php 

class Articulo{
	
	var $id;
	var $usuario;
	var $titulo;
	var $archivo;
	var $cuerpo;
	var $fecha;
	
	//Función que devuelve el valor de la variable id
	function getId(){
		return $this->id;
	}
	
	//Función que modifica el valor de la variable id
	function setId($id){
		$this->id = $id;
	}
	
	//Función que devuelve el valor de la variable usuario
	function getUsuario(){
		return $this->usuario;
	}
	
	//Función que modifica el valor de la variable usuario
	function setUsuario($usuario){
		$this->usuario = $usuario;
	}
	
	//Función que devuelve el valor de la variable titulo
	function getTitulo(){
		return $this->titulo;
	}
	
	//Funcion que modifica el valor de la variable titulo
	function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	
	//Función que devuelve el valor de la variable archivo
	function getArchivo(){
		return $this->archivo;
	}
	
	//Función que modifica el valor de la variable archivo
	function setArchivo($archivo){
		$this->archivo = $archivo;
	}
	
	//Función que devuelve el valor de la variable cuerpo
	function getCuerpo(){
		return $this->cuerpo;
	}
	
	//Funcion que modifica el valor de la variable cuerpo
	function setCuerpo($cuerpo){
		$this->cuerpo = $cuerpo;
	}
	
	//Función que devuelve el valor de la variable fecha
	function getFecha(){
		return $this->fecha;
	}
	
	//Función que modifica el valor de la variable fecha
	function setFecha($fecha){
		$this->fecha = $fecha;
	}
}
?>