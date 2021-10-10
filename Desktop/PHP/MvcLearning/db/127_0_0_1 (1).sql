-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 10 oct. 2021 à 21:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lilith`
--
CREATE DATABASE IF NOT EXISTS `lilith` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lilith`;

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

DROP TABLE IF EXISTS `vetement`;
CREATE TABLE IF NOT EXISTS `vetement` (
  `PK_vetement` int(11) NOT NULL AUTO_INCREMENT,
  `name_vet` varchar(100) DEFAULT NULL,
  `vet_img` varchar(255) DEFAULT NULL,
  `price_vet` float(8,2) DEFAULT NULL,
  PRIMARY KEY (`PK_vetement`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`PK_vetement`, `name_vet`, `vet_img`, `price_vet`) VALUES
(1, 'short', 'test.jpg', 5.50),
(2, 'test', 'test', 5.00),
(3, NULL, NULL, NULL),
(4, NULL, NULL, NULL),
(5, NULL, NULL, NULL),
(6, NULL, NULL, 5.00),
(7, NULL, NULL, NULL),
(8, NULL, NULL, NULL),
(9, NULL, NULL, NULL),
(10, NULL, NULL, NULL),
(11, NULL, NULL, NULL),
(12, NULL, NULL, NULL),
(13, NULL, NULL, NULL),
(14, NULL, NULL, NULL),
(15, NULL, NULL, NULL),
(16, NULL, NULL, NULL),
(17, 'test', 'test', 5.00),
(18, 'test', 'test', 40.00),
(19, 'shorty', 'blue', 45.00),
(20, 't', 't', 5.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
