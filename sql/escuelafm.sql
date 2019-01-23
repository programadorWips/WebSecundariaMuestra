-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2019 a las 04:00:58
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelafm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasprofesores`
--

CREATE TABLE `materiasprofesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedulaProf` varchar(255) NOT NULL,
  `materia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiasprofesores`
--

INSERT INTO `materiasprofesores` (`id`, `nombre`, `cedulaProf`, `materia`) VALUES
(1, 'Antony Hunter', '27756880', 'Castellano'),
(2, 'Natalia Torpedo', '577734', 'Geografia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensum`
--

CREATE TABLE `pensum` (
  `id` int(11) NOT NULL,
  `periodo1` varchar(255) NOT NULL,
  `periodo2` varchar(255) NOT NULL,
  `periodo3` varchar(255) NOT NULL,
  `periodo4` varchar(255) NOT NULL,
  `periodo5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pensum`
--

INSERT INTO `pensum` (`id`, `periodo1`, `periodo2`, `periodo3`, `periodo4`, `periodo5`) VALUES
(1, 'Ingles', 'Ingles', 'Ingles', 'Ingles', 'Ingles'),
(2, 'Castellano', 'Castellano', 'Castellano', 'Castellano', 'Castellano'),
(3, 'Matematica', 'Matematica', 'Matematica', 'Matematica', 'Matematica'),
(4, 'Edu Fisica', 'Edu Fisica', 'Edu Fisica', 'Edu Fisica', 'Edu Fisica'),
(5, 'Artes', 'Artes', 'Fisica', 'Fisica', 'Fisica'),
(6, 'Ciencias Naturales', 'Ciencias Naturales', 'Quimica', 'Quimica', 'Quimica'),
(7, 'Geometria e Historia', 'Geometria e Historia', 'Biologia', 'Biologia', 'Biologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peridoalumnos`
--

CREATE TABLE `peridoalumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedulaAlum` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peridoalumnos`
--

INSERT INTO `peridoalumnos` (`id`, `nombre`, `cedulaAlum`, `periodo`) VALUES
(1, 'Jhoosman Mata', '19778055', '2'),
(2, 'Nestor Gonzales', '2667722', '5'),
(3, 'Milagro Perez', '2599887', '4'),
(4, 'Natalia Montero', '27756877', '2'),
(5, 'Sofia Vergara', '27657980', '2'),
(6, 'Jimmy Toney', '2349556', '1'),
(7, 'Antony Buges jr', '1977456', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progresoacademico`
--

CREATE TABLE `progresoacademico` (
  `id` int(11) NOT NULL,
  `cedulaAlumno` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `promedio1` int(11) NOT NULL,
  `promedio2` int(11) NOT NULL,
  `promedio3` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `cedulaProfesor` varchar(255) NOT NULL,
  `materia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `progresoacademico`
--

INSERT INTO `progresoacademico` (`id`, `cedulaAlumno`, `periodo`, `promedio1`, `promedio2`, `promedio3`, `nota`, `cedulaProfesor`, `materia`) VALUES
(1, '27756877', '2', 12, 10, 13, 12, '27756880', 'Castellano'),
(2, '27657980', '1', 11, 12, 14, 12, '577734', 'Geografia'),
(3, '2349556', '1', 0, 0, 0, 0, '', ''),
(4, '1977456', '4', 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `edad`, `cedula`, `cargo`, `direccion`, `telefono`, `foto`, `estado`) VALUES
(3, 'admin', '$2y$10$QhEuB.U17JJimhHoMHMoYOe6TGjXmprR0QxSX8r2VW8yhdcS2fM4u', 'Johan Antonio', '25', '23944069', 'admin', 'Caracas la Urbina Calle 3A apt Alba', '02122414243', 'hunterXhunter.jpg', 'Activo'),
(4, '27756880', '$2y$10$kwj80qnqPBxpweET.D7fG.xxgoXJRbwTG5ZylP96.lKYubsEVUfcG', 'Antony Hunter', '44', '27756880', 'profesor', 'El Rincon Calle 4', '02129755567', 'Perfil-profesor2.jpg', 'Activo'),
(8, '27756877', '$2y$10$5xmYhJuD6ksJpWs9bF5TAOdZDqQZG5Ls.L8OmWJtPF6d4t6OeDmku', 'Natalia Montero', '19', '27756877', 'estudiante', 'La Sabana calle Giraldo', '02122414243', 'perfil-estudiante2.jpg', 'Activo'),
(9, '27657980', '$2y$10$HHMhBhUFd3fOyjY98w35ruO0ITr4th0gZJPOocK4nm5t6W.lmU53W', 'Sofia Vergara', '17', '27657980', 'estudiante', 'Caracas la Urbina Calle 3A apt Alba', '0212111988', 'perfil-estudiante3.jpg', 'Activo'),
(10, 'admin2', '$2y$10$0hJmbsZ7JamIR6iPQhdrNe/jZqUAhJIeXzE.2hm.Bdy.EH55JGTvi', 'Jonh Snow', '24', '1922334', 'admin', 'El Rincon Calle 4', '04121093622', 'fotoAdmin.JPG', 'Activo'),
(11, '2349556', '$2y$10$48Yyp/amCYSGhg1S7T62VuIFcX21gsmFWNXV63WQMtZ9qFMVQgNlW', 'Jimmy Toney', '21', '2349556', 'estudiante', 'El Rincon Calle 4', '5555555', 'hunterXhunter2.jpg', 'Activo'),
(12, '1977456', '$2y$10$vK7vlkLqw2xiyz1BUVSPBOBW5A5YQPbDY.HroBquUMsx0HPmwqMIO', 'Antony Buges jr', '18', '1977456', 'estudiante', 'El Rincon Calle 7', '555667444', 'hunterXhunter2.jpg', 'Activo'),
(13, '577734', '$2y$10$XjnA5NAlIxWHSqZ/Oa9WA.5OwaCR6ieq/FtAPTUBk02pMwPNVt65O', 'Natalia Torpedo', '33', '577734', 'profesor', 'El Rincon Calle 8', '7888445334', 'Perfil-profesor3.jpg', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materiasprofesores`
--
ALTER TABLE `materiasprofesores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedulaProf` (`cedulaProf`);

--
-- Indices de la tabla `pensum`
--
ALTER TABLE `pensum`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peridoalumnos`
--
ALTER TABLE `peridoalumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedulaAlum` (`cedulaAlum`);

--
-- Indices de la tabla `progresoacademico`
--
ALTER TABLE `progresoacademico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materiasprofesores`
--
ALTER TABLE `materiasprofesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pensum`
--
ALTER TABLE `pensum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `peridoalumnos`
--
ALTER TABLE `peridoalumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `progresoacademico`
--
ALTER TABLE `progresoacademico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
