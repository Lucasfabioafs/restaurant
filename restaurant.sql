-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 04 Février 2022 à 08:25
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `numClient` int(6) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `numTel` varchar(10) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `ville` text NOT NULL,
  `rue` varchar(50) NOT NULL,
  `cp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`numClient`, `nom`, `prenom`, `numTel`, `pseudo`, `mdp`, `ville`, `rue`, `cp`) VALUES
(1, ' PIHOIJHO', 'jkjk', '', '', '$2y$10$YqCOug8lWk.BedT.WxtE2Oj7x6U2QCysf6azrhVDQM/Eu1RRuHA62', '', 'jk', ''),
(2, 'MIUGIUGH', '', '', '', '', '', '', ''),
(4, '  Afonso', 'Lucas', '0675338860', 'admin', '$2y$10$Q8hIhqf2A3viNBuFGHwrkunpXztxAwz060jGNzIVWl9O4sR2yQrcO', 'Mitry-Mory', 'BERRY', '77290'),
(5, 'zjakjkz', 'jkzkjzak', 'kjzkjakz', 'jkkzjakzj', '$2y$10$Hut1KVBdDjD.mTWueWulGuZTKnf6ScY37C1A.l1dHC/g24YYd/5wO', 'jkzajk', 'kjazkj', '11'),
(6, '222', '22', '12324', '1234', '$2y$10$nqs0E6eHbLqto0fCfHU1s.CDLb/JdjGioktxG9ZPo6I7ol2EQ7P5.', '12', '12', '21'),
(7, 'poerrtor', 'azer', '', 'azer', '$2y$10$rWSpSQxIh19MI8xBxCBEmuzrGht5HV01tgriSW5CVHw32YMEuWTtK', 'azer', 'azer', 'azersdkoesz'),
(8, 'azer', 'azer', 'azer', 'azerTYY', '$2y$10$gha8bqnb4GvunifdD99AEuJ81bLa1/OsOJZgSF5SKSREcsI93p1T2', 'azer', 'azer', '11'),
(9, '', '', '', 'root', '$2y$10$VdSWVoSrM1egKXPDUNTt.O.630Ij4OsBnhKuUKBDSY3le4ORFVp5i', '', '', ''),
(10, 'AZERTYU', 'AZERTY', 'AZERT', 'AZERT', '$2y$10$BaVgKyYJy3khtA51pz5HWuB.eSmpTshFs8jENDfZ/2/6W3KnsY/wO', 'AZZE', 'AZE', 'Z2'),
(11, 'eden', 'gomez', 'azzerrr', 'eden', '$2y$10$NZ2kk.dlINUE2RPybqTuZ.Tydlb2mOpzTiucNu8h9yAXOLxXdEwdG', 'azrr', 'aeee', '66'),
(12, 'lucas', 'lucas', 'aze', 'benji', '$2y$10$hD8M7aKAjNWO5LxxmuLGFemjDZbzdspOTEHbzDqIQd8xW2M.Ux.Ly', 'qdsz', 'ds', 'sqd""""'),
(13, 'lafeve', 'de merde', '098765432', 'lucul', '$2y$10$bVPEpdKDQeTN.m6rNxNYX.haCxi7ixKOYcGF3roazWmZ8IDfYymF.', 'QSDFG', '12', '44556'),
(14, '       portugal', 'OEPZZPEOZP', '44444444', 'portugal', '$2y$10$ar1.KgAAVa5P5A/.UfsBdOGR3um5aW8Ty9Fuyudhk7b6NI.n0j7bu', 'MitryMory', '105 avenue du berry', '77290'),
(15, '', '', '', 'porto', '$2y$10$m9YfrV4qj.fBRjZvdtE2EOEQ./JV5gfwm39TaiyOAdSKsDpHWWGFi', '', '', ''),
(16, '', '', '', 'ppp', '$2y$10$vqSasoD1KuVEe9WxZEB5OOBA9JNdQool2vKrnPv4DeP2MGUJprFxG', '', '', ''),
(17, '', '', '989898', 'eliot', '$2y$10$C1/4GDeEZPyvuOqyP4H76eU5uUUJADjBTcZm7q1A0pHEH2QrEbJv2', 'RORRIR', '', ''),
(18, '', '', '', 'aaa', '$2y$10$04haMiqD6.3eGGdot6lOPeExb.5aeKfIFWEHZMm95weCK.NjRByga', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numCommande` int(10) NOT NULL,
  `date` date NOT NULL,
  `numClient` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `idtable`
