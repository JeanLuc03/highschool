-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 03 avr. 2018 à 19:20
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `highschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `access`
--

CREATE TABLE `access` (
  `idR` int(4) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `access`
--

INSERT INTO `access` (`idR`, `role`) VALUES
(1, 'administrateur'),
(4, 'etudiant'),
(2, 'professeur'),
(3, 'redacteur');

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `idA` int(4) NOT NULL,
  `idU` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `idC` int(4) NOT NULL,
  `titreGeneral` varchar(500) NOT NULL,
  `titreChapitre` varchar(500) NOT NULL,
  `sousChapitre` varchar(500) NOT NULL,
  `corpsTexte` varchar(3500) NOT NULL,
  `piedTexte` varchar(500) NOT NULL,
  `couleur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contenu`
--

INSERT INTO `contenu` (`idC`, `titreGeneral`, `titreChapitre`, `sousChapitre`, `corpsTexte`, `piedTexte`, `couleur`) VALUES
(17, 'Dot par la pratique', 'Dot par la pratique', 'introduction', ' texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte', ' texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte texte', '#ff0000'),
(18, 'test', 'test', 'test', ' testetstetstetstetstetstetstetstetsttestetttt', ' testetstetstetstetstetstetstetstetsttestetttt', '#0000a0'),
(19, 'Utilisateurfjqshdfq', 'Utilisateurfjqshdfq', ';jqsdfh;jqsfdhqsdj;fhqsdf', ' ;jsdfh;sjdfhqsd;jfhqsdjf;', ' ;jsdfh;sjdfhqsd;jfhqsdjf;', '#ff0000'),
(20, 'sfdjmsoqidfjqmlsdifjqsdfh', 'sfdjmsoqidfjqmlsdifjqsdfh', 'slmdfkqsmdokfqsmdfokqsmdkof', ' qsdjklf,QOKFmodfksmodfkqsdmofksdmofkqsdfomkqsdfoqÃ¹ksd\r\nsdflqskodfjqmkodsfjqmsdlokfqsdf', ' qsdjklf,QOKFmodfksmodfkqsdmofksdmofkqsdfomkqsdfoqÃ¹ksd\r\nsdflqskodfjqmkodsfjqmsdlokfqsdf', '#000000'),
(21, 'kmlfjmldsjfqsdf', 'kmlfjmldsjfqsdf', 's:dfkljsqdlifjqsodf', ' sdfmijqsdmiofjqsdiofjqsdoifqf', ' sdfmijqsdmiofjqsdiofjqsdoifqf', '#ff0000'),
(22, 'kuhrf', 'kuhrf', 'kehzfdj', ' keuhufjkevjkck  jkkjrenfkjekgfe ukhieohiuf', ' keuhufjkevjkck  jkkjrenfkjekgfe ukhieohiuf', '#ff0000'),
(23, 'Colonisation', 'Colonisation', 'importance', 'Hum', 'Hum', '#ff0000'),
(24, 'La colonisation du SÃ©nÃ©gal', 'La colonisation du SÃ©nÃ©gal', 'Importance des vaillants tirailleurs sÃ©nÃ©galais pour les baptous', 'Hum... to be continue', 'Hum... to be continue', '#ff0000');

-- --------------------------------------------------------

--
-- Structure de la table `linkaccess`
--

CREATE TABLE `linkaccess` (
  `idU` int(4) NOT NULL,
  `droit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `linkaccess`
--

INSERT INTO `linkaccess` (`idU`, `droit`) VALUES
(11, 'redacteur'),
(13, 'redacteur'),
(15, 'administrateur'),
(16, 'administrateur'),
(17, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `idM` int(4) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`idM`, `nom`) VALUES
(5, 'Mathematique'),
(6, 'Litterature '),
(7, 'Informatique'),
(8, 'francais');

-- --------------------------------------------------------

--
-- Structure de la table `redaction`
--

