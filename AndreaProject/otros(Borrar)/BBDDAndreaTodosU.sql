-- Base de datos: `BBDDAndreaTodosU`


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `id_alumno` int NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `tipo_documento` varchar(5) DEFAULT NULL,
  `numero_documento` int DEFAULT NULL,
  `contacto_cel` int DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `Alumno` (`id_alumno`, `nombre`, `apellido`, `tipo_documento`, `numero_documento`, `contacto_cel`, `direccion`, `email`, `password`) VALUES
(1, 'ALUMNO', 'DE PRUEBA', 'CC', 1549785130, 310459786, 'AV EL DORADO TV 15', 'PRUEBA@HOTMAIL.COM', 'prueba'),
(2, 'yajirobei', 'son', 'cc', 10031564, 31478964, 'torre karim', 'yajirobei@capsulecorp.dbz', 'cobarde'),
(3, 'dende', 'kami', 'ti', 10324657, 314657986, 'templo sagrado', 'kamidende@capsulecorp.dbz', 'nameck_out'),
(4, 'yancha', 'son', 'cc', 35497865, 7531648, 'capital del oeste', 'yancha@capsulecorp.dbz', 'novio_de_puar'),
(5, 'puar', 'son', 'ti', 103245687, 7531648, 'capital del oeste', 'puar@capsulecorp.dbz', 'novio_de_yancha'),
(10, 'goten', 'son', 'ti', 10324655, 314567985, 'Monte paoz', 'kakaroto@CapsuleCorp.dbz', 'nube_voladora'),
(11, 'trunks', 'son', 'ti', 10321548, 314679859, 'capital del oeste(cc)', 'veguetap@capsulecorp.dbz', 'mai_and_trunks');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Curso`
--

CREATE TABLE `Curso` (
  `id` int NOT NULL,
  `id_profesor` int DEFAULT NULL,
  `modalidad` varchar(20) DEFAULT NULL,
  `numero_clases` int DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `Curso` (`id`, `id_profesor`, `modalidad`, `numero_clases`, `precio`, `img`, `descripcion`, `nombre`) VALUES
(1, 2, 'presencial', 250, '578000.00', '../img/clase_guitarra.jpg', 'Nuestro curso de guitarra ofrece la posibilidad de tomar clases  presenciales, y si el estudiante no está satisfecho con la primera clase, se le devolverá el dinero.\r\n Además, el curso se adapta a todos los niveles, desde lo más básico hasta niveles avanzados, y se realizará un examen para determinar el nivel del estudiante.\r\n ¡Aprende a tocar la guitarra con los mejores expertos en música!', 'Guitarra'),
(2, 6, 'presensial', 300, '600000.00', '../img/clase_piano.jpg', 'Descubre el mundo del piano con nuestro curso que ofrece clases  presenciales. Garantizamos la satisfacción total de nuestros estudiantes, devolviendo el dinero si no quedan satisfechos con la primera clase. Adaptado a todos los niveles, desde principiantes hasta avanzados, con un examen para determinar tu nivel. ¡Aprende a tocar el piano con los mejores profesionales de la música!', 'Piano'),
(3, 3, 'presencial', 250, '478000.00', '../img/clase_violin.jpg', '¡Descubre la magia del violín en nuestro apasionante curso! Clases virtuales o presenciales para potenciar tu talento. Si no quedas fascinado, ¡te reembolsamos! Adaptable a todos los niveles con un examen emocionante. Aprende con maestros apasionados.', 'Violin'),
(4, 4, 'presencial', 300, '600000.00', '../img/clase_bongos.jpg', '¡Explora el ritmo de los bongos en nuestro vibrante curso! Clases virtuales o presenciales para despertar tu pasión musical. Si no te contagiamos, ¡te reembolsamos! Apto para todos los niveles con un estimulante examen. Aprende con los mejores maestros del ritmo.', 'Bongos'),
(5, 7, 'presencial', 300, '478000.00', '../img/clase_sarxo.jpg', '¡Adéntrate en el misterioso mundo del saxofón con nuestro curso escalofriantemente apasionante! Sumérgete en clases presenciales, y si la primera clase no te envuelve en una oscura melodía, ¡te devolvemos tu alma! Este curso tenebroso se adapta a todos los niveles, desde iniciados temerosos hasta virtuosos de pesadilla. Un examen aterrador determinará tu nivel. ¡Aprende a dominar el saxofón con los maestros más oscuros de la música y desata tus habilidades en una sinfonía tenebrosa!', 'Sarxo'),
(6, 5, 'presencial', 350, '500000.00', '../img/clase_arpa.jpg', 'Explora la majestuosidad del arpa en nuestro curso guiado por un sabio maestro. Toma clases presenciales, y si no encuentras armonía en el primer encuentro, puedes abandonar. Adaptado a todos los niveles, desde aprendices reflexivos hasta virtuosos intrépidos. A través de una evaluación precisa, descubriremos tu nivel. ¡Descubre la magia del arpa junto a los más sabios expertos en música y deja que tu melodía trascienda con valentía!', 'Arpa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Curso_Alumno`
--

