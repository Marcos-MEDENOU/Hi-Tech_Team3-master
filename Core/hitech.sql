-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 13 déc. 2022 à 16:36
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hitech`
--

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_reference` tinytext COLLATE utf8mb4_unicode_ci,
  `orders_date` datetime DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `pictures_id` int(11) NOT NULL,
  `pictures_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `portrait`
--

CREATE TABLE `portrait` (
  `portrait_id` int(11) NOT NULL,
  `portrait_title` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `portrait_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portrait_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_brand` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_reference` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_label` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` int(11) NOT NULL,
  `products_price_ecology` int(11) NOT NULL,
  `products_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_status` enum('En attente','En boutique','Retirer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopray_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products_orders`
--

CREATE TABLE `products_orders` (
  `products_orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `shopray`
--

CREATE TABLE `shopray` (
  `shopray_id` int(11) NOT NULL,
  `shopray_name_ray` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopray_name_shop` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_lastname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_firstname` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_role` enum('customer','admin') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`pictures_id`),
  ADD KEY `products_pictures` (`products_id`);

--
-- Index pour la table `portrait`
--
ALTER TABLE `portrait`
  ADD PRIMARY KEY (`portrait_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `shopray_id` (`shopray_id`);

--
-- Index pour la table `products_orders`
--
ALTER TABLE `products_orders`
  ADD PRIMARY KEY (`products_orders_id`),
  ADD KEY `products_id` (`products_id`,`orders_id`),
  ADD KEY `orders_products_orders` (`orders_id`);

--
-- Index pour la table `shopray`
--
ALTER TABLE `shopray`
  ADD PRIMARY KEY (`shopray_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `pictures_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `portrait`
--
ALTER TABLE `portrait`
  MODIFY `portrait_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products_orders`
--
ALTER TABLE `products_orders`
  MODIFY `products_orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `shopray`
--
ALTER TABLE `shopray`
  MODIFY `shopray_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `users_orders` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Contraintes pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `products_pictures` FOREIGN KEY (`products_id`) REFERENCES `products` (`products_id`);

--
-- Contraintes pour la table `portrait`
--
ALTER TABLE `portrait`
  ADD CONSTRAINT `products_portrait` FOREIGN KEY (`products_id`) REFERENCES `products` (`products_id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `shopray_and_products` FOREIGN KEY (`shopray_id`) REFERENCES `shopray` (`shopray_id`);

--
-- Contraintes pour la table `products_orders`
--
ALTER TABLE `products_orders`
  ADD CONSTRAINT `orders_products_orders` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`),
  ADD CONSTRAINT `products_products_orders` FOREIGN KEY (`products_id`) REFERENCES `products` (`products_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
