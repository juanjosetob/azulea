-- -- phpMyAdmin SQL Dump
-- -- version 5.2.0
-- -- https://www.phpmyadmin.net/
-- --
-- -- Servidor: 127.0.0.1
-- -- Tiempo de generación: 05-12-2022 a las 05:50:58
-- -- Versión del servidor: 10.4.25-MariaDB
-- -- Versión de PHP: 7.4.30

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --
-- -- Base de datos: `azulea`
-- --

-- -- --------------------------------------------------------

-- --
-- -- Estructura de tabla para la tabla `productos`
-- --

-- CREATE TABLE `productos` (
-- `id_producto` int(11) NOT NULL,
-- `categoria` varchar(30) NOT NULL,
-- `nombre` varchar(30) NOT NULL,
-- `descripcion` longtext NOT NULL,    
-- `Foto` blob DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --
-- -- Volcado de datos para la tabla `productos`
-- --

-- INSERT INTO `productos` (`id_producto`, `categoria`, `nombre`, `descripcion`, `Foto`) VALUES
-- (4, 'Collares', '4jtyj', '4thgg', '');

-- -- --------------------------------------------------------

-- --
-- -- Estructura de tabla para la tabla `usuarios`
-- --

-- CREATE TABLE `usuarios` (
-- `id` int(11) NOT NULL,
-- `nombre` varchar(50) NOT NULL,
-- `usuario` varchar(20) NOT NULL,
-- `password` varchar(10) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --
-- -- Volcado de datos para la tabla `usuarios`
-- --

-- INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`) VALUES
-- (1, 'juan jose tobon', 'juan', 'esternocle'),
-- (4, 'anamilena', 'ana', '1234');

-- --
-- -- Índices para tablas volcadas
-- --

-- --
-- -- Indices de la tabla `productos`
-- --
-- ALTER TABLE `productos`
-- ADD PRIMARY KEY (`id_producto`);

-- --
-- -- AUTO_INCREMENT de las tablas volcadas
-- --

-- --
-- -- AUTO_INCREMENT de la tabla `productos`
-- --
-- ALTER TABLE `productos`
-- MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
