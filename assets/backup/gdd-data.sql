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
INSERT INTO `aula` VALUES (1,'7LAB',30,'Edificio 700','Laboratorio'),(2,'7LB',25,'Edificio 700','Laboratorio'),(3,'Sala Magna',150,'Biblioteca','Sala'),(4,'Arq comp',25,'Arquitecura','Laboratorio'),(5,'Laboratorio 1000',50,'Edificio 1000','Laboratorio'),(6,'Sala de capacitacion',30,'Centro de informaciÃ³n','SalÃ³n de calses');
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'IngenierÃ­a en Sistemas Computacionales ','ISC',5),(3,'Ingenieria BioquÃ­mica ','IBQ',6),(5,'Ingenieria Electromecanica','IEM',10),(6,'IngenierÃ­a en GestiÃ³n Empresarial','IGE',11),(7,'Arquitectura','ARQ',12),(8,'Licenciatura Administaracion','LA',13),(9,'Contador Publico','CP',13),(10,'Ciencias BÃ¡sicas ','CB',7);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES ('2.1','Programacion','Programar c++','Especialidad','08:00:00','13:00:00','2018-06-29','2018-07-06',0,'Enero-Junio',1,1,1,5,'Juan Miguel Hernadez Bravo','','Mel  Ojeda Justo','Sala Magna',0,0,0,0,0,'1','2018-07-29',20,'V'),('3.2','Sistemas programables ','Programar arduino','Generico','08:00:00','15:00:00','2018-07-01','2018-07-01',0,'Enero-Junio',1,1,1,5,'Juan Miguel Hernadez Bravo','','Jose Cruz Garcia','7LAB',0,0,0,0,0,'0','2018-07-30',20,'M'),('4.1','Alimentos','jhkkldturkgh','Generico','08:00:00','13:00:00','2018-07-23','2018-07-27',0,'Enero-Junio',0,0,0,6,'Alejandra Flores Castro','','Mel  Ojeda Justo','Laboratorio 1000',0,0,0,0,0,'3','2018-07-19',21,'M'),('6.1','Circuitos','fghghjzfdh','Generico','08:00:00','13:00:00','2018-07-23','2018-07-27',0,'Enero-Junio',1,1,1,5,'Juan Miguel Hernadez Bravo','','Mel  Ojeda Justo','Sala de capacitacion',0,0,0,0,0,'15','2018-07-19',20,'M'),('7.1','ProgramaciÃ³n Funcional','ioufgfk','Generico','07:00:00','12:00:00','2018-07-16','2018-07-20',0,'Enero-Junio',1,1,1,5,'Juan Miguel Hernadez Bravo','','Jose Cruz Garcia','Arq comp',0,0,0,0,0,'0','2018-07-16',12,'M'),('8.1','Paneles solares','dsdhjdghj','Generico','08:00:00','13:00:00','2018-07-23','2018-07-27',0,'Enero-Junio',1,1,1,5,'Juan Miguel Hernadez Bravo','','Mel  Ojeda Justo','Arq comp',0,0,0,0,0,'15','2018-07-19',20,'V');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (5,'Sistemas y ComputaciÃ³n '),(6,'QuÃ­mica y Bioquimica'),(7,'Ciencias BÃ¡sicas'),(10,'Metalmecanica'),(11,'GestiÃ³n Empresarial'),(12,'Ciencias de la Tierra'),(13,'Ciencias EconÃ³mico/Administrativas '),(17,'Posgrado'),(18,'Direccion General'),(19,'Subdireccion Academica'),(20,'Desarrollo Academico'),(21,'Recursos Materiales ');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `infoescuela`
--

