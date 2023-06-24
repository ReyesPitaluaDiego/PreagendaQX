-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2023 a las 06:18:38
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `issste`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`ID`, `NOMBRE`) VALUES
(1, 'MEDICINA INTERNA'),
(2, 'GINECO Y OBSTETRICIA'),
(3, 'PEDIATRIA'),
(4, 'CIRUGIA GENERAL'),
(5, 'AUXILIARES DE DIGANOSTICO'),
(6, 'ENLACE HOSPITALARIO'),
(7, 'ENFERMERIA'),
(8, 'URGENCIAS'),
(9, 'UCIA (UNIDAD DE CUIDADOS INTENSIVOS ADULTOS)'),
(10, 'UCIN (UNIDAD DE CUIDADOS INTENSIVOS NEONATALES)'),
(11, 'COVID-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CartadeConsentimiento`
--

CREATE TABLE `CartadeConsentimiento` (
  `NoREGISTRO` int(11) NOT NULL,
  `T_CONSENTIMIENTO` int(11) NOT NULL,
  `MOTIVOS` varchar(500) NOT NULL,
  `COMPLICACIONES` longtext DEFAULT NULL,
  `C_ESPECIFICO` longtext NOT NULL,
  `C_PARTICULAR` longtext DEFAULT NULL,
  `RESPONSABLE` varchar(150) NOT NULL,
  `TESTIGO1` varchar(150) NOT NULL,
  `TESTIGO2` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `CartadeConsentimiento`
--

INSERT INTO `CartadeConsentimiento` (`NoREGISTRO`, `T_CONSENTIMIENTO`, `MOTIVOS`, `COMPLICACIONES`, `C_ESPECIFICO`, `C_PARTICULAR`, `RESPONSABLE`, `TESTIGO1`, `TESTIGO2`) VALUES
(1, 3, 'falla de tratamiento conservador y pobre canalización de gases', 'incluyendo la posibilidad de que se requiera la creación de estomas (exteriorización de un segmento de intestino), resección de un segmento de mi intestino, y eventualmente requerir otras cirugías.', 'En el caso específico de la laparotomía exploradora por obstrucción intestinal, los riesgos específicos más relevantes, aunque muy poco frecuentes, son lesiones o perforación de asas intestinales al realizar la exploración meticulosa del intestino en toda su extensión, las fístulas intestinales, recidiva de la obstrucción y eventración o dehiscencia de la herida quirúrgica.', '', 'Laura Elizabeth Lopez Millan', 'Diego Reyes Pitalua', 'Fulanito Perengano Sotano'),
(2, 4, 'presencia de aire libre intraperitoneal en radiografías y TAC, deterioro del estado general', 'incluyendo la posibilidad de que se requiera la creación de estomas (exteriorización de un segmento de intestino), resección de un segmento de mi intestino, y eventualmente requerir otras cirugías.', 'En el caso específico de la laparotomía exploradora, las complicaciones dependerán principalmente del diagnóstico definitivo, el sitio y la causa de perforación, y los procedimientos que se realicen, además de las propias de laparotomía como eventración o dehiscencia de sutura de la pared abdominal, así como complicaciones pulmonares y cardiovasculares. En caso de perforación de intestino delgado, si se hiciera anastomosis (conexión del intestino), existe el riesgo de falla de anastomosis, y en caso, menos probable según la TAC, de perforación de colon, debido al gran perímetro abdominal y panículo adiposo, la necrosis de la colostomía o su retracción.', '', 'Franco Escamilla Lopez', 'Diego Reyes Pitalua', 'Hector Cetina Cordero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consentimientos`
--

CREATE TABLE `consentimientos` (
  `id` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `COMPLICACIONES` longtext DEFAULT NULL,
  `C_ESPECIFICO` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `consentimientos`
--

INSERT INTO `consentimientos` (`id`, `NOMBRE`, `COMPLICACIONES`, `C_ESPECIFICO`) VALUES
(1, 'APENDICE COMPLICADO', '', 'En el caso específico de la apendicectomía laparoscópica, los riesgos específicos más relevantes, aunque muy poco frecuentes, son el sangrado y la fístula fecal o de muñón apendicular, la infección de la herida y muy remotamente, la formación de abscesos intraabdominales (que cuando se presentan, suelen hacerlo alrededor de los 15 días de operado).'),
(2, 'HEMICOLECTOMIA DERECHA', 'incluyendo la posibilidad remota de que se requiera la creación de estomas (exteriorización de un segmento de intestino), y eventualmente requerir otras cirugías.', 'En el caso específico de la hemicolectomía derecha, las complicaciones relacionadas al procedimiento incluyen entre otras, dehiscencia de las anastomosis (o sea, los sitios de reconexión del intestino), las fístulas (salida de material intestinal de las anastomosis), sangrado y sección o ligadura del uréter derecho.'),
(3, 'OBSTRUCCION INTESTINAL', 'incluyendo la posibilidad de que se requiera la creación de estomas (exteriorización de un segmento de intestino), resección de un segmento de mi intestino, y eventualmente requerir otras cirugías.', 'En el caso específico de la laparotomía exploradora por obstrucción intestinal, los riesgos específicos más relevantes, aunque muy poco frecuentes, son lesiones o perforación de asas intestinales al realizar la exploración meticulosa del intestino en toda su extensión, las fístulas intestinales, recidiva de la obstrucción y eventración o dehiscencia de la herida quirúrgica.'),
(4, 'PERFORACION INTESTINAL', 'incluyendo la posibilidad de que se requiera la creación de estomas (exteriorización de un segmento de intestino), resección de un segmento de mi intestino, y eventualmente requerir otras cirugías.', 'En el caso específico de la laparotomía exploradora, las complicaciones dependerán principalmente del diagnóstico definitivo, el sitio y la causa de perforación, y los procedimientos que se realicen, además de las propias de laparotomía como eventración o dehiscencia de sutura de la pared abdominal, así como complicaciones pulmonares y cardiovasculares. En caso de perforación de intestino delgado, si se hiciera anastomosis (conexión del intestino), existe el riesgo de falla de anastomosis, y en caso, menos probable según la TAC, de perforación de colon, debido al gran perímetro abdominal y panículo adiposo, la necrosis de la colostomía o su retracción.'),
(5, 'APENDICE LAP', '', 'En el caso específico de la apendicectomía laparoscópica, los riesgos específicos más relevantes, aunque muy poco frecuentes, son el sangrado y la fístula fecal o de muñón apendícula, la infección de la herida y muy remotamente, la formación de abscesos intraabdominales (que cuando se presentan, suelen hacerlo alrededor de los 15 días de operado).'),
(6, 'COLE ABIERTA', '', 'En el caso específico de la colecistectomía, los riesgos específicos más relevantes, aunque muy poco frecuentes, son la estenosis, ligadura, fístula o sección de la vía biliar.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinadores`
--

CREATE TABLE `coordinadores` (
  `NoEMPLEADO` varchar(10) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `PRIMER_APELLIDO` varchar(50) NOT NULL,
  `SEGUNDO_APELLIDO` varchar(50) DEFAULT NULL,
  `SEXO` varchar(1) NOT NULL,
  `CURP` varchar(20) NOT NULL,
  `ESPECIALIDAD` varchar(50) NOT NULL,
  `CEDULA_PROFESIONAL` varchar(10) NOT NULL,
  `CEDULA_ESPECIALIDAD` varchar(10) NOT NULL,
  `COORDINACION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coordinadores`
--

INSERT INTO `coordinadores` (`NoEMPLEADO`, `NOMBRE`, `PRIMER_APELLIDO`, `SEGUNDO_APELLIDO`, `SEXO`, `CURP`, `ESPECIALIDAD`, `CEDULA_PROFESIONAL`, `CEDULA_ESPECIALIDAD`, `COORDINACION`) VALUES
('000002', 'Marcus', 'Andrews', '', 'H', 'REPD991209HVZYTG00', 'Cirujano', 'MED-000000', 'MED-000000', 'CIRUGIA GENERAL'),
('000003', 'Neil', 'Melendez', '', 'H', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'MEDICINA INTERNA'),
('000004', 'Audrey', 'Lim', '', 'M', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'URGENCIAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derechohabientes`
--

CREATE TABLE `derechohabientes` (
  `NoREGISTRO` int(11) NOT NULL,
  `CEDULA` varchar(10) NOT NULL,
  `TIPO_BENEFICIARIO` varchar(2) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `PRIMER_APELLIDO` varchar(50) NOT NULL,
  `SEGUNDO_APELLIDO` varchar(50) DEFAULT 'No',
  `EDAD` int(3) NOT NULL,
  `SEXO` varchar(1) NOT NULL,
  `UNIDAD` varchar(50) NOT NULL,
  `DOMICILIO` varchar(255) NOT NULL,
  `TELEFONO1` varchar(10) NOT NULL,
  `TELEFONO2` varchar(10) DEFAULT 'No',
  `DIAGNOSTICO` varchar(255) NOT NULL,
  `CIRUGIA` varchar(255) NOT NULL,
  `FECHA_REGISTRO` date NOT NULL,
  `FECHA_CIRUGIA` date DEFAULT NULL,
  `SALA` varchar(50) DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `NoEMPLEADO` varchar(10) NOT NULL,
  `MEDICO` varchar(150) NOT NULL,
  `COORDINADOR` varchar(150) NOT NULL,
  `OBSERVACIONES` varchar(255) DEFAULT 'Ninguna'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `derechohabientes`
--

INSERT INTO `derechohabientes` (`NoREGISTRO`, `CEDULA`, `TIPO_BENEFICIARIO`, `NOMBRE`, `PRIMER_APELLIDO`, `SEGUNDO_APELLIDO`, `EDAD`, `SEXO`, `UNIDAD`, `DOMICILIO`, `TELEFONO1`, `TELEFONO2`, `DIAGNOSTICO`, `CIRUGIA`, `FECHA_REGISTRO`, `FECHA_CIRUGIA`, `SALA`, `HORA`, `NoEMPLEADO`, `MEDICO`, `COORDINADOR`, `OBSERVACIONES`) VALUES
(1, 'LORJ510701', '30', 'Laura Elizabeth', 'Lopez', 'Millan', 60, 'M', 'Baja California Sur', 'C. 23 #211 X 2 Y 4 Sta Maria Chuburna, Merida, Yuc.', '9999307971', '9991730915', 'CANCER DE MAMA DERECHA', 'CUADRANTECTOMIA MAMA DER + DRA Y SIMETRIZACION DE MAMA IZQ', '2023-03-09', '2023-05-20', 'Sala 1', '15:00:00', '100000', 'Dr. Shaun Murphy', 'Dr. Marcus Andrews', 'ESTA ES UNA OBSERVACIÓN'),
(2, 'FAAR800824', '20', 'Rocio', 'Franco', 'Aguilar', 40, 'M', 'Quintana Roo', 'Colonia Solidaridad, Mza 165, Lote 11, Calle 2 Aguadas, Entre Sarchay Y Nicolas Bravo', '9831106904', '983113711', 'CA MAMA IZQUIERDA', 'MASTECTOMIA RADICAL MODIFICADA IZQUIERDA', '2023-03-09', NULL, '', '00:00:00', '100000', 'Dr. Shaun Murphy', 'Dr. Marcus Andrews', 'ESTO ES UNA OBSERVACION'),
(3, 'LOOB640203', '20', 'Berenice', 'Lopez', 'Ovando', 57, 'M', 'Tabasco', 'Mzna 11, Lote 11 145 B, Altos Colonia Fovisste', '9331208540', '', 'CA ENDOMETRIO', 'RUTINA DE ENDOMETRIO', '2023-03-09', '2023-05-21', 'Sala 2', '18:00:00', '100000', 'Dr. Shaun Murphy', 'Dr. Marcus Andrews', ''),
(4, 'SOFG511222', '30', 'Rosalinda', 'Carrillo', 'Gil', 69, 'M', 'Yucatán', 'Calle 24 X 25, 193 Centro', '9997121535', '', 'CA EPIDERMOIDE EN AREA GLUTEA DERECHA', 'GLUTECTOMIA DERECHA  + RECONTRUCCCION POR CPYR', '2023-03-09', NULL, NULL, '00:00:00', '200000', 'Dra. Claire Browne', 'Dr. Marcus Andrews', ''),
(5, 'LOTM871205', '20', 'Maria Magdalena', 'Lopez', 'Tiburcio', 33, 'M', 'Yucatán', 'C 138b, 1318, X 99 Y 101 Girasoles De Opichen', '9993316506', '', 'CA TIROIDES RECURRENTE A CUELLO DERECHO', 'DISECCION RADICAL MODIFICADA CUELLO DERECHO', '2023-03-09', NULL, NULL, '00:00:00', '200000', 'Dra. Claire Browne ', 'Dr. Marcus Andrews ', NULL),
(6, 'OOCT551114', '91', 'Teresa', 'Osorio', 'Contreras ', 65, 'M', 'Yucatán', 'Calle 21 Num 357 X 60 Y 12 Fco Malaga', '9991393644', '9999810499', 'CA OVARIO CON PB AT A NIVEL COLON', 'LAPAROTOMIA EXPLORADORA + RESECCION ANTERIOR + COLORECTO ANASTOMOSIS VS COLOSTOMIA DERIVATIVA', '2023-03-09', NULL, NULL, '00:00:00', '200000', 'Dra. Claire Browne ', 'Dr. Marcus Andrews ', NULL),
(7, 'MACR570201', '30', 'Rita Elena', 'Tovar', 'Zapata', 62, 'M', 'Yucatán', 'Calle 93 Num 481 X 21 Y 34 Fco Joya, Paseo De Opichen', '9992570922', '', 'SOSPECHA MASTOGRAFICA B4 MAMA IZQUIERDA', 'BIOPSIA GUIADA POR ARPON', '2023-03-09', NULL, NULL, '00:00:00', '300000', 'Dra. Morgan Reznick', 'Dr. Marcus Andrews', ''),
(8, 'MOSJ630512', '50', 'Rosendo', 'Montero ', 'Montero ', 81, 'H', 'Yucatán', 'Calle45 Entre 6 Y 8 Col Avila Camacho', '9995457245', '', 'CA EPIDERMOIDE EN LABIO ', 'COLOCACION DE CATETER PUERTO', '2023-03-09', NULL, NULL, '00:00:00', '300000', 'Dra. Morgan Reznick ', 'Dr. Marcus Andrews ', NULL),
(9, 'ROFM530420', '91', 'Mildred Georgina', 'Rodriguez', 'Flores', 68, 'M', 'Yucatán', 'Calle 24 No 201 A X 21 Y 23, Col Miraflores', '9992233411', '', 'CA MAMA IZQUIERDA ', 'COLOCACION DE CATETER PUERTO', '2023-03-09', NULL, NULL, '00:00:00', '300000', 'Dra. Morgan Reznick ', 'Dr. Marcus Andrews ', NULL),
(10, 'BAAM960407', '31', 'Amanda Cristina', 'Diaz', 'Villalobos', 22, 'M', 'Campeche', 'Calle 24 X 25, 193 Centro', '9626372555', '', 'BOCIO MULTINODULAR', 'TIROIDECTOMIA TOTAL', '2023-03-09', NULL, NULL, '00:00:00', '400000', 'Dr. Alex Park ', 'Dr. Neil Melendez ', NULL),
(11, 'MEOR541018', '90', 'Raul Humberto', 'Mendez', 'Osorio', 66, 'H', 'Yucatán', 'Calle 37 Num 552 X 102, Col Villas ', '9991260016', '', 'CANCER PULMONAR METASTASICO', 'COLOCACION DE CATETER PUERTO', '2023-03-09', NULL, NULL, '00:00:00', '400000', 'Dr. Alex Park ', 'Dr. Neil Melendez ', NULL),
(12, 'FORE530317', '20', 'Esmeralda', 'Flores', 'Rosado', 68, 'M', 'Yucatán', 'Calle 25 Num 292, Jardines ', '9992386535', '', 'CA COLON SIGMOIDES', 'COLOCACION DE CATETER PUERTO', '2023-03-09', NULL, NULL, '00:00:00', '400000', 'Dr. Alex Park ', 'Dr. Neil Melendez ', NULL),
(13, 'FUOR590714', '40', 'Chacon', 'Campo', 'Alejandro', 57, 'H', 'Yucatán', 'Calle 29, Num 242 X 34 Y 36, Fco Montejo', '5539930544', '', 'CA COLON TRANSVERSO', 'COLOCACION DE CATETER PUERTO', '2023-03-09', NULL, NULL, '00:00:00', '500000', 'Dr. Jared Kalu ', 'Dr. Neil Melendez ', NULL),
(14, 'CAME850404', '80', 'Curran', 'Chan', 'Ciara', 12, 'M', 'Quintana Roo', 'Calle Jacinto Canek Sn Entre Primavera Y Benito Juarez', '9997118604', '', 'FIBROLIPOMA RECIDIVANTE', 'EXPLORACION + RESECCION AMPLIA ', '2023-03-09', NULL, NULL, '00:00:00', '500000', 'Dr. Jared Kalu ', 'Dr. Neil Melendez ', ''),
(15, 'CATL810130', '20', 'Ligia Margarita', 'Canto', 'Turriza', 40, 'M', 'Yucatán', 'Calle 19 Num 322 X 48 Y 48 A, Fco Los Pinos, Tizimin', '9861002798', '', 'NODULO TIROIDEO IZQUIERDO', 'TIROIDECTOMIA RESIDUAL', '2023-03-09', NULL, NULL, '00:00:00', '500000', 'Dr. Jared Kalu ', 'Dr. Neil Melendez ', NULL),
(16, 'DECM430906', '30', 'Mirna', 'Balan', 'Castillo', 73, 'M', 'Yucatán', 'Calle 5a Nun 256 X 34 Y 34 A, Col Pensiones', '9992006573', '', 'TUMOR RENAL DERECHO', 'NEFERECTOMIA RADICAL DERECHA', '2023-03-09', NULL, NULL, '00:00:00', '600000', 'Dra. Jordan Allen ', 'Dr. Neil Melendez ', NULL),
(17, 'MELD400827', '70', 'Luis Enrique', 'Sosa', 'Medina', 50, 'H', 'Yucatán', 'Calle 20 No 204 X 21, Col Mira Flores', '9991271588', '', 'CARCINOMATOSIS PERITONEAL.', 'TOMA DE BIOPSIA POR LAPAROSCOPIA', '2023-03-09', NULL, NULL, '00:00:00', '600000', 'Dra. Jordan Allen ', 'Dr. Neil Melendez ', NULL),
(18, 'PIPM601216', '30', 'Mildred', 'Acosta', 'Cervantes', 59, 'M', 'Yucatán', 'Calle 62 A No 501l X 93 Y 95 Centro', '9992770089', '', 'CA DE MAMA', 'MASTECTOMIA RADICAL DE MAMA DERECHA', '2023-03-09', NULL, NULL, '00:00:00', '600000', 'Dra. Jordan Allen ', 'Dr. Neil Melendez ', NULL),
(19, 'FUJY890802', '50', 'Juan Gualberto', 'Fuentes', 'Gomez', 63, 'H', 'Yucatán', 'Calle 16 Por 21 Num 99-a Chuminopolis', '9992767661', '', 'CANCER GASTRICO', 'GASTROYEYUNO ANASTOMOSIS', '2023-03-09', NULL, NULL, '00:00:00', '700000', 'Dra. Carly Lever ', 'Dra. Audrey Lim ', NULL),
(20, 'YUCI800922', '20', 'Irma Aurora', 'Yupit', 'Chan', 41, 'M', 'Yucatán', 'Calle 27 A # 217 X 56 Y 56 Bis San Carlos ', '9851086585', '', 'TUMOR PARACOLONICO ', 'LAPARATOMIA EXPLORADORA ', '2023-03-09', NULL, NULL, '00:00:00', '700000', 'Dra. Carly Lever ', 'Dra. Audrey Lim ', NULL),
(21, 'GRT30RE4RT', '10', 'Fulanito', 'Perengano', 'Mendez', 23, 'H', 'Yucatán', 'Calle Mira Flores 56 X 68', '9341237680', '', 'NINGUNO', 'SOLO ES UNA PRUEBA', '2023-04-26', NULL, NULL, '00:00:00', '000001', 'Dr. Diego Reyes Pitalua', 'Dr. Marcus Andrews', NULL),
(22, 'GRT30RE4RT', '10', 'Fulanito', 'Perengano', 'Mendez', 23, 'H', 'Tamaulipas', 'Calle Mira Flores 56 X 68', '9341237680', '', 'NINGUNO', 'NINGUNA', '2023-05-28', NULL, NULL, NULL, '000001', 'Dr. Diego Reyes Pitalua', 'Dr. Marcus Andrews', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HojadeOperaciones`
--

CREATE TABLE `HojadeOperaciones` (
  `NoREGISTRO` int(11) NOT NULL,
  `NoCAMA` varchar(4) DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `DURACION` varchar(2) DEFAULT NULL,
  `ANESTESIA` varchar(10) DEFAULT NULL,
  `POSICION` varchar(50) DEFAULT NULL,
  `S_REQUERIDO` varchar(50) DEFAULT NULL,
  `INSTRUMENTAL` varchar(255) DEFAULT NULL,
  `AYUDANTE1` varchar(150) DEFAULT NULL,
  `AYUDANTE2` varchar(150) DEFAULT NULL,
  `AYUDANTE3` varchar(150) DEFAULT NULL,
  `ANESTESIOLOGO` varchar(150) DEFAULT NULL,
  `D_POSTOPERATORIO` varchar(255) DEFAULT NULL,
  `D_ANESTESIA` varchar(2) DEFAULT NULL,
  `T_SANGRE` varchar(10) DEFAULT NULL,
  `FACTOR_RH` varchar(10) DEFAULT NULL,
  `OBSERVACIONES` varchar(255) DEFAULT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `HojadeOperaciones`
--

INSERT INTO `HojadeOperaciones` (`NoREGISTRO`, `NoCAMA`, `HORA`, `DURACION`, `ANESTESIA`, `POSICION`, `S_REQUERIDO`, `INSTRUMENTAL`, `AYUDANTE1`, `AYUDANTE2`, `AYUDANTE3`, `ANESTESIOLOGO`, `D_POSTOPERATORIO`, `D_ANESTESIA`, `T_SANGRE`, `FACTOR_RH`, `OBSERVACIONES`, `DESCRIPCION`) VALUES
(1, '100', '12:00:00', '3', 'GENERAL', 'DECÚBITO DORSAL', 'ANESTESIOLOGIA', 'SEDAS LIBRES 2 CEROS, VICRYL 2 Y 3 CEROS, NAYLON 2 CEROS, NYLON 3 CEROS.', '', '', '', '', '', '3', 'O', 'NEGATIVO', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JustificacionTecnicoMedica`
--

CREATE TABLE `JustificacionTecnicoMedica` (
  `NoREGISTRO` int(11) NOT NULL,
  `ASUNTO` varchar(100) NOT NULL,
  `SERVICIO` varchar(100) NOT NULL,
  `JUSTIFICACION` longtext NOT NULL,
  `MOTIVO` varchar(100) NOT NULL,
  `PERIODO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `JustificacionTecnicoMedica`
--

INSERT INTO `JustificacionTecnicoMedica` (`NoREGISTRO`, `ASUNTO`, `SERVICIO`, `JUSTIFICACION`, `MOTIVO`, `PERIODO`) VALUES
(1, 'ADQUISISCIÓN DE STENT DE ENDOPIELOLITOTOMIA 7FR/14FR X 24 CM', 'STENT DE ENDOPIELITOTOMIA 7FR/14FR X 24CM', 'PACIENTE MASCULINO DE 14 AÑOS DE EDAD CON DIAGNOSTICO DE ESTENOSIS UNION PIELOURETERAL IZQUIERDA, REQUIERE CIRUGÍA DE ENDOPIELITOTOMÍA LASER INTERNA + COLOCACIÓN DE STENT DE ENDOPIELITOTOMIA 7FR/14FR X 24CM PARA EVITAR LA FORMACIÓN DE UNA NUEVA ESTENOSIS Y PRESERVAR LA FUNCION DE ESE RIÑON.\r\nSE SOLICITA LA ADQUISICIÓN DEL STENT ANTES MECIONADO PARA BENEFICIO DEL PACIENTE, YA QUE NO CONTAMOS CON ESE MATERIAL EN ESTA UNIDAD REGIONAL.', 'FALTA DE RECURSOS MATERIALES', '3 STENTS DE ENDOPIELITOTOMIA DE 7FR-14FR X 24 CM.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `NoEMPLEADO` varchar(10) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `PRIMER_APELLIDO` varchar(50) NOT NULL,
  `SEGUNDO_APELLIDO` varchar(50) DEFAULT NULL,
  `SEXO` varchar(1) NOT NULL,
  `CURP` varchar(20) NOT NULL,
  `ESPECIALIDAD` varchar(50) NOT NULL,
  `CEDULA_PROFESIONAL` varchar(10) NOT NULL,
  `CEDULA_ESPECIALIDAD` varchar(10) NOT NULL,
  `AREA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`NoEMPLEADO`, `NOMBRE`, `PRIMER_APELLIDO`, `SEGUNDO_APELLIDO`, `SEXO`, `CURP`, `ESPECIALIDAD`, `CEDULA_PROFESIONAL`, `CEDULA_ESPECIALIDAD`, `AREA`) VALUES
('000001', 'Diego', 'Reyes', 'Pitalua', 'H', 'REPD991209HVZYTG00', 'Cirujano', 'CIRJ1234', 'CIRJ1234', 'CIRUGIA GENERAL'),
('100000', 'Shaun', 'Murphy', '', 'H', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'CIRUGIA GENERAL'),
('200000', 'Claire', 'Browne', '', 'M', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'CIRUGIA GENERAL'),
('300000', 'Morgan', 'Reznick', '', 'M', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'CIRUGIA GENERAL'),
('400000', 'Alex', 'Park', '', 'H', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'MEDICINA INTERNA'),
('500000', 'Jared', 'Kalu', '', 'H', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'MEDICINA INTERNA'),
('600000', 'Jordan', 'Allen', '', 'M', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'MEDICINA INTERNA'),
('700000', 'Carly', 'Lever', '', 'M', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'URGENCIAS'),
('800000', 'Asher', 'Wolke', '', 'H', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'URGENCIAS'),
('900000', 'Enrique', 'Guerin', '', 'H', '000000000000000000', 'Cirujano', 'MED-000000', 'MED-000000', 'URGENCIAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdendeIngreso`
--

CREATE TABLE `OrdendeIngreso` (
  `NoREGISTRO` int(11) NOT NULL,
  `INGRESO` date DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `SERVICIO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `OrdendeIngreso`
--

INSERT INTO `OrdendeIngreso` (`NoREGISTRO`, `INGRESO`, `HORA`, `SERVICIO`) VALUES
(1, '2023-04-24', '12:00:00', 'CIRUGÍA GENERAL'),
(2, NULL, NULL, 'CIRUGÍA GENERAL'),
(4, NULL, NULL, 'CIRUGÍA GENERAL'),
(5, '2023-06-10', NULL, 'CIRUGÍA GENERAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SolicituddeAnalisis`
--

CREATE TABLE `SolicituddeAnalisis` (
  `NoREGISTRO` int(11) NOT NULL,
  `ESTUDIOS` longtext DEFAULT NULL,
  `ESTUDIOS_OTROS` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `SolicituddeAnalisis`
--

INSERT INTO `SolicituddeAnalisis` (`NoREGISTRO`, `ESTUDIOS`, `ESTUDIOS_OTROS`) VALUES
(1, 'CALCIO, TIEMPO DE COAGULACION, EXUDADO FARINGEO, ACIDO URICO, COLESTEROL TOTAL', ''),
(2, 'BIOMETRIA HEMATICA, EXUDADO FARINGEO', 'OTRO ESTUDIO'),
(3, 'BACTERIOSCOPIA GENITAL, REACCIONES FEBRILES, REACCIONES LUETICA', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SolicituddeInterconsulta`
--

CREATE TABLE `SolicituddeInterconsulta` (
  `NoREGISTRO` int(11) NOT NULL,
  `SERVICIO` varchar(150) NOT NULL,
  `MOTIVO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `SolicituddeInterconsulta`
--

INSERT INTO `SolicituddeInterconsulta` (`NoREGISTRO`, `SERVICIO`, `MOTIVO`) VALUES
(1, 'MEDICINA INTERNA', 'ELECTROCARDIOGRAMA Y VALORACION PREOPERATORIA'),
(2, 'MEDICINA INTERNA', 'VALORACION PREOPERATORIA'),
(4, 'MEDICINA INTERNA', 'ELECTROCARDIOGRAMA Y VALORACION PREOPERATORIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SolicituddeTransfusion`
--

CREATE TABLE `SolicituddeTransfusion` (
  `NoREGISTRO` int(11) NOT NULL,
  `MOTIVO` varchar(50) NOT NULL,
  `MOTIVO2` varchar(150) DEFAULT NULL,
  `SITIO` varchar(50) DEFAULT NULL,
  `HB` varchar(50) DEFAULT NULL,
  `HTO` varchar(50) DEFAULT NULL,
  `TRANSFUSION_PREVIA` varchar(2) DEFAULT NULL,
  `FCH_ULT_TRANSFUSION` date DEFAULT NULL,
  `REACCIONES` varchar(150) DEFAULT NULL,
  `GLOBULOS_ROJOS` varchar(50) DEFAULT NULL,
  `PLASMA_FRESCO` varchar(50) DEFAULT NULL,
  `PLASMA_FRESCO_C` varchar(50) DEFAULT NULL,
  `CONCENTRADO_PLAQUETARIO` varchar(50) DEFAULT NULL,
  `SANGRE_TOTAL` varchar(50) DEFAULT NULL,
  `OTROS` varchar(50) DEFAULT NULL,
  `JUSTIFICACION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `SolicituddeTransfusion`
--

INSERT INTO `SolicituddeTransfusion` (`NoREGISTRO`, `MOTIVO`, `MOTIVO2`, `SITIO`, `HB`, `HTO`, `TRANSFUSION_PREVIA`, `FCH_ULT_TRANSFUSION`, `REACCIONES`, `GLOBULOS_ROJOS`, `PLASMA_FRESCO`, `PLASMA_FRESCO_C`, `CONCENTRADO_PLAQUETARIO`, `SANGRE_TOTAL`, `OTROS`, `JUSTIFICACION`) VALUES
(1, 'Ordinario', '', 'Sala 1', '3%', '2.5%', 'Sí', '2022-10-20', 'Urticaria, Calosfrío, Cefalea, Hipertermia', '2 UPG', '', '', '', '', '', ''),
(3, 'Ordinario', NULL, 'Quirófano 2', '', '', 'No', NULL, 'Ninguna', '3 UPG', '', '', '', '', '', ''),
(2, 'Ordinario', NULL, 'Quirófano 3', '', '', 'No', NULL, 'Ninguna', '2 UPG', '2 UPG', '1 UPG', '', '', '', ''),
(4, 'Urgente', NULL, 'Quirófano 2', '', '', 'Sí', '2022-12-12', 'Urticaria, Calosfrío', '2 UPG', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NoEMPLEADO` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NoEMPLEADO`, `nombre`, `apellido1`, `apellido2`, `contrasenia`, `usuario`) VALUES
('000000', 'Angel Abraham', 'Alcala', 'Caballero', 'isssteMIDmx', 'Administrador'),
('000001', 'Diego', 'Reyes', 'Pitalua', '123', 'Administrador'),
('000002', 'Marcus', 'Andrews', '', 'isssteMIDmx', 'Coordinador'),
('000003', 'Neil', 'Melendez', '', 'isssteMIDmx', 'Coordinador'),
('000004', 'Audrey', 'Lim', '', 'isssteMIDmx', 'Coordinador'),
('100000', 'Shaun', 'Murphy', '', 'isssteMIDmx', 'Medico'),
('200000', 'Claire', 'Browne', '', 'isssteMIDmx', 'Medico'),
('300000', 'Morgan', 'Reznick', '', 'isssteMIDmx', 'Medico'),
('400000', 'Alex', 'Park', '', 'isssteMIDmx', 'Medico'),
('500000', 'Jared', 'Kalu', '', 'isssteMIDmx', 'Medico'),
('600000', 'Jordan', 'Allen', '', 'isssteMIDmx', 'Medico'),
('700000', 'Carly', 'Lever', '', 'isssteMIDmx', 'Medico'),
('800000', 'Asher', 'Wolke', '', 'isssteMIDmx', 'Medico'),
('900000', 'Enrique', 'Guerin', '', 'isssteMIDmx', 'Medico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `CartadeConsentimiento`
--
ALTER TABLE `CartadeConsentimiento`
  ADD KEY `NoREGISTRO` (`NoREGISTRO`),
  ADD KEY `T_CONSENTIMIENTO` (`T_CONSENTIMIENTO`);

--
-- Indices de la tabla `consentimientos`
--
ALTER TABLE `consentimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coordinadores`
--
ALTER TABLE `coordinadores`
  ADD PRIMARY KEY (`NoEMPLEADO`);

--
-- Indices de la tabla `derechohabientes`
--
ALTER TABLE `derechohabientes`
  ADD PRIMARY KEY (`NoREGISTRO`);

--
-- Indices de la tabla `HojadeOperaciones`
--
ALTER TABLE `HojadeOperaciones`
  ADD KEY `NoREGISTRO` (`NoREGISTRO`);

--
-- Indices de la tabla `JustificacionTecnicoMedica`
--
ALTER TABLE `JustificacionTecnicoMedica`
  ADD KEY `NoREGISTRO` (`NoREGISTRO`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`NoEMPLEADO`);

--
-- Indices de la tabla `OrdendeIngreso`
--
ALTER TABLE `OrdendeIngreso`
  ADD KEY `NoREGISTRO` (`NoREGISTRO`);

--
-- Indices de la tabla `SolicituddeAnalisis`
--
ALTER TABLE `SolicituddeAnalisis`
  ADD KEY `NoREGISTRO` (`NoREGISTRO`);

--
-- Indices de la tabla `SolicituddeInterconsulta`
--
ALTER TABLE `SolicituddeInterconsulta`
  ADD KEY `NoREGISTRO` (`NoREGISTRO`);

--
-- Indices de la tabla `SolicituddeTransfusion`
--
ALTER TABLE `SolicituddeTransfusion`
  ADD KEY `NoREGISTRO` (`NoREGISTRO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NoEMPLEADO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `consentimientos`
--
ALTER TABLE `consentimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `derechohabientes`
--
ALTER TABLE `derechohabientes`
  MODIFY `NoREGISTRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `CartadeConsentimiento`
--
ALTER TABLE `CartadeConsentimiento`
  ADD CONSTRAINT `cartadeconsentimiento_ibfk_1` FOREIGN KEY (`NoREGISTRO`) REFERENCES `derechohabientes` (`NoREGISTRO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartadeconsentimiento_ibfk_2` FOREIGN KEY (`T_CONSENTIMIENTO`) REFERENCES `consentimientos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `HojadeOperaciones`
--
ALTER TABLE `HojadeOperaciones`
  ADD CONSTRAINT `hojadeoperaciones_ibfk_1` FOREIGN KEY (`NoREGISTRO`) REFERENCES `derechohabientes` (`NoREGISTRO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `JustificacionTecnicoMedica`
--
ALTER TABLE `JustificacionTecnicoMedica`
  ADD CONSTRAINT `justificaciontecnicomedica_ibfk_1` FOREIGN KEY (`NoREGISTRO`) REFERENCES `derechohabientes` (`NoREGISTRO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `OrdendeIngreso`
--
ALTER TABLE `OrdendeIngreso`
  ADD CONSTRAINT `ordendeingreso_ibfk_1` FOREIGN KEY (`NoREGISTRO`) REFERENCES `derechohabientes` (`NoREGISTRO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `SolicituddeAnalisis`
--
ALTER TABLE `SolicituddeAnalisis`
  ADD CONSTRAINT `solicituddeanalisis_ibfk_1` FOREIGN KEY (`NoREGISTRO`) REFERENCES `derechohabientes` (`NoREGISTRO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `SolicituddeInterconsulta`
--
ALTER TABLE `SolicituddeInterconsulta`
  ADD CONSTRAINT `solicituddeinterconsulta_ibfk_1` FOREIGN KEY (`NoREGISTRO`) REFERENCES `derechohabientes` (`NoREGISTRO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `SolicituddeTransfusion`
--
ALTER TABLE `SolicituddeTransfusion`
  ADD CONSTRAINT `solicituddetransfusion_ibfk_1` FOREIGN KEY (`NoREGISTRO`) REFERENCES `derechohabientes` (`NoREGISTRO`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
