-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 oct. 2020 à 10:36
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_cliens` bigint(20) NOT NULL AUTO_INCREMENT,
  `adresse_clients` varchar(255) DEFAULT NULL,
  `nom_clients` varchar(255) DEFAULT NULL,
  `prenom_clients` varchar(255) DEFAULT NULL,
  `ville_clients` varchar(255) DEFAULT NULL,
  `cp_cliens` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_cliens`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_cliens`, `adresse_clients`, `nom_clients`, `prenom_clients`, `ville_clients`, `cp_cliens`) VALUES
(1, '14-rue-des-tulipe', 'Hibout', 'Brandon', 'Mâcon', 71000),
(16, 'fhxfg', '0', '0', '0', 5),
(17, 'fhxfg', 'ghfh', 'fxghfxg', 'fxhxf', 5),
(18, 'RGDWG', 'DGG', 'DGESGS', 'REGER', 38),
(19, 'VER', 'FVE', 'ERV', 'EVR', 34);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
