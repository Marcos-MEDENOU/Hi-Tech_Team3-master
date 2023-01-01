-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 16 déc. 2022 à 11:05
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
-- Base de données : `hitec`
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
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `picture_id` int(11) NOT NULL,
  `picture_src` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`picture_id`, `picture_src`, `products_reference`) VALUES
(66, '639b726833a366.45555050.jpg', 'AZERTY'),
(67, '639b72683ad5c1.03347485.jpg', 'AZERTY'),
(68, '639b72683ce605.49502665.jpg', 'AZERTY'),
(69, '639b7268420eb1.61267969.jpg', 'AZERTY'),
(70, '639b72684442b6.43363779.jpg', 'AZERTY'),
(71, '639b761bcbcd13.15281582.jpg', 'dthtrdhfthjtrdhtrhe'),
(72, '639b761bce61b2.25596145.jpg', 'dthtrdhfthjtrdhtrhe'),
(73, '639b761bd04ea9.27311860.jpg', 'dthtrdhfthjtrdhtrhe'),
(74, '639b761bd2dc49.11007466.jpg', 'dthtrdhfthjtrdhtrhe'),
(75, '639b761bd4c1d5.28187446.jpg', 'dthtrdhfthjtrdhtrhe'),
(76, '639b76b98c5381.15500033.jpg', 'hjfrhjdfghgf'),
(77, '639b76b99241a6.68552579.jpg', 'hjfrhjdfghgf'),
(78, '639b76b9944445.68609729.jpg', 'hjfrhjdfghgf'),
(79, '639b76b9999f57.81994161.jpg', 'hjfrhjdfghgf'),
(80, '639b76b99b96c4.53014739.jpg', 'hjfrhjdfghgf'),
(81, '639b818f9d4bc0.74756090.jpg', 'rhgrjtjnjthjnhf'),
(82, '639b818f9ff106.98178369.jpg', 'rhgrjtjnjthjnhf'),
(83, '639b818fa1c611.12161961.jpg', 'rhgrjtjnjthjnhf'),
(84, '639b818fa3ec73.83344004.jpg', 'rhgrjtjnjthjnhf'),
(85, '639b818fa62441.63464256.jpg', 'rhgrjtjnjthjnhf'),
(86, '639c23c42d9377.59593290.jpg', 'AQZERTY'),
(87, '639c23c42fb725.09464106.jpg', 'AQZERTY'),
(88, '639c23c4371f00.25683918.jpg', 'AQZERTY'),
(89, '639c23c43ec299.20986757.jpg', 'AQZERTY'),
(90, '639c23c44128f1.04439288.jpg', 'AQZERTY'),
(91, '639c24524e4919.74331726.jpg', 'zerty'),
(92, '639c245252fc24.40967640.jpg', 'zerty'),
(93, '639c245254ddd1.58164457.jpg', 'zerty'),
(94, '639c24525a6f38.10416311.jpg', 'zerty'),
(95, '639c2452622a47.31406590.jpg', 'zerty'),
(96, '639c24c3b4f219.30214811.jpg', 'erty'),
(97, '639c24c3bbfac6.26416208.jpg', 'erty'),
(98, '639c24c3c41c60.85701008.jpg', 'erty'),
(99, '639c24c3cb4e76.99326397.jpg', 'erty'),
(100, '639c24c3d2dba9.79352467.jpg', 'erty'),
(101, '639c274eb93d62.83929522.jpg', 'hlkjlmjolm'),
(102, '639c274ebb4e67.59519619.jpg', 'hlkjlmjolm'),
(103, '639c274ebcf6c4.60296050.jpg', 'hlkjlmjolm'),
(104, '639c274ebee1d1.67153992.jpg', 'hlkjlmjolm'),
(105, '639c274ec3a468.77796598.jpg', 'hlkjlmjolm');

-- --------------------------------------------------------

--
-- Structure de la table `portrait`
--

