<?php

//llamamos la clase Sessions
require'sessions.php';
 
//instanciamos el Objeto de la variable Sessions
$objses = new Sessions();
//lamamos la Sesión
$objses->init();
 
//destruimos toda la sesión.
$objses->destroy();
?>