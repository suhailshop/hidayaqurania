-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 04 nov. 2018 à 23:47
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

--
-- Déchargement des données de la table `committees`
--

INSERT INTO `committees` (`ID`, `Code`, `FirstName`, `LastName`, `Gender`, `Function`, `PictureURL`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mm', 'mmm', 'mm', 'mm', NULL, 'mm', '2018-10-27 23:23:22', '0000-00-00 00:00:00');

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
  `President` text NOT NULL,
  `Professor` text NOT NULL,
  `Committee` int(11) NOT NULL,
  `Searcherreports` int(11) DEFAULT NULL,
  `Supervisorreports` int(11) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `committesreports`
--

INSERT INTO `committesreports` (`ID`, `Code`, `Section`, `DoneRange`, `CurrentProgress`, `QualityDirection`, `Recommendations`, `UpdatedRange`, `DateCommittee`, `Reasons`, `URL`, `President`, `Professor`, `Committee`, `Searcherreports`, `Supervisorreports`, `Status`, `created_at`, `updated_at`) VALUES
(5, NULL, 1, 1, 1, 1, 'mmm', 1, '2018-12-31', 'mm', 'fileName1540760566.pdf', 'mmmm', 'llll', 1, 3, NULL, 'yes', '2018-10-28 20:02:47', '2018-10-28 20:02:47'),
(6, NULL, 1, 1, 1, 1, '1', 1, '0001-01-01', '1', 'fileName1540760611.docx', '1', '1', 1, 4, NULL, 'yes', '2018-10-28 20:03:31', '2018-10-28 20:03:31'),
(7, NULL, 2, 2, 2, 2, '2', 2, '0002-02-02', '22', 'fileName1540761340.docx', '2', '2', 1, NULL, 1, 'yes', '2018-10-28 20:15:40', '2018-10-28 20:15:40');

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
(1, '1', 1, '', '   الفصل الأول : اسم السورة ، وفضلها ، واحوال نزولها', 3, 'yes', '2018-11-04 21:38:11', '2018-10-27 05:43:40'),
(2, '2', 1, '', ' الفصل الثاني : معاني السورة، ومقاصدها', 4, 'yes', '2018-11-04 17:54:03', '2018-10-27 05:43:40'),
(3, '3', 2, '', 'الفصل الأول : الهدايات الجزئية والكلية في السورة', 5, 'yes', '2018-11-04 17:54:10', '2018-10-27 05:43:42'),
(4, '4', 2, '', ' الفصل الثاني : مناسبات السورة وخصائصها وأساليبها في عرض هداياتها', 6, 'yes', '2018-11-04 17:58:33', '2018-10-27 05:43:42'),
(5, '5', 2, '', ' الفصل الثالث : واقع الأمة في ضوء هدايات السورة وأثر ذلك عليها', 7, 'yes', '2018-11-04 17:58:39', '2018-10-27 05:43:42'),
(6, '6', 3, 'مقدمة', 'مقدمة', 1, 'yes', '2018-11-02 19:27:06', '0000-00-00 00:00:00'),
(7, '7', 4, 'تمهيد', 'تمهيد', 2, 'yes', '2018-11-02 19:27:11', '0000-00-00 00:00:00'),
(8, '8', 5, 'خاتمة', 'خاتمة', 8, 'yes', '2018-11-02 19:26:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `divisionunits`
--

CREATE TABLE `divisionunits` (
  `id` int(11) NOT NULL,
  `Code` int(11) NOT NULL,
  `Division` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `divisionunits`
--

INSERT INTO `divisionunits` (`id`, `Code`, `Division`, `Name`, `Description`, `Order`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'المبحث الأول : أسماء السورة.', '', 3, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(2, 2, 1, 'المبحث الثاني :  فضائل السورة أو بعض آياتها بما جاءت به الأحاديث الصحيحة.', '', 4, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(3, 3, 1, 'المبحث الثالث: أحوال نزول السورة.', '', 5, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(4, 4, 2, 'المبحث الأول: مقاصد السورة العامة ومدى دلالاتها على هدايات السورة.', '', 6, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(5, 5, 2, 'المبحث الثاني: معاني مفردات السورة ومدى دلالاتها على هدايات السورة.', '', 7, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(6, 6, 2, 'المبحث الثالث: المعنى الاجمالي للسورة بما يتوافق مع هدايات السورة.', '', 8, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(7, 7, 3, 'المبحث الأول : الهدايات الجزئية في السورة.', '', 9, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(8, 8, 3, 'المبحث الثاني :  الهدايات الكلية للسورة.', '', 10, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(9, 9, 4, 'المبحث الأول: المناسبات المتعلقة بهدايات آيات السورة.', '', 11, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(10, 10, 4, 'المبحث الثاني: خصائص هدايات آيات السورة.', '', 12, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(11, 11, 4, 'المبحث الثالث: أساليب السورة في عرض هداياتها', '', 13, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(12, 12, 5, 'المبحث الأول: واقع الفرد والمجتمع من هدايات السورة.', '', 14, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(13, 13, 5, 'المبحث الثاني: سبل تحقيق هدايات آيات السورة في واقع الأمة', '', 15, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(14, 14, 5, 'المبحث الثالث: أثر تطبيق هدايات آيات السورة على واقع الأمة', '', 16, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(15, 15, 6, 'مقدمة', '', 1, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(16, 16, 7, 'تمهيد', '', 2, '2018-10-27 16:19:43', '2018-10-27 16:19:43'),
(17, 17, 8, 'خاتمة', '', 17, '2018-10-27 16:19:43', '2018-10-27 16:19:43');

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
(11, NULL, 'badouch', 'badouch', 'بادوش', 'محمد', 'ذكر', '2018-12-31', 'الداخلة', 1, 2, 'جدة', 'شارع الورود اقامة الياسمين', 'badouch', 'badouch', '2018-12-31', 'searcher', 'badouch', 'badouch', '+33601106930', NULL, 'badouch.maroc@gmail.com', '1538833869.jpg', 'yes', 54, '2018-10-25 10:48:40', '2018-10-06 11:51:09'),
(12, NULL, 'US526334', '1524114758', 'supervisor', 'supervisor', 'ذكر', '2018-12-31', 'مكة', 1, 2, 'جدة', '158 شارع المقاومة', 'ماجستر', 'درجة', '2018-12-31', 'supervisor', 'جامعة مولاي عبد الله', 'كلية الاتصال', '+966506087020', NULL, 'badouch.maroc@gmail.com', '1539893309.jpg', 'yes', 55, '2018-10-25 10:44:12', '2018-10-18 18:08:29');

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

--
-- Déchargement des données de la table `searchersreports`
--

INSERT INTO `searchersreports` (`ID`, `Code`, `Searcher`, `TypeCyclic`, `Section`, `DateSearcher`, `DoneRange`, `SessionsCount`, `HoursNumber`, `UpdatedRange`, `DateCommittee`, `Reasons`, `Difficulties`, `Notes`, `URL`, `Status`, `created_at`, `updated_at`) VALUES
(3, NULL, 11, 'صنف 1', 2, '2018-10-10', 1, 1, 1, 1, '2018-12-01', 'sll', 'll', 'll', 'fileName1540679376.pdf', 'yes', '2018-10-27 23:03:13', '2018-10-27 20:29:36'),
(4, NULL, 11, '1', 2, '2018-12-31', 1, 1, 1, 1, '2018-12-31', '1', '1', '1', 'fileName1540683103.pdf', 'yes', '2018-10-27 21:31:43', '2018-10-27 21:31:43');

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
  `Progress` text NOT NULL,
  `Divisionunit` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `searchs`
--

INSERT INTO `searchs` (`ID`, `Code`, `Alias`, `Name`, `Order`, `SearchURL`, `Division`, `Searcher`, `Note`, `Progress`, `Divisionunit`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'المبحث2', 'المبحث1', 1, 'fileName1540123896.pdf', 5, 11, 'يممثككبمم', 'رفض الادارة', 12, 'no', '2018-11-04 22:41:42', '2018-10-21 08:17:53'),
(2, NULL, 'llll', 'lllll', 5, 'fileName1541338106.pdf', 5, 11, NULL, 'موافقة المشرف', 13, 'yes', '2018-11-04 22:40:12', '2018-11-04 12:28:27'),
(3, NULL, 'المبحث 22', 'مبحثي', 22, 'fileName1541367786.pdf', 5, 11, NULL, 'تم الرفع', 14, 'yes', '2018-11-04 20:43:06', '2018-11-04 20:43:06'),
(4, NULL, 'بحثي', 'بحثي', 20, 'fileName1541368009.pdf', 6, 11, 'kkkkkk', 'موافقة الادارة', 15, 'yes', '2018-11-04 22:46:47', '2018-11-04 20:46:49');

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
(1, '1', 'Section One', 'القسم الأول : مقدمات تفسيرية لدراسة هدايات السورة ', 3, 'yes', '2018-11-04 18:39:50', '2018-10-27 05:26:31', '0000-00-00 00:00:00'),
(2, '2', 'Section Two', 'القسم الثاني : دراسات تطبيقية في هدايات السورة وربط ذلك بواقع الأمة', 4, 'yes', '2018-11-04 18:39:54', '2018-10-27 05:26:34', '0000-00-00 00:00:00'),
(3, '3', 'مقدمة', 'مقدمة', 1, 'yes', '2018-11-04 18:39:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '4', 'تمهيد', 'تمهيد', 2, 'yes', '2018-11-04 18:39:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '5', 'خاتمة', 'خاتمة', 5, 'yes', '2018-11-02 19:24:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `Supervisor` int(11) NOT NULL,
  `TypeCyclic` varchar(45) NOT NULL,
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
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `supervisorsreports`
--

INSERT INTO `supervisorsreports` (`ID`, `Supervisor`, `TypeCyclic`, `DateSupervisor`, `DoneRange`, `QualityProcess`, `QualityDirection`, `UpdatedRange`, `DateCommittee`, `Difficulties`, `NotesPositive`, `NotesNegative`, `URL`, `Status`, `created_at`, `updated_at`) VALUES
(1, 12, 'صنف 1', '2018-10-18', 10, '2', 3, 5, '2018-10-17', 'oooo', 'llll', 'pppp', 'fileName1540748008.pdf', 'no', '2018-10-28 18:10:51', '2018-10-28 16:33:28');

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
(3, 'الهدايات القرآنية في سورة الانفال', 'سنتين', '2018-01-01', '2020-01-01', 'لا شيء', 'yes', '2018-11-04 17:49:45', 12, 11);

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
(39, 'admin', 'admin@admin.com', '$2y$10$keJAuYnSmgndZMt57doE6u907gjNo8vpZPGicEwFU6ojU7ftAzupi', 1, 'EvpfsIhiRJrthOCo7wAplHs6x8jMAAm2yF0dpYw6yT1tHCvc9sAxnpGi7gvf', '2018-11-04 22:40:54', '2018-10-03 08:22:44'),
(54, 'student', 'student@student.com', '$2y$10$keJAuYnSmgndZMt57doE6u907gjNo8vpZPGicEwFU6ojU7ftAzupi', 2, 'gbjAewSFmCe89TZNXYOzpWOckrINBMcQ44i2DUZLEXUwPdGMvCH1kHzQMl6z', '2018-11-04 21:48:52', '2018-10-06 11:51:08'),
(55, 'supervisor', 'supervisor@supervisor.com', '$2y$10$98N4xru.BXg0U7VSZM6wduzmW5p0.2/tZYGb.o08nFgEs6XsZucpu', 3, '8QbFZmwn6w74tWbEiXDWGb0rrPqnyABe1ASJuZlt1u60s7rM6ZSDG1Fmyxhf', '2018-11-04 22:40:27', '2018-10-18 18:08:29');

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
  ADD KEY `fk_CommittesReports_Sections1_idx` (`Section`),
  ADD KEY `Committee` (`Committee`),
  ADD KEY `Searcherreports` (`Searcherreports`),
  ADD KEY `Supervisorreports` (`Supervisorreports`);

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
-- Index pour la table `divisionunits`
--
ALTER TABLE `divisionunits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Division` (`Division`);

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
  ADD PRIMARY KEY (`ID`,`Searcher`,`Section`),
  ADD KEY `fk_SearchersReports_Searchers1_idx` (`Searcher`),
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
  ADD KEY `Searcher` (`Searcher`),
  ADD KEY `Divisionunit` (`Divisionunit`);

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
  ADD PRIMARY KEY (`ID`,`Supervisor`),
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `committesreports`
--
ALTER TABLE `committesreports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `divisionunits`
--
ALTER TABLE `divisionunits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `searchs`
--
ALTER TABLE `searchs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `supervisorsreports`
--
ALTER TABLE `supervisorsreports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `committesreports_ibfk_2` FOREIGN KEY (`Searcherreports`) REFERENCES `searchersreports` (`ID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_CommittesReports_Sections1` FOREIGN KEY (`Section`) REFERENCES `sections` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_committee` FOREIGN KEY (`Committee`) REFERENCES `committees` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sup` FOREIGN KEY (`Supervisorreports`) REFERENCES `supervisorsreports` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `fk_Divisions_Sections1` FOREIGN KEY (`Section`) REFERENCES `sections` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `divisionunits`
--
ALTER TABLE `divisionunits`
  ADD CONSTRAINT `divisionunits_ibfk_1` FOREIGN KEY (`Division`) REFERENCES `divisions` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_SearchersReports_Searchers1` FOREIGN KEY (`Searcher`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
  ADD CONSTRAINT `fk_div_univ` FOREIGN KEY (`Divisionunit`) REFERENCES `divisionunits` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
  ADD CONSTRAINT `fk_SearchersReports_copy1_Supervisors1` FOREIGN KEY (`Supervisor`) REFERENCES `registrations` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
