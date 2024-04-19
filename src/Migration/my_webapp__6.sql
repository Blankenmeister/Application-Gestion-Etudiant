-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 avr. 2024 à 09:29
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_webapp__6`
--

-- --------------------------------------------------------

--
-- Structure de la table `gest_assiduite_inter`
--

DROP TABLE IF EXISTS `gest_assiduite_inter`;
CREATE TABLE IF NOT EXISTS `gest_assiduite_inter` (
  `id_utilisateur` int NOT NULL,
  `id_cours` int NOT NULL,
  `absence` tinyint(1) DEFAULT NULL,
  `retard` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_cours`),
  KEY `id_cours` (`id_cours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gest_cours`
--

DROP TABLE IF EXISTS `gest_cours`;
CREATE TABLE IF NOT EXISTS `gest_cours` (
  `id_cours` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code` int NOT NULL,
  `_date` date NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `id_promotion` int DEFAULT NULL,
  PRIMARY KEY (`id_cours`),
  KEY `id_promotion` (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gest_promotion`
--

DROP TABLE IF EXISTS `gest_promotion`;
CREATE TABLE IF NOT EXISTS `gest_promotion` (
  `id_promotion` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `places_dispo` int NOT NULL,
  PRIMARY KEY (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gest_role`
--

DROP TABLE IF EXISTS `gest_role`;
CREATE TABLE IF NOT EXISTS `gest_role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gest_role`
--

INSERT INTO `gest_role` (`id_role`, `nom`) VALUES
(1, 'formateur'),
(2, 'etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `gest_utilisateur`
--

DROP TABLE IF EXISTS `gest_utilisateur`;
CREATE TABLE IF NOT EXISTS `gest_utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `compte_active` tinyint(1) NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `mail` (`mail`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gest_utilisateur`
--

INSERT INTO `gest_utilisateur` (`id_utilisateur`, `nom`, `prenom`, `mail`, `mot_de_passe`, `compte_active`, `id_role`) VALUES
(3, 'Blanken', 'Sonia', 'sonia.blanken@gmail.com', '$2y$10$GAMrSPBG1VHUGPu.qLXS6Oj.9xTcfdPbH9lLHKpCYiqlEPJyFM/ny', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `gest_utilisateur_promo_inter`
--

DROP TABLE IF EXISTS `gest_utilisateur_promo_inter`;
CREATE TABLE IF NOT EXISTS `gest_utilisateur_promo_inter` (
  `id_utilisateur` int NOT NULL,
  `id_promotion` int NOT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_promotion`),
  KEY `id_promotion` (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
