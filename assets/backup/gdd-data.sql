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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla devlab_gdd.aula: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
INSERT INTO `aula` (`IdAula`, `NombreOrNumeroAula`, `CapacidadAula`, `UbicacionAula`, `TipoAula`) VALUES
	(13, '7LA', 20, 'Edificio 700s', 'Laboratorio de computo'),
	(14, '7LB2', 40, '700', 'Lab'),
	(15, 'Laboratorio virtual', 30, '700', 'Laboratorio'),
	(17, '1002', 300, 'Edifico 1000', 'Salon de clases'),
	(30, 'Centro de informacion', 55, 'Biblioteca', 'Lab'),
	(39, '666', 666, '666', '666'),
	(40, 'sds', 1, '10', 'asdsa');
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;

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

-- Volcando datos para la tabla devlab_gdd.carrera: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` (`IdCarrera`, `NombreCarrera`, `Abreviacion`, `IdDepartamentoCarrera`) VALUES
	(1, 'IngenierÃ­a en Sistemas Computacionales ', 'ISC', 14),
	(2, 'Licenciatura en AdministraciÃ³n ', 'LA', 15),
	(3, 'Contador Publico', 'LA', 15),
	(4, 'Arquitectura', 'ARQ', 16),
	(5, 'IngeniarÃ­a BioquÃ­mica ', 'IBQ', 17),
	(6, 'Ingeniera Electromecanica', 'IEM', 18),
	(7, 'Cinecias Basicas', 'CB', 19),
	(8, 'IngeniarÃ­a en GestiÃ³n Empresarial ', 'IGE', 20);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;

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

-- Volcando datos para la tabla devlab_gdd.curso: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` (`NumeroCurso`, `NombreCurso`, `ObjetivoCurso`, `TipoCurso`, `HoraInicioCurso`, `HoraFinCurso`, `FechaInicioCurso`, `FechaFinCurso`, `PeriodoCurso`, `ispublic`, `sign1`, `sign2`, `IdDepartamentoDe`, `NombreCompletoJefeDepto`, `NombreCompletoPresiAcad`, `NombreCompletoInstructor`, `AulaPropuesta`, `DiplomadoDFT`, `DiplomadoDFCD`, `CursoDocente`, `CursoProfesional`, `CursoCertificacion`, `DirigidoA`, `FechaLimite`, `capacidadmaxima`, `Turno`) VALUES
	('1.1', 'Circuitos electricos', 'Aprender los elementos basicos de los circuitos', 'Generico', '08:00:00', '12:00:00', '2018-01-12', '2018-01-18', ' Enero-Junio 2018', 0, 0, 1, 14, 'Juan Miguel Hernadez Bravo', '', 'Alejandro   Ramos Estrada', 'Laboratorio virtual', 1, 0, 0, 0, 0, '1', '2018-10-23', 2, 'M'),
	('2.2', 'liderazgo', 'ser lider', 'Generico', '08:00:00', '14:00:00', '2018-10-29', '2018-11-30', ' Agosto-Diciembre 2018', 1, 1, 1, 14, 'Juan Miguel Hernadez Bravo', '', '', '7LA', 0, 0, 2, 0, 0, '0', '2018-10-29', 15, 'M');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;