CREATE TABLE `portrait` (
  `portrait_id` int(11) NOT NULL,
  `portrait_title` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `portrait_image` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `portrait_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `portrait`
--

INSERT INTO `portrait` (`portrait_id`, `portrait_title`, `portrait_image`, `portrait_text`, `reference`) VALUES
(4, 'fhhhghfhfhfhfhfhgfhgfhfhfhfhfgh', '639b7268498609.04518609.png', 'fghgfhggfhg', 'AZERTY'),
(5, 'jgftjnhh', '639b761bd72534.57564371.jpg', 'jfhjfjf', 'dthtrdhfthjtrdhtrhe'),
(6, 'jfjfghjf', '639b761bd95335.04941370.jpg', 'jfjfhj', 'dthtrdhfthjtrdhtrhe'),
(7, 'jfjfgj', '639b761bdb97a4.08015826.jpg', 'jnhfjfg', 'dthtrdhfthjtrdhtrhe'),
(8, 'kjkjgk', '639b76b9a1b2d1.23988687.jpg', 'gjkgjkjg', 'hjfrhjdfghgf'),
(9, 'jgkggh', '639b76b9a3d437.02649904.jpg', 'ghjkgkg', 'hjfrhjdfghgf'),
(10, 'ghkjgkgjk', '639b76b9a990c0.84783494.jpg', 'ghkkghkg', 'hjfrhjdfghgf'),
(11, 'hftrhthrhh', '639b818fa873a5.34472642.jpg', 'rthytrhhrt', 'rhgrjtjnjthjnhf'),
(12, 'hfghgfrhgfhgfrh', '639b818faa55e5.14682854.jpg', 'ghhbgfhgf', 'rhgrjtjnjthjnhf'),
(13, 'hfhfghgfh', '639b818fac4ca9.89884490.jpg', 'hgfhfghfgh', 'rhgrjtjnjthjnhf'),
(14, 'yabo', '639c23c4455cd9.32510075.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'AQZERTY'),
(15, 'pour', '639c23c4481ac5.78585687.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'AQZERTY'),
(16, 'pourquoi', '639c23c44d82f6.23433420.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'AQZERTY'),
(17, 'yabo', '639c24526a1917.24565820.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'zerty'),
(18, 'pour', '639c245270e378.75964872.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'zerty'),
(19, 'pourquoi', '639c245278bb17.90264068.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'zerty'),
(20, 'yabo', '639c24c3d4dfe2.70659401.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'erty'),
(21, 'pour', '639c24c3daa026.74198648.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'erty'),
(22, 'pourquoi', '639c24c3e16be4.47132891.jpg', 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'erty'),
(23, 'iugjkgjk', '639c274ec80c74.51009927.jpg', 'ghjhjhj', 'hlkjlmjolm'),
(24, 'jhfjhjhfj', '639c274ecf6877.51022193.jpg', 'gfjfhjhj', 'hlkjlmjolm'),
(25, 'jhnh', '639c274ed6c8a6.73740699.jpg', 'jhfjhjh', 'hlkjlmjolm');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_brand` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_label` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float NOT NULL,
  `products_price_eco` float NOT NULL,
  `products_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_status` enum('En attente','En boutique','Retirer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopray_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`reference`, `products_brand`, `products_label`, `product_price`, `products_price_eco`, `products_desc`, `products_status`, `shopray_id`) VALUES
('AQZERTY', 'AOOO', 'jtjgfyj', 145, 1, 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'Retirer', 3),
('AZERTY', 'AOS', 'hfhyjyngfjgfhj', 144, 4542, 'hhfghhfhfghfghgfhgfch', 'En attente', 2),
('dthtrdhfthjtrdhtrhe', 'ghdgdfg', 'gtrrzergeghghergt', 45254, 345345, 'ghdghdhgg', 'En boutique', 4),
('erty', 'AOO', 'jtjgfyj', 145, 1, 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'Retirer', 3),
('hjfrhjdfghgf', 'gfhngfhn', 'hjgfhjgfhjgfhjgf', 35, 43, 'k,gjkgj', 'En boutique', 8),
('hlkjlmjolm', 'jkgjk', 'jlmljkmlkjm', 100, 1, 'lukjiokiuioio', 'En boutique', 2),
('rhgrjtjnjthjnhf', 'rthytrhr', 'jkutjtj', 142, 170, 'ghjjh', 'En boutique', 2),
('ZERTY', 'AOOO', 'jtjgfyj', 145, 1, 'Un écran 23,8\" Full HD et sans bords; c\'est sûrement votre futur moniteur pour la maison ou le bureau. AOC vous propose le 24B1XHS, un produit élégant au look doté d\'une dalle VA avec un temps de réponse rapide de 7 ms en résolution 1920 x 1080 pixels. Cet écran WLED très fonctionnel offre un contenu avec un fréquence de 60 Hz, idéal pour tous les usages du quotidien.', 'Retirer', 3);

-- --------------------------------------------------------

--
-- Structure de la table `product_orders`
--

CREATE TABLE `product_orders` (
  `product_orders_id` int(11) NOT NULL,
  `reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `shopray`
--

CREATE TABLE `shopray` (
  `shopray_id` int(11) NOT NULL,
  `shopray_name_ray` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopray_name_shop` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopray_category` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `shopray`
--

INSERT INTO `shopray` (`shopray_id`, `shopray_name_ray`, `shopray_name_shop`, `shopray_category`) VALUES
(1, 'Ecrans d\'ordinateur', 'Périphériques & composants', 'Périphériques'),
(2, 'Clavier et souris', 'Périphériques & composants', 'Périphériques'),
(3, 'PC Portable', 'Ordinateurs', 'Portables'),
(4, 'Macbook', 'Ordinateurs', 'Portables'),
(5, 'Carte mémoire', 'Téléphone', 'Accessoires'),
(6, 'Etuis', 'Téléphone', 'Accessoires'),
(7, 'Caméra de surveillance', 'Objets connectés', 'Maison'),
(8, 'Détecteur & capteur', 'Objets connectés', 'Maison');

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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_lastname`, `users_firstname`, `users_email`, `users_password`, `users_role`) VALUES
(23, 'ADJAYA', 'ExausÃ©e', 'adjaya@gmail.com', '$2y$10$DBP1larkOP6b16ZmyNQjJ.XCK4OTmxRa7bzF2g4euoDzudfMjN5hq', 'customer'),
(24, 'aboudou', 'KoladÃ©', 'abd@gmail.com', '$2y$10$2DIAwJeh7KWOTQmCGmsqAOx/VkEG4ARPFA.erBbqt1fux0WFRuHe6', 'customer'),
(25, 'JAMES', 'franco', 'jt@gmail.com', '$2y$10$1iVxnIlbusNAcjmJRU5JAeBiCmSVtCQy5sLjPT7.59CtTIu7t4DVq', 'customer'),
(27, 'JOJè', 'titi', 'fgf@gmail.com', '$2y$10$dxmnw9d0t12h0xGA..qOXeZtWsUsK4bbAwEvqicyrwwPHr/mxMUcK', 'customer'),
(28, 'KOLADé', 'Josué', 'fggf@gmail.com', '$2y$10$02bXZtFGj2DFHRkGZhQoPuo3ktDmyNLTfQHIYtMNgSM6z4CNVNo/u', 'customer'),
(29, 'KOUAGOU', 'Tiburce', 'tibuurcekouagou@gmail.com', '$2y$10$1wwViN9MURlrKW7uqvpIAOqMrkIJtMkiXzGmQxMFSyKM9o6z2KcmS', 'customer'),
(30, 'GHFHGH', 'Dghhd Hdfhfd', 'gfgf@gmail.com', '$2y$10$46z4x/wFtvMwhJ3uG.PIJuPxaC2oux.06Waa1d./l9qoPHofWjb7e', 'customer'),
(31, '', '', 'hhfgf@gmail.com', '$2y$10$gySnNq.PNux/ADLm8cusnuq/YHqtdkIOr4zwJe8CurKAmD0dY6yOa', 'customer'),
(32, 'ABOUDOU', 'Fghdd', 'jojo@gmail.com', '$2y$10$vcO6SqvGHSqYtXufzUmxkOK/bPvniOOBjKEBFgf7EZ6xdYMOk5QwG', 'customer'),
(33, 'GJGHJ', 'Jhgj', 'dohnou@gmail.com', '$2y$10$ZX54pjuAN0bBhDddnsUH..MNw7ov916tECRZGQdtiFIQV8HVqS1mW', 'customer'),
(34, 'GDH GBNGHB', 'Kolu Dghghfh', 'gh@gmail.com', '$2y$10$nZYch4GxYEq8AxL6D3Ne6uqDafQuDm5jiosOmrvMrthnkqUqyYfg.', 'customer'),
(35, 'GHFHDG FGHJJGF HHGH', 'Ghkjsdfghkljfg', 'k@gmail.com', '$2y$10$pf4dlFoXCE4RKEgqozZMF.Ig8A7HO.Yp1Foh4.isCiQ6VDgmTSifq', 'customer'),
(36, 'GHHYDTH', 'Tht', 'fgfgh@gmail.com', '$2y$10$/v47BTfrEcEuDGDSO4ud8eSVbyPDr16k6U0ugeYIEx1GlYwvFphX.', 'customer'),
(37, 'OK OKAY POUR', 'Dfghdghdgh', 'fggghf@gmail.com', '$2y$10$UweGVmRAXnci8O.ksOnPLupzeovBNIkvJ0VGuTVuIAuoXeiLayMnS', 'customer');

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
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`picture_id`),
  ADD KEY `products_reference` (`products_reference`);

--
-- Index pour la table `portrait`
--
ALTER TABLE `portrait`
  ADD PRIMARY KEY (`portrait_id`),
  ADD KEY `reference` (`reference`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`reference`),
  ADD KEY `shopray_id` (`shopray_id`);

--
-- Index pour la table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`product_orders_id`),
  ADD KEY `orders_id` (`orders_id`);

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
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT pour la table `portrait`
--
ALTER TABLE `portrait`
  MODIFY `portrait_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `product_orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `shopray`
--
ALTER TABLE `shopray`
  MODIFY `shopray_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `users_orders` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
