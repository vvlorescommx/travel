-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2017 a las 17:08:19
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 5.6.30-10+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `travel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asientos`
--

CREATE TABLE `Asientos` (
  `idAsiento` int(11) NOT NULL,
  `idMovimiento` int(11) DEFAULT NULL,
  `descripcionAsiento` int(11) DEFAULT NULL,
  `cuenta` int(11) DEFAULT NULL,
  `debito` int(11) DEFAULT NULL,
  `credito` int(11) DEFAULT NULL,
  `referencia` int(11) DEFAULT NULL,
  `deducible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catEtiquetas`
--

CREATE TABLE `catEtiquetas` (
  `idEtiqueta` int(11) NOT NULL,
  `nombreEtiqueta` varchar(150) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL COMMENT '1 para predeterminada, 2 para personalizada'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptosViajes`
--

CREATE TABLE `conceptosViajes` (
  `id` int(11) NOT NULL,
  `idViaje` int(11) DEFAULT NULL,
  `idEtiqueta` int(11) DEFAULT NULL,
  `numDias` int(11) DEFAULT NULL,
  `numNoches` int(11) DEFAULT NULL,
  `precioUnitario` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `divisa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosCuenta`
--

CREATE TABLE `estadosCuenta` (
  `idMovimiento` int(11) NOT NULL,
  `descripcionMovimiento` int(11) DEFAULT NULL,
  `Fecha` int(11) DEFAULT NULL,
  `Folio` int(11) DEFAULT NULL,
  `depositoPago` int(11) DEFAULT NULL,
  `comprobación` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `etiquetaPersonal` int(11) DEFAULT NULL,
  `facturaAsociada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturasAsignadas`
--

CREATE TABLE `facturasAsignadas` (
  `id` int(11) NOT NULL,
  `UUID` int(11) DEFAULT NULL,
  `rfcEmisor` int(11) DEFAULT NULL,
  `monto` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `idMensaje` int(11) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`idMensaje`, `ruta`, `mensaje`) VALUES
(1, '/', 'BIENVENIDO'),
(2, '/login', 'INICIO DE SESIÓN'),
(3, '/autorizaciones/solicitud', 'SOLICITUD DE GASTOS DE VIAJE'),
(4, '/autorizaciones/creacionpsv', 'CREACIÓN DE PROYECTOS, SUBPROYECTOS Y VIAJES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_26_152201_create_Asientos_table', 0),
('2017_05_26_152201_create_Proyectos_table', 0),
('2017_05_26_152201_create_Subproyectos_table', 0),
('2017_05_26_152201_create_Usuarios_table', 0),
('2017_05_26_152201_create_Viajes_table', 0),
('2017_05_26_152201_create_catEtiquetas_table', 0),
('2017_05_26_152201_create_conceptosViajes_table', 0),
('2017_05_26_152201_create_estadosCuenta_table', 0),
('2017_05_26_152201_create_facturasAsignadas_table', 0),
('2017_05_26_152201_create_password_resets_table', 0),
('2017_05_26_152201_create_users_table', 0),
('2017_05_26_152203_add_foreign_keys_to_Viajes_table', 0),
('2017_05_26_175336_create_Asientos_table', 0),
('2017_05_26_175336_create_Proyectos_table', 0),
('2017_05_26_175336_create_Subproyectos_table', 0),
('2017_05_26_175336_create_Usuarios_table', 0),
('2017_05_26_175336_create_Viajes_table', 0),
('2017_05_26_175336_create_catEtiquetas_table', 0),
('2017_05_26_175336_create_conceptosViajes_table', 0),
('2017_05_26_175336_create_estadosCuenta_table', 0),
('2017_05_26_175336_create_facturasAsignadas_table', 0),
('2017_05_26_175336_create_mensajes_table', 0),
('2017_05_26_175336_create_password_resets_table', 0),
('2017_05_26_175336_create_users_table', 0),
('2017_05_26_175338_add_foreign_keys_to_Viajes_table', 0),
('2017_05_26_180454_create_Asientos_table', 0),
('2017_05_26_180454_create_Proyectos_table', 0),
('2017_05_26_180454_create_Subproyectos_table', 0),
('2017_05_26_180454_create_Usuarios_table', 0),
('2017_05_26_180454_create_Viajes_table', 0),
('2017_05_26_180454_create_catEtiquetas_table', 0),
('2017_05_26_180454_create_conceptosViajes_table', 0),
('2017_05_26_180454_create_estadosCuenta_table', 0),
('2017_05_26_180454_create_facturasAsignadas_table', 0),
('2017_05_26_180454_create_mensajes_table', 0),
('2017_05_26_180454_create_password_resets_table', 0),
('2017_05_26_180454_create_users_table', 0),
('2017_05_26_180456_add_foreign_keys_to_Viajes_table', 0),
('2017_05_30_213945_create_Asientos_table', 0),
('2017_05_30_213945_create_Proyectos_table', 0),
('2017_05_30_213945_create_Subproyectos_table', 0),
('2017_05_30_213945_create_Usuarios_table', 0),
('2017_05_30_213945_create_Viajes_table', 0),
('2017_05_30_213945_create_catEtiquetas_table', 0),
('2017_05_30_213945_create_conceptosViajes_table', 0),
('2017_05_30_213945_create_estadosCuenta_table', 0),
('2017_05_30_213945_create_facturasAsignadas_table', 0),
('2017_05_30_213945_create_mensajes_table', 0),
('2017_05_30_213945_create_password_resets_table', 0),
('2017_05_30_213945_create_users_table', 0),
('2017_05_30_213947_add_foreign_keys_to_Viajes_table', 0),
('2017_05_30_214033_create_Asientos_table', 0),
('2017_05_30_214033_create_Proyectos_table', 0),
('2017_05_30_214033_create_Subproyectos_table', 0),
('2017_05_30_214033_create_Usuarios_table', 0),
('2017_05_30_214033_create_Viajes_table', 0),
('2017_05_30_214033_create_catEtiquetas_table', 0),
('2017_05_30_214033_create_conceptosViajes_table', 0),
('2017_05_30_214033_create_estadosCuenta_table', 0),
('2017_05_30_214033_create_facturasAsignadas_table', 0),
('2017_05_30_214033_create_mensajes_table', 0),
('2017_05_30_214033_create_password_resets_table', 0),
('2017_05_30_214033_create_users_table', 0),
('2017_05_30_214035_add_foreign_keys_to_Viajes_table', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proyectos`
--

CREATE TABLE `Proyectos` (
  `idProyecto` int(11) NOT NULL,
  `nombreProyecto` varchar(150) DEFAULT NULL,
  `idResponsable` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Proyectos`
--

INSERT INTO `Proyectos` (`idProyecto`, `nombreProyecto`, `idResponsable`, `status`) VALUES
(1, 'Transportes Marva', 1, 1),
(2, 'Proyecto uno', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Subproyectos`
--

CREATE TABLE `Subproyectos` (
  `idSubproyecto` int(11) NOT NULL,
  `nombreSubproyecto` varchar(255) DEFAULT NULL,
  `idProyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Subproyectos`
--

INSERT INTO `Subproyectos` (`idSubproyecto`, `nombreSubproyecto`, `idProyecto`) VALUES
(1, 'Naviera Manzanillo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Victor Valdez', 'victor.valdez@lores.com.mx', '$2y$10$b6rfwrAEWgNbxTNtdeq24eHF1Gq6mKuLBlcEm8JtZrRFBiBzhyNJO', 'xSKLyZEgl1e9ZmmWUu33zCGtU2m7I1jV8txstK4ucqSkQkejEpPh3EShbxjz', '2017-05-19 21:55:11', '2017-05-30 01:28:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombresUsuario` varchar(50) NOT NULL,
  `apellidosUsuario` varchar(50) NOT NULL,
  `telefonoUsuario` varchar(15) NOT NULL,
  `rfcUsuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`idUsuario`, `nombresUsuario`, `apellidosUsuario`, `telefonoUsuario`, `rfcUsuario`) VALUES
(1, 'Victor', 'Landez', '11223344', 'VVLZ1245678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Viajes`
--

CREATE TABLE `Viajes` (
  `idViaje` int(11) NOT NULL,
  `idProyecto` int(11) DEFAULT NULL,
  `idSubproyecto` int(11) DEFAULT NULL,
  `idViajero` int(11) DEFAULT NULL,
  `idAcompañantes` varchar(50) DEFAULT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date DEFAULT NULL,
  `duración` int(11) DEFAULT NULL,
  `efectivoNalSolicitado` float DEFAULT NULL,
  `depositoNalSolicitado` float DEFAULT NULL,
  `totalNalSolicitado` float DEFAULT NULL,
  `efectivoNalAutorizado` float DEFAULT NULL,
  `depositoNalAutorizado` float DEFAULT NULL,
  `totalNalAutorizado` float DEFAULT NULL,
  `efectivoExtranjeroSolicitado` float DEFAULT NULL,
  `depositoExtranjeroSolicitado` double DEFAULT NULL,
  `totalExtranjeroSolicitado` float DEFAULT NULL,
  `efectivoExtranjeroAutorizado` float DEFAULT NULL,
  `depositoExtranjeroAutorizado` int(11) DEFAULT NULL,
  `totalExtranjeroAutorizado` int(11) DEFAULT NULL,
  `idSolicitante` int(11) DEFAULT NULL,
  `idAutoriza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Viajes`
--

INSERT INTO `Viajes` (`idViaje`, `idProyecto`, `idSubproyecto`, `idViajero`, `idAcompañantes`, `fechaInicio`, `fechaFin`, `duración`, `efectivoNalSolicitado`, `depositoNalSolicitado`, `totalNalSolicitado`, `efectivoNalAutorizado`, `depositoNalAutorizado`, `totalNalAutorizado`, `efectivoExtranjeroSolicitado`, `depositoExtranjeroSolicitado`, `totalExtranjeroSolicitado`, `efectivoExtranjeroAutorizado`, `depositoExtranjeroAutorizado`, `totalExtranjeroAutorizado`, `idSolicitante`, `idAutoriza`) VALUES
(1, 1, 1, 1, NULL, '2017-05-26', '2017-05-29', 4, 1000, 2000, 3000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Asientos`
--
ALTER TABLE `Asientos`
  ADD PRIMARY KEY (`idAsiento`);

--
-- Indices de la tabla `catEtiquetas`
--
ALTER TABLE `catEtiquetas`
  ADD PRIMARY KEY (`idEtiqueta`);

--
-- Indices de la tabla `conceptosViajes`
--
ALTER TABLE `conceptosViajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadosCuenta`
--
ALTER TABLE `estadosCuenta`
  ADD PRIMARY KEY (`idMovimiento`);

--
-- Indices de la tabla `facturasAsignadas`
--
ALTER TABLE `facturasAsignadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idMensaje`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `Proyectos`
--
ALTER TABLE `Proyectos`
  ADD PRIMARY KEY (`idProyecto`);

--
-- Indices de la tabla `Subproyectos`
--
ALTER TABLE `Subproyectos`
  ADD PRIMARY KEY (`idSubproyecto`),
  ADD KEY `idProyecto` (`idProyecto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `Viajes`
--
ALTER TABLE `Viajes`
  ADD PRIMARY KEY (`idViaje`),
  ADD KEY `idProyecto` (`idProyecto`),
  ADD KEY `idSubproyecto` (`idSubproyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Asientos`
--
ALTER TABLE `Asientos`
  MODIFY `idAsiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `catEtiquetas`
--
ALTER TABLE `catEtiquetas`
  MODIFY `idEtiqueta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `conceptosViajes`
--
ALTER TABLE `conceptosViajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadosCuenta`
--
ALTER TABLE `estadosCuenta`
  MODIFY `idMovimiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facturasAsignadas`
--
ALTER TABLE `facturasAsignadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Proyectos`
--
ALTER TABLE `Proyectos`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Subproyectos`
--
ALTER TABLE `Subproyectos`
  MODIFY `idSubproyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Viajes`
--
ALTER TABLE `Viajes`
  MODIFY `idViaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Viajes`
--
ALTER TABLE `Viajes`
  ADD CONSTRAINT `Viajes_ibfk_1` FOREIGN KEY (`idViaje`) REFERENCES `Usuarios` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
