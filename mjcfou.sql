-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 10 déc. 2020 à 16:03
-- Version du serveur :  5.7.32-0ubuntu0.18.04.1
-- Version de PHP : 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mjcfou`
--

-- --------------------------------------------------------

--
-- Structure de la table `entries`
--

DROP TABLE IF EXISTS `entries`;
CREATE TABLE IF NOT EXISTS `entries` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `participant` int(4) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `room_id` int(11) NOT NULL,
  `is_cancelled` tinyint(1) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `is_free` tinyint(1) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `events_fk0` (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`event_id`, `active`, `start_date`, `end_date`, `name`, `description`, `price`, `room_id`, `is_cancelled`, `type`, `image`, `info`, `is_free`) VALUES
(1, 1, '2020-12-10 00:00:00', '2020-12-10 00:00:00', 'La tfête dans les Ã©toiles', 'Description La tÃªte dans les Ã©toiles 1', 15, 1, 0, 'type1', 'image.png', 'Les infos', 0),
(3, 1, '2020-11-11 00:00:00', '2020-11-11 00:00:00', 'La tfête dans les Ã©toiles', 'Description La tÃªte dans les Ã©toiles 1', 15, 2, 0, 'type2', 'image.png', 'info', 0),
(4, 1, '2020-11-11 00:00:00', '2020-11-11 00:00:00', 'La tfête dans les Ã©toiles', 'Description La tÃªte dans les Ã©toiles 1', 15, 3, 0, 'type2', 'image.png', 'info', 0),
(5, 1, '2020-11-11 00:00:00', '2020-11-11 00:00:00', 'La tfête dans les Ã©toiles', 'Description La tÃªte dans les Ã©toiles 1', 15, 3, 0, 'type2', 'image.png', 'info', 0),
(6, 1, '2020-12-10 00:00:00', '2020-12-10 00:00:00', 'La tfête dans les Ã©toiles', 'Description La tÃªte dans les Ã©toiles 1', 15, 1, 0, 'type1', 'image.png', 'infooooooooo', 0),
(7, 1, '2020-12-10 00:00:00', '2020-12-10 00:00:00', 'La tfête dans les Ã©toiles', 'Description La tÃªte dans les Ã©toiles 1', 15, 1, 0, 'type1', 'image.png', 'infooooooooo', 0),
(8, 1, '2020-12-10 00:00:00', '2020-12-10 00:00:00', 'La tfête dans les Ã©toiles', 'Description La tÃªte dans les Ã©toiles 1', 15, 1, 0, 'type1', 'image.png', 'infooooooooo', 0);

-- --------------------------------------------------------

--
-- Structure de la table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `transaction_number` varchar(250) DEFAULT NULL,
  `payment_mode` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `payments_fk0` (`entry_id`),
  KEY `payments_fk1` (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `seats` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`room_id`, `name`, `description`, `seats`) VALUES
(1, 'Salle1', 'Salle1', 50),
(2, 'Salle2', 'Salle2', 60),
(3, 'Salle3', 'Salle3', 35),
(4, 'Salle4', 'Salle4', 25),
(5, 'Salle5', 'Salle5', 75);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
