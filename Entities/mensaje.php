<?php

class Mensaje{
	var $id;
	var $emisor;
	var $receptor;
	var $asunto;
	var $cuerpo;
	var $archivo;
	var $fecha;
	var $leido;
	
	//Función que devuelve el valor de la variable id
	function getId(){
		return $this->id;
	}
	
	//Función que modifica el valor de la varible id
	function setId($id){
		$this->id = $id;
	}
	
	//Función que devuelve el valor de la variable emisor
	function getEmisor(){
		return $this->emisor;
	}
	
	//Función que modifica el valor de la variable emisor
	function setEmisor($emisor){
		$this->emisor = $emisor;
	}
	
	//Función que devuelve el valor de la variable receptor
	function getReceptor(){
		return $this->receptor;
	}
	
	//Función que modifica el valor de la variable receptor
	function setReceptor($receptor){
		$this->receptor = $receptor;
	}
	
	//Función que devuelve el valor de la variable asunto
	function getAsunto(){
		return $this->asunto;
	}
	
	//Función que modifica el valor de la variable asunto
	function setAsunto($asunto){
		$this->asunto = $asunto;
	}
	
	//Función que devuelve el valor de la variable cuerpo
	function getCuerpo(){
		return $this->cuerpo;
	}
	
	//Función que modifica el valor de la variable cuerpo
	function setCuerpo($cuerpo){
		$this->cuerpo = $cuerpo;
	}
	
	//Función que devuelve el valor de la variable archivo
	function getArchivo(){
		return $this->archivo;
	}
	
	//Función que modifica el valor de la variable archivo
	
	function setArchivo($archivo){
		$this->archivo = $archivo;
	}
	
	//Función que devuelve el valor de la variable fecha
	function getFecha(){
		return $this->fecha;
	}
	
	//Función que modifica el valor de la variable fecha
	function setFecha($fecha){
		$this->fecha = $fecha;
	}
	
	//Función que devuelve el valor de la variable leido
	function getLeido(){
		return $this->leido;
	}
	
	//Función que modifica el valor de la variable leido
	function setLeido($leido){
		if($leido == true || $leido== false){
			$this->leido = $leido;
		}
	}
}
?>