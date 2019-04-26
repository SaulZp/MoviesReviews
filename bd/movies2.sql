-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-04-2019 a las 00:27:57
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

DROP TABLE IF EXISTS `generos`;
CREATE TABLE IF NOT EXISTS `generos` (
  `id_Genero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_Genero`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_peliculas`
--

DROP TABLE IF EXISTS `lista_peliculas`;
CREATE TABLE IF NOT EXISTS `lista_peliculas` (
  `nombre` varchar(40) DEFAULT NULL,
  `id_Pelicula` int(11) DEFAULT NULL,
  `id_Usuario` int(11) DEFAULT NULL,
  `privacidad` varchar(15) DEFAULT NULL,
  KEY `FK` (`id_Pelicula`,`id_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE IF NOT EXISTS `pelicula` (
  `id_Pelicula` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) DEFAULT NULL,
  `director` varchar(40) DEFAULT NULL,
  `sinopsis` varchar(200) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `id_Genero` int(11) DEFAULT NULL,
  `duracion` varchar(15) DEFAULT NULL,
  `pais` varchar(20) DEFAULT NULL,
  `productora` varchar(30) DEFAULT NULL,
  `idioma` varchar(50) DEFAULT NULL,
  `poster` varchar(30) DEFAULT NULL,
  `poster_Banner` varchar(50) DEFAULT NULL,
  `trailer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_Pelicula`),
  KEY `FK` (`id_Genero`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

DROP TABLE IF EXISTS `registro_usuario`;
CREATE TABLE IF NOT EXISTS `registro_usuario` (
  `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `contrasenia` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparto`
--

DROP TABLE IF EXISTS `reparto`;
CREATE TABLE IF NOT EXISTS `reparto` (
  `id_Pelicula` int(11) NOT NULL,
  `nombre_Actor` varchar(20) DEFAULT NULL,
  `apellidos_Actor` varchar(35) DEFAULT NULL,
  `personaje` varchar(50) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  KEY `FK` (`id_Pelicula`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

DROP TABLE IF EXISTS `reseña`;
CREATE TABLE IF NOT EXISTS `reseña` (
  `id_Usuario` int(11) DEFAULT NULL,
  `id_Pelicula` int(11) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL,
  KEY `FK` (`id_Usuario`,`id_Pelicula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
