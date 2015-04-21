-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-04-2015 a las 20:45:44
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estilo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `idmaterial` int(5) NOT NULL AUTO_INCREMENT,
  `material` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `precio` double NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`idmaterial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`idmaterial`, `material`, `tipo`, `precio`, `codigo`, `img`) VALUES
(27, 'Vintage wood', 'wood', 1.5, 'VW001', '../img/materiales/madera.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mueble`
--

CREATE TABLE IF NOT EXISTS `mueble` (
  `idmueble` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `alto` int(5) NOT NULL,
  `ancho` int(5) NOT NULL,
  `idpieza` int(5) NOT NULL,
  PRIMARY KEY (`idmueble`),
  KEY `idpieza` (`idpieza`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pieza`
--

CREATE TABLE IF NOT EXISTS `pieza` (
  `idpieza` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `alto` varchar(5) NOT NULL,
  `ancho` varchar(5) NOT NULL,
  `precio` double NOT NULL,
  `idmaterial` int(11) NOT NULL,
  PRIMARY KEY (`idpieza`),
  KEY `idmaterial` (`idmaterial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE IF NOT EXISTS `produccion` (
  `idprodu` int(5) NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) NOT NULL,
  `idpieza` int(5) NOT NULL,
  `idreserva` int(5) NOT NULL,
  `idmueble` int(5) NOT NULL,
  PRIMARY KEY (`idprodu`),
  KEY `idpieza` (`idpieza`),
  KEY `idreserva` (`idreserva`),
  KEY `idmueble` (`idmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `idreserva` int(5) NOT NULL AUTO_INCREMENT,
  `total` double NOT NULL,
  `fecha_ordenado` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `numventa` int(5) NOT NULL,
  `img` varchar(250) NOT NULL,
  `iduser` int(5) NOT NULL,
  `idmueble` int(5) NOT NULL,
  PRIMARY KEY (`idreserva`),
  KEY `iduser` (`iduser`),
  KEY `idmueble` (`idmueble`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `iduser` int(5) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`iduser`, `usuario`, `nombre`, `apellido`, `contra`, `correo`, `telefono`, `dui`, `tipo`) VALUES
(7, 'imaxpanama', 'Max', 'Panama', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'maxpanama97@gmail.com', '22785675', '012345678', 'admin'),
(9, 'Felix', 'Felix', 'Masin', '75222f68d4dab93e5ff408018a28a1b19ceff3e5', 'felixmasin@gmail.com', '78963252', '8523697412', 'user');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mueble`
--
ALTER TABLE `mueble`
  ADD CONSTRAINT `mueble_ibfk_1` FOREIGN KEY (`idpieza`) REFERENCES `pieza` (`idpieza`);

--
-- Filtros para la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD CONSTRAINT `pieza_ibfk_1` FOREIGN KEY (`idmaterial`) REFERENCES `material` (`idmaterial`);

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`idpieza`) REFERENCES `pieza` (`idpieza`),
  ADD CONSTRAINT `produccion_ibfk_2` FOREIGN KEY (`idreserva`) REFERENCES `reserva` (`idreserva`),
  ADD CONSTRAINT `produccion_ibfk_3` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`idmueble`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `usuario` (`iduser`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`idmueble`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
