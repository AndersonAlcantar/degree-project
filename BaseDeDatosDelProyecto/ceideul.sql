-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2021 a las 18:25:51
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ceideul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_admins`
--

CREATE TABLE `tb_admins` (
  `correo_electronico` varchar(200) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_admins`
--

INSERT INTO `tb_admins` (`correo_electronico`, `nombres`, `apellidos`, `clave`) VALUES
('admin@ceideul.com', 'Admin', '', 'UniversidadLibre#Ceideul2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comentarios`
--

CREATE TABLE `tb_comentarios` (
  `id` int(255) NOT NULL,
  `nombreformato` varchar(200) NOT NULL,
  `nombre_remit` varchar(200) NOT NULL,
  `ruta` varchar(900) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `nombre_comentador` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `comentario` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_comentarios`
--

INSERT INTO `tb_comentarios` (`id`, `nombreformato`, `nombre_remit`, `ruta`, `correo`, `nombre_comentador`, `fecha`, `comentario`) VALUES
(9, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'sefsefsef'),
(10, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Daniel Alejandro Agudelo Giraldo', '18 8 2020', 'seffsefesfes'),
(11, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Daniel Alejandro Agudelo Giraldo', '18 8 2020', 'sedfsdefsefsefsefsef'),
(12, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'Padezco y te miento, siempre digo que te olvidé aunque no lo hice.\nPorque en mi esta tu fragancia y esa tímida esencia que se me presenta.\nCada vez que cierro la puerta , prendo un cigarro y recuerdo errores del pasado.\nEs elocuencia, es la vibra en un verso libre. Que siempre se escabulle para sentirse.\nEs como aquel gusano que anhela ser mariposa, quizás es linda pero no perfecta.\nSiempre hay algún problema, siempre hay una pantalla, siempre hay una falsa moral.\nHablan tanto sobre mi bohemia y de mi melancolía poco abstemia.\n\n(Quería escribir un texto cualquiera, puse la música de fondo, la trompeta de Chet. Entonces recordé.\nEl color de tu piel, la suavidad de tus labios, esas miradas que me hacen sentir en el cielo.\nPero lamentablemente, nada es eterno. Lamento, esa palabra la nombro a diario, porque pasó a ser un recordatorio. Puedo achacarme, pensarte, amarte y lamentarme, pero nada hará que vuelvas, nada hará que vuelva a creer que te poseo, porque realmente sólo eres un pájaro que visita mis aposentos.)\n\nNiego la posibilidad que algún dios me da, porque no la veo y se esfuma.\nA nadie le gusta esperar, en lo personal, yo prefiero la búsqueda.\nPero no hay búsqueda sin espera, tampoco espera sin búsqueda.\nMi cuerdas vocales se lamentan, de no alcanzar aquella nota deseada.\nLas ventanas de mi corazón son diáfanas, ya no escondo nada.\n\nMe cansé de aparentar, de amar hasta no poder más.\nHoy sólo callo y aprecio, porque cada caída es un lamento.\nPero un lamento, no te devolverá aquello muerto... por el paso del tiempo...'),
(13, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'El aullido de los perros en la noche,\ninquietante, ensordecedor ruido,\nla despoja del sueño.\nAún aturdida recuerda:\n-los perros aúllan cuando ven almas-\nSí, eso decía su abuelo.\n\nUnas vueltas en la cama,\nagitada, extraña -deben ser las sábanas prestadas- piensa ella,\n¡ah!, qué más da, si prestada es la vida, si prestados son los hijos\ny el amor también, prestado.\n\nMira la penumbra. Un suspiro. Y el aullido de los perros\ncontinúa persistente -ha de ser un alma- piensa,\nsentimientos enredados bullen\ndonde asoma la nostalgia, donde asoman sinsabores\ny la soledad clava los dedos en su garganta.\n'),
(14, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'El aullido de los perros en la noche,\ninquietante, ensordecedor ruido,\nla despoja del sueño.\nAún aturdida recuerda:\n-los perros aúllan cuando ven almas-\nSí, eso decía su abuelo.\n\nUnas vueltas en la cama,\nagitada, extraña -deben ser las sábanas prestadas- piensa ella,\n¡ah!, qué más da, si prestada es la vida, si prestados son los hijos\ny el amor también, prestado.\n\nMira la penumbra. Un suspiro. Y el aullido de los perros\ncontinúa persistente -ha de ser un alma- piensa,\nsentimientos enredados bullen\ndonde asoma la nostalgia, donde asoman sinsabores\ny la soledad clava los dedos en su garganta.\n'),
(15, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'El aullido de los perros en la noche,\ninquietante, ensordecedor ruido,\nla despoja del sueño.\nAún aturdida recuerda:\n-los perros aúllan cuando ven almas-\nSí, eso decía su abuelo.\n\nUnas vueltas en la cama,\nagitada, extraña -deben ser las sábanas prestadas- piensa ella,\n¡ah!, qué más da, si prestada es la vida, si prestados son los hijos\ny el amor también, prestado.\n\nMira la penumbra. Un suspiro. Y el aullido de los perros\ncontinúa persistente -ha de ser un alma- piensa,\nsentimientos enredados bullen\ndonde asoma la nostalgia, donde asoman sinsabores\ny la soledad clava los dedos en su garganta.\n'),
(16, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'sdgfeswgaergaergaerg'),
(17, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/15 8 2020_19-16-15_Daniel Alejandro Agudelo Giraldo_f-perfilacion.docx', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'Otras vueltas en la cama, mira el reloj,\ny los minutos suspendidos en silencio claman;\n-falta poco para que amanezca- piensa, otro suspiro de hastío desgarra su pecho,\notro día prestado aproxima su aliento, denso, casi insoportable,\ny los perros aúllan y aúllan y aúllan,\ny ella piensa -seguro es un alma, un alma en pena-\n\nLentamente se incorpora, cubierta la piel de sombras\ny ausencias en el cuerpo desnudo,\nse acerca a la ventana y el crepúsculo anida la mirada.\nSe mueven las cortinas, delicadas caricias de sus manos;\ndonde mi alma se esconde a contemplar sus sueños y velar sus días:'),
(18, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/19 8 2020_20-21-4_Daniel Alejandro Agudelo Giraldo_f-perfilacion.pdf', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'Eso me sirve muchisimo! Aunque para el siguiente paso. A mi me interesa el paso previo, cuando una persona escribe un texto, presiona \"Enviar\" y se genera un insert. Creo que los \n no aparecen cuando se envia a la db – Nick el 4 nov. 16 a las 0:28<br />\n@Nick Voy a intentar hacer un código para eso también. Dame unos minutos. – Francisco Romero el 4 nov. 16 a las 0:30 <br />\n@Nick que db usas, yo he usado MySQL Server y SQL Server y en ambas bases de datos se guardan los saltos cuando he hecho una inserción, eso si esos saltos de linea no se me muestran en el campo de la db, esos deberían aparecer cuando vas a mostrar nuevamente el texto en un textarea – JuankGlezz el 4 nov. 16 a las 0:58<br />\n@Nick Parece ser que si que deja insertar datos directamente con salto de línea en la base de datos. Te he puesto una referencia a Stackoverflow en inglés, sin embargo, comprueba por tí mismo a insertar directamente un valor con salto de línea. A mí'),
(20, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/19 8 2020_20-21-4_Daniel Alejandro Agudelo Giraldo_f-perfilacion.pdf', 'daag@ulibre.com', 'Pedro Paez', '19 8 2020', 'text area<br />\nfawefawf<br />\nasfsafasfasfasfasfa<br />\nasfasfsafaw'),
(21, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Daniel Alejandro Agudelo Giraldo', 'formularios_registrados/20 8 2020_17-40-0_Daniel Alejandro Agudelo Giraldo_f-perfilacion.pdf', 'daag@ulibre.com', 'Pedro Paez', '20 8 2020', 'le faltó los objetivos.'),
(22, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Andrés Sandoval', 'formularios_registrados/26 8 2020_17-39-46_Andrés Sandoval_f-perfilacion.pdf', 'alumno@alumno.com', 'Prueba Prueba', '26 8 2020', 'FALTA OBJETIVOS'),
(23, 'FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO', 'Andrés Sandoval', 'formularios_registrados/31 8 2020_17-3-33_Andrés Sandoval_f-perfilacion.pdf', 'alumno@alumno.com', 'Prueba Prueba', '2 9 2020', 'falta objetivos'),
(24, 'FORMATO DE ANÁLISIS PARA EL DISEÑO DE PUESTOS DE TRABAJO', 'Andrés Sandoval', 'formularios_registrados/6 9 2020_13-36-20_Andrés Sandoval_f_AnalisisDisePtrabajo.pdf', 'alumno@alumno.com', 'Luis Miguel', '6 9 2020', '<p>Aquí confirmamos algo.<br><br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>\r\n'),
(25, 'FORMATO DE ANÁLISIS PARA EL DISEÑO DE PUESTOS DE TRABAJO', 'Andrés Sandoval', 'formularios_registrados/6 9 2020_13-36-20_Andrés Sandoval_f_AnalisisDisePtrabajo.pdf', 'alumno@alumno.com', 'Luis Miguel', '6 9 2020', 'Objetivos:<br />1.El primero está mal<br />2. Fail<br />3. agregar más'),
(26, 'FORMATO DE ANÁLISIS PARA EL DISEÑO DE PUESTOS DE TRABAJO', 'Andrés Sandoval', 'formularios_registrados/6 9 2020_13-36-20_Andrés Sandoval_f_AnalisisDisePtrabajo.pdf', 'alumno@alumno.com', 'Luis Miguel', '6 9 2020', '23<br />423<br />42<br />34<br />23<br />423<br />423<br />423<br />423<br />423<br />4<br />234'),
(27, 'FORMATO DIAGNOSTICO DE APLICACIONES OFIMÁTICAS E INFORMÁTICAS', 'Andrés Sandoval', 'formularios_registrados/16 9 2020_17-9-53_Andrés Sandoval_f_DiagAppOfimatica.pdf', 'alumno@alumno.com', 'uvvudsfsd bebsdfe uvuvwevwevwe osas', '16 9 2020', 'falta objetivos'),
(28, 'FORMATO DE EVALUACIÓN FERIA EMPRESARIAL', 'Nicolás Guevara', 'formularios_registrados/17 9 2020_9-22-28_Nicolás Guevara_f_evaluacionFeriaEmpresarial.pdf', 'nico@gmail.com', 'Nicolás Guevara', '23 9 2020', 'falta objetivos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_formularios`
--

CREATE TABLE `tb_formularios` (
  `archivo` varchar(300) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo_usuario` varchar(80) NOT NULL,
  `formulario` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `seccional` varchar(40) NOT NULL,
  `archivo_adicional` varchar(900) NOT NULL,
  `archivo_adicional2` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_formularios`
--

INSERT INTO `tb_formularios` (`archivo`, `nombre`, `tipo_usuario`, `formulario`, `fecha`, `correo`, `seccional`, `archivo_adicional`, `archivo_adicional2`) VALUES
('formularios_registrados/17 9 2020_11-48-3_Nicolás Guevara_f_diagAsesoria.pdf', 'Nicolás Guevara', 'Docente', 'FORMATO DE DIAGNOSTICO PARA ASESORIA EMPRESARIAL', '17 9 2020_11-48-3', 'nico@gmail.com', 'Socorro', '', ''),
('formularios_registrados/17 9 2020_11-52-38_Nicolás Guevara_f_inscripcionFeriaEmpresarial.pdf', 'Nicolás Guevara', 'Docente', 'FORMATO DE INSCRIPCIÓN A LA FERIA EMPRESARIAL', '17 9 2020_11-52-38', 'nico@gmail.com', 'Socorro', '', ''),
('formularios_registrados/17 9 2020_11-54-14_Nicolás Guevara_f_ProtocoloExpositores.pdf', 'Nicolás Guevara', 'Docente', 'FORMATO PROTOCOLO EXPOSITORES', '17 9 2020_11-54-14', 'nico@gmail.com', 'Socorro', '', ''),
('formularios_registrados/17 9 2020_12-11-33_Andrés Sandoval_f_BancoDeIdeas.pdf', 'Andrés Sandoval', 'Estudiante', 'CUESTIONARIO- DE BANCO DE IDEAS DE NEGOCIO (CÁTEDRA DE EMPRENDIMIENTO).', '17 9 2020_12-11-33', 'alumno@alumno.com', 'Bogotá', '', ''),
('formularios_registrados/17 9 2020_12-2-7_Andrés Sandoval_f_SolicitudAccionesPreventivas.pdf', 'Andrés Sandoval', 'Estudiante', 'FORMATO DE SOLICITUD DE ACCIONES PREVENTIVAS Y DE MEJORA', '17 9 2020_12-2-7', 'alumno@alumno.com', 'Bogotá', 'archivosextra/56465_17 9 2020_12-2-7_Walter20200826.txt', ''),
('formularios_registrados/17 9 2020_12-9-30_Andrés Sandoval_f_inscripcionCreacionDeEmpresa.pdf', 'Andrés Sandoval', 'Estudiante', 'FORMATO DE INSCRIPCIÓN PARA OPCIÓN DE GRADO CREACIÓN DE EMPRESA', '17 9 2020_12-9-30', 'alumno@alumno.com', 'Bogotá', 'archivosextra/56465_17 9 2020_12-9-30_corg.txt', ''),
('formularios_registrados/17 9 2020_16-31-30_Laura Sanchez_f_ishikawa.pdf', 'Laura Sanchez', 'Egresado', 'FORMATO DIAGRAMA DE ISHIKAWA / ESPINA DE PESCADO', '17 9 2020_16-31-30', 'egresado@prueba.com', 'Cartagena', '', ''),
('formularios_registrados/17 9 2020_8-28-52_Nicolás Guevara_f_Dofa.pdf', 'Nicolás Guevara', 'Docente', 'FORMATO MATRIZ DOFA ', '17 9 2020_8-28-52', 'nico@gmail.com', 'Socorro', '', ''),
('formularios_registrados/17 9 2020_8-54-56_Andrés Sandoval_f_Dofa.pdf', 'Andrés Sandoval', 'Estudiante', 'FORMATO MATRIZ DOFA ', '17 9 2020_8-54-56', 'alumno@alumno.com', 'Bogotá', '', ''),
('formularios_registrados/17 9 2020_8-55-10_Andrés Sandoval_f_CadenaValor.pdf', 'Andrés Sandoval', 'Estudiante', 'FORMATO DE CADENA DE VALOR', '17 9 2020_8-55-10', 'alumno@alumno.com', 'Bogotá', '', ''),
('formularios_registrados/17 9 2020_9-22-28_Nicolás Guevara_f_evaluacionFeriaEmpresarial.pdf', 'Nicolás Guevara', 'Docente', 'FORMATO DE EVALUACIÓN FERIA EMPRESARIAL', '17 9 2020_9-22-28', 'nico@gmail.com', 'Socorro', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `correo_electronico` varchar(200) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `seccional` varchar(200) NOT NULL,
  `documento` varchar(200) NOT NULL,
  `archivo_adicional` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`correo_electronico`, `nombres`, `apellidos`, `clave`, `tipo_usuario`, `seccional`, `documento`, `archivo_adicional`) VALUES
('alumno@alumno.com', 'Andrés', 'Sandoval', '123', 'Estudiante', 'Bogotá', '56465', ''),
('daniel@gmail.com', 'dáníel', 'ágúdéló', '123', 'Estudiante', 'Pereira', '324324', ''),
('egresado@prueba.com', 'Laura', 'Sanchez', '12345678', 'Egresado', 'Cartagena', '56465', ''),
('nico@gmail.com', 'Nicolás', 'Guevara', '123', 'Docente', 'Socorro', '123', 'AdicionalesRegistro/123_10 9 2020_12-10-53_FORMATO ÚNICO HOJA DE VIDA.xlsx'),
('profe@edu.com', 'uvvudsfsd bebsdfe', 'uvuvwevwevwe osas', '12345678', 'Externo', 'Bogotá', '1014230', ''),
('profe@profe.com', 'Nicolás', 'Rodriguez', '123', 'Docente', 'Bogotá', '123456', ''),
('prueba4@prueba.com', 'dáníel', 'wef', '12345678', 'Egresado', 'Barranquilla', '56465', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_admins`
--
ALTER TABLE `tb_admins`
  ADD PRIMARY KEY (`correo_electronico`);

--
-- Indices de la tabla `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_formularios`
--
ALTER TABLE `tb_formularios`
  ADD PRIMARY KEY (`archivo`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`correo_electronico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
