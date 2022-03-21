-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 10:18:36
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esc749`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `dni_alumno` int(11) NOT NULL,
  `ape_alumno` varchar(55) DEFAULT NULL,
  `nom_alumno` varchar(55) DEFAULT NULL,
  `curso` varchar(8) DEFAULT NULL,
  `saldo_alumno` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `dni_alumno`, `ape_alumno`, `nom_alumno`, `curso`, `saldo_alumno`) VALUES
(1, 33123123, 'Hanss', 'Ramón', '1°2°', 4),
(3, 33123113, 'Gun', 'Tom', '2° 3°', 6),
(4, 33221122, 'Shel', 'Marco', '3° 2°', 0),
(5, 22113313, 'Franz', 'Roberts', '5° 4°', 30),
(6, 112211223, 'Richards', 'Michaels', '3° 3°', 3),
(7, 33000123, 'James', 'John', '3° 2°', 9.75),
(9, 33578777, 'Rogerts', 'Steven', '5° 2°', -5),
(10, 11223313, 'Jons', 'Juan', '5° 2°', 56.25),
(11, 55123123, 'Zappa', 'Frank', '5° 2°', 10),
(12, 55767888, 'Smith', 'Gaston', '5° 2°', 10),
(13, 55767688, 'Fran', 'Cafka', '5° 2°', -30),
(14, 23557788, 'Teysera', 'Sebastián', '5° 2°', 10),
(15, 55123321, 'Saa', 'Dario', '5° 2°', 0),
(16, 66312132, 'See', 'Si', '5° 2°', -30),
(17, 123012, 'Juls', 'Peter', '5° 2°', 1.75),
(18, 123123, 'Hang', 'Macoy', '3° 6°', 0),
(19, 123555, 'Jars', 'Rick', '3° 3°', 0),
(20, 11122233, 'Grr', 'Ton', '5° 2°', 0),
(21, 11133322, 'ooo', 'kim', '', 0),
(22, 11111222, 'Creed', 'Juqn', '', -5),
(23, 5, 'aaa', 'aa', '', 0),
(24, 3, 'aaa', 'aa', '', 0),
(25, 2, 'asas', 'as', '', 7),
(26, 6, 'ss', 'sss', '', 0),
(27, 7, '', '', '', 0),
(28, 8, '', '', '', 0),
(29, 9, '', '', '', 0),
(30, 11, '', '', '', 0),
(31, 12, '', '', '', 0),
(32, 13, '', '', '', 0),
(33, 15, '', '', '', 0),
(34, 4999062, '', '', '0', 0),
(35, 1, 'as', 'ss', '', 5),
(36, 23, '', '', '', 0),
(37, 32, 'com', 'you', '3° 3°', 9),
(38, 33, 'sad', 'das', '', 4),
(39, 35, 'deded', 'rfrfrf', '3° 3°', -2),
(40, 36, 'didi', 'fff', '7° 3°', 0),
(41, 37, 'rerer', 'ererer', '7° 3°', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `cod_compra` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `letra_fact` varchar(1) NOT NULL,
  `num_fact` varchar(13) NOT NULL,
  `comercio` varchar(32) NOT NULL,
  `monto_compra` float NOT NULL,
  `desc_compra` varchar(132) NOT NULL,
  `usuario` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`cod_compra`, `fecha_compra`, `letra_fact`, `num_fact`, `comercio`, `monto_compra`, `desc_compra`, `usuario`) VALUES
(1, '2019-04-22', 'B', '123123', '', 7, 'ffff', ''),
(2, '2019-04-22', 'A', '333', '', 2, 'aaa', ''),
(3, '2019-04-22', 'B', '11122', '', 3, 'ddd', ''),
(4, '2019-04-22', 'C', '333', 'ferris', 0, '', ''),
(5, '2019-04-22', 'B', '22233', '', 0, '', ''),
(6, '2019-04-23', 'B', '2233311', '', 0, 'jojj', ''),
(7, '2019-05-10', 'B', '232311', '', 3, 'ddddddd', ''),
(8, '2019-05-10', 'B', '232312', '', 5, 'ffff', ''),
(9, '2019-05-14', 'B', '111233', '', 3.25, 'frfrfrf', ''),
(10, '2019-05-16', 'B', '13131313', 'ferri man', 3, 'asa', ''),
(11, '2019-05-16', 'B', '11111222', 'ferr', 5, 'fafafafa', ''),
(12, '2019-06-06', 'B', '5553355', 'freer', 2212, 'rfrfrfr', ''),
(13, '2019-06-06', 'B', '0000-332311', 'rarar', 3, 'ttt', ''),
(14, '2019-06-06', 'B', '0000-123123', 'dededed', 4, 'tetette', ''),
(15, '2019-06-06', 'B', '0000-12312311', 'rererer', 3, 'dededed', ''),
(16, '2019-07-25', 'B', '0000-12312318', 'Loa', 5, 'Cosasas', 'Ariel'),
(17, '2019-07-27', 'B', '0000-12312319', 'Loma', 100, 'Cositas y más cosas', 'Ariel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id_periferico` int(11) NOT NULL,
  `id_solicitud` int(11) NOT NULL,
  `fecha_dev` date NOT NULL,
  `hora_dev` time NOT NULL,
  `usuario` varchar(32) NOT NULL,
  `obs_devolucion` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `dni_docente` int(11) NOT NULL,
  `ape_docente` varchar(52) DEFAULT NULL,
  `nom_docente` varchar(52) DEFAULT NULL,
  `saldo_docente` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `dni_docente`, `ape_docente`, `nom_docente`, `saldo_docente`) VALUES
