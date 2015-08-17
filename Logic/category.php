<?php
include_once('../Entities/categoria.php');
include_once('../Data/queries.php');

$categoria = new Category();
$queries = new consultas();

if($_POST['btn_insertCategoria']){
    $categoria->setNombre($_POST['txt_nombre']);
    $categoria->setDescripcion($_POST['txt_descripcion']);

    if ($categoria->getNombre() !="") {
        $queries->connectToDB();
        $result = $queries->insertCategoria($categoria);
        $queries->disconnectFromDB();
    }
}
elseif ($_POST['btn_updateCategoria']) {
    $categoria->setNombre($_POST['nombre']);
    $categoria->setDescripcion($_POST['descripcion']);

    $queries->connectToDB();
    $result = $queries->updateCategoria($categoria);
    $queries->disconnectFromDB();
}

elseif ($_POST['btn_deleteCategoria']) {
    $queries->connectToDB();
    $result = $queries->deleteCategoria($categoria);
    $queries->disconnectFromDB();
}
?>
