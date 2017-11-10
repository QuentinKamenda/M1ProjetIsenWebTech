-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 10 nov. 2017 à 13:29
-- Version du serveur :  5.7.10-log
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `teeshirt`
--

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

DROP TABLE IF EXISTS `recherche`;
CREATE TABLE IF NOT EXISTS `recherche` (
  `id` int(11) NOT NULL,
  `Photo` text NOT NULL,
  `Lien` text NOT NULL,
  `Prix` float NOT NULL,
  `Couleur` varchar(50) NOT NULL,
  `Taille` varchar(3) NOT NULL,
  `Quantite` int(4) NOT NULL,
  `Description` text NOT NULL,
  `Matiere` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recherche`
--

INSERT INTO `recherche` (`id`, `Photo`, `Lien`, `Prix`, `Couleur`, `Taille`, `Quantite`, `Description`, `Matiere`) VALUES
(1, 'T-shirt noir\r\nRocker', '..\\img\\Tshirt\\image0.jpeg', 14.9, 'Noir & blanc ', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(2, 'T-shirt bleu\r\nSimple', '..\\img\\Tshirt\\image1.jpeg', 15.9, 'Bleu/logo blanc', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(3, 'Adidas Blanc', '..\\img\\Tshirt\\image2.jpeg', 14.9, 'Noir & blanc', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(4, 'Batman', '..\\img\\Tshirt\\image3.jpeg', 15.9, 'Noir/logo jaune', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(5, 'Vert avec petit logo sympathique', '..\\img\\Tshirt\\image4.jpeg', 15.9, 'Vert & blanc', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(6, 'Sombre avec un petit dino', '..\\img\\Tshirt\\image5.jpeg', 15.9, 'Noir & blanc', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(7, 'Pikachu', '..\\img\\Tshirt\\image6.jpeg', 14.9, 'Jaune ', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(8, 'Dark-Vador', '..\\img\\Tshirt\\image7.jpeg', 15.9, 'Noir', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(9, 'Serpent', '..\\img\\Tshirt\\image8.jpeg', 14.9, 'Noir', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(10, 'Angry-Bird bleu', '..\\img\\Tshirt\\image9.jpeg', 15.9, 'Bleu', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan '),
(11, 'L\'abominable homme des neiges ??', '..\\img\\Tshirt\\image10.jpeg', 14.9, 'Gris & noir', '', 100, 'Ceci est une description qui doit donner un nombre de détails assez important sur l\'article permettant ainsi aux clients d\'avoir le maximum d\'information sur son futur achat.', '80% Cotton 15% Polyester 5% Elastan ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
