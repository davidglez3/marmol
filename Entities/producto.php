<?php

class Producto{

	var $id;
	var $nombre;
	var $descripcion;
	var $precio;
	var $categoria;
	var $oferta;
	var $ofertaVip;
	var $archivo;
	var $stock;

	//Función que devuelve el valor de la variable id
	function getId(){
		return $this->id;
	}

	//Función que modifica el valor de la variable id
	function setId($id){
		$this->id = $id;
	}

	//Función qu devuelve el valor de la variable nombre
	function getNombre(){
		return $this->nombre;
	}

	//Función que modifica el valor de la variable nombre
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

	//Función que devuelve el valor de la variable precio
	function getPrecio(){
		return $this->precio;
	}

	//Función que modifica el valor de la variable precio
	function setPrecio($precio){
		$this->precio = $precio;
	}

	//Función que devuelve el valor de la variable categoria
	function getCategoria(){
		return $this->categoria;
	}

	//Función que modifica el valor de la variable categoria
	function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	//Función que devuelve el valor de la variable oferta
	function getOferta(){
		return $this->oferta;
	}

	//Función que modifica el valor de la variable oferta
	function setOferta($oferta){
		$this->oferta = $oferta;
	}

	function getOfertaVip(){
		return $this->ofertaVip;
	}

	//Función que modifica el valor de la variable oferta
	function setOfertaVip($ofertaVip){
		$this->ofertaVip = $ofertaVip;
	}
	
	//Función que devuelve el valor de la variable archivo
	function getArchivo(){
		return $this->archivo;
	}

	//Función que modifica el valor de la variable archivo
	function setArchivo($archivo){
		$this->archivo = $archivo;
	}

	//Función que devuelve el valor de la variable stock
	function getStock(){
		return $this->stock;
	}

	//Función que modifica el valor de la variable stock
	function setStock($stock){
		$this->stock = $stock;
	}
}
?>
