-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 oct. 2017 à 15:36
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
  `Taille` varchar(3) NOT NULL,
  `Quantite` int(4) NOT NULL,
  `Description` text NOT NULL,
  `Matiere` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recherche`
--

INSERT INTO `recherche` (`id`, `Photo`, `Lien`, `Prix`, `Taille`, `Quantite`, `Description`, `Matiere`) VALUES
(1, 'T-shirt noir\r\nRocker', '..\\img\\image0.jpeg', 14.9, '', 0, 'xavidoki il doki un peu trop trop trop trop trop trop trop trop trop trop trop trop', '80% Cotton 15% Polyester 5% Elastan '),
(2, 'T-shirt bleu\r\nSimple', '..\\img\\image1.jpeg', 15.9, '', 0, 'Ca doki un peu beacuou ptrop par ici', '80% Cotton 15% Polyester 5% Elastan '),
(3, 'Adidas Blanc', '..\\img\\image2.jpeg', 14.9, '', 0, 'Et meme si xavier doki ca veut dire que la vie est dans la sienne un peu trop de doki', '80% Cotton 15% Polyester 5% Elastan '),
(4, 'Batman', '..\\img\\image3.jpeg', 15.9, '', 0, 'Et meme si xavidoi alors cest un peon de wrcarft 3', '80% Cotton 15% Polyester 5% Elastan '),
(5, 'Vert avec petit logo sympathique', '..\\img\\image4.jpeg', 15.9, '', 0, 'Et xavi et starcraft 2 qui est son meilleur ami au otidien', '80% Cotton 15% Polyester 5% Elastan '),
(6, 'Sombre avec un petit dino', '..\\img\\image5.jpeg', 15.9, '', 0, 'Et meme si Xavi et Jack sparrow ne sont pas amis il el deviendront un jour ', '80% Cotton 15% Polyester 5% Elastan '),
(7, 'Pikachu', '..\\img\\image6.jpeg', 14.9, '', 0, 'alors a ce moment la Elisabeth Swan sera decu de rencontrer ce nouveau chevalier', '80% Cotton 15% Polyester 5% Elastan '),
(8, 'Dark-Vador', '..\\img\\image7.jpeg', 15.9, '', 0, 'ce chevalier qui a l\'habitude de doki encore et encore', '80% Cotton 15% Polyester 5% Elastan '),
(9, 'Serpent', '..\\img\\image8.jpeg', 14.9, '', 0, 'Okzheebfne', '80% Cotton 15% Polyester 5% Elastan '),
(10, 'Angry-Bird bleu', '..\\img\\image9.jpeg', 15.9, '', 0, 'nefrfuierfnhepuifnoe', '80% Cotton 15% Polyester 5% Elastan '),
(11, 'L\'abominable homme des neiges ??', '..\\img\\image10.jpeg', 14.9, '', 0, 'nuefneirebfoeybecei', '80% Cotton 15% Polyester 5% Elastan ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