-- Volcando estructura para tabla devlab_gdd.curso_categoria
CREATE TABLE IF NOT EXISTS `curso_categoria` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `descricpcion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla devlab_gdd.curso_categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `curso_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla devlab_gdd.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `IdDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDepartamento` text NOT NULL,
  PRIMARY KEY (`IdDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla devlab_gdd.departamento: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`IdDepartamento`, `NombreDepartamento`) VALUES
	(14, 'Sistemas y Computacion'),
	(15, 'Ciencias Economica Administrativas'),
	(16, 'Ciencias de la Tierra'),
	(17, 'QuÃ­mica y BioquÃ­mica '),
	(18, 'Metalmecanica '),
	(19, 'Ciencias BÃ¡sicas '),
	(20, 'GestiÃ³n Empresarial  ');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

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

-- Volcando datos para la tabla devlab_gdd.infoescuela: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `infoescuela` DISABLE KEYS */;
INSERT INTO `infoescuela` (`Id`, `NombreInstitucion`, `NumeroTelefono`, `DireccionInstitucion`, `CorreoInstitucion`, `Estado`, `Ciudad`, `NombreDirector`, `ApellidoPaternoDirector`, `ApellidoMaternoDirector`, `NombreSubdirector`, `ApellidoPaternoSubdirector`, `ApellidoMaternoSubdirector`) VALUES
	(1, 'Instituto TecnolÃ³gico de Acapulco ', '62916', 'crucero de cayaco', 'itacapulco@tnm.com', 'Guerrero', 'Acapulco de Juares', 'Elio', 'Jofre', 'Vazquez', 'Laura', 'Sancehz', 'Hernandez');
/*!40000 ALTER TABLE `infoescuela` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla devlab_gdd.inscripcion: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `inscripcion` DISABLE KEYS */;
INSERT INTO `inscripcion` (`IdInscripcion`, `NumeroCurso`, `IdInstructor1`, `IdInstructor2`, `IdProfesor`, `IdAula`, `NombreProfesorInscrito`, `NombreCurso`, `FechaInicio`, `FechaFin`, `NombreInstructor`, `TipoCurso`, `Aula`, `IdCarrera`) VALUES
	(5, '2.2', NULL, NULL, 103, NULL, 'Cristian OjÃ©da SÃ¡ntana', 'liderazgo', '2018-10-29', '2018-11-30', '', 'Generico', '7LA', 1),
	(6, '2.2', NULL, NULL, 103, NULL, 'Cristian OjÃ©da SÃ¡ntana', 'liderazgo', '2018-10-29', '2018-11-30', '', 'Generico', '7LA', 1),
	(8, '2.2', NULL, NULL, 103, NULL, 'Cristian OjÃ©da SÃ¡ntana', 'liderazgo', '2018-10-29', '2018-11-30', '', 'Generico', '7LA', 1),
	(9, '2.2', NULL, NULL, 103, NULL, 'Cristian OjÃ©da SÃ¡ntana', 'liderazgo', '2018-10-29', '2018-11-30', '', 'Generico', '7LA', 1),
	(10, '1.1', NULL, NULL, 102, NULL, 'Melquisedec Ojeda Justo', 'Circuitos electricos', '2018-01-12', '2018-01-18', 'Alejandro   Ramos Estrada', 'Generico', 'Laboratorio virtual', 1),
	(11, '1.1', NULL, NULL, 102, NULL, 'Melquisedec Ojeda Justo', 'Circuitos electricos', '2018-01-12', '2018-01-18', 'Alejandro   Ramos Estrada', 'Generico', 'Laboratorio virtual', 1),
	(12, '1.1', NULL, NULL, 101, NULL, 'Rigoberto de Jesus Nava Santana', 'Circuitos electricos', '2018-01-12', '2018-01-18', 'Alejandro   Ramos Estrada', 'Generico', 'Laboratorio virtual', 1),
	(13, '2.2', NULL, NULL, 101, NULL, 'Rigoberto de Jesus Nava Santana', 'liderazgo', '2018-10-29', '2018-11-30', '', 'Generico', '7LA', 1),
	(14, '1.1', NULL, NULL, 102, NULL, 'Melquisedec Ojeda Justo', 'Circuitos electricos', '2018-01-12', '2018-01-18', 'Alejandro   Ramos Estrada', 'Generico', 'Laboratorio virtual', 1);
/*!40000 ALTER TABLE `inscripcion` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla devlab_gdd.instructor: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` (`IdInstructor`, `NombreInstructor`, `ApellidoPaternoInstructor`, `ApellidoMaternoInstructor`, `FechaNacimientoInstructor`, `CURPInstructor`, `RFCInstructor`, `NumeroTelefonoInstructor`, `CorreoInstructor`) VALUES
	(6, 'Alejandro  ', 'Ramos', 'Estrada', '1987-02-07', 'RAEA9841FJGDF', 'RAEA1234F', '73956738', 'elejandro.r@gmail.com'),
	(7, 'Eloy', 'Cadena', 'Mendoza', '1960-02-12', 'QWERTY', 'QWERTY', '7441020304', 'eloy@tics.com');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;

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

-- Volcando datos para la tabla devlab_gdd.jefedepartamento: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `jefedepartamento` DISABLE KEYS */;
INSERT INTO `jefedepartamento` (`IdJefeDepartamento`, `NombreJefeDepto`, `ApellidoPaternoJefeDepto`, `ApellidoMaternoJefeDepto`, `CorreoJefe`, `IdDepartamentoJefe`) VALUES
	(1, 'Juan Miguel', 'Hernadez', 'Bravo', 'boss@test.com', 14),
	(2, 'Amin', 'Bahena', 'Salgado', 'boss-cb@test.com', 19),
	(3, 'Alejandra', 'Flores', 'Castro', 'boss-ibq@test.com', 17),
	(4, 'Federico', 'Sagal', 'Leon', 'boss-arq@test.com', 16),
	(5, ' Sherry Llovisna ', 'Roque ', 'Quintana', 'boss-ige@test.com', 20),
	(6, 'Antonio', 'Santos', 'Silva', 'boss-iem@test.com', 18),
	(7, 'Jacqueline', 'Bringas', 'RamÃ­rez', 'boss-cea@test.com', 15);
/*!40000 ALTER TABLE `jefedepartamento` ENABLE KEYS */;

-- Volcando estructura para tabla devlab_gdd.loginAttempts
CREATE TABLE IF NOT EXISTS `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla devlab_gdd.loginAttempts: ~49 rows (aproximadamente)
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
	('189.215.152.142', 1, '2018-10-25 01:45:02', 'su@test.com', 1),
	('189.143.73.62', 2, '2018-10-21 03:30:43', 'su@test.com', 2),
	('189.143.73.62', 1, '2018-10-21 03:30:53', 'admin@test.com', 3),
	('189.215.152.142', 1, '2018-10-25 01:42:12', 'admin@test.com', 4),
	('189.215.152.142', 1, '2018-10-25 07:44:44', 'boss@test.com', 5),
	('189.215.152.142', 1, '2018-10-25 01:41:09', 'user@test.com', 6),
	('189.143.137.57', 5, '2018-10-21 06:08:05', 'Jefe.isc-ita@tnm.com', 7),
	('189.215.152.142', 2, '2018-10-21 06:16:51', 'jefe.isc-ita@tnm.com', 8),
	('177.247.51.30', 2, '2018-10-22 15:49:14', 'admin@test.com', 9),
	('177.247.51.30', 3, '2018-10-22 15:48:59', 'adasda', 10),
	('177.247.51.30', 1, '2018-10-22 15:51:04', 'boss@test.com', 11),
	('201.113.1.168', 1, '2018-10-22 15:57:24', 'boss@test.com', 12),
	('201.113.1.168', 1, '2018-10-22 15:57:43', 'melojeda27@gmail.com', 13),
	('201.113.1.168', 1, '2018-10-22 16:53:20', 'user@test.com', 14),
	('201.113.1.168', 2, '2018-10-22 17:25:48', 'admin@gmail.com', 15),
	('201.113.1.168', 1, '2018-10-22 17:26:35', 'admin@test.com', 16),
	('201.113.1.168', 1, '2018-10-22 17:49:09', 'su@test.com', 17),
	('201.113.1.168', 3, '2018-10-22 18:57:02', 'susu@test.com', 18),
	('189.143.137.57', 1, '2018-10-23 03:55:46', 'su@test.com', 19),
	('189.143.137.57', 1, '2018-10-23 04:05:08', 'boss@test.com', 20),
	('200.68.142.4', 1, '2018-10-23 17:54:56', 'su@test.com', 21),
	('189.143.116.252', 1, '2018-10-23 21:05:39', 'boss@test.com', 22),
	('187.230.48.167', 1, '2018-10-24 17:41:19', 'boss@test.com', 23),
	('189.143.214.236', 1, '2018-10-25 00:03:18', 'su@test.com', 24),
	('189.143.214.236', 1, '2018-10-25 00:27:26', 'user@test.com', 25),
	('189.143.214.236', 3, '2018-10-25 01:00:41', 'boss@gmail.com', 26),
	('189.143.214.236', 1, '2018-10-25 01:00:48', 'boss@test.com', 27),
	('189.143.214.236', 1, '2018-10-25 01:33:01', 'admin@test.com', 28),
	('189.143.123.74', 3, '2018-10-25 02:44:53', 'boss@test.con', 29),
	('189.143.123.74', 1, '2018-10-25 02:45:04', 'boss@test.com', 30),
	('189.143.123.74', 1, '2018-10-25 03:35:59', 'su@test.com', 31),
	('189.143.123.74', 1, '2018-10-25 03:48:31', 'admin@test.com', 32),
	('189.143.137.57', 4, '2018-10-27 03:02:58', 'pruebausermel@gmail.com', 33),
	('189.143.137.57', 1, '2018-10-27 03:03:38', 'pruebausermel2@gmail.com', 34),
	('189.143.71.18', 1, '2018-10-27 15:03:54', 'boss@test.com', 35),
	('189.143.71.18', 1, '2018-10-27 16:34:17', 'admin@test.com', 36),
	('189.143.137.57', 1, '2018-10-27 18:10:07', 'admin@test.com', 37),
	('187.230.32.174', 1, '2018-10-29 19:40:29', 'boss@test.com', 38),
	('189.215.158.142', 1, '2018-10-31 02:27:40', 'boss@test.com', 39),
	('189.215.158.142', 1, '2018-10-31 03:08:38', 'su@test.com', 40),
	('189.215.158.142', 3, '2018-10-31 04:08:04', 'boss-cea@test.com', 41),
	('189.143.4.165', 1, '2018-10-31 04:37:33', 'admin@test.com', 42),
	('189.143.166.92', 1, '2018-10-31 05:56:45', 'su@test.com', 43),
	('189.143.166.92', 1, '2018-10-31 06:40:11', 'boss@test.com', 44),
	('189.215.158.142', 1, '2018-10-31 06:44:01', 'user@test.com', 45),
	('187.230.76.56', 1, '2018-10-31 20:34:59', 'su@test.com', 46),
	('187.230.76.56', 1, '2018-10-31 20:39:24', 'user@test.com', 47),
	('187.230.76.56', 1, '2018-10-31 21:07:05', 'boss@test.com', 48),
	('189.143.163.234', 1, '2018-11-02 03:29:11', 'admin@test.com', 49);
/*!40000 ALTER TABLE `loginAttempts` ENABLE KEYS */;

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

-- Volcando datos para la tabla devlab_gdd.members: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`, `role`) VALUES
	('10871384405bd0b8b492215', 'adfs', '$2y$10$lnaq1bR2xm9XnZ7HrYQMq.dYovL3v9wXqEpQ0gPT49H1FbXJq4aOC', 's33@test.com', 0, '2018-10-24 13:23:48', 'user'),
	('11364511545bcbed9f2dec2', 'Subdireccion Academica', '$2y$10$YS7n90j8i3nwzRd./jaBOuViqhoBSfIuNUjVC/cju5yywYEIFEnCe', 'admin@test.com', 1, '2018-10-20 22:13:42', 'admin'),
	('12530063605bd92a81c29f5', 'Jakeline Bringas', '$2y$10$fQ7xFPDymE.drkB.ZEIJ3.fJ/rMxAD8mMQPvBHpJtJ5X1fPOcd2EO', 'boss-cea@test.com', 1, '2018-10-30 22:07:53', 'boss'),
	('15101742795bcbed751aa03', 'Jefe ISC', '$2y$10$murXWFwW42eFXJHAqDS3..odqHezcT6Mc01p7yHShZhm14O7r9G2K', 'boss@test.com', 1, '2018-10-20 22:13:46', 'boss'),
	('16574298265bd0b7cc05e69', 'ada', '$2y$10$WiE5YgFYc/uN2.8BNa9AouB.OF8PyApTukWtUTb2I28LarPyZYOia', 's3u@test.com', 0, '2018-10-24 13:19:56', 'user'),
	('20522020255bcbedcec37c5', 'Profesor', '$2y$10$2MaIAapj8M9rhNUD5XdK7uxa5s8IWuRasOOrD7/UBcouw8w1ZbR2K', 'user@test.com', 1, '2018-10-20 22:13:50', 'user'),
	('2172302295bd3d4398ec23', 'Melquisedec Ojeda3', '$2y$10$hDPwDok4pomhfX2a9C6qSuLVU.clzPftExnagIvcO2QtZ/3LXF1qS', 'pruebausermel2@gmail.com', 1, '2018-10-26 22:02:43', 'user'),
	('2766449095bd0b6b2e4423', 'sdfds', '$2y$10$2lFaqzinVQe4GTvUFPQtQO1VZLRGuffHLUF6peaSifWIj7ui0LgW2', 's2u@test.com', 0, '2018-10-24 13:15:15', 'user'),
	('3476839405bcbf67c9d3fb', 'Desarrollo Academico', '$2y$10$4JwXVtnL98wS71g6zJDdKOO8x9HF76jr1PIiIpGEk1whrajKT3d6u', 'su@test.com', 1, '2018-10-20 22:46:24', 'su'),
	('598514225bd13d81e25f4', 'christian ', '$2y$10$sMXzRQeJ8v1eTedWE1vzMeyqr0URmp208kTRcr3he/WPFj6PhpP0u', 'test@test.com', 0, '2018-10-24 22:50:26', 'user'),
	('8715212245bcdf34ec82d6', 'Melquisedec', '$2y$10$X6L3YG0gZPC0jzIeNPMcxuJ5VJe8DCXEU41s1CEyHE6MzQt2WsYTu', 'melojeda27@gmail.com', 1, '2018-10-22 10:57:16', 'user'),
	('962329755bd3d3cf3b074', 'mel2', '$2y$10$ed4JvkHgVDLYfiE4UAr2Pu14sFIiYAMiRdTtZ0yTI0Ydx7BBYm3.a', 'pruebausermel@gmail.com', 0, '2018-10-26 21:56:15', 'user'),
	('989828295bd0b90d236c5', 'ads', '$2y$10$jtDLTwkxjxhsWS8el8tpZeoB6ZBWIAkz2i69j2vrnNPaa47r8ogrm', 'su5@test.com', 0, '2018-10-24 13:25:17', 'user');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

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

