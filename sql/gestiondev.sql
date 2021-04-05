-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 avr. 2021 à 08:45
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
-- Base de données : `gestiondev`
--

-- --------------------------------------------------------

--
-- Structure de la table `developpeurs`
--

DROP TABLE IF EXISTS `developpeurs`;
CREATE TABLE IF NOT EXISTS `developpeurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(21) DEFAULT NULL,
  `prenom` varchar(21) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `developpeurs`
--

INSERT INTO `developpeurs` (`id`, `nom`, `prenom`, `email`) VALUES
(3, 'ayadisafsaf', 'oussama', 'ayadiossama44@gmail.com'),
(9, 'ahmed', 'slmani', 'ala@ddd.co'),
(20, 'davide', 'david', 'ousi@la.com'),
(28, 'jwjawi9', 'jljlan', 'jom@lom.com'),
(29, 'test_', 'test_', 'test2@test2.com');

-- --------------------------------------------------------

--
-- Structure de la table `technologie`
--

DROP TABLE IF EXISTS `technologie`;
CREATE TABLE IF NOT EXISTS `technologie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html` int(21) DEFAULT NULL,
  `dev_id` int(11) DEFAULT NULL,
  `php` int(11) NOT NULL,
  `js` int(11) NOT NULL,
  `cgi` int(11) NOT NULL,
  `ajax` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dev_id` (`dev_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `technologie`
--

INSERT INTO `technologie` (`id`, `html`, `dev_id`, `php`, `js`, `cgi`, `ajax`) VALUES
(1, 1, 3, 2, 3, 1, 3),
(6, 1, 9, 1, 1, 0, 1),
(10, 5, 20, 5, 0, 5, 5),
(11, 5, 29, 5, 5, -1, 5),
(12, -1, 28, 0, 9, 9, 5),
(13, -1, 28, 0, 9, 9, 5),
(14, -1, 28, 0, 9, 9, 5);

-- --------------------------------------------------------

--
-- Structure de la table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(21) DEFAULT NULL,
  `prenom` varchar(21) DEFAULT NULL,
  `email` varchar(111) DEFAULT NULL,
  `password_user` varchar(31) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_table`
--

INSERT INTO `user_table` (`id`, `nom`, `prenom`, `email`, `password_user`) VALUES
(1, 'test2', 'ts', 'test@test.test', 'ayadiossama44@gmail.com'),
(2, 'qqq', 'qqq', 'qqq@qqq.com', '321'),
(3, 'davide', 'david', 'ousi@la.com', 'jdid'),
(4, 'test_', 'test_', 'test2@test2.com', 'test2@test2.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD CONSTRAINT `technologie_ibfk_1` FOREIGN KEY (`dev_id`) REFERENCES `developpeurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
