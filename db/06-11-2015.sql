-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2015 a las 00:32:09
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbpjudicial`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarArea`(in Id_Area char(4), in Nombre_Area varchar(50))
begin
	INSERT INTO tbarea VALUES (Id_Area, Nombre_Area);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarCargo`( in Id_Cargo char(4), in Id_Area char(4), in Nombre_Cargo varchar(60))
begin
	insert into tbcargo values (Id_Cargo, Id_Area, Nombre_Cargo);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarContrato`( in Id_Contrato char(5), in Id_Personal char(5), in Id_Periodo char(2), in Id_Regimen char(2), in estado char(1), in date_inicio date, in date_fin date, in observaciones varchar(50))
begin
	insert into tbcontrato values (Id_Contrato, Id_Personal, Id_Periodo, Id_Regimen, estado, date_inicio, date_fin, observaciones);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarDetalleVacacional`(IN `Id_DetalleVacacional` CHAR(5), IN `Id_RecVacacional` CHAR(5), IN `Date_Inicio` DATE, IN `Date_Fin` DATE, IN `Dias` INT(11))
begin
	insert into tbdetallerecordv values (Id_DetalleVacacional, Id_RecVacacional, Date_Inicio, Date_Fin, Dias);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPeriodo`(IN `Id_Periodo` CHAR(2), IN `Descripcion` VARCHAR(12))
begin
	insert into tbperiodo values (Id_Periodo, Descripcion);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPersonal`( in Id_Personal char(5), in Nombre varchar(90), in Ap_Paterno varchar(60), in Ap_Materno varchar(60), in Dni char(8), in Id_Cargo char(4))
begin
	insert into tbpersonal values (Id_Personal, Nombre, Ap_Paterno, Ap_Materno, Dni, Id_Cargo);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarRecordVacacional`( in Id_RecVacacional char(5), in Id_Contrato char(5), in Escalafon varchar(10), in Estado char(1), in Dias_Restantes int(11))
begin
	insert into tbrecordvacacional values (Id_RecVacacional, Id_Contrato, Escalafon, Estado, Dias_Restantes);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarRegimen`(IN `Id_Regimen` CHAR(2), IN `Descripcion` VARCHAR(30), IN `Observaciones` VARCHAR(55))
begin
	insert into tbregimen values (Id_Regimen, Descripcion, Observaciones);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarLTrabajadores`()
begin
	Select P.vcnombre, A.vcnombre, Reg.vcdescripcion, Cont.dateinicio, Cont.datefin
        From ((((tbarea A INNER JOIN tbcargo C ON  A.CId = C.CIdArea)
        INNER JOIN tbpersonal P ON C.cid = P.cidcargo)
        INNER JOIN tbcontrato Cont ON P.cid = Cont.cidpersonal)
        INNER JOIN tbperiodo Period ON Cont.cidperiodo = Period.cid)
        INNER JOIN tbregimen Reg ON Cont.cidregimen = Reg.cid;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbarea`
--

CREATE TABLE IF NOT EXISTS `tbarea` (
  `cid` char(4) NOT NULL,
  `vcnombre` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbarea`
--

