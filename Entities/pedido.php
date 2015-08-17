<?php 

class Pedido{
	
	var $id;
	var $usuario;
	var $producto;
	
	//Funcion que devuelve el valor de la variable id
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
	
	//Función que devuelve el valor de la variable producto
	function getProducto(){
		return $this->producto;
	}
	
	//Función que modifica el valor de la variable producto
	function setProducto($producto){
		$this->producto = $producto;
	}
}
?>