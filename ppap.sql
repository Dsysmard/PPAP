-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2017 a las 00:40:42
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ppap`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedidos` int(11) NOT NULL,
  `customer_group` varchar(50) DEFAULT NULL,
  `customer` varchar(45) DEFAULT NULL,
  `contact_name` varchar(45) DEFAULT NULL,
  `lf_coordinator` varchar(45) DEFAULT NULL,
  `customer_part_number` varchar(45) DEFAULT NULL,
  `lf_part_number` varchar(45) DEFAULT NULL,
  `group` varchar(45) DEFAULT NULL,
  `note_oem_part_number` varchar(45) DEFAULT NULL,
  `level_request` varchar(45) DEFAULT NULL,
  `type_of_request` varchar(45) DEFAULT NULL,
  `etr` varchar(45) DEFAULT NULL,
  `date_request` varchar(50) DEFAULT NULL,
  `customer_due_date` varchar(50) DEFAULT NULL,
  `lf_due_date` varchar(50) DEFAULT NULL,
  `submited_date` varchar(50) DEFAULT NULL,
  `full_interim_submission` varchar(45) DEFAULT NULL,
  `day_submitted` varchar(50) DEFAULT NULL,
  `why_open` varchar(45) DEFAULT NULL,
  `pass_due_vs_lf_due_date` varchar(45) DEFAULT NULL,
  `time_to_response` varchar(11) DEFAULT NULL,
  `comments` varchar(300) DEFAULT NULL,
  `approval_date` varchar(50) DEFAULT NULL,
  `type_of_no_conformity` varchar(45) DEFAULT NULL,
  `no_conformidad_de_submision_de_ppaps` varchar(45) DEFAULT NULL,
  `imds_submission` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedidos`, `customer_group`, `customer`, `contact_name`, `lf_coordinator`, `customer_part_number`, `lf_part_number`, `group`, `note_oem_part_number`, `level_request`, `type_of_request`, `etr`, `date_request`, `customer_due_date`, `lf_due_date`, `submited_date`, `full_interim_submission`, `day_submitted`, `why_open`, `pass_due_vs_lf_due_date`, `time_to_response`, `comments`, `approval_date`, `type_of_no_conformity`, `no_conformidad_de_submision_de_ppaps`, `imds_submission`) VALUES
(1, 'YAZAKI [EDITED]', 'YAZAKI Europe', 'zelia.sousa@yazaki-europe.com', 'Fabiola Garza', 'X1PO6429', '02400113P', NULL, NULL, 'level 3', 'customer reques', NULL, '2016-06-01', NULL, '2016-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'LEONI', 'leoni Europe', 'mohamednacir.berriri@leoni.com', 'Fabiola Garza', 'leoni Europe', '0297002.WXNV', '', '', 'level 2', 'customer request', '', '2016-06-01', '2016-06-01', '2016-06-29', '2016-06-10', 'Full Submission', '2017-05-31', 'SUbmitted On time', 'Submitted On time', '5', '', '2016-06-30', '', '', '24926841 / 11');

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
(1, 'Miguel Angel Reyna Davila', 'sysmard@gmail.com', '$2y$10$eNPLZH5R6pqvwFKDXOFgqu1dYNTpa41T/yCY3gQ/y/98TP9Ja00oa', NULL, '2017-05-22 16:35:00', '2017-05-22 16:35:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedidos`);

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
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
