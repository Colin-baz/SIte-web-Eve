-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 23 mars 2023 à 10:10
-- Version du serveur : 10.3.36-MariaDB-0+deb10u2
-- Version de PHP : 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae203Base`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `auteur_id` int(11) NOT NULL,
  `auteur_nom` varchar(25) NOT NULL,
  `auteur_prenom` varchar(25) NOT NULL,
  `auteur_nat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`auteur_id`, `auteur_nom`, `auteur_prenom`, `auteur_nat`) VALUES
(1, 'rara', 'zeze', 'suisse'),
(2, 'Chappuis', 'Philippe', 'Francais');

-- --------------------------------------------------------

--
-- Structure de la table `bandes_dessinees`
--

CREATE TABLE `bandes_dessinees` (
  `bd_id` int(11) NOT NULL,
  `bd_titre` char(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bd_annee` int(11) NOT NULL,
  `bd_prix` decimal(10,0) NOT NULL,
  `bd_photo` char(30) NOT NULL,
  `db_nb_pages` int(11) NOT NULL,
  `bd_resume` char(200) NOT NULL,
  `_auteur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bandes_dessinees`
--

INSERT INTO `bandes_dessinees` (`bd_id`, `bd_titre`, `bd_annee`, `bd_prix`, `bd_photo`, `db_nb_pages`, `bd_resume`, `_auteur_id`) VALUES
(1, 'Toto en MMI', 2022, '30', 'mmitutu.jpg', 40, 'top MMI avec toto', 1);

-- --------------------------------------------------------

--
-- Structure de la table `clip`
--

CREATE TABLE `clip` (
  `clip_id` int(11) NOT NULL,
  `clip_titre` char(50) NOT NULL,
  `clip_annee` char(4) NOT NULL,
  `clip_nbr_vues` varchar(10) NOT NULL,
  `clip_photo` char(50) NOT NULL,
  `clip_album` char(40) NOT NULL,
  `clip_type` char(50) NOT NULL,
  `_product_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clip`
--

INSERT INTO `clip` (`clip_id`, `clip_titre`, `clip_annee`, `clip_nbr_vues`, `clip_photo`, `clip_album`, `clip_type`, `_product_id`) VALUES
(1, 'ぼくらの (Bokurano)', '2023', '5 M', '2023_03_23_10_07_25---eve_bokurano.jpg', 'Bokurano', 'Music Video', 1),
(2, 'ファイトソング (Fight Song)', '2022', '19 M', 'eve_fightsong.jpg', 'Fightsong', 'Music Video (animated)', 2),
(3, '白雪 (White Snow)', '2022', '4 M', 'eve_whitesnow.jpg', 'Shirayuki', 'Music Video (animated)', 3),
(4, '暴徒', '2022', '15 M', 'eve_insurge.jpg', '廻人 (Mawarijin)', 'Music Video (animated)', 4),
(5, '廻廻奇譚 - Eve CGMV', '2022', '3 M', 'eve_kaikaikitancgmv.jpg', 'Zingai', 'Music Video (3D animation)', 5),
(6, 'Bubble feat.UTA', '2022', '9 M', 'eve_bubble.jpg', 'Kaizin', 'Music Video', 6),
(7, 'Yoku', '2022', '12 M', 'eve_yoku.jpg', 'Kaizin', 'Music Video (animated)', 7),
(8, '退屈を再演しないで', '2022', '16 M', 'eve_ennui.jpg', 'Kaizin', 'Music Video (animated)', 8),
(9, '藍才 (Aisai)', '2021', '13 M', 'eve_aisai.jpg', 'Kaizin', 'Music Video (animated)', 9),
(10, '群青讃歌 (Gunjo Sanka)', '2021', '20 M', 'eve_gunjo.jpg', 'Kaizin', 'Music Video (animated)', 10),
(11, '遊生夢死 (Yuseiboushi)', '2021', '20 M', 'eve_yuseiboushi.jpg', 'Kaizin', 'Music Video (animated)', 11),
(12, 'ドラマツルギー', '2021', '13 M', 'eve_dramaturgylivefilm.jpg', 'Kaizin', 'Live Film', 12),
(13, '夜は仄か', '2021', '23 M', 'eve_faintatnight.jpg', 'Kaizin', 'Music Video (animated)', 13),
(14, '廻廻奇譚 - Eve MV(Live Film ver)', '2021', '31 M', 'eve_kaikaikitanlivefilm.jpg', 'Kaizin', 'Live Film', 12),
(15, '平行線 - Eve × suis from ヨルシカ MV', '2021', '19 M', 'eve_heikousen.jpg', 'Kaizin', 'Music Video (animated)', 14),
(16, '蒼のワルツ', '2020', '35 M', 'eve_aonowaltz.jpg', 'Kaizin', 'Music Video (animated)', 14),
(17, '心海', '2020', '25 M', 'eve_shinkai.jpg', 'Kaizin', 'Music Video (animated)', 2),
(18, '廻廻奇譚', '2020', '293 M', 'eve_kaikaikitan.jpg', 'Kaizin', 'Music Video (animated)', 15),
(19, '約束 (Promise)', '2020', '9 M', 'eve_promise.jpg', 'Kaikai Kitan / Ao No Waltz', 'Music Video (animated)', 16),
(20, 'いのちの食べ方 (Comment dévorer la vie)', '2020', '77 M', 'eve_commentdevorerlavie.jpg', 'Smile', 'Music Video (animated)', 2),
(21, 'Blanc d\'argent', '2020', '11 M', 'eve_blancdargent.jpg', 'Smile', 'Music Video (animated)', 17),
(22, 'LEO', '2020', '12 M', 'eve_leo.jpg', 'Smile', 'Music Video (animated)', 18),
(23, 'Prévision mentale', '2020', '69 M', 'eve_prevision.jpg', 'Smile', 'Music Video (animated)', 14),
(24, 'Raison d\'être', '2019', '55 M', 'eve_raison.jpg', 'Smile', 'Music Video (animated)', 19),
(25, 'バウムクーヘンエンド', '2019', '14 M', 'eve_baum.jpg', 'Smile', 'Music Video (animated)', 8);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_nom` varchar(30) NOT NULL,
  `product_prenom` varchar(30) NOT NULL,
  `product_genre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `product_nom`, `product_prenom`, `product_genre`) VALUES
(1, 'Senaha', 'Akito', 'Homme'),
(2, 'Mariyasu', '(pseudo)', 'inconnu'),
(3, 'Haruka', 'Fujita', 'Femme'),
(4, 'Hibiki', 'Yoshizaki', 'Homme'),
(5, 'Kaori', 'Ninokura', 'Femme'),
(6, 'Araki', 'Tetsuro', 'Homme'),
(7, 'Yoneyama', 'Mai', 'Femme'),
(8, 'Waboku', '(ワボク)', 'Homme'),
(9, 'Glens ', 'Sou', 'inconnu'),
(10, 'Kukka', '(pseudo)', 'inconnu'),
(11, 'niL', '(pseudo)', 'inconnu'),
(12, 'Yoshiharu', 'Ota', 'Homme'),
(13, 'Zemyata', '(pseudo)', 'Homme'),
(14, 'Nobutaka', 'Yoda', 'Homme'),
(15, 'Yuichiro', 'Saeki', 'Homme'),
(16, 'Yuichi', 'Fukushima', 'Homme'),
(17, 'Yuki', 'Sakoda', 'Homme'),
(18, 'Mah', '(pseudo)', 'inconnu'),
(19, 'Ryu', 'Nakayama', 'Homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`auteur_id`);

--
-- Index pour la table `bandes_dessinees`
--
ALTER TABLE `bandes_dessinees`
  ADD PRIMARY KEY (`bd_id`),
  ADD KEY `creer` (`_auteur_id`);

--
-- Index pour la table `clip`
--
ALTER TABLE `clip`
  ADD PRIMARY KEY (`clip_id`),
  ADD KEY `produire` (`_product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `auteur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `bandes_dessinees`
--
ALTER TABLE `bandes_dessinees`
  MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clip`
--
ALTER TABLE `clip`
  MODIFY `clip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bandes_dessinees`
--
ALTER TABLE `bandes_dessinees`
  ADD CONSTRAINT `creer` FOREIGN KEY (`_auteur_id`) REFERENCES `auteurs` (`auteur_id`);

--
-- Contraintes pour la table `clip`
--
ALTER TABLE `clip`
  ADD CONSTRAINT `produire` FOREIGN KEY (`_product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