(1, 20622767, 'Acosta', 'Andrea', 0),
(2, 28667249, 'Acuña', 'Alberto Marcelo', 0),
(3, 31332718, 'Alonqueo', 'Valeria', 0),
(4, 35658737, 'Altuna', 'Muriel', 0),
(5, 36307331, 'Alvarado', 'Jorgelina Soledad', 0),
(6, 34706389, 'Alvarado', 'Manuel', 0),
(7, 21355208, 'Alvarez', 'Beatriz Mabel', 0),
(8, 32697458, 'Alvarez', 'Cynthia Elizabeth', 0),
(9, 20026506, 'Alvarez', 'Laura Beatriz', 0),
(10, 16427051, 'Ankudowicz', 'Rosa Maria', 0),
(11, 12690458, 'Aparicio', 'Nilda Cristina', 0),
(12, 16528894, 'Aquino', 'Miriam Serafina', 0),
(13, 24514184, 'Arias', 'José Eduardo', 0),
(14, 23489893, 'Arizcuren', 'Diego Ignacio', 0),
(15, 25962050, 'Arredondo', 'Karina Evelin', 0),
(16, 17129165, 'Arroyo', 'Jorge Daniel', 0),
(17, 32801690, 'Arteaga', 'Valeria Giselle', 0),
(18, 14672650, 'Avila', 'Adriana Arminda', 0),
(19, 11769988, 'Avila', 'Americo Gustavo', 0),
(20, 28637125, 'Avila', 'Maria Fernanda', 0),
(21, 8396978, 'Azzi', 'Adolfo Ricardo', 0),
(22, 24929760, 'Azzi', 'Gastón Ezequiel', 0),
(23, 28036833, 'Badcok', 'Juan Matias', 0),
(24, 23439533, 'Bahamonde', 'Mónica Susana', 0),
(25, 23905765, 'Baigorria', 'Walter Rubén', 0),
(26, 33574659, 'Barrionuevo', 'Hector Ariel', 0),
(27, 32923078, 'Barrionuevo', 'Marcos Simon', 0),
(28, 36494622, 'Barrionuevo', 'Silda Anahi', 0),
(29, 27613380, 'Bellido', 'Brenda Noelia', 0),
(30, 17622871, 'Bellido', 'Carlos Adan', 0),
(31, 18042294, 'Bitopoulos', 'Mariela', 0),
(32, 30936799, 'Blanco', 'Rodrigo Andrés', 0),
(33, 31559157, 'Blandi', 'Ayelen', 0),
(34, 16033870, 'Bravo', 'Rita Dolores', 0),
(35, 4999063, 'Bustamante', 'Reyes Mario', 103),
(36, 16363962, 'Buzzi', 'Alfredo', 0),
(37, 20843092, 'Cabero', 'Emilce Beatriz', 0),
(38, 12742817, 'Cabrera', 'Stella Maris', 0),
(39, 21586929, 'Cañadas Perez', 'Francisco', 0),
(40, 17398160, 'Carbone', 'Pablo Alfredo', 0),
(41, 23032893, 'Carcamo', 'Javier Fernando', 0),
(42, 24302074, 'Carcamo', 'Ricardo', 0),
(43, 20237118, 'Carcamo', 'Silvia', 0),
(44, 24400286, 'Cardenas', 'Gladys Mabel', 0),
(45, 32429150, 'Cardozo', 'Nilda Beatriz', 0),
(46, 28076461, 'Carli', 'Fabian', 0),
(47, 28075461, 'Carli', 'Germán Fabián', 0),
(48, 29585050, 'Carrizo', 'Alfredo Daniel', 0),
(49, 12593008, 'Carrizo', 'Efrain', 0),
(50, 32010925, 'Caseres', 'Marcos David', 0),
(51, 17028493, 'Cejas', 'Blanca Liliana', 0),
(52, 21538103, 'Centurion', 'Paula Jorgelina', 0),
(53, 26312790, 'Cerezo', 'Maria Eugenio', 0),
(54, 31985894, 'Cesaretti', 'Gino', 0),
(55, 29585255, 'Ciciufi', 'Renata', 0),
(56, 28636955, 'Cifuentes Amaya', 'Matias', 0),
(57, 32955900, 'Colombo', 'Julia Soledad', 0),
(58, 16633655, 'Conci', 'Ana Maria', 0),
(59, 32165720, 'Condori', 'Ruth Elizabeth', 0),
(60, 29896587, 'Cordoba', 'Lorena Del Valle', 0),
(61, 18289927, 'Costes', 'Hector Marcelo', 0),
(62, 22632471, 'Crisci', 'Maria Cecilia', 0),
(63, 12879910, 'Crisci', 'Marta Susana', 0),
(64, 16001032, 'Cuello', 'Susana Marta', 0),
(65, 34901218, 'Cuenca', 'Romina Marisel', 0),
(66, 23439616, 'Cutic', 'Gustavo  Mariano', 0),
(67, 12593547, 'Da Silva', 'Manuel Antonio', 0),
(68, 17769644, 'Davila', 'Sandra Marcela', 0),
(69, 32490983, 'De Monte', 'Marcia Debora', 0),
(70, 13040148, 'Del Piccolo', 'Dina Rosa', 0),
(71, 18460082, 'Demarie', 'Pablo Marcelo', 0),
(72, 12593829, 'Dias Agostino', 'Isilda', 0),
(73, 32245193, 'Diaz', 'Cristina Ines', 0),
(74, 36719527, 'Diaz', 'Enzo', 0),
(75, 35658533, 'Diaz', 'Yanina', 0),
(76, 29585786, 'Díaz', 'Marcela Noemí', 0),
(77, 22336795, 'Dip', 'Sergio Daniel', 0),
(78, 25962111, 'Duarte', 'Paula Lorena', 0),
(79, 18880114, 'Escalona', 'Carlos Roberto', 0),
(80, 21586087, 'Escudero', 'Ema Marina', 0),
(81, 17129651, 'Fernandez', 'Sergio Daniel', 0),
(82, 28702680, 'Ferreira', 'Valeria', 0),
(83, 32537398, 'Ferreyra', 'Ivana Gisela', 0),
(84, 24302295, 'Figueroa', 'Viviana B.', 0),
(85, 20034084, 'Fitipaldi', 'Karina', 0),
(86, 34048470, 'Fogar', 'Maria Cristina', 0),
(87, 24521222, 'Fontana', 'Fernando', 0),
(88, 22055810, 'Fretez', 'Sofia Magdalena', 0),
(89, 28075549, 'Fuentes', 'Ramon Pablo', 0),
(90, 35659438, 'Fuligna', 'Fernanda Anabella', 0),
(91, 23032407, 'Gaitan', 'Marcelo German', 0),
(92, 10164327, 'Galante', 'Ester Beatriz', 0),
(93, 27195614, 'Galarza', 'Rosana Elizabet', 0),
(94, 32352355, 'Galdames', 'Pablo Daniel', 0),
(95, 24929448, 'Gallardo', 'Sergio Manuel', 0),
(96, 26663533, 'Garcia', 'Eliana Maria Deolinda', 0),
(97, 16001866, 'Garcia', 'Maria Susana', 0),
(98, 11530117, 'Gauna', 'Carlos Anibal', 0),
(99, 14672959, 'Gauna', 'Dulio Nelson', 0),
(100, 27492700, 'Gomez', 'Hugo Orlando', 0),
(101, 17129284, 'Gómez', 'Lucinda', 0),
(102, 29239818, 'Gómez', 'Rubén Alejandro', 0),
(103, 24302625, 'Gonzalez', 'Fernando', 0),
(104, 23439842, 'Gonzalez', 'Paola Alejandra', 0),
(105, 20052386, 'Grandinetti', 'Marcela Silvina', 0),
(106, 25127177, 'Guardia', 'Mariano Christian', 0),
(107, 20237247, 'Guerra', 'Pablo Alberto', 0),
(108, 27198185, 'Guidetti', 'Martín', 0),
(109, 10219713, 'Haga', 'Norma Del Valle', 0),
(110, 32955914, 'Haro', 'Marianela Muriel', 0),
(111, 17095016, 'Haro', 'Nestor Raul', 0),
(112, 31794015, 'Hermosilla', 'Alexis Segundo', 0),
(113, 20235252, 'Hernandez', 'Glenda Mabel', 0),
(114, 16364086, 'Hernandez', 'Marcela', 0),
(115, 17887175, 'Hernandez', 'Ramon Ricardo', 0),
(116, 28075694, 'Herrera', 'Cristina De Los Angeles', 0),
(117, 17729573, 'Herrera', 'Graciela Mabel', 0),
(118, 27699119, 'Herrera', 'Lucía Inés', 0),
(119, 16960262, 'Herrera', 'Patricia Del Valle', 0),
(120, 23435325, 'Hornos', 'Carlos Javier', 0),
(121, 32697722, 'Huaiquil', 'Bruno', 0),
(122, 18820726, 'Huichaqueo', 'Alejandro Julian', 0),
(123, 17129626, 'Ivanoff', 'Sonia Liliana', 0),
(124, 18027102, 'Ivanovich', 'Sandra Elizabeth', 0),
(125, 30303085, 'Jimenez', 'Lorena Solana', 0),
(126, 27841813, 'Juarant Font', 'Fabiana', 0),
(127, 32986270, 'Kisa', 'Alexa', 0),
(128, 13253710, 'Koroluk', 'Sergio David', 0),
(129, 12593309, 'Laacre', 'Raul Hector', 0),
(130, 24302868, 'Lago', 'Fernando', 0),
(131, 31686560, 'Lagraña', 'Natalia Elizabeth', 0),
(132, 28636913, 'Lamberti', 'Vanesa', 0),
(133, 29239937, 'Lavagna', 'Gabriel Andres', 0),
(134, 32917590, 'Legal', 'Graciela Beatriz', 0),
(135, 26328320, 'León', 'Nancy', 0),
(136, 29585993, 'Lera', 'Analia', 0),
(137, 21329670, 'Lescano', 'Cecilia Del Valle', 0),
(138, 12771803, 'Lettieri', 'Oscar', 0),
(139, 29024520, 'Liquitay', 'Ezequiel Efrain Rafael', 0),
(140, 30319115, 'Lobo', 'Alicia Noemi', 0),
(141, 7821364, 'Lozowski', 'Eugenio Alberto', 0),
(142, 16200412, 'Lucio', 'Hector Ruben', 0),
(143, 37665196, 'Luis', 'Dario', 0),
(144, 25659898, 'Lujan', 'Muriel', 0),
(145, 29585480, 'Macías', 'Paula Sabina', 0),
(146, 18600981, 'Maimó', 'Ricardo Ernesto', 0),
(147, 21586734, 'Mamani', 'María Paula', 0),
(148, 14672660, 'Mancilla', 'Monica Graciela', 0),
(149, 17622943, 'Mancilla', 'Sandra Viviana', 0),
(150, 31839502, 'Mancilla', 'Verónica Natalia', 0),
(151, 35171785, 'Mansilla', 'Daniel Alejandro', 0),
(152, 34664580, 'Mansilla', 'David Leonardo', 0),
(153, 27907653, 'Mansilla', 'Luis Daniel', 0),
(154, 27353404, 'Mansilla', 'Olga Beatriz', 0),
(155, 17380524, 'Mansilla', 'Sonia Beatriz', 0),
(156, 29239073, 'Maripillan Vargas', 'Paula', 0),
(157, 7820987, 'Martinez', 'Jose Sabino', 0),
(158, 32086749, 'Martinez', 'Marisa Raquel', 0),
(159, 16363096, 'Martinez', 'Miryam', 0),
(160, 14470400, 'Matias', 'Claudio Ricardo', 0),
(161, 25011490, 'Matyas', 'Leandro Wenceslao', 0),
(162, 20235138, 'Maza', 'Mirian Del Valle', 0),
(163, 26416167, 'Mazzoni', 'Sebastián', 0),
(164, 21326459, 'Mercado', 'Cecilia Del Carmen', 0),
(165, 29470766, 'Mercado', 'Maria Guadalupe', 0),
(166, 5513208, 'Merida', 'Antonio Luis', 5),
(167, 17185272, 'Merlo', 'Nino', 0),
(168, 35383456, 'Mettler', 'Daiana Lucía', 0),
(169, 10145854, 'Miguel', 'Susana Graciela', 0),
(170, 12040578, 'Miranda', 'Rene Miguel', 0),
(171, 28178110, 'Monllor', 'Maria Fernanda', 0),
(172, 29239023, 'Morales', 'Domingo Salvador', 0),
(173, 29590129, 'Morales', 'Natalia Marisol', 0),
(174, 28503946, 'Morales', 'Verónica', 0),
(175, 18407424, 'Moratinos', 'Gabriela', 0),
(176, 31513828, 'Muñoz', 'Raúl Alejandro', 0),
(177, 25368190, 'Nahuel', 'Evangelina', 0),
(178, 23409448, 'Narvaez', 'Patricia', 0),
(179, 25536606, 'Narvaez', 'Renato Ariel', 0),
(180, 35500288, 'Nieto', 'Federico Ruben', 0),
(181, 33182579, 'Nuñez', 'Gonzalo  Javier', 0),
(182, 13777963, 'Nuñez', 'Rosa Del Milagro', 0),
(183, 21822350, 'Ñancufil', 'Daniel Edgardo', 0),
(184, 35889468, 'Ocampo', 'Ayelén', 0),
(185, 35568529, 'Ojeda Silva', 'Lucrecia M. Fernanda', 0),
(186, 30605528, 'Olivares', 'Cecilia Elena', 0),
(187, 35565850, 'Olmos', 'Maria Catalina', 0),
(188, 14470478, 'Orquera', 'Patricia Beatriz', 0),
(189, 14119039, 'Ovalle', 'Victor Hugo', 0),
(190, 17129650, 'Oyarzo', 'Adriana Isabel', 0),
(191, 34664516, 'Oyarzo', 'Rebeca', 0),
(192, 17380797, 'Oyarzo', 'Rosa Isabel', 0),
(193, 20843431, 'Paez', 'Bernardo Damian', 0),
(194, 7319565, 'Paez', 'Bernardo Ramon', 0),
(195, 21586065, 'Paez', 'Edith Veronica', 0),
(196, 23765404, 'Páez', 'Rafael Fernando', 0),
(197, 31524577, 'Parada', 'Bettina Soledad', 0),
(198, 36334296, 'Paredes', 'Gabriel', 0),
(199, 36344296, 'Paredes', 'Gabriel', 0),
(200, 20235261, 'Paredes', 'Jorge Marcelo', 0),
(201, 39439174, 'Paredes', 'Macarena', 0),
(202, 17622540, 'Paredes', 'Margarita Ester', 0),
(203, 33769687, 'Paredes', 'Santiago', 0),
(204, 25272692, 'Parisi', 'Maria Laura', 0),
(205, 7866631, 'Patterson', 'Guillermo', 0),
(206, 21725603, 'Pecci', 'Vilma Del Valle', 0),
(207, 22552768, 'Peralta', 'Verónica Silvia', 0),
(208, 35568392, 'Perea', 'Gabriela Alejandra', 0),
(209, 16122261, 'Perez', 'Ines Azucena', 0),
(210, 17729261, 'Peric', 'Horacio Raúl', 0),
(211, 31253213, 'Petrantonio', 'Gonzalo', 0),
(212, 20844287, 'Piccinini', 'Sandra', 0),
(213, 21355239, 'Pires', 'Liliana', 0),
(214, 25011030, 'Prat', 'Miguel Alfredo', 0),
(215, 26501045, 'Puca', 'Angel René', 0),
(216, 16200173, 'Puche', 'Liliana  Isabel', 0),
(217, 30189114, 'Puertas', 'Laura Evangelina', 0),
(218, 36931497, 'Quintana', 'Luciana Natali', 0),
(219, 25069671, 'Ramirez', 'Adrián Edgardo', 0),
(220, 21838715, 'Ramos', 'Teodora Rosa', 0),
(221, 26593416, 'Rasgido', 'Rita Yanina', 0),
(222, 16757456, 'Rasgido', 'Silvia Mabel', 0),
(223, 13621206, 'Ravazzano', 'Silvia Nora', 0),
(224, 23439146, 'Reinao', 'Viviana', 0),
(225, 36307304, 'Reinoso', 'Gimena Johana', 0),
(226, 33616016, 'Remolcoy', 'Rosa Aida', 0),
(227, 12593910, 'Reynozo', 'Cesar Ramon', 0),
(228, 27037367, 'Riquelme', 'Alberto Osvaldo', 0),
(229, 22934861, 'Roberts', 'Silvina Lorena', 0),
(230, 33466538, 'Rodriguez', 'Jonatan Matias', 0),
(231, 37654613, 'Rojo Grasso', 'Ana Laura', 0),
(232, 24542418, 'Roldan', 'Ester Paola', 0),
(233, 13323227, 'Rollhaiser', 'Graciela M.', 0),
(234, 30605600, 'Romano', 'Cristian', 0),
(235, 34773755, 'Romano', 'Renzo Luciano', 0),
(236, 35384026, 'Romero', 'Iris Judith', 0),
(237, 35384206, 'Romero', 'Iris Judith', 0),
(238, 21560946, 'Romero', 'Marta', 0),
(239, 29885906, 'Romero', 'Veronica B.', 0),
(240, 17633238, 'Rossi', 'Luis Omar', 0),
(241, 35384819, 'Ruiz', 'Maria Belen', 0),
(242, 14672070, 'Ruiz', 'Teresa Angelica', 0),
(243, 28055147, 'Saiegg', 'Paola Elizabeth', 0),
(244, 21560690, 'Saldaño', 'Gustavo', 0),
(245, 31985437, 'Saldivia', 'Cynthia', 0),
(246, 33466642, 'Sanabria', 'Betina', 0),
(247, 13253834, 'Sanchez', 'Mirna Liliana', 0),
(248, 16757557, 'Sanchez', 'Santiago Marcelo', 0),
(249, 14977156, 'Sancho', 'Ediardo Alfredo', 0),
(250, 26617463, 'Sandoval', 'Silvia Valeria', 0),
(251, 32353588, 'Santander', 'Valeria Mariana', 0),
(252, 28956268, 'Santillan', 'Maria Laura', 0),
(253, 12797034, 'Santini', 'Cristina', 0),
(254, 25239930, 'Saravia', 'Marcelo', 0),
(255, 13959486, 'Sarmiento', 'María Victoria', 0),
(256, 29239895, 'Segovia', 'Dario Hugo', 0),
(257, 23905727, 'Segovia', 'Karina', 0),
(258, 22786464, 'Serra', 'Claudio Alberto', 0),
(259, 24744643, 'Sottocorno', 'Andrea', 0),
(260, 35006896, 'Steinhaus', 'Olga Beatriz', 0),
(261, 18503607, 'Stepa', 'Sandra Patricia', 0),
(262, 33715762, 'Suleski', 'Yony', 0),
(263, 31060110, 'Taborda', 'Diego  Agustín', 0),
(264, 20811187, 'Toconás', 'Germán Walter', 0),
(265, 26617491, 'Todoroff', 'Sara Lorena', 0),
(266, 31810990, 'Tolaba', 'Jose Omar', 0),
(267, 19047601, 'Torres Vargas', 'Andrea Magali', 0),
(268, 12977471, 'Traipe', 'Carlos Antonio', 0),
(269, 24463903, 'Triviño', 'Dora Eugenia', 0),
(270, 32186534, 'Troncoso', 'Elba Romina', 0),
(271, 32296276, 'Trupiano', 'Gisella Paola', 0),
(272, 14075124, 'Tuckschewitz', 'Ana Ines', 0),
(273, 14470088, 'Tula', 'Miguel Angel', 0),
(274, 22255058, 'Valentic', 'Maria Angeles', 0),
(275, 12593786, 'Valles', 'Stella Maris', 0),
(276, 13564922, 'Vallina', 'Gladys Susana', 0),
(277, 29857493, 'Varas', 'Margot Elizabeth', 0),
(278, 36719314, 'Vargas', 'Juan Ignacio', 0),
(279, 13564406, 'Vasquez', 'Mario', 0),
(280, 21832437, 'Vazquez', 'Karina Alejandra', 0),
(281, 21142614, 'Vega', 'Fabiana Alejandra', 0),
(282, 23439856, 'Vega', 'Florencia Soledad', 0),
(283, 34031018, 'Vega', 'Yesica Veronica', 0),
(284, 95582194, 'Vega Gallardo', 'Luis Ignacio', 0),
(285, 93758533, 'Velasquez', 'Gabriel', 0),
(286, 22420687, 'Velasquez', 'Maria Silvia', 0),
(287, 35518052, 'Vera', 'Carla Del Pilar', 0),
(288, 18503602, 'Vicencio', 'Resi', 0),
(289, 35171875, 'Vicentini', 'Leonel Fernando', 0),
(290, 32245220, 'Vidal', 'Lucas Ariel', 0),
(291, 24777146, 'Vidal', 'Maria Angelica', 0),
(292, 32245323, 'Viegas', 'Leandro Emanuel', 0),
(293, 29440971, 'Vignoli', 'Javier Arnaldo', 0),
(294, 22905106, 'Vildoza', 'Jose Cesar Gaspar', 0),
(295, 26617130, 'Villarroel', 'Martín', 0),
(296, 26633107, 'Villegas', 'Silvia Rosana', 0),
(297, 21586863, 'Yacante', 'Raul Alejandro', 0),
(298, 14787524, 'Yañez', 'Hector Omar', 0),
(299, 26388185, 'Ybañez', 'Luis Ramón', 0),
(300, 12098620, 'Zaccone', 'Jorge Horacio', 0),
(301, 27255291, 'Zapata', 'Veronica Alejandra', -8),
(302, 27198258, 'Zapico', 'Fabiana Alejandra', 0),
(303, 25839729, 'Zarate', 'Paola', 0),
(304, 35520729, 'Zurita', 'Daniel Leonardo', 0),
(309, 1231000, 'Bam', 'Bin', 0),
(316, 1, 'de', 'ed', 0),
(317, 2, 'fr', 'rf', 5),
(318, 3, 'tre', 'ert', -6),
(319, 5, 'jaime', 'beiy', 3),
(320, 7, 'timm', 'rick', 0),
(321, 8, 'gguu', 'll', 0),
(322, 9, 'ikk', 'lk', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(8) NOT NULL,
  `desde` varchar(7) NOT NULL,
  `hasta` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `desde`, `hasta`) VALUES