LOCK TABLES `infoescuela` WRITE;
/*!40000 ALTER TABLE `infoescuela` DISABLE KEYS */;
INSERT INTO `infoescuela` VALUES (1,'Instituto TecnolÃ³gico de Acapulco','654565','crucero del cayaco','ita@gmail.com','Guerrero','Acapulco de Juares ','Eliot','Jofre','Vazquez','Laura','Sanchez','Hernadez');
/*!40000 ALTER TABLE `infoescuela` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `inscripcion`
--

LOCK TABLES `inscripcion` WRITE;
/*!40000 ALTER TABLE `inscripcion` DISABLE KEYS */;
INSERT INTO `inscripcion` VALUES (11,'2.1',NULL,NULL,37,NULL,'Oscar Arzeta Armenta','Programacion','2018-06-29','2018-07-06','Mel  Ojeda Justo','Especialidad','Sala Magna',0),(12,'2.1',NULL,NULL,38,NULL,'Juan Jose Bedolla Solano','Programacion','2018-06-29','2018-07-06','Mel  Ojeda Justo','Especialidad','Sala Magna',0),(13,'2.1',NULL,NULL,34,NULL,'Migel Ãngel  Cabello Quintero','Programacion','2018-06-29','2018-07-06','Mel  Ojeda Justo','Especialidad','Sala Magna',0),(14,'2.1',NULL,NULL,37,NULL,'Oscar Arzeta Armenta','Programacion','2018-06-29','2018-07-06','Mel  Ojeda Justo','Especialidad','Sala Magna',0),(15,'2.1',NULL,NULL,35,NULL,'Jose Odin Mendez Rios','Programacion','2018-06-29','2018-07-06','Mel  Ojeda Justo','Especialidad','Sala Magna',0),(22,'3.2',NULL,NULL,36,NULL,'Jorge Carranza Gomez','Sistemas programables ','2018-07-01','2018-07-01','Jose Cruz Garcia','Generico','7LAB',0),(23,'2.1',NULL,NULL,36,NULL,'Jorge Carranza Gomez','Programacion','2018-06-29','2018-07-06','Mel  Ojeda Justo','Especialidad','Sala Magna',0),(24,'3.2',NULL,NULL,39,NULL,'Francisco Narces Ojeda','Sistemas programables ','2018-07-01','2018-07-01','Jose Cruz Garcia','Generico','7LAB',0);
/*!40000 ALTER TABLE `inscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES (1,'Jose','Cruz','Garcia','2018-04-29','CGJ674856','CGJ872395629','74413220584','josecruz@gmail.com'),(2,'Mel ','Ojeda','Justo','2018-05-26','vyfctydytdytd','fukfukfuuy','7441815003','melojeda27@gmail.com');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `jefedepartamento`
--

LOCK TABLES `jefedepartamento` WRITE;
/*!40000 ALTER TABLE `jefedepartamento` DISABLE KEYS */;
INSERT INTO `jefedepartamento` VALUES (1,'Juan Miguel','Hernadez','Bravo','jefeisc@gmail.com',5),(5,'Alejandra','Flores','Castro','jefeibq@gmail.com',6),(6,'Amin ','Bahena','Salgado','jefecb@gmail.com',7),(7,'Antonio','Santos','Silva','jefeiem@gmail.com',10),(8,'Sherry Llovisna','Roque','Quintana','jefeige@gmail.com',11),(9,'Federico','Zagal','Leon','jefearq@gmail.com',12),(10,'Jacquelin','Bringas','Ramirez','jefecp@gmail.com',13),(11,'Amin','Bahena','Salgado','jefecb@gmail.com',7),(12,'Laura','Sanchez','Hernandez','subdireccionacad@gmail.com',19),(13,'Eduardo','De la Cruz','Gamez','posgradoita@gmail.com',17),(14,'Noel','Castellanso','Rebollesdo','castillo@gmail.com',21);
/*!40000 ALTER TABLE `jefedepartamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `loginAttempts`
--

LOCK TABLES `loginAttempts` WRITE;
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
INSERT INTO `loginAttempts` VALUES ('::1',1,'2018-06-19 20:14:45','desacad@gmail.com',1),('::1',1,'2018-05-02 15:46:16','jefeisc@gmail.com',2),('::1',1,'2018-05-02 17:38:01','josejosafat@gmail.com',3),('::1',2,'2018-05-02 18:27:05','ortizibq@gmail.com',4),('::1',1,'2018-05-03 20:32:52','melojeda3@gmail.com',5),('::1',1,'2018-05-03 20:49:20','rigo@gmail.com',6),('::1',3,'2018-05-04 16:22:30','bedollaisc@gmail.com',7),('::1',1,'2018-05-04 16:34:08','subacad@gmail.com',8),('::1',4,'2018-05-04 16:47:58','fernadoortiz@gmail.com',9),('::1',2,'2018-05-04 16:48:03','fernandoortiz@gmail.com',10),('::1',3,'2018-05-04 16:53:37','subadac@gmail.com',11),('::1',2,'2018-05-04 16:53:44','subacdac@gmail.com',12),('::1',1,'2018-05-04 16:58:03','mulato@gmail.com',13),('::1',3,'2018-05-04 18:31:41','anotnioiem@gmail.com',14),('::1',1,'2018-05-04 18:31:47','antonioiem@gmail.com',15),('::1',3,'2018-05-07 21:08:09','josafat@gmail.com',16),('::1',2,'2018-05-08 17:34:59','subdes@gmail.com',17),('::1',3,'2018-05-08 19:21:40','cabello@gmail.co',19),('::1',1,'2018-05-08 19:21:50','cabello@gmail.com',20),('::1',1,'2018-05-08 19:24:51','odinibq@gmail.com',21),('::1',1,'2018-05-21 17:43:55','carranza@gmail.com',22),('::1',1,'2018-05-08 19:29:10','jefeibq@gmail.com',23),('::1',2,'2018-05-08 20:24:40','jefearqæ',24),('::1',1,'2018-05-08 20:24:50','jefearq@gmail.com',25),('::1',1,'2018-05-08 20:29:48','raularq@gmail.com',26),('::1',1,'2018-05-08 20:31:51','benitezarq@gmail.com',27),('::1',1,'2018-05-09 15:44:23','jefeiem@gmail.com',28),('::1',1,'2018-05-09 15:44:38','jefecb@gmail.com',29),('::1',2,'2018-05-09 15:51:28','arzeta@gmail.com',30),('::1',1,'2018-05-09 15:51:40','arzetas@gmail.com',31),('::1',1,'2018-06-28 12:15:44','irving@gmail.com',32),('192.168.1.104',1,'2018-05-21 18:18:15','desacad@gmail.com',33),('192.168.1.64',1,'2018-05-22 17:24:11','desacad@gmail.com',34),('::1',1,'2018-07-02 15:59:34','eliza@gmail.com',35),('::1',1,'2018-07-02 16:40:08','ozuna@gmail.com',36),('192.168.42.129',1,'2018-07-09 16:22:42','desacad@gmail.com',37),('::1',2,'2018-07-18 02:03:25','narces@gmail.co',38),('::1',1,'2018-07-18 02:03:27','narces@gmail.com',39);
/*!40000 ALTER TABLE `loginAttempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('13203234905af1f600a9099','Miguel Angel Cabello','$2y$10$lDmOnP3e90ZmxXpSzncGmuIfMny0pysUNw.q2XnZ5HuhNGKDosD3.','cabello@gmail.com',1,'2018-05-08 19:18:47','user',23),('14531541185af1f74800f06','Jose Odin','$2y$10$1.sV8w2inVRZWcVlirm4uuD0yUjQ5cDspz6tx2MUMpkY/3YOKhZpa','odinibq@gmail.com',1,'2018-05-08 19:19:02','user',30),('14780410275af2086f4d2e4','Raul Alvarez','$2y$10$0g57B4H5UuStM65tT1av5eC82h1FROBp2oCPpxZ5VSx8.t7hFLuWe','raularq@gmail.com',1,'2018-05-08 20:29:29','user',32),('15440160835af1efa9c528c','Amin Bahena','$2y$10$B5M75DmfDSmYXCFg/Cy9huzxugeKncA6pUkZWxHZVM1KDJW6S2UIy','jefecb@gmail.com',1,'2018-05-08 19:02:35','boss',16),('16119511555af1f0a7ae67e','Jacqueline Bringas','$2y$10$hlaKUZ0j8c7pBd0c1E22N.n9Vrog.kvb/L2BO3IDLNKMf/j7eGVyW','jefecp@gmail.com',1,'2018-05-08 19:03:52','boss',20),('16809251415af1f690949cc','Jorge Carranza','$2y$10$L8GJwE.pdMch9Ic9DQVi9Oy6dDEvIIWYNT3BrvHtwmKgQ4dyrbqiu','carranza@gmail.com',1,'2018-05-08 19:19:14','user',26),('17133340835aec8b45123ed','Subdireccion Academica','$2y$10$i2ES30qeebiLKM/y71EhSeEwdUWxkDlFIAMQ.hzBVL3zlSv.fTT1a','subdireccionacad@gmail.com',1,'2018-07-09 13:35:58','admin',10),('1748796145af1eff64622e','Sherry Roque','$2y$10$PgFHthhQeXOYRgiQQtzUNeUFFhnOI0TKRToD.2bhsKHOmqnSOllma','jefeige@gmail.com',1,'2018-05-08 19:04:05','boss',18),('17845511445af1f7b2e42c4','Isaias Pelaez','$2y$10$ETywptA9nVzolaJrNYsqBuc84gbTgckSf5uLYQC3HHWWSuWaZLsnW','isaiasibq@gmail.com',1,'2018-05-08 19:19:25','user',31),('18840671865af1f6f92132e','Artemio de la O','$2y$10$zGGLiukKIa3KNAqV94/8N.HJrqm/d90spNKQMMwufht5qCeTDJChy','delao@gmail.com',1,'2018-05-08 19:19:37','user',28),('19309849165aec8dd7f3d5b','Alejandra Flores','$2y$10$ojZ4Q7pnSBOI4mz9SrS4OuyzLWD.jUkLvXyl/0vulXgczcamxpkdW','jefeibq@gmail.com',1,'2018-05-08 18:24:14','boss',13),('19805906715ae9dc22cc8e8','Juan Miguel','$2y$10$SRfz.03LcGquUwFIiAgLPecGvQqzfTwv98kYdrJ7i4tvxfpSp18Fe','jefeisc@gmail.com',1,'2018-05-02 15:42:53','boss',1),('20472436025af1efc359050','Antonio Santos','$2y$10$jGHbkqGGcDRJdrrjEjve3eQ1sgSqaGHpZ43cqUO/O7hxNcouKSxRm','jefeiem@gmail.com',1,'2018-05-08 19:04:16','boss',17),('20554501135af1f63715c7c','Oscar Arzeta','$2y$10$fEZbpNzspTp0XXf1V88T/u/BevBQXDiWKe1wbJfabOiwqod96Ihsu','arzetas@gmail.com',1,'2018-05-08 19:19:47','user',24),('21211814485af1f014d2715','Federico Zagal','$2y$10$6wjBOyfuKgaGeGF5bZujtetzt7bS.WHu6PxsfN6iFnSsy3ZeCmEci','jefearq@gmail.com',1,'2018-05-08 19:04:28','boss',19),('2957825115af1f7186e003','Javier Gutierrez','$2y$10$u8YoJYfI4S3mbEdp2tSuk..tOZ2XDyUqz/zoJMuoi4Ful/Ek1jWmW','javieriem@gmail.com',1,'2018-05-08 19:20:02','user',29),('3167616295af1f5c601378','Adolfo Galeana','$2y$10$Kxjr0CZob6fj2JD0cGbSCu1l9NvA2JIMLTsGvUFdr7eEAJ3wG/Zd2','galeana@gmail.com',1,'2018-05-08 19:20:15','user',21),('3866305815af2088a83863','Antonio Benitez','$2y$10$d8xOyQozYKtlo3qT.TuHz.cGDSMkeMPUbNPJjWuzmWJ03/pCGlKz6','benitezarq@gmail.com',1,'2018-05-08 20:29:16','user',33),('695560465af1f64eecf5b','Juan Jose Bedolla','$2y$10$PWX6eNCVC8d94Mq7lzsBYuGcnh2Z.G/ECeZeO6oqBlw8HRmCrjyVG','bedollaisc@gmail.com',1,'2018-05-08 19:20:29','user',25),('6957820045af1f5dc1462b','Francisco Narces','$2y$10$urZNqLPofN1PnBDHmBlceOO5Vhi.MO06VsX/X.WmQG3Ha8VC.v5vu','narces@gmail.com',1,'2018-05-08 19:20:41','user',22),('6975110285af1f6e15dbd8','Aristoteles Muñoz','$2y$10$SyTk3YbomCDu5MlIafGOs.efRgkAp3HHtYXosCDxfxWM2AeCr2Mh2','aristoteles@gmail.com',1,'2018-05-08 19:20:55','user',27),('7920352855ae9dc59b6a0e','Desarrollo Academico','$2y$10$Q89ZJyF4KqRP4AB9WHElbOWW9x7AO0OVgfuXSzgF1ycxPn1gvLEp2','desacad@gmail.com',1,'2018-05-02 15:43:08','su',2);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `presidenteacademia`
--

LOCK TABLES `presidenteacademia` WRITE;
/*!40000 ALTER TABLE `presidenteacademia` DISABLE KEYS */;
INSERT INTO `presidenteacademia` VALUES (1,'Rafael','Hernadez','Reyna','presidenteisc@gmail.com',5),(4,'Fernado','Ortiz','Maldonado','ortiz@gmail.com',6),(5,'Jose Luis ','RiaÃ±o','Hernandez','rianio@gmail.com',10),(6,'Eloy','Mata','Carrillo','eloymata@gmail.com',12),(7,'Ricardo','Flores','Oliveros','richimx@gmail.com',21);
/*!40000 ALTER TABLE `presidenteacademia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (34,'Migel Ãngel ','Cabello','Quintero','dafgafdgadg',10,'68465468','cabello@gmail.com','Docente',15,'Maestro(a)','Maestro en ciencias',7,6,'Amin  Bahena Salgado','Ciencias BÃ¡sicas '),(35,'Jose Odin','Mendez','Rios','dfgfgs',3,'986546','odinibq@gmail.com','Docente',87,'Licenciado(a)','Quimico Biologo',6,5,'Alejandra Flores Castro','Ingenieria BioquÃ­mica '),(36,'Jorge','Carranza','Gomez','adsaafdg',1,'64564','carranza@gmail.com','Docente',54,'Maestro(a)','Maestro en tecnologÃ­as de la informaciÃ³n ',5,1,'Juan Miguel Hernadez Bravo','IngenierÃ­a en Sistemas Computacionales '),(37,'Oscar','Arzeta','Armenta','sdfgafdhgad',1,'9846549','arzetas@gmail.com','Docente',12,'Maestro(a)','Maestro en tecnologÃ­as de la informaciÃ³n ',5,1,'Juan Miguel Hernadez Bravo','IngenierÃ­a en Sistemas Computacionales '),(38,'Juan Jose','Bedolla','Solano','dhsfghsfhsg',1,'987446','bedollaisc@gmail.com','Docente',14,'Maestro(a)','Maestro en desarrollo regional ',5,1,'Juan Miguel Hernadez Bravo','IngenierÃ­a en Sistemas Computacionales '),(39,'Francisco','Narces','Ojeda','fdgadfgdfg',10,'854365483','narces@gmail.com','Docente',54,'Maestro(a)','Maestro en ciencias',7,6,'Amin  Bahena Salgado','Ciencias BÃ¡sicas ');
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-27 19:20:58
