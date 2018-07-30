-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: gdd
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aula` (
  `IdAula` int(11) NOT NULL AUTO_INCREMENT,
  `NombreOrNumeroAula` varchar(40) NOT NULL,
  `CapacidadAula` int(11) NOT NULL,
  `UbicacionAula` text NOT NULL,
  `TipoAula` text NOT NULL,
  PRIMARY KEY (`IdAula`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `IdCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCarrera` text NOT NULL,
  `Abreviacion` text NOT NULL,
  `IdDepartamentoCarrera` int(11) NOT NULL,
  PRIMARY KEY (`IdCarrera`),
  KEY `IdDepartamentoCarrera` (`IdDepartamentoCarrera`),
  CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`IdDepartamentoCarrera`) REFERENCES `departamento` (`IdDepartamento`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `NumeroCurso` varchar(10) NOT NULL,
  `NombreCurso` text NOT NULL,
  `ObjetivoCurso` text NOT NULL,
  `TipoCurso` text NOT NULL,
  `HoraInicioCurso` time NOT NULL,
  `HoraFinCurso` time NOT NULL,
  `FechaInicioCurso` date NOT NULL,
  `FechaFinCurso` date NOT NULL,
  `NumeroProfesoresCurso` int(11) NOT NULL,
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `IdDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDepartamento` text NOT NULL,
  PRIMARY KEY (`IdDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `infoescuela`
--

DROP TABLE IF EXISTS `infoescuela`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infoescuela` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `inscripcion`
--

DROP TABLE IF EXISTS `inscripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscripcion` (
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jefedepartamento`
--

DROP TABLE IF EXISTS `jefedepartamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jefedepartamento` (
  `IdJefeDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreJefeDepto` text NOT NULL,
  `ApellidoPaternoJefeDepto` text NOT NULL,
  `ApellidoMaternoJefeDepto` text NOT NULL,
  `CorreoJefe` varchar(65) NOT NULL,
  `IdDepartamentoJefe` int(11) NOT NULL,
  PRIMARY KEY (`IdJefeDepartamento`),
  KEY `IdDepartamentoJefe` (`IdDepartamentoJefe`),
  CONSTRAINT `jefedepartamento_ibfk_1` FOREIGN KEY (`IdDepartamentoJefe`) REFERENCES `departamento` (`IdDepartamento`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `loginAttempts`
--

DROP TABLE IF EXISTS `loginAttempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` text,
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `idUser` (`idUser`),
  UNIQUE KEY `idRole` (`idUser`),
  UNIQUE KEY `idUser_2` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `presidenteacademia`
--

DROP TABLE IF EXISTS `presidenteacademia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presidenteacademia` (
  `IdPresidenteAcademia` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePresidenteAcad` text NOT NULL,
  `ApellidoPaternoPresidenteAcad` text NOT NULL,
  `ApellidoMaternoPresidenteAcad` text NOT NULL,
  `CorreoPresidente` varchar(65) NOT NULL,
  `IdDepartamentoPresidente` int(11) NOT NULL,
  PRIMARY KEY (`IdPresidenteAcademia`),
  KEY `IdDepartamentoPresidente` (`IdDepartamentoPresidente`),
  CONSTRAINT `presidenteacademia_ibfk_1` FOREIGN KEY (`IdDepartamentoPresidente`) REFERENCES `departamento` (`IdDepartamento`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `IdProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProfesor` text NOT NULL,
  `ApellidoPaternoProfesor` text NOT NULL,
  `ApellidoMaternoProfesor` text NOT NULL,
  `RFCProfesor` varchar(11) NOT NULL,
  `IdCarrera` int(11) NOT NULL,
  `NumeroTelefonoProfesor` varchar(11) NOT NULL,
  `CorreoProfesor` varchar(50) NOT NULL,
  `PuestoProfesor` text NOT NULL,
  `NumeroTarjetaProfesor` int(15) NOT NULL,
  `GradoEstudiosProfesor` text NOT NULL,
  `CarreraCursadaProfesor` text NOT NULL,
  `IdDepartamentoProfesor` int(11) NOT NULL,
  `IdJefeInmediatoProfesor` int(11) NOT NULL,
  `JefeInmediatoProfesor` text NOT NULL,
  `NombreCarreraProfesor` text NOT NULL,
  PRIMARY KEY (`IdProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-30  3:38:42
