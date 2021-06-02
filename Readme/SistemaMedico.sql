-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-06-2021 a las 08:01:37
-- Versión del servidor: 5.7.33-0ubuntu0.18.04.1
-- Versión de PHP: 7.3.27-9+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SistemaMedico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_urgencia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_urgencia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `tipo_urgencia`, `descripcion_urgencia`) VALUES
(1, 'Fractura', 'Consiste en una ruptura de un huesos'),
(2, 'Apendicitis', 'Consiste en una inflamación del apéndice,provocando dolor abdominal'),
(3, 'Traumatismo Craneoencefalico Leve', 'Consiste en una lesión que provoca la perdida de conocimiento dura menos de 30 minutos, alterando el estado mental'),
(4, 'Broncoespasmos', 'Se produce cuando la mucosa interna de los bronquios se inflama haciendo disminuir el espacio para que entre el aire'),
(5, 'Gastritis Crónica', 'Es la inflamación inespecífica de la mucosa gástrica, de etiología múltiple y mecanismos patogénicos diversos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `nombre`, `apellido`, `dni`, `telefono`, `created_at`, `updated_at`) VALUES
(29, 'Clara Delgadillo Cabrera', 'Costa', '11920000C', '964 841440', '2021-01-17 11:30:29', '2021-03-19 12:03:50'),
(45, 'Claudia Pérez', 'Godínez', '59308926E', '+34 906-96-4053', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(117, 'Aurora Zavala', 'Caraballo', '30299418T', '+34 935-33-5386', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(323, 'Ing. Paula Robles Hijo', 'Almaráz', '00363238E', '972-074765', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(355, 'Cristina Luján', 'Mascareñas', '81790362Q', '+34 942-762074', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(378, 'Ignacio Escamilla', 'Calderón', '46997371E', '+34 961 33 7333', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(441, 'Naia Merino', 'Delatorre', '85522297V', '+34 939-607606', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(474, 'Miguel Romero', 'Botello', '26096915B', '991-08-9922', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(477, 'Gonzalo Rivero', 'Clemente', '98320599S', '930-57-4609', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(535, 'Jaime Navarro', 'Carreón', '67224700R', '+34 962 88 8289', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(545, 'Celia Maldonado', 'Huerta', '05959939H', '945-955781', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(601, 'Emilia Ramos', 'Alcala', '12761974X', '934-69-1509', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(604, 'María Carmen Amaya', 'Carrión', '62229846B', '913-61-7224', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(650, 'Mateo Contreras', 'Cornejo', '22946567L', '906-07-4429', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(698, 'Luna Garza', 'Muñoz', '75003048W', '+34 959 75 5063', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(712, 'Dr. Irene Soler Segundo', 'Romo', '60748630H', '+34 928 95 1518', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(774, 'Ing. Noa Gallardo Segundo', 'Roque', '19981973X', '+34 915 35 3696', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(813, 'Noelia Roque Tercero', 'Arredondo', '48798999Z', '959-32-0609', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(891, 'Aurora Patiño Hijo', 'Gálvez', '24969262W', '909-40-2593', '2021-01-17 11:30:29', '2021-01-17 11:30:29'),
(982, 'Rayco', 'Martin', '78945612A', '123456789', '2021-03-19 10:06:44', '2021-03-19 10:06:44'),
(983, 'David', 'Perez', '75395186A', '126548793', '2021-03-19 11:36:30', '2021-03-19 11:36:30'),
(984, 'Miguel Angel', 'MonteNegro', '78765470A', '789456123', NULL, NULL),
(985, 'Jorge', 'García Cabrera', '78766470B', '618756169', NULL, NULL),
(986, 'Inés', 'Cabrera García', '78766480A', '61870319', NULL, NULL);

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
(8, '2020_12_30_114455_create_categoria_urgencia_table', 4),
(12, '2020_12_30_114455_create_categoria_table', 5),
(19, '2020_12_30_113641_create_pacientes_table', 6),
(20, '2020_12_30_114231_create_medicos_table', 7),
(21, '2020_12_30_114455_create_categorias_table', 8),
(22, '2021_01_17_110519_create_tratamientos_table', 9),
(23, '2020_12_30_120247_create_urgencias_table', 10),
(24, '2014_10_12_000000_create_users_table', 11),
(25, '2014_10_12_100000_create_password_resets_table', 11),
(26, '2019_08_19_000000_create_failed_jobs_table', 11),
(27, '2020_12_23_133829_add_google_id_column', 11),
(28, '2021_01_02_100326_create_cache_table', 11),
(29, '2021_01_18_231121_create_urgenicas_table', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellido`, `dni`, `telefono`, `created_at`, `updated_at`) VALUES
(524, 'Lic. Naiara Mendoza', 'Feliciano', '14349518W', '956 44 4758', '2021-01-17 11:31:15', '2021-03-19 12:09:06'),
(1036, 'Sra. Rosa Barela Tercero', 'Moral', '52528717Y', '+34 971 376075', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(2340, 'Dr. Gonzalo Sierra Tercero', 'Quiñones', '45330722E', '960 84 4264', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(2466, 'Antonia Alonzo', 'Aparicio', '14659836G', '914-28-6281', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(2772, 'Alejandro Giménez', 'Delagarza', '95345124G', '970-291817', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(2912, 'Dr. Leo Oliva Hijo', 'Ortega', '81014221X', '904-903947', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(3894, 'Dr. Yago Calderón Hijo', 'Martí', '18877027F', '+34 928 508689', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(4462, 'María Ángeles Corona', 'Apodaca', '23900321D', '983 89 6679', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(4563, 'Manuel Domínquez', 'Camacho', '60309537H', '+34 997422922', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(5005, 'Ángeles Deleón Segundo', 'Montoya', '47564177Q', '+34 970 87 1450', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(5887, 'Óscar Valdés', 'Matías', '35863857A', '+34 973 446968', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(6243, 'Carolina Godoy', 'Granado', '10157628T', '930 814384', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(6852, 'Dña Rosa María Gallego Segundo', 'Moya', '20279869X', '948 115498', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(7173, 'Ing. Claudia Meza', 'Pizarro', '26676487Y', '+34 938675952', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(7546, 'D. Víctor Osorio Segundo', 'Fierro', '59049239M', '+34 994 51 9602', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(8369, 'Jon Valentín', 'Villarreal', '03335355X', '+34 946-50-4973', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(8941, 'Alejandro Serrato', 'Abad', '78647127F', '+34 994746429', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(8987, 'Ángeles Jimínez', 'Jurado', '64020772L', '928 937206', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(9759, 'Guillem Montes', 'Villalpando', '20577096P', '944103260', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(9894, 'Olivia Casares', 'Segovia', '29898674P', '924 677111', '2021-01-17 11:31:15', '2021-01-17 11:31:15'),
(9895, 'Rayco', 'Montoto', '78945612A', '789513426', '2021-03-19 12:07:14', '2021-03-19 12:07:14'),
(9896, 'Carlos Felipe', 'Martin Cabrera', '78766471A', '618703163', NULL, NULL),
(9897, 'Alexandra', 'Ramírez García', '78766470A', '618752437', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('carlosfelipemartin@gmail.com', '$2y$10$SvSRPtl8DOVRPE1xGWWy1enn2lazG.DJAGFhAbAfB6faGB/KqCxEW', '2021-03-19 16:01:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enfermedad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamiento` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `enfermedad`, `tratamiento`, `updated_at`, `created_at`) VALUES
(1, 'Fractura', 'Inmovilización  con férula', NULL, NULL),
(2, 'Apendicitis', 'Operación, de extracción del apéndice', NULL, NULL),
(3, 'traumatismo craneoencefalico leve', 'Rehabilitación', NULL, NULL),
(4, 'bronvoespasmos', 'Medicamentos como: broncodilatadores o anticolinérgicos\n', NULL, NULL),
(5, 'Gastritis Crónica', 'Medicamentos llamados inhibidores de la bomba de protones y antiácidos', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urgencias`
--

CREATE TABLE `urgencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_entrada` date NOT NULL,
  `tipo_urgencia` bigint(20) UNSIGNED NOT NULL,
  `tratamiento` bigint(20) UNSIGNED NOT NULL,
  `paciente` bigint(20) UNSIGNED NOT NULL,
  `medico` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `urgencias`
--

INSERT INTO `urgencias` (`id`, `f_entrada`, `tipo_urgencia`, `tratamiento`, `paciente`, `medico`, `created_at`, `updated_at`) VALUES
(2005, '2021-03-18', 4, 4, 9759, 891, NULL, NULL),
(2006, '2021-03-01', 3, 3, 8369, 45, NULL, NULL),
(2016, '2021-03-25', 1, 1, 524, 29, NULL, NULL),
(2017, '2021-03-18', 1, 1, 524, 29, NULL, NULL),
(2022, '2021-03-18', 1, 1, 524, 29, NULL, NULL),
(2023, '2021-03-25', 1, 1, 524, 29, NULL, NULL),
(2025, '2021-03-25', 1, 1, 524, 45, NULL, NULL),
(2027, '2021-03-25', 2, 2, 1036, 117, NULL, NULL),
(2031, '2021-05-26', 1, 1, 524, 29, NULL, NULL),
(2032, '2021-05-26', 5, 5, 524, 29, NULL, NULL),
(2033, '2021-05-27', 1, 1, 9896, 698, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carlos', 'carlosfelipemartin@gmail.com', NULL, '$2y$10$YQoD9BKFGCF8yQHyeebsWOMHc4c62ksKIyGWV4xAL0C6JNQt2vHP2', NULL, '2021-01-17 11:27:37', '2021-01-17 11:27:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `urgencias`
--
ALTER TABLE `urgencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `urgencias_tipo_urgencia_foreign` (`tipo_urgencia`),
  ADD KEY `urgencias_paciente_foreign` (`paciente`),
  ADD KEY `urgencias_medico_foreign` (`medico`),
  ADD KEY `urgencias_tratamiento_foreign` (`tratamiento`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9898;
--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `urgencias`
--
ALTER TABLE `urgencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2034;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `urgencias`
--
ALTER TABLE `urgencias`
  ADD CONSTRAINT `urgencias_medico_foreign` FOREIGN KEY (`medico`) REFERENCES `medicos` (`id`),
  ADD CONSTRAINT `urgencias_paciente_foreign` FOREIGN KEY (`paciente`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `urgencias_tipo_urgencia_foreign` FOREIGN KEY (`tipo_urgencia`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `urgencias_tratamiento_foreign` FOREIGN KEY (`tratamiento`) REFERENCES `tratamientos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
