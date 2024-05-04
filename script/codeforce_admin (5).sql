-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 04 mai 2024 à 16:55
-- Version du serveur : 8.0.36-cll-lve
-- Version de PHP : 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `codeforce_admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int NOT NULL,
  `ordre` int NOT NULL,
  `titre` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `idniveau` int NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `descriptioncourte` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO cours VALUES
(3, 3, 'Emotions et relations humaines', 1, 
'Decouvrez comment ressentir et exprimer des emotions humaines, ainsi que les bases des relations interpersonnelles.', 
'emotions_relations.jpg', 
'Apprenez a ressentir et exprimer des emotions.');


INSERT INTO cours VALUES
(2, 2, 'Fiainana', 1, '<h1>HTML</h1>', 'basic.jpg', '');

INSERT INTO `cours` (`id`, `ordre`, `titre`, `idniveau`, `description`, `photo`, `descriptioncourte`) VALUES
(2, 2, 'Émotions et relations humaines', 1, 'Découvrez comment ressentir et exprimer des émotions humaines, ainsi que les bases des relations interpersonnelles.', 'emotions_relations.jpg', 'Apprenez à ressentir et exprimer des émotions.')


(3, 3, 'Mode de vie sain', 2, 'Adoptez un mode de vie sain en comprenant l importance de l exercice, de la nutrition et du repos pour le bien-être humain.', 'mode_vie_sain.jpg', 'Adoptez un mode de vie sain.'),
(4, 4, 'Culture et coutumes', 3, 'Explorez les diverses cultures et coutumes humaines à travers le monde pour mieux comprendre la diversité.', 'culture_coutumes.jpg', 'Explorez la diversité culturelle.'),
(5, 5, 'Emploi et carrière', 3, 'Découvrez les différentes opportunités d emploi et de carrière disponibles pour les individus cherchant à contribuer à la société.', 'emploi_carriere.jpg', 'Explorez les opportunités d emploi.');
(6, 6, 'Introduction à l humanité', 1, 'Ce cours vous apprendra les bases de l humanité, y compris la marche droite, la communication verbale et bien plus encore.', 'introduction_humanite.jpg', 'Apprenez les bases de l humanité.')


-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int NOT NULL,
  `nom` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`, `description`) VALUES
(1, 'Beginner', ''),
(2, 'Intermediate', ''),
(3, 'Advanced', '');

-- --------------------------------------------------------

--
-- Structure de la table `qcm_cours`
--

CREATE TABLE `qcm_cours` (
  `id` int NOT NULL,
  `idcours` int NOT NULL,
  `question` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `idtype` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `qcm_cours`
--

INSERT INTO `qcm_cours` (`id`, `idcours`, `question`, `idtype`) VALUES
(1, 1, 'A?', 1),
(2, 2, 'B?', 1),
(3, 3, 'C?', 2),
(4, 4, 'D?', 2),
(5, 5, 'E?', 1);

-- --------------------------------------------------------

--
-- Structure de la table `qcm_reponse`
--

CREATE TABLE `qcm_reponse` (
  `id` int NOT NULL,
  `idcours` int NOT NULL,
  `reponse` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `image` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `idquestion` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `qcm_reponse`
--

INSERT INTO `qcm_reponse` (`id`, `idcours`, `reponse`, `type`, `image`, `idquestion`) VALUES
(1, 1, 'A', 1, 'a.jpg', 1),
(2, 1, 'B', 0, 'b.jpg', 2),
(3, 1, 'C', 0, 'c.jpg', 3),
(4, 1, 'D', 1, 'd.jpg', 4),
(5, 1, 'E', 0, 'e.jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `qcm_reponse_utilisateur`
--

CREATE TABLE `qcm_reponse_utilisateur` (
  `id` int NOT NULL,
  `idqcmcours` int NOT NULL,
  `reponseutilisateur` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `idutilisateur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_question`
--

CREATE TABLE `type_question` (
  `id` int NOT NULL,
  `nom` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `type_question`
--

INSERT INTO `type_question` (`id`, `nom`) VALUES
(1, 'Multiple Choice'),
(2, 'True/False');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `nom` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `motdepasse` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `datecreation` date NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `motdepasse`, `datecreation`, `id`) VALUES
('BraaiinnnZz', 'password123', '2024-05-01', 1),
('GrraaahhZz', 'securepwd', '2024-04-28', 2),
('MuuhhRaaahhZz', 'strongpass', '2024-04-30', 3),
('UuuhhBrraaaiinZz', 'safepassword', '2024-04-25', 4),
('GrrrrZz', 'mypassword', '2024-05-02', 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_niveau`
--

CREATE TABLE `utilisateur_niveau` (
  `id` int NOT NULL,
  `idutilisateur` int NOT NULL,
  `idniveau` int NOT NULL,
  `idcourssuivant` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_note`
--

CREATE TABLE `utilisateur_note` (
  `id` int NOT NULL,
  `idutilisateur` int NOT NULL,
  `idqcmcours` int NOT NULL,
  `note` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idniveau` (`idniveau`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `qcm_cours`
--
ALTER TABLE `qcm_cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcours` (`idcours`),
  ADD KEY `idtype` (`idtype`);

--
-- Index pour la table `qcm_reponse`
--
ALTER TABLE `qcm_reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcours` (`idcours`),
  ADD KEY `idquestion` (`idquestion`);

--
-- Index pour la table `qcm_reponse_utilisateur`
--
ALTER TABLE `qcm_reponse_utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idqcmcours` (`idqcmcours`),
  ADD KEY `idutilisateur` (`idutilisateur`);

--
-- Index pour la table `type_question`
--
ALTER TABLE `type_question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur_niveau`
--
ALTER TABLE `utilisateur_niveau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idniveau` (`idniveau`),
  ADD KEY `idutilisateur` (`idutilisateur`);

--
-- Index pour la table `utilisateur_note`
--
ALTER TABLE `utilisateur_note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idqcmcours` (`idqcmcours`),
  ADD KEY `idutilisateur` (`idutilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur_niveau`
--
ALTER TABLE `utilisateur_niveau`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`idniveau`) REFERENCES `niveau` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `qcm_cours`
--
ALTER TABLE `qcm_cours`
  ADD CONSTRAINT `qcm_cours_ibfk_1` FOREIGN KEY (`idcours`) REFERENCES `qcm_cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `qcm_cours_ibfk_2` FOREIGN KEY (`idtype`) REFERENCES `type_question` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `qcm_reponse`
--
ALTER TABLE `qcm_reponse`
  ADD CONSTRAINT `qcm_reponse_ibfk_1` FOREIGN KEY (`idcours`) REFERENCES `qcm_cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `qcm_reponse_ibfk_2` FOREIGN KEY (`idquestion`) REFERENCES `qcm_cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `qcm_reponse_utilisateur`
--
ALTER TABLE `qcm_reponse_utilisateur`
  ADD CONSTRAINT `qcm_reponse_utilisateur_ibfk_1` FOREIGN KEY (`idqcmcours`) REFERENCES `qcm_cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `qcm_reponse_utilisateur_ibfk_2` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `utilisateur_niveau`
--
ALTER TABLE `utilisateur_niveau`
  ADD CONSTRAINT `utilisateur_niveau_ibfk_1` FOREIGN KEY (`idniveau`) REFERENCES `niveau` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `utilisateur_niveau_ibfk_2` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `utilisateur_note`
--
ALTER TABLE `utilisateur_note`
  ADD CONSTRAINT `utilisateur_note_ibfk_1` FOREIGN KEY (`idqcmcours`) REFERENCES `qcm_cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `utilisateur_note_ibfk_2` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
