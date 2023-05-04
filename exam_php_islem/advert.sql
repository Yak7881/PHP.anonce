-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 03 mai 2023 à 15:30
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_islem`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `desciption` text NOT NULL,
  `postal_code` int NOT NULL,
  `city` varchar(60) NOT NULL,
  `type` enum('vente','location') NOT NULL,
  `price` int NOT NULL,
  `reservation_message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `desciption`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(1, 'maison rouge', '', 78130, 'Les Mureaux', '', 150, ''),
(2, 'maison verte', 'propre', 75004, 'PARIS 04', '', 150, ''),
(3, 'maison rouge', 'sale', 7855, 'toulouse', '', 500, ''),
(4, 'maison verte', 'oui', 78130, 'Les Mureaux', '', 500, ''),
(5, 'maison rouge', 'bof', 75004, 'PARIS 04', '', 900, ''),
(6, 'maison grise', 'bof', 78130, 'Les Mureaux', '', 800, ''),
(7, 'maison grise', 'bof', 78130, 'Les Mureaux', '', 800, ''),
(8, 'maison verte', 'bof', 75004, 'PARIS 04', '', 500, ''),
(9, 'maison verte', 'bof', 78130, 'Les Mureaux', '', 0, ''),
(10, 'maison verte', 'bof', 78130, 'Les Mureaux', '', 900, ''),
(11, 'maison grise', 'bof', 75004, 'PARIS 04', '', 150, ''),
(12, 'maison grande', 'spacieuse', 78130, 'Les Mureaux', '', 78900, ''),
(13, 'maison verte', 'bof', 78130, 'Les Mureaux', '', 800, ''),
(14, 'maison rouge', 'oui', 75004, 'PARIS 04', '', 900, ''),
(15, 'maison rouge', 'oui', 75004, 'PARIS 04', '', 900, ''),
(16, 'maison grande', 'spacieuse', 75004, 'PARIS 04', '', 800, ''),
(17, 'maison grande', 'spacieuse', 75004, 'PARIS 04', '', 800, ''),
(18, 'maison grande', 'spacieuse', 75004, 'PARIS 04', '', 800, ''),
(19, 'maison grande', 'spacieuse', 75004, 'PARIS 04', '', 800, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
