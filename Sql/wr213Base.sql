-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 10 mars 2024 à 21:41
-- Version du serveur : 10.3.39-MariaDB-0+deb10u2
-- Version de PHP : 8.3.2-1+0~20240120.16+debian10~1.gbpb43448

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wr213Base`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

CREATE TABLE `acheter` (
  `acheter_code` int(11) NOT NULL,
  `jeu_code_` int(11) NOT NULL,
  `client_code_` int(11) NOT NULL,
  `acheter_date` date NOT NULL,
  `acheter_qte` int(11) DEFAULT NULL,
  `acheter_prix_unit` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `acheter`
--

INSERT INTO `acheter` (`acheter_code`, `jeu_code_`, `client_code_`, `acheter_date`, `acheter_qte`, `acheter_prix_unit`) VALUES
(1, 1, 12, '2020-12-16', 2, 20.99),
(2, 2, 10, '2021-02-15', 1, 33),
(3, 4, 10, '2021-02-15', 1, 60),
(4, 4, 12, '2021-02-09', 3, 60),
(5, 11, 12, '2020-12-16', 1, 29.5),
(6, 12, 12, '2021-02-02', 2, 45.5),
(7, 13, 12, '2021-02-09', 2, 39.9);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `client_code` int(11) NOT NULL,
  `client_genre` char(1) DEFAULT NULL,
  `client_prenom` varchar(100) DEFAULT NULL,
  `client_nom` varchar(100) DEFAULT NULL,
  `client_adr` varchar(200) DEFAULT NULL,
  `client_cp` varchar(20) DEFAULT NULL,
  `client_ville` varchar(100) DEFAULT NULL,
  `client_pays` varchar(60) DEFAULT NULL,
  `client_tel` varchar(30) DEFAULT NULL,
  `client_date_naiss` date DEFAULT NULL,
  `client_email` varchar(100) DEFAULT NULL,
  `client_mdp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`client_code`, `client_genre`, `client_prenom`, `client_nom`, `client_adr`, `client_cp`, `client_ville`, `client_pays`, `client_tel`, `client_date_naiss`, `client_email`, `client_mdp`) VALUES
(10, 'F', 'Anne', 'Onime', '111 rue des coquelicots', '75001', 'Paris', 'France', '07-07-07-07-07', '2003-04-24', 'anne@anonyme.fr', '$2y$10$va2uwGYjIXWlerHJ9u2Udem1ObbG921PBgwzyzLcmLnpWIvlNhd6O'),
(12, 'M', 'cool', 'Prof', '9 rue de Québec', '10000', 'Troyes', 'France', '06 06 06 06 06', '1972-10-12', 'prof@univ-reims.fr', '$2y$10$6aN/ha8YpU5I4v98i9HdKeMVCquo89PiyL7MPBMT2w2pg60hwpKbm');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `jeu_code` int(11) NOT NULL,
  `jeu_nom` varchar(100) DEFAULT NULL,
  `jeu_editeur` varchar(100) DEFAULT NULL,
  `jeu_duree_partie` int(11) DEFAULT NULL,
  `jeu_nb_joueurs_mini` int(11) DEFAULT NULL,
  `jeu_nb_joueurs_maxi` int(11) DEFAULT NULL,
  `jeu_photo1` varchar(100) DEFAULT NULL,
  `jeu_photo2` varchar(100) DEFAULT NULL,
  `jeu_photo3` varchar(100) DEFAULT NULL,
  `jeu_prix_unit` float DEFAULT NULL,
  `jeu_qte_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`jeu_code`, `jeu_nom`, `jeu_editeur`, `jeu_duree_partie`, `jeu_nb_joueurs_mini`, `jeu_nb_joueurs_maxi`, `jeu_photo1`, `jeu_photo2`, `jeu_photo3`, `jeu_prix_unit`, `jeu_qte_stock`) VALUES
(1, 'Kingdomino', 'Blue orange', 30, 2, 4, 'img/jeux/kingdomino1.jpg', 'img/jeux/kingdomino2.jpg', 'img/jeux/kingdomino3.jpg', 20.99, 12),
(2, 'Cacao', 'Z-man games', 45, 2, 4, 'img/jeux/cacao1.jpg', 'img/jeux/cacao2.jpg', 'img/jeux/cacao3.jpg', 33, 17),
(4, 'Wingspan', 'Matagot', 75, 1, 5, 'img/jeux/wingspan1.jpg', 'img/jeux/wingspan2.jpg', 'img/jeux/wingspan3.jpg', 60, 8),
(11, 'Chasseurs de légendes', 'Gigamic', 45, 2, 5, 'img/jeux/chasseurs1.jpg', 'img/jeux/chasseurs2.jpg', 'img/jeux/chasseurs3.jpg', 29.5, 7),
(12, 'Carcassonne', 'Filosofia', 45, 2, 5, 'img/jeux/carcassonne1.jpg', 'img/jeux/carcassonne2.jpg', 'img/jeux/carcassonne3.jpg', 45.5, 21),
(13, 'Azul', 'Next move', 45, 2, 4, 'img/jeux/azul1.jpg', 'img/jeux/azul2.jpg', 'img/jeux/azul3.jpg', 39.9, 31);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acheter`
--
ALTER TABLE `acheter`
  ADD PRIMARY KEY (`acheter_code`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_code`);

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`jeu_code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `jeu_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
