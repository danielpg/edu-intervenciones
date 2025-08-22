-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2019 at 09:49 PM
-- Server version: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inter2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `categoria_padre_id` int(11) NOT NULL,
  `resumen` text,
  `codigo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorias_1_idx` (`categoria_padre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha_creacion`, `fecha_modificacion`, `categoria_padre_id`, `resumen`, `codigo`) VALUES
(1, 'ASDASD', '2013-08-27 01:45:56', '2013-08-27 01:45:56', 1, 'sdsdfsdf', NULL),
(2, 'TEAAA12222FGFGFG', '2013-08-27 01:54:43', '2013-08-27 07:11:12', 1, '234234', '234FGFG'),
(4, 'DFGDFGDFG', '2013-08-29 10:56:51', '2013-08-29 10:56:51', 2, 'dfgdfg', 'DFG'),
(5, 'DFGDFG', '2013-08-29 10:56:58', '2013-08-29 10:56:58', 2, 'dfgdfg', 'DFGDFG'),
(8, 'DFGDFG', '2013-08-29 10:59:57', '2013-08-29 10:59:57', 1, 'dfgdfg', 'DFG');

-- --------------------------------------------------------

--
-- Table structure for table `categorias_padres`
--

CREATE TABLE IF NOT EXISTS `categorias_padres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categorias_padres`
--

