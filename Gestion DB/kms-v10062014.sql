-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2014 a las 19:05:11
-- Versión del servidor: 5.5.36
-- Versión de PHP: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `action_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_audit_action1_idx` (`action_id`),
  KEY `fk_audit_user1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Barranquilla'),
(2, 'Santa Marta'),
(3, 'Cartagena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE IF NOT EXISTS `conductor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `carnet` varchar(45) NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eds`
--

CREATE TABLE IF NOT EXISTS `eds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_eds_city1_idx` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuel_log`
--

CREATE TABLE IF NOT EXISTS `fuel_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `origin` varchar(40) NOT NULL,
  `target` varchar(40) NOT NULL,
  `odom1` double NOT NULL,
  `odom2` double NOT NULL,
  `kms` double NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fuel_log_vehicle1_idx` (`vehicle_id`),
  KEY `fk_fuel_log_user1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justifi`
--

CREATE TABLE IF NOT EXISTS `justifi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kms` double NOT NULL,
  `remark` varchar(150) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_justifi_activity1_idx` (`activity_id`),
  KEY `fk_justifi_user1_idx` (`user_id`),
  KEY `fk_justifi_vehicle1_idx` (`vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_location_city1_idx` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `location`
--

INSERT INTO `location` (`id`, `name`, `city_id`) VALUES
(1, 'Oficina La 93', 1),
(2, 'Los robles', 1),
(3, 'La 43', 1),
(4, 'T. Transp.', 1),
(5, 'SIMÓN BOLIVAR', 1),
(6, 'Marbella', 3),
(7, 'T. Transp.', 3),
(8, 'Rodadero 1', 2),
(9, 'Rodadero 2', 2),
(10, 'La 22', 2),
(11, 'Mamatoco', 2),
(12, 'T. Transp.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_permission_user_idx` (`user_id`),
  KEY `fk_permission_privilege1_idx` (`privilege_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `permission`
--

INSERT INTO `permission` (`id`, `user_id`, `privilege_id`, `state`) VALUES
(1, 1, 1, 1),
(2, 1, 16, 1),
(3, 2, 1, 1),
(4, 2, 6, 1),
(5, 2, 7, 1),
(6, 2, 8, 1),
(7, 2, 9, 1),
(8, 2, 13, 1),
(9, 2, 19, 1),
(11, 1, 3, 1),
(12, 1, 4, 1),
(13, 1, 5, 1),
(14, 1, 14, 1),
(15, 1, 19, 1),
(16, 3, 1, 1),
(17, 3, 6, 1),
(18, 3, 7, 1),
(19, 3, 8, 1),
(20, 3, 9, 1),
(21, 3, 13, 1),
(22, 3, 19, 1),
(23, 4, 1, 1),
(24, 4, 6, 1),
(25, 4, 7, 1),
(26, 4, 8, 1),
(27, 4, 9, 1),
(28, 4, 13, 1),
(29, 4, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `width` double NOT NULL,
  `height` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `privilege`
--

INSERT INTO `privilege` (`id`, `name`, `path`, `image`, `width`, `height`) VALUES
(1, 'Home', 'form-home', 'home.png', 50, 50),
(2, 'Administración de Privilegios', 'form-privilegie', 'privilegies.png', 50, 50),
(3, 'Control de Auditorias', 'form-audit', 'audits.png', 46, 50),
(4, 'Administración Geográfica', 'form-location', 'location.png', 46, 50),
(5, 'Administración de Acciones', 'form-action', 'actions.png', 50, 50),
(6, 'Gestión Vehículo', 'form-vehicle', 'vehicles.png', 50, 50),
(7, 'Gestión EDS', 'form-eds', 'eds.png', 50, 50),
(8, 'Gestión Conductor', 'form-driver', 'drivers.png', 50, 50),
(9, 'Gestión Actividad', 'form-activities', 'activities.png', 50, 50),
(10, 'Gestión Justificaciones', 'manager-justify', 'justifies.png', 50, 50),
(11, 'Gestión Tanqueos', 'manager-tanking', 'eds.png', 50, 50),
(12, 'Gestión Viajes', 'form-road', 'roads.png', 50, 50),
(13, 'Reportes de Consumo', 'form-consumer-report', 'reporting.png', 50, 50),
(14, 'Configuraciones del Sistema', 'form-system-setting', 'setting.png', 50, 50),
(15, 'Formulario Viajes', 'form-traveling', 'vehicles.png', 50, 50),
(16, 'Administración de Usuarios', 'form-user', 'users.png', 50, 50),
(17, 'Formulario de Justificación', 'form-justify', 'justifies.png', 50, 50),
(18, 'Formulario Tanqueos', 'form-tanking', 'eds.png', 50, 50),
(19, 'Ayuda/Soporte', 'form-help', 'helps.png', 50, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tanking`
--

CREATE TABLE IF NOT EXISTS `tanking` (
  `id` int(11) NOT NULL,
  `gallon_volume` double NOT NULL,
  `price_billing` double NOT NULL,
  `date` date NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `eds_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tanking_vehicle1_idx` (`vehicle_id`),
  KEY `fk_tanking_user1_idx` (`user_id`),
  KEY `fk_tanking_eds1_idx` (`eds_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_vehicle`
--

CREATE TABLE IF NOT EXISTS `type_vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `capacity` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `date_create` date NOT NULL,
  `state` tinyint(1) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_location1_idx` (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`, `date_create`, `state`, `location_id`) VALUES
(1, 'web', 'master', 'wkombus', 'd93a5def7511da3d0f2d171d9c344e91', '2014-06-03', 1, 1),
(2, 'User', 'Administrative', 'super', 'eafd78efdb34e5b67b8676f8124cefaa', '2014-06-09', 1, 1),
(3, 'Sandra', 'Villalba', 'svillalba', 'b714337aa8007c433329ef43c7b8252c', '2014-06-09', 1, 1),
(4, 'Diana', 'Jimenez', 'djimenez', 'd93a5def7511da3d0f2d171d9c344e91', '2014-06-10', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plate` varchar(20) NOT NULL,
  `no_input` varchar(20) NOT NULL,
  `odom_current` double NOT NULL,
  `city_id` int(11) NOT NULL,
  `conductor_id` int(11) NOT NULL,
  `type_vehicle_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vehicle_city1_idx` (`city_id`),
  KEY `fk_vehicle_conductor1_idx` (`conductor_id`),
  KEY `fk_vehicle_type_vehicle1_idx` (`type_vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `audit`
--
ALTER TABLE `audit`
  ADD CONSTRAINT `fk_audit_action1` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_audit_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `eds`
--
ALTER TABLE `eds`
  ADD CONSTRAINT `fk_eds_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fuel_log`
--
ALTER TABLE `fuel_log`
  ADD CONSTRAINT `fk_fuel_log_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fuel_log_vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `justifi`
--
ALTER TABLE `justifi`
  ADD CONSTRAINT `fk_justifi_activity1` FOREIGN KEY (`activity_id`) REFERENCES `activity` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_justifi_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_justifi_vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_location_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `fk_permission_privilege1` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_permission_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tanking`
--
ALTER TABLE `tanking`
  ADD CONSTRAINT `fk_tanking_eds1` FOREIGN KEY (`eds_id`) REFERENCES `eds` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tanking_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tanking_vehicle1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_location1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_conductor1` FOREIGN KEY (`conductor_id`) REFERENCES `conductor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehicle_type_vehicle1` FOREIGN KEY (`type_vehicle_id`) REFERENCES `type_vehicle` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
