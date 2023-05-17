-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 mai 2023 à 02:25
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stockage`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE `affectation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `date_affectation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autocad` tinyint(1) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `affectation`
--

INSERT INTO `affectation` (`id`, `user_id`, `machine_id`, `date_affectation`, `autocad`, `description`) VALUES
(1, 1, 33, '17/05/2023 02:23:58am', 1, 'i need to work with EXCEL');

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

CREATE TABLE `machine` (
  `id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `serial_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available` tinyint(1) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac_ethernet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac_wifi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `machine`
--

INSERT INTO `machine` (`id`, `model_id`, `serial_num`, `state`, `available`, `description`, `mac_ethernet`, `mac_wifi`, `img_src`) VALUES
(31, 11, 'JDWX403', 'Bon', 1, '650\r\n250SSD\r\n1ToHDD', '4-73-5A-EF-BF-B', 'C-6A-77-8E-D4-E', '/images/upload/Laptop/64641cc1bf5c7.jpeg'),
(32, 12, 'ILK4C92', 'Mauvais', 1, 'i7-7eme', '64-00-6A-IF-88-97', 'N/A', '/images/upload/Desktop/64641d86bcadf.jpeg'),
(33, 13, 'CZC6119YW7', 'Bon', 0, '128 SSD', 'ET-8-0F-CF-4C-84-B', 'N/A', '/images/upload/Desktop/64641e0a6c05b.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `marque_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `marque_name`) VALUES
(12, 'Dell'),
(13, 'OptiPlex'),
(14, 'EliteDesk');

-- --------------------------------------------------------

--
-- Structure de la table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model`
--

INSERT INTO `model` (`id`, `marque_id`, `model_name`, `type`) VALUES
(11, 12, 'G3 3500', 'Laptop'),
(12, 13, '3040', 'Desktop'),
(13, 14, '800 G2', 'Desktop');

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `permission_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission`
--

INSERT INTO `permission` (`id`, `permission_name`) VALUES
(41, 'add user'),
(42, 'edit user'),
(43, 'delete user'),
(44, 'add machine'),
(45, 'edit machine'),
(46, 'delete machine'),
(47, 'change password'),
(48, 'demande machine'),
(49, 'voir notifications');

-- --------------------------------------------------------

--
-- Structure de la table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `restitution`
--

CREATE TABLE `restitution` (
  `id` int(11) NOT NULL,
  `affectation_id` int(11) NOT NULL,
  `type_restitution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'Super admin'),
(2, 'Admin'),
(3, 'IT SERVICE');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connected` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `matricule`, `manager`, `job`, `connected`) VALUES
(1, 'ayman', 'ayman', 'itsmeaymane2003@gmail.com', 'itsmeaymane2003@gmail.com', 1, NULL, '$2y$13$1tlOnq2FUygLTjnlkCp6dOIgX3HARbFfLiNoDZSTIUuyRlApTiV/2', '2023-05-17 02:08:02', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', 'BW33832', 'Soufiane', 'Web developer', 1),
(2, 'Jett', 'jett', 'Jett@gmail.com', 'jett@gmail.com', 1, NULL, '$2y$13$tOK8yNhRhWhpWFcr40BVoOh68avLMeKM3SxjsEzALsPMmrwMrdhQC', '2023-05-11 22:55:10', NULL, NULL, 'a:1:{i:0;s:11:\"SUPER ADMIN\";}', 'XADV22', 'ahmed', 'Technicien', 0),
(4, 'Rena', 'rena', 'Rena@gmail.com', 'rena@gmail.com', 1, NULL, '$2y$13$SVkeuj6BFBm7L91iy7SHbuy6hEDRVlR4abSy/lfV2ouyBH./6wmnC', NULL, NULL, NULL, 'a:0:{}', 'BW338310', 'Soufiane', 'Web developer', 0),
(5, 'Neon', 'neon', 'Neon@gmail.com', 'neon@gmail.com', 1, NULL, '$2y$13$ATPR1XWMKzs8pG8lBFB1HOYFClBlXhugdYUdmKIIa9j.ValQsYl0q', NULL, NULL, NULL, 'a:0:{}', 'BW338310', 'Said', 'Menage', 0),
(6, 'othman', 'othman', 'othman@gmail.com', 'othman@gmail.com', 1, NULL, '$2y$13$hPW9f/LgS2LC.B.Xqqu3WOc2xeLz6e1n9YCsORVb3s5EaukUxBt3G', '2023-05-02 21:57:56', NULL, NULL, 'a:0:{}', 'BW338310', 'Soufiane', 'Menage', 0),
(10, 'hicham', 'hicham', 'hicham@gmail.com', 'hicham@gmail.com', 1, NULL, '$2y$13$Lg.UPvJJJMKPY8.T6PhSUeh8.hpFO//sdVsNUGd7EWuc3tllnTZtO', NULL, NULL, NULL, 'a:1:{i:0;s:5:\"ADMIN\";}', 'sfddsf', 'Ayman', 'Web developer', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_permission`
--

CREATE TABLE `user_permission` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_permission`
--

INSERT INTO `user_permission` (`user_id`, `permission_id`) VALUES
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(10, 41),
(10, 42),
(10, 43);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F4DD61D3A76ED395` (`user_id`),
  ADD KEY `IDX_F4DD61D3F6B75B26` (`machine_id`);

--
-- Index pour la table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1505DF847975B7E7` (`model_id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D79572D94827B9B2` (`marque_id`);

--
-- Index pour la table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`),
  ADD KEY `IDX_DC5D4DE9FED90CCA` (`permission_id`),
  ADD KEY `IDX_DC5D4DE9A76ED395` (`user_id`);

--
-- Index pour la table `restitution`
--
ALTER TABLE `restitution`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4FA8209D6D0ABA22` (`affectation_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`);

--
-- Index pour la table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `IDX_472E5446A76ED395` (`user_id`),
  ADD KEY `IDX_472E5446FED90CCA` (`permission_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectation`
--
ALTER TABLE `affectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `restitution`
--
ALTER TABLE `restitution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD CONSTRAINT `FK_F4DD61D3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_F4DD61D3F6B75B26` FOREIGN KEY (`machine_id`) REFERENCES `machine` (`id`);

--
-- Contraintes pour la table `machine`
--
ALTER TABLE `machine`
  ADD CONSTRAINT `FK_1505DF847975B7E7` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`);

--
-- Contraintes pour la table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `FK_D79572D94827B9B2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`id`);

--
-- Contraintes pour la table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `FK_DC5D4DE9A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DC5D4DE9FED90CCA` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `restitution`
--
ALTER TABLE `restitution`
  ADD CONSTRAINT `FK_4FA8209D6D0ABA22` FOREIGN KEY (`affectation_id`) REFERENCES `affectation` (`id`);

--
-- Contraintes pour la table `user_permission`
--
ALTER TABLE `user_permission`
  ADD CONSTRAINT `FK_472E5446A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_472E5446FED90CCA` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
