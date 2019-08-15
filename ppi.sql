-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2019 a las 19:37:55
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ppi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `idescolaridad` int(11) NOT NULL,
  `rfc` char(10) CHARACTER SET latin1 NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE `administrativo` (
  `idadministrativo` int(11) NOT NULL,
  `rfc` char(10) NOT NULL,
  `idescolaridad` int(11) NOT NULL,
  `iddepartamento` int(11) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL,
  `num_control` char(10) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  `semestre` char(2) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL,
  `nom_carrera` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `nom_carrera`) VALUES
(1, 'LICENCIATURA EN ADMINISTRACIÓN'),
(2, 'INGENIERÍA BIOQUÍMICA'),
(3, 'INGENIERÍA QUÍMICA'),
(4, 'INGENIERÍA ELÉCTRICA'),
(5, 'INGENIERÍA ELECTRÓNICA'),
(6, 'INGENIERÍA MECÁNICA'),
(7, 'INGENIERÍA MECATRÓNICA'),
(8, 'INGENIERÍA INDUSTRIAL'),
(9, 'INGENIERÍA EN SISTEMAS COMPUTACIONALES'),
(10, 'INGENIERÍA EN ENERGÍAS RENOVABLES'),
(11, 'INGENIERÍA EN GESTIÓN EMPRESARIAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(11) NOT NULL,
  `nom_ciudad` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idestado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `nom_ciudad`, `idestado`) VALUES
