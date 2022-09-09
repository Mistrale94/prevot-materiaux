-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 09 sep. 2022 à 06:47
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `prevot`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

DROP TABLE IF EXISTS `actuality`;
CREATE TABLE IF NOT EXISTS `actuality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actuality`
--

INSERT INTO `actuality` (`id`, `file`, `title`, `description`, `date`) VALUES
(7, 'pic-1662622292.jpg', 'C\'est la rentrée !', '-> Toutes nos équipes vous attendent pour cette nouvelle rentrée !', '2022-08-31'),
(8, 'pic-1662622404.jpg', 'Les horaires reprennent !', 'Reprise des horaires habituels à partir de Lundi 29 août', '2022-08-24'),
(9, 'pic-1662622484.jpg', 'Nouveauté chez Prevot Matériaux : DURAL GmbH', 'Venez découvrir la large gamme de profilés de carrelage Dural dans nos agences de La Courneuve, Montreuil et Villevaudé !', '2022-08-22');

-- --------------------------------------------------------

--
-- Structure de la table `construction`
--

DROP TABLE IF EXISTS `construction`;
CREATE TABLE IF NOT EXISTS `construction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `construction`
--

INSERT INTO `construction` (`id`, `file`, `title`, `description`, `date`) VALUES
(6, 'pic-1662552155.jpg', 'Livraison de brique.', 'Livraison de brique chez un client', '2022-04-07'),
(7, 'pic-1662552296.jpg', 'Toiture', 'Pose d\'une nouvelle toiture par l\'un de nos artisan.', '2022-07-17'),
(8, 'pic-1662552494.jpg', 'Construction d\'un immeuble', 'Construction d\'un nouvel immeuble à côté de notre dépôt de Montreuil.', '2022-07-05');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civ` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `depot` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `request` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Quentin', 'c8de4a331b4648710b8a2a8502149cd9b2cb28c3b1a01b061d9108fc819751dd6e8965b09d84290b7f02776db8c23b903b933271ade47ae8e894b8d47ac903f6'),
(2, 'Françoise', '0d3e76f236708b0c6b7556bc7225ccc3594b1cb8cdc7358f24b2df8072f48eab7a7a0d54163d914e7bc7113ae2f17008191c5d21b307c919b0a3db8c6f568d57'),
(3, 'Valentin', '1951e94c4d143b8f66afdfcc5558627b51fd4a4e3976dde649076ff673b28490e1df0c58d46e11e6669f8ce4f4f493f9f665911a3300a358f80e395b4673fb07'),
(4, 'Chiara', '2fdcb45168d86ce4344f501e8e3bce4a91e58d119099bfafba1b0a2656ebd046f1d726973fbdd7ea27d4f2c4f5acef7228c2c291958e1cad70fa14d1923b8423');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
