-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 06 nov. 2020 à 14:09
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
