-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2024 a las 11:04:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `techmap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Accesorios'),
(2, 'Access Point'),
(3, 'Datacenter'),
(4, 'Cableado'),
(5, 'Ciberseguridad'),
(6, 'Dispositivo de escritorio'),
(7, 'Dispositivo portatil'),
(8, 'Enlaces'),
(9, 'Firewalls'),
(10, 'Pantallas'),
(11, 'Proteccion de Datos'),
(12, 'Routers'),
(13, 'Seguridad Fisica'),
(14, 'Switches'),
(15, 'Unidad de almacenamiento'),
(16, 'Video Seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`) VALUES
(1, 'APC'),
(2, 'Arcserve'),
(3, 'Axis'),
(4, 'Belkin'),
(5, 'Cisco'),
(6, 'CloudFlare'),
(7, 'Commscope'),
(8, 'Dahua'),
(9, 'Dell'),
(10, 'Exagrid'),
(11, 'Firemon'),
(12, 'Hitachi'),
(13, 'ISS'),
(14, 'Jetion'),
(15, 'Kramer'),
(16, 'Lacie'),
(17, 'LG'),
(18, 'Linksys'),
(19, 'Logitech'),
(20, 'Mellanox'),
(21, 'Mikrotik'),
(22, 'Netscout'),
(23, 'Nutanix'),
(24, 'PaloAlto'),
(25, 'PNY'),
(26, 'SanDisk'),
(27, 'Seagate'),
(28, 'Siemon'),
(29, 'Targus'),
(30, 'Thales'),
(31, 'Ubiquiti'),
(32, 'ViewSonic'),
(33, 'Wacom'),
(34, 'Yealink');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcaxcategoria`
--

CREATE TABLE `marcaxcategoria` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `subcategoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcaxcategoria`
--

INSERT INTO `marcaxcategoria` (`id`, `marca`, `categoria`, `subcategoria`) VALUES
(2, 'APC', 'Datacenter', 'Racks'),
(3, 'APC', 'Datacenter', 'UPS'),
(4, 'Axis', 'Video Seguridad', 'Camaras'),
(5, 'Axis', 'Video Seguridad', 'NVR - Videograbadores'),
(6, 'Axis', 'Video Seguridad', 'Almacentamiento Integrado'),
(7, 'Axis', 'Video Seguridad', 'Decodificadores'),
(8, 'Cisco', 'Access Point', 'NULL'),
(9, 'Cisco', 'Routers', 'Distribucion'),
(10, 'Cisco', 'Routers', 'DataCenter'),
(11, 'Cisco', 'Datacenter', 'Servidores'),
(12, 'Cisco', 'Switches', 'DataCenter'),
(13, 'Cisco', 'Switches', 'Industrial'),
(14, 'Cisco', 'Switches', 'SAN'),
(15, 'Cisco', 'Switches', 'Distribucion'),
(16, 'Cisco', 'Switches', 'Borde'),
(17, 'Cisco', 'Dispositivo de escritorio', 'Video Colaboracion'),
(18, 'Cisco', 'Proteccion de Datos', 'Hardware'),
(19, 'Cisco', 'Pantallas', 'Profesionales'),
(20, 'Cisco', 'Pantallas', 'Interactivas'),
(21, 'Cisco', 'Dispositivo de escritorio', 'Telefonía IP'),
(22, 'Cisco', 'Ciberseguridad', 'IPS/IDS'),
(23, 'Cisco', 'Ciberseguridad', 'Software'),
(24, 'Cisco', 'Ciberseguridad', 'End-User'),
(25, 'Cisco', 'Ciberseguridad', 'Proteccion DDoS'),
(26, 'Cisco', 'Video Seguridad', 'Camaras '),
(27, 'Cisco', 'Seguridad Fisica', 'Control de Acceso '),
(28, 'Cisco', 'Firewalls', 'On-premise'),
(29, 'Cisco', 'Firewalls', 'Cloud'),
(30, 'CloudFlare', 'Routers', 'Distribucion'),
(31, 'CloudFlare', 'Routers', 'DataCenter'),
(32, 'CloudFlare', 'Datacenter', 'Servidores'),
(33, 'CloudFlare', 'Datacenter', 'Storages'),
(34, 'CloudFlare', 'Switches', 'DataCenter'),
(35, 'CloudFlare', 'Dispositivo de escritorio', 'Video Colaboracion'),
(36, 'CloudFlare', 'Proteccion de Datos', 'Hardware'),
(37, 'CloudFlare', 'Proteccion de Datos', 'Software'),
(38, 'CloudFlare', 'Ciberseguridad', 'IPS/IDS'),
(39, 'CloudFlare', 'Ciberseguridad', 'Software'),
(40, 'CloudFlare', 'Ciberseguridad', 'End-User'),
(41, 'CloudFlare', 'Ciberseguridad', 'Proteccion DDoS'),
(42, 'CloudFlare', 'Ciberseguridad', 'Cloud'),
(43, 'CloudFlare', 'Video Seguridad', 'Camaras '),
(44, 'CloudFlare', 'Firewalls', 'On-premise'),
(45, 'CloudFlare', 'Firewalls', 'Cloud'),
(46, 'Commscope', 'Cableado', 'Fibra Optica'),
(47, 'Commscope', 'Cableado', 'Cobre'),
(48, 'Dahua', 'Seguridad Fisica', 'Alarmas y Control ignífugo'),
(49, 'Dahua', 'Seguridad Fisica', 'Control de Acceso '),
(50, 'Dahua', 'Switches', 'Borde'),
(51, 'Dahua', 'Switches', 'Distribucion'),
(52, 'Dahua', 'Switches', 'Industrial'),
(53, 'Dahua', 'Video Seguridad', 'Almacentamiento Integrado'),
(54, 'Dahua', 'Video Seguridad', 'Camaras '),
(55, 'Dahua', 'Video Seguridad', 'Decodificadores'),
(56, 'Dahua', 'Video Seguridad', 'NVR - Videograbadores'),
(57, 'Dell', 'Switches', 'Transceiver'),
(58, 'Dell', 'Datacenter', 'Backup Appliaces'),
(59, 'Dell', 'Dispositivo de escritorio', 'Desktops'),
(60, 'Dell', 'Unidad de almacenamiento', 'Discos HDD'),
(61, 'Dell', 'Unidad de almacenamiento', 'Discos SSD'),
(62, 'Dell', 'Dispositivo portatil', 'Laptops'),
(63, 'Dell', 'Dispositivo de escritorio', 'Memorias RAM'),
(64, 'Dell', 'Dispositivo de escritorio', 'Monitores'),
(65, 'Dell', 'Datacenter', 'Racks'),
(66, 'Dell', 'Datacenter', 'Servidores'),
(67, 'Dell', 'Datacenter', 'Storages'),
(68, 'Dell', 'Switches', 'DataCenter'),
(69, 'Dell', 'Dispositivo de escritorio', 'Workstations'),
(70, 'Dell', 'Proteccion de Datos', 'Hardware'),
(71, 'Dell', 'Proteccion de Datos', 'Software'),
(72, 'Exagrid', 'Datacenter', 'Backup Appliaces'),
(73, 'Firemon', 'Proteccion de Datos', 'Hardware'),
(74, 'Firemon', 'Proteccion de Datos', 'Software'),
(75, 'Firemon', 'Proteccion de Datos', 'Disaster Recovery'),
(76, 'Firemon', 'Ciberseguridad', 'IPS/IDS'),
(77, 'Firemon', 'Ciberseguridad', 'Software'),
(78, 'Firemon', 'Ciberseguridad', 'End-User'),
(79, 'Firemon', 'Ciberseguridad', 'Proteccion DDoS'),
(80, 'Firemon', 'Ciberseguridad', 'Cloud'),
(81, 'Firemon', 'Firewalls', 'On-premise'),
(82, 'Firemon', 'Firewalls', 'Cloud'),
(83, 'Hitachi', 'Datacenter', 'Backup Appliaces'),
(84, 'Hitachi', 'Datacenter', 'Servidores'),
(85, 'Hitachi', 'Datacenter', 'Storages'),
(86, 'Kramer', 'Dispositivo de escritorio', 'Video Colaboracion'),
(87, 'LG', 'Dispositivo de escritorio', 'Video Colaboracion'),
(88, 'LG', 'Pantallas', 'Profesionales'),
(89, 'LG', 'Pantallas', 'Interactivas'),
(90, 'Linksys', 'Access Point', 'NULL'),
(91, 'Linksys', 'Routers', 'DataCenter'),
(92, 'Linksys', 'Routers', 'Distribucion'),
(93, 'Linksys', 'Switches', 'DataCenter'),
(94, 'Linksys', 'Switches', 'Distribucion'),
(95, 'Logitech', 'Dispositivo de escritorio', 'Video Colaboracion'),
(96, 'Mikrotik', 'Access Point', 'NULL'),
(97, 'Mikrotik', 'Enlaces', 'PTP/PTMP'),
(98, 'Mikrotik', 'Enlaces', 'LTE/5G'),
(99, 'Mikrotik', 'Routers', 'DataCenter'),
(100, 'Mikrotik', 'Routers', 'Distribucion'),
(101, 'Mikrotik', 'Switches', 'Transceiver'),
(102, 'Mikrotik', 'Switches', 'Borde'),
(103, 'Mikrotik', 'Switches', 'DataCenter'),
(104, 'Mikrotik', 'Switches', 'Distribucion'),
(105, 'Netscout', 'Ciberseguridad', 'IPS/IDS'),
(106, 'Netscout', 'Ciberseguridad', 'Software'),
(107, 'Netscout', 'Ciberseguridad', 'End-User'),
(108, 'Netscout', 'Ciberseguridad', 'Proteccion DDoS'),
(109, 'Netscout', 'Ciberseguridad', 'Cloud'),
(110, 'Nutanix', 'Datacenter', 'Servidores'),
(111, 'PaloAlto', 'Routers', 'DataCenter'),
(112, 'PaloAlto', 'Datacenter', 'Servidores'),
(113, 'PaloAlto', 'Datacenter', 'Storages'),
(114, 'PaloAlto', 'Switches', 'DataCenter'),
(115, 'PaloAlto', 'Proteccion de Datos', 'Hardware'),
(116, 'PaloAlto', 'Proteccion de Datos', 'Software'),
(117, 'PaloAlto', 'Ciberseguridad', 'IPS/IDS'),
(118, 'PaloAlto', 'Ciberseguridad', 'Software'),
(119, 'PaloAlto', 'Ciberseguridad', 'End-User'),
(120, 'PaloAlto', 'Ciberseguridad', 'Proteccion DDoS'),
(121, 'PaloAlto', 'Ciberseguridad', 'Cloud'),
(122, 'PaloAlto', 'Video Seguridad', 'Camaras '),
(123, 'PaloAlto', 'Firewalls', 'On-premise'),
(124, 'PaloAlto', 'Firewalls', 'Cloud'),
(125, 'PNY', 'Unidad de almacenamiento', 'Discos HDD'),
(126, 'PNY', 'Unidad de almacenamiento', 'Discos SSD'),
(127, 'PNY', 'Dispositivo de escritorio', 'Memorias RAM'),
(128, 'SanDisk', 'Unidad de almacenamiento', 'Discos HDD'),
(129, 'SanDisk', 'Unidad de almacenamiento', 'Discos SSD'),
(130, 'SanDisk', 'Unidad de almacenamiento', 'USB/Micro SD'),
(131, 'Seagate', 'Unidad de almacenamiento', 'Discos HDD'),
(132, 'Seagate', 'Unidad de almacenamiento', 'Discos SSD'),
(133, 'Siemon', 'Cableado', 'Fibra Optica'),
(134, 'Siemon', 'Cableado', 'Cobre'),
(135, 'Ubiquiti', 'Switches', 'Transceiver'),
(136, 'Ubiquiti', 'Access Point', 'NULL'),
(137, 'Ubiquiti', 'Enlaces', 'PTP/PTMP'),
(138, 'Ubiquiti', 'Datacenter', 'Racks'),
(139, 'Ubiquiti', 'Routers', 'Distribucion'),
(140, 'Ubiquiti', 'Routers', 'DataCenter'),
(141, 'Ubiquiti', 'Switches', 'DataCenter'),
(142, 'Ubiquiti', 'Switches', 'Industrial'),
(143, 'Ubiquiti', 'Switches', 'Distribucion'),
(144, 'Ubiquiti', 'Switches', 'Borde'),
(145, 'Ubiquiti', 'Video Seguridad', 'Camaras '),
(146, 'Ubiquiti', 'Seguridad Fisica', 'Control de Acceso '),
(147, 'ViewSonic', 'Dispositivo de escritorio', 'Monitores'),
(148, 'ViewSonic', 'Dispositivo de escritorio', 'Video Colaboracion'),
(149, 'ViewSonic', 'Pantallas', 'Profesionales'),
(150, 'ViewSonic', 'Pantallas', 'Interactivas'),
(151, 'Yealink', 'Dispositivo de escritorio', 'Video Colaboracion'),
(152, 'Yealink', 'Pantallas', 'Interactivas'),
(153, 'Yealink', 'Dispositivo de escritorio', 'Telefonía IP'),
(154, 'Arcserve', 'Proteccion de Datos', 'Hardware'),
(155, 'Arcserve', 'Proteccion de Datos', 'Software'),
(156, 'Belkin', 'Accesorios', 'Bases y hubs'),
(157, 'Belkin', 'Accesorios', 'Adaptadores'),
(158, 'Belkin', 'Accesorios', 'Audio'),
(159, 'ISS', 'Dispositivo de escritorio', 'Workstations'),
(160, 'ISS', 'Video Seguridad', 'Camaras '),
(161, 'ISS', 'Video Seguridad', 'NVR - Videograbadores'),
(162, 'ISS', 'Video Seguridad', 'Almacentamiento Integrado'),
(163, 'ISS', 'Video Seguridad', 'Decodificadores'),
(164, 'Jetion', 'Pantallas', 'Interactivas'),
(165, 'Lacie', 'Unidad de almacenamiento', 'Discos HDD'),
(166, 'Lacie', 'Unidad de almacenamiento', 'Discos SSD'),
(167, 'Lacie', 'Unidad de almacenamiento', 'USB/Micro SD'),
(168, 'Lacie', 'Unidad de almacenamiento', 'NAS'),
(169, 'Mellanox', 'Switches', 'DataCenter'),
(170, 'Mellanox', 'Switches', 'SAN'),
(171, 'Targus', 'Accesorios', 'Bases y hubs'),
(172, 'Targus', 'Accesorios', 'Adaptadores'),
(173, 'Targus', 'Accesorios', 'Audio'),
(174, 'Targus', 'Accesorios', 'Perifericos'),
(175, 'Targus', 'Accesorios', 'Mochilas/Bolsos'),
(176, 'Targus', 'Dispositivo portatil', 'Tablet'),
(177, 'Thales', 'Proteccion de Datos', 'Hardware'),
(178, 'Thales', 'Proteccion de Datos', 'Software'),
(179, 'Thales', 'Proteccion de Datos', 'Disaster Recovery'),
(180, 'Thales', 'Ciberseguridad', 'IPS/IDS'),
(181, 'Thales', 'Ciberseguridad', 'Software'),
(182, 'Thales', 'Ciberseguridad', 'End-User'),
(183, 'Thales', 'Seguridad Fisica', 'Control de Acceso '),
(184, 'Wacom', 'Dispositivo portatil', 'Pen tablets'),
(185, 'Wacom', 'Pantallas', 'Interactivas'),
(186, 'Cisco', 'Switches', 'Transceiver'),
(187, 'APC', 'Switches', 'KVM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcaxcategoria`
--
ALTER TABLE `marcaxcategoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `marcaxcategoria`
--
ALTER TABLE `marcaxcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
