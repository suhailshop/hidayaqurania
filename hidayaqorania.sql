-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 23 oct. 2018 à 13:15
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
  `Code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ISBN` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PictureURL` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`ID`, `Code`, `Name`, `Author`, `ISBN`, `PictureURL`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'كتاب 1', 'محمد', '111-1-1111-1111-1', 'fileName1540290101.jpg', 'yes', '2018-10-23 08:21:42', '2018-10-23 08:21:42');

-- --------------------------------------------------------

--
-- Structure de la table `committees`
--

CREATE TABLE `committees` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Function` varchar(100) NOT NULL,
  `PictureURL` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `committesreports`
--

CREATE TABLE `committesreports` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `configs`
--

CREATE TABLE `configs` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `DateStartInscription` date NOT NULL,
  `DateEndInscription` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Flag` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`ID`, `Code`, `Name`, `Flag`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'السعودية', 'fileName1539427410.png', 'yes', '2018-10-13 08:43:30', '2018-10-13 08:43:30'),
(3, NULL, 'موريطانيا', 'fileName1540290040.jpg', 'yes', '2018-10-23 08:20:41', '2018-10-23 08:20:41');

-- --------------------------------------------------------

--
-- Structure de la table `criterias`
--

CREATE TABLE `criterias` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `ProposedScore` int(11) NOT NULL,
  `MaximumScore` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `criterias`
--

INSERT INTO `criterias` (`ID`, `Code`, `Name`, `ProposedScore`, `MaximumScore`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'اللغة الانجليزية', 15, 30, 'yes', '2018-10-21 22:26:20', '2018-10-13 10:27:44'),
(2, NULL, 'اللغة العربية', 12, 20, 'yes', '2018-10-21 19:57:10', '2018-10-21 19:57:10');

-- --------------------------------------------------------

--
-- Structure de la table `divisions`
--

CREATE TABLE `divisions` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Section` int(11) NOT NULL,
  `Alias` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `divisions`
--

