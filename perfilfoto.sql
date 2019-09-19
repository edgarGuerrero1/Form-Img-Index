-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-09-2019 a las 04:29:58
-- Versión del servidor: 8.0.15
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `perfilfoto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosindex`
--

DROP TABLE IF EXISTS `fotosindex`;
CREATE TABLE IF NOT EXISTS `fotosindex` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(70) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `contenido` varchar(600) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `posicion` varchar(90) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `fotosindex`
--

INSERT INTO `fotosindex` (`id_foto`, `fecha`, `titulo`, `contenido`, `foto`, `posicion`) VALUES
(1, '2019-07-10', 'asd', 'asd', 'tres.jpg', 'centro'),
(2, '2019-07-10', 'prueba 1  titulo', 'asd', 'hulk.png', 'derecha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `Categoria` varchar(60) NOT NULL,
  `expediente` varchar(200) NOT NULL,
  `foto` varchar(300) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre`, `apellido`, `Categoria`, `expediente`, `foto`) VALUES
(1, 'padalustro', 'guerrero', 'DC', '123', 'img/logo.PNG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
