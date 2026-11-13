-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2026 a las 06:41:10
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
-- Base de datos: `perfumeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfumes`
--

CREATE TABLE `perfumes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `procedencia` varchar(60) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfumes`
--

INSERT INTO `perfumes` (`id`, `nombre`, `marca`, `cantidad`, `procedencia`, `descripcion`, `precio`) VALUES
(1, 'Bleu de Chanel', 'Chanel', '100 ml', 'Francia', 'Fragancia amaderada e intensa para eventos formales.', 3450.00),
(2, 'Sauvage Elixir', 'Dior', '60 ml', 'Francia', 'Concentración extrema de especias y maderas nobles.', 4200.00),
(3, 'Tuxedo', 'YSL', '125 ml', 'Francia', 'Elegancia pura con notas de pachulí y especias.', 5800.00),
(4, 'Grand Soir', 'Maison Francis Kurkdjian', '70 ml', 'Francia', 'Ámbar nocturno y sofisticado para gala.', 4900.00),
(5, 'Baccarat Rouge 540', 'Maison Francis Kurkdjian', '70 ml', 'Francia', 'Aroma dulce amaderado de alta perfumería.', 6500.00),
(6, 'Creed Aventus', 'Creed', '100 ml', 'Reino Unido', 'Icónica mezcla de piña y maderas ahumadas.', 7200.00),
(7, 'Noir de Noir', 'Tom Ford', '50 ml', 'Estados Unidos', 'Rosa oscura y trufa para ocasiones formales.', 5900.00),
(8, 'Gentleman Reserve Privee', 'Givenchy', '100 ml', 'Francia', 'Notas de whisky e iris elegante.', 2950.00),
(9, 'Royal Oud', 'Creed', '100 ml', 'Reino Unido', 'Madera de oud refinada estilo europeo.', 7800.00),
(10, 'Elysium', 'Roja Parfums', '50 ml', 'Reino Unido', 'Lujo absoluto en alta perfumería cítrica.', 8500.00),
(11, 'Y Le Parfum', 'YSL', '100 ml', 'Francia', 'Intenso perfume amaderado ideal para salir de noche.', 3100.00),
(12, 'La Nuit de LHomme', 'YSL', '100 ml', 'Francia', 'Seducción nocturna con cardamomo y lavanda.', 2650.00),
(13, 'The Most Wanted', 'Azzaro', '100 ml', 'Francia', 'Toffee dulce y maderas intensas.', 2400.00),
(14, 'Spicebomb Extreme', 'Viktor and Rolf', '90 ml', 'Holanda', 'Explosión especiada de vainilla y tabaco.', 2800.00),
(15, '1 Million Elixir', 'Paco Rabanne', '100 ml', 'Francia', 'Manzana licorosa y maderas de alta intensidad.', 2550.00),
(16, 'Bad Boy Extreme', 'Carolina Herrera', '100 ml', 'Estados Unidos', 'Cacao y vetiver profundo para la noche.', 2700.00),
(17, 'Le Male Le Parfum', 'Jean Paul Gaultier', '125 ml', 'Francia', 'Vainilla oscura y cardamomo seductor.', 2850.00),
(18, 'Born in Roma Intense', 'Valentino', '100 ml', 'Italia', 'Vainilla especiada para eventos nocturnos.', 2900.00),
(19, 'Eros Flame', 'Versace', '100 ml', 'Italia', 'Cítricos cálidos y pimienta negra nocturna.', 2300.00),
(20, 'Angels Share', 'Kilian', '50 ml', 'Francia', 'Aroma a cognac gourmand y canela nocturna.', 5100.00),
(21, 'Club de Nuit Intense', 'Armaf', '105 ml', 'Emiratos Árabes Unidos', 'Bestia negra árabe de notas frutales y ahumadas.', 1150.00),
(22, 'Khamrah', 'Lattafa', '100 ml', 'Emiratos Árabes Unidos', 'Dulce especiado oriental de canela y praliné.', 950.00),
(23, 'Asad', 'Lattafa', '100 ml', 'Emiratos Árabes Unidos', 'Especiado amaderado de gran duración y estela.', 850.00),
(24, 'Odyssey Mandarin Sky', 'Armaf', '100 ml', 'Emiratos Árabes Unidos', 'Naranja acaramelada y maderas orientales.', 1050.00),
(25, 'Fakhar Black', 'Lattafa', '100 ml', 'Emiratos Árabes Unidos', 'Aroma fresco y elegante con toque oriental.', 900.00),
(26, 'Ameer Al Oudh', 'Lattafa', '100 ml', 'Emiratos Árabes Unidos', 'Oud dulce y madera quemada tradicional.', 880.00),
(27, 'Badee Al Oud', 'Lattafa', '100 ml', 'Emiratos Árabes Unidos', 'Oud intenso con azafrán y lavanda.', 980.00),
(28, 'Amber and Leather', 'Maison Alhambra', '100 ml', 'Emiratos Árabes Unidos', 'Cuero intenso y ámbar oriental.', 750.00),
(29, 'Detour Noir', 'Al Haramain', '100 ml', 'Emiratos Árabes Unidos', 'Vainilla mentolada de alta duración.', 1100.00),
(30, 'Amber Oud Gold', 'Al Haramain', '120 ml', 'Emiratos Árabes Unidos', 'Frutal potente dulce oriental.', 1450.00),
(31, 'Acqua di Gio EDT', 'Giorgio Armani', '100 ml', 'Italia', 'Clásico fresco cítrico para uso diario.', 2500.00),
(32, 'Montblanc Legend', 'Montblanc', '100 ml', 'Alemania', 'Aroma versátil de lavanda y bergamota.', 1650.00),
(33, 'Nautica Voyage', 'Nautica', '100 ml', 'Estados Unidos', 'Manzana verde y notas acuáticas limpias.', 650.00),
(34, 'CK One', 'Calvin Klein', '200 ml', 'Estados Unidos', 'Fresco unisex clásico diario.', 1100.00),
(35, 'Versace Pour Homme', 'Versace', '100 ml', 'Italia', 'Cítricos mediterráneos versátiles.', 1950.00),
(36, 'Coach Green', 'Coach', '100 ml', 'Estados Unidos', 'Kiwi y romero fresco para rutina.', 1800.00),
(37, 'Prada LHomme', 'Prada', '100 ml', 'Italia', 'Lirio limpio aroma a jabón elegante diario.', 2950.00),
(38, 'Explorer', 'Montblanc', '100 ml', 'Alemania', 'Bergamota fresca y cuero suave.', 1750.00),
(39, 'L1212 Blanc', 'Lacoste', '100 ml', 'Francia', 'Limpio fresco de tuberosa y pomelo.', 1600.00),
(40, 'Boss Bottled', 'Hugo Boss', '100 ml', 'Alemania', 'Manzana y canela versátil diario.', 2100.00),
(41, 'Le Male Ocean', 'Jean Paul Gaultier', '125 ml', 'Francia', 'Fresco cítrico para alta temperatura.', 2600.00),
(42, 'Allure Homme Sport', 'Chanel', '100 ml', 'Francia', 'Naranja y notas marinas de verano.', 3200.00),
(43, 'Dior Homme Sport', 'Dior', '125 ml', 'Francia', 'Limón chispeante y aldehídos de calor.', 3000.00),
(44, 'Percival', 'Parfums de Marly', '125 ml', 'Francia', 'Fresco azul de alto rendimiento veraniego.', 5200.00),
(45, 'Sedley', 'Parfums de Marly', '125 ml', 'Francia', 'Menta fresca y limón vibrante.', 5200.00),
(46, 'Un Jardin sur le Nil', 'Hermes', '100 ml', 'Francia', 'Mango verde y loto refrescante.', 2800.00),
(47, 'LHomme Ideal Cool', 'Guerlain', '100 ml', 'Francia', 'Menta y almendra fresca veraniega.', 2200.00),
(48, 'Vibrato', 'Sospiro', '100 ml', 'Italia', 'Explosión cítrica de toronja y bergamota.', 6100.00),
(49, 'Tommy Summer', 'Tommy Hilfiger', '100 ml', 'Estados Unidos', 'Notas cítricas y herbales solares.', 1250.00),
(50, 'Ck Everyone', 'Calvin Klein', '100 ml', 'Estados Unidos', 'Naranja orgánica y té azul fresco.', 1200.00),
(51, 'Tobacco Vanille', 'Tom Ford', '50 ml', 'Estados Unidos', 'Tabaco cálido y vainilla especiada de frío.', 6200.00),
(52, 'Herod', 'Parfums de Marly', '125 ml', 'Francia', 'Tabaco dulce con canela y vainilla.', 5400.00),
(53, 'Oajan', 'Parfums de Marly', '125 ml', 'Francia', 'Miel y canela cálida estilo gourmand.', 5600.00),
(54, 'Stronger With You Intensely', 'Emporio Armani', '100 ml', 'Italia', 'Castaña acaramelada para clima frío.', 2750.00),
(55, 'Dior Homme Intense', 'Dior', '100 ml', 'Francia', 'Iris empolvado y cacao intenso.', 3150.00),
(56, 'Spicebomb Infrared', 'Viktor and Rolf', '90 ml', 'Holanda', 'Chile rojo y haba tonka para invierno.', 2700.00),
(57, 'Most Wanted Parfum', 'Azzaro', '100 ml', 'Francia', 'Vainilla bourbon y jengibre cálido.', 2600.00),
(58, 'Wanted by Night', 'Azzaro', '100 ml', 'Francia', 'Canela y tabaco frutal de frío.', 2250.00),
(59, 'By the Fireplace', 'Maison Margiela', '100 ml', 'Francia', 'Castañas asadas y madera ahumada de invierno.', 3300.00),
(60, 'Jaipur Homme', 'Boucheron', '100 ml', 'Francia', 'Canela oriental clásica y clavo.', 1500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `genero`) VALUES
(1, 'Yosef Leonardo Mata Perez', 'mataperezyosef@gmail.com', 'hola', 'hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellido_paterno` varchar(60) NOT NULL,
  `apellido_materno` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `municipio` varchar(80) NOT NULL,
  `calle_numero` varchar(150) NOT NULL,
  `ultimos_digitos_tarjeta` varchar(4) NOT NULL,
  `productos` text NOT NULL,
  `total_pago` decimal(10,2) NOT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `telefono`, `codigo_postal`, `estado`, `municipio`, `calle_numero`, `ultimos_digitos_tarjeta`, `productos`, `total_pago`, `fecha_venta`) VALUES
(1, 'Yosef Leonardo', 'Mata', 'Perez', '6564294270', '32680', 'Chihuahua', 'Cd.Juarez', 'Zacatecas 6285', '5678', 'Bleu de Chanel ($3450.00), Elysium ($8500.00)', 11950.00, '2026-11-13 04:57:06'),
(2, 'Juan Jose', 'Mata', 'Lopez', '6562463694', '65632', 'Chihuahua', 'Cd.Juarez', 'Zacatecas 6285', '1212', 'Bleu de Chanel ($3450.00)', 3450.00, '2026-11-13 05:36:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfumes`
--
ALTER TABLE `perfumes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfumes`
--
ALTER TABLE `perfumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
