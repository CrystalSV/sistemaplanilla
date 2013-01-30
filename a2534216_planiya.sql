-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2013 a las 18:47:01
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13



SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `a2534216_planiya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catafp`
--

CREATE TABLE IF NOT EXISTS `catafp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `porcentajeEmpleado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `porcentajePatrono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catbancos`
--

CREATE TABLE IF NOT EXISTS `catbancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catdepartamento`
--

CREATE TABLE IF NOT EXISTS `catdepartamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `catdepartamento`
--

INSERT INTO `catdepartamento` (`id`, `nombre`) VALUES
(1, 'Informatica'),
(2, 'john '),
(3, 'yafar'),
(4, 'WTF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catempleado`
--

CREATE TABLE IF NOT EXISTS `catempleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombreSeguro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombreNit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dui` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaExpedicion` date NOT NULL,
  `lugarExpedicion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaAlta` date NOT NULL,
  `fechaBaja` date DEFAULT NULL,
  `causaBaja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formaPago` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `salarioDiario` decimal(10,0) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `depto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuentaBanco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `lugarNacimiento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipoEmpleado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombrePadre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombreMadre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puesto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `afp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numAfp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numContrato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bajoContrato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estadoCivil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idDepartamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7456BE2F1E7A331A` (`idDepartamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `catempleado`
--

INSERT INTO `catempleado` (`id`, `codigo`, `nombre`, `apellido`, `nombreSeguro`, `nombreNit`, `dui`, `fechaExpedicion`, `lugarExpedicion`, `nit`, `isss`, `fechaAlta`, `fechaBaja`, `causaBaja`, `formaPago`, `salario`, `salarioDiario`, `direccion`, `depto`, `municipio`, `banco`, `cuentaBanco`, `fechaNacimiento`, `lugarNacimiento`, `nacionalidad`, `tipoEmpleado`, `nombrePadre`, `nombreMadre`, `puesto`, `sexo`, `afp`, `numAfp`, `email`, `foto`, `observaciones`, `numContrato`, `bajoContrato`, `estado`, `estadoCivil`, `turno`, `idDepartamento`) VALUES
(1, 1, 'maynor', 'diaz', 'aja', 'aja', '09097898-1', '2012-02-12', 'aja', '1234-123456-123-1', '45678', '2013-01-08', NULL, NULL, 'Efectivo', '1233', '47', 'dfffvgv', 'wer', 'ssss', 'Credomatic', '2345', '2012-12-12', 'qwsd', 'asdf', 'Fijo', 'apa', 'ama', 'Mandamas', 'Masculino', 'Confia', '234t', 'may@c.com', 'pics/lqswLbR7Jae1.jpeg', 'esta loko', '234', 'Si', 'Soltero', 'Soltero', 'Matutivo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catempresa`
--

CREATE TABLE IF NOT EXISTS `catempresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patronoIsss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuentaBancaria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuentaIsss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuentaAfp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cuentaRenta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctracceso`
--

CREATE TABLE IF NOT EXISTS `ctracceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ctracceso`
--

INSERT INTO `ctracceso` (`id`, `user`, `password`) VALUES
(1, 'maynor', 'ardillas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctractivos`
--

CREATE TABLE IF NOT EXISTS `ctractivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `depreciacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiempoEstimado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C7156D82A86E31A2` (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctrcalculo`
--

CREATE TABLE IF NOT EXISTS `ctrcalculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calculoIsss` decimal(10,0) NOT NULL,
  `calculoAfp` decimal(10,0) NOT NULL,
  `calculoRenta` decimal(10,0) NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1F0550528A7A9509` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctrdependencia`
--

CREATE TABLE IF NOT EXISTS `ctrdependencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dependiente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AC10E4BF8A7A9509` (`idEmpleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ctrdependencia`
--

INSERT INTO `ctrdependencia` (`id`, `dependiente`, `tipo`, `idEmpleado`) VALUES
(1, 'crystal', 'Familia', 1),
(2, 'tu hijo', 'Familia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctrdescuentosfijos`
--

CREATE TABLE IF NOT EXISTS `ctrdescuentosfijos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `saldo` decimal(10,0) NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3EDB4F938A7A9509` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctrfaltas`
--

CREATE TABLE IF NOT EXISTS `ctrfaltas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `remunerada` int(11) NOT NULL,
  `septimo` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3ABBB27C8A7A9509` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctrfechaempleado`
--

CREATE TABLE IF NOT EXISTS `ctrfechaempleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechaVacacion` date NOT NULL,
  `fechaAguinaldo` date NOT NULL,
  `fechaIndemnizacion` date NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D319CC5E8A7A9509` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctringresosfijos`
--

CREATE TABLE IF NOT EXISTS `ctringresosfijos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `porcentaje` decimal(10,0) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_30EC55CF8A7A9509` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctrperceded`
--

CREATE TABLE IF NOT EXISTS `ctrperceded` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `porcentaje` decimal(10,0) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `saldo` decimal(10,0) NOT NULL,
  `fecha` date NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BEA8A6398A7A9509` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctrtelefono`
--

CREATE TABLE IF NOT EXISTS `ctrtelefono` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DEF538248A7A9509` (`idEmpleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ctrtelefono`
--

INSERT INTO `ctrtelefono` (`id`, `telefono`, `idEmpleado`) VALUES
(1, '7650-1911', 1),
(2, '7856-3456', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catempleado`
--
ALTER TABLE `catempleado`
  ADD CONSTRAINT `FK_7456BE2F1E7A331A` FOREIGN KEY (`idDepartamento`) REFERENCES `catdepartamento` (`id`);

--
-- Filtros para la tabla `ctractivos`
--
ALTER TABLE `ctractivos`
  ADD CONSTRAINT `FK_C7156D82A86E31A2` FOREIGN KEY (`idEmpresa`) REFERENCES `catempresa` (`id`);

--
-- Filtros para la tabla `ctrcalculo`
--
ALTER TABLE `ctrcalculo`
  ADD CONSTRAINT `FK_1F0550528A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

--
-- Filtros para la tabla `ctrdependencia`
--
ALTER TABLE `ctrdependencia`
  ADD CONSTRAINT `FK_AC10E4BF8A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

--
-- Filtros para la tabla `ctrdescuentosfijos`
--
ALTER TABLE `ctrdescuentosfijos`
  ADD CONSTRAINT `FK_3EDB4F938A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

--
-- Filtros para la tabla `ctrfaltas`
--
ALTER TABLE `ctrfaltas`
  ADD CONSTRAINT `FK_3ABBB27C8A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

--
-- Filtros para la tabla `ctrfechaempleado`
--
ALTER TABLE `ctrfechaempleado`
  ADD CONSTRAINT `FK_D319CC5E8A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

--
-- Filtros para la tabla `ctringresosfijos`
--
ALTER TABLE `ctringresosfijos`
  ADD CONSTRAINT `FK_30EC55CF8A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

--
-- Filtros para la tabla `ctrperceded`
--
ALTER TABLE `ctrperceded`
  ADD CONSTRAINT `FK_BEA8A6398A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

--
-- Filtros para la tabla `ctrtelefono`
--
ALTER TABLE `ctrtelefono`
  ADD CONSTRAINT `FK_DEF538248A7A9509` FOREIGN KEY (`idEmpleado`) REFERENCES `catempleado` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