CREATE TABLE `redaction` (
  `idR` int(4) NOT NULL,
  `dateRedaction` datetime NOT NULL,
  `type` varchar(20) NOT NULL,
  `idC` int(4) NOT NULL,
  `idU` int(4) NOT NULL,
  `idM` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `redaction`
--

INSERT INTO `redaction` (`idR`, `dateRedaction`, `type`, `idC`, `idU`, `idM`) VALUES
(12, '2018-04-15 09:11:23', '', 17, 15, 7),
(13, '2018-04-03 03:25:01', 'TEXTE', 17, 16, 8),
(14, '2018-04-03 03:31:07', 'TEXTE', 18, 16, 6),
(15, '2018-04-03 03:35:06', 'TEXTE', 19, 16, 8),
(16, '2018-04-03 03:36:33', 'TEXTE', 20, 16, 8),
(17, '2018-04-03 03:37:31', 'TEXTE', 21, 16, 5),
(18, '2018-04-03 04:09:25', 'TEXTE', 24, 17, 6);

-- --------------------------------------------------------

--
-- Structure de la table `sessionuser`
--

CREATE TABLE `sessionuser` (
  `idSession` int(5) NOT NULL,
  `sessionPageName` varchar(45) NOT NULL,
  `sessionDateTime` datetime NOT NULL,
  `sessionId` varchar(45) NOT NULL,
  `idU` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sessionuser`
--

INSERT INTO `sessionuser` (`idSession`, `sessionPageName`, `sessionDateTime`, `sessionId`, `idU`) VALUES
(199, 'index', '2018-04-03 11:24:34', 'uk0hk9k84omeo8ospj4ml33vmp', 13),
(200, 'liste des utilisateurs', '2018-04-03 11:25:12', 'uk0hk9k84omeo8ospj4ml33vmp', 13),
(201, 'liste des utilisateurs', '2018-04-03 11:25:19', 'uk0hk9k84omeo8ospj4ml33vmp', 13),
(202, 'index', '2018-04-03 11:25:26', 'uk0hk9k84omeo8ospj4ml33vmp', 13),
(203, 'index', '2018-04-03 01:05:45', 'lus8140vr90romjlahfoaumm7t', 13),
(204, 'Creation contenu', '2018-04-03 01:05:49', 'lus8140vr90romjlahfoaumm7t', 13),
(205, 'liste des Contenus', '2018-04-03 01:05:51', 'lus8140vr90romjlahfoaumm7t', 13),
(206, 'liste des utilisateurs', '2018-04-03 01:05:53', 'lus8140vr90romjlahfoaumm7t', 13),
(207, 'Creation contenu', '2018-04-03 01:06:06', 'lus8140vr90romjlahfoaumm7t', 13),
(208, 'index', '2018-04-03 02:20:23', 'j49asjj7g8mgv4q8jpa13i9g66', 13),
(209, 'liste des utilisateurs', '2018-04-03 02:20:27', 'j49asjj7g8mgv4q8jpa13i9g66', 13),
(210, 'liste des utilisateurs', '2018-04-03 02:23:43', 'j49asjj7g8mgv4q8jpa13i9g66', 13),
(211, 'index', '2018-04-03 02:25:02', 'j49asjj7g8mgv4q8jpa13i9g66', 13),
(212, 'index', '2018-04-03 02:31:36', 'j49asjj7g8mgv4q8jpa13i9g66', 13),
(213, 'liste des utilisateurs', '2018-04-03 02:46:24', 'j49asjj7g8mgv4q8jpa13i9g66', 13),
(214, 'liste des utilisateurs', '2018-04-03 02:46:30', 'j49asjj7g8mgv4q8jpa13i9g66', 13),
(215, 'index', '2018-04-03 02:46:59', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(216, 'Creation contenu', '2018-04-03 02:47:07', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(217, 'liste des Contenus', '2018-04-03 02:47:09', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(218, 'liste des utilisateurs', '2018-04-03 02:47:09', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(219, 'Creation contenu', '2018-04-03 02:47:11', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(220, 'liste des Contenus', '2018-04-03 02:47:12', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(221, 'liste des utilisateurs', '2018-04-03 02:47:13', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(222, 'index', '2018-04-03 02:53:34', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(223, 'index', '2018-04-03 02:56:41', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(224, 'index', '2018-04-03 02:58:56', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(225, 'index', '2018-04-03 02:59:15', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(226, 'index', '2018-04-03 02:59:30', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(227, 'index', '2018-04-03 03:03:16', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(228, 'index', '2018-04-03 03:03:54', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(229, 'index', '2018-04-03 03:05:14', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(230, 'index', '2018-04-03 03:05:36', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(231, 'index', '2018-04-03 03:06:40', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(232, 'index', '2018-04-03 03:07:05', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(233, 'index', '2018-04-03 03:07:27', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(234, 'index', '2018-04-03 03:07:47', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(235, 'index', '2018-04-03 03:08:16', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(236, 'index', '2018-04-03 03:10:21', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(237, 'index', '2018-04-03 03:20:50', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(238, 'index', '2018-04-03 03:21:03', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(239, 'liste des utilisateurs', '2018-04-03 03:21:34', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(240, 'Creation contenu', '2018-04-03 03:21:47', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(241, 'Formulaire de redac', '2018-04-03 03:22:43', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(242, 'Creation contenu', '2018-04-03 03:24:54', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(243, 'Formulaire de redac', '2018-04-03 03:25:01', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(244, 'liste des Contenus', '2018-04-03 03:25:16', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(245, 'Creation contenu', '2018-04-03 03:30:32', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(246, 'Formulaire de redac', '2018-04-03 03:31:07', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(247, 'liste des Contenus', '2018-04-03 03:31:32', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(248, 'Creation contenu', '2018-04-03 03:34:18', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(249, 'Formulaire de redac', '2018-04-03 03:35:06', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(250, 'liste des Contenus', '2018-04-03 03:35:17', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(251, 'Creation contenu', '2018-04-03 03:35:55', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(252, 'Formulaire de redac', '2018-04-03 03:36:33', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(253, 'liste des Contenus', '2018-04-03 03:36:45', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(254, 'Creation contenu', '2018-04-03 03:37:13', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(255, 'Formulaire de redac', '2018-04-03 03:37:31', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(256, 'liste des Contenus', '2018-04-03 03:37:43', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(257, 'liste des utilisateurs', '2018-04-03 03:51:57', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(258, 'liste des utilisateurs', '2018-04-03 03:52:28', 'j49asjj7g8mgv4q8jpa13i9g66', 16),
(259, 'index', '2018-04-03 03:53:10', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(260, 'Creation contenu', '2018-04-03 03:53:29', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(261, 'Formulaire de redac', '2018-04-03 03:59:54', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(262, 'Creation contenu', '2018-04-03 04:01:27', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(263, 'Formulaire de redac', '2018-04-03 04:01:38', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(264, 'Creation contenu', '2018-04-03 04:01:54', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(265, 'Formulaire de redac', '2018-04-03 04:02:21', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(266, 'Formulaire de redac', '2018-04-03 04:02:35', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(267, 'Creation contenu', '2018-04-03 04:02:44', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(268, 'Creation contenu', '2018-04-03 04:02:55', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(269, 'Formulaire de redac', '2018-04-03 04:03:16', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(270, 'Creation contenu', '2018-04-03 04:03:24', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(271, 'index', '2018-04-03 04:03:25', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(272, 'Creation contenu', '2018-04-03 04:03:27', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(273, 'Formulaire de redac', '2018-04-03 04:04:55', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(274, 'Creation contenu', '2018-04-03 04:05:01', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(275, 'Formulaire de redac', '2018-04-03 04:05:16', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(276, 'Creation contenu', '2018-04-03 04:05:22', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(277, 'Formulaire de redac', '2018-04-03 04:05:36', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(278, 'Creation contenu', '2018-04-03 04:05:40', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(279, 'Formulaire de redac', '2018-04-03 04:05:56', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(280, 'Creation contenu', '2018-04-03 04:06:02', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(281, 'Formulaire de redac', '2018-04-03 04:06:14', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(282, 'Creation contenu', '2018-04-03 04:06:18', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(283, 'Formulaire de redac', '2018-04-03 04:06:26', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(284, 'Creation contenu', '2018-04-03 04:06:30', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(285, 'Formulaire de redac', '2018-04-03 04:06:43', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(286, 'Creation contenu', '2018-04-03 04:07:03', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(287, 'Formulaire de redac', '2018-04-03 04:08:49', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(288, 'Creation contenu', '2018-04-03 04:08:57', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(289, 'Formulaire de redac', '2018-04-03 04:09:25', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(290, 'liste des Contenus', '2018-04-03 04:09:55', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(291, 'liste des Contenus', '2018-04-03 04:10:04', 'j49asjj7g8mgv4q8jpa13i9g66', 17),
(292, 'index', '2018-04-03 04:10:07', 'j49asjj7g8mgv4q8jpa13i9g66', 17);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idU` int(4) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `identifiant` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idU`, `nom`, `prenom`, `telephone`, `mail`, `identifiant`, `password`) VALUES
(11, 'ba', 'bira', '0789898989', 'birahimba1@hotmail.com', 'biraRedac', 'biraRedac'),
(13, 'San', 'Math', '0789876767', 'math@gmail.com', 'math', 'math'),
(15, 'Dubois', 'Alberto', '0745676786', 'dubois@gmail.com', 'alberto', 'alberto'),
(16, 'abidonou', 'Jean Luc', '0789898989', 'abi@gmail.com', 'admin', 'admin'),
(17, 'agboka', 'Sloon', '+22891030236', 'agbokasloon@gmail.com', 'Sloon03', 'Sloon16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`idR`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`idA`),
  ADD KEY `idU` (`idU`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`idC`);

--
-- Index pour la table `linkaccess`
--
ALTER TABLE `linkaccess`
  ADD KEY `idU` (`idU`),
  ADD KEY `role` (`droit`),
  ADD KEY `droit` (`droit`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`idM`);

--
-- Index pour la table `redaction`
--
ALTER TABLE `redaction`
  ADD PRIMARY KEY (`idR`),
  ADD KEY `idC` (`idC`),
  ADD KEY `idU` (`idU`),
  ADD KEY `idM` (`idM`);

--
-- Index pour la table `sessionuser`
--
ALTER TABLE `sessionuser`
  ADD PRIMARY KEY (`idSession`),
  ADD KEY `idU` (`idU`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `access`
--
ALTER TABLE `access`
  MODIFY `idR` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `idA` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `idC` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `idM` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `redaction`
--
ALTER TABLE `redaction`
  MODIFY `idR` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `sessionuser`
--
ALTER TABLE `sessionuser`
  MODIFY `idSession` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idU` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `linkaccess`
--
ALTER TABLE `linkaccess`
  ADD CONSTRAINT `linkaccess_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linkaccess_ibfk_2` FOREIGN KEY (`droit`) REFERENCES `access` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `redaction`
--
ALTER TABLE `redaction`
  ADD CONSTRAINT `redaction_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `redaction_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `contenu` (`idC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `redaction_ibfk_3` FOREIGN KEY (`idM`) REFERENCES `modules` (`idM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sessionuser`
--
ALTER TABLE `sessionuser`
  ADD CONSTRAINT `sessionuser_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`idU`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
