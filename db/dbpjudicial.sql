-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2015 a las 09:23:40
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarArea`( in Id_Area char(4), in Nombre varchar(50))
begin
	update tbarea set vcnombre = Nombre where cid = Id_Area ;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarCargo`( in Id_Cargo char(4), in Id_Area char(4), in Nombre varchar(60))
begin
	update tbcargo set cidarea = Id_Area, vcnombre = Nombre where cid = Id_Cargo;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarContrato`(IN `Id_Contrato` CHAR(5), IN `Id_Personal` CHAR(5), IN `Id_Periodo` CHAR(2), IN `Id_Regimen` CHAR(2), IN `Estado` CHAR(1), IN `date_Inicio` DATE, IN `date_Fin` DATE, IN `Observaciones` VARCHAR(50))
begin
	update tbcontrato set cidpersonal = Id_Personal, cidperiodo = Id_Periodo, cidregimen = Id_Regimen, cestado = Estado, dateinicio = date_Inicio, datefin = date_Fin, vcobservaciones = Observaciones where cid = Id_Contrato;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarDetalleRecordVac`(IN `Id_DetalleRecordVac` CHAR(6), IN `Id_RecordV` CHAR(5), IN `date_Inicio` DATE, IN `date_Fin` DATE, IN `dias` INT(11))
begin
	update tbdetallerecordv set cidrecordv = Id_RecordV, dateinicio = date_Inicio, datefin = date_Fin, intdias = dias where cid = Id_DetalleRecordVac;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPeriodo`(IN `Id_Periodo` CHAR(2), IN `Descripcion` VARCHAR(12))
begin
	update tbperiodo set vcdescripcion = Descripcion where cid = Id_Periodo;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPersonal`(IN `Id_Personal` CHAR(5), IN `Nombre` VARCHAR(90), IN `Id_Cargo` CHAR(4))
begin
	update tbpersonal set vcnombre = Nombre, cidcargo = Id_Cargo where cid = Id_Personal;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarRecordVac`( in Id_RecordVac char(5), in Id_Contrato char(5), in Escalafon varchar(10), in Estado char(1), in dias_Restantes int(11))
begin
	update tbrecordvacacional set cidcontrato = Id_Contrato, vcescalafon = Escalafon, cestado = Estado, intdrestantes = dias_Restantes where cid = Id_RecordVac;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarRegimen`(IN `Id_Regimen` CHAR(2), IN `Descripcion` VARCHAR(30), IN `Observacion` VARCHAR(55))
begin
	update tbregimen set vcdescripcion = Descripcion, vcobservaciones = Observacion where cid = Id_Regimen;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarArea`()
begin
SELECT COUNT(*) FROM tbarea; 
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarCargo`()
begin
SELECT COUNT(*) FROM tbcargo;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarContrato`()
begin
SELECT COUNT(*) FROM tbcontrato;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarDetalleRecordVac`()
begin
SELECT COUNT(*) FROM tbdetallerecordv;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarPeriodo`()
begin
SELECT COUNT(*) FROM tbperiodo;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarPersonal`()
begin
SELECT COUNT(*) FROM tbpersonal;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarRecordVacacional`()
begin
SELECT COUNT(*) FROM tbrecordvacacional;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ContarRegimen`()
begin
SELECT COUNT(*) FROM tbregimen;
end$$

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

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarArea`()
begin
	Select cid,vcnombre From tbarea order by vcnombre;
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
('0001', 'Sistemas'),
('0002', 'Almacen'),
('0003', 'TI'),
('0004', 'Recursos Humanos'),
('005', 'Gestion');

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
('0001', '0001', 'Sistemas'),
('0002', '0002', 'Programador'),
('0003', '0003', 'Recursos Humanos'),
('004', '0003', 'TI');

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

--
-- Volcado de datos para la tabla `tbdetallerecordv`
--

INSERT INTO `tbdetallerecordv` (`cid`, `cidrecordv`, `dateinicio`, `datefin`, `intdias`) VALUES
('00000', '00001', '2015-06-01', '2015-11-04', 21);

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
  `vcnombrePersonal` varchar(90) NOT NULL,
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

INSERT INTO `tbpersonal` (`cid`, `vcnombrePersonal`, `vcApPaterno`, `vcApMaterno`, `cdni`, `cidcargo`) VALUES
('00001', 'Alan dotoniel', 'peralta', 'Capcha', '98782738', '0002'),
('00002', 'Pedro andres alfonzo', 'Pica', 'Piedra', '15641484', '0002');

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

--
-- Volcado de datos para la tabla `tbrecordvacacional`
--

INSERT INTO `tbrecordvacacional` (`cid`, `cidcontrato`, `vcescalafon`, `cestado`, `intdrestantes`) VALUES
('00001', '00001', 'Escalafon', 'A', 12);

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
('00', '1017', 'contrato anual'),
('01', '1017', 'contrato trimestral'),
('02', '729', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `cid` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `vcusername` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `vcpassword` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idpersonal` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cpoder` char(1) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`cid`, `vcusername`, `vcpassword`, `idpersonal`, `cpoder`) VALUES
('02', 'junior', 'junior', '00001', '1'),
('3', '1994', '1994', '00002', '2');

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