INSERT INTO `tbarea` (`cid`, `vcnombre`) VALUES
('', 'Almacen'),
('0001', 'Sistemas'),
('002', 'Almacen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcargo`
--

CREATE TABLE IF NOT EXISTS `tbcargo` (
  `cid` char(4) NOT NULL,
  `cidarea` char(4) NOT NULL,
  `vcnombre` varchar(60) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `cidarea` (`cidarea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcargo`
--

INSERT INTO `tbcargo` (`cid`, `cidarea`, `vcnombre`) VALUES
('0001', '0001', 'Sist'),
('0002', '0001', 'Programador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcontrato`
--

CREATE TABLE IF NOT EXISTS `tbcontrato` (
  `cid` char(5) NOT NULL,
  `cidpersonal` char(5) NOT NULL,
  `cidperiodo` char(2) NOT NULL,
  `cidregimen` char(2) NOT NULL,
  `cestado` char(1) NOT NULL,
  `dateinicio` date NOT NULL,
  `datefin` date NOT NULL,
  `vcobservaciones` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `cidpersonal` (`cidpersonal`),
  KEY `cidperiodo` (`cidperiodo`),
  KEY `cidregimen` (`cidregimen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcontrato`
--

INSERT INTO `tbcontrato` (`cid`, `cidpersonal`, `cidperiodo`, `cidregimen`, `cestado`, `dateinicio`, `datefin`, `vcobservaciones`) VALUES
('00001', '00001', '01', '01', 'A', '2015-11-01', '2015-11-03', ''),
('00002', '00002', '01', '01', 'M', '2014-08-06', '2015-11-04', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdetallerecordv`
--

CREATE TABLE IF NOT EXISTS `tbdetallerecordv` (
  `cid` char(6) NOT NULL,
  `cidrecordv` char(5) NOT NULL,
  `dateinicio` date NOT NULL,
  `datefin` date NOT NULL,
  `intdias` int(11) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `cidrecordv` (`cidrecordv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbperiodo`
--

CREATE TABLE IF NOT EXISTS `tbperiodo` (
  `cid` char(2) NOT NULL,
  `vcdescripcion` varchar(12) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbperiodo`
--

INSERT INTO `tbperiodo` (`cid`, `vcdescripcion`) VALUES
('01', '2012-2013'),
('02', '2012-2013');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpersonal`
--

CREATE TABLE IF NOT EXISTS `tbpersonal` (
  `cid` char(5) NOT NULL,
  `vcnombre` varchar(90) NOT NULL,
  `vcApPaterno` varchar(60) NOT NULL,
  `vcApMaterno` varchar(60) NOT NULL,
  `cdni` char(8) NOT NULL,
  `cidcargo` char(4) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `cidcargo` (`cidcargo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbpersonal`
--

INSERT INTO `tbpersonal` (`cid`, `vcnombre`, `vcApPaterno`, `vcApMaterno`, `cdni`, `cidcargo`) VALUES
('00001', 'Alan Garcia', '', '', '', '0001'),
('00002', 'Pedro', 'Pica', 'Piedra', '15641484', '0001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrecordvacacional`
--

CREATE TABLE IF NOT EXISTS `tbrecordvacacional` (
  `cid` char(5) NOT NULL,
  `cidcontrato` char(5) NOT NULL,
  `vcescalafon` varchar(10) NOT NULL,
  `cestado` char(1) NOT NULL,
  `intdrestantes` int(11) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `cidcontrato` (`cidcontrato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbregimen`
--

CREATE TABLE IF NOT EXISTS `tbregimen` (
  `cid` char(2) NOT NULL,
  `vcdescripcion` varchar(30) NOT NULL,
  `vcobservaciones` varchar(55) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbregimen`
--

INSERT INTO `tbregimen` (`cid`, `vcdescripcion`, `vcobservaciones`) VALUES
('00', '1017', ''),
('01', '1017', ''),
('02', 'Regimen 01', 'ninguna');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcargo`
--
ALTER TABLE `tbcargo`
  ADD CONSTRAINT `tbcargo_ibfk_1` FOREIGN KEY (`cidarea`) REFERENCES `tbarea` (`cid`);

--
-- Filtros para la tabla `tbcontrato`
--
ALTER TABLE `tbcontrato`
  ADD CONSTRAINT `tbcontrato_ibfk_1` FOREIGN KEY (`cidpersonal`) REFERENCES `tbpersonal` (`cid`),
  ADD CONSTRAINT `tbcontrato_ibfk_2` FOREIGN KEY (`cidperiodo`) REFERENCES `tbperiodo` (`cid`),
  ADD CONSTRAINT `tbcontrato_ibfk_3` FOREIGN KEY (`cidregimen`) REFERENCES `tbregimen` (`cid`);

--
-- Filtros para la tabla `tbdetallerecordv`
--
ALTER TABLE `tbdetallerecordv`
  ADD CONSTRAINT `tbdetallerecordv_ibfk_1` FOREIGN KEY (`cidrecordv`) REFERENCES `tbrecordvacacional` (`cid`);

--
-- Filtros para la tabla `tbpersonal`
--
ALTER TABLE `tbpersonal`
  ADD CONSTRAINT `tbpersonal_ibfk_1` FOREIGN KEY (`cidcargo`) REFERENCES `tbcargo` (`cid`);

--
-- Filtros para la tabla `tbrecordvacacional`
--
ALTER TABLE `tbrecordvacacional`
  ADD CONSTRAINT `tbrecordvacacional_ibfk_1` FOREIGN KEY (`cidcontrato`) REFERENCES `tbcontrato` (`cid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
