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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aula`
--

LOCK TABLES `aula` WRITE;
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` VALUES (1,'7LA',30,'Laboratorios de sistemas ','Laboratorio de computo');
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Ingenieria en Sistemas Computacionales','ISC',1),(2,'IngenierÃ­a Bioquimica','IBQ',2),(3,'Arquitectura','ARQ',4);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

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
  `sign1` varchar(100) NOT NULL,
  `sign2` varchar(100) NOT NULL,
  `ParaLosProfesoresDe` text NOT NULL,
  `DelDepartamentoDe` text NOT NULL,
  `NombreCompletoJefeDepto` text NOT NULL,
  `NombreCompletoPresiAcad` text NOT NULL,
  `NombreCompletoInstructor1` text NOT NULL,
  `NombreCompletoInstructor2` text NOT NULL,
  `AulaPropuesta` text NOT NULL,
  PRIMARY KEY (`NumeroCurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES ('1.1','Alimentos de procesos','fomentar el proceso de los alimentos','Generico','12:21:00','21:12:00','2018-04-24','2018-04-25',1,'Enero-Junio',0,'1','','','QuÃ­mica y Bioquimica','Alejandra Flores Castro','Isaias Pelaes Pelaes','Jose Cruz Garcia','','7LA');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Sistemas y ComputaciÃ³n '),(2,'QuÃ­mica y Bioquimica'),(3,'Ciencias BÃ¡sicas'),(4,'Ciencias de la tierra');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `infoescuela`
--

LOCK TABLES `infoescuela` WRITE;
/*!40000 ALTER TABLE `infoescuela` DISABLE KEYS */;
/*!40000 ALTER TABLE `infoescuela` ENABLE KEYS */;
UNLOCK TABLES;

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
  `NombreInstructor1` text NOT NULL,
  `TipoCurso` text NOT NULL,
  `Aula` text NOT NULL,
  `NombreInstructor2` text,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscripcion`
--

LOCK TABLES `inscripcion` WRITE;
/*!40000 ALTER TABLE `inscripcion` DISABLE KEYS */;
/*!40000 ALTER TABLE `inscripcion` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (1,'Jose','Cruz','Garcia','2018-04-29','CGJ674856','CGJ872395629','74413220584','josecruz@gmail.com');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jefedepartamento`
--

LOCK TABLES `jefedepartamento` WRITE;
/*!40000 ALTER TABLE `jefedepartamento` DISABLE KEYS */;
INSERT INTO `jefedepartamento` VALUES (1,'Juan Miguel','Hernadez','Bravo','jefeisc@gmail.com',1),(2,'Alejandra','Flores','Castro','jefeibq@gmail.com',2),(5,'Meqluisedec','Ojeda','Justo','',4),(6,'Amin','Bahena','Salgado','',3),(7,'Noe','castellanos','Rebolledo','noe@gmail.com',3);
/*!40000 ALTER TABLE `jefedepartamento` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loginAttempts`
--

LOCK TABLES `loginAttempts` WRITE;
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
INSERT INTO `loginAttempts` VALUES ('::1',2,'2018-04-23 18:31:37','jefedepartamento@gmail.com',1),('::1',1,'2018-04-23 18:38:20','desacad@gmail.com',2),('::1',1,'2018-04-23 18:48:35','jefeisc@gmail.com',3),('::1',1,'2018-04-23 18:55:36','bedollaisc@gmail.com',4),('::1',1,'2018-04-23 19:16:33','jefeibq@gmail.com',5),('::1',1,'2018-04-24 14:57:06','Subacad@gmail.com',6),('::1',2,'2018-04-24 20:19:25','noe@gmail.com',7),('::1',2,'2018-04-25 02:43:25','montero@gmail.com',8),('::1',1,'2018-04-25 02:43:52','monteroisc@gmail.com',9);
/*!40000 ALTER TABLE `loginAttempts` ENABLE KEYS */;
UNLOCK TABLES;

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
  `role` text NOT NULL,
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `idUser` (`idUser`),
  UNIQUE KEY `idRole` (`idUser`),
  UNIQUE KEY `idUser_2` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('10803686435ade272f2a3a4','Jose Montero','$2y$10$6ZVIleKXuxKlebInW0HY/OXEjsGibFmkF0cOfQT00YrNeZjXD6gWC','monteroisc@gmail.com',1,'2018-04-23 18:36:52','user',5),('11416101145ade43348ae9a','silvestre2','$2y$10$fU8K4Ge2/ZdSyj5l25Ty6uebGIZz24FZ9BFAB.e6cUCNPAh/yEmUe','silvestre2@gmail.com',0,'2018-04-23 20:33:56','',20),('11785718045ade428722454','Silvestre','$2y$10$QStWzjm/bf79weWAz0.YuuZL6j2Dw7vOwxBCCfhHsoGL/4kmZ719u','silvestre@gmail.com',0,'2018-04-23 20:31:03','',19),('12000490105ade26a8c2f1c','DesarrolloAcademico','$2y$10$TD8Il74Mv/sjujoyhfnfDOwnPtCSXZ9SpLIE/JmBJkt76OrlL2B3K','desacad@gmail.com',1,'2018-04-23 18:37:05','su',1),('12943351245ade2777d8028','Fernando Ortiz','$2y$10$IDiWdvjaIFPq8PX6psxHSeFF0.LVA/aed9y0SfWRECdDJxXlyMx3G','ortizibq@gmail.com',1,'2018-04-23 18:37:27','user',7),('13309447845ade2708167df','Alejandra Flores','$2y$10$J9oA66DZNp445rx5HEkBVO/R8yWkdgIKTAn7jb9vThrlnHDtmDUgS','jefeibq@gmail.com',1,'2018-04-23 18:37:36','boss',4),('16746161505ade275967540','Juan Jose Bedolla','$2y$10$9Pc9w02kMviIEE0b8yALV.H3mRr2TE4sDqL0D9QCr0XF34RZ2b0hS','bedollaisc@gmail.com',1,'2018-04-23 18:37:52','user',6),('5414787065ade26f4c4753','Juan Miguel','$2y$10$EETkPB24/whk8wtTGz1Doujz9/WN2ewO0pwh3HA3kyi8gmEWbHI/6','jefeisc@gmail.com',1,'2018-04-23 18:38:00','boss',3),('6441657845ade26c6a70e4','SubdireccionAcademica','$2y$10$pw.2cWg5KDjsYTp3t53Vk.MRAE0f0pt/kx9I0W0Gh9/bF3VKGG.Re','subacad@gmail.com',1,'2018-04-23 18:37:17','admin',2),('9285281945adf911a23656','noe castellanos','$2y$10$jZQmtime8rvXodDbXyNxY.PC9xFinl/BlohyzA5MSJMoiATQSnaAO','noe@gmail.com',0,'2018-04-24 20:18:34','',22);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presidenteacademia`
--

LOCK TABLES `presidenteacademia` WRITE;
/*!40000 ALTER TABLE `presidenteacademia` DISABLE KEYS */;
INSERT INTO `presidenteacademia` VALUES (1,'Rafael','Hernadez','Reyna','presidenteisc@gmail.com',1),(2,'Isaias','Pelaes','Pelaes','presidenteibq@gmail.com',2);
/*!40000 ALTER TABLE `presidenteacademia` ENABLE KEYS */;
UNLOCK TABLES;

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
  PRIMARY KEY (`IdProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (1,'Juan Jose ','Bedolla','Solano','BSJJ0575987',1,'74413235685','bedollaisc@gmail.com','Docente',0,'Doctor(a)','Desarrollo regional ',1,1);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-25 12:49:40
