<?php

class Usuario{

	var $id;
	var $nombre;
	var $pass;
	var $email;
	var $apellido1;
	var $apellido2;
	var $fecha_nacimiento;
	var $localidad;
	var $provincia;
	var $codigo_postal;
	var $direccion;
	var $telefono;
	var $rol;
	var $dni;
	var $empresa;
	var $fecha_registro;
	var $valoracion;


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

	//Función que modifica el valor de la varibale nombre
	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	//Función que devuelve el valor de la variable pass
	function getPass(){
		return $this->pass;
	}

	//Función que modifica el valor de la variable pass
	function setPass($pass){
		$this->pass = $pass;
	}

	//Función que devuelve el valor de la variable email
	function getEmail(){
		return $this->email;
	}

	//Función que modifica el valor de la varible email
	function setEmail($email){
		$this->email = $email;
	}

	//Función que devuelve el valor de la varibale apellido1
	function getApellido1(){
		return $this->apellido1;
	}

	//Función que modifica el valor de la variable apellido1
	function setApellido1($apellido1){
		$this->apellido1 = $apellido1;
	}

	//Función que devuelve el valor de la variable apellido2
	function getApellido2(){
		return $this->apellido2;
	}

	//Función que modifica el valor de la variable apellido2
	function setApellido2($apellido2){
		$this->apellido2 = $apellido2;
	}

	//Función que devuelve el valor de la variable fecha_nacimiento
	function getFechaNacimiento(){
		return $this->fecha_nacimiento;
	}

	//Función que modifica el valor de la varibale fecha_nacimiento
	function setFechaNacimiento($fecha){
		$this->fecha_nacimiento = $fecha;
	}

	//Función que devuelve el valor de la variable localidad
	function getLocalidad(){
		return $this->localidad;
	}

	//Función que modifica el valor de la varibale localidad
	function setLocalidad($localidad){
		$this->localidad = $localidad;
	}

	//Función que devuelve el valor de la variable provincina
	function getProvincia(){
		return $this->localidad;
	}

	//Función que modifica el valor de la varibale provincina
	function setProvincia($provincia){
		$this->provincia = $provincia;
	}

	//Función que devuelve el valor de la variable codigo_postal
	function getCodigoPostal(){
		return $this->codigo_postal;
	}

	//Función que modifica el valor de la variable codigo_postal
	function setCodigoPostal($codigo_postal){
		$this->codigo_postal = $codigo_postal;
	}

	//Función que devuelve el valor de la varibale direccion
	function getDireccion(){
		return $this->direccion;
	}

	//Funcion que modifica el valor de la variable direccion
	function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	//Función que devuelve el valor de la variable rol
	function getRol(){
		return $this->rol;
	}

	//Función que modifica el valor de la variable rol
	function setRol($rol){
		$this->rol = $rol;
	}

	//Función que devuelve el valor de la variable dni
	function getDni(){
		return $this->dni;
	}

	//Función que modifica el valor de la variable dni
	function setDni($dni){
		$this->dni = $dni;
	}

	//Función que devuelve el valor de la variable empresa
	function getEmpresa(){
		return $this->empresa;
	}

	//Función que modifica el valor de la variable empresa
	function setEmpresa($empresa){
		$this->empresa = $empresa;
	}

	//Función que devuelve el valor de la variable fecha_registro
	function getFechaRegistro(){
		return $this->fecha_registro;
	}

	//Función que modifica el valor de la variable fecha_registro
	function setFechaRegistro($fecha_registro){
		$this->fecha_registro = $fecha_registro;
	}
	//Función que devuelve el valor de la variable valoracion
	function getValoracion(){
		return $this->valoracion;
	}

	//Función que modifica el valor de la variable valoracion
	function setValoracion($valoracion){
		$this->valoracion = $valoracion;
	}

	//Función que devuelve el valor de la variable telefono
	function getTelefono(){
		return $this->telefono;
	}

	//Función que modifica el valor de la variable telefono
	function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	//Función que verifica si el dni introducido es correcto
	//Si es correcto devuelve true si no devuelve false
	function validarDni($dni){
		$valido = false;
		$letra = strtoupper(substr($dni, -1));
		$numeros = substr($dni, 0, -1);
		if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
			$valido = true;
		}else{
			$valido = false;
		}

		return $valido;
	}

	//Función que verifica que un email tiene formato valido
	//Si es verdadero devuelve true y si no devuelve false
	function validarEmail($email){
		$valido = false;
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$valido = true;
		}else{
			$valido = false;
		}
		return $valido;
	}

	//Función que verifica que los campos del usuario no están vacíos y son válidos
	//Si son válidos devuelve true si no false
	function validarUsuario($usuario){

		if(!empty($usuario->getNombre()) && !empty($usuario->getPass()) && !empty($usuario->getApellido1()) && !empty($usuario->getApellido2()) && !empty($usuario->getDni()) && !empty($usuario->getEmail()) && !empty($usuario->getFechaNacimiento()) && $this->validarEmail($usuario->getEmail()) == true && $this->validarDni($usuario->getDni()) == true){
			$valido = true;
		}
		else{
			$valido = false;
		}
		return $valido;

	}
}
?>
