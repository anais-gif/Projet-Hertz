-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 06 nov. 2020 à 16:16
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
  `pseudo` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id_cliens`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_cliens`, `adresse_clients`, `nom_clients`, `prenom_clients`, `ville_clients`, `cp_cliens`, `pseudo`, `mdp`) VALUES
(30, '3 rue de pivoine', 'marine', 'talila', 'la grue', 10025, '123momo', '321momo'),
(33, 'rue de tulipe', 'lagrue', 'sophia', 'gillet', 71569, 'zoo200', 'zoo478'),
(34, 'rue des corde', 'lardet', 'maryse', 'toile ', 71456, 'toto', '32fois'),
(36, '37 rue la martine', 'leonardi', 'chantal', 'gouru', 71986, '326gigi', '963lo'),
(39, 'le bours', 'bachelard', 'julie', 'aboncourt', 54115, 'lougi21', 'lougui96'),
(40, '54 rue de givi', 'decharue', 'Antoine', 'abidos', 64150, 'koui65', '85 des'),
(41, '46 rue des puits', 'lerois', 'Samuel', 'ablis', 78660, 'guis56', 'cote61'),
(42, '31 rue la foire', 'guillaume', 'Samantha', 'sacy', 51500, 'sacy54', 'guillaume21'),
(43, '50 rue des roux', 'rasouza', 'Naima', 'obervisse', 57220, 'firi32', '6841ma');

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date_de_location` date NOT NULL,
  `date_fin_de_location` date NOT NULL,
  `id_cliens` int(11) NOT NULL,
  `id_voiture` int(11) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `louer`
--

INSERT INTO `louer` (`id`, `date_de_location`, `date_fin_de_location`, `id_cliens`, `id_voiture`, `disponible`) VALUES
(1, '2020-11-17', '2020-11-10', 30, 1, 1),
(2, '2020-11-13', '2020-11-20', 4, 5, 0),
(3, '2020-11-07', '2020-11-13', 5, 14, 1),
(4, '2020-11-06', '2020-11-25', 5, 5, 0),
(5, '0000-00-00', '0000-00-00', 1, 1, 0),
(6, '2020-11-10', '2020-11-17', 5, 1, 0),
(7, '2020-11-10', '2020-11-17', 5, 1, 0),
(8, '2020-11-07', '2020-11-13', 30, 5, 1),
(9, '2020-11-13', '2020-11-17', 30, 5, 1),
(10, '2020-11-13', '2020-11-18', 35, 4, 1),
(11, '2020-11-13', '2020-11-18', 35, 4, 1),
(12, '2020-11-13', '2020-11-18', 35, 4, 1),
(13, '2020-11-13', '2020-11-18', 35, 4, 1),
(14, '2020-11-26', '2020-11-26', 34, 4, 1),
(15, '2020-11-26', '2020-11-26', 34, 4, 1),
(16, '2020-11-26', '2020-11-26', 34, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `mail` (`email`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `password`) VALUES
(1, 'Admin', 'gd@gmail.com', 'admin');

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
  `Disponible` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_voiture`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_voiture`, `modele_voiture`, `prix_voiture`, `annee_voiture`, `Disponible`) VALUES
(1, 'Renault', 250, 2018, 1),
(4, 'Renault', 250, 2018, 1),
(5, 'Lamborghini', 2500, 2018, 1),
(43, 'Renault', 250, 2018, 1),
(44, 'Peugeot', 250, 2018, 1),
(45, 'Renault', 250, 2019, 1),
(46, 'Aventador', 8500, 2018, 1),
(47, 'Aventador', 8500, 2018, 1),
(50, 'Multipla', 2, 2002, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
