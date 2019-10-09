-- Base de datos: `login`
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `login`;

-- Estructura de tabla para la tabla `usuarios`

CREATE TABLE `usuarios` (
  `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(250) COLLATE utf8_spanish_ci NOT NULL UNIQUE KEY,
  `password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcado de datos para la tabla `usuarios`

INSERT INTO `usuarios` (`user_id`, `username`, `password`, `fecha_creacion`) VALUES
(1, 'juanpe', '$2y$10$Y6cxProhaHqkc0vjUrWJm.JMa1Lndlpo8j2GI6pavjKKctp4Es3.C', '2019-10-09 00:43:35');

