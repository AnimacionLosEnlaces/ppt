-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2018 a las 14:24:22
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `miweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataformas`
--

CREATE TABLE IF NOT EXISTS `plataformas` (
  `id_plataforma` int(13) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_plataforma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `plataformas`
--

INSERT INTO `plataformas` (`id_plataforma`, `nombre`, `logo`, `company`) VALUES
(1, 'Ps4', 'ps4.png', 'Sony'),
(2, 'XBOX One', 'xbox.png', 'Microsoft'),
(3, 'Switch', 'swithc.png', 'Nintendo'),
(4, 'PC', 'pc.png', 'Microsoft');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(13) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `stock` int(6) NOT NULL,
  `descr_breve` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descr` text COLLATE utf8_spanish_ci NOT NULL,
  `id_company` int(13) NOT NULL,
  `requisitos` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_pegi` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `title`, `precio`, `stock`, `descr_breve`, `descr`, `id_company`, `requisitos`, `imagen`, `id_pegi`, `id_tipo`) VALUES
(1, 'Monkey Island 4', 39.99, 335, 'Cuarta entrega de la afamada aventura gráfica de LucasFilm Games', '<p>Monkey Island (en español, La Isla del Mono, aunque el título se mantuvo en inglés para la versión española) es una saga de videojuegos de aventura gráfica producida y publicada por LucasArts, originariamente conocida como LucasFilms Games. Los juegos narran la historia de cómo Guybrush Threepwood intenta convertirse en el pirata más temido del Caribe, enfrentándose al malvado pirata LeChuck y conquistando el corazón de la gobernadora de la isla Mêlée, Elaine Marley.</p>\r\n<p>Ron Gilbert, el creador de la serie, sólo trabajó en los dos primeros juegos antes de abandonar LucasArts. Los derechos de Monkey Island siguieron siendo propiedad de LucasArts, y el tercer y cuarto juegos fueron publicados sin la aportación de Gilbert. Más tarde volvió a trabajar con Monkey Island, siendo el asesor de la quinta entrega, compuesta por cinco capítulos cortos producidos por Telltale Games con licencia de LucasArts.</p>', 1, 'Windows 10 8MB RAM', 'monkey4.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_productos_plataformas`
--

CREATE TABLE IF NOT EXISTS `rel_productos_plataformas` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `id_producto` int(13) NOT NULL,
  `id_plataforma` int(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rel_productos_plataformas`
--

INSERT INTO `rel_productos_plataformas` (`id`, `id_producto`, `id_plataforma`) VALUES
(1, 1, 2),
(2, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(13) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `nombre`, `correo`, `password`) VALUES
(1, 'legolas', 'Álvaro Holguera', 'profesor@laultimapregunta.com', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
