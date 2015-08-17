<?php
include_once('globals.php');
include_once('dbManager.php');
include_once('../Entities/rol.php');
include_once('../Entities/usuario.php');

class consultas{

    public function getUsuarioPorNombre($usuario){
        $sql = "SELECT * FROM usuario WHERE dni = '$usuario'";
        $result = $this->getResultQuery($sql);
        return $result;
    }

    public function insertRol($rol){
        $nombre = $rol->getNombre();
        $descripcion = $rol->getDescripcion();
        $sql = "insert into rol(nombre,descripcion) values ('$nombre','$descripcion')";
        $result = $this->execQuery($sql);
        return $result;
    }

    public function updateRol($rol){
        $nombre = $rol->getNombre();
        $descripcion = $rol->getDescripcion();
        $id = $rol->getId();
        $sql = "update rol set nombre = '$nombre' and descripcion = '$descripcion' where id = '$id'";
        $result = $this->execQuery($sql);
        return $result;
    }

    public function deleteRol($rol){
        $sql = "delete from rol where id = '$rol->getId()'";
        $result = $this->execQuery($sql);
        return $result;
    }

    public function insertCategoria($categoria){
        $nombre = $categoria->getNombre();
        $descripcion = $categoria->getDescripcion();
        $sql = "insert into categoria (nombre,descripcion) values ('$nombre','$descripcion')";
        $result = $this->execQuery($sql);
        return $result;
    }

    public function updateCategoria($categoria){
        $sql = "update categroia set nombre = '$categoria->getNombre()' and descripcion = '$categoria->getDescripcion' where id = '$categoria->getId()'";
        $result = $this->execQuery($sql);
        return $result;
    }

    public function deleteCategoria($categoria){
        $sql = "delete from categoria where id = '$categoria->getId()'";
        $result = $this->execQuery($sql);
        return $result;
    }

    public function insertUsuario($usuario){
        $nombre = $usuario->getNombre();
        $apellido1 = $usuario->getApellido1();
        $apellido2 = $usuario->getApellido2();
        $dni = $usuario->getDni();
        $email = $usuario->getEmail();
        $pass = $usuario->getPass();
        $nacimiento = $usuario->getFechaNacimiento();
        $localidad = $usuario->getLocalidad();
        $provincia = $usuario->getProvincia();
        $codigo_postal = $usuario->getCodigoPostal();
        $direccion = $usuario->getDireccion();
        $telefono = $usuario->getTelefono();
        $valoracion = $usuario->getValoracion();



        $fecha = date("Y-m-d");


        $sql = "insert into usuario(nombre,apellido_1,apellido_2,dni,email,pass,fecha_nacimiento,fecha_registro,localidad,provincia,codigo_postal,direccion,telefono,valoracion,id_rol) values ('$nombre','$apellido1','$apellido2','$dni','$email','$pass','$nacimiento','$fecha','$localidad','$provincia','$codigo_postal','$direccion','$telefono','$valoracion',1)";

        $result = $this->execQuery($sql);
        return $result;
    }

    public function insertProducto($producto){
      $nombre = $producto->getNombre();
      $descripcion = $producto->getDescripcion();
      $categoria = $producto->getCategoria();
      $stock = $producto->getStock();
      $oferta = $producto->getOferta();
      //$ofertaVip = $producto->getOfertaVip();
      $precio = $producto->getPrecio();

      $sql = "insert into producto (nombre,descripcion,precio,id_categoria,id_oferta,stock) values ('$nombre','$descripcion','$categoria','$oferta','$stock')" ;
    }
    /*----------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------UTILITY FUNCTIONS---------------------------------------------------*/
    /*---------------------------------------------DATABASE ACCESS----------------------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------*/

	public function connectToDB(){
		$db = dbmanager::getInstance();
		$db->connectToDb();
	}

	public function disconnectFromDB(){
		$db = dbmanager::getInstance();
		$db->disconnectFromDb();
	}

	private function getResultQuery($sql){
		$db = dbmanager::getInstance();
		return $db->executeQuery($sql);
	}

	private function execQuery($sql){
		$db = dbmanager::getInstance();
		$db->executeQuery($sql);
		return "OK";
	}

	function escribirEnLog($incidencia){
		$log = fopen("log.txt","a");
		fwrite($log, $incidencia . PHP_EOL);
		fclose($log);
	}
}
