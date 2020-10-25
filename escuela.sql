-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-08-2020 a las 00:16:40
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_Admin` varchar(30) NOT NULL,
  `Puesto_laboral` varchar(30) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_Usuario` varchar(70) NOT NULL,
  `Matricula` varchar(20) DEFAULT NULL,
  `ID_Ciclo` int(11) DEFAULT NULL,
  `NombreTutor` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Estado_Economico` varchar(15) DEFAULT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `ID_Asignatura` int(50) NOT NULL,
  `Nombre_Asignatura` varchar(30) NOT NULL,
  `ID_LicActiva` int(11) NOT NULL,
  `ID_Lincenciatura` int(10) DEFAULT NULL,
  `periodos` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `ID_Calificacion` int(11) NOT NULL,
  `ID_LicActiva` int(11) NOT NULL,
  `ID_Matricula` varchar(50) NOT NULL,
  `ID_CargaAcademica` int(11) NOT NULL,
  `ID_Asignatura` varchar(50) NOT NULL,
  `Cal_Final` varchar(20) NOT NULL,
  `Peso` varchar(20) NOT NULL,
  `Porcentaje` varchar(30) NOT NULL,
  `Estado_Calificacion` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_academica`
--

CREATE TABLE `carga_academica` (
  `ID_CargaAcademica` int(11) NOT NULL,
  `ID_Profesor` varchar(30) NOT NULL,
  `ID_LicActiva` int(11) NOT NULL,
  `ID_Asignatura` int(11) NOT NULL,
  `ID_Ciclo` int(11) NOT NULL,
  `Creditos` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `ID_Ciclo` int(11) NOT NULL,
  `fecha_inicio` varchar(30) NOT NULL,
  `fecha_fin` varchar(30) NOT NULL,
  `estatus` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generaciones`
--

CREATE TABLE `generaciones` (
  `id_generacion` int(15) NOT NULL,
  `fecha_inicio` varchar(30) NOT NULL,
  `fecha_fin` varchar(30) NOT NULL,
  `ciclos` int(10) NOT NULL,
  `estatus` int(3) NOT NULL,
  `ID_Lincenciatura` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generaciones-ciclos`
--

CREATE TABLE `generaciones-ciclos` (
  `id_generacion_ciclo` int(10) NOT NULL,
  `ID_Ciclo` int(10) NOT NULL,
  `id_generacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituto`
--

CREATE TABLE `instituto` (
  `id_instituto` int(10) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `tipo_de_institucion` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licenciatura`
--

CREATE TABLE `licenciatura` (
  `ID_Lincenciatura` int(11) NOT NULL,
  `NombreLic` varchar(100) NOT NULL,
  `periodos` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licenciatura_activa`
--

CREATE TABLE `licenciatura_activa` (
  `ID_LicActiva` int(11) NOT NULL,
  `ID_Ciclo` int(11) NOT NULL,
  `ID_Lincenciatura` int(11) NOT NULL,
  `id_periodo` int(5) NOT NULL,
  `grupo` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `ID_Profesor` varchar(70) NOT NULL,
  `ID_Ciclo` int(11) DEFAULT NULL,
  `Num_Contrato` varchar(50) DEFAULT NULL,
  `Especialidad` varchar(20) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `Titulo` varchar(20) DEFAULT NULL,
  `Grado_Estudio` varchar(100) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parciales`
--

CREATE TABLE `parciales` (
  `ID_Parcial` varchar(30) NOT NULL,
  `ID_Calificacion` int(11) NOT NULL,
  `Tipo_Calificacion` varchar(50) NOT NULL,
  `Calificacion` varchar(20) NOT NULL,
  `Porcentaje` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id_periodos` int(10) NOT NULL,
  `periodo_nombre` varchar(50) NOT NULL,
  `periodo_valor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `ID_Status` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` varchar(70) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `ApellidoPat` varchar(20) DEFAULT NULL,
  `ApellidoMat` varchar(20) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Genero` varchar(15) DEFAULT NULL,
  `Contrasena` varchar(70) NOT NULL,
  `status` text,
  `correo` varchar(50) DEFAULT NULL,
  `cambio` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`ID_Asignatura`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`ID_Calificacion`);

--
-- Indices de la tabla `carga_academica`
--
ALTER TABLE `carga_academica`
  ADD PRIMARY KEY (`ID_CargaAcademica`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`ID_Ciclo`);

--
-- Indices de la tabla `generaciones`
--
ALTER TABLE `generaciones`
  ADD PRIMARY KEY (`id_generacion`);

--
-- Indices de la tabla `generaciones-ciclos`
--
ALTER TABLE `generaciones-ciclos`
  ADD PRIMARY KEY (`id_generacion_ciclo`);

--
-- Indices de la tabla `licenciatura`
--
ALTER TABLE `licenciatura`
  ADD PRIMARY KEY (`ID_Lincenciatura`);

--
-- Indices de la tabla `licenciatura_activa`
--
ALTER TABLE `licenciatura_activa`
  ADD PRIMARY KEY (`ID_LicActiva`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`ID_Profesor`);

--
-- Indices de la tabla `parciales`
--
ALTER TABLE `parciales`
  ADD PRIMARY KEY (`ID_Parcial`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id_periodos`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_Status`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `ID_Asignatura` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `ID_Ciclo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generaciones`
--
ALTER TABLE `generaciones`
  MODIFY `id_generacion` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generaciones-ciclos`
--
ALTER TABLE `generaciones-ciclos`
  MODIFY `id_generacion_ciclo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `licenciatura`
--
ALTER TABLE `licenciatura`
  MODIFY `ID_Lincenciatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `licenciatura_activa`
--
ALTER TABLE `licenciatura_activa`
  MODIFY `ID_LicActiva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id_periodos` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
