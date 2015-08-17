<?php

//Creamos la conexion con la base de datos
$enlace = mysqli_connect('localhost', 'root', '');
if (!$enlace) {
    die('No pudo conectarse: ' . mysqli_error());
}

//Creamos la base de datos
$sql = 'CREATE DATABASE IF NOT EXISTS marmoleria';
if (mysqli_query($enlace, $sql)) {
    echo "La base de datos se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la base de datos<br>: ' . mysqli_error() . "\n";
}

//Elegimos la base de datos
mysqli_select_db($enlace, "marmoleria");

//Creamos la tabla rol con todos sus campos
$sql = "CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla rol se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla rol: ' . mysqli_error() . "\n<br>";
}


//Creamos la tabla empresa con todos sus campos
$sql = "CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1  ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla empresa se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla empresa: ' . mysqli_error() . "\n<br>";
}

//Creamos la tabla usuario con todos sus campos
$sql = "CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `localidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` int(5) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(9) COLLATE utf8_spanish_ci NOT NULL,
  `valoracion` int(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla usuario se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla usuario: ' . mysqli_error() . "\n<br>";
}



//Creamos la tabla archivo con todos sus campos
$sql = "CREATE TABLE IF NOT EXISTS `archivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL default'',
  `peso` varchar(15) COLLATE utf8_spanish_ci NOT NULL default'',
  `tipo` varchar(25) COLLATE utf8_spanish_ci NOT NULL default'',
  `descripcion` varchar(900) COLLATE utf8_spanish_ci NOT NULL default'',
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla archivo se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla archivo: ' . mysqli_error() . "\n<br>";
}



//Creamos la tabla categoria
$sql = "CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL default'',
  `descripcion` varchar(10000) COLLATE utf8_spanish_ci NOT NULL default'',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1  ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla categoria se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla categoria.<br>';
}



//Creamos la tabla producto con todos sus campos
$sql = "CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL default'',
  `descripcion` varchar(10000) COLLATE utf8_spanish_ci NOT NULL default'',
  `precio` int(25) COLLATE utf8_spanish_ci NOT NULL default'0',
  `id_categoria` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_oferta` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_archivo` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) COLLATE utf8_spanish_ci NOT NULL default'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla producto se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla producto.<br>';
}




//Creamos la tabla mensaje
$sql = "CREATE TABLE IF NOT EXISTS `mensaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emisor` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_receptor` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(50) COLLATE utf8_spanish_ci NOT NULL default'Sin Asunto',
  `cuerpo` varchar(10000) COLLATE utf8_spanish_ci NOT NULL default'',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla mensaje se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla mensaje.<br>';
}

//Creamos la tabla pedido
$sql = "CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_producto` int(11) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla pedido se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla pedido.<br>';
}

//Creamos la tabla articulo
$sql = "CREATE TABLE IF NOT EXISTS `articulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL default'',
  `id_archivo` int(11) COLLATE utf8_spanish_ci ,
  `cuerpo` text(100000) COLLATE utf8_spanish_ci NOT NULL default'',
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1";

if (mysqli_query($enlace, $sql)) {
    echo "La tabla articulo se cre&oacute; correctamente\n<br>";
} else {
    echo 'Error al crear la tabla articulo.<br>';
}
?>
