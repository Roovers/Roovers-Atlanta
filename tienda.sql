-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 04:14:34
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `fk_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `total`, `fk_user`) VALUES
(1, '0', 'jeronimo.lago@davinci.edu.ar'),
(3, '0', 'homer@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `contenido` text NOT NULL,
  `calificacion` int(11) NOT NULL,
  `fecha_comentario` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fk_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `contenido`, `calificacion`, `fecha_comentario`, `fk_producto`) VALUES
(1, 'este pantalon esta muy bueno', 5, '2022-11-28 21:20:10', 1),
(8, 'esta buenaso breooooo', 7, '2022-11-28 21:20:16', 1),
(9, 'probando el comentario', 8, '2022-11-28 21:20:21', 1),
(14, 'malardo', 1, '2022-11-28 21:22:29', 1),
(15, 'esta buenaso', 10, '2022-11-28 21:23:28', 1),
(16, 'asdsadasdsa', 5, '2022-11-29 21:26:04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario_x_producto`
--

CREATE TABLE `comentario_x_producto` (
  `id` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `fk_comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` longtext COLLATE utf8_spanish_ci NOT NULL,
  `Usuario_email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `fecha`, `titulo`, `contenido`, `Usuario_email`) VALUES
(1, '2022-11-09', 'Atlanta asciende a primera ', 'ASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDASDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD', 'admin@admin.com'),
(2, '2013-11-07', 'Probando agregar noticia', 'ASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDASASDSADASDSADASDAS\r\n\r\n\r\n', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Precio` double NOT NULL,
  `Stock` int(11) NOT NULL,
  `nombre_producto` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  `Img` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `Descripcion`, `Precio`, `Stock`, `nombre_producto`, `Img`, `categoria`) VALUES
(1, 'TVPRO', 111, 11, 'PANTALON DEPORTIVO', 'assets/img/producto2.jpg', 'pantalones'),
(2, 'la mejor remera', 1900, 100, 'Remera Titular Atlanta', 'assets//img/producto1.jpg', 'remeras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_en_carrito`
--

CREATE TABLE `producto_en_carrito` (
  `id_producto_carrito` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fk_carrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_en_carrito`
--

INSERT INTO `producto_en_carrito` (`id_producto_carrito`, `fk_producto`, `cantidad`, `fk_carrito`) VALUES
(26, 2, 2, 3),
(33, 1, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `nivel_permiso` int(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `foto_perfil` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `nombre_usuario`, `password`, `nivel_permiso`, `fecha_nacimiento`, `genero`, `domicilio`, `dni`, `ciudad`, `pais`, `provincia`, `codigo_postal`, `telefono`, `foto_perfil`) VALUES
('admin@admin.com', 'jero', '1234', 1, '2022-11-18', 'femenino', 'Colombo 2487', 2147483647, 'Chubut', 'BO', 'Salta', '7400', 228561777, ''),
('homer@mail.com', 'homer123', '1234', 1, '2022-12-29', 'otro', 'Colombo 2487', 44454539, 'Olavarria', 'AR', 'Buenos Aires', '7403', 2147483647, 'assets/img/icons8-usuario-100.png'),
('jeronimo.lago@davinci.edu.ar', 'asdasdsadas', 'asdasdas', 1, '2022-11-10', 'masculino', 'asdas', 1, 'Olavarria', 'AR', 'Buenos Aires', '7403', 2147483647, 'assets/img/WhatsApp Image 2022-11-29 at 20.33.01.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fk_ticket` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `unidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `fk_user` (`fk_user`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `producto_fk` (`fk_producto`);

--
-- Indices de la tabla `comentario_x_producto`
--
ALTER TABLE `comentario_x_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto` (`fk_producto`),
  ADD KEY `fk_comentario` (`fk_comentario`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`),
  ADD KEY `fk_Noticia_Usuario1` (`Usuario_email`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `producto_en_carrito`
--
ALTER TABLE `producto_en_carrito`
  ADD PRIMARY KEY (`id_producto_carrito`),
  ADD KEY `fk_carrito` (`fk_carrito`),
  ADD KEY `fk_producto` (`fk_producto`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `comentario_x_producto`
--
ALTER TABLE `comentario_x_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto_en_carrito`
--
ALTER TABLE `producto_en_carrito`
  MODIFY `id_producto_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`fk_user`) REFERENCES `usuario` (`email`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `producto_fk` FOREIGN KEY (`fk_producto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `comentario_x_producto`
--
ALTER TABLE `comentario_x_producto`
  ADD CONSTRAINT `fk_comentario` FOREIGN KEY (`fk_comentario`) REFERENCES `comentario` (`id_comentario`),
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`fk_producto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_Noticia_Usuario1` FOREIGN KEY (`Usuario_email`) REFERENCES `usuario` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto_en_carrito`
--
ALTER TABLE `producto_en_carrito`
  ADD CONSTRAINT `fk_carrito` FOREIGN KEY (`fk_carrito`) REFERENCES `carrito` (`id_carrito`),
  ADD CONSTRAINT `producto_en_carrito_ibfk_1` FOREIGN KEY (`fk_producto`) REFERENCES `producto` (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
