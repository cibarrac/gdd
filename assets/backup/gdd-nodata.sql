-- --------------------------------------------------------
-- Host:                         innsytech.com
-- Versión del servidor:         10.1.31-MariaDB - MariaDB Server
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para devlab_gdd
CREATE DATABASE IF NOT EXISTS `devlab_gdd` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `devlab_gdd`;

-- Volcando estructura para tabla devlab_gdd.aula
CREATE TABLE IF NOT EXISTS `aula` (
  `IdAula` int(11) NOT NULL AUTO_INCREMENT,
  `NombreOrNumeroAula` varchar(40) NOT NULL,
  `CapacidadAula` int(11) NOT NULL,
  `UbicacionAula` text NOT NULL,
  `TipoAula` text NOT NULL,
  PRIMARY KEY (`IdAula`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.carrera
CREATE TABLE IF NOT EXISTS `carrera` (
  `IdCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCarrera` text NOT NULL,
  `Abreviacion` text NOT NULL,
  `IdDepartamentoCarrera` int(11) NOT NULL,
  PRIMARY KEY (`IdCarrera`),
  KEY `IdDepartamentoCarrera` (`IdDepartamentoCarrera`),
  CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`IdDepartamentoCarrera`) REFERENCES `departamento` (`IdDepartamento`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.curso
CREATE TABLE IF NOT EXISTS `curso` (
  `NumeroCurso` varchar(10) NOT NULL,
  `NombreCurso` text NOT NULL,
  `ObjetivoCurso` text NOT NULL,
  `TipoCurso` text NOT NULL,
  `HoraInicioCurso` time NOT NULL,
  `HoraFinCurso` time NOT NULL,
  `FechaInicioCurso` date NOT NULL,
  `FechaFinCurso` date NOT NULL,
  `PeriodoCurso` text NOT NULL,
  `ispublic` int(11) NOT NULL,
  `sign1` int(11) NOT NULL,
  `sign2` int(11) NOT NULL,
  `IdDepartamentoDe` int(11) NOT NULL,
  `NombreCompletoJefeDepto` text NOT NULL,
  `NombreCompletoPresiAcad` text NOT NULL,
  `NombreCompletoInstructor` text NOT NULL,
  `AulaPropuesta` text NOT NULL,
  `DiplomadoDFT` tinyint(1) NOT NULL,
  `DiplomadoDFCD` tinyint(1) NOT NULL,
  `CursoDocente` tinyint(1) NOT NULL,
  `CursoProfesional` tinyint(1) NOT NULL,
  `CursoCertificacion` tinyint(1) NOT NULL,
  `DirigidoA` text NOT NULL,
  `FechaLimite` date NOT NULL,
  `capacidadmaxima` int(50) NOT NULL,
  `Turno` text NOT NULL,
  PRIMARY KEY (`NumeroCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.curso_categoria
CREATE TABLE IF NOT EXISTS `curso_categoria` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `descricpcion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `IdDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDepartamento` text NOT NULL,
  PRIMARY KEY (`IdDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.infoescuela
CREATE TABLE IF NOT EXISTS `infoescuela` (
  `Id` int(11) DEFAULT '1',
  `NombreInstitucion` text NOT NULL,
  `NumeroTelefono` varchar(11) DEFAULT NULL,
  `DireccionInstitucion` text,
  `CorreoInstitucion` text,
  `Estado` text,
  `Ciudad` text,
  `NombreDirector` text,
  `ApellidoPaternoDirector` text,
  `ApellidoMaternoDirector` text,
  `NombreSubdirector` text NOT NULL,
  `ApellidoPaternoSubdirector` text NOT NULL,
  `ApellidoMaternoSubdirector` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.inscripcion
CREATE TABLE IF NOT EXISTS `inscripcion` (
  `IdInscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroCurso` varchar(10) DEFAULT NULL,
  `IdInstructor1` int(11) DEFAULT NULL,
  `IdInstructor2` int(11) DEFAULT NULL,
  `IdProfesor` int(11) DEFAULT NULL,
  `IdAula` int(11) DEFAULT NULL,
  `NombreProfesorInscrito` text NOT NULL,
  `NombreCurso` text NOT NULL,
  `FechaInicio` text NOT NULL,
  `FechaFin` text NOT NULL,
  `NombreInstructor` text NOT NULL,
  `TipoCurso` text NOT NULL,
  `Aula` text NOT NULL,
  `IdCarrera` int(11) NOT NULL,
  PRIMARY KEY (`IdInscripcion`),
  KEY `NumeroCurso` (`NumeroCurso`),
  KEY `IdInstructor1` (`IdInstructor1`),
  KEY `IdInstructor2` (`IdInstructor2`),
  KEY `IdProfesor` (`IdProfesor`),
  KEY `IdAula` (`IdAula`),
  CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`NumeroCurso`) REFERENCES `curso` (`NumeroCurso`),
  CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`IdInstructor1`) REFERENCES `instructor` (`IdInstructor`),
  CONSTRAINT `inscripcion_ibfk_3` FOREIGN KEY (`IdInstructor2`) REFERENCES `instructor` (`IdInstructor`),
  CONSTRAINT `inscripcion_ibfk_4` FOREIGN KEY (`IdProfesor`) REFERENCES `profesor` (`IdProfesor`),
  CONSTRAINT `inscripcion_ibfk_5` FOREIGN KEY (`IdAula`) REFERENCES `aula` (`IdAula`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.instructor
CREATE TABLE IF NOT EXISTS `instructor` (
  `IdInstructor` int(11) NOT NULL AUTO_INCREMENT,
  `NombreInstructor` text NOT NULL,
  `ApellidoPaternoInstructor` text NOT NULL,
  `ApellidoMaternoInstructor` text NOT NULL,
  `FechaNacimientoInstructor` date NOT NULL,
  `CURPInstructor` varchar(20) NOT NULL,
  `RFCInstructor` varchar(20) NOT NULL,
  `NumeroTelefonoInstructor` varchar(20) NOT NULL,
  `CorreoInstructor` varchar(30) NOT NULL,
  PRIMARY KEY (`IdInstructor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.jefedepartamento
CREATE TABLE IF NOT EXISTS `jefedepartamento` (
  `IdJefeDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreJefeDepto` text NOT NULL,
  `ApellidoPaternoJefeDepto` text NOT NULL,
  `ApellidoMaternoJefeDepto` text NOT NULL,
  `CorreoJefe` varchar(65) NOT NULL,
  `IdDepartamentoJefe` int(11) NOT NULL,
  PRIMARY KEY (`IdJefeDepartamento`),
  KEY `IdDepartamentoJefe` (`IdDepartamentoJefe`),
  CONSTRAINT `jefedepartamento_ibfk_1` FOREIGN KEY (`IdDepartamentoJefe`) REFERENCES `departamento` (`IdDepartamento`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.loginAttempts
CREATE TABLE IF NOT EXISTS `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` varchar(6) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.presidenteacademia
CREATE TABLE IF NOT EXISTS `presidenteacademia` (
  `IdPresidenteAcademia` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePresidenteAcad` text NOT NULL,
  `ApellidoPaternoPresidenteAcad` text NOT NULL,
  `ApellidoMaternoPresidenteAcad` text NOT NULL,
  `CorreoPresidente` varchar(65) NOT NULL,
  `IdCarreraPresidente` int(11) NOT NULL,
  PRIMARY KEY (`IdPresidenteAcademia`),
  KEY `IdCarreraPresidente` (`IdCarreraPresidente`),
  CONSTRAINT `presidenteacademia_ibfk_1` FOREIGN KEY (`IdCarreraPresidente`) REFERENCES `carrera` (`IdCarrera`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla devlab_gdd.profesor
CREATE TABLE IF NOT EXISTS `profesor` (
  `IdProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProfesor` text NOT NULL,
  `ApellidoPaternoProfesor` text NOT NULL,
  `ApellidoMaternoProfesor` text NOT NULL,
  `RFCProfesor` varchar(11) NOT NULL,
  `IdCarrera` int(11) DEFAULT NULL,
  `NumeroTelefonoProfesor` varchar(11) NOT NULL,
  `CorreoProfesor` varchar(50) NOT NULL,
  `PuestoProfesor` text,
  `NumeroTarjetaProfesor` int(15) NOT NULL,
  `GradoEstudiosProfesor` text,
  `CarreraCursadaProfesor` text,
  `IdDepartamentoProfesor` int(11) DEFAULT NULL,
  `IdJefeInmediatoProfesor` int(11) DEFAULT NULL,
  `JefeInmediatoProfesor` text,
  `NombreCarreraProfesor` text,
  `Estado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IdProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