(1, 'Acajete', 17),
(2, 'Acatlán', 17),
(3, 'Acayucan', 17),
(4, 'Actopan', 17),
(5, 'Acula', 17),
(6, 'Acultzingo', 17),
(7, 'Camarón de Tejeda', 17),
(8, 'Alpatláhuac', 17),
(9, 'Alto Lucero de Gutiérrez Barrios', 17),
(10, 'Altotonga', 17),
(11, 'Alvarado', 17),
(12, 'Amatitlán', 17),
(13, 'Naranjos Amatlán', 17),
(14, 'Amatlán de los Reyes', 17),
(15, 'Angel R. Cabada', 17),
(16, 'La Antigua', 17),
(17, 'Apazapan ', 17),
(18, 'Aquila ', 17),
(19, 'Astacinga ', 17),
(20, 'Atlahuilco', 17),
(21, 'Atoyac', 17),
(22, 'Atzacan', 17),
(23, 'Atzalan', 17),
(24, 'Tlaltetela', 17),
(25, 'Ayahualulco', 17),
(26, 'Banderilla', 17),
(27, 'Benito Juárez', 17),
(28, 'Boca del Río', 17),
(29, 'Calcahualco ', 17),
(30, 'Camerino Z. Mendoza', 17),
(31, 'Carrillo Puerto', 17),
(32, 'Catemaco', 17),
(33, 'Cazones de Herrera', 17),
(34, 'Cerro Azul', 17),
(35, 'Citlaltépetl', 17),
(36, 'Coacoatzintla', 17),
(37, 'Coahuitlán', 17),
(38, 'Coatepec', 17),
(39, 'Coatzacoalcos', 17),
(40, 'Coatzintla', 17),
(41, 'Coetzala ', 17),
(42, 'Colipa', 17),
(43, 'Comapa', 17),
(44, 'Córdoba', 17),
(45, 'Cosamaloapan de Carpio', 17),
(46, 'Cosautlán de Carvajal', 17),
(47, 'Coscomatepec', 17),
(48, 'Cosoleacaque', 17),
(49, 'Cotaxtla', 17),
(50, 'Coxquihui', 17),
(51, 'Coyutla', 17),
(52, 'Cuichapa', 17),
(53, 'CuitlÃ¡huac', 17),
(54, 'Chacaltianguis', 17),
(55, 'Chalma', 17),
(56, 'Chiconamel', 17),
(57, 'Chiconquiaco', 17),
(58, 'Chicontepec', 17),
(59, 'Chinameca', 17),
(60, 'Chinampa de Gorostiza', 17),
(61, 'Las Choapas', 17),
(62, 'ChocamÃ¡n', 17),
(63, 'Chontla', 17),
(64, 'ChumatlÃ¡n ', 17),
(65, 'Emiliano Zapata', 17),
(66, 'Espinal', 17),
(67, 'Filomeno Mata', 17),
(68, 'FortÃ­n', 17),
(69, 'GutiÃ©rrez Zamora', 17),
(70, 'HidalgotitlÃ¡n', 17),
(71, 'Huatusco', 17),
(72, 'Huayacocotla', 17),
(73, 'Hueyapan de Ocampo', 17),
(74, 'Huiloapan de CuauhtÃ©moc', 17),
(75, 'Ignacio de la Llave', 17),
(76, 'IlamatlÃ¡n ', 17),
(77, 'Isla', 17),
(78, 'Ixcatepec', 17),
(79, 'IxhuacÃ¡n de los Reyes', 17),
(80, 'IxhuatlÃ¡n del CafÃ©', 17),
(81, 'Ixhuatlancillo', 17),
(82, 'IxhuatlÃ¡n del Sureste', 17),
(83, 'IxhuatlÃ¡n de Madero', 17),
(84, 'Ixmatlahuacan', 17),
(85, 'IxtaczoquitlÃ¡n', 17),
(86, 'Jalacingo', 17),
(87, 'Xalapa', 17),
(88, 'Jalcomulco', 17),
(89, 'JÃ¡ltipan', 17),
(90, 'Jamapa', 17),
(91, 'JesÃºs Carranza', 17),
(92, 'Xico', 17),
(93, 'Jilotepec', 17),
(94, 'Juan RodrÃ­guez Clara', 17),
(95, 'Juchique de Ferrer', 17),
(96, 'Landero y Coss ', 17),
(97, 'Lerdo de Tejada', 17),
(98, 'Magdalena ', 17),
(99, 'Maltrata', 17),
(100, 'Manlio Fabio Altamirano', 17),
(101, 'Mariano Escobedo', 17),
(102, 'MartÃ­nez de la Torre', 17),
(103, 'MecatlÃ¡n ', 17),
(104, 'Mecayapan ', 17),
(105, 'MedellÃ­n de Bravo', 17),
(106, 'MiahuatlÃ¡n ', 17),
(107, 'Las Minas ', 17),
(108, 'MinatitlÃ¡n', 17),
(109, 'Misantla', 17),
(110, 'Mixtla de Altamirano ', 17),
(111, 'MoloacÃ¡n', 17),
(112, 'Naolinco', 17),
(113, 'Naranjal ', 17),
(114, 'Nautla', 17),
(115, 'Nogales', 17),
(116, 'Oluta', 17),
(117, 'Omealca', 17),
(118, 'Orizaba', 17),
(119, 'OtatitlÃ¡n', 17),
(120, 'Oteapan', 17),
(121, 'Ozuluama de MascareÃ±as', 17),
(122, 'Pajapan', 17),
(123, 'PÃ¡nuco', 17),
(124, 'Papantla', 17),
(125, 'Paso del Macho', 17),
(126, 'Paso de Ovejas', 17),
(127, 'La Perla', 17),
(128, 'Perote', 17),
(129, 'PlatÃ³n SÃ¡nchez', 17),
(130, 'Playa Vicente', 17),
(131, 'Poza Rica de Hidalgo', 17),
(132, 'Las Vigas de RamÃ­rez', 17),
(133, 'Pueblo Viejo', 17),
(134, 'Puente Nacional', 17),
(135, 'Rafael Delgado', 17),
(136, 'Rafael Lucio', 17),
(137, 'Los Reyes ', 17),
(138, 'RÃ­o Blanco', 17),
(139, 'Saltabarranca', 17),
(140, 'San AndrÃ©s Tenejapan ', 17),
(141, 'San AndrÃ©s Tuxtla', 17),
(142, 'San Juan Evangelista', 17),
(143, 'Santiago Tuxtla', 17),
(144, 'Sayula de AlemÃ¡n', 17),
(145, 'Soconusco', 17),
(146, 'Sochiapa ', 17),
(147, 'Soledad Atzompa ', 17),
(148, 'Soledad de Doblado', 17),
(149, 'Soteapan', 17),
(150, 'TamalÃ­n', 17),
(151, 'Tamiahua', 17),
(152, 'Tampico Alto', 17),
(153, 'Tancoco', 17),
(154, 'Tantima', 17),
(155, 'Tantoyuca', 17),
(156, 'Tatatila ', 17),
(157, 'Castillo de Teayo', 17),
(158, 'Tecolutla', 17),
(159, 'Tehuipango ', 17),
(160, 'Ãlamo Temapache', 17),
(161, 'Tempoal', 17),
(162, 'Tenampa', 17),
(163, 'TenochtitlÃ¡n ', 17),
(164, 'Teocelo', 17),
(165, 'Tepatlaxco', 17),
(166, 'TepetlÃ¡n', 17),
(167, 'Tepetzintla', 17),
(168, 'Tequila', 17),
(169, 'JosÃ© Azueta', 17),
(170, 'Texcatepec ', 17),
(171, 'TexhuacÃ¡n ', 17),
(172, 'Texistepec', 17),
(173, 'Tezonapa', 17),
(174, 'Tierra Blanca', 17),
(175, 'TihuatlÃ¡n', 17),
(176, 'Tlacojalpan', 17),
(177, 'Tlacolulan', 17),
(178, 'Tlacotalpan', 17),
(179, 'Tlacotepec de MejÃ­a ', 17),
(180, 'Tlachichilco', 17),
(181, 'Tlalixcoyan', 17),
(182, 'Tlalnelhuayocan', 17),
(183, 'Tlapacoyan', 17),
(184, 'Tlaquilpa', 17),
(185, 'Tlilapan ', 17),
(186, 'TomatlÃ¡n', 17),
(187, 'TonayÃ¡n ', 17),
(188, 'Totutla', 17),
(189, 'Tuxpan', 17),
(190, 'Tuxtilla ', 17),
(191, 'Ursulo GalvÃ¡n', 17),
(192, 'Vega de Alatorre', 17),
(193, 'Veracruz', 17),
(194, 'Villa Aldama', 17),
(195, 'Xoxocotla ', 17),
(196, 'Yanga', 17),
(197, 'Yecuatla', 17),
(198, 'Zacualpan', 17),
(199, 'Zaragoza', 17),
(200, 'Zentla', 17),
(201, 'Zongolica', 17),
(202, 'ZontecomatlÃ¡n de LÃ³pez y Fuentes', 17),
(203, 'Zozocolco de Hidalgo', 17),
(204, 'Agua Dulce', 17),
(205, 'El Higo', 17),
(206, 'Nanchital de LÃ¡zaro CÃ¡rdenas del RÃ­o', 17),
(207, 'Tres Valles', 17),
(208, 'Carlos A. Carrillo', 17),
(209, 'Tatahuicapan de JuÃ¡rez', 17),
(210, 'Uxpanapa', 17),
(211, 'San Rafael', 17),
(212, 'Santiago Sochiapan', 17),
(213, 'Aguascalientes', 1),
(214, 'Asientos', 1),
(215, 'Calvillo', 1),
(216, 'CosÃ­o', 1),
(217, 'JesÃºs MarÃ­a', 1),
(218, 'PabellÃ³n de Arteaga', 1),
(219, 'RincÃ³n de Romos', 1),
(220, 'San JosÃ© de Gracia', 1),
(221, 'TepezalÃ¡', 1),
(222, 'El Llano', 1),
(223, 'San Francisco de los Romo', 1),
(224, 'Ensenada', 2),
(225, 'Mexicali', 2),
(226, 'Tecate', 2),
(227, 'Tijuana', 2),
(228, 'Playas de Rosarito', 2),
(229, 'Comondú', 3),
(230, 'Mulegé', 3),
(231, 'La Paz', 3),
(232, 'Los Cabos', 3),
(233, 'Loreto', 3),
(234, 'Aconchi', 4),
(235, 'Agua Prieta', 4),
(236, 'Alamos', 4),
(237, 'Altar', 4),
(238, 'Arivechi', 4),
(239, 'Arizpe', 4),
(240, 'Atil', 4),
(241, 'BacadÃ©huachi', 4),
(242, 'Bacanora', 4),
(243, 'Bacerac', 4),
(244, 'Bacoachi', 4),
(245, 'BÃ¡cum', 4),
(246, 'BanÃ¡michi', 4),
(247, 'BaviÃ¡cora', 4),
(248, 'Bavispe', 4),
(249, 'Benito JuÃ¡rez', 4),
(250, 'BenjamÃ­n Hill', 4),
(251, 'Caborca', 4),
(252, 'Cajeme', 4),
(253, 'Cananea', 4),
(254, 'CarbÃ³', 4),
(255, 'Cucurpe', 4),
(256, 'Cumpas', 4),
(257, 'Divisaderos', 4),
(258, 'Empalme', 4),
(259, 'Etchojoa', 4),
(260, 'Fronteras', 4),
(261, 'General Plutarco ElÃ­as Calles', 4),
(262, 'Granados', 4),
(263, 'Guaymas', 4),
(264, 'Hermosillo', 4),
(265, 'Huachinera ', 4),
(266, 'HuÃ¡sabas', 4),
(267, 'Huatabampo', 4),
(268, 'HuÃ©pac', 4),
(269, 'Imuris', 4),
(270, 'La Colorada', 4),
(271, 'Magdalena', 4),
(272, 'MazatÃ¡n', 4),
(273, 'Moctezuma', 4),
(274, 'Naco', 4),
(275, 'NÃ¡cori Chico', 4),
(276, 'Nacozari de GarcÃ­a', 4),
(277, 'Navojoa', 4),
(278, 'Nogales', 4),
(279, 'Onavas', 4),
(280, 'Opodepe', 4),
(281, 'Oquitoa', 4),
(282, 'Pitiquito', 4),
(283, 'Puerto PeÃ±asco', 4),
(284, 'Quiriego', 4),
(285, 'RayÃ³n', 4),
(286, 'Rosario', 4),
(287, 'Sahuaripa', 4),
(288, 'San Felipe de JesÃºs', 4),
(289, 'San Ignacio RÃ­o Muerto', 4),
(290, 'San Javier', 4),
(291, 'San Luis RÃ­o Colorado', 4),
(292, 'San Miguel de Horcasitas', 4),
(293, 'San Pedro de la Cueva', 4),
(294, 'Santa Ana', 4),
(295, 'Santa Cruz', 4),
(296, 'SÃ¡ric', 4),
(297, 'Soyopa', 4),
(298, 'Suaqui Grande', 4),
(299, 'Tepache', 4),
(300, 'Trincheras', 4),
(301, 'Tubutama', 4),
(302, 'Ures', 4),
(303, 'Villa Hidalgo', 4),
(304, 'Villa Pesqueira ', 4),
(305, 'YÃ©cora', 4),
(306, 'Ahumada', 5),
(307, 'Aldama', 5),
(308, 'Allende', 5),
(309, 'Aquiles SerdÃ¡n', 5),
(310, 'AscensiÃ³n', 5),
(311, 'BachÃ­niva', 5),
(312, 'Balleza ', 5),
(313, 'Batopilas ', 5),
(314, 'Bocoyna', 5),
(315, 'Buenaventura', 5),
(316, 'Camargo', 5),
(317, 'CarichÃ­', 5),
(318, 'Casas Grandes', 5),
(319, 'Chihuahua', 5),
(320, 'ChÃ­nipas ', 5),
(321, 'Coronado ', 5),
(322, 'Coyame del Sotol ', 5),
(323, 'CuauhtÃ©moc', 5),
(324, 'Cusihuiriachi', 5),
(325, 'Delicias', 5),
(326, 'Belisario DomÃ­nguez ', 5),
(327, 'El Tule ', 5),
(328, 'Galeana', 5),
(329, 'GÃ³mez FarÃ­as', 5),
(330, 'Gran Morelos ', 5),
(331, 'Guachochi ', 5),
(332, 'Guadalupe', 5),
(333, 'Guadalupe y Calvo ', 5),
(334, 'Guazapares ', 5),
(335, 'Guerrero', 5),
(336, 'Hidalgo del Parral', 5),
(337, 'HuejotitÃ¡n ', 5),
(338, 'Ignacio Zaragoza', 5),
(339, 'Janos', 5),
(340, 'JimÃ©nez', 5),
(341, 'JuÃ¡rez', 5),
(342, 'Julimes', 5),
(343, 'La Cruz ', 5),
(344, 'LÃ³pez ', 5),
(345, 'Madera', 5),
(346, 'Maguarichi ', 5),
(347, 'Manuel Benavides', 5),
(348, 'MatachÃ­ ', 5),
(349, 'Matamoros ', 5),
(350, 'Meoqui', 5),
(351, 'Morelos ', 5),
(352, 'Moris', 5),
(353, 'Namiquipa', 5),
(354, 'Nonoava ', 5),
(355, 'Nuevo Casas Grandes', 5),
(356, 'Ocampo', 5),
(357, 'Ojinaga', 5),
(358, 'Praxedis G. Guerrero', 5),
(359, 'Riva Palacio', 5),
(360, 'Rosales', 5),
(361, 'Rosario ', 5),
(362, 'San Francisco de Borja ', 5),
(363, 'San Francisco de Conchos ', 5),
(364, 'San Francisco del Oro', 5),
(365, 'Santa BÃ¡rbara', 5),
(366, 'Santa Isabel ', 5),
(367, 'SatevÃ³ ', 5),
(368, 'Saucillo', 5),
(369, 'TemÃ³sachic', 5),
(370, 'Urique', 5),
(371, 'Uruachi ', 5),
(372, 'Valle de Zaragoza', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `nom_depto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `iddocente` int(11) NOT NULL,
  `rfc` char(10) NOT NULL,
  `idescolaridad` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `rfc` char(10) NOT NULL,
  `idescolaridad` int(11) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `cp_empresa` char(5) NOT NULL,
  `telefono` char(15) NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idciudad` int(11) NOT NULL,
  `email_empresa` varchar(45) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolaridad`
--

CREATE TABLE `escolaridad` (
  `idescolaridad` int(11) NOT NULL,
  `nom_escolaridad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `nom_estado` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `nom_estado`) VALUES