--

CREATE TABLE `idtable` (
  `numTable` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

CREATE TABLE `lignecommande` (
  `numLigne` int(11) NOT NULL,
  `quantite` int(3) NOT NULL,
  `numCommande` int(6) NOT NULL,
  `numProduit` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `numProduit` int(3) NOT NULL,
  `nomProduit` varchar(50) NOT NULL,
  `numType` int(2) NOT NULL,
  `descriptif` varchar(100) NOT NULL,
  `prix` varchar(6) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`numProduit`, `nomProduit`, `numType`, `descriptif`, `prix`, `image`) VALUES
(50, 'Test', 2, 'TEST', 'Test', ''),
(51, 'Plateau fromage', 1, 'Assortissement de fromages pour 4 personnes', '25', 'fromage.jfif'),
(53, 'Hamburger bacon', 1, 'Hamburger bbq bacon', '14', 'hamburger.jpg'),
(54, 'Pizza di buffala', 1, 'pizza', '15', 'pizza.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `numReservation` int(11) NOT NULL,
  `nomReservation` text NOT NULL,
  `heure` time NOT NULL,
  `nbPersonne` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`numReservation`, `nomReservation`, `heure`, `nbPersonne`) VALUES
(1, 'adono', '00:00:11', 12),
(2, 'adono', '00:00:11', 12),
(3, 'AAAZZ', '18:00:00', 12),
(4, 'AZEE', '19:00:00', 11),
(5, 'tttttt', '12:00:00', 1),
(6, 'tony', '12:30:00', 11),
(7, 'LUCAS', '12:22:00', 2),
(8, 'PPPP', '12:22:00', 2),
(9, 'PPOZPZO', '13:33:00', 2),
(10, 'PPOZPZO', '13:33:00', 2),
(11, 'azertyu', '12:00:00', 2),
(12, 'AZE', '12:00:00', 2),
(13, 'BEN', '19:00:00', 1),
(14, 'BEBE', '19:00:00', 1),
(15, 'test fin', '14:00:00', 3);

-- --------------------------------------------------------

--
-- Structure de la table `typeproduit`
--

CREATE TABLE `typeproduit` (
  `numType` int(1) NOT NULL,
  `libelle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typeproduit`
--

INSERT INTO `typeproduit` (`numType`, `libelle`) VALUES
(1, 'nourriture'),
(2, 'boisson');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`numClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numCommande`),
  ADD KEY `numClient` (`numClient`);

--
-- Index pour la table `idtable`
--
ALTER TABLE `idtable`
  ADD PRIMARY KEY (`numTable`);

--
-- Index pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD PRIMARY KEY (`numLigne`),
  ADD KEY `numCommande` (`numCommande`),
  ADD KEY `numProduit` (`numProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`numProduit`),
  ADD KEY `numType` (`numType`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numReservation`);

--
-- Index pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  ADD PRIMARY KEY (`numType`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `numClient` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `numCommande` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `idtable`
--
ALTER TABLE `idtable`
  MODIFY `numTable` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `numProduit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `numReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`);

--
-- Contraintes pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD CONSTRAINT `lignecommande_ibfk_1` FOREIGN KEY (`numProduit`) REFERENCES `produit` (`numProduit`),
  ADD CONSTRAINT `lignecommande_ibfk_2` FOREIGN KEY (`numCommande`) REFERENCES `commande` (`numCommande`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`numType`) REFERENCES `typeproduit` (`numType`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
