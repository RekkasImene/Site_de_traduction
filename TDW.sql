-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 04 fév. 2020 à 17:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sitetraduction`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `nom` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`nom`, `mdp`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `detail` varchar(2000) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `detail`, `image`, `date`) VALUES
(1, 'ADAPTEES A CHAQUE METIER', 'Nous personnalisons la solution avec la terminologie de votre secteur afin', 'de fournir des traductions precises et de garantir la qualite dont vous avez besoin.', '../View/Images/value1.jpg', '03-01-220'),
(2, 'DEDIEES AU SUCCES DE NOS CLIENTS', 'Nous creons des technologies de pointe : pour ameliorer la productivite de', ' nos clients et leur permettre de relever les defis de la globalisation', '../View/Images/value2.jpg', '03-01-220'),
(3, 'SECURISEES ET EFFICACES', 'Les organisations dans le secteur Defense et Securite font confiance aux', ' solutions CTE (Compatible Traduction Electronique) partout dans le monde.', '../View/Images/value3.jpg', '03-01-220');

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `langue` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `commentaire` varchar(1000) NOT NULL,
  `demande` varchar(1000) NOT NULL,
  `assermente` varchar(10) NOT NULL,
  `fil` varchar(50) NOT NULL,
  `nomTrad` varchar(50) NOT NULL,
  `prenomTrad` varchar(50) NOT NULL,
  `emailTrad` varchar(70) NOT NULL,
  `devis` varchar(30) NOT NULL,
  `traduction` varchar(30) NOT NULL,
  `etat` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `documentTraduit` varchar(200) NOT NULL,
  `avisPrix` varchar(50) NOT NULL,
  `ccp` varchar(200) NOT NULL,
  `ignorerNotif` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `date`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `langue`, `source`, `type`, `commentaire`, `demande`, `assermente`, `fil`, `nomTrad`, `prenomTrad`, `emailTrad`, `devis`, `traduction`, `etat`, `prix`, `documentTraduit`, `avisPrix`, `ccp`, `ignorerNotif`) VALUES
(1, '', 'rekkas', 'imene', 'gi_rekkas@esi.dz', '48766', 'rebatchi said street', 'Anglais', 'Albanien', 'General', 'aaaa', '', 'oui', 'Informatique avancÃ©e l3.pdf', '', '', '', '', '', '', 0, '', '', '', ''),
(2, '', 'rekkas', 'imene', 'gi_rekkas@esi.dz', '48766', 'rebatchi said street', 'Anglais', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020_1.pdf', '', '', '', '', '', '', 0, '', '', '', ''),
(3, '20-02-2020', 'rekkas', 'imene', 'rekkas@esi.dz', '48766', 'rebatchi said street', 'Arabe', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020_1.pdf', 'boulfoul', 'rayane', 'gi_rekkas@esi.dz', 'oui', 'non', 'refuse', 0, '', '', '', 'non'),
(4, '', 'boulfoul', 'imene', 'gi_rekkas@esi.dz', '48766', 'rebatchi said street', 'Albanien', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020_1.pdf', '', '', '', '', '', '', 0, '', '', '', ''),
(5, '', 'boulfoul', 'imene', 'gi_rekkas@esi.dz', '48766', 'rebatchi said street', 'Albanien', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020_1.pdf', '', '', '', '', '', '', 0, '', '', '', ''),
(6, '20-02-2020', 'rekkas', 'imene', 'rekkas@esi.dz', '48766', 'rebatchi said street', 'Anglais', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020_1.pdf', 'boulfoul', 'rayane', 'gi_rekkas@esi.dz', 'non', 'oui', 'effectue', 5000, 'TP.pdf', 'accepte', 'State (4).png', 'non'),
(7, '20-02-2020', 'rekkas', 'imene', 'rekkas@esi.dz', '45678', 'rebatchi said street', 'Allemand', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020_1.pdf', 'boulfoul', 'rayane', 'gi_rekkas@esi.dz', 'oui', 'non', 'effectue', 0, 'td-patternMVC.pdf', '', '', 'non'),
(8, '01-02-20', 'rekkas', 'imene', 'rekkas@esi.dz', '48766', 'rebatchi said street', 'Allemand', 'Arabe', 'Scientifique', '', '', 'non', 'Informatique avancÃ©e l3.pdf', 'boulfoul', 'rayane', 'gi_rekkas@esi.dz', 'non', 'oui', 'effectue', 2000, 'MVC-MVVM2015.pdf', 'accepte', 'td-patternMVC.pdf', 'non'),
(17, '04-02-20', 'kadi', 'loucha', 'gl_kadi@esi.dz', '2233', 'asdfg', 'Allemand', 'Anglais', 'General', '', '', 'oui', 'Informatique avancÃ©e l3.pdf', '', '', '', 'oui', 'non', 'non effectue', 0, '', '', '', 'non'),
(14, '03-02-20', 'kadi', 'loucha', 'gl_kadi@esi.dz', '45678', 'rebatchi said street', 'Allemand', 'Anglais', 'General', '', '', 'oui', 'Livrable2-Zerrouk-Abdiche-G1.pdf', 'benaida', 'lydia', 'gl_benaida@esi.dz', 'oui', 'non', 'refuse', 0, '', '', '', 'non'),
(15, '04-02-20', 'rekkas', 'imene', 'rekkas@esi.dz', '48766', 'rebatchi said street', 'Allemand', 'Arabe', 'Scientifique', '', '', 'non', 'modules-gulp.pdf', 'boulfoul', 'rayane', 'gi_rekkas@esi.dz', 'oui', 'non', 'non effectue', 0, '', '', '', 'non'),
(16, '04-02-20', 'rekkas', 'imene', 'rekkas@esi.dz', '2233', 'asdfg', 'Anglais', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020.pdf', 'boulfoul', 'rayane', 'gi_rekkas@esi.dz', 'non', 'oui', 'effectue', 2000, 'modules-gulp.pdf', 'accepte', 'Informatique avancÃ©e l3.pdf', 'non'),
(18, '04-02-20', 'kadi', 'loucha', 'gl_kadi@esi.dz', '2233', 'asdfg', 'Allemand', 'Anglais', 'General', '', '', 'oui', 'Informatique avancÃ©e l3.pdf', 'benaida', 'lydia', 'gl_benaida@esi.dz', 'non', 'oui', 'non effectue', 0, '', '', '', 'non'),
(19, '04-02-20', 'rekkas', 'imene', 'rekkas@esi.dz', '2233', 'asdfg', 'Anglais', 'Arabe', 'Scientifique', '', '', 'non', 'Projet TDW 2019-2020.pdf', 'boulfoul', 'rayane', 'gi_rekkas@esi.dz', 'non', 'oui', 'en cours', 2000, '', 'accepte', 'Projet TDW 2019-2020_1.pdf', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `recrutement`
--

DROP TABLE IF EXISTS `recrutement`;
CREATE TABLE IF NOT EXISTS `recrutement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `langue` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `wilaya` varchar(30) NOT NULL,
  `commune` varchar(30) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `cv1` varchar(50) NOT NULL,
  `cv2` varchar(50) NOT NULL,
  `cv3` varchar(50) NOT NULL,
  `assermente` varchar(10) NOT NULL,
  `fil` varchar(50) NOT NULL,
  `note` double NOT NULL,
  `Bloque` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recrutement`
--

INSERT INTO `recrutement` (`id`, `nom`, `prenom`, `langue`, `type`, `wilaya`, `commune`, `adresse`, `telephone`, `fax`, `email`, `mdp`, `cv1`, `cv2`, `cv3`, `assermente`, `fil`, `note`, `Bloque`) VALUES
(1, 'boulfoul', 'rayane', 'Arabe', 'Scientifique', 'boumerdes', 'thenia', 'hhh', '48766', '2344', 'gi_rekkas@esi.dz', 'imene123', 'Projet TDW 2019-2020.pdf', '', '', 'non', '', 12, 'non'),
(2, 'benaida', 'lydia', 'Anglais', 'General', 'boumerdes', 'thenia', 'rebatchi said street', '24', '2344', 'gl_benaida@esi.dz', 'imene123', 'Les outils de construction logiciel-gulp.pdf', '', '', 'oui', 'configuration-Jenkins.pdf', 0, 'non'),
(3, 'kouka', 'sonia', 'Arabe', 'Scientifique', 'boumerdes', 'thenia', 'rebatchi said street', '45678', '3467', 'gs_sonia@esi.dz', 'imene123', 'configuration-Jenkins.pdf', 'TP.pdf', '', 'non', '', 0, 'non'),
(8, 'bobo', 'ali', 'Arabe', 'Scientifique', 'boumerdes', 'thenia', 'rebatchi said street', '24', '24677899', 'ali@esi.dz', 'imene123', 'TP.pdf', '', '', 'non', '', 0, 'non');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `wilaya` varchar(50) NOT NULL,
  `commune` varchar(50) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `Bloque` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `wilaya`, `commune`, `adresse`, `telephone`, `fax`, `email`, `mdp`, `Bloque`) VALUES
(1, 'kadi', 'loucha', 'boumerdes', 'thenia', 'rebatchi said street', '48766', '3467', 'gl_kadi@esi.dz', 'imene123', 'non'),
(2, 'rekkas', 'imene', 'boumerdes', 'thenia', 'rebatchi said street', '45678', '4', 'rekkas@esi.dz', 'imene123', 'non');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