(1, 'AGUASCALIENTES'),
(2, 'BAJA CALIFORNIA'),
(3, 'BAJA CALIFORNIA SUR'),
(4, 'SONORA'),
(5, 'CHIHUAHUA'),
(6, 'COAHUILA'),
(7, 'TAMAULIPAS'),
(8, 'NUEVO LEÓN'),
(9, 'GUANAJUATO'),
(10, 'COLIMA'),
(12, 'SINALOA'),
(13, 'NAYARIT'),
(14, 'GUERRERO'),
(15, 'JALISCO'),
(16, 'CIUDAD DE MÉXICO'),
(17, 'VERACRUZ'),
(18, 'PUEBLA'),
(19, 'ESTADO DE MÉXICO'),
(20, 'QUERÉTARO'),
(21, 'CHIAPAS'),
(22, 'OAXACA'),
(23, 'YUCATÁN'),
(24, 'QUINTANA ROO'),
(25, 'MICHOACÁN'),
(26, 'ZACATECAS'),
(27, 'TABASCO'),
(28, 'CAMPECHE'),
(29, 'DURANGO'),
(30, 'SAN LUIS POTOSÍ'),
(31, 'TLAXCALA'),
(32, 'HIDALGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

CREATE TABLE `estado_usuario` (
  `idestado_usuario` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE `funciones` (
  `idfunciones` int(11) NOT NULL,
  `nom_funcion` varchar(45) NOT NULL,
  `permiso` char(1) NOT NULL,
  `idadministrativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefedepto`
--

CREATE TABLE `jefedepto` (
  `idjefedepto` int(11) NOT NULL,
  `rfc` char(10) NOT NULL,
  `idescolaridad` int(11) NOT NULL,
  `iddepartamento` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `cod_modulo` int(11) NOT NULL,
  `nom_modulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`cod_modulo`, `nom_modulo`) VALUES
(1, 'ALUMNOS'),
(2, 'DOCENTES'),
(3, 'JEFE DE DEPARTAMENTO'),
(4, 'ADMINISTRATIVOS'),
(5, 'EMPRESAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos_has_sistemas`
--

CREATE TABLE `modulos_has_sistemas` (
  `cod_mod_sis` int(11) NOT NULL,
  `cod_modulo` int(11) NOT NULL,
  `cod_sistema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modulos_has_sistemas`
--

INSERT INTO `modulos_has_sistemas` (`cod_mod_sis`, `cod_modulo`, `cod_sistema`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 2, 1),
(13, 2, 2),
(14, 2, 3),
(15, 2, 4),
(16, 2, 5),
(17, 2, 7),
(18, 2, 8),
(19, 2, 10),
(20, 2, 11),
(21, 3, 1),
(22, 3, 3),
(23, 3, 4),
(24, 3, 5),
(25, 3, 7),
(26, 3, 8),
(27, 3, 10),
(28, 3, 11),
(29, 4, 1),
(30, 4, 2),
(31, 4, 3),
(32, 4, 4),
(33, 4, 5),
(34, 4, 6),
(35, 4, 7),
(36, 4, 8),
(37, 4, 9),
(38, 4, 10),
(39, 4, 11),
(40, 5, 3),
(41, 5, 4),
(42, 5, 6),
(43, 5, 7),
(44, 5, 9),
(45, 5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `cod_rol` int(11) NOT NULL,
  `nom_rol` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`cod_rol`, `nom_rol`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2019-05-25 19:56:28', NULL),
(2, 'Alumno', '2019-05-25 19:56:28', NULL),
(3, 'Docente', '2019-05-25 19:57:06', NULL),
(4, 'Jefe de Departamento', '2019-05-25 19:57:44', NULL),
(5, 'Administrativo', '2019-05-25 19:58:08', NULL),
(6, 'Empresa', '2019-05-25 19:58:22', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_has_permisos`
--

CREATE TABLE `roles_has_permisos` (
  `cod_rol_permiso` int(11) NOT NULL,
  `cod_rol` int(11) NOT NULL,
  `cod_modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles_has_permisos`
--

INSERT INTO `roles_has_permisos` (`cod_rol_permiso`, `cod_rol`, `cod_modulo`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 3, 2),
(8, 4, 3),
(9, 5, 4),
(10, 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `cod_sistema` int(11) NOT NULL,
  `img_sistema` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nom_sistema` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`cod_sistema`, `img_sistema`, `nom_sistema`) VALUES
(1, 'recursos/img/creditos.png', 'Créditos complementarios'),
(2, 'recursos/img/tutorias.png', 'Tutorias'),
(3, 'recursos/img/eventos.png', 'Eventos institucionales'),
(4, 'recursos/img/visitas.png', 'Visitas industriales'),
(5, 'recursos/img/verano.png', 'Cursos de verano'),
(6, 'recursos/img/servicio.png', 'Servicio social'),
(7, 'recursos/img/residencias.png', 'Residencias profesionales'),
(8, 'recursos/img/titulacion.png', 'Titulación integral'),
(9, 'recursos/img/egresados.png', 'Seguimiento de egresados'),
(10, 'recursos/img/difusion.png', 'Difusión'),
(11, 'recursos/img/revista.png', 'Revista académica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cod_rol` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nom_usuario`, `correo`, `password`, `cod_rol`, `created_at`, `updated_at`) VALUES
(1, 'JoseFlores', 'corazon_oro72@hotmail.com', '$2y$10$25GU/a/b3anFkIKV/e3kk.KAp2Gb/3NNrE8TAShsjeiJUZmNOrRpO', 1, '2019-05-28 06:06:15', NULL),
(2, 'Fernando', 'admin@gmail.com', '$2y$10$yfdzI5HcDPduNb0d0Kjlo.2eZkj9zCbiCXlo2QS85KQYGCQNqmJs6', 2, '2019-05-28 06:06:47', NULL),
(3, 'Luisito', 'luisito_comunica@gmail.com', '$2y$10$604QY6eRAGbVz5MUmvvJtur4rStmckzmF1Y8.7aXcpDnvT6sjlIna', 3, '2019-05-28 06:07:18', NULL),
(4, 'Lezama', 'lezama@gmail.com', '$2y$10$rxhUhFqkkCMHtUQZLNdSt.DrE8p9Sd8dejMirtUsqrfhFSGi70SxW', 4, '2019-05-28 06:07:51', NULL),
(5, 'Emily', 'emily@gmail.com', '$2y$10$RGEOfICWV4J3N4oRqc3apOF9L3W.X9xP5yhlf0brmnjOtYn2GVlKO', 5, '2019-05-28 06:08:29', NULL),
(6, 'SIRE', 'siregob@outlook.com', '$2y$10$Mzs/LFMHdjfp4Bh5HcC9U.K.vh1BBneqGdQ1v6vlEoSFKbWV/R/Xe', 6, '2019-05-28 06:09:09', NULL),
(7, 'Grupo FEMSA', 'femsa1887@gmail.com', '$2y$10$pUWJT2l65T1QG3Vmnl1f..lSNInKi1mYXwI2VSrneiuLMJe2dfdaq', 6, '2019-05-30 02:50:04', NULL),
(8, 'Jair Camarillo', 'jair@outlook.com', '$2y$10$mTTFdC0V8ejgL0Z02rnV7.IS6m1B4oOqhfxo04vpYyfME.H3/Ol32', 2, '2019-05-30 02:57:13', NULL),
(9, 'Daniel Amoros', 'amoros@gmail.com', '$2y$10$e/ktEcY7awvmFr6p1If5OORQgMOOieG3Qcrxsp4iMusuy9t8zMynq', 2, '2019-05-30 03:44:42', NULL),
(10, 'Felipe', 'felipe@griver.com.mx', '$2y$10$j3awO0IhTSOvHiwtKrsNWePTdU8tqgb.a00jFoXY5kP/rynIJ0b4K', 3, '2019-07-29 05:41:44', NULL),
(14, 'Keren', 'keren@outlook.com', '$2y$10$qct/vdbaFZpG8l4W9a1JV.qbSOFoBFUVtq2EdzAAAN1O7RwXoEMcG', 4, '2019-07-29 05:51:16', NULL),
(15, 'Mariana', 'mariana@itver.com.mx', '$2y$10$yPTgsrZMG/Vl0FeoreLfiOZaPuyHjEu8rQFh6BQCp9HhsTfd2k86.', 5, '2019-07-29 06:11:38', NULL),
(16, 'Yessica', 'yessica@griver.com.mx', '$2y$10$mv0Gvc9cUk2PG4JvglPdh.MveSsWbIQ/NIbvEUhe.H1gf9oLTu4WW', 6, '2019-07-29 06:16:02', NULL),
(17, 'Juan Carmona', 'juan@itver.edu.mx', '$2y$10$nMJloxKMsrzNTwYGk6x2U.06wv31cCO/qCBHVJ7nUKqWp1o2w4s2K', 6, '2019-08-06 04:07:21', NULL),
(18, 'Yuri', 'yuri13@outlook.com', '$2y$10$xj9UO3j32d5wUZj.SzbgSen7smJ8VAEL6sP4gcgRJWYdUjvBorrdu', 4, '2019-08-10 03:40:59', NULL),
(19, 'Cruzado', 'jesus@itver.edu.mx', '$2y$10$MpwXUn4I5.JNWZlF41kfnOd4b47wkXsOGOt4uiKX8Icl6u6Uk7KOi', 3, '2019-08-14 09:55:10', NULL),
(20, 'Hugo', 'hugo@itver', '$2y$10$AtEjGHQ4hhFx6Y926vOsN.2Zm/92BImBGlkcbTM0CTPCpaH6mpMeu', 2, '2019-08-15 06:42:46', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`),
  ADD KEY `fk_adminr_esco` (`idescolaridad`);

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`idadministrativo`),
  ADD KEY `fk_admin_esco` (`idescolaridad`),
  ADD KEY `fk_admin_depa` (`iddepartamento`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `fk_alum_carrera` (`idcarrera`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`),
  ADD KEY `fk_ciu_est` (`idestado`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`iddocente`),
  ADD KEY `fk_doce_esco` (`idescolaridad`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`),
  ADD KEY `fk_emp_esco` (`idescolaridad`),
  ADD KEY `fk_emp_estado` (`idestado`),
  ADD KEY `fk_emp_ciudad` (`idciudad`);

--
-- Indices de la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  ADD PRIMARY KEY (`idescolaridad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  ADD PRIMARY KEY (`idestado_usuario`);

--
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`idfunciones`),
  ADD KEY `fk_funcion_admin` (`idadministrativo`);

--
-- Indices de la tabla `jefedepto`
--
ALTER TABLE `jefedepto`
  ADD PRIMARY KEY (`idjefedepto`),
  ADD KEY `fk_jefe_esco` (`idescolaridad`),
  ADD KEY `fk_jefe_depto` (`iddepartamento`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`cod_modulo`);

--
-- Indices de la tabla `modulos_has_sistemas`
--
ALTER TABLE `modulos_has_sistemas`
  ADD PRIMARY KEY (`cod_mod_sis`),
  ADD KEY `fk_modulo_modulo` (`cod_modulo`),
  ADD KEY `fk_modulo_sistema` (`cod_sistema`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `roles_has_permisos`
--
ALTER TABLE `roles_has_permisos`
  ADD PRIMARY KEY (`cod_rol_permiso`),
  ADD KEY `fk_rol_rol` (`cod_rol`),
  ADD KEY `fk_rol_modulos` (`cod_modulo`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`cod_sistema`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `fk_usuario_roles` (`cod_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  MODIFY `idadministrativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `iddocente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  MODIFY `idescolaridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  MODIFY `idestado_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
  MODIFY `idfunciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jefedepto`
--
ALTER TABLE `jefedepto`
  MODIFY `idjefedepto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `cod_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `modulos_has_sistemas`
--
ALTER TABLE `modulos_has_sistemas`
  MODIFY `cod_mod_sis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles_has_permisos`
--
ALTER TABLE `roles_has_permisos`
  MODIFY `cod_rol_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `cod_sistema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_adminr_esco` FOREIGN KEY (`idescolaridad`) REFERENCES `escolaridad` (`idescolaridad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD CONSTRAINT `fk_admin_depa` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_admin_esco` FOREIGN KEY (`idescolaridad`) REFERENCES `escolaridad` (`idescolaridad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alum_carrera` FOREIGN KEY (`idcarrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciu_est` FOREIGN KEY (`idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `fk_doce_esco` FOREIGN KEY (`idescolaridad`) REFERENCES `escolaridad` (`idescolaridad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_emp_ciudad` FOREIGN KEY (`idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_emp_esco` FOREIGN KEY (`idescolaridad`) REFERENCES `escolaridad` (`idescolaridad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_emp_estado` FOREIGN KEY (`idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD CONSTRAINT `fk_funcion_admin` FOREIGN KEY (`idadministrativo`) REFERENCES `administrativo` (`idadministrativo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `jefedepto`
--
ALTER TABLE `jefedepto`
  ADD CONSTRAINT `fk_jefe_depto` FOREIGN KEY (`iddepartamento`) REFERENCES `departamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jefe_esco` FOREIGN KEY (`idescolaridad`) REFERENCES `escolaridad` (`idescolaridad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modulos_has_sistemas`
--
ALTER TABLE `modulos_has_sistemas`
  ADD CONSTRAINT `fk_modulo_modulo` FOREIGN KEY (`cod_modulo`) REFERENCES `modulos` (`cod_modulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_modulo_sistema` FOREIGN KEY (`cod_sistema`) REFERENCES `sistemas` (`cod_sistema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `roles_has_permisos`
--
ALTER TABLE `roles_has_permisos`
  ADD CONSTRAINT `fk_rol_modulos` FOREIGN KEY (`cod_modulo`) REFERENCES `modulos` (`cod_modulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rol_rol` FOREIGN KEY (`cod_rol`) REFERENCES `roles` (`cod_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_roles` FOREIGN KEY (`cod_rol`) REFERENCES `roles` (`cod_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
