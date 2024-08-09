-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2024 a las 21:16:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prototipo2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `email`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(2, 'David', 'Calle Topacio Col. Lomalinda', '7661028374', 'DavidOMG30@hotmail.com', NULL, '2024-08-05 14:49:54', '2024-08-05 14:49:54'),
(3, 'Arturo', 'Colonia Topacio', '2223572019', 'arturo30@hotmail.com', NULL, '2024-08-05 20:11:56', '2024-08-07 18:53:50'),
(4, 'Lauro', 'Calle Lauro', '7824556788', 'LAURO@hotmail.com', NULL, '2024-08-05 20:12:23', '2024-08-05 20:12:23'),
(5, 'Angel', 'Colonia Chacon', '7851234759', 'chacon.angel@gmail.com', NULL, '2024-08-07 18:48:01', '2024-08-07 18:48:01'),
(6, 'Alberto Avendaño', 'Colonia Centro Gtz. Zamora, Ver.', '7661029047', 'alberto@gmail.com', NULL, '2024-08-10 00:17:21', '2024-08-10 00:17:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE `dispositivo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identificador` varchar(255) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `tipo_servicio` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identificador` varchar(255) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `tipo_servicio` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `identificador`, `fecha_ingreso`, `tipo_servicio`, `descripcion`, `foto1`, `foto2`, `created_at`, `updated_at`) VALUES
(5, '2', '2024-08-10', 'Tecnico', 'Cambiar display de Pantalla', 'fotos/J2NYEqpZUSQJWot7sbBC5JdWdV1Hu8Vs53RkHAL9.png', 'fotos/jTN0PRRYocPJCdgPvWHRR9odl5sIzxPzJRRXeiIj.png', '2024-08-09 22:13:42', '2024-08-09 22:13:42'),
(6, '3', '2024-08-09', 'Reparacion', 'Cambio de vaso de Licuadora Mabe (Cliente Alberto Avendaño)', 'fotos/yAu32lEakfpQwATYk2VqhwQOf7KAMGWoYUqeExN7.png', 'fotos/L3EtMj6sTRVuxbbQDecH96nI5RZbQKPia0wT5elt.png', '2024-08-10 00:21:20', '2024-08-10 00:21:20'),
(8, '5', '2024-08-09', 'Reparacion', 'Pantalla Samsung de 55\'', 'fotos/b0yOUv075EXuneti00Ygw4hxUtjml8GYcbDP1mIW.png', 'fotos/1nUNdNhI7JUECOqldlquqlgS8j3J4eJ1imU5XWby.png', '2024-08-10 00:59:47', '2024-08-10 00:59:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas`
--

CREATE TABLE `finanzas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_transaccion` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `monto` varchar(6) DEFAULT NULL,
  `fecha` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `finanzas`
--

INSERT INTO `finanzas` (`id`, `tipo_transaccion`, `descripcion`, `monto`, `fecha`, `created_at`, `updated_at`) VALUES
(2, 'Gasolina', 'Pasaje', '520', '05 de Julio del 2024', '2024-08-05 20:17:23', '2024-08-05 21:02:24'),
(3, 'Transporte', 'Pasaje', '150', '05 de Julio del 2024', '2024-08-05 21:01:38', '2024-08-05 21:01:58'),
(4, 'Hospital', 'Medicina', '500', '05 de Julio del 2024', '2024-08-06 01:41:56', '2024-08-06 01:41:56'),
(5, 'Luz', 'Electricidad', '350', '05 de Julio del 2024', '2024-08-06 02:50:07', '2024-08-06 02:50:07'),
(6, 'Agua', 'Pago de Agua del Local', '300', '07 de Agosto del 2024', '2024-08-07 21:11:22', '2024-08-07 21:11:36'),
(7, 'COMIDA', 'CENA', '300', '09 de Agosto del 2024', '2024-08-10 00:58:31', '2024-08-10 00:58:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2024_07_16_034101_productos', 1),
(19, '2024_07_22_114912_servicios', 1),
(20, '2024_08_05_084111_clientes', 2),
(21, '2024_08_05_084244_proveedores', 2),
(22, '2024_08_05_084340_finanzas', 2),
(23, '2024_08_09_150645_dispositivo', 3),
(24, '2024_08_09_152249_dispositivos', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `marca`, `cantidad`, `created_at`, `updated_at`) VALUES
(4, 'Clima LG', '$20,000', 'LG', '1', '2024-08-05 14:16:21', '2024-08-07 18:54:41'),
(5, 'Pantalla Samsung', '$10,000', 'Samsung', '20', '2024-08-05 20:12:58', '2024-08-05 20:13:30'),
(6, 'Refrigerador Mabe', '$15,000', 'Mabe', '15', '2024-08-05 20:13:22', '2024-08-05 20:13:22'),
(7, 'Licuadora Samsung', '$500.00', 'Samsung', '20', '2024-08-07 18:54:32', '2024-08-08 00:58:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `direccion`, `telefono`, `email`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 'Calle Topacio Col. Lomalinda', '7661028374', 'DavidOMG30@hotmail.com', NULL, '2024-08-05 14:49:38', '2024-08-05 20:22:27'),
(3, 'LG', 'Nueva York, USA', '4214354677', 'lg@gmail.com', NULL, '2024-08-05 21:03:11', '2024-08-05 21:03:11'),
(4, 'Alexa Amazon', 'Miami, USA', '7661029365', 'amazon@gmail.com', NULL, '2024-08-07 21:54:28', '2024-08-09 22:15:15'),
(5, 'Comex', 'Ciudad de Mexico', '7661029876', 'comex@gmail.com', NULL, '2024-08-09 22:14:35', '2024-08-09 22:14:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `fecha_inicio` varchar(255) NOT NULL,
  `fecha_fin` varchar(255) NOT NULL,
  `estatus` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `descripcion`, `costo`, `fecha_inicio`, `fecha_fin`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Refrigerador', 'Fallo Motor', 1000.00, '05 de Julio del 2024', '10 de Julio del 2024', 'Cambio de Motor', '2024-08-05 14:16:02', '2024-08-05 20:16:45'),
(2, 'Pantalla', 'Cambiar Led', 300.00, '05 de Julio del 2024', '09 de Julio del 2024', 'Revision', '2024-08-05 14:51:49', '2024-08-05 14:51:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'David Luna', 'davidomg30@hotmail.com', NULL, '$2y$12$AMqXHVnl4YAQKMCfS2InpOvqDL5umsdx/w5TnKTKOxYi4eV/iHMeq', 'EWq3XS7eVepM49QEfAey8i38y3603dJ4iKkoa9ZusNbDwB89BnVHOohOXCCF', '2024-07-26 23:53:05', '2024-07-26 23:53:05'),
(2, 'David Luna', 'davidomg30@gmail.com', NULL, '$2y$12$KU7.46AcFRieNcyb/xiIaeBfNeuHn8jET09iHUi/Y9wSN6X..YDle', 'a80U62CZg47nRBjzOLmmdYjpJ0t1hw4JIVitD6wsTxOsXUfgn6xG90nuDWoH', '2024-07-27 09:54:16', '2024-07-27 09:54:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_email_unique` (`email`);

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `finanzas`
--
ALTER TABLE `finanzas`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proveedores_email_unique` (`email`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `finanzas`
--
ALTER TABLE `finanzas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
