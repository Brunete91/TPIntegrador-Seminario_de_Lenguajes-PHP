-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2026 a las 18:05:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpintegrador_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(150) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `categoria` enum('Espacio verde','Museo','Bar','Restaurante','Centro cultural','Navegación fluvial','Cafetería','Otro') NOT NULL,
  `ubicacion` varchar(75) NOT NULL,
  `cupos` int(100) NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `informacion` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `nombre`, `categoria`, `ubicacion`, `cupos`, `precio`, `imagen`, `informacion`) VALUES
(4, 'DETRÁS DE ESCENA: EL CUIDADO DEL TAPIR', 'Espacio verde', 'Av. Santa Fe y Av. Sarmiento, Palermo', 45, 12000.00, 'detrasdeescenaelcuidadodeltapirecoparque600x350.jpg', 'Te invitamos a conocer de cerca todo sobre el cuidado de nuestros tapires: cómo abordamos su atención veterinaria, su nutrición y sus procesos de entrenamiento. | Duración: 40 min.'),
(5, 'CEMENTERIO DE LA RECOLETA', 'Otro', 'Junín 1760, Recoleta', 3, 9999.99, 'generica-cementerio-recoleta-600x350.jpg', 'Recorré el Cementerio de la Recoleta y descubrí numerosos e imponentes mausoleos y bóvedas, pertenecientes a muchos de los principales protagonistas de la historia argentina. Es una actividad gratuita para turistas nacionales (particulares) y arancelada para turistas internacionales. | Duración: 2 h.'),
(6, 'OBSERVACIÓN POR TELESCOPIOS', 'Museo', 'Av. Patricias Argentinas 550, Caballito', 12, 1999.90, 'observacion-telescopio.amigos-astronomia600x350.jpg', 'Vení a observar distintos astros por telescopios y con la ayuda de nuestros guías. Vas a aprender sobre los astros y a conocer la historia de la astronomía en nuestro país al utilizar instrumentos históricos para la observación. | Duración: 1 h.'),
(7, 'VISITA AL JARDÍN BOTÁNICO', 'Espacio verde', ' SANTA FE AV. 3951, PALERMO', 30, 5032.10, 'JardinBotanico_1.jpg', 'Te damos la bienvenida a este gran espacio verde en el que la naturaleza reina en medio de la Ciudad. Te vas a encontrar con 5 hectáreas destinadas a la flora argentina y otras 2 con especies de los bosques templados de los cinco continentes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamientos`
--

CREATE TABLE `alojamientos` (
  `id` int(150) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `categoria` enum('Hotel 3 estrellas','Hotel 4 estrellas','Hotel 5 estrellas','Apart Hotel','Hotel Boutique','Hostal','Otro') NOT NULL,
  `ubicacion` varchar(75) NOT NULL,
  `cupos` int(100) NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `informacion` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alojamientos`
--

INSERT INTO `alojamientos` (`id`, `nombre`, `categoria`, `ubicacion`, `cupos`, `precio`, `imagen`, `informacion`) VALUES
(1, 'HOTEL MADERO', 'Hotel 5 estrellas', 'Rosario Vera Peñaloza 360, Puerto Madero', 90, 52359.92, 'hotelmadero-distinguidos600x350.jpg', 'Sin información.'),
(2, 'HOTEL INTERSUR RECOLETA', 'Hotel 4 estrellas', 'Av. Callao 1764, Recoleta', 75, 32000.00, 'hotelintersurrecoleta-distinguidos600x350.jpg', 'Sin información.'),
(3, 'CASA CALMA', 'Hotel Boutique', 'Suipacha 1015, Retiro', 33, 12000.50, 'casacalma-distinguidos600x350.jpg', 'Sin información.'),
(4, 'IBIS BUENOS AIRES OBELISCO', 'Hotel 3 estrellas', 'Av Corrientes 1344, San Nicolás', 25, 15503.20, 'ibisbuenosairesobelisco-distinguidos600x350_1.jpg', 'Sin información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(150) NOT NULL,
  `id_usuario` int(150) NOT NULL,
  `id_actividad` int(150) DEFAULT NULL,
  `id_alojamiento` int(150) DEFAULT NULL,
  `fecha_reserva` date NOT NULL,
  `cantidad` int(50) NOT NULL,
  `pago` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_usuario`, `id_actividad`, `id_alojamiento`, `fecha_reserva`, `cantidad`, `pago`) VALUES
(1, 5, NULL, 4, '2026-10-21', 23, 356573.60),
(2, 5, 7, NULL, '2026-10-21', 2, 10064.20),
(3, 5, 6, NULL, '2026-10-21', 5, 9999.50),
(4, 5, 5, NULL, '2026-10-21', 17, 169999.83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(150) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `rol` enum('admin','cliente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `rol`) VALUES
(1, 'Elida', 'elida@urbanoviajes.ar', '$2y$10$ybm8FIKgkVijRaBc.zZg1O5xprCBQQ45SpRldKFHD8qsEsoCHuqmm', 'admin'),
(3, 'Tomás', 'tomas@urbanoviajes.ar', '$2y$10$egY6TY7QoBSJ/DkezzvZSe8r7ETuJGpJsicNcnpHePFTWU4aJIZkO', 'admin'),
(5, 'Bruno', 'bruno@urbanoviajes.ar', '$2y$10$xjITje4YEUZb.eZU6gIaluAHF3yR.z/GLx./L1WAy2MBKfbvM39iu', 'cliente'),
(6, 'Carlos', 'carlos@urbanoviajes.ar', '$2y$10$AN0KuGdIrdKzHd2t3CiyyOzbNqOhkw9.9U3InSaQDHDEdX2XhGpYq', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alojamientos`
--
ALTER TABLE `alojamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservas_actividad` (`id_actividad`),
  ADD KEY `fk_reservas_alojamiento` (`id_alojamiento`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `alojamientos`
--
ALTER TABLE `alojamientos`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `fk_reservas_actividad` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservas_alojamiento` FOREIGN KEY (`id_alojamiento`) REFERENCES `alojamientos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
