-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2023 a las 06:48:06
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
-- Base de datos: `preagendaqx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SolicituddeAnalisis`
--

CREATE TABLE `SolicituddeAnalisis` (
  `NoREGISTRO` int(11) NOT NULL,
  `ESTUDIOS` longtext DEFAULT NULL,
  `ESTUDIOS_OTROS` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SolicituddeInterconsulta`
--

CREATE TABLE `SolicituddeInterconsulta` (
  `NoREGISTRO` int(11) NOT NULL,
  `SERVICIO` varchar(150) NOT NULL,
  `MOTIVO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
('000000', 'Angel Abraham', 'Alcala', 'Caballero', 'isssteMIDmx', 'Administrador');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consentimientos`
--
ALTER TABLE `consentimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `derechohabientes`
--
ALTER TABLE `derechohabientes`
  MODIFY `NoREGISTRO` int(11) NOT NULL AUTO_INCREMENT;

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
