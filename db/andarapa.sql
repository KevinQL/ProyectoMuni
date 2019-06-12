-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2019 a las 18:33:09
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `andarapa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gobernante`
--

CREATE TABLE `gobernante` (
  `idgobernante` int(11) NOT NULL,
  `dni_gobernante` varchar(8) DEFAULT NULL,
  `nombre_gober` varchar(50) DEFAULT NULL,
  `apellido_gober` varchar(50) DEFAULT NULL,
  `cargo_gober` varchar(15) DEFAULT NULL,
  `mensage` varchar(2000) DEFAULT NULL,
  `gestion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='los distintos gobernantes ya sean alcaldes o regidores, que gobiernen en el posterior y en la actualidad.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `dir_imagen` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='almacenamiento de todas las imagenes de la web';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision_vision`
--

CREATE TABLE `mision_vision` (
  `id_mv` int(11) NOT NULL,
  `tipo_mv` varchar(15) DEFAULT NULL,
  `contenido_mv` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='informacionsobre la misión y visión de la institución';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(11) NOT NULL,
  `titulo_noti` varchar(500) DEFAULT NULL,
  `introduccion_noti` varchar(500) DEFAULT NULL,
  `contenido` varchar(10000) DEFAULT NULL,
  `fecha_publi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo_noti`, `introduccion_noti`, `contenido`, `fecha_publi`) VALUES
(1, 'SE MURIÓ MI GATO', 'El gato volador fue encontrado muerto en las orillas del río siete vidas', 'Esta mañana, las autoridades del planeta gatuno, se dieron con las sorpresa de que el gato volador no volaría nunca más. El lamentable hecho se dio a conocer después de que una rata comunicara a las fuerzas poligatiales de que el supergato volador se encontraba muerto en las orillas del río siete vidas. Según investigaciones, el gato estaría drogado y pensando que se acercaba a su cama se durmió en las orillas del rio, ahogándose para el día siguiente...', '2019-06-06'),
(2, 'Fin del mundo 2022', 'Se acerca el Fin del mundo...', 'Las profecías del vidente no vidente, aseguran el fin del mundo para el año 2022. En una entrevista, el vidente no vidente asegura a ver soñado con números 2, 0 y 22, además, asegura que alguien le susurra en sus sueños la palabra FIN... No cabe dudas de que el fin del mundo está cerca y todos vamos a morir', NULL),
(3, 'El equipo del mal gana', 'El equipo del mal gana por una diferencia de -4', 'El campeonato de todos los perdedores finalizó con una hazaña que nunca en la vida podrá ser olvidado. El equipo del mal, se coronó campeón luego de perder merecidamente los partido 1 y 4, en donde en ninguna de las 2 jugo ni ganó... ', '2019-06-10'),
(4, 'Celulares perrwey gana millones', 'Después de que EAA rompiera lazos con perrwey, los ingresos económicos se salieron de órbitas...', 'La compañía perrwey gana millones de soles después de que EA no quiera nada con ellos..', '2019-06-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id_novedades` int(11) NOT NULL,
  `titulo_nove` varchar(50) DEFAULT NULL,
  `direc_nove` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_proy`
--

CREATE TABLE `obras_proy` (
  `id_op` int(11) NOT NULL,
  `titulo_op` varchar(500) DEFAULT NULL,
  `codigo_op` varchar(100) DEFAULT NULL,
  `contenido_op` varchar(10000) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='consiste en almacenar la información e obras y proyectos ';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama`
--

CREATE TABLE `organigrama` (
  `id_organigrama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='el organigrama de la institucion y actualizar dependiendo al incremento de dependencias en oficionas o nuevos sectores.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_desarrollo`
--

CREATE TABLE `plan_desarrollo` (
  `id_plan_desarrollo` int(11) NOT NULL,
  `titulo_plan` varchar(150) DEFAULT NULL,
  `contenido_plan` varchar(10000) DEFAULT NULL,
  `direc_plan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='planes desarrollados por los distintos gobiernos, esto es cambiante segun entren nuevas gestiones.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idslider` int(11) NOT NULL,
  `titulo_slider` varchar(150) DEFAULT NULL,
  `imagen_organigrama_id_organigrama` int(11) NOT NULL,
  `imagen_organigrama_usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `dni_usuario` varchar(8) NOT NULL,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `apellido_usuario` varchar(50) DEFAULT NULL,
  `contraseña_usuario` varchar(20) DEFAULT NULL,
  `cel_usuario` varchar(9) DEFAULT NULL,
  `direc_usuario` varchar(80) CHARACTER SET big5 DEFAULT NULL COMMENT 'El usuario sera quien administre todos los contenidos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gobernante`
--
ALTER TABLE `gobernante`
  ADD PRIMARY KEY (`idgobernante`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `mision_vision`
--
ALTER TABLE `mision_vision`
  ADD PRIMARY KEY (`id_mv`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id_novedades`);

--
-- Indices de la tabla `obras_proy`
--
ALTER TABLE `obras_proy`
  ADD PRIMARY KEY (`id_op`);

--
-- Indices de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD PRIMARY KEY (`id_organigrama`);

--
-- Indices de la tabla `plan_desarrollo`
--
ALTER TABLE `plan_desarrollo`
  ADD PRIMARY KEY (`id_plan_desarrollo`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idslider`,`imagen_organigrama_id_organigrama`,`imagen_organigrama_usuario_idusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mision_vision`
--
ALTER TABLE `mision_vision`
  MODIFY `id_mv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `obras_proy`
--
ALTER TABLE `obras_proy`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  MODIFY `id_organigrama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_desarrollo`
--
ALTER TABLE `plan_desarrollo`
  MODIFY `id_plan_desarrollo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
