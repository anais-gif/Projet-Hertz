-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 28 oct. 2020 à 12:44
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
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `id_voiture` bigint(20) NOT NULL AUTO_INCREMENT,
  `modele_voiture` varchar(255) DEFAULT NULL,
  `prix_voiture` bigint(255) DEFAULT NULL,
  `annee_voiture` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id_voiture`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_voiture`, `modele_voiture`, `prix_voiture`, `annee_voiture`) VALUES
(1, 'peugeot-108', 200, 2018),
(3, 'Citroen-C3', 190, 2019),
(4, 'Renault-Clio', 220, 2020),
(5, 'Opel-Corsa', 300, 2019),
(6, 'Fiat-500', 240, 2018),
(7, 'Mini-Cooper', 320, 2020),
(8, 'Renault-megane', 190, 2018),
(9, 'Mercedes-C-Class', 350, 2020),
(10, 'Volkswagen-Golf', 310, 2018),
(11, 'Renault-Talisman', 260, 2017),
(12, 'Ford-C-Max', 260, 2018),
(13, 'Renault-Captus', 340, 2019),
(14, 'Peugeot-2008', 280, 2020),
(15, 'Toyota-Auris', 190, 2019),
(16, 'Kia-Rio', 310, 2019),
(17, 'BMW-Series-2', 390, 2020),
(18, 'Renault-Kadjar', 260, 2019),
(19, 'Fiat-Doblo', 280, 2018),
(20, 'Renault-Trafic', 280, 2018);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
