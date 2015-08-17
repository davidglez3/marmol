<?php
include_once('../Entities/categoria.php');
include_once('../Data/queries.php');

$usuario = new Usuario();
$queries = new consultas();

if($_POST['btn_insertUsuario']){
    $usuario->setNombre($_POST['txt_nombre']);
    $usuario->setApellido1($_POST['txt_apellido1']);
    $usuario->setApellido2($_POST['txt_apellido2']);
    $usuario->setDni($_POST['txt_dni']);
    $usuario->setEmail($_POST['txt_email']);
    $usuario->setPass($_POST['txt_pass']);
    $usuario->setFechaNacimiento($_POST['txt_nacimiento']);
    $usuario->setLocalidad($_POST['txt_localidad']);
    $usuario->setProvincia($_POST['txt_provincia']);
    $usuario->setCodigoPostal($_POST['txt_codpostal']);
    $usuario->setDireccion($_POST['txt_direccion']);
    $usuario->setTelefono($_POST['txt_telefono']);


    if ($usuario->getNombre() !="") {
        $queries->connectToDB();
        $result = $queries->insertUsuario($usuario);
        $queries->disconnectFromDB();

        header('location:../Presentation/indexx.php');
    }
}
elseif ($_POST['btn_updateUsuario']) {
    $usuario->setNombre($_POST['nombre']);
    $usuario->setDescripcion($_POST['descripcion']);

    $queries->connectToDB();
    $result = $queries->updateCategoria($usuario);
    $queries->disconnectFromDB();
}

elseif ($_POST['btn_deleteUsuario']) {
    $queries->connectToDB();
    $result = $queries->deleteCategoria($usuario);
    $queries->disconnectFromDB();
}
?>
