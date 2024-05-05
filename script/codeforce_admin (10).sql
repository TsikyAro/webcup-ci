-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 05 mai 2024 à 07:30
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

INSERT INTO `cours` (`id`, `ordre`, `titre`, `idniveau`, `description`, `photo`, `descriptioncourte`) VALUES
(1, 1, 'ALPHABET', 1, '<div style=\"font-family: Arial; display: flex; flex-wrap: wrap; justify-content: center;\">\n      <?php foreach (range(\"A\", \"Z\") as $lettre) {?>\n          <div class=\"card\"\n              style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\n              onclick=\"readAlphabet(\'<?= $lettre?>\', this)\"\n              onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\n              onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\n              <div style=\"font-size: 24px;\"><?= $lettre?></div>\n              <input type=\"hidden\" style=\"display: none;\" value=\"<?= $lettre?>\">\n          </div>\n      <?php }?>\n  </div>\n  <script>\n    function submitForm() {\n        var inputValue = document.getElementById(\"textInput\").value;\n        document.getElementById(\"result\").innerText = \"Vous avez saisi : \" + inputValue;\n        speakText(inputValue);\n    }\n    function speakText(text) {\n        var speech = new SpeechSynthesisUtterance();\n        speech.lang = \"en-US\"; // Définir la langue, si nécessaire\n        speech.text = text;\n        speech.rate = 0.3;\n        window.speechSynthesis.speak(speech);\n    }\n</script>\n<script>\n  function readAlphabet(letter, element) {\n      var speech = new SpeechSynthesisUtterance();\n      speech.lang = \"en-US\"; // Langue française\n      speech.text = letter;\n      speech.rate = 0.3;\n      window.speechSynthesis.speak(speech);\n      element.classList.add(\'clicked\');\n      element.style.backgroundColor = \'#106e01\';\n  }\n</script> ', 'basic.jpg', ''),
(2, 2, 'NUMBER', 1, '<div class=\"fiche-content\">\r\n    <h1>Number</h1>\r\n    <div style=\"font-family: Arial; display: flex; flex-wrap: wrap; justify-content: center;\">\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'one\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">1</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"1\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'two\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">2</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"2\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'three\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">3</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"3\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'four\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">4</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"4\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'five\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">5</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"5\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'six\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">6</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"6\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'seven\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">7</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"7\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'eight\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">8</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"8\">\r\n        </div>\r\n\r\n        <div class=\"card\"\r\n            style=\"width: 100px; height: 100px; border: 1px solid #ccc; margin: 10px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: transform 0.2s ease; background-color: transparent; color: #fff;\"\r\n            onclick=\"readAlphabet(\'nine\', this)\"\r\n            onmouseover=\"this.style.transform=\'scale(1.1)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'#106e01\'; }\"\r\n            onmouseout=\"this.style.transform=\'scale(1.0)\'; if (!this.classList.contains(\'clicked\')) { this.style.backgroundColor=\'transparent\'; }\">\r\n            <div style=\"font-size: 24px;\">9</div>\r\n            <input type=\"hidden\" style=\"display: none;\" value=\"9\">\r\n        </div>\r\n\r\n    </div>\r\n    <script>\r\n        function submitForm() {\r\n            var inputValue = document.getElementById(\"textInput\").value;\r\n            document.getElementById(\"result\").innerText = \"Vous avez saisi : \" + inputValue;\r\n            speakText(inputValue);\r\n        }\r\n\r\n        function speakText(text) {\r\n            var speech = new SpeechSynthesisUtterance();\r\n            speech.lang = \"en-US\"; // Définir la langue, si nécessaire\r\n            speech.text = text;\r\n            speech.rate = 0.3;\r\n            window.speechSynthesis.speak(speech);\r\n\r\n        }\r\n    </script>\r\n    <script>\r\n        function readAlphabet(letter, element) {\r\n            var speech = new SpeechSynthesisUtterance();\r\n            speech.lang = \"en-US\"; // Langue française\r\n            speech.text = letter;\r\n            speech.rate = 0.3;\r\n            window.speechSynthesis.speak(speech);\r\n            element.classList.add(\'clicked\');\r\n            element.style.backgroundColor = \'#106e01\';\r\n        }\r\n    </script>\r\n</div>', 'nombre.jpg', 'Plongez dans le monde ludique de l\'apprentissage des nombres avec notre site interactif dédié à enseigner les chiffres à un zombi curieux.'),
(3, 3, 'COURTESY', 1, '<div class=\"politesse\">\r\n    <div class=\"content-hero p-relative d-flex align-items-center text-center flex-column\">\r\n        <h1 class=\"title mb-30 text-transform-upper dsn-load-animate\">\r\n            COURTESY\r\n        </h1>\r\n        <p class=\"subtitle p-relative line-shap dsn-load-animate\">\r\n            <span class=\"pl-10 pr-10 background-section\">Say hello/Just stop by</span>\r\n        </p>\r\n    </div>\r\n    <br/><br/>\r\n    <div class=\"container\">\r\n        <div class=\"image-response\">\r\n            <div class=\"dsn-posts d-grid grid-lg-3 grid-sm-2 our-blog our-blog-classic our-blog-full-img\">\r\n                <div class=\"blog-item p-relative d-flex align-items-center\" data-swiper-parallax-scale=\"0.85\">\r\n                    <div class=\"box-content p-relative\">\r\n                        <div class=\"box-content-body\">\r\n                            <h4 class=\"title-block mb-20\">\r\n                                <p class=\"effect-ajax\">Say hello</p>\r\n                            </h4>\r\n                            <div class=\"content-img-fiche\">\r\n                                <img class=\"img-fiche\" src=\"<?php echo base_url() ?>assets/clients/assets/img/fiche/salutation.jpg\" alt=\"\" style=\"width:300px;height:300px;object-fit:cover\">\r\n                            </div>\r\n                            <br />\r\n                            <p>It is a sign of respect and courtesy towards others.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"blog-item p-relative d-flex align-items-center h-100 w-100\" data-swiper-parallax-scale=\"0.85\">\r\n                    <div class=\"box-content p-relative\">\r\n                        <div class=\"box-content-body\">\r\n                            <h4 class=\"title-block mb-20\">\r\n                                <p class=\"effect-ajax\">Just stop by</p>\r\n                            </h4>\r\n                            <div class=\"content-img-fiche\">\r\n                                <img class=\"img-fiche\" src=\"<?php echo base_url() ?>assets/clients/assets/img/fiche/saynothing.jpg\" alt=\"\" style=\"width:300px;height:300px;object-fit:cover\">\r\n                            </div>\r\n                            <br />\r\n                            <p>This can make you seem rude or disinterested.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <br/><br/>\r\n\r\n    <div class=\"content-hero p-relative d-flex align-items-center text-center flex-column\">\r\n        <p class=\"subtitle p-relative line-shap dsn-load-animate\">\r\n            <span class=\"pl-10 pr-10 background-section\">Say thank you/Ignore</span>\r\n        </p>\r\n    </div>\r\n\r\n    <br/><br/>\r\n    <div class=\"container\">\r\n        <div class=\"image-response\">\r\n            <div class=\"dsn-posts d-grid grid-lg-3 grid-sm-2 our-blog our-blog-classic our-blog-full-img\">\r\n                <div class=\"blog-item p-relative d-flex align-items-center\" data-swiper-parallax-scale=\"0.85\">\r\n                    <div class=\"box-content p-relative\">\r\n                        <div class=\"box-content-body\">\r\n                            <h4 class=\"title-block mb-20\">\r\n                                <p class=\"effect-ajax\">Say thank you</p>\r\n                            </h4>\r\n                            <div class=\"content-img-fiche\">\r\n                                <img class=\"img-fiche\" src=\"<?php echo base_url() ?>assets/clients/assets/img/fiche/grateful.jpg\" alt=\"\" style=\"width:300px;height:300px;object-fit:cover\">\r\n                            </div>\r\n                            <br />\r\n                            <p>It shows your appreciation for what someone has done for you.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"blog-item p-relative d-flex align-items-center h-100 w-100\" data-swiper-parallax-scale=\"0.85\">\r\n                    <div class=\"box-content p-relative\">\r\n                        <div class=\"box-content-body\">\r\n                            <h4 class=\"title-block mb-20\">\r\n                                <p class=\"effect-ajax\">Ignore</p>\r\n                            </h4>\r\n                            <div class=\"content-img-fiche\">\r\n                                <img class=\"img-fiche\" src=\"<?php echo base_url() ?>assets/clients/assets/img/fiche/ignore.jpg\" alt=\"\" style=\"width:300px;height:300px;object-fit:cover\">\r\n                            </div>\r\n                            <br />\r\n                            <p>Cela peut donner l\'impression que vous prenez les choses pour acquises ou que vous n\'êtes pas reconnaissant.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n    <br/><br/>\r\n    <div class=\"content-hero p-relative d-flex align-items-center text-center flex-column\">\r\n        <p class=\"subtitle p-relative line-shap dsn-load-animate\">\r\n            <span class=\"pl-10 pr-10 background-section\">Ask politely/Ask impatiently</span>\r\n        </p>\r\n    </div>\r\n\r\n    <br/><br/>\r\n    <div class=\"container\">\r\n        <div class=\"image-response\">\r\n            <div class=\"dsn-posts d-grid grid-lg-3 grid-sm-2 our-blog our-blog-classic our-blog-full-img\">\r\n                <div class=\"blog-item p-relative d-flex align-items-center\" data-swiper-parallax-scale=\"0.85\">\r\n                    <div class=\"box-content p-relative\">\r\n                        <div class=\"box-content-body\">\r\n                            <h4 class=\"title-block mb-20\">\r\n                                <p class=\"effect-ajax\">Ask politely</p>\r\n                            </h4>\r\n                            <div class=\"content-img-fiche\">\r\n                                <img class=\"img-fiche\" src=\"<?php echo base_url() ?>assets/clients/assets/img/fiche/ask.jpg\" alt=\"\" style=\"width:300px;height:300px;object-fit:cover\">\r\n                            </div>\r\n                            <br />\r\n                            <p>This shows that you respect the other person\'s feelings and needs.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"blog-item p-relative d-flex align-items-center h-100 w-100\" data-swiper-parallax-scale=\"0.85\">\r\n                    <div class=\"box-content p-relative\">\r\n                        <div class=\"box-content-body\">\r\n                            <h4 class=\"title-block mb-20\">\r\n                                <p class=\"effect-ajax\">Ask impatiently</p>\r\n                            </h4>\r\n                            <div class=\"content-img-fiche\">\r\n                                <img class=\"img-fiche\" src=\"<?php echo base_url() ?>assets/clients/assets/img/fiche/speed.jpg\" alt=\"\" style=\"width:300px;height:300px;object-fit:cover\">\r\n                            </div>\r\n                            <br />\r\n                            <p>This can make you seem selfish or insensitive to the needs of others.</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    \r\n\r\n    <br/><br/>\r\n\r\n<br/><br/>\r\n</div>\r\n', 'courtesy.jpg', 'Immerse yourself in the world of politeness even for the undead! Our site dedicated to politeness for zombies offers fun and interactive lessons to learn good manners.');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `cours_actuel_utilisateur`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `cours_actuel_utilisateur` (
`id` int
,`idcourstermine` bigint
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `cours_par_user`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `cours_par_user` (
`description` text
,`descriptioncourte` text
,`etat_cours` varchar(11)
,`id` int
,`id_utilisateur` int
,`idniveau` int
,`ordre` int
,`photo` varchar(100)
,`pseudo_utilisateur` varchar(50)
,`titre` varchar(100)
);

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
(1, 1, 'Pronounce A', 4),
(2, 1, 'Pronounce B', 4),
(3, 1, 'Pronounce C', 4),
(4, 1, 'What is the letter after C ?', 3),
(5, 1, 'Pronounce E', 4),
(6, 2, 'Pronounce 1', 4),
(7, 2, 'Pronounce 2', 4),
(8, 2, 'What is the number after 3?', 3),
(9, 2, 'Is 2 pronounced \'two\'?', 2),
(10, 2, 'Who is four?', 1);

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
(1, 1, 'A', 1, 'a.png', 1),
(2, 1, 'B', 1, 'b.jpg', 2),
(3, 1, 'C', 1, 'c.jpg', 3),
(4, 1, 'R', 0, 'r.png', 4),
(5, 1, 'E', 0, 'e.png', 4),
(6, 1, 'D', 1, 'd.png', 4),
(7, 1, 'T', 0, 't.png', 4),
(8, 1, 'E', 1, 'e.jpg', 5),
(9, 2, 'one', 1, 'one.jpg', 6),
(10, 2, 'two', 1, 'two.jpg', 7),
(11, 2, '2', 0, 'two.png', 8),
(12, 2, '4', 1, 'four.png', 8),
(13, 2, '5', 0, 'five.png', 8),
(14, 2, '6', 0, 'six.png', 8),
(15, 2, 'true', 1, 'true.jpg', 9),
(16, 2, 'false', 0, 'false.jpg', 9),
(17, 2, '6', 0, 'six.png', 10),
(18, 2, '9', 0, 'nine.png', 10),
(19, 2, '3', 0, 'three.png', 10),
(20, 2, '4', 1, 'four.png', 10);

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
-- Structure de la table `remarque`
--

CREATE TABLE `remarque` (
  `id` int NOT NULL,
  `nom` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb3_unicode_ci NOT NULL
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
(2, 'True/False'),
(3, 'Question/Answer'),
(4, 'Vocal');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `nom` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `motdepasse` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `datecreation` date NOT NULL,
  `id` int NOT NULL,
  `pseudo` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom`, `motdepasse`, `datecreation`, `id`, `pseudo`, `isadmin`) VALUES
('BraaiinnnZz', 'password123', '2024-05-01', 1, 'BRA', 0),
('GrraaahhZz', 'securepwd', '2024-04-28', 2, 'GRA', 0),
('MuuhhRaaahhZz', 'strongpass', '2024-04-30', 3, 'MUH', 0),
('UuuhhBrraaaiinZz', 'safepassword', '2024-04-25', 4, 'UUH', 0),
('GrrrrZz', 'mypassword', '2024-05-02', 5, 'GRR', 0),
('ADMIN', 'ADMIN', '2024-05-05', 6, 'ADMIN', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_niveau`
--

CREATE TABLE `utilisateur_niveau` (
  `id` int NOT NULL,
  `idutilisateur` int NOT NULL,
  `idniveau` int NOT NULL,
  `idcourstermine` int NOT NULL,
  `datecreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_note`
--

CREATE TABLE `utilisateur_note` (
  `id` int NOT NULL,
  `idutilisateur` int NOT NULL,
  `iidcours` int NOT NULL,
  `note` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `Vue_Utilisateurs_Niveau`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `Vue_Utilisateurs_Niveau` (
`Niveau_Utilisateur` bigint
,`Nom_Utilisateur` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure de la vue `cours_actuel_utilisateur`
--
DROP TABLE IF EXISTS `cours_actuel_utilisateur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`codeforce`@`localhost` SQL SECURITY DEFINER VIEW `cours_actuel_utilisateur`  AS SELECT `utilisateur`.`id` AS `id`, coalesce(`utilisateur_niveau`.`idcourstermine`,0) AS `idcourstermine` FROM ((`utilisateur` left join (select `utilisateur_niveau`.`idutilisateur` AS `idutilisateur`,max(`utilisateur_niveau`.`idcourstermine`) AS `idcourstermine` from `utilisateur_niveau` group by `utilisateur_niveau`.`idutilisateur`) `utilisateur_niveau_max` on((`utilisateur`.`id` = `utilisateur_niveau_max`.`idutilisateur`))) left join `utilisateur_niveau` on(((`utilisateur`.`id` = `utilisateur_niveau`.`idutilisateur`) and (`utilisateur_niveau`.`idcourstermine` = `utilisateur_niveau_max`.`idcourstermine`)))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `cours_par_user`
--
DROP TABLE IF EXISTS `cours_par_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`codeforce`@`localhost` SQL SECURITY DEFINER VIEW `cours_par_user`  AS SELECT `utilisateur`.`id` AS `id_utilisateur`, `utilisateur`.`pseudo` AS `pseudo_utilisateur`, `cours`.`id` AS `id`, `cours`.`ordre` AS `ordre`, `cours`.`titre` AS `titre`, `cours`.`idniveau` AS `idniveau`, `cours`.`description` AS `description`, `cours`.`photo` AS `photo`, `cours`.`descriptioncourte` AS `descriptioncourte`, (case when (`utilisateur_niveau`.`idcourstermine` is not null) then 'Terminé' when (`utilisateur_prochain_cours`.`prochain_cours` is not null) then 'En cours' else 'Non terminé' end) AS `etat_cours` FROM (((`utilisateur` join `cours`) left join (select `utilisateur_niveau`.`idutilisateur` AS `idutilisateur`,`utilisateur_niveau`.`idcourstermine` AS `idcourstermine` from `utilisateur_niveau`) `utilisateur_niveau` on(((`utilisateur`.`id` = `utilisateur_niveau`.`idutilisateur`) and (`cours`.`id` = `utilisateur_niveau`.`idcourstermine`)))) left join (select `utilisateur_niveau`.`idutilisateur` AS `idutilisateur`,min(`utilisateur_niveau`.`idcourstermine`) AS `prochain_cours` from `utilisateur_niveau` where ((`utilisateur_niveau`.`idcourstermine` > (select max(`un`.`idcourstermine`) from `utilisateur_niveau` `un` where (`un`.`idutilisateur` = `utilisateur_niveau`.`idutilisateur`))) or (`utilisateur_niveau`.`idcourstermine` is null)) group by `utilisateur_niveau`.`idutilisateur`) `utilisateur_prochain_cours` on((`utilisateur`.`id` = `utilisateur_prochain_cours`.`idutilisateur`))) ORDER BY `cours`.`ordre` ASC ;

-- --------------------------------------------------------

--
-- Structure de la vue `Vue_Utilisateurs_Niveau`
--
DROP TABLE IF EXISTS `Vue_Utilisateurs_Niveau`;

CREATE ALGORITHM=UNDEFINED DEFINER=`codeforce`@`localhost` SQL SECURITY DEFINER VIEW `Vue_Utilisateurs_Niveau`  AS SELECT `utilisateur`.`nom` AS `Nom_Utilisateur`, coalesce(`utilisateur_niveau`.`idniveau`) AS `Niveau_Utilisateur` FROM (`utilisateur` left join `utilisateur_niveau` on((`utilisateur`.`id` = `utilisateur_niveau`.`idutilisateur`))) ;

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
  ADD KEY `idtype` (`idtype`),
  ADD KEY `qcm_cours_ibfk_1` (`idcours`);

--
-- Index pour la table `qcm_reponse`
--
ALTER TABLE `qcm_reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idquestion` (`idquestion`),
  ADD KEY `qcm_reponse_ibfk_1` (`idcours`);

--
-- Index pour la table `qcm_reponse_utilisateur`
--
ALTER TABLE `qcm_reponse_utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idqcmcours` (`idqcmcours`),
  ADD KEY `idutilisateur` (`idutilisateur`);

--
-- Index pour la table `remarque`
--
ALTER TABLE `remarque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_question`
--
ALTER TABLE `type_question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_pseudo` (`pseudo`);

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
  ADD KEY `idutilisateur` (`idutilisateur`),
  ADD KEY `utilisateur_note_ibfk_1` (`iidcours`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `remarque`
--
ALTER TABLE `remarque`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `qcm_cours_ibfk_1` FOREIGN KEY (`idcours`) REFERENCES `cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `qcm_cours_ibfk_2` FOREIGN KEY (`idtype`) REFERENCES `type_question` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `qcm_reponse`
--
ALTER TABLE `qcm_reponse`
  ADD CONSTRAINT `qcm_reponse_ibfk_1` FOREIGN KEY (`idcours`) REFERENCES `cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
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
  ADD CONSTRAINT `utilisateur_note_ibfk_1` FOREIGN KEY (`iidcours`) REFERENCES `cours` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `utilisateur_note_ibfk_2` FOREIGN KEY (`idutilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