INSERT INTO `divisions` (`ID`, `Code`, `Section`, `Alias`, `Name`, `Order`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'الفصل 1', 'اسم السورة ، وفضلها ، واحوال نزولها', 1, 'yes', '2018-10-19 20:40:55', '0000-00-00 00:00:00'),
(2, NULL, 2, 'الفصل 1', 'الهدايات الجزئية والكلية في السورة', 1, 'yes', '2018-10-19 20:41:35', '0000-00-00 00:00:00'),
(3, NULL, 2, 'الفصل 2', ' مناسبات السورة وخصائصها وأساليبها في عرض هداياتها', 2, 'yes', '2018-10-19 20:41:56', '0000-00-00 00:00:00'),
(4, NULL, 1, 'الفصل 2', 'معاني السورة، ومقاصدها', 2, 'yes', '2018-10-19 20:41:11', '0000-00-00 00:00:00'),
(5, NULL, 2, 'الفصل 3', 'واقع الأمة في ضوء هدايات السورة وأثر ذلك عليها', 3, 'yes\r\n', '2018-10-19 20:42:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `examsfiles`
--

CREATE TABLE `examsfiles` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Provide` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `faculties`
--

CREATE TABLE `faculties` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `PresidentName` varchar(100) DEFAULT NULL,
  `City` varchar(100) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Phonne` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `University` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faculties`
--

INSERT INTO `faculties` (`ID`, `Code`, `Name`, `PresidentName`, `City`, `Location`, `Phonne`, `Fax`, `Email`, `Logo`, `University`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'كلية العلوم', 'رشيد العامل', 'تطوان', '158 شارع المقاومة', '0002526969', '0635288745', 'badouch.maroc@gmail.com', 'fileName1539430010.jpg', 3, 'yes', '2018-10-23 11:14:08', '2018-10-13 09:26:50');

-- --------------------------------------------------------

--
-- Structure de la table `helps`
--

CREATE TABLE `helps` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
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
-- Structure de la table `meetings`
--

CREATE TABLE `meetings` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `meetings`
--

INSERT INTO `meetings` (`ID`, `Date`, `Name`, `Location`, `created_at`, `updated_at`) VALUES
(2, '2018-12-31', 'لقاء تعريفي', 'جدة', '2018-10-23 08:12:57', '2018-10-23 08:12:57');

-- --------------------------------------------------------

--
-- Structure de la table `meetings_searchers`
--

CREATE TABLE `meetings_searchers` (
  `ID` int(11) NOT NULL,
  `Meeting` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `Status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `meetings_searchers`
--

INSERT INTO `meetings_searchers` (`ID`, `Meeting`, `Searcher`, `Status`, `created_at`) VALUES
(2, 2, 11, 'yes', '2018-10-23 10:13:23'),
(3, 2, 11, 'yes', '2018-10-23 10:13:41');

-- --------------------------------------------------------

--
-- Structure de la table `nationalities`
--

CREATE TABLE `nationalities` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `nationalities`
--

INSERT INTO `nationalities` (`ID`, `Code`, `Name`, `Status`, `created_at`, `updated_at`) VALUES
(1, '1', 'مغربية', 'no', '2018-10-13 12:15:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `provides`
--

CREATE TABLE `provides` (
  `ID` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
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
  `Countrie` int(11) DEFAULT NULL,
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
(11, NULL, 'badouch', 'badouch', 'بادوش', 'محمد', 'ذكر', '2018-12-31', 'الداخلة', 1, 2, 'جدة', 'شارع الورود اقامة الياسمين', 'badouch', 'badouch', '2018-12-31', 'searcher', 'badouch', 'badouch', '5555555', NULL, 'badouch@gmail.com', '1538833869.jpg', 'yes', 54, '2018-10-13 14:23:52', '2018-10-06 11:51:09'),
(12, NULL, 'US526334', '1524114758', 'supervisor', 'supervisor', 'ذكر', '2018-12-31', 'مكة', 1, 2, 'جدة', '158 شارع المقاومة', 'ماجستر', 'درجة', '2018-12-31', 'supervisor', 'جامعة مولاي عبد الله', 'كلية الاتصال', '55555555555555', NULL, 'supervisor@supervisor.com', '1539893309.jpg', 'yes', 55, '2018-10-18 18:08:29', '2018-10-18 18:08:29');

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
  `Code` varchar(100) DEFAULT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `searcher_critera`
--

CREATE TABLE `searcher_critera` (
  `Searcher` int(11) NOT NULL,
  `Criteria` int(11) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `searcher_critera`
--

INSERT INTO `searcher_critera` (`Searcher`, `Criteria`, `Status`) VALUES
(11, 1, 'yes'),
(11, 2, 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `searchs`
--

CREATE TABLE `searchs` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Alias` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `SearchURL` text NOT NULL,
  `Division` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `Note` text,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `searchs`
--

INSERT INTO `searchs` (`ID`, `Code`, `Alias`, `Name`, `Order`, `SearchURL`, `Division`, `Searcher`, `Note`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'المبحث2', 'المبحث1', 1, 'fileName1540123896.pdf', 5, 11, 'جيد جدا', 'no', '2018-10-21 18:28:56', '2018-10-21 08:17:53');

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

CREATE TABLE `sections` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Alias` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sections`
--

INSERT INTO `sections` (`ID`, `Code`, `Alias`, `Name`, `Order`, `Status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'القسم 1', 'مقدمات تفسيرية لدراسة هدايات السورة', 1, 'yes', '2018-10-19 20:40:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, NULL, 'القسم 2', 'دراسات تطبيقية في هدايات السورة وربط ذلك بواقع الأمة', 2, 'yes', '2018-10-19 20:40:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Searcher` int(11) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `StopDateTime` datetime NOT NULL,
  `SearcherURL` varchar(255) DEFAULT NULL,
  `SupervisorURL` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
  `Supervisor` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `theses`
--

INSERT INTO `theses` (`ID`, `Title`, `ProgramDuration`, `BeginningDate`, `CompletionDate`, `Notes`, `Status`, `created_at`, `Supervisor`, `Searcher`) VALUES
(3, 'فقه الحديث', 'سنتين', '2018-01-01', '2020-01-01', 'لا شيء', 'yes', '2018-10-19 20:15:51', 12, 11);

-- --------------------------------------------------------

--
-- Structure de la table `universities`
--

CREATE TABLE `universities` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `President` varchar(255) NOT NULL,
  `Countrie` int(11) DEFAULT NULL,
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
(2, NULL, 'محمد السادس', 'الزبير محمودي', 2, 'الدار البيضاء', 'حي الورود', '0647412585', '0522149573', 'badouch.maroc@gmail.com', 'fileName1538685413.jpg', '2753', '2018-12-31', 'no', '2018-10-13 11:14:52', '2018-10-04 18:25:40'),
(3, NULL, 'جامعة القاضي عياض', 'عمر حسين الجابري', 2, 'مراكش', 'حي الزهور', '0627391548', '0523141185', 'badouch.maroc@gmail.com', 'fileName1538867590.jpg', '1455', '2018-12-31', 'yes', '2018-10-13 11:14:58', '2018-10-04 18:36:53');

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
(39, 'admin', 'admin@admin.com', '$2y$10$keJAuYnSmgndZMt57doE6u907gjNo8vpZPGicEwFU6ojU7ftAzupi', 1, 'qNlX2g7xBmxMv4x9TEuQFaaRQBu8Pzf6N1bF4Om4BrRu5gKg8S3FQhqvljoo', '2018-10-19 21:05:17', '2018-10-03 08:22:44'),
(54, 'student', 'student@student.com', '$2y$10$keJAuYnSmgndZMt57doE6u907gjNo8vpZPGicEwFU6ojU7ftAzupi', 2, '5E4MaKjYAVTSw02eZO96hrUgodSCcGTk5VqLiL7YCuSao9qCtUKsrpufDYwI', '2018-10-21 12:39:19', '2018-10-06 11:51:08'),
(55, 'supervisor', 'supervisor@supervisor.com', '$2y$10$98N4xru.BXg0U7VSZM6wduzmW5p0.2/tZYGb.o08nFgEs6XsZucpu', 3, 'TReEGdjsr0GmXr3wrnKicKmY8UBYUvWde6SFxJFHzOBgkAxBC2G2iugVTA1d', '2018-10-21 18:34:07', '2018-10-18 18:08:29');

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
  ADD PRIMARY KEY (`ID`),
  ADD KEY `University` (`University`);

--
-- Index pour la table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`ID`,`Searcher`),
  ADD KEY `fk_Helps_Searchers1_idx` (`Searcher`);

--
-- Index pour la table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `meetings_searchers`
--
ALTER TABLE `meetings_searchers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Meeting` (`Meeting`),
  ADD KEY `Searcher` (`Searcher`);

--
-- Index pour la table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `provides`
--
ALTER TABLE `provides`
  ADD PRIMARY KEY (`ID`,`Searcher`,`Book`),
  ADD KEY `fk_Provides_Searchers1_idx` (`Searcher`),
  ADD KEY `fk_Provides_Books1_idx` (`Book`);

--
-- Index pour la table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User` (`User`),
  ADD KEY `dm` (`Countrie`),
  ADD KEY `Nationalitie` (`Nationalitie`);

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
-- Index pour la table `searcher_critera`
--
ALTER TABLE `searcher_critera`
  ADD PRIMARY KEY (`Searcher`,`Criteria`),
  ADD KEY `Criteria` (`Criteria`);

--
-- Index pour la table `searchs`
--
ALTER TABLE `searchs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Searchs_Divisions1_idx` (`Division`),
  ADD KEY `Searcher` (`Searcher`);

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
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `Countrie` (`Countrie`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `helps`
--
ALTER TABLE `helps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `meetings_searchers`
--
ALTER TABLE `meetings_searchers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT pour la table `searchs`
--
ALTER TABLE `searchs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `theses`
--
ALTER TABLE `theses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `universities`
--
ALTER TABLE `universities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
-- Contraintes pour la table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`University`) REFERENCES `universities` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `helps`
--
ALTER TABLE `helps`
  ADD CONSTRAINT `fk_Helps_Searchers1` FOREIGN KEY (`Searcher`) REFERENCES `searchers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `meetings_searchers`
--
ALTER TABLE `meetings_searchers`
  ADD CONSTRAINT `meetings_searchers_ibfk_1` FOREIGN KEY (`Meeting`) REFERENCES `meetings` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `meetings_searchers_ibfk_2` FOREIGN KEY (`Searcher`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `provides`
--
ALTER TABLE `provides`
  ADD CONSTRAINT `fk_Provides_Books1` FOREIGN KEY (`Book`) REFERENCES `books` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Provides_Searchers1` FOREIGN KEY (`Searcher`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `dm` FOREIGN KEY (`Countrie`) REFERENCES `countries` (`ID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk` FOREIGN KEY (`User`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registrations_ibfk_1` FOREIGN KEY (`Nationalitie`) REFERENCES `nationalities` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `searchersreports`
--
ALTER TABLE `searchersreports`
  ADD CONSTRAINT `fk_SearchersReports_Committees1` FOREIGN KEY (`Committee`) REFERENCES `committees` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SearchersReports_Searchers1` FOREIGN KEY (`Searcher`) REFERENCES `searchers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SearchersReports_Sections1` FOREIGN KEY (`Section`) REFERENCES `sections` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `searcher_critera`
--
ALTER TABLE `searcher_critera`
  ADD CONSTRAINT `searcher_critera_ibfk_1` FOREIGN KEY (`Searcher`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `searcher_critera_ibfk_2` FOREIGN KEY (`Criteria`) REFERENCES `criterias` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `searchs`
--
ALTER TABLE `searchs`
  ADD CONSTRAINT `fk_Searchs_Divisions1` FOREIGN KEY (`Division`) REFERENCES `divisions` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `searchs_ibfk_1` FOREIGN KEY (`Searcher`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_Theses_Searchers` FOREIGN KEY (`Searcher`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Theses_Supervisors` FOREIGN KEY (`Supervisor`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `universities`
--
ALTER TABLE `universities`
  ADD CONSTRAINT `universities_ibfk_1` FOREIGN KEY (`Countrie`) REFERENCES `countries` (`ID`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
