-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2015 a las 19:44:30
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `marmol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_nacimiento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` int(5) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(9) COLLATE utf8_spanish_ci NOT NULL,
  `valoracion` int(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
  constraint fk_usuario_id_rol foreign key (id_rol) references rol(id),
  constraint fk_usuario_id_empresa foreign key (id_empresa) references empresa(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;





CREATE TABLE IF NOT EXISTS `archivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL default'',
  `peso` varchar(15) COLLATE utf8_spanish_ci NOT NULL default'',
  `tipo` varchar(25) COLLATE utf8_spanish_ci NOT NULL default'',
  `descripcion` varchar(900) COLLATE utf8_spanish_ci NOT NULL default'',
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  constraint fk_archivo_id_usuario foreign key (id_usuario) references usuario(id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL default'',
  `descripcion` varchar(10000) COLLATE utf8_spanish_ci NOT NULL default'',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL default'',
  `descripcion` varchar(10000) COLLATE utf8_spanish_ci NOT NULL default'',
  `precio` int(25) COLLATE utf8_spanish_ci NOT NULL default'0',
  `id_categoria` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `oferta` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_archivo` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) COLLATE utf8_spanish_ci NOT NULL default'0',
  PRIMARY KEY (`id`),
  constraint fk_producto_id_categoria foreign key (id_categoria) references categoria(id),
  constraint fk_producto_id_archivo foreign key (id_archivo) references archivo(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;





CREATE TABLE IF NOT EXISTS `mensaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emisor` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_receptor` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(50) COLLATE utf8_spanish_ci NOT NULL default'Sin Asunto',
  `cuerpo` varchar(10000) COLLATE utf8_spanish_ci NOT NULL default'',
  PRIMARY KEY (`id`),
  constraint fk_mensaje_id_emisor foreign key (id_emisor) references usuario(id),
  constraint fk_mensaje_id_receptor foreign key (id_receptor) references usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_producto` int(11) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  constraint fk_pedido_id_usuario foreign key (id_usuario) references usuario(id),
  constraint fk_pedido_id_producto foreign key (id_producto) references producto(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `articulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL default'',
  `id_archivo` int(11) COLLATE utf8_spanish_ci ,
  `cuerpo` text(100000) COLLATE utf8_spanish_ci NOT NULL default'',
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  constraint fk_articulo_id_usuario foreign key (id_usuario) references usuario(id),
  constraint fk_articulo_id_archivo foreign key (id_archivo) references archivo(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
