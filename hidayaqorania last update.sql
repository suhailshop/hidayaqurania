-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2019 at 03:54 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hidayaqorania`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin2_reports`
--

DROP TABLE IF EXISTS `admin2_reports`;
CREATE TABLE IF NOT EXISTS `admin2_reports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `search` int(11) NOT NULL,
  `q1` varchar(1000) NOT NULL,
  `q2` varchar(1000) NOT NULL,
  `q3` varchar(1000) NOT NULL,
  `q4` varchar(1000) NOT NULL,
  `q5` varchar(1000) NOT NULL,
  `note` varchar(500) NOT NULL,
  `filename` text,
  `date` text NOT NULL,
  `admin2` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin2_reports`
--

INSERT INTO `admin2_reports` (`ID`, `search`, `q1`, `q2`, `q3`, `q4`, `q5`, `note`, `filename`, `date`, `admin2`) VALUES
(3, 1, 'mpm', 'm', 'm', 'm', 'm', 'm', 'fileName1549575501.pdf', '2019-02-22', 'admin'),
(4, 10, '2', '2', '2', '2', '2', '2', 'fileName1551256171.pdf', '2019-02-27', 'د أحمد الفريح'),
(5, 16, 'سشيبشسيب', 'شسيبسشب', 'شسيبشسيب', 'شسيبشسيب', 'شسيبسيب', 'سشيبسشيبشسيب', 'fileName1551517897.JPG', '2019-03-02', 'admin2'),
(6, 9, 'sdfasfd', 'asdfasdf', 'sadfdsa', 'sadfsdf', 'sadfsd', 'sdafasdfasdf', '', '2019-03-02', 'admin2'),
(7, 12, 'sdgfsdfg', 'dfgsdfg', 'dfgdfg', 'dfgdg', 'dfgdfg', 'dfgdfg', '', '2019-03-02', 'admin2'),
(8, 11, 'grgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfgd', '', '2019-03-02', 'admin2'),
(9, 6, 'كمنت شسيمبنت سشيكمنبت شسمكينتب شكسمنتب كمشسنتيب مكشسنيتب سيمنتب مكشسنيتب كمسنيتب كسمنيتب كسمنيتب مشسكنيتب مكشسنيتب مسيكنتب\r\nشسكيمنبت سمكنبت مشسكنتب مسنتبشمكسنتب مكسيتب منسكبت شمسكينبت كمشسينتب مسنتب كمسشنيتب مكسينتب مسكنبت شسكمنيتب مشسكينتب \r\nشسيكمنبت شسيمكنبت شسميتب شكسمينتب شمكسنيتب شمسكنيتب كمشسنتيب مكشسينتب مكشسنيتب منسشيتب مكشسنيتب مشسنيتب مشسكنيتب شسكمينبت \r\nشكسمينتب كشمسينتب مكنشتسيبمك نتشسيمبنت شمسكينتب مكشنستيب مكشنستيبمكنشت سيمكبتن مسشنيتب شسمينكتب', 'كمنت شسيمبنت سشيكمنبت شسمكينتب شكسمنتب كمشسنتيب مكشسنيتب سيمنتب مكشسنيتب كمسنيتب كسمنيتب كسمنيتب مشسكنيتب مكشسنيتب مسيكنتب\r\nشسكيمنبت سمكنبت مشسكنتب مسنتبشمكسنتب مكسيتب منسكبت شمسكينبت كمشسينتب مسنتب كمسشنيتب مكسينتب مسكنبت شسكمنيتب مشسكينتب \r\nشسيكمنبت شسيمكنبت شسميتب شكسمينتب شمكسنيتب شمسكنيتب كمشسنتيب مكشسينتب مكشسنيتب منسشيتب مكشسنيتب مشسنيتب مشسكنيتب شسكمينبت \r\nشكسمينتب كشمسينتب مكنشتسيبمك نتشسيمبنت شمسكينتب مكشنستيب مكشنستيبمكنشت سيمكبتن مسشنيتب شسمينكتب', 'كمنت شسيمبنت سشيكمنبت شسمكينتب شكسمنتب كمشسنتيب مكشسنيتب سيمنتب مكشسنيتب كمسنيتب كسمنيتب كسمنيتب مشسكنيتب مكشسنيتب مسيكنتب\r\nشسكيمنبت سمكنبت مشسكنتب مسنتبشمكسنتب مكسيتب منسكبت شمسكينبت كمشسينتب مسنتب كمسشنيتب مكسينتب مسكنبت شسكمنيتب مشسكينتب \r\nشسيكمنبت شسيمكنبت شسميتب شكسمينتب شمكسنيتب شمسكنيتب كمشسنتيب مكشسينتب مكشسنيتب منسشيتب مكشسنيتب مشسنيتب مشسكنيتب شسكمينبت \r\nشكسمينتب كشمسينتب مكنشتسيبمك نتشسيمبنت شمسكينتب مكشنستيب مكشنستيبمكنشت سيمكبتن مسشنيتب شسمينكتب', 'كمنت شسيمبنت سشيكمنبت شسمكينتب شكسمنتب كمشسنتيب مكشسنيتب سيمنتب مكشسنيتب كمسنيتب كسمنيتب كسمنيتب مشسكنيتب مكشسنيتب مسيكنتب\r\nشسكيمنبت سمكنبت مشسكنتب مسنتبشمكسنتب مكسيتب منسكبت شمسكينبت كمشسينتب مسنتب كمسشنيتب مكسينتب مسكنبت شسكمنيتب مشسكينتب \r\nشسيكمنبت شسيمكنبت شسميتب شكسمينتب شمكسنيتب شمسكنيتب كمشسنتيب مكشسينتب مكشسنيتب منسشيتب مكشسنيتب مشسنيتب مشسكنيتب شسكمينبت \r\nشكسمينتب كشمسينتب مكنشتسيبمك نتشسيمبنت شمسكينتب مكشنستيب مكشنستيبمكنشت سيمكبتن مسشنيتب شسمينكتب', 'كمنت شسيمبنت سشيكمنبت شسمكينتب شكسمنتب كمشسنتيب مكشسنيتب سيمنتب مكشسنيتب كمسنيتب كسمنيتب كسمنيتب مشسكنيتب مكشسنيتب مسيكنتب\r\nشسكيمنبت سمكنبت مشسكنتب مسنتبشمكسنتب مكسيتب منسكبت شمسكينبت كمشسينتب مسنتب كمسشنيتب مكسينتب مسكنبت شسكمنيتب مشسكينتب \r\nشسيكمنبت شسيمكنبت شسميتب شكسمينتب شمكسنيتب شمسكنيتب كمشسنتيب مكشسينتب مكشسنيتب منسشيتب مكشسنيتب مشسنيتب مشسكنيتب شسكمينبت \r\nشكسمينتب كشمسينتب مكنشتسيبمك نتشسيمبنت شمسكينتب مكشنستيب مكشنستيبمكنشت سيمكبتن مسشنيتب شسمينكتب', 'كمنت شسيمبنت سشيكمنبت شسمكينتب شكسمنتب كمشسنتيب مكشسنيتب سيمنتب مكشسنيتب كمسنيتب كسمنيتب كسمنيتب مشسكنيتب مكشسنيتب مسيكنتب\r\nشسكيمنبت سمكنبت مشسكنتب مسنتبشمكسنتب مكسيتب منسكبت شمسكينبت كمشسينتب مسنتب كمسشنيتب مكسينتب مسكنبت شسكمنيتب مشسكينتب \r\nشسيكمنبت شسيمكنبت شسميتب شكسمينتب شمكسنيتب شمسكنيتب كمشسنتيب مكشسينتب مكشسنيتب منسشيتب مكشسنيتب مشسنيتب مشسكنيتب شسكمينبت \r\nشكسمينتب كشمسينتب مكنشتسيبمك نتشسيمبنت شمسكينتب مكشنستيب مكشنستيبمكنشت سيمكبتن مسشنيتب شسمينكتب', '', '2019-03-02', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `URL` text,
  `ISBN` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PictureURL` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `Code`, `Name`, `Author`, `URL`, `ISBN`, `PictureURL`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'كتاب 1', 'محمد', 'https://www.google.com/pdf.pdf', 'هذا الكتاب خاص بطلاب الدكتوراة والباحثين في تفسير  القرآن', 'fileName1541702624.PNG', 'yes', '2019-03-01 21:20:20', '2018-10-23 08:21:42'),
(3, NULL, 'مرجع تجريبي15', 'د طه عابدين', 'www.binmosa.com', 'اصول التفسير', NULL, 'yes', '2019-03-02 04:58:04', '2019-03-02 04:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

DROP TABLE IF EXISTS `committees`;
CREATE TABLE IF NOT EXISTS `committees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Function` varchar(100) NOT NULL,
  `PictureURL` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`ID`, `Code`, `FirstName`, `LastName`, `Gender`, `Function`, `PictureURL`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mm', 'mmm', 'mm', 'mm', NULL, 'mm', '2018-10-27 23:23:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `committesreports`
--

DROP TABLE IF EXISTS `committesreports`;
CREATE TABLE IF NOT EXISTS `committesreports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`),
  KEY `fk_CommittesReports_Sections1_idx` (`Section`),
  KEY `Committee` (`Committee`),
  KEY `Searcherreports` (`Searcherreports`),
  KEY `Supervisorreports` (`Supervisorreports`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committesreports`
--

INSERT INTO `committesreports` (`ID`, `Code`, `Section`, `DoneRange`, `CurrentProgress`, `QualityDirection`, `Recommendations`, `UpdatedRange`, `DateCommittee`, `Reasons`, `URL`, `President`, `Professor`, `Committee`, `Searcherreports`, `Supervisorreports`, `Status`, `created_at`, `updated_at`) VALUES
(5, NULL, 1, 1, 1, 1, 'mmm', 1, '2018-12-31', 'mm', 'fileName1540760566.pdf', 'mmmm', 'llll', 1, 3, NULL, 'yes', '2018-10-28 20:02:47', '2018-10-28 20:02:47'),
(6, NULL, 1, 1, 1, 1, '1', 1, '0001-01-01', '1', 'fileName1540760611.docx', '1', '1', 1, 4, NULL, 'yes', '2018-10-28 20:03:31', '2018-10-28 20:03:31'),
(7, NULL, 2, 2, 2, 2, '2', 2, '0002-02-02', '22', 'fileName1540761340.docx', '2', '2', 1, NULL, 1, 'yes', '2018-10-28 20:15:40', '2018-10-28 20:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
CREATE TABLE IF NOT EXISTS `configs` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `DateStartInscription` date NOT NULL,
  `DateEndInscription` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Flag` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`ID`, `Code`, `Name`, `Flag`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'السعودية', 'fileName1539427410.png', 'yes', '2018-10-13 08:43:30', '2018-10-13 08:43:30'),
(3, NULL, 'السودان', 'fileName1540290040.jpg', 'yes', '2019-02-25 23:15:17', '2018-10-23 08:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

DROP TABLE IF EXISTS `criterias`;
CREATE TABLE IF NOT EXISTS `criterias` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `ProposedScore` int(11) NOT NULL,
  `MaximumScore` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`ID`, `Code`, `Name`, `ProposedScore`, `MaximumScore`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'اللغة الانجليزية', 15, 30, 'yes', '2018-10-21 22:26:20', '2018-10-13 10:27:44'),
(2, NULL, 'اللغة العربية', 12, 20, 'yes', '2018-10-21 19:57:10', '2018-10-21 19:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `cycles`
--

DROP TABLE IF EXISTS `cycles`;
CREATE TABLE IF NOT EXISTS `cycles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`,`name`,`startDate`,`endDate`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cycles`
--

INSERT INTO `cycles` (`ID`, `name`, `startDate`, `endDate`, `created_at`, `updated_at`) VALUES
(1, 'التقرير الدوري الأول', '2019-01-01', '2019-03-14', '2019-02-18 19:12:52', '2019-01-29 20:46:04'),
(2, 'التقرير الدوري الثاني', '2019-02-05', '2019-02-28', '2019-02-18 18:42:30', '0000-00-00 00:00:00'),
(3, 'التقرير الدوري الثالث', '2019-03-01', '2019-03-12', '2019-02-18 18:44:06', '0000-00-00 00:00:00'),
(4, 'التقرير الدوري الرابع', '2019-03-13', '2019-03-21', '2019-02-18 18:44:06', '0000-00-00 00:00:00'),
(5, 'التقرير الدوري الخامس', '2019-04-01', '2019-04-12', '2019-02-18 18:45:27', '0000-00-00 00:00:00'),
(6, 'التقرير الدوري السادس', '2019-04-14', '2019-04-23', '2019-02-18 18:45:27', '0000-00-00 00:00:00'),
(7, 'التقرير الدوري السابع', '2019-05-14', '2019-05-23', '2019-02-18 18:46:36', '0000-00-00 00:00:00'),
(8, 'التقرير الدوري الثامن', '2019-01-01', '2019-03-01', '2019-02-22 21:13:17', '2019-02-18 17:47:43'),
(9, 'التقرير الدوري التاسع', '2019-07-01', '2019-07-10', '2019-02-18 17:48:14', '2019-02-18 17:48:14'),
(10, 'التقرير الدوري العاشر', '2019-07-11', '2019-07-22', '2019-02-18 17:48:46', '2019-02-18 17:48:46'),
(11, 'التقرير الدوري الحادي عشر', '2019-07-23', '2019-07-30', '2019-02-18 17:49:16', '2019-02-18 17:49:16'),
(12, 'التقرير الدوري الثاني عشر', '2019-05-16', '2019-08-10', '2019-02-22 20:49:11', '2019-02-18 17:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

DROP TABLE IF EXISTS `divisions`;
CREATE TABLE IF NOT EXISTS `divisions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Section` int(11) NOT NULL,
  `Alias` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`),
  KEY `fk_Divisions_Sections1_idx` (`Section`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
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
-- Table structure for table `divisionunits`
--

DROP TABLE IF EXISTS `divisionunits`;
CREATE TABLE IF NOT EXISTS `divisionunits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Code` int(11) NOT NULL,
  `Division` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Division` (`Division`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisionunits`
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
-- Table structure for table `examsfiles`
--

DROP TABLE IF EXISTS `examsfiles`;
CREATE TABLE IF NOT EXISTS `examsfiles` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Provide` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`),
  KEY `fk_ExamsFiles_Provides1_idx` (`Provide`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE IF NOT EXISTS `faculties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`),
  KEY `University` (`University`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`ID`, `Code`, `Name`, `PresidentName`, `City`, `Location`, `Phonne`, `Fax`, `Email`, `Logo`, `University`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'كلية العلوم', 'رشيد العامل', 'تطوان', '158 شارع المقاومة', '0002526969', '0635288745', 'badouch.maroc@gmail.com', 'fileName1539430010.jpg', 3, 'yes', '2018-10-23 11:14:08', '2018-10-13 09:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

DROP TABLE IF EXISTS `helps`;
CREATE TABLE IF NOT EXISTS `helps` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  `Price` decimal(7,2) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Searcher` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`Searcher`),
  KEY `fk_Helps_Searchers1_idx` (`Searcher`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE IF NOT EXISTS `meetings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`ID`, `Date`, `Name`, `Location`, `created_at`, `updated_at`) VALUES
(2, '2018-12-31', 'لقاء تعريفي', 'جدة', '2018-10-23 08:12:57', '2018-10-23 08:12:57'),
(3, '2018-12-25', 'لقاء تعريفي اخر', 'قاعة المؤتمرات بالمنامة', '2018-12-16 13:38:36', '2018-12-16 13:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `meetings_searchers`
--

DROP TABLE IF EXISTS `meetings_searchers`;
CREATE TABLE IF NOT EXISTS `meetings_searchers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Meeting` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `Status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `Meeting` (`Meeting`),
  KEY `Searcher` (`Searcher`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings_searchers`
--

INSERT INTO `meetings_searchers` (`ID`, `Meeting`, `Searcher`, `Status`, `created_at`) VALUES
(2, 2, 11, 'yes', '2018-10-23 10:13:23'),
(3, 2, 11, 'yes', '2018-10-23 10:13:41'),
(4, 3, 11, 'yes', '2018-12-16 14:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

DROP TABLE IF EXISTS `nationalities`;
CREATE TABLE IF NOT EXISTS `nationalities` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`ID`, `Code`, `Name`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'السعودية', 'yes', '2019-02-27 07:49:03', '2019-02-27 07:49:03'),
(3, NULL, 'السودان', 'yes', '2019-02-27 07:49:25', '2019-02-27 07:49:25'),
(4, NULL, 'المغرب', 'yes', '2019-02-27 07:49:45', '2019-02-27 07:49:45'),
(5, NULL, 'ماليزيا', 'yes', '2019-02-27 07:50:10', '2019-02-27 07:50:10'),
(6, NULL, 'مصر', 'yes', '2019-02-27 07:50:46', '2019-02-27 07:50:46'),
(7, NULL, 'ايران', 'yes', '2019-02-27 07:51:09', '2019-02-27 07:51:09'),
(8, NULL, 'الاردن', 'yes', '2019-02-27 07:52:18', '2019-02-27 07:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `details`, `created_at`, `updated_at`) VALUES
(4, 'توقيع عقد إنشاء كرسي الهدايات القرآنية', '1.jpg', 'تفاصيل الخبر', '2018-10-25 15:55:16', '2018-10-25 15:44:23'),
(5, 'تدشين الموقع والبوابة الالكترونية للموسوعة', '2.jpg', 'مرحبا أخي الكريم ، شكرا على سرعة الإنجاز تمت التجربة والسكربت يعمل تماما.\r\n\r\nفقط سؤال اضافي : هل هناك طريقة لحفظ تنسيق الفقرات اثناء الإدخال وإظهارها أيضا كما هي في الصفحة ؟\r\n\r\nمثلا لو كتبت 3 فقرات، يظهر لدي كلها وكأنها فقرة واحدة\r\n\r\n\r\n\r\n\r\nهنا سطر جديد\r\n\r\n\r\nوسطر جديد.\r\n\r\nشكرا.', '2018-10-26 03:55:56', '2018-10-25 15:44:23'),
(6, 'مؤتمر الهدايات القرآنية الأول بماليزيا', '3.jpg', 'تفاصيل الخبر', '2018-10-25 15:55:16', '2018-10-25 15:44:23'),
(7, 'فتح مكتبه متخصصة في علوم القران', '4.jpg', '<p style=\"text-align: center;\"><strong><span style=\"font-size: medium;\">تفاصيل الأخبار</span></strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: medium;\">أكد المدير العام للأمم المتحدة أ، التعاون الدولي بين المؤسسة والبنك جاري حتى يتم توثيق جميع العلاقات اللازمة لتفادي ازمة الخليج في التسعيانايت.</span></strong></p>', '2018-10-26 21:44:31', '2018-10-25 15:44:23'),
(8, 'lllll', '1541706384.PNG', 'ssss', '2018-11-08 18:46:24', '2018-11-08 18:46:24'),
(9, 'lllll', '1541706458.PNG', 'ssss', '2018-11-08 18:47:38', '2018-11-08 18:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Searcher` int(11) NOT NULL,
  `Record` text NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`),
  KEY `Searcher` (`Searcher`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`ID`, `Searcher`, `Record`, `StartDate`, `EndDate`, `updated_at`, `created_at`) VALUES
(2, 11, 'التسجيل و مناقشة الخطة المطروحة', '2018-01-01', '2018-03-05', '2018-12-11 19:56:48', '2018-12-08 18:07:00'),
(3, 11, 'كتابة الفصل الاول', '2019-01-07', '2019-02-06', '2018-12-08 18:07:33', '2018-12-08 18:07:33'),
(4, 34, 'كتابة المقدمة1', '2019-01-01', '2019-01-05', '2019-03-01 19:34:42', '2019-03-01 16:34:02'),
(5, 34, 'كتابة الفصل الأول', '2019-01-03', '2019-01-06', '2019-03-01 16:34:27', '2019-03-01 16:34:27'),
(6, 34, '555', '2016-01-01', '2015-01-01', '2019-03-01 20:21:00', '2019-03-01 20:21:00'),
(7, 34, 'هل الشهر هو اليوم', '2019-05-01', '2019-06-02', '2019-03-01 20:23:56', '2019-03-01 20:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
CREATE TABLE IF NOT EXISTS `progress` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Searcher` int(11) NOT NULL,
  `Months` int(11) NOT NULL,
  `MonthlyProgress` double NOT NULL,
  `InitialProgress` double NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Searcher` (`Searcher`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`ID`, `Searcher`, `Months`, `MonthlyProgress`, `InitialProgress`) VALUES
(1, 11, 24, 4.16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `provides`
--

DROP TABLE IF EXISTS `provides`;
CREATE TABLE IF NOT EXISTS `provides` (
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`,`Searcher`,`Book`),
  KEY `fk_Provides_Searchers1_idx` (`Searcher`),
  KEY `fk_Provides_Books1_idx` (`Book`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `PassportNumber` varchar(50) DEFAULT NULL,
  `NationalNumber` varchar(50) DEFAULT NULL,
  `Fistname` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `BirthCity` varchar(100) DEFAULT NULL,
  `Nationalitie` int(11) DEFAULT '1',
  `Countrie` int(11) DEFAULT '2',
  `City` varchar(100) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `CertificateType` varchar(255) DEFAULT NULL,
  `CertificateDegree` varchar(200) DEFAULT NULL,
  `InscriptionDate` date DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `University` int(11) DEFAULT NULL,
  `Faculty` varchar(100) DEFAULT NULL,
  `Phonne1` varchar(50) DEFAULT NULL,
  `Phonne2` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PictureURL` varchar(255) DEFAULT 'avat.png',
  `CV` text,
  `Status` varchar(50) DEFAULT NULL,
  `User` int(11) DEFAULT NULL,
  `EnablePlanEdit` varchar(11) DEFAULT 'true',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `User` (`User`),
  KEY `dm` (`Countrie`),
  KEY `Nationalitie` (`Nationalitie`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`ID`, `Code`, `PassportNumber`, `NationalNumber`, `Fistname`, `LastName`, `Gender`, `BirthDate`, `BirthCity`, `Nationalitie`, `Countrie`, `City`, `Location`, `CertificateType`, `CertificateDegree`, `InscriptionDate`, `Type`, `University`, `Faculty`, `Phonne1`, `Phonne2`, `Email`, `PictureURL`, `CV`, `Status`, `User`, `EnablePlanEdit`, `updated_at`, `created_at`) VALUES
(11, '85963', 'badouch', 'badouch', 'بادوش', 'محمد', 'ذكر', '2018-12-31', 'الداخلة', 1, 3, 'جدة', 'شارع الورود اقامة الياسمين', 'badouch', 'badouch', '2018-12-31', 'searcher', 2, 'badouch', '+33601106930', '222222222', 'badouch.maroc@gmail.com', 'fileName1541620612.jpg', 'CV1544995491.pdf', 'مفعل', 54, 'true', '2019-03-01 23:40:13', '2019-03-01 23:40:13'),
(12, NULL, 'US526334', '1524114758', 'supervisor', 'supervisor', 'ذكر', '2018-12-31', 'مكة', 1, 2, 'جدة', '158 شارع المقاومة', 'ماجستر', 'درجة', '2018-12-31', 'supervisor', 2, 'كلية الاتصال', '+966506087020', NULL, 'badouch.maroc@gmail.com', 'fileName1551049442.jpg', NULL, 'yes', 55, 'false', '2019-03-01 23:40:16', '2019-03-01 23:40:16'),
(16, NULL, '25SK3DD', '852447XP1266', 'reviewer', 'reviewer', 'ذكر', '1979-11-30', 'المغرب', 1, 2, 'TOURS', 'قاعة المؤتمرات بالمنامة', 'ماجستير', 'جيد', '2019-02-06', 'reviewer', 2, 'الحقوق و العلوم الشرعية', '11111111111', '22222222222', 'reviewer@reviewer.com', '1549065775.jpg', NULL, 'غير مفعل', 62, 'true', '2019-03-01 23:40:22', '2019-03-01 23:40:22'),
(17, NULL, '25SK3DD', '852447XP1266', 'reviewer1', 'reviewer1', 'ذكر', '2019-02-13', 'LA RICHE', 1, 3, 'TOURS', 'قاعة المؤتمرات بالمنامة', 'ماجستير', 'جيد', '2019-02-12', 'reviewer', 2, 'الحقوق و العلوم الشرعية', '5555555555', '3333333333', 'reviewer1@reviewer1.com', '1549539995.jpg', NULL, 'غير مفعل', 63, 'true', '2019-03-01 23:40:30', '2019-03-01 23:40:30'),
(18, NULL, 'hh', 'hhh', 'hh', 'hh', 'ذكر', '2018-12-31', 'hhh', 1, 2, 'hhh', 'hhh', 'hhh', 'hhh', '2019-12-31', 'searcher', 2, 'hhh', '11111111', '22222222', 'hh@gmail.com', '1551019405.jpg', NULL, 'مفعل', 65, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(22, '11', NULL, NULL, 'kk', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', 2, NULL, NULL, NULL, 'kk@gmail.com', 'avat.png', NULL, 'مرشح نهائي', 69, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(23, '1050', NULL, NULL, 'طالب1', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', 2, NULL, NULL, NULL, 'st@st.com', 'fileName1551129762.jpg', NULL, 'مفعل', 70, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(24, NULL, '123456', '123456', 'مشرف', 'مشرف', 'ذكر', '1990-01-01', 'مكة', 1, 2, 'مكة', 'العوالي', 'دكتوارة', 'امتياز', '2015-01-01', 'supervisor', 2, 'الدعوة وأصول الدين', '123456', '2234564', 'bin@bin.com', '1551134396.jpg', NULL, 'yes', 71, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(25, NULL, NULL, 'سييس', 'بن موسى الجديد', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 2, NULL, NULL, NULL, 'ali@ali.com', 'avat.png', NULL, 'yes', 72, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(26, NULL, '123456', '12345', 'محمد موسى', 'عباس', 'ذكر', '1999-01-01', 'مكة', 1, 2, 'مكة', 'مكة', 'دكتوراة', 'امتياز', '2015-01-01', 'reviewer', 2, 'الدعوة', '123456', '123456', 'rev@rev.com', '1551163845.jpg', NULL, 'غير مفعل', 74, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(27, NULL, NULL, NULL, 'مشرف3', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 2, NULL, NULL, NULL, 'rev2@rev2.com', 'avat.png', NULL, 'yes', 75, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(28, NULL, NULL, NULL, 'مشرف4', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 2, NULL, NULL, NULL, 'rev3@rev3.com', 'avat.png', NULL, 'yes', 76, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(29, NULL, NULL, NULL, 'باحث مساعد4', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'reviewer', 2, NULL, NULL, NULL, 'rev4@rev4.com', 'avat.png', NULL, 'yes', 77, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(30, '5555', NULL, NULL, 'طالب4', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', 2, NULL, NULL, NULL, 'st4@st4.com', 'fileName1551236940.JPG', NULL, 'مفعل', 78, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(31, NULL, NULL, NULL, 'يحي زمزمي', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 2, NULL, NULL, NULL, 'yz@yz.com', 'fileName1551252257.JPG', NULL, 'yes', 80, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(32, '1-38', '213456', '2545', 'عادل ضحوي', 'ضحوي', 'ذكر', '1980-01-01', 'جدة', 1, 3, 'الخرطوم', 'الخرطوم', 'دكتوراة', 'امتياز', '2015-01-01', 'searcher', 2, 'الدعوة', '123456', '12456', 'ad@ad.com', 'fileName1551251465.jpg', NULL, 'مفعل', 81, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(33, NULL, '123456', '12345', 'د ياسين قاري', 'قاري', 'ذكر', '2019-02-06', 'المدينة', 2, 2, 'مكة المكرمة', 'مكة المكرمة', NULL, 'أستاذ مشارك', '2019-01-15', 'supervisor', 2, 'كلية الدعوة وأصول الدين', '6576484675456', '00966555305443', 'yq@yq.com', 'avat.png', NULL, 'yes', 82, 'true', '2019-03-02 10:25:33', '2019-03-02 10:25:33'),
(34, '2-38', '123456', '1231564', 'محمد ال منشط2', 'الموسى', 'ذكر', '2012-01-01', 'مكة', 2, 2, 'مكة', 'مكة', NULL, 'دكتوراة', '2015-01-01', 'searcher', 3, 'كلية الدعوة', '123456', '1236544', 'md@md.com', 'fileName1551459911.JPG', 'CV1551483053.pdf', 'مفعل', 84, 'true', '2019-03-02 07:21:24', '2019-03-02 07:21:24'),
(35, NULL, '36647', '557365', 'د يوسف', 'الباحوث', 'ذكر', '0004-04-04', 'المغرب', 2, 2, 'مكة', 'الخالدية', 'دكتوراه', 'استاذ مشارك', '0004-04-04', 'reviewer', 2, 'الدعوة وأصول الدين', '0503055738', '0503055738', 'az@az.com', 'avat.png', NULL, 'yes', 85, 'true', '2019-03-01 23:42:40', '2019-03-01 23:42:40'),
(36, '5-999', '666', '555', 'بن موسى', '', NULL, NULL, '', 1, 2, '', '', '', NULL, NULL, 'searcher', 2, NULL, NULL, NULL, 'ms@ms.com', 'avat.png', NULL, 'مفعل', 86, 'true', '2019-03-02 00:58:58', '2019-03-02 00:58:58'),
(37, '55989-8', NULL, NULL, 'mry', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', NULL, NULL, NULL, NULL, 'my@my.com', 'avat.png', NULL, 'مفعل', 87, 'true', '2019-03-02 07:39:06', '2019-03-02 07:39:06'),
(38, '55987', NULL, NULL, 'ft', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', NULL, NULL, NULL, NULL, 'ft@ft.com', 'avat.png', NULL, 'غير مفعل', 88, 'true', '2019-03-02 04:45:15', '2019-03-02 04:45:15'),
(39, NULL, NULL, NULL, 'المراجع رقم10', NULL, NULL, NULL, NULL, 1, 3, NULL, NULL, NULL, NULL, NULL, 'reviewer', NULL, NULL, NULL, NULL, 'rev10@rev10.com', 'avat.png', NULL, 'yes', 89, 'true', '2019-03-02 07:45:08', '2019-03-02 07:45:08'),
(40, '555', NULL, NULL, 'تجربة', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', NULL, NULL, NULL, NULL, 'test@test.com', 'avat.png', NULL, 'غير مفعل', 91, 'true', '2019-03-02 11:22:29', '2019-03-02 11:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `reviewersearchs`
--

DROP TABLE IF EXISTS `reviewersearchs`;
CREATE TABLE IF NOT EXISTS `reviewersearchs` (
  `reviewer` int(11) NOT NULL,
  `search` int(11) NOT NULL,
  PRIMARY KEY (`reviewer`,`search`),
  KEY `search` (`search`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewersearchs`
--

INSERT INTO `reviewersearchs` (`reviewer`, `search`) VALUES
(16, 1),
(16, 3),
(26, 9),
(35, 10),
(39, 13),
(39, 16);

-- --------------------------------------------------------

--
-- Table structure for table `reviewers_reports`
--

DROP TABLE IF EXISTS `reviewers_reports`;
CREATE TABLE IF NOT EXISTS `reviewers_reports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `search` int(11) NOT NULL,
  `reviewer` int(11) NOT NULL,
  `q1` varchar(200) NOT NULL,
  `q1_details` text NOT NULL,
  `q2` varchar(200) NOT NULL,
  `q2_details` text NOT NULL,
  `q3` varchar(200) NOT NULL,
  `q3_details` text NOT NULL,
  `q4` varchar(200) NOT NULL,
  `q4_details` text NOT NULL,
  `q5` varchar(200) NOT NULL,
  `q5_details` text NOT NULL,
  `q6` varchar(200) NOT NULL,
  `q6_details` text NOT NULL,
  `q7` varchar(200) NOT NULL,
  `q7_details` text NOT NULL,
  `q8` varchar(200) NOT NULL,
  `q8_details` text NOT NULL,
  `q9` varchar(200) NOT NULL,
  `q9_details` text NOT NULL,
  `q10` varchar(200) NOT NULL,
  `q10_details` text NOT NULL,
  `q11` text NOT NULL,
  `filename` text CHARACTER SET utf8,
  `note` text,
  `date` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `search` (`search`),
  KEY `reviewer` (`reviewer`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewers_reports`
--

INSERT INTO `reviewers_reports` (`ID`, `search`, `reviewer`, `q1`, `q1_details`, `q2`, `q2_details`, `q3`, `q3_details`, `q4`, `q4_details`, `q5`, `q5_details`, `q6`, `q6_details`, `q7`, `q7_details`, `q8`, `q8_details`, `q9`, `q9_details`, `q10`, `q10_details`, `q11`, `filename`, `note`, `date`) VALUES
(3, 1, 16, 'u', 'u', 'uu', 'u', 'u', 'u', 'u', 'u', 'u', 'uu', 'u', 'u', 'u', 'u', 'u', 'uu', 'u', 'u', 'u', 'u', 'u', 'fileName1549574845.pdf', 'u', '2019-02-22'),
(4, 3, 16, 'oo', 'oo', 'o', 'o', 'o', 'o', 'oo', 'o', 'o', 'o', 'o', 'o', 'oo', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'fileName1550938822.pdf', 'pp', '2019-02-23'),
(5, 10, 35, '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'مثال على تعبئة التقرير الخاص بالمشرف', '1', 'fileName1551255606.pdf', 'مثال على تعبئة التقرير الخاص بالمشرف', '2019-02-27'),
(6, 16, 39, '3', 'dasdasf', '3', 'asdfsdf', '2', 'asdfsf', '3', 'sdafssf', '4', 'sadfsdf', '7', 'asdfsdf', '8', 'asdfsdf', '3', 'asdfsdf', '2', 'adssdf', '4', 'asdfsdf', 'sdafasdf', 'fileName1551529226.txt', NULL, '2019-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'student'),
(3, 'supervisor'),
(4, 'admin2'),
(5, 'reviewer');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `searchersreports`
--

DROP TABLE IF EXISTS `searchersreports`;
CREATE TABLE IF NOT EXISTS `searchersreports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`,`Searcher`,`Section`),
  KEY `fk_SearchersReports_Searchers1_idx` (`Searcher`),
  KEY `fk_SearchersReports_Sections1_idx` (`Section`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchersreports`
--

INSERT INTO `searchersreports` (`ID`, `Code`, `Searcher`, `TypeCyclic`, `Section`, `DateSearcher`, `DoneRange`, `SessionsCount`, `HoursNumber`, `UpdatedRange`, `DateCommittee`, `Reasons`, `Difficulties`, `Notes`, `URL`, `Status`, `created_at`, `updated_at`) VALUES
(3, NULL, 11, 'صنف 1', 2, '2018-10-10', 1, 1, 1, 1, '2018-12-01', 'sll', 'll', 'll', 'fileName1540679376.pdf', 'yes', '2018-10-27 23:03:13', '2018-10-27 20:29:36'),
(4, NULL, 11, '1', 2, '2018-12-31', 1, 1, 1, 1, '2018-12-31', '1', '1', '1', 'fileName1540683103.pdf', 'yes', '2018-10-27 21:31:43', '2018-10-27 21:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `searchers_reports`
--

DROP TABLE IF EXISTS `searchers_reports`;
CREATE TABLE IF NOT EXISTS `searchers_reports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `search` int(11) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(1000) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `q5` varchar(100) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `q7` varchar(1000) NOT NULL,
  `q8` varchar(1000) NOT NULL,
  `q9` varchar(500) NOT NULL,
  `filename` text,
  `date` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchers_reports`
--

INSERT INTO `searchers_reports` (`ID`, `search`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `filename`, `date`) VALUES
(4, 4, 'u', 'u', 'u', 'uu', 'u', 'u', 'u', 'uu', 'u', 'fileName1549578745.pdf', '2019-02-22'),
(3, 1, 'm', 'm', 'm', 'm', 'mm', 'm', 'm', 'm', 'w', 'fileName1549576327.pdf', '2019-02-22'),
(5, 5, 'ppp', 'ppp', 'ppp', 'pp', 'pp', 'pp', 'ppp', 'ppp', 'pp', 'fileName1550870024.docx', '2019-02-22'),
(6, 9, 'تجربة', 'تجربة', 'تجربة', 'رتنمنسيتب', '55', 'تمنسيتب', 'منسيمنتب', 'منتسيبمنت', 'مكنتسب', 'fileName1551251357.pdf', '2019-02-27'),
(7, 10, '55', 'جيد جدا', 'جيد جدا', 'جيد جدا', 'ضجيد جدا', 'جيد جداضجيد جدا', 'جيد جدا', 'جيد جدا', 'جيد جدا', 'fileName1551254858.txt', '2019-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `searcher_critera`
--

DROP TABLE IF EXISTS `searcher_critera`;
CREATE TABLE IF NOT EXISTS `searcher_critera` (
  `Searcher` int(11) NOT NULL,
  `Criteria` int(11) NOT NULL,
  `Status` text NOT NULL,
  PRIMARY KEY (`Searcher`,`Criteria`),
  KEY `Criteria` (`Criteria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searcher_critera`
--

INSERT INTO `searcher_critera` (`Searcher`, `Criteria`, `Status`) VALUES
(11, 1, 'yes'),
(11, 2, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `searchs`
--

DROP TABLE IF EXISTS `searchs`;
CREATE TABLE IF NOT EXISTS `searchs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Alias` varchar(500) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) DEFAULT NULL,
  `SearchURL` text NOT NULL,
  `Division` int(11) DEFAULT NULL,
  `Searcher` int(11) NOT NULL,
  `Note` text,
  `Progress` text NOT NULL,
  `Divisionunit` int(11) DEFAULT NULL,
  `Cycle` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `fk_Searchs_Divisions1_idx` (`Division`),
  KEY `Searcher` (`Searcher`),
  KEY `Divisionunit` (`Divisionunit`),
  KEY `cycle` (`Cycle`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchs`
--

INSERT INTO `searchs` (`ID`, `Code`, `Alias`, `Name`, `Order`, `SearchURL`, `Division`, `Searcher`, `Note`, `Progress`, `Divisionunit`, `Cycle`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'المبحث2', 'المبحث1', 1, 'fileName1540123896.pdf', 5, 11, 'يممثككبمم', 'رفض الادارة', 12, 1, 'no', '2019-03-01 22:47:10', '2019-03-01 22:47:10'),
(3, NULL, 'المبحث 22', 'مبحثي', 22, 'fileName1541367786.pdf', 5, 11, NULL, 'تم الرفع', 14, 6, 'yes', '2019-03-01 22:47:17', '2019-03-01 22:47:17'),
(4, NULL, 'بحثي', 'بحثي', 20, 'fileName1541368009.pdf', 6, 11, 'kkkkkk', 'موافقة الادارة', 15, 12, 'yes', '2019-03-01 22:47:42', '2019-03-01 22:47:42'),
(5, NULL, 'بحثي', 'بحثي', 5, 'fileName1548887678.pdf', 1, 11, NULL, 'تم الرفع', 1, 8, 'yes', '2019-03-01 22:47:45', '2019-03-01 22:47:45'),
(6, NULL, 'بحثي التجريبي المفصل للجزء الأول', 'بحث من محمد موسى تجريبي', NULL, 'fileName1551164223.pdf', 2, 23, NULL, 'تم الرفع', 3, 1, 'yes', '2019-03-01 22:47:20', '2019-03-01 22:47:20'),
(7, NULL, 'وصف بحثي للطالب4', 'بحثي الاول', NULL, 'fileName1551168148.pdf', 2, 30, NULL, 'تم الرفع', 1, 1, 'yes', '2019-03-01 22:47:37', '2019-03-01 22:47:37'),
(8, NULL, 'الصباح', 'تجربة الصباح', NULL, 'fileName1551237871.pdf', 2, 30, NULL, 'تم الرفع', 2, 2, 'yes', '2019-03-01 22:47:35', '2019-03-01 22:47:35'),
(9, NULL, 'المحبث الاول', 'المبحث الاول الباب الثاني', NULL, 'fileName1551251222.pdf', 6, 32, NULL, 'موافقة الادارة', 2, 1, 'yes', '2019-03-02 08:58:56', '2019-03-02 08:58:56'),
(10, NULL, 'المقدمة + الدراسات السابقة', 'اول جزء بحثي لي في الموسوعة', NULL, 'fileName1551254431.pdf', 7, 34, 'بحث مميز وجهد مشكور قام به الباحث', 'تم الرفع', 1, 2, 'yes', '2019-03-01 22:47:28', '2019-03-01 22:47:28'),
(11, NULL, 'هذا الجزء الثاني من البحث الثاني', 'بحثي جزء 2', NULL, 'fileName1551460034.pdf', 2, 34, NULL, 'تم الرفع', 2, 3, 'yes', '2019-03-01 22:47:25', '2019-03-01 22:47:25'),
(12, NULL, 'وصف الجزء البحثي', 'بحث تجريبي اتركه لفترة222', NULL, 'fileName1551471027.pdf', 2, 34, NULL, 'تم الرفع', 3, 1, 'yes', '2019-03-01 22:47:32', '2019-03-01 22:47:32'),
(13, NULL, 'سشيبسيب', 'يسشبسيب', NULL, 'fileName1551478600.pdf', 8, 34, NULL, 'تم الرفع', 17, 3, 'yes', '2019-03-01 23:04:01', '2019-03-01 23:04:01'),
(14, NULL, 'مكنت شسيب كمنت شسيب', 'اختبار القسم الفصل المبحث', NULL, 'fileName1551478761.pdf', 1, 34, NULL, 'تم الرفع', 11, 1, 'yes', '2019-03-01 19:19:21', '2019-03-01 19:19:21'),
(15, NULL, 'سيشبسيبشسيب', 'سشيبشسيب', NULL, 'fileName1551479745.pdf', 5, 34, 'هل يبقى النظام في نفس الصفحة', 'تم الرفع', 12, 3, 'yes', '2019-03-02 01:04:44', '2019-03-02 01:04:44'),
(16, NULL, '23456432345', 'تم تعديل الاسم فقط', NULL, 'fileName1551479801.pdf', 5, 34, 'هذا البحث لا بأس منه', 'موافقة الادارة', 13, 1, 'yes', '2019-03-02 08:59:08', '2019-03-02 08:59:08'),
(17, NULL, 'شسيبسشيبش', 'سشيبشسيب', NULL, 'fileName1551481385.pdf', 2, 34, 'ممتاز يعمل الآن', 'تم الرفع', 5, 1, 'yes', '2019-03-02 01:04:59', '2019-03-02 01:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
CREATE TABLE IF NOT EXISTS `sections` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Alias` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Order` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`ID`, `Code`, `Alias`, `Name`, `Order`, `Status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Section One', 'القسم الأول : مقدمات تفسيرية لدراسة هدايات السورة ', 3, 'yes', '2018-11-04 18:39:50', '2018-10-27 05:26:31', '0000-00-00 00:00:00'),
(2, '2', 'Section Two', 'القسم الثاني : دراسات تطبيقية في هدايات السورة وربط ذلك بواقع الأمة', 4, 'yes', '2018-11-04 18:39:54', '2018-10-27 05:26:34', '0000-00-00 00:00:00'),
(3, '3', 'مقدمة', 'مقدمة', 1, 'yes', '2018-11-04 18:39:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '4', 'تمهيد', 'تمهيد', 2, 'yes', '2018-11-04 18:39:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '5', 'خاتمة', 'خاتمة', 5, 'yes', '2018-11-02 19:24:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) DEFAULT NULL,
  `Searcher` int(11) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `StopDateTime` datetime NOT NULL,
  `SearcherURL` varchar(255) DEFAULT NULL,
  `SupervisorURL` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`),
  KEY `fk_Sessions_Searchers1_idx` (`Searcher`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervisorsreports`
--

DROP TABLE IF EXISTS `supervisorsreports`;
CREATE TABLE IF NOT EXISTS `supervisorsreports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`,`Supervisor`),
  KEY `fk_SearchersReports_copy1_Supervisors1_idx` (`Supervisor`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisorsreports`
--

INSERT INTO `supervisorsreports` (`ID`, `Supervisor`, `TypeCyclic`, `DateSupervisor`, `DoneRange`, `QualityProcess`, `QualityDirection`, `UpdatedRange`, `DateCommittee`, `Difficulties`, `NotesPositive`, `NotesNegative`, `URL`, `Status`, `created_at`, `updated_at`) VALUES
(1, 12, 'صنف 1', '2018-10-18', 10, '2', 3, 5, '2018-10-17', 'oooo', 'llll', 'pppp', 'fileName1540748008.pdf', 'no', '2018-10-28 18:10:51', '2018-10-28 16:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors_reports`
--

DROP TABLE IF EXISTS `supervisors_reports`;
CREATE TABLE IF NOT EXISTS `supervisors_reports` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `supervisor` int(11) NOT NULL,
  `search` int(11) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(1000) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `q5` varchar(1500) NOT NULL,
  `q6` varchar(1500) NOT NULL,
  `q7` varchar(1500) NOT NULL,
  `q8` varchar(1500) NOT NULL,
  `note` text,
  `filename` text,
  `date` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisors_reports`
--

INSERT INTO `supervisors_reports` (`ID`, `supervisor`, `search`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `note`, `filename`, `date`) VALUES
(4, 12, 1, 'p', 'p', 'pp', 'p', 'p', 'pp', 'p', 'p', 'w', 'fileName1549577176.pdf', '2019-02-22'),
(5, 33, 10, 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'مثال على تعبئة التقرير الخاص بالمشرف', 'fileName1551254993.txt', '2019-02-27'),
(6, 33, 15, '30%', 'asdf sadf', 'جيد جدا', 'أكثر من 50%', 'sdaf sadf sadf', 'sdf asdf sdf', 'sadf asdf', 'sadf asdf', NULL, NULL, '2019-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `theses`
--

DROP TABLE IF EXISTS `theses`;
CREATE TABLE IF NOT EXISTS `theses` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(45) DEFAULT NULL,
  `ProgramDuration` varchar(45) DEFAULT NULL,
  `BeginningDate` varchar(45) DEFAULT NULL,
  `CompletionDate` varchar(45) DEFAULT NULL,
  `Notes` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Supervisor` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`Supervisor`,`Searcher`),
  KEY `fk_Theses_Searchers1` (`Searcher`),
  KEY `fk_Theses_Supervisors_idx` (`Supervisor`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theses`
--

INSERT INTO `theses` (`ID`, `Title`, `ProgramDuration`, `BeginningDate`, `CompletionDate`, `Notes`, `Status`, `created_at`, `Supervisor`, `Searcher`) VALUES
(3, 'الهدايات القرآنية في سورة الانفال', 'سنتين', '2017-05-03', '2020-01-01', 'لا شيء', 'yes', '2018-12-16 22:13:23', 12, 11),
(6, 'الهدايات القرآنية في سورة النساء', 'سنتين', '01/01/2019', '01/01/2022', NULL, 'yes', '2019-02-27 07:28:24', 12, 23),
(7, 'هدايات سورة الفلق', '24', '2015-01-01', '2020-01-05', NULL, 'yes', '2019-02-27 07:28:26', 25, 30),
(8, 'هدايات سورة البقرة', 'سنتين', '2019-02-07', '2019-02-28', NULL, 'yes', '2019-02-27 07:28:29', 31, 32),
(9, 'من الاية 5 الى ني', 'سنتين', '2019-02-06', '2019-02-28', NULL, NULL, '2019-02-27 07:43:32', 33, 34),
(10, 'هدايات سورة الفلق', 'سنتين', '2019-03-01', '2021-03-04', NULL, NULL, '2019-03-01 17:09:51', 33, 36),
(11, 'هدايات سورة التوبة', 'سنتين', '2014-01-01', '2019-01-01', NULL, NULL, '2019-03-02 07:28:45', 33, 37),
(12, 'هدايات سورة النبأ', 'سنتين', '2019-01-01', '2020-01-01', NULL, NULL, '2019-03-02 07:45:15', 33, 38),
(13, 'sadfasdf', '36', '2019-03-08', '2019-03-29', NULL, NULL, '2019-03-02 14:22:29', 33, 40);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

DROP TABLE IF EXISTS `universities`;
CREATE TABLE IF NOT EXISTS `universities` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `Countrie` (`Countrie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`ID`, `Code`, `Name`, `President`, `Countrie`, `City`, `Location`, `Phonne`, `Fax`, `Email`, `Logo`, `ContractID`, `ContractDate`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'جامعة أم القرى', 'أ.د عبدالله بافيل', 2, 'مكة', 'العابدية', '0647412585', '0522149573', 'badouch.maroc@gmail.com', 'fileName1538685413.jpg', '2753', '2018-12-31', 'no', '2019-02-27 06:39:19', '2018-10-04 18:25:40'),
(3, NULL, 'جامعة أفريقيا العالمية', 'د. مدير الجامعة', 2, 'الخرطوم', 'حي الزهور', '0627391548', '0523141185', 'badouch.maroc@gmail.com', 'fileName1538867590.jpg', '1455', '2018-12-31', 'yes', '2019-02-27 06:39:28', '2018-10-04 18:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_role` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(39, 'admin', 'admin@admin.com', '$2y$10$keJAuYnSmgndZMt57doE6u907gjNo8vpZPGicEwFU6ojU7ftAzupi', 1, 'Kf5FbJxr3TaU1waeYjVc862Cg0Qql0w7FQaWe4h9FZYxnRa1c6Dpga4vay0v', '2019-03-02 14:15:10', '2018-10-03 08:22:44'),
(54, 'student', 'student@student.com', '$2y$10$lXvKVcGpNW1UFgt0uW5Dhu6DvV8MqcOQ/lb1mchY0GKtElNgu26qy', 2, 'HRm6p2ZMmjn1UfVzZ1Y7BmgWltVfFFeyqGZfAIiRnwRPWS7YOOHlK34YZ4Yu', '2019-02-26 08:17:24', '2018-10-06 11:51:08'),
(55, 'supervisor', 'supervisor@supervisor.com', '$2y$10$98N4xru.BXg0U7VSZM6wduzmW5p0.2/tZYGb.o08nFgEs6XsZucpu', 3, 'FicYhAVu5rNZnrQbOf6lUjrXwmTrHB4evSr1JbUSLxTNjA5bTa4XkHmr1h0w', '2019-02-27 03:51:42', '2018-10-18 18:08:29'),
(56, 'admin2', 'admin2@admin2.com', '$2y$10$e9ZRZgOz1IJ1AtaZCWu47OSQpaNg5LVWVXqjyKjrjXnWsMXxCS9VW', 4, 'zyFp4iKK2QA5uoR91rzuiUlf5qRdB4nld53sy38FdXGoFLwtRbp1s3CRSuzd', '2019-03-02 13:48:48', '2018-12-30 16:27:37'),
(57, 'عبد الرحمان', 'searcher@searcher.com', '$2y$10$Q/ZpMzea39jIwdDfBHwZLOJl6EK2ZEbH4b05C9rYwOK6lNwaUBVOu', 2, 'VP1XKUrAIMSlOyUUWmkm9zYSHsKsGFBnlJrIA3eep91IWiEnacwGktrtv1gp', '2018-12-30 18:20:22', '2018-12-30 17:19:07'),
(62, 'reviewer', 'reviewer@reviewer.com', '$2y$10$tiXkW26Rl1VXqEPJflt.WuQ4HOOp.myw75GXllb.BxPPQQJFmhq36', 5, '0qItsv3tw4P0HYFXHuMMTKzxEVZfWXCMCXUtYHGljSC2YaMksdotOK1a5Xty', '2019-02-24 23:38:03', '2019-02-01 23:02:55'),
(63, 'reviewer1', 'reviewer1@reviewer1.com', '$2y$10$74zavaLkuqA/P6HngsMID.gHHtzd3pU7h8GXw5ullar3O3rGzExiy', 5, NULL, '2019-02-07 10:46:35', '2019-02-07 10:46:35'),
(64, 'administrateur', 'administrateur@gmail.com', '$2y$10$/sFCOuT.DA9FbpTxiOjA2Odxqyr3AJ4OIDnEWMLkDVXBHj6C6rTPq', 4, NULL, '2019-02-23 19:18:00', '2019-02-23 19:18:00'),
(65, 'hh', 'hh@gmail.com', '$2y$10$bKgq2fd0j90zMIux9Sk6fuSNCinSsmODy4Af3Vr.VQGfLyEj/5Upu', 2, 'MuAgVsfe4w6KBd4hLb0ox2Vng0Tdwmg4Tkyrwv31QncJRnb1jfuBfWhwPzTR', '2019-02-24 14:50:23', '2019-02-24 13:43:25'),
(66, 'bad', 'med@gmail.com', '$2y$10$C8rwYrfEQH0f19AwHkYTkOnKJwkR8uQvxNR9RFqqmyscxdRPMaLIG', 2, NULL, '2019-02-24 18:46:44', '2019-02-24 18:46:44'),
(67, 'bad', 'med@gmail.com', '$2y$10$J49J6SheXOHPXoIsMy6rn..FfnNBsXl7Osf3slpN3GiAc7IY7DY2m', 2, NULL, '2019-02-24 18:47:47', '2019-02-24 18:47:47'),
(68, 'bad', 'med@gmail.com', '$2y$10$Y1odfWT.VK6JScN65M4W0ezytbCIKhKSTiP546deiNeYzjlmDJOhi', 2, NULL, '2019-02-24 18:48:06', '2019-02-24 18:48:06'),
(69, 'kk', 'kk@gmail.com', '$2y$10$DG.jD5IY1s7pXpZ4JXtN2uBn1bWhx.X3JacO78hy1Ctgx0hcwMnDS', 2, NULL, '2019-02-24 18:50:05', '2019-02-24 18:50:05'),
(70, 'طالب1', 'st@st.com', '$2y$10$Cs5u4gShYdXpRITBLTfx9.Ay2yZGU0G4Nw5yhq4KJCXs/EZRLHcES', 2, '9XpW9Nlw4r6VvbLGkwfrSDytbeEJmp3dgtjVBzkOl6agLUqLxpfBoFt9VJXG', '2019-02-26 06:57:12', '2019-02-25 17:46:57'),
(71, 'مشرف', 'bin@bin.com', '$2y$10$Cs5u4gShYdXpRITBLTfx9.Ay2yZGU0G4Nw5yhq4KJCXs/EZRLHcES', 3, NULL, '2019-02-25 19:39:56', '2019-02-25 19:39:56'),
(72, 'بن موسى الجديد', 'ali@ali.com', '$2y$10$36oZLh6I7sO3iGvKgGdtdubOqsJLkTt3ofgzdC6HsULlhWoPQwq96', 3, 'GA7ipuCegJqCLDr127Fm1SXXX6kq8DK0DMBuoKeCGeEoZi76G2QXXN9Ed1xZ', '2019-02-26 06:31:15', '2019-02-26 03:30:30'),
(73, 'binmosa', 'me@me.com', '$2y$10$gaF8RUIrEEb4TAmmp5v7neIkfT3WDoFowwwqooWntOlvxr/0tCu8S', 4, '1uTiVEc9RBHMKDCYkPqx2gZm5j3KzpF6WG3dvKS1OeTPX3qTStyVWcfo0NLg', '2019-02-26 07:13:12', '2019-02-26 03:44:41'),
(74, 'محمد موسى', 'rev@rev.com', '$2y$10$mXSomWa1s/UYc19gCcpMpuaLDP0oyK/A4nKNbqyZ3Q0mxCUFQq0Hy', 5, NULL, '2019-02-26 03:50:45', '2019-02-26 03:50:45'),
(75, 'مشرف 33', 'rev2@rev2.com', '$2y$10$UgW6.RXJuPlcEdRyUNseE.bK7gF3rsLVs8IcsbJNOoFOBYARrkb2m', 3, 'XAEpKRJ7lbJrO1amqufv0SW0sniOH0LDc0OLCWljk6LSIsTvO1UiF2cxt1si', '2019-02-26 07:51:49', '2019-02-26 04:37:04'),
(76, 'مشرف 44', 'rev3@rev3.com', '$2y$10$.ja0oSzhhWcVy.7w1yAvT.qyv/Oj1Zte5o3u/oN9LDoA6o9fMPHTG', 3, NULL, '2019-02-26 07:51:55', '2019-02-26 04:43:13'),
(77, 'باحث مساعد4', 'rev4@rev4.com', '$2y$10$RLcP0xtwe.pilZVR1olUIuyrfig9S/pIbIQSpV2ZPxBPzgepbMqqO', 5, 'F9tMQxt3KJQyrHH2JJYI6exa2bU32d6LIBgcVhT6DYlgAeBJWP2UcN3KbvbX', '2019-02-26 23:37:37', '2019-02-26 04:48:33'),
(78, 'طالب4', 'st4@st4.com', '$2y$10$vKBmWV0SVSOAvK7kItF8a.KtySrPNGlaz3DlqNdoaYVRsmD.HIeX2', 2, '64TMhS9BIwhZlx1B5dnahVi44WPtGZFakJpJGGpSgZT5rW6ZAka0VALrYsaE', '2019-02-27 06:15:22', '2019-02-26 04:55:01'),
(79, 'أحمد الحاج', 'HK@HK.COM', '$2y$10$fO29AOTQ.syLMQ9IhjW7qepUBhLQzQohwumPkBwGP4DeKwLYvsPlW', 1, 'tuqil8T1Eudaf4Ii0wheATNey8yfAOMXYaY6iXnnZZ4xOXMSOGgukP23H2VE', '2019-02-27 07:06:00', '2019-02-27 06:49:36'),
(80, 'يحي زمزمي', 'yz@yz.com', '$2y$10$4vn96bfU1LELW.i2h/NNju9N93qbWWpCj6Nj0U/sQGOoS3kiY.Yn2', 3, 'h24asKQifmIJjIZb6EQk7tWHNF7zSHxtVc8G7iaQxJnnr64EYmDPZXybEsDf', '2019-02-27 07:42:08', '2019-02-27 06:59:37'),
(81, 'عادل ضحوي', 'ad@ad.com', '$2y$10$WYsPcruFGKZqBTKKtF/x2ue774/WEiLR5c4nU1z/Lqwp..PVcQwFu', 2, 'F6BuvG5ve45BkZdxFks4Qv76wghjOljqbssW6aUpdcYA2QAaQJ7DiueufJj1', '2019-02-27 07:41:22', '2019-02-27 07:02:06'),
(82, 'د ياسين قاري', 'yq@yq.com', '$2y$10$3nb.5fLXMbNORm9NAp7BFulH7oQkmBC1Wsit7vFR0BSabkVGDwyK.', 3, 'nssVTAk3yKHvCyhJ0DbJpPYgpqUK7kWCgl5LpP6IGoeHOo22LgInnRXmqTwh', '2019-03-02 13:30:18', '2019-02-27 07:39:28'),
(83, 'د أحمد الفريح', 'af@af.com', '$2y$10$z/bVc7q4bMUn76.zOJRmAut6kPxX5S//IL0gAK6Q4I2.jdpW.4B6S', 4, '5qIlHC4KdqyHUhYWoZN4nBFkyQA6kxIKGdZud91vsJqEUHvEWos8VQCtitfx', '2019-02-27 07:42:14', '2019-02-27 07:41:21'),
(84, 'محمد ال منشط', 'md@md.com', '$2y$10$zouVZhtLVxvNomTcdSE6e.ryjABCWfKUZS4HO1pgzN7TxJMLPUbkC', 2, 'pHW8kqxdnnxVLd7WrqhvCaTCOPjby2TiFvVlpp26kTKyMyXtdK4waPbqWLLw', '2019-03-02 07:21:51', '2019-02-27 07:43:32'),
(85, 'د يوسف', 'az@az.com', '$2y$10$gzXvtwXVHdos11aDGYcuu.2lqOmQMHGhXFy2phF04s9bFRcuTQSt6', 5, 'j8MAl0Do41ytkKT1S6PuUYXBymA1ktrmUlOEYvudpxq5yG6BTQ3kQSDeytJ5', '2019-02-27 10:49:15', '2019-02-27 07:46:14'),
(86, 'بن موسى', 'ms@ms.com', '$2y$10$uUAfRJrzjqawC7/yAyFzuOPqnCIJsWg51zIj6CLzskjb1tgCQjzIO', 2, NULL, '2019-03-01 17:09:51', '2019-03-01 17:09:51'),
(87, 'mry', 'my@my.com', '$2y$10$X1QmFcHWyqmrmyRP9dZ0tuEFcm1ld53hE2ennDNb.wozZM8DlUgNy', 2, NULL, '2019-03-02 04:28:45', '2019-03-02 04:28:45'),
(88, 'ft', 'ft@ft.com', '$2y$10$W8OcZu0QS6s2z/slwY9Ps.9wPyzYQDGIav/G5gcXO0MX2oFOGaeMC', 2, NULL, '2019-03-02 04:45:15', '2019-03-02 04:45:15'),
(89, 'المراجع رقم10', 'rev10@rev10.com', '$2y$10$JUBMcesS00/CYLUT2pdUGO1wHii4rVtLzILb11j5seebyF/09nF6G', 5, 'rjvBUEhsso1SUgmgPpM2Tgi2ueBLRAk0JOf1TDEwmem1u17fzIPDVWTRSEwn', '2019-03-02 12:22:21', '2019-03-02 07:45:08'),
(91, 'تجربة', 'test@test.com', '$2y$10$PVBIcFzti23/cQyU.9mb5Ow7gdVo2oCnxz8YJoQedCGKNWba4MLbe', 2, NULL, '2019-03-02 11:22:29', '2019-03-02 11:22:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
