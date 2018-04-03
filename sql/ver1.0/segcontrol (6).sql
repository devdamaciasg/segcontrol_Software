-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2018 a las 06:39:30
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `segcontrol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `razon_social` varchar(50) DEFAULT NULL,
  `nombre_contacto` varchar(30) DEFAULT NULL,
  `tipo_documento` varchar(30) DEFAULT NULL,
  `numero_documento` varchar(30) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `fijo` varchar(30) DEFAULT NULL,
  `celular1` varchar(30) DEFAULT NULL,
  `celular2` varchar(30) DEFAULT NULL,
  `email1` varchar(30) DEFAULT NULL,
  `email2` varchar(30) DEFAULT NULL,
  `email3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `id_usuario`, `razon_social`, `nombre_contacto`, `tipo_documento`, `numero_documento`, `direccion`, `ciudad`, `fijo`, `celular1`, `celular2`, `email1`, `email2`, `email3`) VALUES
(1, 3, 'razon social test', 'PRUEBA CLIENTE', 'cc', '123123', 'WER', 'WER', '2131', '123', '213', 'RWE', '234', '2342');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id_conductor` int(10) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `nombre_conductor` varchar(30) DEFAULT NULL,
  `telefono1` varchar(30) DEFAULT NULL,
  `telefono2` varchar(30) DEFAULT NULL,
  `telefono3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id_conductor`, `cedula`, `nombre_conductor`, `telefono1`, `telefono2`, `telefono3`) VALUES
(1, '1', '2', '3454', '4', '5'),
(3, '1111797508', 'miguel', '123456', '123789', '789123'),
(4, '123', '123', '123', '123', '21'),
(5, '1', '2', '2', '23', '3'),
(6, '6', '6', '6', '6', '6'),
(7, '1', '2', '3', '4', '5'),
(8, '1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(10) NOT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `tipo_documento` varchar(30) DEFAULT NULL,
  `numero_documento` varchar(30) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `fijo` varchar(30) DEFAULT NULL,
  `celular1` varchar(30) DEFAULT NULL,
  `celular2` varchar(30) DEFAULT NULL,
  `celular3` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `id_usuario`, `nombre`, `tipo_documento`, `numero_documento`, `direccion`, `ciudad`, `fijo`, `celular1`, `celular2`, `celular3`, `email`, `foto`) VALUES
(1, 1, 'MIGUEL ANGEL CLAROS', 'cc', '1', '1', '1', '1', '1', '1', '1', '1', '../recursos/fotos/avatar5.png'),
(2, 2, 'AISTENTE TEST', 'cc', '3423', '324', 'Y', 'GY', 'Y', 'GY', 'GY', 'GY', 'GY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_09_012951_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2016_08_07_145904_add_table_cms_apicustom', 2),
(5, '2016_08_07_150834_add_table_cms_dashboard', 2),
(6, '2016_08_07_151210_add_table_cms_logs', 2),
(7, '2016_08_07_151211_add_details_cms_logs', 2),
(8, '2016_08_07_152014_add_table_cms_privileges', 2),
(9, '2016_08_07_152214_add_table_cms_privileges_roles', 2),
(10, '2016_08_07_152320_add_table_cms_settings', 2),
(11, '2016_08_07_152421_add_table_cms_users', 2),
(12, '2016_08_07_154624_add_table_cms_menus_privileges', 2),
(13, '2016_08_07_154624_add_table_cms_moduls', 2),
(14, '2016_08_17_225409_add_status_cms_users', 2),
(15, '2016_08_20_125418_add_table_cms_notifications', 2),
(16, '2016_09_04_033706_add_table_cms_email_queues', 2),
(17, '2016_09_16_035347_add_group_setting', 2),
(18, '2016_09_16_045425_add_label_setting', 2),
(19, '2016_09_17_104728_create_nullable_cms_apicustom', 2),
(20, '2016_10_01_141740_add_method_type_apicustom', 2),
(21, '2016_10_01_141846_add_parameters_apicustom', 2),
(22, '2016_10_01_141934_add_responses_apicustom', 2),
(23, '2016_10_01_144826_add_table_apikey', 2),
(24, '2016_11_14_141657_create_cms_menus', 2),
(25, '2016_11_15_132350_create_cms_email_templates', 2),
(26, '2016_11_15_190410_create_cms_statistics', 2),
(27, '2016_11_17_102740_create_cms_statistic_components', 2),
(28, '2017_06_06_164501_add_deleted_at_cms_moduls', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(10) NOT NULL,
  `nombre_rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'administrador'),
