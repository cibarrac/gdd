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
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `aula`
--

LOCK TABLES `aula` WRITE;
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` VALUES (1,'7LA',30,'Laboratorios de sistemas ','Laboratorio de computo');
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Ingenieria en Sistemas Computacionales','ISC',1),(2,'IngenierÃ­a Bioquimica','IBQ',2),(3,'Arquitectura','ARQ',4);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES ('1.1','Alimentos de procesos','fomentar el proceso de los alimentos','Generico','12:21:00','21:12:00','2018-04-24','2018-04-25',1,'Enero-Junio',0,1,0,'','QuÃ­mica y Bioquimica','Alejandra Flores Castro','Isaias Pelaes Pelaes','Jose Cruz Garcia','','7LA'),('2.1','Inteligencia Artificial','por ahora nada','Especialidad','12:13:00','12:32:00','2018-04-27','2018-04-27',89,'Enero-Junio',0,1,0,'','Sistemas y ComputaciÃ³n ','Juan Miguel Hernadez Bravo','Rafael Hernadez Reyna','Jose Cruz Garcia','','7LA'),('2.2','rigo','rigo','Especialidad','14:21:00','12:21:00','2018-04-27','2018-04-26',2,'Enero-Junio',0,0,0,'','Sistemas y ComputaciÃ³n ','Juan Miguel Hernadez Bravo','Rafael Hernadez Reyna','Jose Cruz Garcia','','7LA');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Sistemas y ComputaciÃ³n '),(2,'QuÃ­mica y Bioquimica'),(3,'Ciencias BÃ¡sicas'),(4,'Ciencias de la tierra');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `infoescuela`
--

LOCK TABLES `infoescuela` WRITE;
/*!40000 ALTER TABLE `infoescuela` DISABLE KEYS */;
/*!40000 ALTER TABLE `infoescuela` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `inscripcion`
--

LOCK TABLES `inscripcion` WRITE;
/*!40000 ALTER TABLE `inscripcion` DISABLE KEYS */;
INSERT INTO `inscripcion` VALUES (1,'1.1',NULL,NULL,1,NULL,'Juan Jose  Bedolla Solano','Alimentos de procesos','2018-04-24','2018-04-25','Jose Cruz Garcia','Generico','7LA','',1),(4,'2.1',NULL,NULL,2,NULL,'Jose Antonio Montero Valverde','Inteligencia Artificial','2018-04-27','2018-04-27','Jose Cruz Garcia','Especialidad','7LA','',0),(5,'2.1',NULL,NULL,NULL,NULL,'Jose Antonio Montero Valverde','Inteligencia Artificial','2018-04-27','2018-04-27','Jose Cruz Garcia','Especialidad','7LA','',0),(6,'2.2',NULL,NULL,NULL,NULL,'Jose Antonio Montero Valverde','rigo','2018-04-27','2018-04-26','Jose Cruz Garcia','Especialidad','7LA','',0);
/*!40000 ALTER TABLE `inscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (1,'Jose','Cruz','Garcia','2018-04-29','CGJ674856','CGJ872395629','74413220584','josecruz@gmail.com');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jefedepartamento`
--

LOCK TABLES `jefedepartamento` WRITE;
/*!40000 ALTER TABLE `jefedepartamento` DISABLE KEYS */;
INSERT INTO `jefedepartamento` VALUES (1,'Juan Miguel','Hernadez','Bravo','jefeisc@gmail.com',1),(2,'Alejandra','Flores','Castro','jefeibq@gmail.com',2),(5,'Meqluisedec','Ojeda','Justo','',4),(6,'Amin','Bahena','Salgado','',3),(7,'Noe','castellanos','Rebolledo','noe@gmail.com',3);
/*!40000 ALTER TABLE `jefedepartamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `loginAttempts`
--

