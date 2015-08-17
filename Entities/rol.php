<?php

class Rol{

	var $id;
	var $nombre;
	var $descripcion;

	//Función que devuelve el valor de la variable id
	function getId(){
		return $this->id;
	}

	//Función que modifica el valor de la variable id
	function setId($id){
		$this->id = $id;
	}

	//Función que devuelve el valor de la variable nombre
	function getNombre(){
		return $this->nombre;
	}

	//Función que modifica el valor de la variable nombre
	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	//Función que devuelve el valor de la variable descripción
	function getDescripcion(){
		return $this->descripcion;
	}

	//Función que modifica el valor de la variable descripcion
	function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
}
?>
