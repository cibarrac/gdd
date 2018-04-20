-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: gdd2
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
-- Table structure for table `Aula`
--

DROP TABLE IF EXISTS `Aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Aula` (
  `IdAula` int(11) NOT NULL AUTO_INCREMENT,
  `NombreOrNumeroAula` varchar(40) NOT NULL,
  `CapacidadAula` int(11) NOT NULL,
  `UbicacionAula` text NOT NULL,
  `TipoAula` text NOT NULL,
  PRIMARY KEY (`IdAula`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Aula`
--

LOCK TABLES `Aula` WRITE;
/*!40000 ALTER TABLE `Aula` DISABLE KEYS */;
INSERT INTO `Aula` VALUES (1,'7LAB',30,'Edificios de sistemas','Laboratorio de computo'),(2,'Sala de capacitacion ',30,'Centro de informaciÃ³n ','Sala de juntas y reuniones'),(3,'Laboratorio de computo',30,'Edificios de arquitectura','Laboratorio'),(4,'Sala audiovisual',40,'Centro de informaciÃ³n ','Sala de precentaciones y proyecciones');
/*!40000 ALTER TABLE `Aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Carrera`
--

DROP TABLE IF EXISTS `Carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Carrera` (
  `IdCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCarrera` text NOT NULL,
  `Abreviacion` text NOT NULL,
  `IdDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`IdCarrera`),
  KEY `IdDepartamento` (`IdDepartamento`),
  CONSTRAINT `Carrera_ibfk_1` FOREIGN KEY (`IdDepartamento`) REFERENCES `Departamento` (`IdDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Carrera`
--

LOCK TABLES `Carrera` WRITE;
/*!40000 ALTER TABLE `Carrera` DISABLE KEYS */;
INSERT INTO `Carrera` VALUES (1,'Ingenieri­a en Sistemas Computacionales','I.S.C.',1),(2,'IngenierÃ­a BioquÃ­mica','I.B.Q.',2),(3,'Licenciatura en Adminstracion ','L.A.',3),(4,'IngenierÃ­a en GestiÃ³n Empresarial','I.G.E',3),(5,'Contador Publico','C.P.',3),(6,'Arquitectura','ARQ',5);
/*!40000 ALTER TABLE `Carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Curso`
--

DROP TABLE IF EXISTS `Curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Curso` (
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
-- Dumping data for table `Curso`
--

LOCK TABLES `Curso` WRITE;
/*!40000 ALTER TABLE `Curso` DISABLE KEYS */;
INSERT INTO `Curso` VALUES ('1.1','Programacion','qohovh','Generico','07:00:00','11:00:00','2018-03-12','2018-03-16',30,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Eduardo  De la Cruz Gamez','Jose Francisco Gazga Portillo','7LAB'),('2.1','Matematicas1','iuofyukgkl','Generico','07:00:00','11:00:00','2018-03-12','2018-03-16',20,'Enero-Junio',1,'1','1','','Ciencias basicas','Amin Bahena Salgado','Alan Rafael Mendoza Martinez','Miguel Angel Cabello Quintero','','Sala de capacitacion '),('3.1','Diplomado para docentes Mod 1','kjhbwhbjsdhfkjbsdf','Generico','08:00:00','12:00:00','2018-04-16','2018-04-20',11,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Rolando Palacios Ortega','','Sala de capacitacion '),('3.2','Diplomado para docentes Mod 2','dvfkjhabdjfha','Generico','07:00:00','10:00:00','2018-04-16','2018-04-20',20,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Eduardo  De la Cruz Gamez','Miguel Angel Cabello Quintero','Sala audiovisual'),('3.7','Inteligencia art','asdasd','Generico','21:23:00','12:32:00','2018-04-21','2018-04-22',2,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Jose Francisco Gazga Portillo','Miguel Angel Cabello Quintero','7LAB'),('4.2','Inteligencia Artificial ','Los docentes aprenderÃ¡n conceptos avanzados de inteligencia artificial','Especialidad','12:00:00','15:00:00','2018-03-12','2018-03-16',8,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Jose Francisco Gazga Portillo','Eduardo  De la Cruz Gamez','7LAB'),('4.2.1','Estuctura de datos','dsfsfseef','Especialidad','12:34:00','23:34:00','2018-04-18','2018-04-13',2,'Enero-Junio',0,'','','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Eduardo  De la Cruz Gamez','Rolando Palacios Ortega','Sala de capacitacion '),('5.1','Diplomado para docentes Mod 3','sdfadgfasf','Generico','07:00:00','10:00:00','2018-04-16','2018-04-20',15,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Jose Francisco Gazga Portillo','','Sala de capacitacion '),('5.1.2','<sdgafg','adfgadfg','Generico','07:00:00','10:00:00','2018-04-16','2018-04-20',12,'Enero-Junio',0,'','','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Miguel Angel Cabello Quintero','','Sala audiovisual'),('6.2','Prueba4','asfdas','Generico','12:12:00','12:21:00','2018-04-27','2018-04-21',1,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Jose Francisco Gazga Portillo','Eduardo  De la Cruz Gamez','Laboratorio de computo'),('8.1','Programacion ii','sasdfgsdf','Generico','03:32:00','23:32:00','2018-04-12','2018-04-13',1,'Enero-Junio',1,'1','1','','Sistemas y Computacion','Juan Miguel Hernandez Bravo','Rafael Hernandez Reyna','Eduardo  De la Cruz Gamez','','7LAB');
/*!40000 ALTER TABLE `Curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Departamento`
--

DROP TABLE IF EXISTS `Departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Departamento` (
  `IdDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDepartamento` text NOT NULL,
  `IdJefeDepartamento` int(11) NOT NULL,
  `IdPresidenteAcademia` int(11) NOT NULL,
  PRIMARY KEY (`IdDepartamento`),
  KEY `IdJefeDepartamento` (`IdJefeDepartamento`),
  KEY `IdPresidenteAcademia` (`IdPresidenteAcademia`),
  CONSTRAINT `Departamento_ibfk_1` FOREIGN KEY (`IdJefeDepartamento`) REFERENCES `JefeDepartamento` (`IdJefeDepartamento`),
  CONSTRAINT `Departamento_ibfk_2` FOREIGN KEY (`IdPresidenteAcademia`) REFERENCES `PresidenteAcademia` (`IdPresidenteAcademia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Departamento`
--

LOCK TABLES `Departamento` WRITE;
/*!40000 ALTER TABLE `Departamento` DISABLE KEYS */;
INSERT INTO `Departamento` VALUES (1,'Sistemas y Computacion',1,1),(2,'QuÃ­mica y BioquÃ­mica',2,2),(3,'Ciencias EconÃ³mico Administrativas',4,3),(4,'Ciencias basicas',3,4),(5,'Ciencias de la tierrra',5,5);
/*!40000 ALTER TABLE `Departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `InfoEscuela`
--

DROP TABLE IF EXISTS `InfoEscuela`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `InfoEscuela` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene toda la informacion util de la institucion.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `InfoEscuela`
--

LOCK TABLES `InfoEscuela` WRITE;
/*!40000 ALTER TABLE `InfoEscuela` DISABLE KEYS */;
INSERT INTO `InfoEscuela` VALUES (1,'Instituto Tecnologico de Acapulco','4429010','Avd. Instituto Tecnológico S/N Crucero del cayaco C.P. 39905 ','itacapulco@it-acapulco.edu.mx','Guerrero','Acapulco de Juarez','Eliot','Jofre','Vazquez','Laura','Sanchez','Hernandez'),(1,'sdfgdsf','53453','sdfsd','sdgf@gmail.com','sdfsdf','sdfsf','sdfsd','fsdf','sdf','sdfs','fsdf','sdfsd');
/*!40000 ALTER TABLE `InfoEscuela` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Inscripcion`
--

DROP TABLE IF EXISTS `Inscripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Inscripcion` (
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
  CONSTRAINT `Inscripcion_ibfk_1` FOREIGN KEY (`NumeroCurso`) REFERENCES `Curso` (`NumeroCurso`),
  CONSTRAINT `Inscripcion_ibfk_2` FOREIGN KEY (`IdInstructor1`) REFERENCES `Instructor` (`IdInstructor`),
  CONSTRAINT `Inscripcion_ibfk_3` FOREIGN KEY (`IdInstructor2`) REFERENCES `Instructor` (`IdInstructor`),
  CONSTRAINT `Inscripcion_ibfk_4` FOREIGN KEY (`IdProfesor`) REFERENCES `Profesor` (`IdProfesor`),
  CONSTRAINT `Inscripcion_ibfk_5` FOREIGN KEY (`IdAula`) REFERENCES `Aula` (`IdAula`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inscripcion`
--

LOCK TABLES `Inscripcion` WRITE;
/*!40000 ALTER TABLE `Inscripcion` DISABLE KEYS */;
INSERT INTO `Inscripcion` VALUES (1,'1.1',NULL,NULL,NULL,NULL,'Juan Jose Bedolla Solano','Programacion','2018-03-12','2018-03-16','Eduardo  De la Cruz Gamez','Generico','7LAB','Jose Francisco Gazga Portillo'),(18,'4.2',NULL,NULL,NULL,NULL,'Jose Antonio Montero  Valverde','Inteligencia Artificial ','2018-03-12','2018-03-16','Jose Francisco Gazga Portillo','Especialidad','7LAB','Eduardo  De la Cruz Gamez'),(19,'4.2',NULL,NULL,NULL,NULL,'Juan Jose Bedolla Solano','Inteligencia Artificial ','2018-03-12','2018-03-16','Jose Francisco Gazga Portillo','Especialidad','7LAB','Eduardo  De la Cruz Gamez'),(20,'1.1',NULL,NULL,NULL,NULL,'Silvestre  Bedolla Solano','Programacion','2018-03-12','2018-03-16','Eduardo  De la Cruz Gamez','Generico','7LAB','Jose Francisco Gazga Portillo'),(21,'4.2',NULL,NULL,NULL,NULL,'Silvestre  Bedolla Solano','Inteligencia Artificial ','2018-03-12','2018-03-16','Jose Francisco Gazga Portillo','Especialidad','7LAB','Eduardo  De la Cruz Gamez'),(22,'2.1',NULL,NULL,NULL,NULL,'','Matematicas1','2018-03-12','2018-03-16','Miguel Angel Cabello Quintero','Generico','Sala de capacitacion ',''),(23,'1.1',NULL,NULL,NULL,NULL,'Jorge Carranza Gomez','Programacion','2018-03-12','2018-03-16','Eduardo  De la Cruz Gamez','Generico','7LAB','Jose Francisco Gazga Portillo'),(24,'1.1',NULL,NULL,NULL,NULL,'marcial ozuna crisantos','Programacion','2018-03-12','2018-03-16','Eduardo  De la Cruz Gamez','Generico','7LAB','Jose Francisco Gazga Portillo'),(25,'2.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Matematicas1','2018-03-12','2018-03-16','Miguel Angel Cabello Quintero','Generico','Sala de capacitacion ',''),(26,'4.2',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Inteligencia Artificial ','2018-03-12','2018-03-16','Jose Francisco Gazga Portillo','Especialidad','7LAB','Eduardo  De la Cruz Gamez'),(27,'4.2',NULL,NULL,NULL,NULL,'                    marcial ozuna crisantos                              ','Inteligencia Artificial ','2018-03-12','2018-03-16','Jose Francisco Gazga Portillo','Especialidad','7LAB','Eduardo  De la Cruz Gamez'),(28,'5.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Diplomado para docentes Mod 3','2018-04-16','2018-04-20','Jose Francisco Gazga Portillo','Generico','Sala de capacitacion ',''),(29,'2.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Matematicas1','2018-03-12','2018-03-16','Miguel Angel Cabello Quintero','Generico','Sala de capacitacion ',''),(30,'5.1',NULL,NULL,NULL,NULL,'Jorge Carranza Gomez','Diplomado para docentes Mod 3','2018-04-16','2018-04-20','Jose Francisco Gazga Portillo','Generico','Sala de capacitacion ',''),(31,'5.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Diplomado para docentes Mod 3','2018-04-16','2018-04-20','Jose Francisco Gazga Portillo','Generico','Sala de capacitacion ',''),(32,'2.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Matematicas1','2018-03-12','2018-03-16','Miguel Angel Cabello Quintero','Generico','Sala de capacitacion ',''),(33,'4.2.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Estuctura de datos','2018-04-18','2018-04-13','Eduardo  De la Cruz Gamez','Especialidad','Sala de capacitacion ','Rolando Palacios Ortega'),(34,'1.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Programacion','2018-03-12','2018-03-16','Eduardo  De la Cruz Gamez','Generico','7LAB','Jose Francisco Gazga Portillo'),(35,'5.1',NULL,NULL,NULL,NULL,'                    Jorge Carranza Gomez                              ','Diplomado para docentes Mod 3','2018-04-16','2018-04-20','Jose Francisco Gazga Portillo','Generico','Sala de capacitacion ',''),(36,'2.1',NULL,NULL,NULL,NULL,'Jorge Carranza Gomez','Matematicas1','2018-03-12','2018-03-16','Miguel Angel Cabello Quintero','Generico','Sala de capacitacion ',''),(37,'4.2.1',NULL,NULL,NULL,NULL,'','Estuctura de datos','2018-04-18','2018-04-13','Eduardo  De la Cruz Gamez','Especialidad','Sala de capacitacion ','Rolando Palacios Ortega'),(38,'3.1',NULL,NULL,NULL,NULL,'marcial ozuna crisantos','Diplomado para docentes Mod 1','2018-04-16','2018-04-20','Rolando Palacios Ortega','Generico','Sala de capacitacion ',''),(39,'4.2.1',NULL,NULL,NULL,NULL,'Isaias Pelaes Pelaes','Estuctura de datos','2018-04-18','2018-04-13','Eduardo  De la Cruz Gamez','Especialidad','Sala de capacitacion ','Rolando Palacios Ortega'),(40,'4.2.1',NULL,NULL,NULL,NULL,'','Estuctura de datos','2018-04-18','2018-04-13','Eduardo  De la Cruz Gamez','Especialidad','Sala de capacitacion ','Rolando Palacios Ortega'),(41,'4.2.1',NULL,NULL,NULL,NULL,'','Estuctura de datos','2018-04-18','2018-04-13','Eduardo  De la Cruz Gamez','Especialidad','Sala de capacitacion ','Rolando Palacios Ortega'),(42,'4.2.1',NULL,NULL,NULL,NULL,'','Estuctura de datos','2018-04-18','2018-04-13','Eduardo  De la Cruz Gamez','Especialidad','Sala de capacitacion ','Rolando Palacios Ortega'),(43,'4.2.1',NULL,NULL,NULL,NULL,'','Estuctura de datos','2018-04-18','2018-04-13','Eduardo  De la Cruz Gamez','Especialidad','Sala de capacitacion ','Rolando Palacios Ortega'),(44,'5.1.2',NULL,NULL,NULL,NULL,'','<sdgafg','2018-04-16','2018-04-20','Miguel Angel Cabello Quintero','Generico','Sala audiovisual',''),(45,'3.1',NULL,NULL,NULL,NULL,'   Olegario Martinez Nava','Diplomado para docentes Mod 1','2018-04-16','2018-04-20','Rolando Palacios Ortega','Generico','Sala de capacitacion ',''),(46,'3.1',NULL,NULL,NULL,NULL,'   Olegario Martinez Nava','Diplomado para docentes Mod 1','2018-04-16','2018-04-20','Rolando Palacios Ortega','Generico','Sala de capacitacion ',''),(47,'3.2',NULL,NULL,NULL,NULL,'   Olegario Martinez Nava','Diplomado para docentes Mod 2','2018-04-16','2018-04-20','Eduardo  De la Cruz Gamez','Generico','Sala audiovisual','Miguel Angel Cabello Quintero'),(48,'3.2',NULL,NULL,NULL,NULL,'Silvestre  Bedolla Solano','Diplomado para docentes Mod 2','2018-04-16','2018-04-20','Eduardo  De la Cruz Gamez','Generico','Sala audiovisual','Miguel Angel Cabello Quintero'),(49,'1.1',NULL,NULL,NULL,NULL,'Jorge Carranza Gomez','Programacion','2018-03-12','2018-03-16','Eduardo  De la Cruz Gamez','Generico','7LAB','Jose Francisco Gazga Portillo');
/*!40000 ALTER TABLE `Inscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Instructor`
--

DROP TABLE IF EXISTS `Instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Instructor` (
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
-- Dumping data for table `Instructor`
--

LOCK TABLES `Instructor` WRITE;
/*!40000 ALTER TABLE `Instructor` DISABLE KEYS */;
INSERT INTO `Instructor` VALUES (1,'Eduardo ','De la Cruz','Gamez','1973-12-03','DGE89609390DFY7','DGE095098','7440923145','gamez@gmail.com'),(2,'Rolando','Palacios','Ortega','1950-03-09','POR9827359876GJ','POR348957','7441215241','rpalacios@gmail.com'),(3,'Jose Francisco','Gazga','Portillo','1973-03-05','GPJF93845768HT','GPJF98476','7449242232','gazga@gmail.com'),(4,'Miguel Angel','Cabello','Quintero','1960-02-19','CQMA9872354LD','CQMA3455','7441439835','cabello@gmail.com'),(5,'Melquisedec','Ojeda','Justo','2018-05-04','dfsdfsfsd','fsdfsdfsdfsd','7441815003','mel@gmail.com');
/*!40000 ALTER TABLE `Instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `JefeDepartamento`
--

DROP TABLE IF EXISTS `JefeDepartamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JefeDepartamento` (
  `IdJefeDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreJefeDepto` text NOT NULL,
  `ApellidoPaternoJefeDepto` text NOT NULL,
  `ApellidoMaternoJefeDepto` text NOT NULL,
  `CorreoJefe` varchar(65) NOT NULL,
  PRIMARY KEY (`IdJefeDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `JefeDepartamento`
--

LOCK TABLES `JefeDepartamento` WRITE;
/*!40000 ALTER TABLE `JefeDepartamento` DISABLE KEYS */;
INSERT INTO `JefeDepartamento` VALUES (1,'Juan Miguel','Hernandez','Bravo','coca@gmail.com'),(2,'Alejandra','Florez','Castro','alejandra@gmail.com'),(3,'Amin','Bahena','Salgado',''),(4,'Sherry LLovisna','Roque','Quintana',''),(5,'Eloy','Mata','Carrillo',''),(6,'Neo','Castellanos','Rebolledo','');
/*!40000 ALTER TABLE `JefeDepartamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PresidenteAcademia`
--

DROP TABLE IF EXISTS `PresidenteAcademia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PresidenteAcademia` (
  `IdPresidenteAcademia` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePresidenteAcad` text NOT NULL,
  `ApellidoPaternoPresidenteAcad` text NOT NULL,
  `ApellidoMaternoPresidenteAcad` text NOT NULL,
  PRIMARY KEY (`IdPresidenteAcademia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PresidenteAcademia`
--

LOCK TABLES `PresidenteAcademia` WRITE;
/*!40000 ALTER TABLE `PresidenteAcademia` DISABLE KEYS */;
INSERT INTO `PresidenteAcademia` VALUES (1,'Rafael','Hernandez','Reyna'),(2,'Jose Manuel','Ramirez','Galindo'),(3,'Alan Rafael','Mendoza','Martinez'),(4,'Jose Luis','Mena','Sanchez'),(5,'Rogelio','Alvares','Pena');
/*!40000 ALTER TABLE `PresidenteAcademia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Profesor`
--

DROP TABLE IF EXISTS `Profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Profesor` (
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
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`IdProfesor`),
  KEY `IdCarrera` (`IdCarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Profesor`
--

LOCK TABLES `Profesor` WRITE;
/*!40000 ALTER TABLE `Profesor` DISABLE KEYS */;
INSERT INTO `Profesor` VALUES (1,'Juan Jose','Bedolla','Solano','SBJJ859478W',1,'7441542314','bedoll@gmail.com','Docente',0,'Doctor(a)','Desarrollo Regional',1,1,0),(2,'Jose Antonio','Montero ','Valverde','MVJA0969286',1,'7442098492','montero@gmail.comn','Docente',0,'Doctor(a)','TecnologÃ­as de la informaciÃ³n',1,1,0),(3,'Silvestre ','Bedolla','Solano','BSS750265',1,'7441098314','silvestre@hotmail.com','Docente',0,'Maestro(a)','TecnologÃ­as de la informaciÃ³n',1,1,0),(4,'Jorge','Carranza','Gomez','CGJ05839683',1,'74409838407','carranza@yahoo.com','Docente',0,'Maestro(a)','TecnologÃ­as de la informaciÃ³n',1,1,0),(5,'   Olegario','Martinez','Nava','sdfsdfsd',3,'7441815003','nada@gmail.com','Docente',0,'Maestro(a)','IEM',3,4,0),(6,'Isaias','Pelaes','Pelaes','sefsefs',2,'7441815003','pelaes@gmail.com','Docente',0,'Doctor(a)','IBQ',2,2,0),(7,'Roberto','Mondragon','Carrillo','sdgfsdfds',6,'7441815003','Eloy@gmail.com','Docente',0,'Licenciado(a)','ARQ',5,5,0),(8,'Noe','Castellanos','Rebolledo','sdgfsdfs',3,'7441815003','Noe@gmail.com','Docente',0,'Licenciado(a)','LA',4,4,0),(9,'Carolina','Flores','Nava','safsdfsdsd',1,'7441815003','caro@gmail.com','docente',0,'Licenciado(a)','ISC',1,1,0),(16,'marcial','ozuna','crisantos','afksdfjsdlb',1,'13546468','ozunamarcial@gmail.com','docente',0,'Licenciado(a)','isc',1,1,0);
/*!40000 ALTER TABLE `Profesor` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loginAttempts`
--

LOCK TABLES `loginAttempts` WRITE;
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-20 18:43:39
