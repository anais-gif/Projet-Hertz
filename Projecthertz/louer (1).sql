-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 oct. 2020 à 10:37
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
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `id_voiture` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_cliens` bigint(20) NOT NULL,
  `id_louer` varchar(255) DEFAULT NULL,
  `disponible_louer` varchar(255) DEFAULT NULL,
  `non_disponible_louer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_voiture`,`id_cliens`),
  KEY `FK_louer_id_cliens` (`id_cliens`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `louer`
--
ALTER TABLE `louer`
  ADD CONSTRAINT `FK_louer_id_cliens` FOREIGN KEY (`id_cliens`) REFERENCES `client` (`id_cliens`),
  ADD CONSTRAINT `FK_louer_id_voiture` FOREIGN KEY (`id_voiture`) REFERENCES `vehicule` (`id_voiture`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
