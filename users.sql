-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 17 oct. 2024 à 21:02
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espaces_membres`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` text NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mdp`) VALUES
(3, 'sedera', 'ecb6eb7a1ede3fa58a22cfa7f1eb691d4ce2aba1'),
(4, 'bot', 'c71e7261d37a4f6ae4cfb0cbd79081310a237e67'),
(5, 'sed', 'c15b7b735c97215ce1d2a4b5502e96b9b8cbbe57'),
(6, 'mitia', '102ab68c9ec1ef6c8613ce5e0b953e0b4772397a'),
(7, 'mitia', '102ab68c9ec1ef6c8613ce5e0b953e0b4772397a'),
(8, 'teste', '2e6f9b0d5885b6010f9167787445617f553a735f'),
(9, 'teste', '2e6f9b0d5885b6010f9167787445617f553a735f'),
(10, 'mitia', 'a65612f49a137c08fc62ec78c65d77667b812996'),
(11, 'dada', 'fedd1d1122aa65028c81e16ceb85d9c73790a2fa'),
(12, 'dada', 'fedd1d1122aa65028c81e16ceb85d9c73790a2fa'),
(13, 'dada', 'fedd1d1122aa65028c81e16ceb85d9c73790a2fa'),
(14, 'dada', 'fedd1d1122aa65028c81e16ceb85d9c73790a2fa'),
(15, 'dkfaj', '57a9901af6fe030198ef1737783e2048ee96da4a'),
(16, 'maman', '50d7436039744c253f9b2a4e90cbedb02ebfb82d'),
(17, 'Mitia', '28554123dae8d1492092b679ee5efa0f08be0971');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