CREATE TABLE `Curso_Alumno` (
  `id` int NOT NULL,
  `id_alumno` int DEFAULT NULL,
  `id_curso` int DEFAULT NULL,
  `progreso` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `Curso_Alumno` (`id`, `id_alumno`, `id_curso`, `progreso`) VALUES
(226, 4, 4, 0),
(228, 4, 5, 0),
(229, 10, 4, 0),
(230, 10, 3, 0),
(231, 10, 1, 0),
(232, 10, 5, 0),
(233, 11, 1, 0),
(234, 11, 5, 0),
(235, 11, 3, 0),
(236, 11, 4, 0),
(237, 5, 2, 0),
(238, 5, 1, 0),
(239, 5, 4, 0),
(240, 5, 6, 0),
(241, 5, 3, 0);

-- --------------------------------------------------------


CREATE TABLE `Duda` (
  `id_duda` int NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `contenido_duda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------



CREATE TABLE `Pago` (
  `id_pago` int NOT NULL,
  `id_alumno` int DEFAULT NULL,
  `id_curso` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------



CREATE TABLE `Profesor` (
  `id_profesor` int NOT NULL,
  `cedula` int DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `contacto_cel` int DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `especialidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `Profesor` (`id_profesor`, `cedula`, `nombre`, `apellido`, `contacto_cel`, `email`, `direccion`, `especialidad`) VALUES
(1, 79845619, 'Profesor', 'De Pureba', 7779435, 'profeDePrueba@gmail.com', 'Cll15#53-05', 'Guitarra'),
(2, 654879, 'Son Goku', 'Kakaroto', 314567985, 'kakaroto@CapsuleCorp.dbz', 'Monte paoz', 'Guitarra'),
(3, 3589612, 'Son Krilin', 'kuririn', 31469487, 'krilin@CapsuleCorp.dbz', 'kame house', 'violin'),
(4, 5497861, 'vegueta', 'son', 314679859, 'veguetap@capsulecorp.dbz', 'capital del oeste(cc)', 'bongos'),
(5, 3459786, 'piccolo', 'daimao', 314679845, 'kamisama@capsulecorp.dbz', 'zona rural', 'arpa'),
(6, 3549761, 'ten shin han', 'son', 314645879, 'ten@capsulecorp.dbz', 'montañas heladas del sur', 'piano'),
(7, 8549785, 'emperador', 'freezer', 9756482, 'emperador@icekingdom.dbz', 'ice kingdom', 'sarxo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD UNIQUE KEY `numero_documento` (`numero_documento`);

--
-- Indices de la tabla `Curso`
--
ALTER TABLE `Curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Curso_Profesor` (`id_profesor`);

--
-- Indices de la tabla `Curso_Alumno`
--
ALTER TABLE `Curso_Alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Curso_Alumno_Alumno` (`id_alumno`),
  ADD KEY `FK_Curso_Alumno_Curso` (`id_curso`);

--
-- Indices de la tabla `Duda`
--
ALTER TABLE `Duda`
  ADD PRIMARY KEY (`id_duda`);

--
-- Indices de la tabla `Pago`
--
ALTER TABLE `Pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `FK_Pago_Alumno` (`id_alumno`),
  ADD KEY `FK_Pago_Curso` (`id_curso`);

--
-- Indices de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  MODIFY `id_alumno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Curso`
--
ALTER TABLE `Curso`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Curso_Alumno`
--
ALTER TABLE `Curso_Alumno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT de la tabla `Duda`
--
ALTER TABLE `Duda`
  MODIFY `id_duda` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Pago`
--
ALTER TABLE `Pago`
  MODIFY `id_pago` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  MODIFY `id_profesor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Curso`
--
ALTER TABLE `Curso`
  ADD CONSTRAINT `FK_Curso_Profesor` FOREIGN KEY (`id_profesor`) REFERENCES `Profesor` (`id_profesor`);

--
-- Filtros para la tabla `Curso_Alumno`
--
ALTER TABLE `Curso_Alumno`
  ADD CONSTRAINT `FK_Curso_Alumno_Alumno` FOREIGN KEY (`id_alumno`) REFERENCES `Alumno` (`id_alumno`),
  ADD CONSTRAINT `FK_Curso_Alumno_Curso` FOREIGN KEY (`id_curso`) REFERENCES `Curso` (`id`);

--
-- Filtros para la tabla `Pago`
--
ALTER TABLE `Pago`
  ADD CONSTRAINT `FK_Pago_Alumno` FOREIGN KEY (`id_alumno`) REFERENCES `Alumno` (`id_alumno`),
  ADD CONSTRAINT `FK_Pago_Curso` FOREIGN KEY (`id_curso`) REFERENCES `Curso` (`id`);
COMMIT;