(1, '07:00', '07:40'),
(2, '07:40', '08:20'),
(3, '08:20', '09:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacion`
--

CREATE TABLE `observacion` (
  `cod_registro` int(13) NOT NULL,
  `id_observacion` int(8) NOT NULL,
  `descripcion` varchar(152) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `observacion`
--

INSERT INTO `observacion` (`cod_registro`, `id_observacion`, `descripcion`) VALUES
(1, 1, '1 error'),
(23, 2, 'aaa'),
(89, 3, 'asas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periferico`
--

CREATE TABLE `periferico` (
  `id_periferico` int(11) NOT NULL,
  `nom_periferico` varchar(23) DEFAULT NULL,
  `desc_periferico` varchar(52) DEFAULT NULL,
  `estado_periferico` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periferico`
--

INSERT INTO `periferico` (`id_periferico`, `nom_periferico`, `desc_periferico`, `estado_periferico`) VALUES
(1, 'Notebook Lenovos', 'jajaa', 1),
(2, 'GTGT', 'sss', 1),
(3, 'Alargue', 'no lo sé', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_impresion`
--

CREATE TABLE `registro_impresion` (
  `cod_registro` int(13) NOT NULL,
  `fecha_registro` date NOT NULL,
  `hora_registro` time NOT NULL,
  `total_imp` float NOT NULL,
  `efectivo` float DEFAULT NULL,
  `cred` float DEFAULT NULL,
  `usuario` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_impresion`
--

INSERT INTO `registro_impresion` (`cod_registro`, `fecha_registro`, `hora_registro`, `total_imp`, `efectivo`, `cred`, `usuario`) VALUES
(0, '2019-03-29', '10:06:13', 0, 0.25, 0.25, 'Ariel'),
(1, '2019-03-07', '19:03:38', 0, 0, 0, 'Ariel'),
(2, '2019-03-07', '19:03:59', 6, 6, 0, 'Ariel'),
(3, '2019-03-07', '19:04:32', 15, 0, -15, 'Ariel'),
(4, '2019-03-07', '19:04:53', 30, 0, -30, 'Ariel'),
(5, '2019-03-07', '19:05:55', 16, 16, 0, 'Ariel'),
(6, '2019-03-07', '19:07:30', 30, 0, -30, 'Ariel'),
(7, '2019-03-07', '19:08:27', 20, 0, -20, 'Ariel'),
(8, '2019-03-11', '17:24:55', 10, 20, 10, 'Ariel'),
(9, '2019-03-11', '17:27:10', 20, 100, 80, 'Ariel'),
(10, '2019-03-12', '08:25:47', 30, 0, -30, 'Ariel'),
(11, '2019-03-12', '08:26:33', 6, 12, 6, 'Ariel'),
(12, '2019-03-12', '08:27:28', 0, 0, 0, 'Ariel'),
(13, '2019-03-12', '23:39:31', 0, 10, 0, 'Ariel'),
(14, '2019-03-12', '23:52:10', 0, 10, 0, 'Ariel'),
(15, '2019-03-13', '00:02:14', 0, 10, 0, 'Ariel'),
(16, '2019-03-13', '00:03:58', 0, 10, 0, 'Ariel'),
(17, '2019-03-13', '00:04:23', 0, 20, 0, 'Ariel'),
(18, '2019-03-13', '00:06:46', 0, 10, 10, 'Ariel'),
(19, '2019-03-13', '00:07:13', 0, 20, 20, 'Ariel'),
(20, '2019-03-18', '08:53:02', 6, 6, 0, 'Ariel'),
(21, '2019-03-18', '08:54:02', 15, 0, -15, 'Ariel'),
(22, '2019-03-18', '08:55:18', 10, 0, -10, 'Ariel'),
(23, '2019-03-23', '22:35:05', 0, 0, 0, 'Ariel'),
(24, '2019-03-23', '22:35:13', 4, 4, 0, 'Ariel'),
(25, '2019-03-29', '09:21:15', 4, 0, 0, 'Ariel'),
(26, '2019-03-29', '09:24:05', 4, 0, 0, 'Ariel'),
(27, '2019-03-29', '09:26:42', 6, 0, -6, 'Ariel'),
(28, '2019-03-29', '09:27:13', 6, 0, -6, 'Ariel'),
(29, '2019-03-29', '09:29:50', 6, 0, -6, 'Ariel'),
(30, '2019-03-29', '09:30:18', 10, 0, -10, 'Ariel'),
(31, '2019-03-29', '09:30:37', 2, 2, 0, 'Ariel'),
(32, '2019-03-29', '09:31:24', 2, 0, 0, 'Ariel'),
(33, '2019-03-29', '10:05:51', 0, 5.25, 5.25, 'Ariel'),
(34, '2019-03-29', '10:06:03', 0, 0.5, 0.5, 'Ariel'),
(36, '2019-03-29', '10:06:21', 0, 0.25, 0.25, 'Ariel'),
(37, '2019-03-29', '10:06:30', 0, 0.25, 0.25, 'Ariel'),
(38, '2019-03-29', '10:06:37', 0, 0.25, 0.25, 'Ariel'),
(39, '2019-04-04', '08:04:48', 0, -3, -3, 'Ariel'),
(40, '2019-04-04', '08:04:55', 0, -3, -3, 'Ariel'),
(41, '2019-04-04', '09:47:35', 0, 2, 2, 'Ariel'),
(42, '2019-04-04', '09:51:45', 0, -2, -2, 'Ariel'),
(43, '2019-04-04', '09:52:16', 0, -3, -3, 'Ariel'),
(44, '2019-04-04', '10:34:29', 0, 3, 3, 'Ariel'),
(45, '2019-04-04', '10:34:59', 0, -5, -5, 'Ariel'),
(46, '2019-04-04', '10:36:11', 0, -5, -5, 'Ariel'),
(47, '2019-04-04', '10:37:27', 0, 5, 5, 'Ariel'),
(48, '2019-04-04', '10:44:11', 0, 3, 3, 'Ariel'),
(49, '2019-04-04', '10:44:20', 0, -3, -3, 'Ariel'),
(50, '2019-04-04', '10:44:36', 0, -3, -3, 'Ariel'),
(51, '2019-04-04', '11:04:46', 0, -5, -5, 'Ariel'),
(52, '2019-04-04', '11:05:43', 0, -5, -5, 'Ariel'),
(53, '2019-04-04', '11:06:23', 0, -3, -3, 'Ariel'),
(54, '2019-04-04', '11:10:09', 0, 3, 3, 'Ariel'),
(55, '2019-04-04', '11:12:13', 0, -2, -2, 'Ariel'),
(56, '2019-04-04', '11:12:22', 0, 3, 3, 'Ariel'),
(57, '2019-04-04', '11:12:34', 0, -3, -3, 'Ariel'),
(58, '2019-04-04', '11:13:35', 0, -3, -3, 'Ariel'),
(59, '2019-04-04', '11:13:50', 0, 2, 2, 'Ariel'),
(60, '2019-04-14', '15:57:49', 4, 4, 0, 'Ariel'),
(61, '2019-04-14', '16:53:35', 10, 10, 0, 'Ariel'),
(62, '2019-04-14', '17:05:52', 6, 6, 0, 'Ariel'),
(63, '2019-04-14', '17:20:01', 6, 6, 0, 'Ariel'),
(64, '2019-04-14', '17:20:56', 6, 6, 0, 'Ariel'),
(65, '2019-04-14', '17:41:58', 6, 6, 0, 'Ariel'),
(66, '2019-04-14', '17:42:13', 6, 6, 0, 'Ariel'),
(67, '2019-04-14', '17:56:11', 8, 0, -8, 'Ariel'),
(68, '2019-04-14', '18:01:06', 10, 10, 0, 'Ariel'),
(69, '2019-04-14', '18:03:50', 0, 0, 0, 'Ariel'),
(70, '2019-04-15', '17:47:40', 0, 0, 0, 'Ariel'),
(71, '2019-04-17', '08:37:25', 4, 4, 0, 'Ariel'),
(72, '2019-04-17', '08:40:53', 4, 4, 0, 'Ariel'),
(73, '2019-04-17', '08:41:26', 6, 6, 0, 'Ariel'),
(74, '2019-04-17', '08:41:34', 6, 6, 0, 'Ariel'),
(75, '2019-04-17', '08:43:53', 4, 4, 0, 'Ariel'),
(76, '2019-04-17', '08:44:13', 2, 2, 0, 'Ariel'),
(77, '2019-04-17', '08:45:52', 6, 6, 0, 'Ariel'),
(78, '2019-04-17', '08:46:38', 6, 6, 0, 'Ariel'),
(79, '2019-04-17', '08:47:09', 6, 6, 0, 'Ariel'),
(80, '2019-04-17', '09:16:13', 2, 2, 0, 'Ariel'),
(81, '2019-04-17', '09:18:57', 2, 2, 0, 'Ariel'),
(82, '2019-04-17', '09:19:04', 2, 2, 0, 'Ariel'),
(83, '2019-04-17', '09:19:19', 4, 4, 0, 'Ariel'),
(84, '2019-04-17', '09:19:27', 2, 2, 0, 'Ariel'),
(85, '2019-04-17', '09:20:41', 2, 2, 0, 'Ariel'),
(86, '2019-04-17', '09:20:52', 2, 2, 0, 'Ariel'),
(87, '2019-04-17', '09:21:08', 2, 2, 0, 'Ariel'),
(88, '2019-04-17', '09:30:55', 2, 0, -2, 'Ariel'),
(89, '2019-04-24', '10:59:41', 0, 0, 0, 'Ariel'),
(90, '2019-04-25', '07:57:41', 6, 10, 4, 'Ariel'),
(91, '2019-04-25', '08:05:32', 6, 10, 4, 'Ariel'),
(92, '2019-04-25', '08:17:02', 6, 10, 4, 'Ariel'),
(93, '2019-04-25', '09:17:30', 0, 2, 2, 'Ariel'),
(94, '2019-04-25', '09:25:56', 0, 3, 3, 'Ariel'),
(95, '2019-04-25', '10:49:21', 6, 0, -6, 'Ariel'),
(96, '2019-04-25', '10:50:57', 6, 10, 4, 'Ariel'),
(97, '2019-04-26', '07:55:52', 6, 11, 5, 'Ariel'),
(98, '2019-04-26', '07:59:13', 6, 11, 5, 'Ariel'),
(99, '2019-04-26', '08:02:37', 6, 11, 5, 'Ariel'),
(100, '2019-04-26', '08:03:49', 6, 6, 0, 'Ariel'),
(101, '2019-04-26', '08:13:47', 6, 11, 5, 'Ariel'),
(102, '2019-04-26', '08:14:34', 6, 11, 5, 'Ariel'),
(103, '2019-04-26', '08:18:25', 6, 11, 5, 'Ariel'),
(104, '2019-04-26', '08:19:11', 6, 11, 5, 'Ariel'),
(105, '2019-04-26', '08:43:18', 6, 11, 5, 'Ariel'),
(106, '2019-04-26', '08:43:40', 6, 11, 5, 'Ariel'),
(107, '2019-04-28', '12:21:58', 6, 6, 0, 'Ariel'),
(108, '2019-04-28', '12:22:24', 6, 6, 0, 'Ariel'),
(109, '2019-04-28', '12:24:15', 6, 6, 0, 'Ariel'),
(110, '2019-04-28', '12:24:35', 10, 10, 0, 'Ariel'),
(111, '2019-04-28', '12:27:59', 6, 6, 0, 'Ariel'),
(112, '2019-04-28', '12:28:34', 6, 6, 0, 'Ariel'),
(113, '2019-04-28', '12:31:06', 0, 0, 0, 'Ariel'),
(114, '2019-04-28', '12:31:12', 0, 0, 0, 'Ariel'),
(115, '2019-04-28', '12:31:30', 0, 0, 0, 'Ariel'),
(116, '2019-04-28', '12:34:22', 0, 0, 0, 'Ariel'),
(117, '2019-04-28', '12:35:06', 0, 0, 0, 'Ariel'),
(118, '2019-04-28', '12:35:29', 0, 0, 0, 'Ariel'),
(119, '2019-04-28', '12:37:32', 0, 0, 0, 'Ariel'),
(120, '2019-04-28', '12:59:30', 0, 0, 0, 'Ariel'),
(121, '2019-04-28', '13:00:53', 0, 0, 0, 'Ariel'),
(122, '2019-04-28', '13:02:06', 0, 0, 0, 'Ariel'),
(123, '2019-04-28', '13:02:39', 0, 0, 0, 'Ariel'),
(124, '2019-04-28', '13:03:22', 0, 0, 0, 'Ariel'),
(125, '2019-04-28', '13:05:02', 0, 0, 0, 'Ariel'),
(126, '2019-04-28', '13:06:03', 0, 0, 0, 'Ariel'),
(127, '2019-04-28', '13:06:32', 0, 0, 0, 'Ariel'),
(128, '2019-04-28', '13:07:09', 6, 6, 0, 'Ariel'),
(129, '2019-04-28', '13:09:59', 6, 6, 0, 'Ariel'),
(130, '2019-04-28', '13:10:25', 6, 6, 0, 'Ariel'),
(131, '2019-04-28', '13:10:58', 6, 6, 0, 'Ariel'),
(132, '2019-04-28', '13:13:00', 6, 6, 0, 'Ariel'),
(133, '2019-04-28', '13:13:10', 6, 6, 0, 'Ariel'),
(134, '2019-04-28', '13:13:26', 6, 6, 0, 'Ariel'),
(135, '2019-04-28', '13:16:56', 6, 6, 0, 'Ariel'),
(136, '2019-04-28', '13:17:15', 6, 6, 0, 'Ariel'),
(137, '2019-04-28', '13:36:40', 6, 6, 0, 'Ariel'),
(138, '2019-04-28', '13:37:30', 10, 10, 0, 'Ariel'),
(139, '2019-04-28', '13:39:33', 4, 4, 0, 'Ariel'),
(140, '2019-04-28', '13:41:29', 6, 6, 0, 'Ariel'),
(141, '2019-04-28', '13:41:59', 6, 11, 5, 'Ariel'),
(142, '2019-04-28', '13:42:36', 4, 11, 7, 'Ariel'),
(143, '2019-04-28', '13:44:15', 4, 11, 7, 'Ariel'),
(144, '2019-04-28', '13:44:45', 6, 6, 0, 'Ariel'),
(145, '2019-04-28', '13:54:25', 6, 11, 5, 'Ariel'),
(146, '2019-04-28', '13:56:23', 4, 11, 7, 'Ariel'),
(147, '2019-04-28', '13:57:03', 4, 11, 7, 'Ariel'),
(148, '2019-04-28', '13:57:24', 6, 11, 5, 'Ariel'),
(149, '2019-04-28', '13:57:53', 4, 11, 7, 'Ariel'),
(150, '2019-06-19', '22:50:24', 300, 300, 0, 'Ariel'),
(151, '2019-06-19', '22:50:59', 300, 0, -300, 'Ariel'),
(152, '2019-06-19', '22:51:16', 0, 302, 302, 'Ariel'),
(153, '2019-06-19', '22:53:44', 300, 0, -300, 'Ariel'),
(154, '2019-06-19', '22:54:04', 0, 290, 290, 'Ariel'),
(155, '2019-07-27', '11:53:58', 0, -2, -2, 'Ariel'),
(156, '2019-07-27', '11:54:06', 0, -20, -20, 'Ariel'),
(157, '2019-07-27', '11:54:11', 0, 2, 2, 'Ariel'),
(158, '2019-07-27', '12:46:58', 0, 2, 2, 'Ariel'),
(159, '2019-07-27', '12:47:12', 0, 1, 1, 'Ariel'),
(160, '2019-07-27', '13:08:19', 0, -3, -3, 'Ariel'),
(161, '2019-07-27', '13:08:27', 0, -2, -2, 'Ariel'),
(162, '2019-07-27', '13:08:34', 0, -2, -2, 'Ariel'),
(163, '2019-07-27', '13:32:42', 0, -1, -1, 'Ariel'),
(164, '2019-07-27', '13:42:47', 0, 1, 1, 'Ariel'),
(165, '2019-07-27', '13:42:56', 0, -1, -1, 'Ariel'),
(166, '2019-07-27', '13:43:54', 0, 3, 3, 'Ariel'),
(167, '2019-07-28', '14:55:22', 0, 30, 30, 'Ariel'),
(168, '2019-07-28', '14:55:50', 0, -5, -5, 'Ariel'),
(169, '2019-07-28', '14:56:41', 0, -22, -22, 'Ariel'),
(170, '2019-07-30', '17:00:43', 0, 5, 5, 'Ariel'),
(171, '2019-08-07', '14:44:56', 0, 0, 0, 'Ariel'),
(172, '2019-08-07', '14:45:11', 0, 0, 0, 'Ariel'),
(173, '2019-08-07', '14:45:55', 0, 0, 0, 'Ariel'),
(174, '2019-08-07', '14:47:22', 0, 0, 0, 'Ariel'),
(175, '2019-08-07', '14:47:42', 0, 0, 0, 'Ariel'),
(176, '2019-08-08', '10:24:33', 0, 0, 0, 'Ariel'),
(177, '2019-08-08', '10:24:51', 0, 1, 1, 'Ariel'),
(178, '2019-08-08', '10:25:25', 0, 1, 1, 'Ariel'),
(179, '2019-08-14', '17:54:12', 0, 3, 3, 'Ariel'),
(180, '2019-08-14', '17:59:30', 0, 2, 2, 'Ariel'),
(181, '2019-08-14', '18:07:58', 0, 3, 3, 'Ariel'),
(182, '2019-08-14', '18:08:14', 0, 1, 1, 'Ariel'),
(183, '2019-08-14', '18:20:09', 0, 2, 2, 'Ariel'),
(184, '2019-10-24', '08:14:35', 0, -5, -5, 'Ariel'),
(185, '2019-10-24', '08:19:39', 0, 8, 8, 'Ariel'),
(186, '2019-10-24', '08:19:48', 0, -5, -5, 'Ariel'),
(187, '2019-10-24', '08:20:09', 0, -10, -10, 'Ariel'),
(188, '2019-10-24', '08:48:37', 0, 5, 5, 'Ariel'),
(189, '2019-10-24', '08:48:45', 0, -2, -2, 'Ariel'),
(190, '2019-10-28', '08:02:08', 0, 2, 2, 'Ariel'),
(191, '2019-10-28', '08:02:22', 0, -9, -9, 'Ariel'),
(192, '2019-10-28', '08:02:29', 0, 3, 3, 'Ariel'),
(193, '2019-10-28', '08:02:37', 0, 3, 3, 'Ariel'),
(194, '2019-10-31', '09:23:05', 0, 5, 5, 'Ariel'),
(195, '2019-10-31', '09:23:16', 0, -6, -6, 'Ariel'),
(196, '2019-10-31', '09:36:59', 0, -2, -2, 'Ariel'),
(197, '2019-10-31', '09:37:06', 0, -6, -6, 'Ariel'),
(198, '2019-10-31', '09:53:23', 10, 0, -10, 'Ariel'),
(199, '2019-10-31', '09:53:36', 0, 20, 20, 'Ariel'),
(200, '2019-10-31', '10:06:11', 0, 5, 5, 'Ariel'),
(201, '2019-10-31', '10:06:34', 50, 0, -50, 'Ariel'),
(202, '2019-10-31', '10:06:49', 0, 55, 55, 'Ariel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_impresion/tipo_impresion`
--

CREATE TABLE `registro_impresion/tipo_impresion` (
  `cod_registro` int(13) NOT NULL,
  `id_impresion` int(8) NOT NULL,
  `nom_impresion` varchar(52) NOT NULL,
  `cant_imp` int(8) NOT NULL,
  `valor_imp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_impresion/tipo_impresion`
--

INSERT INTO `registro_impresion/tipo_impresion` (`cod_registro`, `id_impresion`, `nom_impresion`, `cant_imp`, `valor_imp`) VALUES
(0, 0, '0', 0, 0),
(2, 1, 'Blanco y Negro', 3, 6),
(3, 2, 'Color Texto', 3, 15),
(4, 3, 'Color Imagen', 3, 30),
(5, 1, 'Blanco y Negro', 3, 6),
(5, 2, 'Color Texto', 2, 10),
(6, 3, 'Color Imagen', 3, 30),
(7, 3, 'Color Imagen', 2, 20),
(8, 1, 'Blanco y Negro', 5, 10),
(9, 1, 'Blanco y Negro', 10, 20),
(10, 3, 'Color Imagen', 3, 30),
(11, 1, 'Blanco y Negro', 3, 6),
(20, 1, 'Blanco y Negro', 3, 6),
(21, 2, 'Color Texto', 3, 15),
(22, 3, 'Color Imagen', 1, 10),
(24, 1, 'Blanco y Negro', 2, 4),
(25, 1, 'Blanco y Negro', 2, 4),
(26, 1, 'Blanco y Negro', 2, 4),
(27, 1, 'Blanco y Negro', 3, 6),
(28, 1, 'Blanco y Negro', 3, 6),
(29, 1, 'Blanco y Negro', 3, 6),
(30, 1, 'Blanco y Negro', 5, 10),
(31, 1, 'Blanco y Negro', 1, 2),
(32, 1, 'Blanco y Negro', 1, 2),
(60, 1, 'Blanco y Negro', 2, 4),
(61, 1, 'Blanco y Negro', 5, 10),
(62, 1, 'Blanco y Negro', 3, 6),
(63, 1, 'Blanco y Negro', 3, 6),
(64, 1, 'Blanco y Negro', 3, 6),
(65, 1, 'Blanco y Negro', 3, 6),
(66, 1, 'Blanco y Negro', 3, 6),
(67, 1, 'Blanco y Negro', 4, 8),
(68, 1, 'Blanco y Negro', 5, 10),
(72, 1, 'Blanco y Negro', 2, 4),
(81, 1, 'Blanco y Negro', 1, 2),
(82, 1, 'Blanco y Negro', 1, 2),
(85, 1, 'Blanco y Negro', 1, 2),
(86, 1, 'Blanco y Negro', 1, 2),
(87, 1, 'Blanco y Negro', 1, 2),
(88, 1, 'Blanco y Negro', 1, 2),
(90, 1, 'Blanco y Negro', 3, 6),
(91, 1, 'Blanco y Negro', 3, 6),
(92, 1, 'Blanco y Negro', 3, 6),
(95, 1, 'Blanco y Negro', 3, 6),
(96, 1, 'Blanco y Negro', 3, 6),
(97, 1, 'Blanco y Negro', 3, 6),
(98, 1, 'Blanco y Negro', 3, 6),
(99, 1, 'Blanco y Negro', 3, 6),
(100, 1, 'Blanco y Negro', 3, 6),
(101, 1, 'Blanco y Negro', 3, 6),
(102, 1, 'Blanco y Negro', 3, 6),
(103, 1, 'Blanco y Negro', 3, 6),
(104, 1, 'Blanco y Negro', 3, 6),
(105, 1, 'Blanco y Negro', 3, 6),
(106, 1, 'Blanco y Negro', 3, 6),
(130, 1, 'Blanco y Negro', 3, 6),
(132, 1, 'Blanco y Negro', 3, 6),
(134, 1, 'Blanco y Negro', 3, 6),
(135, 1, 'Blanco y Negro', 3, 6),
(136, 1, 'Blanco y Negro', 3, 6),
(137, 1, 'Blanco y Negro', 3, 6),
(138, 1, 'Blanco y Negro', 5, 10),
(139, 1, 'Blanco y Negro', 2, 4),
(140, 1, 'Blanco y Negro', 3, 6),
(141, 1, 'Blanco y Negro', 3, 6),
(142, 1, 'Blanco y Negro', 2, 4),
(143, 1, 'Blanco y Negro', 2, 4),
(144, 1, 'Blanco y Negro', 3, 6),
(145, 1, 'Blanco y Negro', 3, 6),
(146, 1, 'Blanco y Negro', 2, 4),
(147, 1, 'Blanco y Negro', 2, 4),
(148, 1, 'Blanco y Negro', 3, 6),
(149, 1, 'Blanco y Negro', 2, 4),
(150, 1, 'Blanco y Negro', 150, 300),
(151, 1, 'Blanco y Negro', 150, 300),
(153, 1, 'Blanco y Negro', 150, 300),
(198, 2, 'Color Texto', 2, 10),
(201, 3, 'Color Imagen', 5, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `dni_docente` int(8) NOT NULL,
  `id_periferico` int(11) NOT NULL,
  `num_reserva` int(8) NOT NULL,
  `fecha_res` date NOT NULL,
  `hora_res` time NOT NULL,
  `hora_dev_res` time NOT NULL,
  `usuario` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`dni_docente`, `id_periferico`, `num_reserva`, `fecha_res`, `hora_res`, `hora_dev_res`, `usuario`) VALUES
(1, 1, 12, '2019-10-13', '07:30:00', '08:30:00', 'Ariel'),
(2, 1, 11, '2019-10-11', '07:30:00', '09:30:00', 'Ariel'),
(2, 1, 17, '2019-10-15', '07:30:00', '08:30:00', 'Ariel'),
(2, 1, 21, '2019-10-18', '07:30:00', '08:30:00', 'Ariel'),
(2, 1, 22, '2019-10-23', '07:30:00', '08:30:00', 'Ariel'),
(2, 1, 23, '2019-10-24', '07:30:00', '08:30:00', 'Ariel'),
(2, 1, 27, '2019-10-28', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 2, '2019-10-07', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 6, '2019-10-07', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 7, '2019-10-07', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 8, '2019-10-07', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 9, '2019-10-08', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 10, '2019-10-10', '07:30:00', '10:30:00', 'Ariel'),
(2, 2, 11, '2019-10-11', '07:30:00', '09:30:00', 'Ariel'),
(2, 2, 12, '2019-10-13', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 13, '2019-10-14', '07:30:00', '09:30:00', 'Ariel'),
(2, 2, 14, '2019-10-15', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 15, '2019-10-15', '08:31:00', '09:30:00', 'Ariel'),
(2, 2, 21, '2019-10-18', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 22, '2019-10-23', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 23, '2019-10-24', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 25, '2019-10-25', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 26, '2019-10-26', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 27, '2019-10-28', '07:30:00', '08:30:00', 'Ariel'),
(2, 2, 28, '2019-11-04', '07:30:00', '10:30:00', 'Ariel'),
(2, 3, 1, '0000-00-00', '00:00:00', '00:00:00', 'Ariel'),
(2, 3, 5, '0000-00-00', '00:00:00', '00:00:00', 'Ariel'),
(2, 3, 10, '2019-10-10', '07:30:00', '10:30:00', 'Ariel'),
(2, 3, 11, '2019-10-11', '07:30:00', '09:30:00', 'Ariel'),
(2, 3, 16, '2019-10-15', '07:30:00', '09:30:00', 'Ariel'),
(2, 3, 21, '2019-10-18', '07:30:00', '08:30:00', 'Ariel'),
(2, 3, 22, '2019-10-23', '07:30:00', '08:30:00', 'Ariel'),
(2, 3, 25, '2019-10-25', '07:30:00', '08:30:00', 'Ariel'),
(2, 3, 26, '2019-10-26', '07:30:00', '08:30:00', 'Ariel'),
(2, 3, 28, '2019-11-04', '07:30:00', '10:30:00', 'Ariel'),
(3, 2, 4, '0000-00-00', '00:00:00', '00:00:00', ''),
(3, 2, 11, '2019-10-11', '09:31:00', '11:30:00', 'Ariel'),
(3, 2, 19, '2019-10-16', '07:30:00', '08:30:00', 'Ariel'),
(3, 3, 11, '2019-10-11', '09:31:00', '11:30:00', 'Ariel'),
(3, 3, 18, '2019-10-15', '10:30:00', '11:30:00', 'Ariel'),
(3, 3, 20, '2019-10-16', '07:30:00', '08:30:00', 'Ariel'),
(7, 3, 3, '2019-10-07', '07:30:00', '09:30:00', 'Ariel'),
(8, 1, 24, '2019-10-24', '09:30:00', '11:30:00', 'Ariel'),
(8, 2, 24, '2019-10-24', '09:30:00', '11:30:00', 'Ariel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldo`
--

CREATE TABLE `saldo` (
  `cod_saldo` int(13) NOT NULL,
  `dni` int(8) NOT NULL,
  `fecha_saldo` date NOT NULL,
  `hora_saldo` time NOT NULL,
  `saldo` float NOT NULL,
  `cred` float NOT NULL,
  `usuario` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `saldo`
--

INSERT INTO `saldo` (`cod_saldo`, `dni`, `fecha_saldo`, `hora_saldo`, `saldo`, `cred`, `usuario`) VALUES
(1, 11223313, '2019-03-07', '18:58:40', 3, 5, 'Ariel'),
(2, 11223313, '2019-03-07', '19:02:37', 8, 2.25, 'Ariel'),
(3, 11223313, '2019-03-07', '19:04:32', 10.25, -15, 'Ariel'),
(4, 23121212, '2019-03-07', '19:04:53', 15, -30, 'Ariel'),
(5, 55123321, '2019-03-07', '19:05:55', 0, 0, 'Ariel'),
(6, 66312132, '2019-03-07', '19:07:30', 0, -30, 'Ariel'),
(7, 55112211, '2019-03-07', '19:08:27', 0, -20, 'Ariel'),
(8, 21312311, '2019-03-11', '09:02:53', -38, 1, 'ariel'),
(9, 23557788, '2019-03-11', '17:24:55', 0, 10, 'Ariel'),
(10, 4999063, '2019-03-11', '17:27:10', 0, 80, 'Ariel'),
(11, 4999063, '2019-03-12', '08:25:47', 80, -30, 'Ariel'),
(12, 22113313, '2019-03-12', '08:26:33', 4, 6, 'Ariel'),
(13, 11223313, '2019-03-12', '22:55:03', -4.75, 11, 'Ariel'),
(14, 5513208, '2019-03-12', '22:59:37', 0, 5, 'Ariel'),
(15, 22113313, '2019-03-12', '23:01:14', 10, 20, 'Ariel'),
(16, 11223313, '2019-03-12', '23:39:31', 6.25, 10, 'Ariel'),
(17, 4999063, '2019-03-12', '23:49:29', 50, -30, 'Ariel'),
(18, 4999063, '2019-03-12', '23:50:21', 20, 30, 'Ariel'),
(19, 11223313, '2019-03-12', '23:52:10', 16.25, 10, 'Ariel'),
(20, 4999063, '2019-03-12', '23:54:04', 50, 10, 'Ariel'),
(21, 4999063, '2019-03-12', '23:56:34', 60, 10, 'Ariel'),
(22, 11223313, '2019-03-13', '00:02:14', 26.25, 10, 'Ariel'),
(23, 4999063, '2019-03-13', '00:03:58', 70, 10, 'Ariel'),
(24, 4999063, '2019-03-13', '00:04:23', 80, 20, 'Ariel'),
(25, 4999063, '2019-03-13', '00:06:46', 100, 10, 'Ariel'),
(26, 11223313, '2019-03-13', '00:07:13', 36.25, 20, 'Ariel'),
(27, 123123, '2019-03-18', '08:53:02', 0, 0, 'Ariel'),
(28, 123321, '2019-03-18', '08:54:02', 0, -15, 'Ariel'),
(29, 123012, '2019-03-18', '08:55:18', 0, -10, 'Ariel'),
(30, 123012, '2019-03-29', '09:26:42', -10, -6, 'Ariel'),
(31, 123123, '2019-03-29', '09:27:13', 0, -6, 'Ariel'),
(32, 123123, '2019-03-29', '09:29:50', -6, -6, 'Ariel'),
(33, 123012, '2019-03-29', '09:30:18', -16, -10, 'Ariel'),
(34, 123012, '2019-03-29', '10:05:51', -26, 5.25, 'Ariel'),
(35, 123012, '2019-03-29', '10:06:03', -20.75, 0.5, 'Ariel'),
(36, 123012, '2019-03-29', '10:06:13', -20.25, 0.25, 'Ariel'),
(37, 123012, '2019-03-29', '10:06:21', -20, 0.25, 'Ariel'),
(38, 123012, '2019-03-29', '10:06:30', -19.75, 0.25, 'Ariel'),
(39, 123012, '2019-03-29', '10:06:37', -19.5, 0.25, 'Ariel'),
(40, 123123, '2019-04-04', '08:04:48', -12, -3, 'Ariel'),
(41, 123123, '2019-04-04', '08:04:55', -15, -3, 'Ariel'),
(42, 123123, '2019-04-04', '09:47:35', -18, 2, 'Ariel'),
(43, 123123, '2019-04-04', '09:51:45', -16, -2, 'Ariel'),
(44, 123123, '2019-04-04', '09:52:16', -18, -3, 'Ariel'),
(45, 123123, '2019-04-04', '10:34:29', -21, 3, 'Ariel'),
(46, 123123, '2019-04-04', '10:36:11', -18, -5, 'Ariel'),
(47, 123123, '2019-04-04', '10:37:27', -23, 5, 'Ariel'),
(48, 123012, '2019-04-04', '10:44:11', -19.25, 3, 'Ariel'),
(49, 123012, '2019-04-04', '10:44:20', -16.25, -3, 'Ariel'),
(50, 123012, '2019-04-04', '10:44:36', -19.25, -3, 'Ariel'),
(51, 123123, '2019-04-04', '11:04:46', -18, -5, 'Ariel'),
(52, 4999063, '2019-04-04', '11:05:43', 110, -5, 'Ariel'),
(53, 4999063, '2019-04-04', '11:06:23', 105, -3, 'Ariel'),
(54, 4999063, '2019-04-04', '11:10:09', 102, 3, 'Ariel'),
(55, 4999063, '2019-04-04', '11:12:13', 105, -2, 'Ariel'),
(56, 4999063, '2019-04-04', '11:12:23', 103, 3, 'Ariel'),
(57, 4999063, '2019-04-04', '11:12:34', 106, -3, 'Ariel'),
(58, 123012, '2019-04-04', '11:13:35', -22.25, -3, 'Ariel'),
(59, 123012, '2019-04-04', '11:13:50', -25.25, 2, 'Ariel'),
(60, 4999063, '2019-04-14', '15:57:49', 103, 0, 'Ariel'),
(61, 11122233, '2019-04-14', '17:05:52', 0, 0, 'Ariel'),
(62, 11133322, '2019-04-14', '17:20:01', 0, 0, 'Ariel'),
(63, 11133322, '2019-04-14', '17:20:56', 0, 0, 'Ariel'),
(64, 11111222, '2019-04-14', '17:56:11', 0, -8, 'Ariel'),
(65, 0, '2019-04-14', '18:01:06', 0, 0, 'Ariel'),
(66, 0, '2019-04-14', '18:03:50', 0, 0, 'Ariel'),
(67, 1, '2019-04-17', '09:20:41', 0, 0, 'Ariel'),
(68, 2, '2019-04-17', '09:20:52', 0, 0, 'Ariel'),
(69, 1, '2019-04-17', '09:21:08', 0, 0, 'Ariel'),
(70, 23, '2019-04-17', '09:30:55', 0, -2, 'Ariel'),
(71, 32, '2019-04-25', '07:57:41', 0, 4, 'Ariel'),
(72, 33, '2019-04-25', '08:05:32', 0, 4, 'Ariel'),
(73, 35, '2019-04-25', '08:17:02', 0, 4, 'Ariel'),
(74, 1, '2019-04-25', '09:17:30', 0, 2, 'Ariel'),
(75, 1, '2019-04-25', '09:25:57', 2, 3, 'Ariel'),
(76, 1, '2019-04-25', '10:49:23', 5, -6, 'Ariel'),
(77, 1, '2019-04-25', '10:50:57', -1, 4, 'Ariel'),
(78, 1, '2019-04-26', '08:18:25', 3, 5, 'Ariel'),
(79, 37, '2019-04-26', '08:19:11', 0, 5, 'Ariel'),
(80, 1, '2019-04-28', '13:56:23', 8, 7, 'Ariel'),
(81, 2, '2019-04-28', '13:57:03', 0, 7, 'Ariel'),
(82, 1, '2019-04-28', '13:57:25', 15, 5, 'Ariel'),
(83, 2, '2019-04-28', '13:57:53', 7, 7, 'Ariel'),
(84, 27255291, '2019-06-19', '22:50:24', 0, 0, 'Ariel'),
(85, 27255291, '2019-06-19', '22:50:59', 0, -300, 'Ariel'),
(86, 27255291, '2019-06-19', '22:51:17', -300, 302, 'Ariel'),
(87, 27255291, '2019-06-19', '22:53:44', 2, -300, 'Ariel'),
(88, 27255291, '2019-06-19', '22:54:05', -298, 290, 'Ariel'),
(89, 1, '2019-07-27', '11:53:58', 20, -2, 'Ariel'),
(90, 1, '2019-07-27', '11:54:07', 18, -20, 'Ariel'),
(91, 1, '2019-07-27', '11:54:12', -2, 2, 'Ariel'),
(92, 23, '2019-07-27', '12:46:58', -2, 2, 'Ariel'),
(93, 123012, '2019-07-27', '12:47:12', -23.25, 1, 'Ariel'),
(94, 1, '2019-07-27', '13:08:19', 0, -3, 'Ariel'),
(95, 1, '2019-07-27', '13:08:27', 0, -2, 'Ariel'),
(96, 1, '2019-07-27', '13:08:35', 0, -2, 'Ariel'),
(97, 123012, '2019-07-27', '13:32:42', -22.25, -1, 'Ariel'),
(98, 123012, '2019-07-27', '13:42:47', -23.25, 1, 'Ariel'),
(99, 123012, '2019-07-27', '13:42:56', -22.25, -1, 'Ariel'),
(100, 11111222, '2019-07-27', '13:43:54', -8, 3, 'Ariel'),
(101, 123012, '2019-07-28', '14:55:23', -23.25, 30, 'Ariel'),
(102, 123012, '2019-07-28', '14:55:50', 6.75, -5, 'Ariel'),
(103, 2, '2019-07-28', '14:56:41', 14, -22, 'Ariel'),
(104, 2, '2019-07-30', '17:00:43', -8, 5, 'Ariel'),
(105, 1, '2019-08-07', '14:44:57', 0, 0, 'Ariel'),
(106, 1, '2019-08-07', '14:45:11', 3, 0, 'Ariel'),
(107, 1, '2019-08-07', '14:45:55', -2, 0, 'Ariel'),
(108, 1, '2019-08-07', '14:47:22', 3, 0, 'Ariel'),
(109, 1, '2019-08-07', '14:47:42', 5, 0, 'Ariel'),
(110, 1, '2019-08-08', '10:24:33', 6, 0, 'Ariel'),
(111, 2, '2019-08-08', '10:24:51', 0, 1, 'Ariel'),
(112, 2, '2019-08-08', '10:25:25', 1, 1, 'Ariel'),
(113, 1, '2019-08-14', '17:54:12', 7, 3, 'Ariel'),
(114, 2, '2019-08-14', '17:59:30', -3, 2, 'Ariel'),
(115, 2, '2019-08-14', '18:07:58', -1, 3, 'Ariel'),
(116, 2, '2019-08-14', '18:08:15', 2, 1, 'Ariel'),
(117, 2, '2019-08-14', '18:20:09', 3, 2, 'Ariel'),
(118, 1, '2019-10-24', '08:14:35', 10, -5, 'Ariel'),
(119, 2, '2019-10-24', '08:19:39', 2, 8, 'Ariel'),
(120, 2, '2019-10-24', '08:19:48', 10, -5, 'Ariel'),
(121, 1, '2019-10-24', '08:20:09', 5, -10, 'Ariel'),
(122, 2, '2019-10-24', '08:48:37', 0, 5, 'Ariel'),
(123, 2, '2019-10-24', '08:48:45', 5, -2, 'Ariel'),
(124, 2, '2019-10-28', '08:02:08', 3, 2, 'Ariel'),
(125, 3, '2019-10-28', '08:02:22', 0, -9, 'Ariel'),
(126, 5, '2019-10-28', '08:02:29', 0, 3, 'Ariel'),
(127, 3, '2019-10-28', '08:02:38', -9, 3, 'Ariel'),
(128, 32, '2019-10-31', '09:23:05', 4, 5, 'Ariel'),
(129, 35, '2019-10-31', '09:23:16', 4, -6, 'Ariel'),
(130, 2, '2019-10-31', '09:36:59', 5, -2, 'Ariel'),
(131, 2, '2019-10-31', '09:37:06', 3, -6, 'Ariel'),
(132, 1, '2019-10-31', '09:53:24', -5, -10, 'Ariel'),
(133, 1, '2019-10-31', '09:53:36', -15, 20, 'Ariel'),
(134, 2, '2019-10-31', '10:06:11', -3, 5, 'Ariel'),
(135, 2, '2019-10-31', '10:06:34', 2, -50, 'Ariel'),
(136, 2, '2019-10-31', '10:06:50', -48, 55, 'Ariel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldo_anterior`
--

CREATE TABLE `saldo_anterior` (
  `año_saldo` int(11) NOT NULL,
  `total_saldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `saldo_anterior`
--

INSERT INTO `saldo_anterior` (`año_saldo`, `total_saldo`) VALUES
(0, 18084);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `dni_docente` int(8) NOT NULL,
  `id_periferico` int(11) NOT NULL,
  `fecha_sol` date NOT NULL,
  `hora_sol` time NOT NULL,
  `usuario` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_impresion`
--

CREATE TABLE `tipo_impresion` (
  `id_impresion` int(11) NOT NULL,
  `nom_impresion` varchar(52) DEFAULT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_impresion`
--

INSERT INTO `tipo_impresion` (`id_impresion`, `nom_impresion`, `valor`) VALUES
(1, 'Blanco y Negro', 2),
(2, 'Color Texto', 5),
(3, 'Color Imagen', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nom_usuario` varchar(23) NOT NULL,
  `contraseña` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nom_usuario`, `contraseña`) VALUES
('Ariel', '123'),
('Dario', 'rebus'),
('Fernando', 'esc749'),
('Ignacio', 'vega749'),
('Walter', 'toconas2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`) USING BTREE;

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`cod_compra`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id_periferico`),
  ADD KEY `id_solicitud` (`id_solicitud`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD PRIMARY KEY (`id_observacion`,`cod_registro`);

--
-- Indices de la tabla `periferico`
--
ALTER TABLE `periferico`
  ADD PRIMARY KEY (`id_periferico`);

--
-- Indices de la tabla `registro_impresion`
--
ALTER TABLE `registro_impresion`
  ADD PRIMARY KEY (`cod_registro`);

--
-- Indices de la tabla `registro_impresion/tipo_impresion`
--
ALTER TABLE `registro_impresion/tipo_impresion`
  ADD PRIMARY KEY (`cod_registro`,`id_impresion`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`dni_docente`,`id_periferico`,`num_reserva`) USING BTREE;

--
-- Indices de la tabla `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`cod_saldo`);

--
-- Indices de la tabla `saldo_anterior`
--
ALTER TABLE `saldo_anterior`
  ADD PRIMARY KEY (`año_saldo`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `tipo_impresion`
--
ALTER TABLE `tipo_impresion`
  ADD PRIMARY KEY (`id_impresion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nom_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `cod_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT de la tabla `observacion`
--
ALTER TABLE `observacion`
  MODIFY `id_observacion` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `saldo`
--
ALTER TABLE `saldo`
  MODIFY `cod_saldo` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
