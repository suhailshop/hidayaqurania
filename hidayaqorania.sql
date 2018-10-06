-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 07 oct. 2018 à 01:45
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hidayaqorania`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ISBN` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PictureURL` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `committees`
--

CREATE TABLE `committees` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Function` varchar(100) NOT NULL,
  `PictureURL` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `committesreports`
--

CREATE TABLE `committesreports` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Section` int(11) NOT NULL,
  `DoneRange` int(11) NOT NULL,
  `CurrentProgress` int(11) NOT NULL,
  `QualityDirection` int(11) NOT NULL,
  `Recommendations` varchar(45) DEFAULT NULL,
  `UpdatedRange` int(11) NOT NULL,
  `DateCommittee` date NOT NULL,
  `Reasons` varchar(45) DEFAULT NULL,
  `URL` varchar(45) NOT NULL,
  `President` int(11) NOT NULL,
  `Professor` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `configs`
--

CREATE TABLE `configs` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Code` varchar(50) NOT NULL,
  `DateStartInscription` date NOT NULL,
  `DateEndInscription` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Flag` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`ID`, `Code`, `Name`, `Flag`, `Status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'المغرب', 'mmmm', 'yes', '2018-10-06 23:17:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `criterias`
--

CREATE TABLE `criterias` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `ProposedScore` int(11) NOT NULL,
  `MaximumScore` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `divisions`
--

CREATE TABLE `divisions` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Section` int(11) NOT NULL,
  `Alias` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `examsfiles`
--

CREATE TABLE `examsfiles` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Provide` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `faculties`
--

CREATE TABLE `faculties` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PresidentName` varchar(100) DEFAULT NULL,
  `City` varchar(100) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Phonne` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `helps`
--

CREATE TABLE `helps` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` decimal(7,2) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Searcher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `nationalities`
--

CREATE TABLE `nationalities` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `nationalities`
--

INSERT INTO `nationalities` (`ID`, `Code`, `Name`, `Status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'مغربية', 'yes', '2018-10-06 23:17:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `provides`
--

