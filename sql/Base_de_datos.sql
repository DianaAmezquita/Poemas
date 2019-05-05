-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-05-2019 a las 20:33:42
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `da_cine_base_de_datos`
--
CREATE DATABASE `da_cine_base_de_datos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `da_cine_base_de_datos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dca_peliculas_tabla`
--

CREATE TABLE IF NOT EXISTS `dca_peliculas_tabla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peliculas` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `dca_peliculas_tabla`
--

INSERT INTO `dca_peliculas_tabla` (`id`, `peliculas`, `descripcion`) VALUES
(4, 'Pablo Neruda', 'Si tu pie se desvÃ­a de nuevo  serÃ¡ cortado.  Si tu mano te lleva a otro camino,  se caerÃ¡ podrida.  Si me apartas de tu vida,  morirÃ¡s aunque vivas.  SeguirÃ¡s muerta o sombra,  andando sin mÃ­ por la tierra.'),
(13, 'Octavio Paz', 'Mis pasos en esta calle  Resuenan  En otra calle  Donde  Oigo mis pasos  Pasar en esta calle  Donde  SÃ³lo es real la niebla.'),
(14, 'Julio CortÃ¡zar', 'RegiÃ³n de manos sucias de pinceles sin pelo  de niÃ±os boca abajo de cepillos de dientes.  Zona donde la rata se ennoblece  y hay banderas innÃºmeras y cantan himnos  y alguien te prende, hijo de puta,  una medalla sobre el pecho.  Y te pudres lo mismo.'),
(15, 'Alfonsina Storni', 'Vamos hacia los Ã¡rboles... el sueÃ±o.  Se harÃ¡ en nosotros por virtud celeste.  Vamos hacia los Ã¡rboles; la noche.  Nos serÃ¡ blanda, la tristeza leve.  Vamos hacia los Ã¡rboles, el alma  Adormecida de perfume agreste.  Pero calla, no hables, sÃ© piadoso;  No despiertes los pÃ¡jaros que duermen.'),
(16, 'Julio CortÃ¡zar', 'Mis pasos en esta calle  Resuenan  En otra calle  Donde  Oigo mis pasos  Pasar en esta calle  Donde  SÃ³lo es real la niebla.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
