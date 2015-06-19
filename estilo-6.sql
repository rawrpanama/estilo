-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2015 at 02:11 AM
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
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
`idmueble` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `Descricpion` varchar(500) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `img` varchar(250) NOT NULL,
  `vis` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`idmueble`, `nombre`, `Descricpion`, `tipo`, `precio`, `img`, `vis`) VALUES
(1, 'Stand ', 'Kitchen cabinet, has 6 doors vertically, with a finish in melamine Wenge teak color.', 'Office', 40, 'img/muebles/mueble1.png', 33),
(2, 'Stand', 'Kitchen cabinet, has 6 doors vertically, with a finish in melamine Birch color.', 'Office', 35, 'img/muebles/mueble1txt2.png', 10),
(3, 'Stand', 'Kitchen cabinet, has 6 doors vertically, with a color Toronto Maple melamine finish.', 'office', 60, 'img/muebles/mueble1txt3.png\r\n', 18),
(4, 'Stand', 'Kitchen cabinet, has 6 doors vertically, with a melamine Dark Oak finish.', 'Office', 60, 'img/muebles/mueble1txt4.png\r\n', 7),
(5, 'Stand', 'Kitchen cabinet, has 6 doors vertically, with a melamine cherry color finish.', 'Office', 50, 'img/muebles/mueble1txt5.png\r\n', 7),
(6, 'Stand', 'Kitchen cabinet, has 6 doors vertically, with a white melamine finish.', 'Office', 50, 'img/muebles/mueble1txt6.png\r\n', 3),
(7, 'Stand', 'Kitchen cabinet, has 6 doors vertically, with a melamine color ash finish.', 'Office', 80, 'img/muebles/mueble1txt7.png\r\n', 8),
(8, 'Mueble', '10 cabinets and three drawers for kitchen, a textured melamine teak Wenge color.', 'Kitchen', 950, 'img/muebles/mueble2.png\r\n', 15),
(9, 'Mueble', '10 cabinets and three drawers for kitchen, with a texture of melamine color Birch.', 'Kitchen', 120, 'img/muebles/mueble2txt2.png\r\n', 4),
(10, 'Mueble', '10 cabinets and three drawers for kitchen, with a texture of melamine Toronto Maple color.', 'Kitchen', 120, 'img/muebles/mueble2txt3.png\r\n', 7),
(11, 'Mueble', '10 cabinets and three drawers for kitchen, with a texture of Dark Oak melamine.', 'Kitchen', 120, 'img/muebles/mueble2txt4.png\r\n', 4),
(12, 'Mueble', '10 cabinets and three drawers for kitchen, a textured color Cherry melamine.', 'Kitchen', 120, 'img/muebles/mueble2txt5.png\r\n', 5),
(13, 'Mueble', '10 cabinets and three drawers for kitchen, a textured with a white melamine finish.', 'Kitchen', 120, 'img/muebles/mueble2txt6.png\r\n', 3),
(14, 'Mueble', '10 cabinets and three drawers for kitchen, a textured with a melamine color ash finish', 'Kitchen', 120, 'img/muebles/mueble2txt7.png\r\n', 4),
(15, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3.png\r\n', 0),
(16, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt2.png\r\n', 0),
(17, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt3.png\r\n', 0),
(18, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt4.png\r\n', 0),
(19, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt5.png\r\n', 0),
(20, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt6.png\r\n', 0),
(21, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt7.png\r\n', 0),
(22, 'Gabinete', 'Cabinet for kitchen or closets, with handles in the form of buttons and normal, has 3 drawers, 5-door in vertical, with different applications, it has a texture of melamine color Wenge teak.', 'Oficina', 180, 'img/muebles/mueble4.png\r\n', 9),
(23, 'Gabinete', 'Cabinet for kitchen or closets, with handles in the form of buttons and normal, has 3 drawers, 5-door in vertical, with different applications, it has a texture of melamine color Birch.', 'Office', 180, 'img/muebles/mueble4txt2.png\r\n', 2),
(24, 'Gabinete', 'Cabinet for kitchen or closets, with handles in the form of buttons and normal, has 3 drawers, 5-door in vertical, with different applications, it has a texture of melamine Maple color of toronto.', 'Office', 180, 'img/muebles/mueble4txt3.png', 4),
(25, 'Gabinete', 'Cabinet for kitchen or closets, with handles in the form of buttons and normal, has 3 drawers, 5-door in vertical, with different applications, it has a texture of melamine Dark Oak.', 'Office', 180, 'img/muebles/mueble4txt4.png', 2),
(26, 'Gabinete', 'Cabinet for kitchen or closets, with handles in the form of buttons and normal, has 3 drawers, 5-door in vertical, with different applications, it has a texture of melamine color Cherry.', 'Office', 180, 'img/muebles/mueble4txt5.png', 2),
(27, 'Gabinete', 'Cabinet for kitchen or closets, with handles in the form of buttons and normal, has 3 drawers, 5-door in vertical, with different applications, it has a texture of melamine White.', 'Office', 180, 'img/muebles/mueble4txt6.png', 3),
(28, 'Gabinete', 'Cabinet for kitchen or closets, with handles in the form of buttons and normal, has 3 drawers, 5-door in vertical, with different applications, it has a texture of melamine color Fresno.', 'Office', 180, 'img/muebles/mueble4txt7.png', 3),
(29, 'Escritorio', 'Executive office with a texture of Melamine color Wengue Teca.', 'Office', 200, 'img/muebles/mueble5.png', 11),
(30, 'Escritorio', 'Executive desk with a texture of Melamine color Birch.', 'Office', 200, 'img/muebles/mueble5txt2.png', 2),
(31, 'Escritorio', 'Executive desk with a texture of Melamine color Maple Toronto.', 'Office', 200, 'img/muebles/mueble5txt3.png', 2),
(32, 'Escritorio', 'Executive desk with a texture of Melamine color Oak.', 'Office', 200, 'img/muebles/mueble5txt4.png', 3),
(33, 'Escritorio', 'Executive desk with a texture of Melamine color Cherry Maple.', 'Office', 200, 'img/muebles/mueble5txt5.png', 2),
(34, 'Escritorio', 'Executive office with a texture of Melamina color White.', 'Office', 200, 'img/muebles/mueble5txt6.png', 4),
(35, 'Escritorio', 'Executive office with a texture of Melamina color Fresno.', 'Office', 200, 'img/muebles/mueble5txt7.png', 4),
(36, 'Gabinete', 'Furniture for office, with a texture of Melamine Wenge teak colour, 4 drawers and 4 doors with handles.', 'Office', 250, 'img/muebles/mueble6.png', 11),
(37, 'Gabinete ', 'Furniture for office, with a texture of Melamine color Birch, 4 drawers and 4 doors with handles.', 'Office', 250, 'img/muebles/mueble6txt2.png', 3),
(38, 'Gabinete', 'Furniture for office, with a texture of Melamine color Maple Toronto, 4 drawers and 4 doors with handles.', 'Office', 250, 'img/muebles/mueble6txt3.png', 2),
(39, 'Gabinete', 'Furniture for office, with a texture of Melamine Oak, 4 drawers and 4 doors with handles.', 'Office', 250, 'img/muebles/mueble6txt4.png', 2),
(40, 'Gabinete', 'Furniture for office, with a texture of Melamine color Cherry, 4 drawers and 4 doors with handles.', 'Office', 250, 'img/muebles/mueble6txt5.png', 6),
(41, 'Gabinete', 'Furniture for office, with a texture of melamine color White, 4 drawers and 4 doors with handles.', 'Office', 250, 'img/muebles/mueble6txt6.png', 2),
(42, 'Gabinete', 'Furniture for office, with a texture of melamine color Fresno, 4 drawers and 4 doors with handles.', 'Office', 250, 'img/muebles/mueble6txt7.png', 2),
(43, 'Stand', 'Furniture for bathroom, with a texture of Melamine Wenge teak colour, has 4 shelves, 2 small doors with handles.', 'Bathroom', 140, 'img/muebles/mueble7.png', 5),
(44, 'Stand', 'Furniture for bathroom, with a texture of Melamine color Birch, has 4 shelves, 2 small doors with handles.', 'Bathroom', 140, 'img/muebles/mueble7txt2.png', 2),
(45, 'Stand', 'Furniture for bathroom, with a texture of Melamine color Maple Toronto, has 4 shelves, 2 small doors with handles.', 'Bathroom', 140, 'img/muebles/mueble7txt3.png', 2),
(46, 'Stand', 'Furniture for bathroom, with a texture of Melamine color Oak, has 4 shelves, 2 small doors with handles.', 'Bathroom', 140, 'img/muebles/mueble7txt4.png', 3),
(47, 'Stand', 'Furniture for bathroom, with a texture of Melamine color Cherry Maple, has 4 shelves, 2 small doors with handles.', 'Bathroom', 140, 'img/muebles/mueble7txt5.png', 2),
(48, 'Stand', 'Furniture for bathroom, with a texture of Melamine color White, has 4 shelves, 2 small doors with handles.', 'Bathroom', 140, 'img/muebles/mueble7txt6.png', 2),
(49, 'Stand', 'Furniture for bathroom, with a texture of Melamine color Fresno, has 4 shelves, 2 small doors with handles.', 'Bathroom', 140, 'img/muebles/mueble7txt7.png', 2),
(50, 'Closet', 'Wardrobe with small drawers and doors with small prints, textured Melamine teak Wenge color.', 'Closets', 170, 'img/muebles/mueble8.png', 7),
(51, 'Closet', 'Wardrobe with small drawers and doors with small prints, textured Melamine Birch color.', 'Closets', 170, 'img/muebles/mueble8txt2.png', 2),
(52, 'Closet', 'Wardrobe with small drawers and doors with small prints, textured Melamine Maple Toronto color.', 'Closets', 170, 'img/muebles/mueble8txt3.png', 2),
(53, 'Closet', 'Wardrobe with small drawers and doors with small prints, textured Melamine Oak color.', 'Closets', 170, 'img/muebles/mueble8txt4.png', 2),
(54, 'Closet', 'Wardrobe with small drawers and doors with small prints, textured Melamine Cherry color.', 'Closets', 170, 'img/muebles/mueble8txt5.png', 2),
(55, 'Closet', 'Wardrobe with small drawers and doors with small prints, textured Melamine White color.', 'Closets', 170, 'img/muebles/mueble8txt6.png', 2),
(56, 'Closet', 'Wardrobe with small drawers and doors with small prints, textured Melamine Fresno color.', 'Closets', 170, 'img/muebles/mueble8txt7.png', 2),
(57, 'Stand', 'Boudoir for bedrooms, with texture of Melamina color Wengue Teca.', 'Bathroom', 35, 'img/muebles/mueble9.png', 6),
(58, 'Stand', 'Boudoir for bedrooms, with texture of Melamina color Birch.', 'Bathroom', 35, 'img/muebles/mueble9txt2.png', 2),
(59, 'Stand', 'Boudoir for bedrooms, with texture of Melamina color Maple Toronto.', 'Bathroom', 35, 'img/muebles/mueble9txt3.png', 2),
(60, 'Stand', 'Boudoir for bedrooms, with texture of Melamina color Oak.', 'Bathroom', 35, 'img/muebles/mueble9txt4.png', 4),
(61, 'Stand', 'Boudoir for bedrooms, with texture of Melamina color Cherry.', 'Bathroom', 35, 'img/muebles/mueble9txt5.png', 2),
(62, 'Stand', 'Boudoir for bedrooms, with texture of Melamina color White.', 'Bathroom', 35, 'img/muebles/mueble9txt6.png', 4),
(63, 'Stand', 'Boudoir for bedrooms, with texture of Melamina color Fresno.', 'Bathroom', 35, 'img/muebles/mueble9txt7.png', 2),
(64, 'Island', 'Island kitchen with texture of Wenge Teak Melamine color.', 'Kitchen', 300, 'img/muebles/mueble10.png', 5),
(65, 'Island', 'Island kitchen with texture of Birch Melamine color.', 'Kitchen', 300, 'img/muebles/mueble10txt2.png', 2),
(66, 'Island', 'Island kitchen with texture of Maple Toronto Melamine color.', 'Kitchen', 300, 'img/muebles/mueble10txt3.png', 2),
(67, 'Island', 'Island kitchen with texture of Oak Melamine color.', 'Kitchen', 300, 'img/muebles/mueble10txt4.png', 2),
(68, 'Island', 'Island kitchen with texture of Cherry Melamine color.', 'Kitchen', 300, 'img/muebles/mueble10txt5.png', 2),
(69, 'Island', 'Island kitchen with texture of White Melamine color.', 'Kitchen', 300, 'img/muebles/mueble10txt6.png', 2),
(70, 'Island', 'Island kitchen with texture of Fresno Melamine color.', 'Kitchen', 300, 'img/muebles/mueble10txt7.png', 2),
(71, 'mueble', 'Auxiliary furniture for office or bathroom, 3 drawers with Handles, and 3 shelves, with a texture of Wenge Teak Melamine color.', 'Bathroom', 60, 'img/muebles/mueble11.png', 7),
(72, 'mueble', 'Auxiliary furniture for office or bathroom, 3 drawers with Handles, and 3 shelves, with a texture of Birch Melamine color.', 'Bathroom', 60, 'img/muebles/mueble11txt2.png', 2),
(73, 'Mueble', 'Auxiliary furniture for office or bathroom, 3 drawers with Handles, and 3 shelves, with a texture of Maple Toronto Melamine color.', 'Bathroom', 60, 'img/muebles/mueble11txt3.png', 2),
(74, 'Mueble', 'Auxiliary furniture for office or bathroom, 3 drawers with Handles, and 3 shelves, with a texture of Oak Melamine color.', 'Bathroom', 60, 'img/muebles/mueble11txt4.png', 3),
(75, 'Mueble', 'Auxiliary furniture for office or bathroom, 3 drawers with Handles, and 3 shelves, with a texture of Cherry Melamine color.', 'Bathroom', 60, 'img/muebles/mueble11txt5.png', 2),
(76, 'Mueble', 'Auxiliary furniture for office or bathroom, 3 drawers with Handles, and 3 shelves, with a texture of White Melamine color.', 'Bathroom', 60, 'img/muebles/mueble11txt6.png', 2),
(77, 'Mueble', 'Auxiliary furniture for office or bathroom, 3 drawers with Handles, and 3 shelves, with a texture of Fresno Melamine color.', 'Bathroom', 60, 'img/muebles/mueble11txt7.png', 2),
(78, 'estante', 'Furniture for office or closets with shelves, texture of Wenge teak Melamine color.', 'Office', 120, 'img/muebles/mueble12.png', 5),
(79, 'estante', 'Furniture for office or closets with shelves, texture of Birch Melamine color.', 'office', 120, 'img/muebles/mueble12txt2.png', 3),
(80, 'estante', 'Furniture for office or closets with shelves, texture of Maple Toronto Melamine color.', 'office', 120, 'img/muebles/mueble12txt3.png', 2),
(81, 'estante', 'Furniture for office or closets with shelves, texture of Oak Melamine color.', 'Office', 80, 'img/muebles/mueble12txt4.png', 2),
(82, 'estante', 'Furniture for office or closets with shelves, texture of Cherry Melamine color.', 'office', 80, 'img/muebles/mueble12txt5.png', 2),
(83, 'estante', 'Furniture for office or closets with shelves, texture of White Melamine color.', 'office', 80, 'img/muebles/mueble12txt6.png', 3),
(84, 'estante', 'Furniture for office or closets with shelves, texture of Fresno Melamine color.', 'Office', 80, 'img/muebles/mueble12txt7.png', 3),
(85, 'Baño ', 'Cabinet office, with two drawers and its handles in the form of buttons, with a wide ledge, and a small door, textured Melamine Wenge teak colour.', 'bathroom', 140, 'img/muebles/mueble13.png', 5),
(86, 'baño ', 'Cabinet office, with two drawers and its handles in the form of buttons, with a wide ledge, and a small door, textured Melamine Birch colour.', 'bathroom', 140, 'img/muebles/mueble13txt2.png', 2),
(87, 'baño', 'Cabinet office, with two drawers and its handles in the form of buttons, with a wide ledge, and a small door, textured Melamine Maple Toronto colour.', 'bathroom ', 140, 'img/muebles/mueble13txt3.png', 2),
(88, 'baño', 'Cabinet office, with two drawers and its handles in the form of buttons, with a wide ledge, and a small door, textured Melamine Oak colour.', 'bathroom', 140, 'img/muebles/mueble13txt4.png', 2),
(89, 'baño', 'Cabinet office, with two drawers and its handles in the form of buttons, with a wide ledge, and a small door, textured Melamine Cherry colour.', 'bathroom', 140, 'img/muebles/mueble13txt5.png', 2),
(90, 'baño', 'Cabinet office, with two drawers and its handles in the form of buttons, with a wide ledge, and a small door, textured Melamine White colour.', 'bathroom', 140, 'img/muebles/mueble13txt6.png', 2),
(91, 'baño', 'Cabinet office, with two drawers and its handles in the form of buttons, with a wide ledge, and a small door, textured Melamine Fresno colour.', 'bathroom', 140, 'img/muebles/mueble13txt7.png', 50);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
`idmaterial` int(5) NOT NULL,
  `material` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `precio` double NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `descri` varchar(500) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `precio` double DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `vis` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mueble`
--

INSERT INTO `mueble` (`idmueble`, `nombre`, `descri`, `tipo`, `precio`, `img`, `vis`) VALUES
(1, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con jaladeras en forma de botones, con una textura de Melamina color Wengue Teca', 'Oficina', 80, 'img/muebles/mueble1.png', 1),
(2, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con jaladeras en forma de botones, con una textura de Melamina color Abedul', 'Oficina', 80, 'img/muebles/mueble1txt2.png', NULL),
(3, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con jaladeras en forma de botones, con una textura de Melamina color Maple de Toronto', 'Oficina', 80, 'img/muebles/mueble1txt3.png', NULL),
(4, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con jaladeras en forma de botones, con una textura de Melamina color Roble', 'Oficina', 80, 'img/muebles/mueble1txt4.png', NULL),
(5, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con jaladeras en forma de botones, con una textura de Melamina color Cerezo', 'Oficina', 80, 'img/muebles/mueble1txt5.png', NULL),
(6, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con jaladeras en forma de botones, con una textura de Melamina color Blanco', 'Oficina', 80, 'img/muebles/mueble1txt6.png', NULL),
(7, 'Stand', 'Gabinete para cocina, posee 6 puertas en vertical, con jaladeras en forma de botones, con una textura de Melamina color Fresno', 'Oficina', 80, 'img/muebles/mueble1txt7.png', NULL),
(8, 'Mueble', 'Mueble para cocina, con 10 pantries en vertical, 3 gavetas y 13 jaladeras, textura de Melamina color Wengue Teca', 'Cocina', 950, 'img/muebles/mueble2.png', NULL),
(9, 'Mueble ', 'Mueble para cocina, con 10 pantries en vertical, 3 gavetas y 13 jaladeras, textura de Melamina color Abedul', 'Cocina', 950, 'img/muebles/mueble2txt2.png', NULL),
(10, 'Mueble', 'Mueble para cocina, con 10 pantries en vertical, 3 gavetas y 13 jaladeras, textura de Melamina color Maple Toronto', 'Cocina', 950, 'img/muebles/mueble2txt3.png', NULL),
(11, 'Mueble', 'Mueble para cocina, con 10 pantries en vertical, 3 gavetas y 13 jaladeras, textura de Melamina color Roble', 'Cocina', 950, 'img/muebles/mueble2txt4.png', NULL),
(12, 'Mueble', 'Mueble para cocina, con 10 pantries en vertical, 3 gavetas y 13 jaladeras, textura de Melamina color Cerezo', 'Cocina', 950, 'img/muebles/mueble2txt5.png', NULL),
(13, 'Mueble', 'Mueble para cocina, con 10 pantries en vertical, 3 gavetas y 13 jaladeras, textura de Melamina color Blanco', 'Cocina', 950, 'img/muebles/mueble2txt6.png', NULL),
(14, 'Mueble', 'Mueble para cocina, con 10 pantries en vertical, 3 gavetas y 13 jaladeras, textura de Melamina color Fresno', 'Oficina', 950, 'img/muebles/mueble2txt7.png', NULL),
(15, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3.png', NULL),
(16, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt2.png', NULL),
(17, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt3.png', NULL),
(18, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt4.png', NULL),
(19, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt5.png', NULL),
(20, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt6.png', NULL),
(21, 'Armario', '', 'Closets', 150, 'img/muebles/mueble3txt7.png', NULL),
(22, 'Gabinete', 'Gabinete para cocina o closets, con jaladeras en forma de botones y jaladeras normales, posee de 3 gavetas y 5 puertas en vertical, con textura de Melamina color Wengue Teca', 'Oficina', 180, 'img/muebles/mueble4.png', NULL),
(23, 'Gabinete', 'Gabinete para cocina o closets, con jaladeras en forma de botones y jaladeras normales, posee de 3 gavetas y 5 puertas en vertical, con textura de Melamina color Abedul', 'Oficina', 180, 'img/muebles/mueble4txt2.png', NULL),
(24, 'Gabinete', 'Gabinete para cocina o closets, con jaladeras en forma de botones y jaladeras normales, posee de 3 gavetas y 5 puertas en vertical, con textura de Melamina color Maple de Toronto', 'Oficina', 180, 'img/muebles/mueble4txt3.png', NULL),
(25, 'Gabinete', 'Gabinete para cocina o closets, con jaladeras en forma de botones y jaladeras normales, posee de 3 gavetas y 5 puertas en vertical, con textura de Melamina color Roble', 'Oficina', 180, 'img/muebles/mueble4txt4.png', NULL),
(26, 'Gabinete', 'Gabinete para cocina o closets, con jaladeras en forma de botones y jaladeras normales, posee de 3 gavetas y 5 puertas en vertical, con textura de Melamina color Cerezo', 'Oficina', 180, 'img/muebles/mueble4txt5.png', NULL),
(27, 'Gabinete', 'Gabinete para cocina o closets, con jaladeras en forma de botones y jaladeras normales, posee de 3 gavetas y 5 puertas en vertical, con textura de Melamina color Blanco', 'Oficina', 180, 'img/muebles/mueble4txt6.png', NULL),
(28, 'Gabinete', 'Gabinete para cocina o closets, con jaladeras en forma de botones y jaladeras normales, posee de 3 gavetas y 5 puertas en vertical, con textura de Melamina color Fresno', 'Oficina', 180, 'img/muebles/mueble4txt7.png', NULL),
(29, 'Escritorio', 'Escritorio ejecutivo, con textura de Melamina Color Wengue Teca', 'Oficina', 200, 'img/muebles/mueble5.png\r\n', NULL),
(30, 'Escritorio', 'Escritorio ejecutivo, con textura de Melamina Color Abedul', 'Oficina', 200, 'img/muebles/mueble5txt2.png', NULL),
(31, 'Escritorio', 'Escritorio ejecutivo, con textura de Melamina Color Maple de Toronto', 'Oficina', 200, 'img/muebles/mueble5txt3.png', NULL),
(32, 'Escritorio', 'Escritorio ejecutivo, con textura de Melamina Color Roble', 'Oficina', 200, 'img/muebles/mueble5txt4.png', NULL),
(33, 'Escritorio', 'Escritorio ejecutivo, con textura de Melamina Color Cerezo', 'Oficina', 200, 'img/muebles/mueble5txt5.png', NULL),
(34, 'Escritorio', 'Escritorio ejecutivo, con textura de Melamina Color Blanco', 'Oficina', 200, 'img/muebles/mueble5txt6.png', NULL),
(35, 'Escritorio', 'Escritorio ejecutivo, con textura de Melamina Color Fresno', 'Oficina', 200, 'img/muebles/mueble5txt7.png', NULL),
(36, 'Gabinete', 'Mueble para oficina,con textura de Melamina color Wengue Teca, 4 gavetas y 4 puertas con jaladeras.', 'Oficina', 250, 'img/muebles/mueble6.png', NULL),
(37, 'Gabinete', 'Mueble para oficina,con textura de Melamina color Abedul, 4 gavetas y 4 puertas con jaladeras', 'Oficina', 250, 'img/muebles/mueble6txt2.png', NULL),
(38, 'Gabinete', 'Mueble para oficina,con textura de Melamina color Maple de Toronto, 4 gavetas y 4 puertas con jaladeras', 'Oficina', 250, 'img/muebles/mueble6txt3.png', NULL),
(39, 'Gabinete', 'Mueble para oficina,con textura de Melamina color Roble, 4 gavetas y 4 puertas con jaladeras', 'Oficina', 250, 'img/muebles/mueble6txt4.png', NULL),
(40, 'Gabinete', 'Mueble para oficina,con textura de Melamina color Cerezo, 4 gavetas y 4 puertas con jaladeras', 'Oficina', 250, 'img/muebles/mueble6txt5.png', NULL),
(41, 'Gabinete', 'Mueble para oficina,con textura de Melamina color Blanco, 4 gavetas y 4 puertas con jaladeras', 'Oficina', 250, 'img/muebles/mueble6txt6.png', NULL),
(42, 'Gabinete', 'Mueble para oficina,con textura de Melamina color Fresno, 4 gavetas y 4 puertas con jaladeras', 'Oficina', 250, 'img/muebles/mueble6txt7.png', NULL),
(43, 'Stand', 'Mueble para baño,con textura de Melamina color Wengue Teca, tiene cuadro repisas, y dos pequeñas puertas.', 'Baño', 140, 'img/muebles/mueble7.png', NULL),
(44, 'Stand', 'Mueble para baño,con textura de Melamina color Abedul, tiene cuadro repisas, y dos pequeñas puertas.', 'Baño', 140, 'img/muebles/mueble7txt2.png', NULL),
(45, 'Stand', 'Mueble para baño,con textura de Melamina color Maple de Toronto, tiene cuadro repisas, y dos pequeñas puertas.', 'Baño', 140, 'img/muebles/mueble7txt3.png', NULL),
(46, 'Stand', 'Mueble para baño,con textura de Melamina color Roble, tiene cuadro repisas, y dos pequeñas puertas.', 'Baño', 140, 'img/muebles/mueble7txt4.png', NULL),
(47, 'Stand', 'Mueble para baño,con textura de Melamina color Cerezo, tiene cuadro repisas, y dos pequeñas puertas.', 'Baño', 140, 'img/muebles/mueble7txt5.png', NULL),
(48, 'Stand', 'Mueble para baño,con textura de Melamina color Blanco, tiene cuadro repisas, y dos pequeñas puertas.', 'Baño', 140, 'img/muebles/mueble7txt6.png', NULL),
(49, 'Stand', 'Mueble para baño,con textura de Melamina color Fresno, tiene cuadro repisas, y dos pequeñas puertas.', 'Baño', 140, 'img/muebles/mueble7txt7.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE IF NOT EXISTS `piece` (
`idpieza` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `alto` varchar(5) NOT NULL,
  `ancho` varchar(5) NOT NULL,
  `precio` double NOT NULL,
  `idmaterial` int(11) DEFAULT NULL,
  `idmueble` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pieza`
--

INSERT INTO `pieza` (`idpieza`, `nombre`, `cantidad`, `alto`, `ancho`, `precio`, `idmaterial`, `idmueble`) VALUES
(5, 'jaladeras en forma de botones', 6, '0', '0', 0.7, 27, 1),
(6, 'Melamina color wengue teca', 8, '1.22', '2.44', 35, 27, 1),
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
(48, 'Gaveta de melamina', 1, '1', '1', 4, 27, 85),
(49, 'jaladeras en forma de botones', 6, '0', '0', 0.7, 27, 2),
(50, 'jaladeras en forma de botones', 6, '0', '0', 0.7, 27, 3),
(51, 'Melamina color Abedul', 8, '1.22', '2.44', 35, 27, 2),
(52, 'Melamina color Maple de Toronto', 8, '1.22', '2.44', 35, 27, 3),
(53, 'Melamina color Roble', 8, '1.22', '2.44', 35, 27, 4),
(54, 'Melamina color Cerezo', 8, '1.22', '2.44', 35, 27, 5),
(55, 'Melamina wengue teca', 8, '1.22', '2.44', 35, 27, 4),
(56, 'Melamina wengue teca', 8, '1.22', '2.44', 35, 27, 5),
(57, 'Melamina color Blanco', 8, '1.22', '2.44', 35, 27, 6),
(58, 'Melamina color Fresno', 8, '1.22', '2.44', 35, 27, 7),
(59, 'Melamina color Wengue Teca', 12, '1.22', '2.44', 35, 27, 8),
(60, 'Melamina Color Abedul', 12, '1.22', '2.44', 35, 27, 9),
(61, 'Melamina color Maple Toronto', 12, '1.22', '2.44', 35, 27, 10),
(62, 'Melamina color Roble', 12, '1.22', '2.44', 35, 27, 11),
(63, 'Melamina color Cerezo', 12, '1.22', '2.44', 35, 27, 12),
(64, 'Melamina color Blanco', 12, '1.22', '2.44', 35, 27, 13),
(65, 'Melamina color Fresno', 12, '1.22', '2.44', 35, 27, 14),
(66, 'Melamina color Wengue Teca', 8, '1.22', '2.44', 35, 27, 22),
(67, 'Melamina color Abedul', 8, '1.22', '2.44', 35, 27, 23),
(68, 'Melamina color Maple de Toronto', 8, '1.22', '2.44', 35, 27, 24),
(69, 'Melamina color Roble', 8, '1.22', '2.44', 35, 27, 25),
(70, 'Melamina color Cerezo', 8, '1.22', '2.44', 35, 27, 26),
(71, 'Melamina color Blanco', 8, '1.22', '2.44', 35, 27, 27),
(72, 'Melamina color Fresno', 8, '1.22', '2.44', 35, 27, 28),
(73, 'Melamina color Wengue Teca', 4, '1.22', '2.44', 35, 27, 29),
(74, 'Melamina color Abedul', 4, '1.22', '2.44', 35, 27, 30),
(75, 'Melamina color Maple de Toronto', 4, '1.22', '2.44', 35, 27, 31),
(76, 'Melamina color Roble', 4, '1.22', '2.44', 35, 27, 32),
(77, 'Melamina color Cerezo', 4, '1.22', '2.44', 35, 27, 33),
(78, 'Melamina color Blanco', 4, '1.22', '2.44', 35, 27, 34),
(79, 'Melamina color Fresno', 4, '1.22', '2.44', 35, 27, 35),
(80, 'Melamina color Wengue Teca', 6, '1.22', '2.44', 35, 27, 36),
(81, 'Melamina color Abedul', 6, '1.22', '2.44', 35, 27, 37),
(82, 'Melamina color Maple de Toronto', 6, '1.22', '2.44', 35, 27, 38),
(83, 'Melamina color Roble', 6, '1.22', '2.44', 35, 27, 39),
(84, 'Melamina color Cerezo', 6, '1.22', '2.44', 35, 27, 40),
(85, 'Melamina color Blanco', 6, '1.22', '2.44', 35, 27, 41),
(86, 'Melamina color Fresno', 6, '1.22', '2.44', 35, 27, 42),
(87, 'Melamina color Wengue Teca', 4, '1.22', '2.44', 35, 27, 43),
(88, 'Melamina color Abedul', 4, '1.22', '2.44', 35, 27, 44),
(89, 'Melamina color Maple de Toronto', 4, '1.22', '2.44', 35, 27, 45),
(90, 'Melamina color Roble', 4, '1.22', '2.44', 35, 27, 46),
(91, 'Melamina color Cerezo', 4, '1.22', '2.44', 35, 27, 47),
(92, 'Melamina color Blanco', 4, '1.22', '2.44', 35, 27, 48),
(93, 'Melamina color Fresno', 4, '1.22', '2.44', 35, 27, 49),
(94, 'Melamina Wengue Teca', 6, '1.22', '2.44', 35, 27, 50),
(97, 'Melamina color Abedul', 6, '1.22', '2.44', 35, 27, 51),
(98, 'Melamina color Maple de Toronto', 6, '1.22', '2.44', 35, 27, 52),
(99, 'Melamina color Roble', 6, '1.22', '2.44', 35, 27, 53),
(100, 'Melamina color Cerezo', 6, '1.22', '2.44', 35, 27, 54),
(101, 'Melamina color Blanco', 6, '1.22', '2.44', 35, 27, 55),
(102, 'Melamina color Fresno', 6, '1.22', '2.44', 35, 27, 56),
(103, 'Melamina color Wengue Teca', 2, '1.22', '2.44', 35, 27, 57),
(104, 'Melamina color Abedul', 2, '1.22', '2.44', 35, 27, 58),
(105, 'Melamina color Maple de Toronto', 2, '1.22', '2.44', 35, 27, 59),
(106, 'Melamina color Roble', 2, '1.22', '2.44', 35, 27, 60),
(107, 'Melamina color Cerezo', 2, '1.22', '2.44', 35, 27, 61),
(108, 'Melamina color Blanco', 2, '1.22', '2.44', 35, 27, 62),
(109, 'Melamina color Fresno', 2, '1.22', '2.44', 35, 27, 63),
(110, 'Melamina color Wengue Teca', 4, '1.22', '2.44', 35, 27, 64),
(111, 'Melamina color Abedul', 4, '1.22', '2.44', 35, 27, 65),
(112, 'Melamina color Maple de Toronto', 4, '1.22', '2.44', 35, 27, 66),
(113, 'Melamina color Roble', 4, '1.22', '2.44', 35, 27, 67),
(114, 'Melamina color Cerezo', 4, '1.22', '2.44', 35, 27, 68),
(115, 'Melamina color Blanco', 4, '1.22', '2.44', 35, 27, 69),
(116, 'Melamina color Fresno', 4, '1.22', '2.44', 35, 27, 70),
(117, 'Melamina color Wengue Teca', 4, '1.22', '2.44', 35, 27, 71),
(118, 'Melamina color Abedul', 4, '1.22', '2.44', 35, 27, 72),
(119, 'Melamina color Maple de Toronto', 4, '1.22', '2.44', 35, 27, 73),
(120, 'Melamina color Roble', 4, '1.22', '2.44', 35, 27, 74),
(121, 'Melamina color Cerezo', 4, '1.22', '2.44', 35, 27, 75),
(122, 'Melamina color Blanco', 4, '1.22', '2.44', 35, 27, 76),
(123, 'Melamina color Fresno', 4, '1.22', '2.44', 35, 27, 77),
(124, 'Melamina color Wengue Teca', 4, '1.22', '2.44', 35, 27, 78),
(125, 'Melamina color Abedul', 8, '1.22', '2.44', 35, 27, 79),
(126, 'Melamina color Maple Toronto', 8, '1.22', '2.44', 35, 27, 80),
(127, 'Melamina color Roble', 8, '1.22', '2.44', 35, 27, 81),
(128, 'Melamina color Cerezo', 8, '1.22', '2.44', 35, 27, 82),
(129, 'Melamina color Blanco', 8, '1.22', '2.44', 35, 27, 83),
(130, 'Melamina color Fresno', 8, '1.22', '2.44', 35, 27, 84),
(131, 'Melamina color Wengue Teca', 10, '1.22', '2.44', 35, 27, 85),
(132, 'Melamina color Abedul', 10, '1.22', '2.44', 35, 27, 86),
(133, 'Melamina color Maple Toronto', 10, '1.22', '2.44', 35, 27, 87),
(134, 'Melamina color Roble', 10, '1.22', '2.44', 35, 27, 88),
(135, 'Melamina color Cerezo', 10, '1.22', '2.44', 35, 27, 89),
(136, 'Melamina color Blanco', 10, '1.22', '2.44', 35, 27, 90),
(137, 'Melamina color Fresno', 10, '1.22', '2.44', 35, 27, 91);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
 ADD PRIMARY KEY (`idmueble`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
 ADD PRIMARY KEY (`idmaterial`);

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
-- Indexes for table `piece`
--
ALTER TABLE `piece`
 ADD PRIMARY KEY (`idpieza`);

--
-- Indexes for table `pieza`
--
ALTER TABLE `pieza`
 ADD PRIMARY KEY (`idpieza`), ADD KEY `idmaterial` (`idmaterial`);

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
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
MODIFY `idmueble` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `idmaterial` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `idmaterial` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `mueble`
--
ALTER TABLE `mueble`
MODIFY `idmueble` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `piece`
--
ALTER TABLE `piece`
MODIFY `idpieza` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pieza`
--
ALTER TABLE `pieza`
MODIFY `idpieza` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
MODIFY `idreserva` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `usuario` (`iduser`),
ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idmueble`) REFERENCES `furniture` (`idmueble`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
