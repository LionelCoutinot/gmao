-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 16 août 2022 à 11:59
-- Version du serveur :  10.5.17-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vobg1516_maintenance`
--

-- --------------------------------------------------------

--
-- Structure de la table `arret`
--

CREATE TABLE `arret` (
  `id` int(11) NOT NULL,
  `arret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `arret`
--

INSERT INTO `arret` (`id`, `arret`) VALUES
(1, 'Oui'),
(2, 'Non');

-- --------------------------------------------------------

--
-- Structure de la table `criticite`
--

CREATE TABLE `criticite` (
  `id` int(11) NOT NULL,
  `criticite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `criticite`
--

INSERT INTO `criticite` (`id`, `criticite`) VALUES
(1, 'Urgentissime'),
(2, 'Rapidement'),
(3, 'Préventif'),
(4, 'Amélioration continue'),
(5, 'Annuel');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220802133702', '2022-08-02 15:37:22', 89),
('DoctrineMigrations\\Version20220802134437', '2022-08-02 15:44:50', 146),
('DoctrineMigrations\\Version20220802135910', '2022-08-02 15:59:33', 68),
('DoctrineMigrations\\Version20220802141017', '2022-08-02 16:10:40', 339),
('DoctrineMigrations\\Version20220802141540', '2022-08-02 16:15:53', 236),
('DoctrineMigrations\\Version20220802175949', '2022-08-02 20:00:01', 107),
('DoctrineMigrations\\Version20220802184109', '2022-08-02 20:41:23', 70),
('DoctrineMigrations\\Version20220811231050', '2022-08-12 01:11:39', 2108);

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `miseservice` date NOT NULL,
  `caracteristique` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `machine`
--

INSERT INTO `machine` (`id`, `nom`, `type`, `miseservice`, `caracteristique`) VALUES
(1, 'MACHINE N°1', 'Machine à insertion AHT 56TT', '2020-06-14', '<div  style=\"text-align:justify\">\r\n<h4>Présentation AHT 56TT</h4>\r\nPour le séquencement et l’insertion couplée de composants axiaux et cavaliers, la VCD 88HT procure une productivité fiable aux plus hautes cadences disponibles de l’industrie. Un taux d’erreur inférieur à 200ppm est le résultat des compétences persistantes de Universal Instruments dans le développement des techniques d’insertion de composants traversants. Les changements de série sont minimisés grâce à la capacité extensible du séquenceur jusqu’à 220 emplacements. Une interface opérateur intuitive commune aux autres équipements de la même famille offre une utilisation facile, des diagnostics multiples, la gestion globale des données et paramètres ainsi qu’un éditeur graphique.\r\n<br /><br />\r\n<h4>Caractéristiques techniques de l\' AHT 56TT :</h4>\r\n<ul style=\"list-style-type: none\">\r\n<li>  ‣     26.000 composants/h</li>\r\n<li>  ‣     Cadence réelle la plus élevée pour séquenceur/insertion</li>\r\n<li>  ‣     Plus faible taux d’erreur de l’industrie avec 200ppm seulement</li>\r\n <li>  ‣    Ajout/complément de composants sans arrêt machine</li>\r\n <li>  ‣    Extensible de 20 stations jusqu’à 220 stations composants</li>\r\n<li>  ‣     Chargement/déchargement manuel ou automatique des circuits</li>\r\n<li>  ‣     Station de mesure des composants</li>\r\n<li>  ‣     Interface opérateur graphique, simple et intuitive</li>\r\n</ul>  \r\n</div>'),
(2, 'MACHINE N°2', 'Machine à insertion AHT 56TT', '2020-12-10', '<div  style=\"text-align:justify\">\r\n<h4>Présentation AHT 56TT</h4>\r\nPour le séquencement et l’insertion couplée de composants axiaux et cavaliers, la VCD 88HT procure une productivité fiable aux plus hautes cadences disponibles de l’industrie. Un taux d’erreur inférieur à 200ppm est le résultat des compétences persistantes de Universal Instruments dans le développement des techniques d’insertion de composants traversants. Les changements de série sont minimisés grâce à la capacité extensible du séquenceur jusqu’à 220 emplacements. Une interface opérateur intuitive commune aux autres équipements de la même famille offre une utilisation facile, des diagnostics multiples, la gestion globale des données et paramètres ainsi qu’un éditeur graphique.\r\n<br /><br />\r\n<h4>Caractéristiques techniques de l\' AHT 56TT :</h4>\r\n<ul style=\"list-style-type: none\">\r\n<li>  ‣     26.000 composants/h</li>\r\n<li>  ‣     Cadence réelle la plus élevée pour séquenceur/insertion</li>\r\n<li>  ‣     Plus faible taux d’erreur de l’industrie avec 200ppm seulement</li>\r\n <li>  ‣    Ajout/complément de composants sans arrêt machine</li>\r\n <li>  ‣    Extensible de 20 stations jusqu’à 220 stations composants</li>\r\n<li>  ‣     Chargement/déchargement manuel ou automatique des circuits</li>\r\n<li>  ‣     Station de mesure des composants</li>\r\n<li>  ‣     Interface opérateur graphique, simple et intuitive</li>\r\n</ul>  \r\n</div>'),
(3, 'MACHINE N°3', 'Machine à étamage RYH 66UK', '2021-03-10', '<div  style=\"text-align:justify\">\r\n<h4>Description RYH 66UK</h4>\r\nNos services s’illustrent dans la conception et fabrication d’un nouvel équipement de brasage sélectif en carrousel pour les cartes électroniques, dimension circuit maxi : 250 x 250 mm.\r\n<br />\r\nUn concept de machine qui offre une performance remarquable, stabilité et répétabilité exceptionnelle, idéal pour toutes les exigences de production.\r\n<br /><br />\r\n<h4>Caractéristiques techniques de la RYH 66UK </h4>\r\n<ul style=\"list-style-type: none\">\r\n<li>  ‣   Poids à vide : Environ 1 Tonne</li>  \r\n<li>  ‣ Puissance installée : 11 kW</li>  \r\n<li>  ‣ Tension : Tri 380 V + N + T</li>  \r\n<li>  ‣ Niveau sonore : inférieur 70 DB</li>  \r\n<li>  ‣ Dimensions hors tout : Longueur 2030 x largeur 2430 x Hauteur 2010 mm environ</li>  \r\n<li>  ‣ Bâti mécano soudé + portes</li>  \r\n<li>  ‣ Plateau rotatif linéaire motorisé</li>  \r\n<li>  ‣ Station de fluxage à pulvérisation dropjet</li>  \r\n<li>  ‣ Déplacement X,Y</li>  \r\n<li>  ‣ Station de préchauffage à l’air chaud</li>  \r\n<li>  ‣ Station de brasage sélectif</li>  \r\n<li>  ‣ Station de chargement et déchargement</li>  \r\n<li>  ‣ Poste lecteur code-barre (option)</li>  \r\n<li>  ‣ Outillage porteur pour 4 emplacements de produit</li>  \r\n<li>  ‣ Armoire électrique</li>  \r\n<li>  ‣ Pupitre de commande opérateur, écran tactile</li>  \r\n<li>  ‣ Système de ventilation</li>  \r\n<li>  ‣ Porte-bidon pour pot sous pression</li>  \r\n</ul>  \r\n</div>');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panne`
--

CREATE TABLE `panne` (
  `id` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `criticite_id` int(11) NOT NULL,
  `arret_id` int(11) NOT NULL,
  `typeintervention_id` int(11) NOT NULL,
  `typepanne_id` int(11) NOT NULL,
  `debutarret` datetime DEFAULT NULL,
  `finarret` datetime DEFAULT NULL,
  `demandeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intervenant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dureeintervention` time NOT NULL,
  `travaux` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `panne`
--

INSERT INTO `panne` (`id`, `machine_id`, `criticite_id`, `arret_id`, `typeintervention_id`, `typepanne_id`, `debutarret`, `finarret`, `demandeur`, `intervenant`, `dureeintervention`, `travaux`) VALUES
(1, 2, 1, 1, 1, 5, '2021-03-02 10:30:00', '2021-03-02 14:30:00', 'Opérateur', 'Intervenant1', '01:30:00', 'Fuite d\'un vérin pneumatique. Changement des joints'),
(2, 1, 3, 2, 2, 5, '2017-01-01 00:00:00', '2017-01-01 00:00:00', 'Chef maintenance', 'Intervenant1', '00:30:00', 'Vérification des niveaux du circuit d\'alimentation pneumatique le 15/03/2021'),
(3, 2, 3, 2, 2, 5, '2017-01-01 00:00:00', '2017-01-01 00:00:00', 'Chef maintenance', 'Intervenant2', '00:30:00', 'Vérification des niveaux du circuit d\'alimentation pneumatique le 15/03/2021'),
(4, 2, 1, 1, 1, 2, '2021-04-05 14:20:00', '2021-04-05 15:45:00', 'Chef atelier', 'Intervenant1', '00:45:00', 'Changement du thermique qui est HS'),
(7, 1, 3, 1, 2, 2, '2021-05-10 11:00:00', '2021-05-12 16:15:00', 'Chef maintenance', 'Intervenant1', '06:00:00', 'Démontage du moteur pour révision. Puis remontage.'),
(8, 3, 1, 1, 1, 1, '2021-06-10 09:10:00', '2021-06-10 16:30:00', 'Chef atelier', 'Intervenant2', '04:30:00', 'Problème avec le système de chauffage de l\'étain. Changement d\'une résistance chauffante.'),
(10, 2, 2, 1, 3, 9, '2021-07-21 09:00:00', '2021-07-21 11:00:00', 'Chef atelier', 'Intervenant1', '02:00:00', 'Ajout d\'un cache protecteur pour les opérateurs'),
(12, 1, 3, 1, 3, 9, '2021-07-22 09:00:00', '2017-07-22 11:00:00', 'Chef maintenance', 'Intervenant2', '02:00:00', 'Ajout d\'un cache protecteur pour les opérateurs'),
(13, 1, 2, 1, 1, 7, '2021-07-29 15:45:00', '2021-07-29 16:15:00', 'Opérateur', 'Intervenant1', '00:30:00', 'Changement d\'un capteur optique');

-- --------------------------------------------------------

--
-- Structure de la table `typeintervention`
--

CREATE TABLE `typeintervention` (
  `id` int(11) NOT NULL,
  `typeintervention` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `typeintervention`
--

INSERT INTO `typeintervention` (`id`, `typeintervention`) VALUES
(1, 'Curative'),
(2, 'Préventive'),
(3, 'Amélioration Continue'),
(4, 'Annuelle');

-- --------------------------------------------------------

--
-- Structure de la table `typepanne`
--

CREATE TABLE `typepanne` (
  `id` int(11) NOT NULL,
  `typepanne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `typepanne`
--

INSERT INTO `typepanne` (`id`, `typepanne`) VALUES
(1, 'Électrique'),
(2, 'Électromécanique'),
(3, 'Mécanique'),
(4, 'Hydraulique'),
(5, 'Pneumatique'),
(6, 'Automatisme'),
(7, 'Électronique'),
(9, 'Sécurité'),
(10, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `roles`, `password`, `nom`) VALUES
(1, 'supermanager@usine.com', '[\"ROLE_ADMIN\"]', '$2y$13$2bA.uOFiVcQ9huc3PPZ.9.biARTE6lDfM1Qhb.qamKSfs4VlnB29C', 'Supermanager'),
(2, 'intervenant1@usine.com', '[]', '$2y$13$ippjgXPp9BFVxJNJYPpovOlKJFAr5nHO2SlC.mjYp9l9rcMoOLHju', 'Intervenant1'),
(3, 'intervenant2@usine.com', '[]', '$2y$13$3yOqyTIGXYCPYml/KK85MerdgnfVGlL1FvgLmFtecfGGkCrhpdaiy', 'Intervenant2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `arret`
--
ALTER TABLE `arret`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `criticite`
--
ALTER TABLE `criticite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `panne`
--
ALTER TABLE `panne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3885B260F6B75B26` (`machine_id`),
  ADD KEY `IDX_3885B260C141C0A0` (`criticite_id`),
  ADD KEY `IDX_3885B26068F1C150` (`arret_id`),
  ADD KEY `IDX_3885B2604144C78` (`typeintervention_id`),
  ADD KEY `IDX_3885B26039DE3B35` (`typepanne_id`);

--
-- Index pour la table `typeintervention`
--
ALTER TABLE `typeintervention`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typepanne`
--
ALTER TABLE `typepanne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `arret`
--
ALTER TABLE `arret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `criticite`
--
ALTER TABLE `criticite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panne`
--
ALTER TABLE `panne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `typeintervention`
--
ALTER TABLE `typeintervention`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `typepanne`
--
ALTER TABLE `typepanne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panne`
--
ALTER TABLE `panne`
  ADD CONSTRAINT `FK_3885B26039DE3B35` FOREIGN KEY (`typepanne_id`) REFERENCES `typepanne` (`id`),
  ADD CONSTRAINT `FK_3885B2604144C78` FOREIGN KEY (`typeintervention_id`) REFERENCES `typeintervention` (`id`),
  ADD CONSTRAINT `FK_3885B26068F1C150` FOREIGN KEY (`arret_id`) REFERENCES `arret` (`id`),
  ADD CONSTRAINT `FK_3885B260C141C0A0` FOREIGN KEY (`criticite_id`) REFERENCES `criticite` (`id`),
  ADD CONSTRAINT `FK_3885B260F6B75B26` FOREIGN KEY (`machine_id`) REFERENCES `machine` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
