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
INSERT INTO `aula` VALUES (1,'7LAB',30,'Edificio 700','Laboratorio'),(2,'7LB',25,'Edificio 700','Laboratorio'),(3,'Sala Magna',150,'Biblioteca','Sala'),(4,'Arq comp',25,'Arquitecura','Laboratorio');
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'IngenierÃ­a en Sistemas Computacionales ','ISC',5),(3,'Ingenieria BioquÃ­mica ','IBQ',6),(4,'Ciencias Basicas','CB',7),(5,'Ingenieria Electromecanica','IEM',10),(6,'IngenierÃ­a en GestiÃ³n Empresarial','IGE',11),(7,'Arquitectura','ARQ',12),(8,'Licenciatura Administaracion','LA',13),(9,'Contador Publico','CP',13);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES ('1.1','Inteligencia Artificial','Obtener conocimientos bÃ¡sicos de inteligencia artificial','Generico','10:00:00','13:00:00','2018-05-14','2018-05-16',8,'Enero-Junio',0,0,0,'','Juan Miguel Hernadez Bravo','Rafael Hernadez Reyna','Jose Cruz Garcia','','7LAB','IngenierÃ­a en Sistemas Computacionales ',0,0,1,0,0),('2.1','Beneficios del gluten ','Conocer los beneficios del gluten y sus derivados','Generico','08:00:00','11:00:00','2018-05-14','2018-05-17',8,'Enero-Junio',0,0,0,'','Alejandra Flores Castro','Fernado Ortiz Maldonado','Jose Cruz Garcia','','Sala Magna','Ingenieria BioquÃ­mica ',0,0,1,0,0),('3.1','DiseÃ±o estructural','El docente sera capacitado para interpretar planos de diseÃ±o ','Especialidad','07:00:00','11:00:00','2018-05-14','2018-05-18',12,'Enero-Junio',0,0,0,'','Federico Zagal Leon','Eloy Mata Carrillo','Jose Cruz Garcia','','Sala Magna','Arquitectura',0,0,2,0,0);
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (5,'Sistemas y ComputaciÃ³n '),(6,'QuÃ­mica y Bioquimica'),(7,'Ciencias BÃ¡sicas'),(10,'Metalmecanica'),(11,'GestiÃ³n Empresarial'),(12,'Ciencias de la Tierra'),(13,'Ciencias EconÃ³mico/Administrativas ');
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
INSERT INTO `jefedepartamento` VALUES (1,'Juan Miguel','Hernadez','Bravo','jefeisc@gmail.com',5),(5,'Alejandra','Flores','Castro','jefeibq@gmail.com',6),(6,'Amin ','Bahena','Salgado','jefecb@gmail.com',7),(7,'Antonio','Santos','Silva','jefeiem@gmail.com',10),(8,'Sherry Llovisna','Roque','Quintana','jefeige@gmail.com',11),(9,'Federico','Zagal','Leon','jefearq@gmail.com',12),(10,'Jacquelin','Bringas','Ramirez','jefecp@gmail.com',13);
/*!40000 ALTER TABLE `jefedepartamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `loginAttempts`
--

LOCK TABLES `loginAttempts` WRITE;
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
INSERT INTO `loginAttempts` VALUES ('::1',2,'2018-05-02 15:41:27','desacad@gmail.com',1),('::1',1,'2018-05-02 15:46:16','jefeisc@gmail.com',2),('::1',1,'2018-05-02 17:38:01','josejosafat@gmail.com',3),('::1',2,'2018-05-02 18:27:05','ortizibq@gmail.com',4),('::1',1,'2018-05-03 20:32:52','melojeda3@gmail.com',5),('::1',1,'2018-05-03 20:49:20','rigo@gmail.com',6),('::1',3,'2018-05-04 16:22:30','bedollaisc@gmail.com',7),('::1',1,'2018-05-04 16:34:08','subacad@gmail.com',8),('::1',4,'2018-05-04 16:47:58','fernadoortiz@gmail.com',9),('::1',2,'2018-05-04 16:48:03','fernandoortiz@gmail.com',10),('::1',3,'2018-05-04 16:53:37','subadac@gmail.com',11),('::1',2,'2018-05-04 16:53:44','subacdac@gmail.com',12),('::1',1,'2018-05-04 16:58:03','mulato@gmail.com',13),('::1',3,'2018-05-04 18:31:41','anotnioiem@gmail.com',14),('::1',1,'2018-05-04 18:31:47','antonioiem@gmail.com',15),('::1',3,'2018-05-07 21:08:09','josafat@gmail.com',16),('::1',2,'2018-05-08 17:34:59','subdes@gmail.com',17),('::1',3,'2018-05-08 19:21:40','cabello@gmail.co',19),('::1',1,'2018-05-08 19:21:50','cabello@gmail.com',20),('::1',1,'2018-05-08 19:24:51','odinibq@gmail.com',21),('::1',1,'2018-05-08 19:27:08','carranza@gmail.com',22),('::1',1,'2018-05-08 19:29:10','jefeibq@gmail.com',23),('::1',2,'2018-05-08 20:24:40','jefearqæ',24),('::1',1,'2018-05-08 20:24:50','jefearq@gmail.com',25),('::1',1,'2018-05-08 20:29:48','raularq@gmail.com',26),('::1',1,'2018-05-08 20:31:51','benitezarq@gmail.com',27);
/*!40000 ALTER TABLE `loginAttempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('13203234905af1f600a9099','Miguel Angel Cabello','$2y$10$lDmOnP3e90ZmxXpSzncGmuIfMny0pysUNw.q2XnZ5HuhNGKDosD3.','cabello@gmail.com',1,'2018-05-08 19:18:47','user',23),('14531541185af1f74800f06','Jose Odin','$2y$10$1.sV8w2inVRZWcVlirm4uuD0yUjQ5cDspz6tx2MUMpkY/3YOKhZpa','odinibq@gmail.com',1,'2018-05-08 19:19:02','user',30),('14780410275af2086f4d2e4','Raul Alvarez','$2y$10$0g57B4H5UuStM65tT1av5eC82h1FROBp2oCPpxZ5VSx8.t7hFLuWe','raularq@gmail.com',1,'2018-05-08 20:29:29','user',32),('15440160835af1efa9c528c','Amin Bahena','$2y$10$B5M75DmfDSmYXCFg/Cy9huzxugeKncA6pUkZWxHZVM1KDJW6S2UIy','jefecb@gmail.com',1,'2018-05-08 19:02:35','boss',16),('16119511555af1f0a7ae67e','Jacqueline Bringas','$2y$10$hlaKUZ0j8c7pBd0c1E22N.n9Vrog.kvb/L2BO3IDLNKMf/j7eGVyW','jefecp@gmail.com',1,'2018-05-08 19:03:52','boss',20),('16809251415af1f690949cc','Jorge Carranza','$2y$10$L8GJwE.pdMch9Ic9DQVi9Oy6dDEvIIWYNT3BrvHtwmKgQ4dyrbqiu','carranza@gmail.com',1,'2018-05-08 19:19:14','user',26),('17133340835aec8b45123ed','Subdireccion Academica','$2y$10$i2ES30qeebiLKM/y71EhSeEwdUWxkDlFIAMQ.hzBVL3zlSv.fTT1a','subacad@gmail.com',1,'2018-05-04 16:33:54','admin',10),('1748796145af1eff64622e','Sherry Roque','$2y$10$PgFHthhQeXOYRgiQQtzUNeUFFhnOI0TKRToD.2bhsKHOmqnSOllma','jefeige@gmail.com',1,'2018-05-08 19:04:05','boss',18),('17845511445af1f7b2e42c4','Isaias Pelaez','$2y$10$ETywptA9nVzolaJrNYsqBuc84gbTgckSf5uLYQC3HHWWSuWaZLsnW','isaiasibq@gmail.com',1,'2018-05-08 19:19:25','user',31),('18840671865af1f6f92132e','Artemio de la O','$2y$10$zGGLiukKIa3KNAqV94/8N.HJrqm/d90spNKQMMwufht5qCeTDJChy','delao@gmail.com',1,'2018-05-08 19:19:37','user',28),('19309849165aec8dd7f3d5b','Alejandra Flores','$2y$10$ojZ4Q7pnSBOI4mz9SrS4OuyzLWD.jUkLvXyl/0vulXgczcamxpkdW','jefeibq@gmail.com',1,'2018-05-08 18:24:14','boss',13),('19805906715ae9dc22cc8e8','Juan Miguel','$2y$10$SRfz.03LcGquUwFIiAgLPecGvQqzfTwv98kYdrJ7i4tvxfpSp18Fe','jefeisc@gmail.com',1,'2018-05-02 15:42:53','boss',1),('20472436025af1efc359050','Antonio Santos','$2y$10$jGHbkqGGcDRJdrrjEjve3eQ1sgSqaGHpZ43cqUO/O7hxNcouKSxRm','jefeiem@gmail.com',1,'2018-05-08 19:04:16','boss',17),('20554501135af1f63715c7c','Oscar Arzeta','$2y$10$fEZbpNzspTp0XXf1V88T/u/BevBQXDiWKe1wbJfabOiwqod96Ihsu','arzetas@gmail.com',1,'2018-05-08 19:19:47','user',24),('21211814485af1f014d2715','Federico Zagal','$2y$10$6wjBOyfuKgaGeGF5bZujtetzt7bS.WHu6PxsfN6iFnSsy3ZeCmEci','jefearq@gmail.com',1,'2018-05-08 19:04:28','boss',19),('2957825115af1f7186e003','Javier Gutierrez','$2y$10$u8YoJYfI4S3mbEdp2tSuk..tOZ2XDyUqz/zoJMuoi4Ful/Ek1jWmW','javieriem@gmail.com',1,'2018-05-08 19:20:02','user',29),('3167616295af1f5c601378','Adolfo Galeana','$2y$10$Kxjr0CZob6fj2JD0cGbSCu1l9NvA2JIMLTsGvUFdr7eEAJ3wG/Zd2','galeana@gmail.com',1,'2018-05-08 19:20:15','user',21),('3866305815af2088a83863','Antonio Benitez','$2y$10$d8xOyQozYKtlo3qT.TuHz.cGDSMkeMPUbNPJjWuzmWJ03/pCGlKz6','benitezarq@gmail.com',1,'2018-05-08 20:29:16','user',33),('695560465af1f64eecf5b','Juan Jose Bedolla','$2y$10$PWX6eNCVC8d94Mq7lzsBYuGcnh2Z.G/ECeZeO6oqBlw8HRmCrjyVG','bedollaisc@gmail.com',1,'2018-05-08 19:20:29','user',25),('6957820045af1f5dc1462b','Francisco Narces','$2y$10$urZNqLPofN1PnBDHmBlceOO5Vhi.MO06VsX/X.WmQG3Ha8VC.v5vu','narces@gmail.com',1,'2018-05-08 19:20:41','user',22),('6975110285af1f6e15dbd8','Aristoteles Muñoz','$2y$10$SyTk3YbomCDu5MlIafGOs.efRgkAp3HHtYXosCDxfxWM2AeCr2Mh2','aristoteles@gmail.com',1,'2018-05-08 19:20:55','user',27),('7920352855ae9dc59b6a0e','Desarrollo Academico','$2y$10$Q89ZJyF4KqRP4AB9WHElbOWW9x7AO0OVgfuXSzgF1ycxPn1gvLEp2','desacad@gmail.com',1,'2018-05-02 15:43:08','su',2);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `presidenteacademia`
--

LOCK TABLES `presidenteacademia` WRITE;
/*!40000 ALTER TABLE `presidenteacademia` DISABLE KEYS */;
INSERT INTO `presidenteacademia` VALUES (1,'Rafael','Hernadez','Reyna','presidenteisc@gmail.com',5),(4,'Fernado','Ortiz','Maldonado','ortiz@gmail.com',6),(5,'Jose Luis ','RiaÃ±o','Hernandez','rianio@gmail.com',10),(6,'Eloy','Mata','Carrillo','eloymata@gmail.com',12);
/*!40000 ALTER TABLE `presidenteacademia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (7,'Miguel Angel','Cabello','Quintero','CQMA6943WE',4,'7443895437','cabello@gmail.com','Docente',32,'Maestro(a)','Maestro en Cinecias',7,6),(8,'Jose Odin','Mendez','Rios','MRJO739851K',3,'7446593216','odinibq@gmail.com','Docente',98,'Maestro(a)','EnseÃ±anzas de la ciencia ',6,5),(9,'Jorge','Carranza','Gomez','CGJ86838YD',1,'7449344821','carranza@gmail.com','Docente',102,'Maestro(a)','TecnologÃ­as de la InformaciÃ³n ',5,1),(10,'Raul','Alvarez','Hernandez','AHR0475FD',7,'7445685423','raularq@gmail.com','Docente',78,'Maestro(a)','Ciencias de la tierra',12,9),(11,'Antonio','Benitez','Rivera','BRA5674385T',7,'7443294516','benitezarq@gmail.com','Docente',25,'Maestro(a)','Ciencias de la tierra',12,9);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-08 16:31:29
