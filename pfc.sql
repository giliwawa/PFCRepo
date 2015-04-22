-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 10:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `achat`
--

CREATE TABLE IF NOT EXISTS `achat` (
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `quantité` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `favoris`
--

CREATE TABLE IF NOT EXISTS `favoris` (
  `id_produit` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE IF NOT EXISTS `preference` (
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantité` int(11) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom` int(30) NOT NULL,
  `sexe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CIN` int(8) NOT NULL,
  `num_tel` int(8) NOT NULL,
  `nbr_point` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `prenom`, `nom`, `sexe`, `date_naissance`, `adresse`, `CIN`, `num_tel`, `nbr_point`, `image`, `username`, `password`) VALUES
(1, 'saif', 0, 'hhhh', '0000-00-00', 'adndzand', 0, 0, 0, '', 'saif', 'saif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