-- Volcando datos para la tabla devlab_gdd.presidenteacademia: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `presidenteacademia` DISABLE KEYS */;
INSERT INTO `presidenteacademia` (`IdPresidenteAcademia`, `NombrePresidenteAcad`, `ApellidoPaternoPresidenteAcad`, `ApellidoMaternoPresidenteAcad`, `CorreoPresidente`, `IdCarreraPresidente`) VALUES
	(3, 'Rafel', 'Hernadez', 'Reyna', 'reynba-isc@gmail.com', 1);
/*!40000 ALTER TABLE `presidenteacademia` ENABLE KEYS */;

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

-- Volcando datos para la tabla devlab_gdd.profesor: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` (`IdProfesor`, `NombreProfesor`, `ApellidoPaternoProfesor`, `ApellidoMaternoProfesor`, `RFCProfesor`, `IdCarrera`, `NumeroTelefonoProfesor`, `CorreoProfesor`, `PuestoProfesor`, `NumeroTarjetaProfesor`, `GradoEstudiosProfesor`, `CarreraCursadaProfesor`, `IdDepartamentoProfesor`, `IdJefeInmediatoProfesor`, `JefeInmediatoProfesor`, `NombreCarreraProfesor`, `Estado`) VALUES
	(101, 'Rigoberto de Jesus', 'NavÃ¡', 'Santana', 'NASRJ980T', 1, '7441020304', 'user@test.com', 'Docente', 12, 'Licenciado(a)', 'MTI', 14, 1, 'Juan Miguel Hernadez Bravo', 'IngenierÃ­a en Sistemas Computacionales ', 1),
	(102, 'Melquisedec', 'Ojeda', 'Justo', 'qwerty', 1, '7441815003', 'melojeda27@gmail.com', 'Docente', 13, 'Licenciado(a)', 'ISC', 14, 1, 'Juan Miguel Hernadez Bravo', 'IngenierÃ­a en Sistemas Computacionales ', 1),
	(103, 'Cristian', 'OjÃ©da', 'SÃ¡ntana', 'asfsdf', 1, '7441815003', 'pruebausermel2@gmail.com', 'Docente', 134, 'Doctor(a)', 'ISC', 14, 1, 'Juan Miguel Hernadez Bravo', 'IngenierÃ­a en Sistemas Computacionales ', 1);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
