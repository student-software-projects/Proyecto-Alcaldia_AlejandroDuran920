-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2020 a las 03:29:05
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `torneo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `logo`, `localidad_id`, `created_at`, `updated_at`) VALUES
(1, 'Millonarios', 'lml', 4, '2020-11-23 23:25:47', '2020-11-23 23:25:47'),
(2, 'santa fe', 'lmlml', 7, '2020-11-22 18:32:18', '2020-11-24 23:26:54'),
(3, 'Deportivo tapita', 'lmlmlml', 5, '2020-11-22 23:27:22', '2020-11-22 23:27:22'),
(4, 'Real Madrid', '13', 7, '2020-11-22 23:28:12', '2020-11-22 23:28:12'),
(7, 'Barcelona 8', 'lmlmlml', 3, '2020-11-25 20:58:43', '2020-11-25 21:09:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_camisa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apodo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombres`, `apellidos`, `numero_camisa`, `apodo`, `equipo_id`, `created_at`, `updated_at`) VALUES
(1, 'Diego ', 'Maradona', '10', 'Dios', 7, '2020-11-24 21:33:43', '2020-11-25 21:33:43'),
(2, 'Cristiano', 'Ronaldo', '7', 'cr7', 4, '2020-11-24 21:34:51', '2020-11-25 21:34:51'),
(3, 'David', 'Macalister', '11', 'El mago', 1, '2020-11-24 21:35:37', '2020-11-25 21:35:37'),
(4, 'Alejandro', 'Duran', '9', 'El crack', 1, '2020-11-26 03:17:13', '2020-11-29 01:03:13'),
(5, 'Daniel', 'Ruiz', '00', 'El perro', 3, '2020-11-26 04:25:53', '2020-11-29 01:03:01'),
(7, 'Fabian', 'Lopez', '01', 'El sucio tramposo', 3, '2020-11-26 04:35:57', '2020-11-29 01:02:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `localidad` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `localidad`, `created_at`, `updated_at`) VALUES
(1, 'Puente Aranda', '2020-11-17 21:38:15', '2020-11-19 21:38:15'),
(3, 'Kenedy', '2020-11-17 21:39:08', '2020-11-19 21:38:15'),
(4, 'Antonio Nariño', '2020-11-16 21:43:12', '2020-11-22 21:43:12'),
(5, 'soacha ', '2020-11-21 21:43:32', '2020-11-22 21:43:32'),
(7, 'castilla', '2020-11-23 03:48:14', '2020-11-23 03:51:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_21_204137_create_localidades_table', 1),
(2, '2020_11_21_211557_create_equipos_table', 1),
(3, '2020_11_21_211739_create_jugadores_table', 1),
(5, '2020_11_22_182926_create_users_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `names` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastnames` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `names`, `lastnames`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'angel', 'duran', 'login@gmail.com', '12345', '2020-11-22 18:32:18', '2020-11-22 18:32:18'),
(2, 'alejandro', 'Duran', 'alejandro@gmail.com', '123', '2020-11-29 07:06:20', '2020-11-29 07:06:20'),
(3, 'alejandro', 'Duran', 'alejandro@gmail.com', '123', '2020-11-29 07:08:03', '2020-11-29 07:08:03'),
(4, 'alejandro', 'Duran', 'alejandro@gmail.com', '123', '2020-11-29 07:08:47', '2020-11-29 07:08:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipos_localidad_id_foreign` (`localidad_id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jugadores_equipo_id_foreign` (`equipo_id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_localidad_id_foreign` FOREIGN KEY (`localidad_id`) REFERENCES `localidades` (`id`);

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_equipo_id_foreign` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