LOCK TABLES `loginAttempts` WRITE;
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
INSERT INTO `loginAttempts` VALUES ('::1',2,'2018-04-23 18:31:37','jefedepartamento@gmail.com',1),('::1',1,'2018-04-23 18:38:20','desacad@gmail.com',2),('::1',1,'2018-04-23 18:48:35','jefeisc@gmail.com',3),('::1',1,'2018-04-23 18:55:36','bedollaisc@gmail.com',4),('::1',1,'2018-04-23 19:16:33','jefeibq@gmail.com',5),('::1',1,'2018-04-24 14:57:06','Subacad@gmail.com',6),('::1',2,'2018-04-24 20:19:25','noe@gmail.com',7),('::1',2,'2018-04-25 02:43:25','montero@gmail.com',8),('::1',1,'2018-04-25 02:43:52','monteroisc@gmail.com',9);
/*!40000 ALTER TABLE `loginAttempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('10803686435ade272f2a3a4','Jose Montero','$2y$10$6ZVIleKXuxKlebInW0HY/OXEjsGibFmkF0cOfQT00YrNeZjXD6gWC','monteroisc@gmail.com',1,'2018-04-23 18:36:52','user',5),('11416101145ade43348ae9a','silvestre2','$2y$10$fU8K4Ge2/ZdSyj5l25Ty6uebGIZz24FZ9BFAB.e6cUCNPAh/yEmUe','silvestre2@gmail.com',0,'2018-04-23 20:33:56','',20),('11785718045ade428722454','Silvestre','$2y$10$QStWzjm/bf79weWAz0.YuuZL6j2Dw7vOwxBCCfhHsoGL/4kmZ719u','silvestre@gmail.com',0,'2018-04-23 20:31:03','',19),('12000490105ade26a8c2f1c','DesarrolloAcademico','$2y$10$TD8Il74Mv/sjujoyhfnfDOwnPtCSXZ9SpLIE/JmBJkt76OrlL2B3K','desacad@gmail.com',1,'2018-04-23 18:37:05','su',1),('12943351245ade2777d8028','Fernando Ortiz','$2y$10$IDiWdvjaIFPq8PX6psxHSeFF0.LVA/aed9y0SfWRECdDJxXlyMx3G','ortizibq@gmail.com',1,'2018-04-23 18:37:27','user',7),('13309447845ade2708167df','Alejandra Flores','$2y$10$J9oA66DZNp445rx5HEkBVO/R8yWkdgIKTAn7jb9vThrlnHDtmDUgS','jefeibq@gmail.com',1,'2018-04-23 18:37:36','boss',4),('16746161505ade275967540','Juan Jose Bedolla','$2y$10$9Pc9w02kMviIEE0b8yALV.H3mRr2TE4sDqL0D9QCr0XF34RZ2b0hS','bedollaisc@gmail.com',1,'2018-04-23 18:37:52','user',6),('3292322545ae50cb33fe47','c','$2y$10$FByc3eJH.cPocrEhn3Tom.1zlTLsbnxZ1PurI5Qx9OS8szZn8906i','cic.innsy@gmail.com',0,'2018-04-29 00:07:15','',23),('5414787065ade26f4c4753','Juan Miguel','$2y$10$EETkPB24/whk8wtTGz1Doujz9/WN2ewO0pwh3HA3kyi8gmEWbHI/6','jefeisc@gmail.com',1,'2018-04-23 18:38:00','boss',3),('6441657845ade26c6a70e4','SubdireccionAcademica','$2y$10$pw.2cWg5KDjsYTp3t53Vk.MRAE0f0pt/kx9I0W0Gh9/bF3VKGG.Re','subacad@gmail.com',1,'2018-04-23 18:37:17','admin',2),('9285281945adf911a23656','noe castellanos','$2y$10$jZQmtime8rvXodDbXyNxY.PC9xFinl/BlohyzA5MSJMoiATQSnaAO','noe@gmail.com',0,'2018-04-24 20:18:34','',22);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `presidenteacademia`
--

LOCK TABLES `presidenteacademia` WRITE;
/*!40000 ALTER TABLE `presidenteacademia` DISABLE KEYS */;
INSERT INTO `presidenteacademia` VALUES (1,'Rafael','Hernadez','Reyna','presidenteisc@gmail.com',1),(2,'Isaias','Pelaes','Pelaes','presidenteibq@gmail.com',2);
/*!40000 ALTER TABLE `presidenteacademia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (1,'Juan Jose ','Bedolla','Solano','BSJJ0575987',1,'74413235685','bedollaisc@gmail.com','Docente',0,'Doctor(a)','Desarrollo regional ',1,1),(2,'Jose Antonio','Montero','Valverde','sdgsadgsdg',2,'ertwetyerwy','desacad@gmail.com','Docente',0,'Licenciado(a)','ISC',2,2);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-29 22:51:46