(2, 'asistente'),
(3, 'cliente'),
(4, 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(10) NOT NULL,
  `id_conductor` int(10) DEFAULT NULL,
  `id_vehiculo` int(10) DEFAULT NULL,
  `id_cliente` int(10) DEFAULT NULL,
  `id_empleado` int(10) DEFAULT NULL,
  `manifiesto` varchar(10) DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT NULL,
  `fecha_fin` timestamp NULL DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `satelital` varchar(30) DEFAULT NULL,
  `ciudad_origen` varchar(30) DEFAULT NULL,
  `ciudad_destino` varchar(30) NOT NULL,
  `direccion_descargue` varchar(30) DEFAULT NULL,
  `sello` varchar(30) DEFAULT NULL,
  `numero_contenedor` varchar(30) DEFAULT NULL,
  `link_localizador` varchar(30) DEFAULT NULL,
  `usuario_satelital` varchar(30) DEFAULT NULL,
  `clave_satelital` varchar(30) DEFAULT NULL,
  `ruta` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `id_conductor`, `id_vehiculo`, `id_cliente`, `id_empleado`, `manifiesto`, `fecha_creacion`, `fecha_fin`, `estado`, `satelital`, `ciudad_origen`, `ciudad_destino`, `direccion_descargue`, `sello`, `numero_contenedor`, `link_localizador`, `usuario_satelital`, `clave_satelital`, `ruta`) VALUES
(1, 3, 1, 1, 1, 'sdf', '2018-03-27 05:00:00', '2018-03-28 05:00:00', 'ACTIVO', 'sdf', 'sdf', '', 'sdf', 'sdf', '123', 'dfs', 'dsf', 'sd', 'af');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_novedad`
--

CREATE TABLE `servicio_novedad` (
  `id_servicio_novedad` int(10) NOT NULL,
  `id_servicio` int(10) DEFAULT NULL,
  `id_empleado` int(10) DEFAULT NULL,
  `fecha_novedad` timestamp NULL DEFAULT NULL,
  `evento` varchar(30) DEFAULT NULL,
  `observacion` varchar(30) DEFAULT NULL,
  `nota` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `documento` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol_id` int(10) UNSIGNED NOT NULL,
  `estado` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `id_rol` int(10) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_rol`, `usuario`, `clave`, `estado`) VALUES
(1, 1, 'mac2394q', 'f11235813', 'ACTIVO'),
(2, 2, 'macAsistente', 'macAsistente', 'ACTIVO'),
(3, 3, 'macCliente', 'macCliente', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(10) NOT NULL,
  `id_cliente` int(10) DEFAULT NULL,
  `placa` varchar(30) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `n_trailer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `id_cliente`, `placa`, `marca`, `color`, `n_trailer`) VALUES
(1, 1, 'abc', 'mazda', 'black', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id_conductor`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_conductor` (`id_conductor`),
  ADD KEY `id_vehiculo` (`id_vehiculo`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `servicio_novedad`
--
ALTER TABLE `servicio_novedad`
  ADD PRIMARY KEY (`id_servicio_novedad`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_documento_unique` (`documento`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_rol_id_foreign` (`rol_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id_conductor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicio_novedad`
--
ALTER TABLE `servicio_novedad`
  MODIFY `id_servicio_novedad` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_conductor`) REFERENCES `conductor` (`id_conductor`),
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculo` (`id_vehiculo`),
  ADD CONSTRAINT `servicio_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `servicio_ibfk_4` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`);

--
-- Filtros para la tabla `servicio_novedad`
--
ALTER TABLE `servicio_novedad`
  ADD CONSTRAINT `servicio_novedad_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`),
  ADD CONSTRAINT `servicio_novedad_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
