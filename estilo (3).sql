-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 07:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
`idmaterial` int(5) NOT NULL,
  `material` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `precio` double NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`idmaterial`, `material`, `tipo`, `precio`, `codigo`, `img`) VALUES
(27, 'Vintage wood', 'wood', 1.5, 'VW001', '../img/materiales/madera.jpg'),
(28, 'Textura de madera', 'Madera', 0.25, 'TXT02', '../img/materiales/textura2.png'),
(29, 'Textura de madera 3', 'Madera', 0.25, 'TXT03', '../img/materiales/textura3.png'),
(30, 'Textura de madera 4', 'Madera', 0.25, 'TXT04', '../img/materiales/textura4.png'),
(31, 'Textura de madera 5', 'Madera', 0.25, 'TXT05', '../img/materiales/textura5.png'),
(32, 'Textura de madera 6', 'Madera', 0.25, 'TXT06', '../img/materiales/textura6.png'),
(33, 'Textura de madera 7', 'Madera', 0.25, 'TXT07', '../img/materiales/textura7.png');

-- --------------------------------------------------------

--
-- Table structure for table `mueble`
--

CREATE TABLE IF NOT EXISTS `mueble` (
`idmueble` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `Descricpion` varchar(500) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `img` varchar(250) NOT NULL,
  `vis` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mueble`
--

INSERT INTO `mueble` (`idmueble`, `nombre`, `Descricpion`, `tipo`, `precio`, `img`, `vis`) VALUES
(1, 'Stand ', 'Gabinete para cocina, posee 6 puertas en vertical, con un acabado de melamina oscura. ', 'Office', 40, 'img/muebles/mueble1.png', 4),
(2, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con un acabado de melamina color madera. ', 'Office', 35, 'img/muebles/mueble1txt2.png', 4),
(3, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con un acabado de melamina claro. ', 'office', 60, 'img/muebles/mueble1txt3.png\r\n', 5),
(4, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con un acabado de melamina.', 'Office', 60, 'img/muebles/mueble1txt4.png\r\n', 0),
(5, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con un acabado de melamina rojizo.', 'Office', 50, 'img/muebles/mueble1txt5.png\r\n', 2),
(6, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con un acabado de melamina. ', 'Office', 50, 'img/muebles/mueble1txt6.png\r\n', 0),
(7, 'Stand', '', 'Office', 80, 'img/muebles/mueble1txt7.png\r\n', 0),
(8, 'Mueble', '', 'Kitchen', 120, 'img/muebles/mueble2.png\r\n', 3),
(9, 'Mueble', '', 'Kitchen', 120, 'img/muebles/mueble2txt2.png\r\n', 1),
(10, 'Mueble', '', 'Kitchen', 120, 'img/muebles/mueble2txt3.png\r\n', 2),
(11, 'Mueble', '', 'Kitchen', 120, 'img/muebles/mueble2txt4.png\r\n', 1),
(12, 'Mueble', '', 'Kitchen', 120, 'img/muebles/mueble2txt5.png\r\n', 3),
(13, 'Mueble', '', 'Kitchen', 120, 'img/muebles/mueble2txt6.png\r\n', 1),
(14, 'Mueble', '', 'Kitchen', 120, 'img/muebles/mueble2txt7.png\r\n', 1),
(15, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3.png\r\n', 0),
(16, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt2.png\r\n', 0),
(17, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt3.png\r\n', 0),
(18, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt4.png\r\n', 0),
(19, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt5.png\r\n', 0),
(20, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt6.png\r\n', 0),
(21, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt7.png\r\n', 0),
(22, 'Gabinete', '', 'Oficina', 180, 'img/muebles/mueble4.png\r\n', 0),
(23, 'Gabinete', '', 'Office', 180, 'img/muebles/mueble4txt2.png\r\n', 0),
(24, 'Gabinete', '', 'Office', 180, 'img/muebles/mueble4txt3.png', 0),
(25, 'Gabinete', '', 'Office', 180, 'img/muebles/mueble4txt4.png', 0),
(26, 'Gabinete', '', 'Office', 180, 'img/muebles/mueble4txt5.png', 0),
(27, 'Gabinete', '', 'Office', 180, 'img/muebles/mueble4txt6.png', 0),
(28, 'Gabinete', '', 'Office', 180, 'img/muebles/mueble4txt7.png', 0),
(29, 'Escritorio', '', 'Office', 200, 'img/muebles/mueble5.png', 0),
(30, 'Escritorio', '', 'Office', 200, 'img/muebles/mueble5txt2.png', 0),
(31, 'Escritorio', '', 'Office', 200, 'img/muebles/mueble5txt3.png', 0),
(32, 'Escritorio', '', 'Office', 200, 'img/muebles/mueble5txt4.png', 0),
(33, 'Escritorio', '', 'Office', 200, 'img/muebles/mueble5txt5.png', 0),
(34, 'Escritorio', '', 'Office', 200, 'img/muebles/mueble5txt6.png', 0),
(35, 'Escritorio', '', 'Office', 200, 'img/muebles/mueble5txt7.png', 0),
(36, 'Gabinete', '', 'Office', 250, 'img/muebles/mueble6.png', 0),
(37, 'Gabinete ', '', 'Office', 250, 'img/muebles/mueble6txt2.png', 0),
(38, 'Gabinete', '', 'Office', 250, 'img/muebles/mueble6txt3.png', 0),
(39, 'Gabinete', '', 'Office', 250, 'img/muebles/mueble6txt4.png', 0),
(40, 'Gabinete', '', 'Office', 250, 'img/muebles/mueble6txt5.png', 0),
(41, 'Gabinete', '', 'Office', 250, 'img/muebles/mueble6txt6.png', 0),
(42, 'Gabinete', '', 'Office', 250, 'img/muebles/mueble6txt7.png', 0),
(43, 'Stand', '', 'Bathroom', 140, 'img/muebles/mueble7.png', 0),
(44, 'Stand', '', 'Bathroom', 140, 'img/muebles/mueble7txt2.png', 0),
(45, 'Stand', '', 'Bathroom', 140, 'img/muebles/mueble7txt3.png', 0),
(46, 'Stand', '', 'Bathroom', 140, 'img/muebles/mueble7txt4.png', 0),
(47, 'Stand', '', 'Bathroom', 140, 'img/muebles/mueble7txt5.png', 0),
(48, 'Stand', '', 'Bathroom', 140, 'img/muebles/mueble7txt6.png', 0),
(49, 'Stand', '', 'Bathroom', 140, 'img/muebles/mueble7txt7.png', 0),
(50, 'Closet', '', 'Closets', 170, 'img/muebles/mueble8.png', 1),
(51, 'Closet', '', 'Closets', 170, 'img/muebles/mueble8txt2.png', 0),
(52, 'Closet', '', 'Closets', 170, 'img/muebles/mueble8txt3.png', 0),
(53, 'Closet', '', 'Closets', 170, 'img/muebles/mueble8txt4.png', 0),
(54, 'Closet', '', 'Closets', 170, 'img/muebles/mueble8txt5.png', 0),
(55, 'Closet', '', 'Closets', 170, 'img/muebles/mueble8txt6.png', 0),
(56, 'Closet', '', 'Closets', 170, 'img/muebles/mueble8txt7.png', 0),
(57, 'Stand', '', 'Bathroom', 35, 'img/muebles/mueble9.png', 0),
(58, 'Stand', '', 'Bathroom', 35, 'img/muebles/mueble9txt2.png', 0),
(59, 'Stand', '', 'Bathroom', 35, 'img/muebles/mueble9txt3.png', 0),
(60, 'Stand', '', 'Bathroom', 35, 'img/muebles/mueble9txt4.png', 0),
(61, 'Stand', '', 'Bathroom', 35, 'img/muebles/mueble9txt5.png', 0),
(62, 'Stand', '', 'Bathroom', 35, 'img/muebles/mueble9txt6.png', 0),
(63, 'Stand', '', 'Bathroom', 35, 'img/muebles/mueble9txt7.png', 0),
(64, 'Island', '', 'Kitchen', 300, 'img/muebles/mueble10.png', 0),
(65, 'Island', '', 'Kitchen', 300, 'img/muebles/mueble10txt2.png', 0),
(66, 'Island', '', 'Kitchen', 300, 'img/muebles/mueble10txt3.png', 0),
(67, 'Island', '', 'Kitchen', 300, 'img/muebles/mueble10txt4.png', 0),
(68, 'Island', '', 'Kitchen', 300, 'img/muebles/mueble10txt5.png', 0),
(69, 'Island', '', 'Kitchen', 300, 'img/muebles/mueble10txt6.png', 0),
(70, 'Island', '', 'Kitchen', 300, 'img/muebles/mueble10txt7.png', 0),
(71, 'mueble', '', 'Bathroom', 60, 'img/muebles/mueble11.png', 0),
(72, 'mueble', '', 'Bathroom', 60, 'img/muebles/mueble11txt2.png', 0),
(73, 'Mueble', '', 'Bathroom', 60, 'img/muebles/mueble11txt3.png', 0),
(74, 'Mueble', '', 'Bathroom', 60, 'img/muebles/mueble11txt4.png', 0),
(75, 'Mueble', '', 'Bathroom', 60, 'img/muebles/mueble11txt5.png', 0),
(76, 'Mueble', '', 'Bathroom', 60, 'img/muebles/mueble11txt6.png', 0),
(77, 'Mueble', '', 'Bathroom', 60, 'img/muebles/mueble11txt7.png', 0),
(78, 'estante', '', 'Office', 120, 'img/muebles/mueble12.png', 0),
(79, 'estante', '', 'office', 120, 'img/muebles/mueble12txt2.png', 0),
(80, 'estante', '', 'office', 120, 'img/muebles/mueble12txt3.png', 0),
(81, 'estante', '', 'Office', 80, 'img/muebles/mueble12txt4.png', 0),
(82, 'estante', '', 'office', 80, 'img/muebles/mueble12txt5.png', 0),
(83, 'estante', '', 'office', 80, 'img/muebles/mueble12txt6.png', 0),
(84, 'estante', '', 'Office', 80, 'img/muebles/mueble12txt7.png', 0),
(85, 'Baño ', '', 'bathroom', 140, 'img/muebles/mueble13.png', 0),
(86, 'baño ', '', 'bathroom', 140, 'img/muebles/mueble13txt2.png', 0),
(87, 'baño', '', 'bathroom ', 140, 'img/muebles/mueble13txt3.png', 0),
(88, 'baño', '', 'bathroom', 140, 'img/muebles/mueble13txt4.png', 0),
(89, 'baño', '', 'bathroom', 140, 'img/muebles/mueble13txt5.png', 0),
(90, 'baño', '', 'bathroom', 140, 'img/muebles/mueble13txt6.png', 0),
(91, 'baño', '', 'bathroom', 140, 'img/muebles/mueble13txt7.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pieza`
--

CREATE TABLE IF NOT EXISTS `pieza` (
`idpieza` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `alto` varchar(5) NOT NULL,
  `ancho` varchar(5) NOT NULL,
  `precio` double NOT NULL,
  `idmaterial` int(11) NOT NULL,
  `idmueble` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pieza`
--

INSERT INTO `pieza` (`idpieza`, `nombre`, `cantidad`, `alto`, `ancho`, `precio`, `idmaterial`, `idmueble`) VALUES
(5, 'jaladeras en forma de botones', 6, '0', '0', 0.7, 27, 1),
(6, 'Melamina', 8, '0.96', '0.76', 50, 27, 1),
(7, 'jaladeras', 13, '0', '0', 0.7, 27, 8),
(8, 'Gavetas', 3, '0.25', '0.40', 5.5, 27, 8),
(10, 'Pantries de Melamina', 10, '0.72', '0.37', 45.6, 27, 8),
(11, 'jaladeras en forma de botones', 2, '0', '0', 0.7, 27, 15),
(12, 'Melamina', 6, '1.80', '1', 50, 27, 15),
(13, 'jaladera en forma de boton', 2, '0', '0', 0.7, 27, 22),
(14, 'jaladeras', 6, '0', '0', 0.7, 27, 22),
(15, 'Melamina', 2, '1', '0.50', 5.5, 27, 22),
(16, 'Melamina', 3, '0.40', '0.40', 4.5, 27, 22),
(17, 'Melamina', 3, '0.40', '0.20', 2.3, 27, 22),
(18, 'Melamina', 7, '0.75', '0.54', 45, 27, 29),
(19, 'Melamina', 15, '0.80', '0.50', 50, 27, 36),
(20, 'Jaladeras', 8, '0', '0', 0.7, 27, 36),
(21, 'repisa', 1, '0.70', '0.50', 2.4, 27, 36),
(22, 'Refuerzos acrilicos', 4, '0', '0', 3.34, 27, 36),
(23, 'Repisas de Melamina', 6, '0.50', '0.40', 6.8, 27, 43),
(24, 'jaladeras en forma de boton', 2, '0', '0', 0.7, 27, 43),
(25, 'puertas de melamina', 2, '0.50', '0.50', 5, 27, 43),
(26, 'Refuerzos Acrilicos', 24, '0', '0', 0.35, 27, 43),
(27, 'Jaladeras', 4, '0', '0', 0.7, 27, 50),
(28, 'Gavetas de melamina', 2, '0.20', '0.60', 5, 27, 50),
(29, 'Puertas de melamina', 2, '1.80', '0.60', 12, 27, 50),
(30, 'Melamina ', 4, '0.75', '0.75', 6.6, 27, 57),
(31, 'Refuerzos acrilicos', 4, '0', '0', 0.35, 27, 57),
(38, 'Granito', 1, '1.40', '1.00', 200, 28, 64),
(39, 'Melamina', 4, '1', '1', 4.5, 27, 64),
(40, 'Jaladeras', 3, '0', '0', 0.7, 27, 71),
(41, 'Refuerzos de acrilico', 12, '0', '0', 0.35, 27, 71),
(42, 'Gavetas de Melamina', 3, '0.30', '0.40', 5.5, 27, 71),
(43, 'Melamina', 15, '1.80', '0.90', 9, 27, 78),
(44, 'Refuerzos Acrilicos', 12, '0', '0', 0.35, 27, 78),
(45, 'jaladeras en forma de botones', 2, '0', '0', 0.7, 27, 85),
(46, 'Gavetas de melamina', 2, '0.20', '0.40', 4.34, 27, 85),
(47, 'Repisa de melamina', 1, '0.80', '0.80', 2, 27, 85),
(48, 'Gaveta de melamina', 1, '1', '1', 4, 27, 85);

-- --------------------------------------------------------

--
-- Table structure for table `produccion`
--

CREATE TABLE IF NOT EXISTS `produccion` (
`idprodu` int(5) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `idpieza` int(5) NOT NULL,
  `idreserva` int(5) NOT NULL,
  `idmueble` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
`idreserva` int(5) NOT NULL,
  `total` double NOT NULL,
  `fecha_ordenado` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `img` varchar(250) NOT NULL,
  `iduser` int(5) NOT NULL,
  `idmueble` int(5) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`idreserva`, `total`, `fecha_ordenado`, `fecha_entrega`, `img`, `iduser`, `idmueble`, `estado`) VALUES
(5, 40, '2015-05-28', '2015-05-03', 'img/muebles/mueble1.png', 10, 1, 'Terminado'),
(6, 40, '2015-06-09', '2015-05-03', 'img/muebles/mueble1.png', 7, 1, 'En cola'),
(7, 90, '2015-06-09', '2015-05-03', 'img/muebles/mueble1.png', 7, 1, 'En cola');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`iduser` int(5) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`iduser`, `usuario`, `nombre`, `apellido`, `contra`, `correo`, `telefono`, `dui`, `tipo`) VALUES
(7, 'imaxpanama', 'Max', 'Panama', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'maxpanama97@gmail.com', '22785675', '012345678', 'admin'),
(10, 'umarin', 'Carlos', 'Marin', '12dea96fec20593566ab75692c9949596833adc9', 'marin@gmail.com', '77658231', '0123456789', 'user'),
(13, 'Andres', 'Jose', 'Mata', 'f51fabbca8cc1a8bef111911e7bfa350a8ed2d34', 'andresmata@hotmail.com', '77456633', '0123456789', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`idmaterial`);

--
-- Indexes for table `mueble`
--
ALTER TABLE `mueble`
 ADD PRIMARY KEY (`idmueble`);

--
-- Indexes for table `pieza`
--
ALTER TABLE `pieza`
 ADD PRIMARY KEY (`idpieza`), ADD KEY `idmaterial` (`idmaterial`);

--
-- Indexes for table `produccion`
--
ALTER TABLE `produccion`
 ADD PRIMARY KEY (`idprodu`), ADD KEY `idpieza` (`idpieza`), ADD KEY `idreserva` (`idreserva`), ADD KEY `idmueble` (`idmueble`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
 ADD PRIMARY KEY (`idreserva`), ADD KEY `iduser` (`iduser`), ADD KEY `idmueble` (`idmueble`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `idmaterial` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `mueble`
--
ALTER TABLE `mueble`
MODIFY `idmueble` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `pieza`
--
ALTER TABLE `pieza`
MODIFY `idpieza` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `produccion`
--
ALTER TABLE `produccion`
MODIFY `idprodu` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
MODIFY `idreserva` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pieza`
--
ALTER TABLE `pieza`
ADD CONSTRAINT `pieza_ibfk_1` FOREIGN KEY (`idmaterial`) REFERENCES `material` (`idmaterial`);

--
-- Constraints for table `produccion`
--
ALTER TABLE `produccion`
ADD CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`idpieza`) REFERENCES `pieza` (`idpieza`),
ADD CONSTRAINT `produccion_ibfk_2` FOREIGN KEY (`idreserva`) REFERENCES `reserva` (`idreserva`),
ADD CONSTRAINT `produccion_ibfk_3` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`idmueble`);

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `usuario` (`iduser`),
ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idmueble`) REFERENCES `mueble` (`idmueble`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