CREATE TABLE `provides` (
  `ID` int(11) NOT NULL,
  `Searche` int(11) NOT NULL,
  `Book` int(11) NOT NULL,
  `TheoreticalDateTime` datetime DEFAULT NULL,
  `TheoreticalLocation` datetime DEFAULT NULL,
  `TheoreticalResult` decimal(5,2) DEFAULT NULL,
  `PracticalDateTime` datetime DEFAULT NULL,
  `PracticalResult` decimal(5,2) DEFAULT NULL,
  `InterviewDateTime` datetime DEFAULT NULL,
  `InterviewLocation` varchar(100) DEFAULT NULL,
  `InterviewResult` decimal(5,2) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `registrations`
--

CREATE TABLE `registrations` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `PassportNumber` varchar(50) DEFAULT NULL,
  `NationalNumber` varchar(50) DEFAULT NULL,
  `Fistname` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `BirthDate` date NOT NULL,
  `BirthCity` varchar(100) DEFAULT NULL,
  `Nationalitie` int(11) NOT NULL,
  `Countrie` int(11) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `CertificateType` varchar(255) NOT NULL,
  `CertificateDegree` varchar(200) NOT NULL,
  `InscriptionDate` date NOT NULL,
  `Type` varchar(100) NOT NULL,
  `University` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Phonne1` varchar(50) NOT NULL,
  `Phonne2` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `PictureURL` varchar(255) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `User` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `registrations`
--

INSERT INTO `registrations` (`ID`, `Code`, `PassportNumber`, `NationalNumber`, `Fistname`, `LastName`, `Gender`, `BirthDate`, `BirthCity`, `Nationalitie`, `Countrie`, `City`, `Location`, `CertificateType`, `CertificateDegree`, `InscriptionDate`, `Type`, `University`, `Faculty`, `Phonne1`, `Phonne2`, `Email`, `PictureURL`, `Status`, `User`, `updated_at`, `created_at`) VALUES
(11, NULL, 'badouch', 'badouch', 'badouch', 'badouch', 'ذكر', '2018-12-31', 'badouch', 1, 1, 'badouch', 'badouch', 'badouch', 'badouch', '2018-12-31', 'searcher', 'badouch', 'badouch', '5555555', NULL, 'badouch@gmail.com', '1538833869.jpg', 'yes', 54, '2018-10-06 11:51:09', '2018-10-06 11:51:09');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'student'),
(3, 'supervisor');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `searchersreports`
--

CREATE TABLE `searchersreports` (
  `ID` int(11) NOT NULL,
  `Code` varchar(100) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `TypeCyclic` varchar(45) NOT NULL,
  `Committee` int(11) NOT NULL,
  `Section` int(11) NOT NULL,
  `DateSearcher` date NOT NULL,
  `DoneRange` int(11) NOT NULL,
  `SessionsCount` int(11) NOT NULL,
  `HoursNumber` int(11) NOT NULL,
  `UpdatedRange` int(11) NOT NULL,
  `DateCommittee` date NOT NULL,
  `Reasons` mediumtext,
  `Difficulties` mediumtext,
  `Notes` mediumtext,
  `URL` varchar(255) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `searchs`
--

CREATE TABLE `searchs` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Alias` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `Division` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

CREATE TABLE `sections` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Alias` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `StopDateTime` datetime NOT NULL,
  `SearcherURL` varchar(255) DEFAULT NULL,
  `SupervisorURL` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `supervisorsreports`
--

CREATE TABLE `supervisorsreports` (
  `ID` int(11) NOT NULL,
  `Committee` int(11) NOT NULL,
  `Supervisor` int(11) NOT NULL,
  `TypeCyclic` char(1) NOT NULL,
  `DateSupervisor` date NOT NULL,
  `DoneRange` int(11) NOT NULL,
  `QualityProcess` varchar(20) NOT NULL,
  `QualityDirection` int(11) NOT NULL,
  `UpdatedRange` int(11) NOT NULL,
  `DateCommittee` date NOT NULL,
  `Difficulties` mediumtext,
  `NotesPositive` mediumtext,
  `NotesNegative` mediumtext,
  `URL` varchar(255) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `theses`
--

CREATE TABLE `theses` (
  `ID` int(11) NOT NULL,
  `Title` varchar(45) DEFAULT NULL,
  `ProgramDuration` varchar(45) DEFAULT NULL,
  `BeginningDate` varchar(45) DEFAULT NULL,
  `CompletionDate` varchar(45) DEFAULT NULL,
  `Notes` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Supervisor` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `universities`
--

CREATE TABLE `universities` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `President` varchar(255) NOT NULL,
  `Countrie` int(11) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Phonne` varchar(20) DEFAULT NULL,
  `Fax` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `ContractID` varchar(50) DEFAULT NULL,
  `ContractDate` date DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `universities`
--

INSERT INTO `universities` (`ID`, `Code`, `Name`, `President`, `Countrie`, `City`, `Location`, `Phonne`, `Fax`, `Email`, `Logo`, `ContractID`, `ContractDate`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'محمد السادس', 'الزبير محمودي', 1, 'الدار البيضاء', 'حي الورود', '0647412585', '0522149573', 'badouch.maroc@gmail.com', 'fileName1538685413.jpg', '2753', '2018-12-31', 'no', '2018-10-06 23:19:15', '2018-10-04 18:25:40'),
(3, NULL, 'جامعة القاضي عياض', 'عمر حسين الجابري', 1, 'مراكش', 'حي الزهور', '0627391548', '0523141185', 'badouch.maroc@gmail.com', 'fileName1538867590.jpg', '1455', '2018-12-31', 'yes', '2018-10-06 23:18:01', '2018-10-04 18:36:53');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(39, 'admin', 'admin@admin.com', '$2y$10$keJAuYnSmgndZMt57doE6u907gjNo8vpZPGicEwFU6ojU7ftAzupi', 1, 'XbaGa2MwQKmKjwMtspRsxhp7A8tN6DkptA50YXBTr0qYB1DtD6osqisdVl1v', '2018-10-06 23:22:06', '2018-10-03 08:22:44'),
(54, 'student', 'student@student.com', '$2y$10$keJAuYnSmgndZMt57doE6u907gjNo8vpZPGicEwFU6ojU7ftAzupi', 2, 'FmF2NopiBXtQYhJq0LHApPLmLNnTrdIjenuakDqnbSJkHLufSzB00X7PBCXV', '2018-10-06 23:22:54', '2018-10-06 11:51:08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `committesreports`
--
ALTER TABLE `committesreports`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_SearchersReports_Committees1_idx` (`President`),
  ADD KEY `fk_CommittesReports_Committees1_idx` (`Professor`),
  ADD KEY `fk_CommittesReports_Sections1_idx` (`Section`);

--
-- Index pour la table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Divisions_Sections1_idx` (`Section`);

--
-- Index pour la table `examsfiles`
--
ALTER TABLE `examsfiles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_ExamsFiles_Provides1_idx` (`Provide`);

--
-- Index pour la table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`ID`,`Searcher`),
  ADD KEY `fk_Helps_Searchers1_idx` (`Searcher`);

--
-- Index pour la table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `provides`
--
ALTER TABLE `provides`
  ADD PRIMARY KEY (`ID`,`Searche`,`Book`),
  ADD KEY `fk_Provides_Searchers1_idx` (`Searche`),
  ADD KEY `fk_Provides_Books1_idx` (`Book`);

--
-- Index pour la table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Registrations_Nationalities1` (`Nationalitie`),
  ADD KEY `fk_Registrations_Countries1` (`Countrie`),
  ADD KEY `User` (`User`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Index pour la table `searchersreports`
--
ALTER TABLE `searchersreports`
  ADD PRIMARY KEY (`ID`,`Searcher`,`Committee`,`Section`),
  ADD KEY `fk_SearchersReports_Searchers1_idx` (`Searcher`),
  ADD KEY `fk_SearchersReports_Committees1_idx` (`Committee`),
  ADD KEY `fk_SearchersReports_Sections1_idx` (`Section`);

--
-- Index pour la table `searchs`
--
ALTER TABLE `searchs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Searchs_Divisions1_idx` (`Division`);

--
-- Index pour la table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Sessions_Searchers1_idx` (`Searcher`);

--
-- Index pour la table `supervisorsreports`
--
ALTER TABLE `supervisorsreports`
  ADD PRIMARY KEY (`ID`,`Committee`,`Supervisor`),
  ADD KEY `fk_SearchersReports_Committees1_idx` (`Committee`),
  ADD KEY `fk_SearchersReports_copy1_Supervisors1_idx` (`Supervisor`);

--
-- Index pour la table `theses`
--
ALTER TABLE `theses`
  ADD PRIMARY KEY (`ID`,`Supervisor`,`Searcher`),
  ADD KEY `fk_Theses_Searchers1` (`Searcher`),
  ADD KEY `fk_Theses_Supervisors_idx` (`Supervisor`);

--
-- Index pour la table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`ID`,`Countrie`),
  ADD KEY `fk_Universities_Countries1` (`Countrie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `committees`
--
ALTER TABLE `committees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `committesreports`
--
ALTER TABLE `committesreports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `configs`
--
ALTER TABLE `configs`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `helps`
--
ALTER TABLE `helps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `searchersreports`
--
ALTER TABLE `searchersreports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `universities`
--
ALTER TABLE `universities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `committesreports`
--
ALTER TABLE `committesreports`
  ADD CONSTRAINT `fk_CommittesReports_Committees1` FOREIGN KEY (`Professor`) REFERENCES `committees` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CommittesReports_Sections1` FOREIGN KEY (`Section`) REFERENCES `sections` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SearchersReports_Committees100` FOREIGN KEY (`President`) REFERENCES `committees` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `fk_Divisions_Sections1` FOREIGN KEY (`Section`) REFERENCES `sections` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `examsfiles`
--
ALTER TABLE `examsfiles`
  ADD CONSTRAINT `fk_ExamsFiles_Provides1` FOREIGN KEY (`Provide`) REFERENCES `provides` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `helps`
--
ALTER TABLE `helps`
  ADD CONSTRAINT `fk_Helps_Searchers1` FOREIGN KEY (`Searcher`) REFERENCES `searchers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `provides`
--
ALTER TABLE `provides`
  ADD CONSTRAINT `fk_Provides_Books1` FOREIGN KEY (`Book`) REFERENCES `books` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Provides_Searchers1` FOREIGN KEY (`Searche`) REFERENCES `searchers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `fk` FOREIGN KEY (`User`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Registrations_Countries1` FOREIGN KEY (`Countrie`) REFERENCES `countries` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Registrations_Nationalities1` FOREIGN KEY (`Nationalitie`) REFERENCES `nationalities` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `searchersreports`
--
ALTER TABLE `searchersreports`
  ADD CONSTRAINT `fk_SearchersReports_Committees1` FOREIGN KEY (`Committee`) REFERENCES `committees` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SearchersReports_Searchers1` FOREIGN KEY (`Searcher`) REFERENCES `searchers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SearchersReports_Sections1` FOREIGN KEY (`Section`) REFERENCES `sections` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `searchs`
--
ALTER TABLE `searchs`
  ADD CONSTRAINT `fk_Searchs_Divisions1` FOREIGN KEY (`Division`) REFERENCES `divisions` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_Sessions_Searchers1` FOREIGN KEY (`Searcher`) REFERENCES `searchers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `supervisorsreports`
--
ALTER TABLE `supervisorsreports`
  ADD CONSTRAINT `fk_SearchersReports_Committees10` FOREIGN KEY (`Committee`) REFERENCES `committees` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SearchersReports_copy1_Supervisors1` FOREIGN KEY (`Supervisor`) REFERENCES `supervisors` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `theses`
--
ALTER TABLE `theses`
  ADD CONSTRAINT `fk_Theses_Searchers` FOREIGN KEY (`Searcher`) REFERENCES `searchers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Theses_Supervisors` FOREIGN KEY (`Supervisor`) REFERENCES `supervisors` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `universities`
--
ALTER TABLE `universities`
  ADD CONSTRAINT `fk_Universities_Countries1` FOREIGN KEY (`Countrie`) REFERENCES `countries` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
