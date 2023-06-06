-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 juin 2023 à 01:58
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chambre`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `ID` int(11) NOT NULL,
  `NOM` char(50) DEFAULT NULL,
  `PRENOM` char(50) DEFAULT NULL,
  `EMAIL` char(50) DEFAULT NULL,
  `TELEPHONE` int(11) DEFAULT NULL,
  `Motdepass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `TELEPHONE`, `Motdepass`) VALUES
(33389, 'Suarez', 'Samba', 'samba.suarez@gmail.com', 780976216, ''),
(98765, 'Sarr', 'Dethie', 'dethiesarr@gmail.com', 763458709, ''),
(123456, 'Mboup', 'Mouhamadane', 'muhamadanemboup@gmail.com', 779808976, ''),
(324908, 'Ngom', 'Bassirou', 'bassirou.ngom@gmail.com', 709879087, ''),
(678098, 'Camara', 'Fode', 'fodecamara@gmail.com', 778090623, '');

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `ID` int(11) NOT NULL,
  `NOM` char(50) DEFAULT NULL,
  `COULEUR` char(50) DEFAULT NULL,
  `DESCRIPTION` char(50) DEFAULT NULL,
  `POSITION` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`ID`, `NOM`, `COULEUR`, `DESCRIPTION`, `POSITION`) VALUES
(6789, 'Pavillon A', 'Blanc', 'Ancien', 2),
(30303, 'Pavillon C', 'Gris', 'A reffectionner', 12),
(120462, 'Pavillon Geni', 'Marron', 'Bon état', 9),
(310369, 'Pavillon jefe', 'Noir', 'Tres bon etat', 7),
(7689044, 'Pavillon B', 'Rouge', 'En bon etat', 4);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `ID` int(11) NOT NULL,
  `BAT_ID` int(11) NOT NULL,
  `POSITION` int(11) DEFAULT NULL,
  `NOM` char(50) DEFAULT NULL,
  `DESCRIPTION` char(50) DEFAULT NULL,
  `COULEUR` char(50) DEFAULT NULL,
  `Motdepass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`ID`, `BAT_ID`, `POSITION`, `NOM`, `DESCRIPTION`, `COULEUR`, `Motdepass`) VALUES
(70388, 120462, 16, 'Bigross room', 'Nouveau', 'Blanc', ''),
(150197, 7689044, 4, 'Bens\'room', 'à refectionner', 'Beige', ''),
(270394, 30303, 8, 'Manu\'s room', 'Nouveau', 'Bleu', ''),
(487908, 6789, 12, 'Beldas\'room', 'pour 3 personnes', 'blanc', ''),
(567098, 310369, 6, 'geni\'sromm', 'Fraichement reffectionner', 'Rose', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` int(11) NOT NULL,
  `PRENOM` char(50) DEFAULT NULL,
  `NOM` char(50) DEFAULT NULL,
  `TELEPHONE` int(11) DEFAULT NULL,
  `EMAIL` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `PRENOM`, `NOM`, `TELEPHONE`, `EMAIL`) VALUES
(219608, 'Rokhaya Cathy', 'Diop', 775917538, 'cathybae@gmail.com'),
(219635, 'Mareme Geneviève', 'Ndiaye', 781138071, 'genindaye15@gmail.com'),
(219786, 'Ben Cheikh', 'Senghor', 764903986, 'bensenghor@gmail.com'),
(219849, 'Tadabel', 'Cissokho', 780179594, 'beldacissokho@gmail.com'),
(219994, 'Mouhamadou Rassoul', 'Sow', 763994276, 'sowrassoul20042@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `occuper`
--

CREATE TABLE `occuper` (
  `ETU_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `occuper`
--

INSERT INTO `occuper` (`ETU_ID`, `ID`) VALUES
(219608, 270394),
(219635, 567098),
(219786, 150197),
(219849, 487908),
(219994, 70388);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_SE_TROUVER` (`BAT_ID`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `occuper`
--
ALTER TABLE `occuper`
  ADD PRIMARY KEY (`ETU_ID`,`ID`),
  ADD KEY `FK_OCCUPER2` (`ID`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `FK_SE_TROUVER` FOREIGN KEY (`BAT_ID`) REFERENCES `batiment` (`ID`);

--
-- Contraintes pour la table `occuper`
--
ALTER TABLE `occuper`
  ADD CONSTRAINT `FK_OCCUPER` FOREIGN KEY (`ETU_ID`) REFERENCES `etudiant` (`ID`),
  ADD CONSTRAINT `FK_OCCUPER2` FOREIGN KEY (`ID`) REFERENCES `chambre` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
