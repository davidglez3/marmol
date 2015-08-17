<?php
include_once('../Entities/rol.php');
include_once('../Data/queries.php');
//include_once('../Data/dbManager.php');

$rol = new Rol();
$queries = new consultas();

if($_POST['btn_insertRol']){
    $rol->setNombre($_POST['txt_nombre']);
    $rol->setDescripcion($_POST['txt_descripcion']);

    if($rol->getNombre() != ""){
        $queries->connectToDB();
        $result = $queries->insertRol($rol);
        $queries->disconnectFromDB();
    }
}
elseif ($_POST['btn_updateRol']) {
    $rol->setNombre($_POST['txt_nombre']);
    $rol->setDescripcion($_POST['txt_descripcion']);

    $dbManager->connectToDB();
    $result = $queries->updateRol();
    $dbManager->disconnectFromDB();
}
elseif ($_POST['btn_deleteRol']) {
    $dbManager->connectToDB();
    $result = $queries->deleteRol();
    $dbManager->disconnectFromDB();
}
?>
