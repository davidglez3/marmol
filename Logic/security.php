<?php
//Inicio la sesión
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ($_SESSION["autentificado"] != "SI") {

	echo "
                <script language='JavaScript'>
                alert('No logueado');
                </script>";

	header("Location: ./index.php");
    //si no existe, envio a la página de autentificacion

    exit();//ademas salgo de este script
}
?>