INSERT INTO `categorias_padres` (`id`, `nombre`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'CATE CATE', '2013-08-27 01:45:46', '2013-08-27 01:48:12'),
(2, 'DFGDFG', '2013-08-29 10:56:10', '2013-08-29 10:56:10'),
(4, 'DFGDFGDFG', '2013-08-29 10:56:15', '2013-08-29 10:56:15'),
(5, 'DFGDFGDFG', '2013-08-29 10:56:17', '2013-08-29 10:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `centros_educativos`
--

CREATE TABLE IF NOT EXISTS `centros_educativos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_busqueda` varchar(45) DEFAULT NULL,
  `codigo_local` varchar(45) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `anexo` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `centros_poblados_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_centros_educativos_centros_poblados1` (`centros_poblados_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `centros_educativos`
--

INSERT INTO `centros_educativos` (`id`, `codigo_busqueda`, `codigo_local`, `nombre`, `direccion`, `anexo`, `fecha_creacion`, `fecha_modificacion`, `centros_poblados_id`) VALUES
(1, '234', '234', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centros_poblados`
--

CREATE TABLE IF NOT EXISTS `centros_poblados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `longitud` float DEFAULT NULL,
  `latitud` float DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `distrito_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_centros_poblados_distritos1` (`distrito_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `centros_poblados`
--

INSERT INTO `centros_poblados` (`id`, `codigo`, `nombre`, `longitud`, `latitud`, `fecha_creacion`, `fecha_modificacion`, `distrito_id`) VALUES
(1, '23', 'dgdfg dfg', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `departamentos`
--

INSERT INTO `departamentos` (`id`, `codigo`, `nombre`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, '123', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_centros_educativos`
--

CREATE TABLE IF NOT EXISTS `detalle_centros_educativos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_modular` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `estado_id` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `centro_educativo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_detalle_centros_educativos_estados1` (`estado_id`),
  KEY `fk_detalle_centros_educativos_niveles1` (`nivel_id`),
  KEY `fk_detalle_centros_educativos_centros_educativos1` (`centro_educativo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `detalle_centros_educativos`
--

INSERT INTO `detalle_centros_educativos` (`id`, `codigo_modular`, `fecha_creacion`, `fecha_modificacion`, `estado_id`, `nivel_id`, `centro_educativo_id`) VALUES
(2, '324234', NULL, NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `distritos`
--

CREATE TABLE IF NOT EXISTS `distritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_distritos_provincias1` (`provincia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `distritos`
--

INSERT INTO `distritos` (`id`, `codigo`, `nombre`, `fecha_creacion`, `fecha_modificacion`, `provincia_id`) VALUES
(1, '34', 'dfgdfg', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, '123123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `intervenciones`
--

CREATE TABLE IF NOT EXISTS `intervenciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `resumen` longtext,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `intervenciones`
--

INSERT INTO `intervenciones` (`id`, `nombre`, `resumen`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'DFGDFG', 'dfgdfg', '2013-08-27 09:15:38', '2013-08-27 09:15:38'),
(2, 'DFGDFG', 'dfgdfg', '2013-08-27 09:16:06', '2013-08-27 09:16:06'),
(3, 'DFGDFG', 'dfgdfg', '2013-08-27 09:16:16', '2013-08-27 09:16:16'),
(4, 'KLKLKLKL', 'sdfsd', '2013-08-27 09:18:42', '2013-08-28 13:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `intervenciones_categorias`
--

CREATE TABLE IF NOT EXISTS `intervenciones_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intervencion_id` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_intervenciones_categorias_1_idx` (`intervencion_id`),
  KEY `fk_intervenciones_categorias_2_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `intervenciones_categorias`
--

INSERT INTO `intervenciones_categorias` (`id`, `intervencion_id`, `fecha_creacion`, `fecha_modificacion`, `categoria_id`) VALUES
(1, 4, '2013-08-28 13:11:47', '2013-08-28 13:11:47', 1),
(2, 4, '2013-08-28 13:11:47', '2013-08-28 13:11:47', 2);

-- --------------------------------------------------------

--
-- Table structure for table `intervenciones_organos`
--

CREATE TABLE IF NOT EXISTS `intervenciones_organos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intervencion_id` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `organo_id` int(11) NOT NULL,
  `col` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_intervenciones_organos_1_idx` (`intervencion_id`),
  KEY `fk_intervenciones_organos_2_idx` (`organo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `intervenciones_organos`
--

INSERT INTO `intervenciones_organos` (`id`, `intervencion_id`, `fecha_creacion`, `fecha_modificacion`, `organo_id`, `col`) VALUES
(16, 4, '2013-08-28 13:11:47', '2013-08-28 13:11:47', 1, NULL),
(17, 4, '2013-08-28 13:11:47', '2013-08-28 13:11:47', 2, NULL),
(18, 4, '2013-08-28 13:11:47', '2013-08-28 13:11:47', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `niveles`
--

INSERT INTO `niveles` (`id`, `nombre`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, '123123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organos`
--

CREATE TABLE IF NOT EXISTS `organos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `resumen` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `organos`
--

INSERT INTO `organos` (`id`, `codigo`, `nombre`, `fecha_creacion`, `fecha_modificacion`, `resumen`) VALUES
(1, NULL, 'DAADSA', '2013-08-27 07:13:33', '2013-08-27 07:13:33', 'a asd asd '),
(2, NULL, 'YTUTU ', '2013-08-27 07:13:37', '2013-08-27 07:13:37', 'tyu tyu tyu '),
(3, NULL, '76867', '2013-08-27 07:13:43', '2013-08-27 07:13:43', 'uhjkhkj'),
(4, NULL, 'LKÑKLÑ', '2013-08-27 07:13:49', '2013-08-27 07:13:49', 'lkñkñl');

-- --------------------------------------------------------

--
-- Table structure for table `periodos`
--

CREATE TABLE IF NOT EXISTS `periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` int(11) DEFAULT NULL,
  `bimestre` int(11) DEFAULT NULL,
  `trimestre` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `departamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_provincias_departamentos` (`departamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`id`, `codigo`, `nombre`, `fecha_creacion`, `fecha_modificacion`, `departamento_id`) VALUES
(1, '123', 'asdasdasd', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'Administrador', '2013-06-04 23:32:24', '2013-06-04 23:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `tipos_periodos`
--

CREATE TABLE IF NOT EXISTS `tipos_periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tipos_periodos`
--

INSERT INTO `tipos_periodos` (`id`, `nombre`, `descripcion`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, '-', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(145) DEFAULT NULL,
  `apellido` varchar(145) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `correo` varchar(145) DEFAULT NULL,
  `usuario` varchar(145) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_1_idx` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `dni`, `estado`, `correo`, `usuario`, `contrasena`, `fecha_creacion`, `fecha_modificacion`, `role_id`) VALUES
(1, 'Administrador', NULL, 12345678, 1, NULL, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2013-06-04 23:12:10', '2013-06-04 23:12:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `valores`
--

CREATE TABLE IF NOT EXISTS `valores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `intervencion_id` int(11) NOT NULL,
  `detalle_centro_educativo_id` int(11) NOT NULL,
  `tipo_periodo_id` int(11) NOT NULL,
  `periodo` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_valores_detalle_centros_educativos1` (`detalle_centro_educativo_id`),
  KEY `fk_valores_tipos_periodos1` (`tipo_periodo_id`),
  KEY `fk_valores_intervenciones1` (`intervencion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `valores`
--

INSERT INTO `valores` (`id`, `fecha_creacion`, `fecha_modificacion`, `intervencion_id`, `detalle_centro_educativo_id`, `tipo_periodo_id`, `periodo`, `fecha_inicio`, `fecha_fin`) VALUES
(1, '2013-08-27 13:23:14', '2013-08-27 13:23:14', 1, 2, 1, 0, '2013-02-27', '2013-08-27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_categorias_1` FOREIGN KEY (`categoria_padre_id`) REFERENCES `categorias_padres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `centros_educativos`
--
ALTER TABLE `centros_educativos`
  ADD CONSTRAINT `fk_centros_educativos_centros_poblados1` FOREIGN KEY (`centros_poblados_id`) REFERENCES `centros_poblados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `centros_poblados`
--
ALTER TABLE `centros_poblados`
  ADD CONSTRAINT `fk_centros_poblados_distritos1` FOREIGN KEY (`distrito_id`) REFERENCES `distritos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detalle_centros_educativos`
--
ALTER TABLE `detalle_centros_educativos`
  ADD CONSTRAINT `fk_detalle_centros_educativos_centros_educativos1` FOREIGN KEY (`centro_educativo_id`) REFERENCES `centros_educativos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_centros_educativos_estados1` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_centros_educativos_niveles1` FOREIGN KEY (`nivel_id`) REFERENCES `niveles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `fk_distritos_provincias1` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `intervenciones_categorias`
--
ALTER TABLE `intervenciones_categorias`
  ADD CONSTRAINT `fk_intervenciones_categorias_1` FOREIGN KEY (`intervencion_id`) REFERENCES `intervenciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intervenciones_categorias_2` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `intervenciones_organos`
--
ALTER TABLE `intervenciones_organos`
  ADD CONSTRAINT `fk_intervenciones_organos_1` FOREIGN KEY (`intervencion_id`) REFERENCES `intervenciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intervenciones_organos_2` FOREIGN KEY (`organo_id`) REFERENCES `organos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `fk_provincias_departamentos` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `valores`
--
ALTER TABLE `valores`
  ADD CONSTRAINT `fk_valores_detalle_centros_educativos1` FOREIGN KEY (`detalle_centro_educativo_id`) REFERENCES `detalle_centros_educativos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valores_intervenciones1` FOREIGN KEY (`intervencion_id`) REFERENCES `intervenciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valores_tipos_periodos1` FOREIGN KEY (`tipo_periodo_id`) REFERENCES `tipos_periodos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
