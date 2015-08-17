<?php
session_start();
//include_once('general/globals.php');
//include_once('general/dbmanager.php');
include_once('../Data/queries.php');

$consultas = new consultas();

$usuario=$_POST["txt_usuario"];
$pass=$_POST["txt_pass"];

$respuesta="";

//if(isset($_POST['usuario']) && isset($_POST['contrasena']) )
if(isset($_POST['txt_usuario']))
{
	//$sql = $consultas->getUsuarioPorNombre($usuario);
	$consultas->connectToDB();
	$result = $consultas->getUsuarioPorNombre($usuario);
	//$result = $consultas->execQuery($sql);
	$consultas->disconnectFromDB();
	$probando = mysql_num_rows($result);
	echo $probando;
	if (mysql_num_rows($result) == 1) //Usuario correcto
	{
		$row = mysql_fetch_array($result);
		$bdPass = $row['pass'];
		$bdNombre = $row['nombre'];
		$dbRol = $row['id_rol'];
		$dbId = $row['id'];
		$bdDni = $row['dni'];
		
		if($pass === $bdPass){ //Contraseña correcta

			//Se declaran las variables de sesión
			$_SESSION["autentificado"]= "SI";
			$_SESSION["id"] = $dbId;
			$_SESSION["nombre"]= $bdNombre;
			$_SESSION["rol"]= $dbRol;
			$_SESSION["usuario"] = $usuario;

			header('location:../Presentation/indexx.php');
			$respuesta.="ok";
		}else{
			//vuelve a la principal
			$respuesta.="contraseña error";
		}
	}else
	{
		 //vuelve a la principal
			$respuesta.="usuario incorrecto";
	}
}else
{
	 //vuelve a la principal
		$respuesta.="usuario pass vacio";
}
echo $respuesta;
?>
