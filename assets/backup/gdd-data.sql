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
INSERT INTO `aula` VALUES (7,'7LA',20,'Laboratorio de sistemas','Laboratorio de Computo'),(8,'7LB',20,'Laboratorio de sistemas','Laboratorio de Computo'),(9,'Sala de capacitacion',30,'Centro de informacion ','Sala de juntas'),(10,'Laboratorio de ciencias basicas',20,'Salones de ciencias basicas','Laboratorio de Computo'),(11,'Laboratorio de computo ARQ',20,'Edifico de Arquitectura','Laboratorio de Computo');
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Ingenieria en Sistemas Computacionales','ISC',4),(2,'Ingenieria Bioquimica','IBQ',5),(3,'Ingenieria Electromecanica','IEM',6),(4,'Ingenieria en Gestion Empresarial','IGE',7),(5,'Arquitectura','ARQ',8),(6,'Licenciatura en Administracion','LA',9),(7,'Contador Publico','CP',9),(8,'Ciencias Basicas','CB',10);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES ('1.1','ProgramaciÃ³n de circuitos','Programar microcontroladores','Especialidad','08:00:00','14:00:00','2018-07-30','2018-08-03',0,'Enero-Junio',1,1,1,0,'Juan Miguel Hernandez Bravo','','Rolando Palacios Ortega','7LA',0,0,0,0,0,'13','2018-07-30',20,'M'),('2.1','Matematicas 1','Calculo diferencial','Generico','08:00:00','14:00:00','2018-07-30','2018-08-03',0,'Enero-Junio',1,1,1,0,'Amin Bahena Salgado','','Fabian Francio Gonzales','Laboratorio de ciencias basicas',0,0,0,0,0,'0','2018-07-30',20,'M'),('3.1','Materiales organicos','Estudio de materiales organicos','Generico','13:00:00','18:00:00','2018-07-30','2018-08-03',0,'Enero-Junio',0,0,0,0,'Alejandra Flores Castro','','Jose Luis Parra Ocampo','7LB',0,0,0,0,0,'2','2018-07-30',20,'V'),('4.1','DiseÃ±o Estructural','DiseÃ±o Estructural','Generico','08:00:00','13:00:00','2018-07-30','2018-08-03',0,'Enero-Junio',1,1,1,0,'Federico Zagal Leon','','Jose Luis Parra Ocampo','Laboratorio de computo ARQ',0,0,0,0,0,'5','2018-07-30',20,'M'),('5.1','Seguridad Informatica','Medidas preventivas contra ataques infomaticos','Especialidad','13:00:00','18:00:00','2018-07-30','2018-08-03',0,'Enero-Junio',0,0,0,4,'Juan Miguel Hernandez Bravo','','Jose Luis Parra Ocampo','7LA',0,0,0,0,0,'1','2018-07-30',20,'V');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Direccion'),(2,'Subdireccion Academica'),(3,'Desarrollo Academico'),(4,'Sistemas y Computacion '),(5,'Quimica y Bioquimica'),(6,'Metalmecanica'),(7,'Gestion Empresarial'),(8,'Ciencias de la Tierra'),(9,'Ciencias Economico/Administrativas'),(10,'Ciencias Basicas');
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
INSERT INTO `inscripcion` VALUES (18,'2.1',NULL,NULL,41,NULL,'Ozcar Arzeta Armenta','Matematicas 1','2018-07-30','2018-08-03','Fabian Francio Gonzales','Generico','Laboratorio de ciencias basicas',1),(19,'1.1',NULL,NULL,45,NULL,'Jorge Carranza Gomez','ProgramaciÃ³n de circuitos','2018-07-30','2018-08-03','Rolando Palacios Ortega','Especialidad','7LA',1),(20,'2.1',NULL,NULL,44,NULL,'Jose Odin Mendez Rios','Matematicas 1','2018-07-30','2018-08-03','Fabian Francio Gonzales','Generico','Laboratorio de ciencias basicas',2),(21,'2.1',NULL,NULL,46,NULL,'Francisco Narces Davila Zurita','Matematicas 1','2018-07-30','2018-08-03','Fabian Francio Gonzales','Generico','Laboratorio de ciencias basicas',8),(22,'4.1',NULL,NULL,48,NULL,'Raul Alvarez Hernandez','DiseÃ±o Estructural','2018-07-30','2018-08-03','Jose Luis Parra Ocampo','Generico','Laboratorio de computo ARQ',5);
/*!40000 ALTER TABLE `inscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (3,'Rolando','Palacios','Ortega','1958-06-01','PAOR464','PAOR4987','65465498','rolandopalacios@gmail.com'),(4,'Jose Luis','Parra','Ocampo','1989-09-15','PAOJL464','PAOJL4987','65465498','JLparra@gmail.com'),(5,'Fabian','Francio','Gonzales','1972-09-15','FRGF464','FRGF4987','65465498','fabianFranco@gmail.com');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jefedepartamento`
--

LOCK TABLES `jefedepartamento` WRITE;
/*!40000 ALTER TABLE `jefedepartamento` DISABLE KEYS */;
INSERT INTO `jefedepartamento` VALUES (1,'Eliot','Jofre','Vazquez','direccion@gmail.com',1),(2,'Laura','Sanchez','Hernadez','subdireccion@gmail.com',2),(3,'Sherri Llovisna','Roque','Quintana','desarrolloita@gmail.com',3),(4,'Juan Miguel','Hernandez','Bravo','jefeisc@gmail.com',4),(5,'Alejandra','Flores','Castro','jefeibq@gmail.com',5),(6,'Antonio','Santos','Silva','jefeiem@gmail.com',6),(7,'Jose Luis ','Quiroz','Quintero','jefeige@gmail.com',7),(8,'Federico','Zagal','Leon','jefearq@gmail.com',8),(9,'Jacqueline ','Bringas ','Ramirez','jefelacp@gmail.com',9),(10,'Amin','Bahena','Salgado','jefecb@gmail.com',10);
/*!40000 ALTER TABLE `jefedepartamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `loginAttempts`
--

LOCK TABLES `loginAttempts` WRITE;
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
INSERT INTO `loginAttempts` VALUES ('::1',2,'2018-07-30 00:07:11','desarrolloita@gmail.com',41),('::1',1,'2018-07-30 02:54:51','maricelaLA@gmail.com',42),('::1',1,'2018-07-30 03:12:48','jefeisc@gmail.com',43),('::1',1,'2018-07-30 03:31:38','arzetaisc@gmail.com',44),('::1',1,'2018-07-30 03:33:37','mauracp@gmail.com',45),('::1',2,'2018-07-30 03:36:28','ugeniaige@gmail.com',46),('::1',1,'2018-07-30 03:36:34','eugeniaige@gmail.com',47),('::1',1,'2018-07-30 03:38:26','odinibq@gmail.com',48),('::1',1,'2018-07-30 03:42:31','carranzaisc@gmail.com',49),('::1',1,'2018-07-30 03:45:29','narcescb@gmail.com',50),('::1',1,'2018-07-30 03:48:13','olegarioiem@gmail.com',51),('::1',1,'2018-07-30 03:49:59','raularq@gmail.com',52),('::1',1,'2018-07-30 04:20:04','jefeibq@gmail.com',53),('::1',1,'2018-07-30 04:20:27','subdireccion@gmail.com',54),('::1',2,'2018-07-30 04:58:30','carranzamx@gmail.com',55),('::1',1,'2018-07-30 08:25:43','carranza@gmail.com',56),('::1',1,'2018-07-30 05:02:32','jefecb@gmail.com',57),('::1',2,'2018-07-30 05:14:53','jefeisc@gmai.com@gmail.com',58),('::1',2,'2018-07-30 05:14:56','maricelaLA@gmail.coml',59),('::1',2,'2018-07-30 05:15:03','jefeisc@gmail.coml',60),('::1',1,'2018-07-30 05:46:08','jefearq@gmail.com',61),('::1',1,'2018-07-30 05:46:41','jefeiem@gmail.com',62),('192.168.42.129',1,'2018-07-30 08:20:03','desarrolloita@gmail.com',63),('192.168.42.129',1,'2018-07-30 08:20:50','jefeisc@gmail.com',64),('::1',2,'2018-07-30 08:31:46','desarrollo@gmail.com',65);
/*!40000 ALTER TABLE `loginAttempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('10085887445b5e5d540e42f','Jose Luis Quiroz','$2y$10$L6uQqDIgkFh5MrVcbuk/1.CaGYeBVyGiPPg3ya/jeI6L/SRflQi0W','jefeige@gmail.com',1,'2018-07-30 00:38:28','boss',39),('10124946085b5e5c85dd3f7','Amin Bahena','$2y$10$CudwRN3JedxHQ6FZEpzKD.Eiwa3RGrK1Xzo32VMpsXfWz2OPrKV3a','jefecb@gmail.com',1,'2018-07-30 00:38:43','boss',36),('11137780235b5e5d7947813','Federico Zagal','$2y$10$OvSDDiCok/F9ot0c9UTPaeRkTE9uBPkREMryul43N42tUXJ.lofVC','jefearq@gmail.com',1,'2018-07-30 00:39:12','boss',40),('12889392865b5e7d88532cc','Maricela Lopez','$2y$10$XkF94zTqvRrbu/gkoGTQYO8pdUqiEfkTLnZpTzQ2BngTyPA0eNqM.','maricelaLA@gmail.com',1,'2018-07-30 02:54:38','user',51),('13618663365b5e7bd3bcd79','Oscar Arzeta','$2y$10$kdst36gBaGxgDjTM6GfRKescweIrB7igZqq0K1B6WB0PW.FkJk1PK','arzetaisc@gmail.com',1,'2018-07-30 03:31:22','user',44),('20611338405b5e5ce64ffc0','Antonio Santos','$2y$10$hTOvaBr8syB69TI1HQMrjeTCqkh9mVtN1Fyp02eREznnNP.NvIZ5a','jefeiem@gmail.com',1,'2018-07-30 00:39:23','boss',38),('2102485215b5e56a686281','Desarrollo Academico','$2y$10$2Nx5JXL8M9lJe2qkHbqkY.FrH7dRoWl4AAeZ6AhtYk0xjeEBXOb1W','desarrolloita@gmail.com',1,'2018-07-30 00:08:14','su',0),('2435860825b5e7d11d6a99','Maura Cuevas','$2y$10$3a5NLfsNpobS4l6XIfXypuIwu3AouV5qmnH2nq0l6.Z/FZLT7IORG','mauracp@gmail.com',1,'2018-07-30 03:33:24','user',49),('2681378365b5e5c31657b4','Juan Miguel Hernandez','$2y$10$EE.XgDCDVTIxE0ofm6gvru0KNMBnCvdS6BU.P8PzsHBF7KKZO.WNm','jefeisc@gmail.com',1,'2018-07-30 00:39:34','boss',35),('2886132055b5e7cc934efc','Eugenia Garcia','$2y$10$bahCb6ibAS1.hHQK/hqAI.pO/gA5NEpRAMoA3oLk.T3jM5l2c3tdC','eugeniaige@gmail.com',1,'2018-07-30 03:36:17','user',48),('3943229465b5e5cb0a7b10','Alejandra Flores','$2y$10$nR/jCAzqfQ1eDaYA6ULgau4rQS0tWrvYxK5VIYVUQYQIfWBLPQndS','jefeibq@gmail.com',1,'2018-07-30 00:39:47','boss',37),('4712848695b5e5dde3d535','Jacqueline Bringas','$2y$10$1q1NLNpxlF2TrBFIZ2s/Z.1RnpT.fDJvrUFXbUe3Cq62bwi89UKEK','jefelacp@gmail.com',1,'2018-07-30 00:42:01','boss',41),('571885725b5e5ef3370b3','Subdireccion Academica','$2y$10$OGDZ8TqQNHe1B6baNzhcLuI4hwTUy/sSCVBA0YC4yFhCrPb9A1XmG','subdireccion@gmail.com',1,'2018-07-30 00:42:44','admin',42),('5927201595b5e7c9178bb0','Jose Odin Mendez','$2y$10$K9x1FsgXhSYEfKT6/ZlS7eCgnIW6R2Fxo.2PRI6.TJibUGL4vDOEa','odinibq@gmail.com',1,'2018-07-30 03:38:11','user',47),('653338395b5e7bef74786','Jorge Carranza','$2y$10$qfTby/Uri7zkh/UZoTR1aOZNFNZlr0ShKStZ1m8K/3XXatg7vk6Ge','carranzaisc@gmail.com',1,'2018-07-30 03:41:55','user',45),('7008732305b5e7ba8a25f3','Francisco Narces','$2y$10$dtazRhwbZ6pQqRqaCCn58edQpfg019C8POqPbiFYP4EjvdPLwkOaS','narcescb@gmail.com',1,'2018-07-30 03:45:12','user',43),('7126642625b5e7c5c76d9e','Olegario Orozco','$2y$10$eq/TJLyBx6wgNBQ/ZYDINuBCCebiix3Mz3MIdnLuxP24tpJk9/a6C','olegarioiem@gmail.com',1,'2018-07-30 03:47:59','user',46),('7324759045b5e7d5908c15','Raul Alvarez','$2y$10$ypr1l5sMljgB23IOAVgZKOegbUzZU9kEufqGMWiO6x/ohGaPYH8eK','raularq@gmail.com',1,'2018-07-30 03:49:33','user',50);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `presidenteacademia`
--

LOCK TABLES `presidenteacademia` WRITE;
/*!40000 ALTER TABLE `presidenteacademia` DISABLE KEYS */;
INSERT INTO `presidenteacademia` VALUES (8,'Rafael','Hernadez','Reyna','reynaisc@gmail.com',4),(9,'Isaias','Pelaes','Pelaes','isaiasibq@gmail.com',5),(10,'Jose Luis ','Rianio','Lopez','rianioiem@gmail.com',6),(11,'Eloy','Mata','Carrillo','eloyarq@gmail.com',8),(12,'Noe','Castellanos','Rebolledo','noecb@gmail.com',10);
/*!40000 ALTER TABLE `presidenteacademia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (40,'Maricela','Lopez','Trejo','KJFDKJG',6,'84549','maricelaLA@gmail.com','Docente',87,'Licenciado(a)','Licenciada en Administracion',9,9,'Jacqueline  Bringas  Ramirez','Licenciatura en Administracion'),(41,'Ozcar','Arzeta','Armenta','ARAO754',1,'6846548','arzetaisc@gmail.com','Docente',21,'Maestro(a)','Tecnologias de la Informacion ',4,4,'Juan Miguel Hernandez Bravo','Ingenieria en Sistemas Computacionales'),(42,'Maura','Cuevas','Herrera','CUHM85',6,'654354968','mauracp@gmail.com','Docente',98,'Licenciado(a)','Contador Publico',9,9,'Jacqueline  Bringas  Ramirez','Licenciatura en Administracion'),(43,'Eugenia','Garcia','Arzate','GAAE484',4,'9846454','eugeniaige@gmail.com','Docente',36,'Licenciado(a)','Contador Publico',7,7,'Jose Luis  Quiroz Quintero','Ingenieria en Gestion Empresarial'),(44,'Jose Odin','Mendez','Rios','MERJO684',2,'5744964','odinibq@gmail.com','Docente',86,'Doctor(a)','Ciencia de EnseÃ±anza de las Ciencias',5,5,'Alejandra Flores Castro','Ingenieria Bioquimica'),(45,'Jorge','Carranza','Gomez','CAGJ',1,'854654','carranzaisc@gmail.com','Docente',87,'Maestro(a)','Tecnologias de la Informacion ',4,4,'Juan Miguel Hernandez Bravo','Ingenieria en Sistemas Computacionales'),(46,'Francisco Narces','Davila','Zurita','DAZFN548',8,'849871498','narcescb@gmail.com','Docente',132,'Licenciado(a)','IngenierÃ­a en Sistemas ElectrÃ³nicos',10,10,'Amin Bahena Salgado','Ciencias Basicas'),(47,'Olegario','Orozco','Antonio','ORAO84',3,'68491876','olegarioiem@gmail.com','Docente',157,'Licenciado(a)','IngenierÃ­a en Sistemas ElectrÃ³nicos',6,6,'Antonio Santos Silva','Ingenieria Electromecanica'),(48,'Raul','Alvarez','Hernandez','ALHR544',5,'6849868494','raularq@gmail.com','Docente',35,'Maestro(a)','DiseÃ±o Estructural',8,8,'Federico Zagal Leon','Arquitectura');
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-30  3:38:50
