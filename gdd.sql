-- --------------------------------------------------------
-- Host:                         192.168.1.66
-- Versión del servidor:         5.5.56-MariaDB - MariaDB Server
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para gdd
CREATE DATABASE IF NOT EXISTS `gdd` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gdd`;

-- Volcando estructura para tabla gdd.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `apellidop` text NOT NULL,
  `apellidom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.alumnos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.asistencias
CREATE TABLE IF NOT EXISTS `asistencias` (
  `idprofesor` int(11) DEFAULT NULL,
  `idcurso` int(11) DEFAULT NULL,
  `asistio` int(11) DEFAULT NULL,
  `faltas` varchar(44) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla en el que se guardará el estado de cada profesor conforme a las asistencias del curso en el que participen.';

-- Volcando datos para la tabla gdd.asistencias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
INSERT INTO `asistencias` (`idprofesor`, `idcurso`, `asistio`, `faltas`, `id`) VALUES
	(1, 23, 0, '0', 0),
	(1, 1, NULL, NULL, NULL),
	(2, 2, NULL, NULL, NULL),
	(2, 1, NULL, NULL, NULL),
	(2, 2, NULL, NULL, NULL),
	(1, 2, NULL, NULL, NULL);
/*!40000 ALTER TABLE `asistencias` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.aulas
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `descripcion` text NOT NULL,
  `edificio` varchar(50) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.aulas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;
INSERT INTO `aulas` (`id`, `nombre`, `capacidad`, `tipo`, `descripcion`, `edificio`, `ubicacion`) VALUES
	(1, '1000', 2000, '100', '', '', '200'),
	(2, 'Sala A', 30, 'Sala de Computo', '', '', 'Realizar Actividades de Comput'),
	(3, 'Laboratorio de Siste', 35, 'Sala B', '', '', 'Sala de Computo');
/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.carreras
CREATE TABLE IF NOT EXISTS `carreras` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `abreviacion` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.carreras: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` (`id`, `nombre`, `departamento`, `abreviacion`) VALUES
	(1, 'IngenierÃ­a en Sistemas Computacionales', 'Sistemas y computacion', 'ISC'),
	(2, 'Contador Publico', 'Ciencias EconÃ³micas Administrativas', 'CP'),
	(3, 'Ingenieria en Gestion Empresarial', 'Ciencias EconÃ³micas Administrativas', 'IGE'),
	(4, 'Arquitectura', 'Ciencias de la Tierra', 'ARQ');
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `objetivo` text NOT NULL,
  `semanacantidad` int(5) NOT NULL,
  `fechaalta` date NOT NULL,
  `fechaterm` date NOT NULL,
  `numerohoras` int(20) NOT NULL,
  `idinstructor` int(20) NOT NULL,
  `dirigidoa` varchar(50) NOT NULL,
  `departamento` text NOT NULL,
  `asignatura` text NOT NULL,
  `periodo` text NOT NULL,
  `capacidad` int(11) NOT NULL,
  `aula` text NOT NULL,
  `horainicio` time NOT NULL,
  `horafin` time NOT NULL,
  `nombrecorto` text NOT NULL,
  `ispublic` int(11) NOT NULL,
  `sign1` varchar(100) NOT NULL,
  `sign2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.cursos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `nombre`, `objetivo`, `semanacantidad`, `fechaalta`, `fechaterm`, `numerohoras`, `idinstructor`, `dirigidoa`, `departamento`, `asignatura`, `periodo`, `capacidad`, `aula`, `horainicio`, `horafin`, `nombrecorto`, `ispublic`, `sign1`, `sign2`) VALUES
	(1, 'Diplomado para la informaciÃ³n y desarrollo de competencias docentes. Modulo IV', 'Fomentar la ciencia', 0, '2017-11-30', '2017-12-01', 15, 0, 'IngenierÃ­a en Sistemas Computacionales', 'sc', 'Administracion de Redes', 'agost-dic', 30, 'videoteca', '08:00:00', '13:00:00', 'Diplomado de compete', 0, '1', '1'),
	(2, ' 2 Diplomado para la informaciÃ³n y desarrollo de competencias docentes. Modulo IV', 'Fomentar la ciencia', 0, '2017-11-30', '2017-12-01', 15, 0, 'IngenierÃ­a en Sistemas Computacionales', 'sc', 'Administracion de Redes', 'agost-dic', 30, 'videoteca', '08:00:00', '13:00:00', '2 Diplomado de compete ', 0, '1', '1'),
	(3, 'Curso', 'no', 0, '2017-12-11', '2017-12-14', 1, 0, 'IngenierÃ­a en Sistemas Computacionales', 'sc', 'Administracion de Redes', 'enero-junio', 30, 'videoteca', '08:00:00', '13:00:00', 'C', 0, '1', '1');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `jefedepto` varchar(40) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.departamentos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` (`id`, `nombre`, `jefedepto`, `descripcion`) VALUES
	(1, 'Sistemas y computacion', 'Juan Miguel Hernandez Bravo', 'Sistemas'),
	(2, 'Ciencias EconÃ³micas Administrativas', 'Sherry Llovisna Roque Quintana', 'Adminitrativas'),
	(3, 'Ciencias de la Tierra', 'Federico Zagal Leon', 'Arquitectura'),
	(4, 'Ciencias Basicas', 'Amin Bahena Salgado', 'Calculo y Algebra');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.diplomas
CREATE TABLE IF NOT EXISTS `diplomas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idprofesor` int(20) NOT NULL,
  `idcurso` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.diplomas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `diplomas` DISABLE KEYS */;
/*!40000 ALTER TABLE `diplomas` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.encuesta
CREATE TABLE IF NOT EXISTS `encuesta` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta1` tinyint(4) NOT NULL,
  `pregunta2` tinyint(4) NOT NULL,
  `pregunta3` tinyint(4) NOT NULL,
  `pregunta4` tinyint(4) NOT NULL,
  `pregunta5` tinyint(4) NOT NULL,
  `pregunta6` tinyint(4) NOT NULL,
  `pregunta7` tinyint(4) NOT NULL,
  `pregunta8` tinyint(4) NOT NULL,
  `pregunta9` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.encuesta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `encuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuesta` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.grados
CREATE TABLE IF NOT EXISTS `grados` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.grados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grados` DISABLE KEYS */;
/*!40000 ALTER TABLE `grados` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.infoescuela
CREATE TABLE IF NOT EXISTS `infoescuela` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `extension` int(11) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `nombredirector` varchar(50) DEFAULT NULL,
  `subdirector` varchar(50) NOT NULL,
  `fecharegistro` datetime NOT NULL,
  `fechabaja` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene toda la informacion util de la institucion.';

-- Volcando datos para la tabla gdd.infoescuela: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `infoescuela` DISABLE KEYS */;
INSERT INTO `infoescuela` (`id`, `nombre`, `telefono`, `direccion`, `correo`, `extension`, `estado`, `ciudad`, `nombredirector`, `subdirector`, `fecharegistro`, `fechabaja`) VALUES
	(1, 'Tecnológico de Acapulco', 4881919, 'Acapulco', 'tec@ita.com', 24, '1', 'Acapulco', 'Eliot Jofre', 'Mena', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(0, '', 0, '', '', 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `infoescuela` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.inscripciones
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombreprofesor` text NOT NULL,
  `nombrecurso` text NOT NULL,
  `nombreinstructor` text NOT NULL,
  `horario` varchar(10) NOT NULL,
  `fechainicio` date NOT NULL,
  `aula` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.inscripciones: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `inscripciones` DISABLE KEYS */;
INSERT INTO `inscripciones` (`id`, `nombreprofesor`, `nombrecurso`, `nombreinstructor`, `horario`, `fechainicio`, `aula`) VALUES
	(7, '1', '1', '', '8:00 - 13:', '2017-12-06', '1000'),
	(8, '2', '1', '', '8:00 - 13:', '2017-12-06', '1000'),
	(9, '3', '1', '', '8:00 - 13:', '2017-12-06', '1000'),
	(10, '4', '2', '', '13:00 - 17', '2017-12-08', '1000'),
	(11, '5', '2', '', '13:00 - 17', '2017-12-08', '1000'),
	(12, '6', '2', '', '13:00 - 17', '2017-12-08', '1000'),
	(13, '7', '2', '', '8:00 - 13:', '2017-12-13', '1000');
/*!40000 ALTER TABLE `inscripciones` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.instructores
CREATE TABLE IF NOT EXISTS `instructores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `apellidop` text NOT NULL,
  `apellidom` text NOT NULL,
  `fechanacimiento` date NOT NULL,
  `curp` varchar(20) NOT NULL,
  `rfc` varchar(10) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `InstitutLicen` text NOT NULL,
  `fechaTitulaLicen` date NOT NULL,
  `cedulaLicen` varchar(10) NOT NULL,
  `institutMes` text NOT NULL,
  `institutMaes` text NOT NULL,
  `fechaTitutlaMaes` date NOT NULL,
  `cedulaMaes` varchar(10) NOT NULL,
  `institutDoct` text NOT NULL,
  `fechaTitulaDoct` date NOT NULL,
  `cedulaDoct` varchar(10) NOT NULL,
  `institutEspe` text NOT NULL,
  `fechaTitulaEspe` date NOT NULL,
  `cedulaEspe` varchar(10) NOT NULL,
  `institutOtro` text NOT NULL,
  `fechaTitulaOtro` date NOT NULL,
  `cedulaOtro` varchar(10) NOT NULL,
  `puesto1` text NOT NULL,
  `empresa1` text NOT NULL,
  `permanencia1` varchar(10) NOT NULL,
  `actividades1` text NOT NULL,
  `puesto2` text NOT NULL,
  `empresa2` text NOT NULL,
  `permanencia2` varchar(10) NOT NULL,
  `actividades2` text NOT NULL,
  `puesto3` text NOT NULL,
  `empresa3` text NOT NULL,
  `permanencia3` varchar(10) NOT NULL,
  `actividades3` text NOT NULL,
  `materia1` text NOT NULL,
  `periodo1` varchar(10) NOT NULL,
  `materia2` text NOT NULL,
  `periodo2` varchar(10) NOT NULL,
  `materia3` text NOT NULL,
  `periodo3` varchar(10) NOT NULL,
  `producto1` text NOT NULL,
  `descripcion1` text NOT NULL,
  `fechaProducto1` date NOT NULL,
  `producto2` text NOT NULL,
  `descripcion2` text NOT NULL,
  `fechaProducto2` date NOT NULL,
  `producto3` text NOT NULL,
  `descripcion3` text NOT NULL,
  `fechaProduto3` date NOT NULL,
  `nombreCurso1` text NOT NULL,
  `institucion1` text NOT NULL,
  `duiracion1` int(2) NOT NULL,
  `fechaInstruc1` date NOT NULL,
  `nombreCurso2` text NOT NULL,
  `institucion2` text NOT NULL,
  `duracion2` int(2) NOT NULL,
  `fechaInstruc2` date NOT NULL,
  `nombreCurso3` text NOT NULL,
  `institucion3` text NOT NULL,
  `duracion3` int(2) NOT NULL,
  `fechaInstruc3` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.instructores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `instructores` DISABLE KEYS */;
/*!40000 ALTER TABLE `instructores` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.loginAttempts
CREATE TABLE IF NOT EXISTS `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.loginAttempts: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `loginAttempts` DISABLE KEYS */;
INSERT INTO `loginAttempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
	('::1', 1, '2017-12-11 15:57:42', 'admin', 3),
	('::1', 1, '2017-12-06 22:25:03', 'c', 4),
	('::1', 2, '2017-12-06 19:02:20', 'rigon', 5),
	('::1', 2, '2017-12-06 19:49:44', 'asist1', 6),
	('::1', 1, '2017-12-11 21:19:25', 'admin1', 7),
	('::1', 5, '2017-12-06 22:31:39', 'user', 8),
	('192.168.1.64', 1, '2017-12-08 19:58:32', 'admin1', 9),
	('192.168.1.67', 1, '2017-12-11 22:33:46', 'admin1', 10),
	('192.168.1.65', 1, '2017-12-11 17:33:16', 'admin1', 11),
	('::1', 2, '2017-12-11 21:02:32', 'Jorge', 12),
	('192.168.1.68', 1, '2017-12-11 21:49:15', 'admin1', 13),
	('192.168.1.65', 1, '2017-12-12 20:45:46', 'c', 14),
	('192.168.1.65', 1, '2017-12-12 21:06:22', 'Docente', 15);
/*!40000 ALTER TABLE `loginAttempts` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.materias
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `carrera` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.materias: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` (`id`, `nombre`, `carrera`) VALUES
	(1, 'Administracion de Redes', 'Sistemas y Computacion'),
	(2, 'qwe', 'qwe');
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.members: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`, `role`) VALUES
	('10602786775a2849c3b1ac5', 'asist1', '$2y$10$menLEgaFO4.nj8MdGJy2aun1XuEQ0Qd9E7wWzneHH5w3SKatnsrcq', 'coreo1@falta.com', 1, '2017-12-06 14:21:59', 'editor'),
	('11121274855a2ef257e99f4', 'Jorge', '$2y$10$Mm0xGD659CdkN1Y88k78y.TcEMSNKmhDkF/ffrMOt7v2CocphB4Bq', 'carranza@gmail.com', 1, '2017-12-11 15:06:15', 'user'),
	('13894113245a283df755633', 'pab', '$2y$10$1EkhSBveRXO5WFSDco7gfOa/FQAvP.5QLhLAV7OGKHybUJRwbiMEu', 'pabjua@gmail.com', 0, '2017-12-06 14:22:14', 'editor'),
	('15822279105a28490a23e27', 'admin1', '$2y$10$QXJWd/eRLdDqnVtot5yiMurnO7OsKXyDgBJ4hqQwfyLIkL9gk/hoe', 'correo@falta.com', 1, '2017-12-06 15:29:15', 'su'),
	('16776126415a283ea864eab', 'rigon', '$2y$10$TZeFBavAoDG1NWqlAEqFCOcraUFzLO.i2mF2Ulx5.hxXVdiffjjCO', 'rigojns03@gmail.com', 1, '2017-12-06 14:29:38', 'admin'),
	('8180750365a3044a7323ef', 'Docente', '$2y$10$Ww.JjE6utJYQeTgZZpPz3eeJ79IqrGkdjJh7ZD.cPyLAdh1Y2HPV2', 'Docen@correo.com', 1, '2017-12-12 15:16:39', 'user'),
	('9547844475a283272c64ac', 'c', '$2y$10$xzrI3n2k2G2Lu5Xju.sK6.HTFj3qL8PBpnXiS4nGc2LBaDomQObde', 'cic.innsy@gmail.com', 1, '2017-12-12 15:16:07', 'user'),
	('9666764715a283e2a4f54f', 'pjuag', '$2y$10$qLfw.M/f8Ix2GQdjeukHAurrg72BAABDAazDLOdslpoDDK7rjoaxG', 'pablo27mb@gmail.com', 1, '2017-12-06 15:03:18', 'editor');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.necesidades
CREATE TABLE IF NOT EXISTS `necesidades` (
  `idnecesidad` int(11) DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `jefedepartamento` varchar(50) DEFAULT NULL,
  `presidenteacademia` varchar(50) DEFAULT NULL,
  `nombrecurso` varchar(50) DEFAULT NULL,
  `objetivo` varchar(50) DEFAULT NULL,
  `asignaturarequiere` varchar(50) DEFAULT NULL,
  `contenidotematico` varchar(50) DEFAULT NULL,
  `numprof` int(11) DEFAULT NULL,
  `periodo` date DEFAULT NULL,
  `facilitadorpropuesto` varchar(50) DEFAULT NULL,
  `tipoasignatura` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.necesidades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `necesidades` DISABLE KEYS */;
INSERT INTO `necesidades` (`idnecesidad`, `carrera`, `departamento`, `jefedepartamento`, `presidenteacademia`, `nombrecurso`, `objetivo`, `asignaturarequiere`, `contenidotematico`, `numprof`, `periodo`, `facilitadorpropuesto`, `tipoasignatura`) VALUES
	(1, NULL, NULL, 'juan', 'reyna', 'estructura de datos', 'reforzar las necesidades de la materia', 'POO', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `necesidades` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.objetivos
CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.objetivos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `objetivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `objetivos` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.presidenteAcademia
CREATE TABLE IF NOT EXISTS `presidenteAcademia` (
  `idpresidente` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.presidenteAcademia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `presidenteAcademia` DISABLE KEYS */;
/*!40000 ALTER TABLE `presidenteAcademia` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.profesores
CREATE TABLE IF NOT EXISTS `profesores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(44) NOT NULL,
  `apellidop` varchar(50) NOT NULL,
  `apellidom` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `carrera` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `rfc` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `gradoestudios` varchar(50) NOT NULL,
  `nombrecarrera` varchar(50) NOT NULL,
  `generacion` date NOT NULL,
  `puestoactual` varchar(50) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `asistencia` int(11) NOT NULL,
  `estudiosmaximos` text NOT NULL,
  `jefeinmediato` text NOT NULL,
  `numerotarjeta` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.profesores: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `profesores` DISABLE KEYS */;
INSERT INTO `profesores` (`id`, `nombre`, `apellidop`, `apellidom`, `departamento`, `carrera`, `telefono`, `rfc`, `correo`, `gradoestudios`, `nombrecarrera`, `generacion`, `puestoactual`, `horario`, `asistencia`, `estudiosmaximos`, `jefeinmediato`, `numerotarjeta`) VALUES
	(1, 'Rolando', 'Palacios', 'Ortega', 'Sistemas y computacion', 'ISC', '7441234567', 'RPOR7653865H5', 'ortega@gmail.com', 'Doctor(a)', 'IngenierÃ­a ', '1980-12-12', '245678', '07:00 - 15:00', 0, 'Doctorado', 'Juan Miguel Hernandez Bravo', 0),
	(2, 'Chrsitian', 'Ibarra', 'Cruz', 'Sistemas y computacion', 'ISC', '7443477867', 'RFCICCHHOS', 'cic.innsy@gmail.com', 'Licenciado(a)', 'ISC', '2016-06-29', 'Asesor', '7:7', 0, 'Licenciatura', 'Juan Miguel Hernandez Bravo', 0),
	(3, 'SIlvestre', 'Bedolla', 'Solano', 'Sistemas y computacion', 'ISC', '7441039476', 'BSS957U398', 'silvestre@gmail.com', 'Licenciado(a)', 'TecnologÃ­as de la InformaciÃ³n', '2017-12-08', 'Docenten', '10:00 - 15:00', 0, 'Licenciatura', 'Juan Miguel Hernandez Bravo', 0),
	(4, 'Jorge', 'Carranza', 'Gomez', 'Sistemas y computacion', 'ISC', '7440376583', 'CGJ9869894', 'carranza@gmail.com', 'Maestro(a)', 'TecnologÃ­as de la InformaciÃ³n', '2017-12-22', 'Docente', '8:00 - 14:00 Hrs', 0, 'Maestria', 'Juan Miguel Hernandez Bravo', 0),
	(5, 'Eduardo', 'De la cruz', 'Gamez', 'Sistemas y computacion', 'ISC', '7444185762', 'DGE75743978', 'egamez@gmail.com', 'Maestro(a)', 'Seguridad informÃ¡tica ', '2002-06-05', 'Jefe del departamento de posgrado', '9:00 - 11:00 Hrs', 0, 'Maestria', 'Juan Miguel Hernandez Bravo', 0),
	(6, 'Eleazar', 'Pacheco', 'Salazar', 'Sistemas y computacion', 'ISC', '7441616461', 'PSE698385|', 'pacheco@gmail.comn', 'Licenciado(a)', 'TecnologÃ­as de la InformaciÃ³n', '2012-06-06', 'Docente', '9:00 -  12:00 Hrs', 0, 'Licenciatura', 'Juan Miguel Hernandez Bravo', 0),
	(7, 'Juan Miguel', 'Hernandez', 'Bravo', 'Sistemas y computacion', 'ISC', '7444404717', 'JMHB0090KJIDDD', 'contacto@gmail.com', 'Licenciado(a)', 'ISC', '1980-06-16', 'MAESTRO', '8-6', 0, 'Licenciatura', 'Juan Miguel Hernandez Bravo', 0);
/*!40000 ALTER TABLE `profesores` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.prueba
CREATE TABLE IF NOT EXISTS `prueba` (
  `Columna 1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.prueba: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `prueba` DISABLE KEYS */;
/*!40000 ALTER TABLE `prueba` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.temarios
CREATE TABLE IF NOT EXISTS `temarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.temarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `temarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `temarios` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.ubicacionesaulas
CREATE TABLE IF NOT EXISTS `ubicacionesaulas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lugar` varchar(100) NOT NULL,
  `capacidad` int(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.ubicacionesaulas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ubicacionesaulas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubicacionesaulas` ENABLE KEYS */;

-- Volcando estructura para tabla gdd.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombreusuario` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla gdd.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombreusuario`, `tipo`, `contrasenia`, `email`) VALUES
	(1, 'cibarra', 'admin', '000000', 'cic.innsy@gmail.com'),
	(2, 'cibarra2', 'admin', '000000', 'cic.innsy@gmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
