-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 27 mars 2022 à 20:26
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cuisine2`
--

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

DROP TABLE IF EXISTS `etape`;
CREATE TABLE IF NOT EXISTS `etape` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `idRecette` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idRecette` (`idRecette`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etape`
--

INSERT INTO `etape` (`id`, `numero`, `description`, `idRecette`) VALUES
(1, 1, 'Faire fondre le chocolat avec le beurre au micro-onde', 1),
(2, 2, 'Fouettez les oeufs avec le sucre puis ajouter la farine et la levure', 1),
(3, 3, 'Ajoutez le chocolat fondu', 1),
(4, 4, 'Faire cuire au four à 185°C pendant 20 min', 1),
(5, 1, 'Préchauffez le four à 190°C', 2),
(6, 2, 'Mettre le beurre et l\'eau dans une casserole et portez à ébullition', 2),
(7, 3, 'Ajoutez le sel, la levure et la farine.Remuez jusqu\'à ce qu\'elle se détache des parois et forme une boule', 2),
(8, 4, 'Puis laissez refroidir quelques minutes', 2),
(9, 5, 'Incorporez ensuite le suite et les oeufs un à un', 2),
(10, 6, 'Pochez les choux et recouvrez la surface de la perle de sucre', 2),
(11, 7, 'Cuire 15-20 min', 2),
(12, 1, 'Mélangez la farine avec le sucre et le sel, puis faites un puit et cassez les oeufs', 3),
(13, 2, 'Mélangez la levure avec le lait tiède et ajoutez-le au mélange précédent', 3),
(14, 3, 'Mélangez jusqu\'à ce que la pâte soit compacte. Laissez reposez 30 minutes', 3),
(15, 4, 'Ajoutez ensuite le beurre foncu et le sucre perlé. Laissez reposer de nouveau 30 minutes', 3),
(16, 5, 'Faire cuire les gaufres. Elles sont cuites dès qu\'elles sont dorées', 3),
(17, 1, 'Commencez par préchauffer votre four à 180°C (Th.6)', 4),
(18, 2, 'Prélevez les zestes de vos oranges à l\'aide d\'un zesteur puis coupez-les en petits morceaux', 4),
(19, 3, 'Dans un récipient mélangez vos zetes, la farine, le sucre, la levure, le bicarbonate et le sel', 4),
(20, 4, 'Ensuite, ajoutez le jus d\'orange, les oeufs et le beurre fondu. Mélangez à l\'aide d\'un fouet manuel. Une fois la pâte homogène, remplissez les moules à muffins au 3/4', 4),
(21, 5, 'Enfournez à 180°C pendant 20-25 minutes', 4);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `nom`) VALUES
(1, 'Sucre'),
(2, 'Chocolat'),
(3, 'Beurre'),
(4, 'Noix'),
(5, 'Farine'),
(6, 'Oeufs'),
(7, 'Sachet de levure chimique'),
(8, 'Eau'),
(9, 'Sel'),
(10, 'Perles de sucre'),
(11, 'Sucre vanillé'),
(12, 'Lait');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `difficulte` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `nom`, `difficulte`, `type`) VALUES
(1, 'Brownie', 'Facile', 0),
(2, 'Chouquettes', 'Difficile', 0),
(3, 'Gaufres liégeoises', 'Facile', 0),
(4, 'Muffins à l\'Orange', 'Facile', 0);

-- --------------------------------------------------------

--
-- Structure de la table `recette_ingredient`
--

DROP TABLE IF EXISTS `recette_ingredient`;
CREATE TABLE IF NOT EXISTS `recette_ingredient` (
  `idRecette` int(11) NOT NULL,
  `idIngredient` int(11) NOT NULL,
  `quantite` varchar(20) NOT NULL,
  KEY `idRecette` (`idRecette`),
  KEY `idIngredient` (`idIngredient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recette_ingredient`
--

INSERT INTO `recette_ingredient` (`idRecette`, `idIngredient`, `quantite`) VALUES
(1, 1, '80g'),
(1, 2, '120g'),
(1, 3, '100g'),
(1, 4, '100g'),
(1, 5, '90g'),
(1, 6, '2'),
(1, 7, '1'),
(2, 3, '100g'),
(2, 5, '150g'),
(2, 8, '25cl'),
(2, 6, '4'),
(2, 7, '1'),
(2, 1, '40g'),
(2, 9, '1 pincée'),
(2, 10, '100g'),
(3, 5, '375g'),
(3, 7, '1'),
(3, 6, '2'),
(3, 3, '150g'),
(3, 10, '375g'),
(3, 9, '1 pincée'),
(3, 12, '22cl'),
(3, 11, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
