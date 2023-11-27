-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 07:06:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_carpinteria1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id` int(11) NOT NULL,
  `idcliente` varchar(50) NOT NULL,
  `idempleado` varchar(50) NOT NULL,
  `fechapedido` varchar(50) NOT NULL,
  `fechaentrega` varchar(50) NOT NULL,
  `estadopedido` varchar(50) NOT NULL,
  `totaldelpedido` varchar(50) NOT NULL,
  `metododepago` varchar(50) NOT NULL,
  `paqueteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`id`, `idcliente`, `idempleado`, `fechapedido`, `fechaentrega`, `estadopedido`, `totaldelpedido`, `metododepago`, `paqueteria`) VALUES
(8, '20', '23', '11/26/23', '11/30/23', 'PENDIENTE', '120$', 'TRANFERENCIA', 'DHL'),
(9, '21', '23', '11/20/23', '11/25/23', 'ENTREGADO', '150$', 'EFECTIVO', 'PQUETERIA LOCAL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
