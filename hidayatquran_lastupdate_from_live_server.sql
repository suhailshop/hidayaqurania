-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.52:3306
-- Generation Time: Mar 13, 2019 at 06:50 PM
-- Server version: 5.7.24
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hidayatquran_dv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin2_reports`
--

CREATE TABLE `admin2_reports` (
  `ID` int(11) NOT NULL,
  `search` int(11) NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `note` text NOT NULL,
  `filename` varchar(500) DEFAULT NULL,
  `date` text NOT NULL,
  `admin2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `URL` text,
  `ISBN` varchar(255) CHARACTER SET utf8 NOT NULL,
  `PictureURL` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `Code`, `Name`, `Author`, `URL`, `ISBN`, `PictureURL`, `Status`, `created_at`, `updated_at`) VALUES
(7, NULL, 'كتب غريب القرآن', 'لا يوجد', 'https://drive.google.com/open?id=1mTfEy1Ah_f0NcpmIhfL4h-FLU2UaOOna', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:27:29', '2019-03-04 04:27:29'),
(6, NULL, 'كتب أحكام القرآن', 'لا يوجد', 'https://drive.google.com/open?id=1Q8r6TXUe4KxPF7SXcmIPxR-OU81f__RS', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:26:34', '2019-03-04 04:26:34'),
(4, NULL, 'موسوعة التفسير بالمأثور', 'لا يوجد', 'https://drive.google.com/open?id=1FzB5C86cbfydZJTsxb0GNfkvg2wQKyb0', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:24:41', '2019-03-04 04:24:41'),
(5, NULL, 'كتب التفسير', 'لايوجد', 'https://drive.google.com/open?id=13EES0KJlBfED4HXYGr9cKHcBuuaaJlua', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:25:34', '2019-03-04 04:25:34'),
(8, NULL, 'كتب معاني القرآن', 'لا يوجد', 'https://drive.google.com/open?id=1qA7NE_VQrLskg3TrMJBIqVm3zEe_Bqpd', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:28:09', '2019-03-04 04:28:09'),
(9, NULL, 'كتب الوجوه والنظائر', 'لايوجد', 'https://drive.google.com/open?id=15C8PYxBy4ZQecC8Mvh3SgFCVx_xUROz3', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:30:39', '2019-03-04 04:30:39'),
(10, NULL, 'كتب المتشابه اللفظي', 'لايوجد', 'https://drive.google.com/open?id=1gQ_ymJZI7cU80JmAfjyDEGvxEQfJEkDz', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:31:33', '2019-03-04 04:31:33'),
(11, NULL, 'كتب إعراب القرآن', 'لايوجد', 'https://drive.google.com/open?id=1eRn6uQDn2zC9_7YBkknZ6ptQwGP2pRxq', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:32:20', '2019-03-04 04:32:20'),
(12, NULL, 'كتب القراءات القرآنية', 'لايوجد', 'https://drive.google.com/open?id=1M2oVHPLj4zoq5uAJafns58WoksRyz1dn', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:32:49', '2019-03-04 04:32:49'),
(13, NULL, 'كتب توجيه القراءات القرآنية', 'لايوجد', 'https://drive.google.com/open?id=1sr_OjBtx4QOw7EvKOs_Q2DdP5ClcIwkg', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:33:18', '2019-03-04 04:33:18'),
(14, NULL, 'كتب نكت القرآن وأسئلته', 'لايوجد', 'https://drive.google.com/open?id=1kXY3fQWqT7lo783yPR2n3s7ZSucSx0an', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:33:58', '2019-03-04 04:33:58'),
(15, NULL, 'كتب مناسبات السور والآيات القرآنية', 'لايوجد', 'https://drive.google.com/open?id=1iflFVyzeHfp5KgpBePPvJFnFKo8Z7hPh', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:34:28', '2019-03-04 04:34:28'),
(16, NULL, 'كتب علوم القرآن', 'لايوجد', 'https://drive.google.com/open?id=1iNOGqvKXjXdagoCHVM6KjG_-pRpg1GlG', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:34:51', '2019-03-04 04:34:51'),
(17, NULL, 'كتب أسباب النزول', 'لايوجد', 'https://drive.google.com/open?id=1Gtfe8sGxHcEg-sStAx_2J4kR-RagTdVQ', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:35:16', '2019-03-04 04:35:16'),
(18, NULL, 'كتب الناسخ والمنسوخ', 'لايوجد', 'https://drive.google.com/open?id=1YFmqgYI7RlW7S_-s36zn_AQWzqOhDzPZ', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:35:48', '2019-03-04 04:35:48'),
(19, NULL, 'كتب اللغة', 'لايوجد', 'https://drive.google.com/open?id=1b2hL8n62FsR08kOSnRRszlAUraxQTHRm', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:36:13', '2019-03-04 04:36:13'),
(20, NULL, 'كتب النحو والصرف', 'لايوجد', 'https://drive.google.com/open?id=1YWFfLkarxzO9EPabg3bx9lJd5BBMZ24n', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:36:36', '2019-03-04 04:36:36'),
(21, NULL, 'كتب البلاغة القرآنية', 'لايوجد', 'https://drive.google.com/open?id=1debMOjTJZz94lGp6Sdf6y1cMp8fwQ4pW', 'روابط مراجع موسوعة الهدايات', NULL, 'yes', '2019-03-04 04:37:09', '2019-03-04 04:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `committees`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committees`
--

INSERT INTO `committees` (`ID`, `Code`, `FirstName`, `LastName`, `Gender`, `Function`, `PictureURL`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mm', 'mmm', 'mm', 'mm', NULL, 'mm', '2018-10-27 23:23:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `committesreports`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `configs` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `DateStartInscription` date NOT NULL,
  `DateEndInscription` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Flag` varchar(255) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`ID`, `Code`, `Name`, `Flag`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'السعودية', 'fileName1539427410.png', 'yes', '2018-10-13 08:43:30', '2018-10-13 08:43:30'),
(3, NULL, 'السودان', 'fileName1540290040.jpg', 'yes', '2019-02-25 23:15:17', '2018-10-23 08:20:41'),
(12, NULL, 'الأردن', NULL, 'yes', '2019-03-02 23:14:21', '2019-03-02 23:14:21'),
(16, NULL, 'ماليزيا', NULL, 'yes', '2019-03-02 23:15:13', '2019-03-02 23:15:13'),
(20, NULL, 'المغرب', NULL, 'yes', '2019-03-02 23:15:58', '2019-03-02 23:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `cycles` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cycles`
--

INSERT INTO `cycles` (`ID`, `name`, `startDate`, `endDate`, `created_at`, `updated_at`) VALUES
(1, 'التقرير الدوري الأول', '2019-03-05', '2019-03-15', '2019-03-07 07:54:47', '2019-01-29 20:46:04'),
(2, 'التقرير الدوري الثاني', '2019-06-05', '2019-06-15', '2019-03-07 07:53:39', '0000-00-00 00:00:00'),
(3, 'التقرير الدوري الثالث', '2019-09-01', '2019-09-15', '2019-03-04 11:19:23', '0000-00-00 00:00:00'),
(4, 'التقرير الدوري الرابع', '2019-05-13', '2019-06-21', '2019-03-06 09:22:22', '0000-00-00 00:00:00'),
(5, 'التقرير الدوري الخامس', '2019-04-01', '2019-04-12', '2019-02-18 18:45:27', '0000-00-00 00:00:00'),
(6, 'التقرير الدوري السادس', '2019-04-14', '2019-04-23', '2019-02-18 18:45:27', '0000-00-00 00:00:00'),
(7, 'التقرير الدوري السابع', '2019-05-14', '2019-05-23', '2019-02-18 18:46:36', '0000-00-00 00:00:00'),
(8, 'التقرير الدوري الثامن', '2019-07-01', '2019-08-01', '2019-03-06 09:27:58', '2019-02-18 17:47:43'),
(9, 'التقرير الدوري التاسع', '2019-07-01', '2019-07-10', '2019-02-18 17:48:14', '2019-02-18 17:48:14'),
(10, 'التقرير الدوري العاشر', '2019-07-11', '2019-07-22', '2019-02-18 17:48:46', '2019-02-18 17:48:46'),
(11, 'التقرير الدوري الحادي عشر', '2019-07-23', '2019-07-30', '2019-02-18 17:49:16', '2019-02-18 17:49:16'),
(12, 'التقرير الدوري الثاني عشر', '2019-05-16', '2019-08-10', '2019-02-22 20:49:11', '2019-02-18 17:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`ID`, `Code`, `Section`, `Alias`, `Name`, `Order`, `Status`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '', 'الباب الأول - الفصل الأول : اسم السورة ، وفضلها ، واحوال نزولها', 3, 'yes', '2019-03-04 11:23:28', '2018-10-27 05:43:40'),
(2, '2', 1, '', ' الباب الأول - الفصل الثاني : معاني السورة، ومقاصدها', 4, 'yes', '2019-03-04 11:23:36', '2018-10-27 05:43:40'),
(3, '3', 2, '', 'الباب الثاني - الفصل الأول : الهدايات الجزئية والكلية في السورة', 5, 'yes', '2019-03-04 11:23:48', '2018-10-27 05:43:42'),
(4, '4', 2, '', 'الباب الثاني - الفصل الثاني : مناسبات السورة وخصائصها وأساليبها في عرض هداياتها', 6, 'yes', '2019-03-04 11:24:02', '2018-10-27 05:43:42'),
(5, '5', 2, '', 'الباب الثاني - الفصل الثالث : واقع الأمة في ضوء هدايات السورة وأثر ذلك عليها', 7, 'yes', '2019-03-04 11:24:18', '2018-10-27 05:43:42'),
(6, '6', 3, 'مقدمة', 'مقدمة', 1, 'yes', '2018-11-02 19:27:06', '0000-00-00 00:00:00'),
(7, '7', 4, 'تمهيد', 'تمهيد', 2, 'yes', '2018-11-02 19:27:11', '0000-00-00 00:00:00'),
(8, '8', 5, 'خاتمة', 'خاتمة', 8, 'yes', '2018-11-02 19:26:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `divisionunits`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `examsfiles` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Provide` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`ID`, `Code`, `Name`, `PresidentName`, `City`, `Location`, `Phonne`, `Fax`, `Email`, `Logo`, `University`, `Status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'كلية العلوم', 'رشيد العامل', 'تطوان', '158 شارع المقاومة', '0002526969', '0635288745', 'badouch.maroc@gmail.com', 'fileName1539430010.jpg', 3, 'yes', '2018-10-23 11:14:08', '2018-10-13 09:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`ID`, `Date`, `Name`, `Location`, `created_at`, `updated_at`) VALUES
(4, '2018-12-11', 'مؤتمر الهدايات القرآنية بماليزيا', 'جامعة ملايا - كوالا لمبور، ماليزيا', '2019-03-04 06:22:17', '2019-03-04 06:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `meetings_searchers`
--

CREATE TABLE `meetings_searchers` (
  `ID` int(11) NOT NULL,
  `Meeting` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `Status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `ID` int(11) NOT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationalities`
--

INSERT INTO `nationalities` (`ID`, `Code`, `Name`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'السعودية', 'yes', '2019-03-03 23:57:04', '2019-02-27 07:49:03'),
(3, NULL, 'السودان', 'yes', '2019-02-27 07:49:25', '2019-02-27 07:49:25'),
(4, NULL, 'المغرب', 'yes', '2019-02-27 07:49:45', '2019-02-27 07:49:45'),
(5, NULL, 'ماليزيا', 'yes', '2019-02-27 07:50:10', '2019-02-27 07:50:10'),
(6, NULL, 'مصر', 'yes', '2019-02-27 07:50:46', '2019-02-27 07:50:46'),
(7, NULL, 'ايران', 'yes', '2019-02-27 07:51:09', '2019-02-27 07:51:09'),
(8, NULL, 'الأردن', 'yes', '2019-03-03 23:56:38', '2019-02-27 07:52:18'),
(9, NULL, 'مالي', 'yes', '2019-03-04 12:37:15', '2019-03-04 12:37:15'),
(10, NULL, 'اليمن', 'yes', '2019-03-04 19:29:44', '2019-03-04 19:29:44'),
(11, NULL, 'الفلبين', 'yes', '2019-03-06 11:10:22', '2019-03-06 11:10:22'),
(13, NULL, 'الكويت', 'yes', '2019-03-06 11:25:52', '2019-03-06 11:25:52'),
(14, NULL, 'أمريكا', 'yes', '2019-03-06 11:26:35', '2019-03-06 11:26:35'),
(15, NULL, 'الجزائر', 'yes', '2019-03-06 11:26:55', '2019-03-06 11:26:55'),
(16, NULL, 'العراق', 'yes', '2019-03-06 11:28:39', '2019-03-06 11:28:39'),
(17, NULL, 'عمان', 'yes', '2019-03-06 11:31:52', '2019-03-06 11:31:52'),
(18, NULL, 'نيجيريا', 'yes', '2019-03-06 11:33:02', '2019-03-06 11:33:02'),
(19, NULL, 'ليبيا', 'yes', '2019-03-06 11:33:20', '2019-03-06 11:33:20'),
(20, NULL, 'روسيا', 'yes', '2019-03-06 11:35:14', '2019-03-06 11:35:14'),
(21, NULL, 'سوريا', 'yes', '2019-03-06 11:53:18', '2019-03-06 11:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `details`, `created_at`, `updated_at`) VALUES
(4, 'توقيع عقد إنشاء كرسي الهدايات القرآنية', '1.jpg', '<p style=\"text-align: center;\"><span style=\"font-size: large;\"><strong>توقيع عقد إنشاء كرسي الهدايات القرآنية</strong></span></p>\r\n<p style=\"text-align: right;\" dir=\"rtl\"><span style=\"font-size: large;\"><strong>بحضور معالي مدير جامعة أم القرى الدكتور عبدالله بافيل، وقعت إدارة الموسوعة العالمية للهدايات القرآنية عقد إنشاء كرسي الهدايات القرآنية بجامعة أم القرى. حيث يسعى هذا المشروع إلى التركيز في أبحاث القرآن الكريم واستخراج هداياته وأحكامه.</strong></span></p>\r\n<p style=\"text-align: right;\" dir=\"rtl\"><span style=\"font-size: large;\"><strong>وسيضم فريق العمل مجموعة من الأساتذة العلماء في مجال القرآن الكريم وتفسيره، كما يتيح البرنامج انضمام الطلاب من شتى دول العالم وذلك من أجل التنوع المعرفي.</strong></span></p>', '2019-03-04 04:07:26', '2018-10-25 15:44:23'),
(6, 'مؤتمر الهدايات القرآنية الأول بماليزيا', '1551672127.jpg', '<p style=\"text-align: center;\"><span style=\"font-size: large;\"><strong>مؤتمر الهدايات القرآنية الأول بماليزيا</strong></span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: large;\"><strong>&nbsp;</strong></span></p>\r\n<p style=\"direction: rtl; text-align: right;\"><span style=\"font-size: large;\"><strong>نظمت إدارة الموسوعة العالمية للهدايات القرآنية وبالتعاون مع جامعة ملايا الماليزية أول مؤتمر في الهدايات القرآنية وذلك في شهر نوفمبر 2018م في جامعة ملايا بالعاصمة الماليزية كوالالمبور.</strong></span></p>\r\n<p style=\"direction: rtl; text-align: right;\"><span style=\"font-size: large;\"><strong>&nbsp;</strong></span></p>\r\n<p style=\"direction: rtl; text-align: right;\"><span style=\"font-size: large;\"><strong>حضر المؤتمر عدد كبير من طلاب الموسوعة من مختلف الدول، من المملكة العربية السعودية ومن السودان والأردن والمغرب وغيرها. وعبر عدد كبير من الحضور امتنانهم للمشاركة في هذا الحدث المعرفي الكبير.</strong></span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: large;\"><strong>&nbsp;</strong></span></p>', '2019-03-04 04:02:07', '2018-10-25 15:44:23'),
(12, 'تدشين البوابة الالكترونية للموسوعة', '1551671064.JPG', '<p style=\"text-align: center;\"><span style=\"font-size: x-large;\"><strong>إطلاق البوابة الالكترونية للموسوعة</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: right;\"><span style=\"font-size: large;\"><strong>قامت إدارة الموسوعة العالمية للهدايات القرآنية بتدشين البوابة الالكترونية للموسوعة والتي تساعد في عملية إدارة وتحكيم الأبحاث بشكل أكثر سلاسة. حيث تتيح البوابة للباحثين والمشرفين وأعضاء اللجنة العلمية متابعة بحوثات الطلاب والتقارير المرسلة من قبلهم ومن قبل مشرفيهم بشكل مباشر. كما يستطيع الطالب أيضا الحصول على تقرير ومرئيات اللجنة العلمية عن ابحاثه بشكل فوري.&nbsp;</strong></span></p>\r\n<p style=\"text-align: right;\" dir=\"rtl\"><span style=\"font-size: large;\"><strong>بالإضافة إلى ذلك، تتيح البوابة للطلاب التواصل مع المشرفين والإدارة بشكل أسهل وأفضل. حيث تسعى إدارة الموسوعة إلى تطوير فنية وتقنية متقدمة من شأنها تسهيل إعداد الدراسات البحثية وحتى الانتهاء من مشروع الهدايات القرآنية.</strong></span></p>', '2019-03-04 03:45:11', '2019-03-04 03:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `ID` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `Record` text NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`ID`, `Searcher`, `Record`, `StartDate`, `EndDate`, `updated_at`, `created_at`) VALUES
(10, 98, 'التمهيد + الفصل الأول من الباب اﻷول', '2018-08-01', '2018-12-31', '2019-03-05 05:38:17', '2019-03-05 05:38:17'),
(9, 98, 'الهدايات القرآنية من 171 اﻷعراف إلى 40 اﻷنفال', '2019-01-01', '2020-12-31', '2019-03-05 05:22:07', '2019-03-05 05:22:07'),
(8, 98, 'خطة زمنية للباحث محمد المطري', '2019-01-01', '2020-12-31', '2019-03-05 04:58:01', '2019-03-05 04:58:01'),
(11, 98, 'الباب اﻷول - الفصل الثاني - مبحث معاني مفردات السورة', '2019-01-01', '2019-03-15', '2019-03-05 05:40:44', '2019-03-05 05:40:44'),
(12, 98, 'الباب اﻷول - الفصل الثاني - مبحث مقاصد السورة + المعنى اﻹجمالي', '2019-03-15', '2019-06-15', '2019-03-05 05:43:21', '2019-03-05 05:43:21'),
(13, 98, 'الباب الثاني - الفصل اﻷول - مبحث الهدايات الخاصة بسورة اﻷعراف', '2019-06-15', '2019-09-15', '2019-03-05 05:46:54', '2019-03-05 05:46:54'),
(14, 98, 'الباب الثاني - الفصل اﻷول - مبحث الهدايات الكلية في سورة اﻷعراف', '2019-09-15', '2019-12-31', '2019-03-05 05:49:43', '2019-03-05 05:49:43'),
(15, 98, 'الباب الثاني - الفصل الثاني + الفصل الثالث', '2020-01-01', '2020-03-15', '2019-03-05 05:52:55', '2019-03-05 05:52:55'),
(16, 98, 'القسم الثاني - الباب اﻷول - الفصل اﻷول + الشروع في الفصل الثاني', '2020-03-15', '2020-06-15', '2019-03-05 06:14:24', '2019-03-05 06:14:24'),
(17, 98, 'القسم الثاني - الباب اﻷول - إكمال الفصل الثاني', '2020-06-15', '2020-09-15', '2019-03-05 06:16:10', '2019-03-05 06:16:10'),
(18, 98, 'القسم الثاني - الباب الثاني كاملا + الخاتمة', '2020-09-15', '2020-12-31', '2019-03-05 06:17:57', '2019-03-05 06:17:57'),
(19, 93, '29/8/2018 تم قبول واعتماد خطة رسالة الدكتوراة في الجامعة الأردنية', '2019-01-01', '2020-01-01', '2019-03-06 11:42:53', '2019-03-06 11:42:53'),
(20, 102, 'الخطة الزمنية لإنجاز الرسالة', '2019-01-01', '2021-01-01', '2019-03-07 07:14:17', '2019-03-07 07:14:17'),
(21, 84, 'الخطة الزمنية التنفيذية', '2017-09-21', '2019-08-30', '2019-03-08 18:24:30', '2019-03-08 18:24:30'),
(22, 110, 'الخطة الزمنية لانجاز كامل البحث', '2019-01-01', '2020-11-30', '2019-03-11 18:08:22', '2019-03-11 17:54:45'),
(23, 110, 'الفصل الأول: اسم السورة وفضلها وأحوال نزولها', '2019-01-01', '2019-02-01', '2019-03-11 18:02:39', '2019-03-11 18:02:39'),
(24, 110, 'المبحث الثاني: الهدايات الخاصة بآيات السورة', '2019-02-02', '2019-09-30', '2019-03-11 18:04:24', '2019-03-11 18:04:24'),
(25, 110, 'المبحث الثاني: الهدايات الكلية بالسورة', '2019-10-01', '2019-11-30', '2019-03-11 18:05:49', '2019-03-11 18:05:49'),
(26, 110, 'المبحث الأول: معاني مفردات السورة', '2019-12-01', '2019-12-31', '2019-03-11 18:06:43', '2019-03-11 18:06:43'),
(27, 110, 'المبحث الثاني: مقاصد السورة', '2020-01-01', '2020-01-31', '2019-03-11 18:07:43', '2019-03-11 18:07:43'),
(28, 111, 'الهدايات القرآنية في سورة مريم دراسة تطبيقية', '2019-01-01', '2020-12-31', '2019-03-11 19:35:51', '2019-03-11 19:35:51'),
(29, 112, 'هدايات سورة طه', '2018-10-16', '2022-10-16', '2019-03-11 19:59:19', '2019-03-11 19:59:19'),
(30, 95, 'الهدايات القرآنية في سورة الأنعام وأثرها في علاج واقع الأمة: طلبة الجامعات الماليزية نموذجاً', '2018-10-01', '2021-02-25', '2019-03-12 10:21:53', '2019-03-12 10:21:53'),
(31, 113, 'الهدايات القرآنية في سورة الأنبياء دراسة تطبيقية', '2019-01-01', '2020-12-30', '2019-03-12 14:43:51', '2019-03-12 14:42:04'),
(32, 103, 'الهدايات القرانية في سورة هود دراسة تطبيقية من بداية السورة الى الآية رقم ٨٤', '2019-01-01', '2021-01-01', '2019-03-13 11:38:37', '2019-03-13 11:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `ID` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL,
  `Months` int(11) NOT NULL,
  `MonthlyProgress` double NOT NULL,
  `InitialProgress` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`ID`, `Searcher`, `Months`, `MonthlyProgress`, `InitialProgress`) VALUES
(1, 11, 24, 4.16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `provides`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `ID` int(11) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`ID`, `Code`, `PassportNumber`, `NationalNumber`, `Fistname`, `LastName`, `Gender`, `BirthDate`, `BirthCity`, `Nationalitie`, `Countrie`, `City`, `Location`, `CertificateType`, `CertificateDegree`, `InscriptionDate`, `Type`, `University`, `Faculty`, `Phonne1`, `Phonne2`, `Email`, `PictureURL`, `CV`, `Status`, `User`, `EnablePlanEdit`, `updated_at`, `created_at`) VALUES
(89, '38-9', NULL, NULL, 'هالة هاشم أبوزيد', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', NULL, NULL, NULL, NULL, 'hahmed@hidayatqurania.org', 'avat2.png', NULL, 'مفعل', 142, 'true', '2019-03-10 00:02:31', '2019-03-10 00:02:31'),
(79, NULL, '07634420', '-', 'د. يوسف محمد عبده محمد', 'العواضي', 'ذكر', '1975-12-07', 'اليمن - إب', 10, 16, 'كولالمبور', 'C-12-05, Amadesa Resort Condominium Jalan 5/125, Taman Desa Petaling, 57100 Kuala Lumpur', NULL, 'أستاذ مشارك', '1975-10-04', 'supervisor', 10, 'العلوم الإسلامية', '00601139725667', '00601139725667', 'ymohammed@hidayatqurania.org', 'fileName1551843967.jpg', NULL, 'yes', 132, 'true', '2019-03-06 03:46:07', '2019-03-06 03:46:07'),
(81, '38-1', '08282088', '2318641871', 'عادل سليمان ضحوي', NULL, 'ذكر', '1981-08-09', 'اليمن', 10, 2, 'مكة', 'حي العمرة', NULL, 'ماجستير', '2017-03-22', 'searcher', 2, 'الدعوة', '96649748615', '96649748615', 'adahawi@hidayatqurania.org', 'fileName1551727133.jpg', 'CV1551727536.pdf', 'مفعل', 134, 'true', '2019-03-04 19:30:52', '2019-03-04 19:30:52'),
(82, '38-2', '1051316824', '1051316824', 'محمد آل منشط', NULL, 'ذكر', '1988-03-28', 'أبها', 2, 2, 'أبها', 'أبها', NULL, 'ماجستير', '2017-09-21', 'searcher', 2, 'الدعوة وأصول الدين', '966508574599', '966508574599', 'masiri@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 135, 'true', '2019-03-11 18:22:49', '2019-03-11 18:22:49'),
(83, '38-3', 'T290753', '1018403434', 'محمد إبراهيم الدعيس', NULL, 'ذكر', '1399-08-11', 'يبه', 2, 2, 'القنفذة/ القوز', 'القوز ـ الدار البيضاء', NULL, 'دكتوراه', '2018-01-01', 'searcher', 2, 'الدعوة وأصول الدين', '966504510122', '966504510122', 'malduays@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 136, 'true', '2019-03-04 19:58:48', '2019-03-04 19:58:48'),
(84, '38-4', 'U325444', '1055080616', 'أيمن غازي صابر', NULL, 'ذكر', '1978-12-20', 'جدة', 2, 2, 'جدة', 'حي المروة 8- شارع وادي الخمس', NULL, 'دكتوراه', '2017-09-21', 'searcher', 2, 'الدعوة وأصول الدين', '966546191863', '966546191863', 'asaber@hidayatqurania.org', 'fileName1552068514.jpg', 'CV1552068910.pdf', 'مفعل', 137, 'true', '2019-03-08 18:15:10', '2019-03-08 18:15:10'),
(85, '38-5', 'W434900', '1025504067', 'عبدالهادي بن علي بن عبدالرحمن الشمراني', NULL, 'ذكر', '1978-02-25', 'نجران/ المملكة العربية السعودية', 2, 2, 'مكة المكرمة', 'الرصيفة - حي إسكان الملك فهد', NULL, 'الدكتوراة', '2017-04-11', 'searcher', 2, 'كلية الدعوة وأصول الدين', '966550045858', '966550045858', 'aalshamrani@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 138, 'true', '2019-03-11 18:00:21', '2019-03-11 18:00:21'),
(86, '38-6', '011593693', '2238397471', 'عبدالله التركاوي', NULL, 'ذكر', '1971-10-01', 'سوريا', 21, 2, 'المدينة المنورة', 'أول طريق الهجرة - خلف مستوصف دار السلام', NULL, 'ماجستير', '2016-06-06', 'searcher', 4, 'الدراسات العلية', '00966500263901', '00966500263901', 'aalterkawi@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 139, 'true', '2019-03-13 17:00:51', '2019-03-13 17:00:51'),
(87, '38-7', 'P02642718', NULL, 'عثمان محمد', NULL, 'ذكر', '1983-01-01', 'الحصاحيصا ولاية الجزيرة', 3, 2, 'الخرطوم', 'جامعة افريقيا العالمية كلية القرآن الكريم', NULL, 'دكتوراه', '2018-01-01', 'searcher', 3, 'الدراسات الإسلامية', '00249121573337', '00249121573337', 'oali@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 140, 'true', '2019-03-11 11:18:40', '2019-03-11 11:18:40'),
(88, '38-8', 'P04502675', NULL, 'مايو إدريس يونس', NULL, 'أنثى', '1972-12-27', 'ام درمان', 3, 3, 'ام درمان', 'ام درمان الثورة الحارة 21', NULL, 'دكتوراه', '2018-01-25', 'searcher', 5, 'كلية الدراسات العليا أصول الدين', '249122960033', '249117235933', 'mbahar@hidayatqurania.org', 'avat2.png', NULL, 'مفعل', 141, 'true', '2019-03-11 12:00:43', '2019-03-11 12:00:43'),
(78, NULL, 'V417664', '1027669389', 'أ.د يحيى', 'زمزمي', 'ذكر', '1966-07-29', 'مكة المكرمة', 2, 2, 'مكة المكرمة', 'الاسكان ( حي الملك فهد )', NULL, 'أستاذ دكتور', '2000-01-01', 'supervisor', 2, 'كلية الدعوة وأصول الدين', '966505657432', '966505657432', 'yzamzami1@hidayatqurania.org', 'avat.png', NULL, 'yes', 131, 'true', '2019-03-11 09:45:58', '2019-03-11 09:45:58'),
(76, NULL, NULL, NULL, 'د. نبيل الجوهري', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 11, NULL, NULL, NULL, 'naljohari@hidayatqurania.org', 'avat.png', NULL, 'yes', 129, 'true', '2019-03-04 02:14:48', '2019-03-04 02:14:48'),
(77, NULL, 'U271683', '1015011701', 'د. ياسين', 'قاري', 'ذكر', '1967-12-26', 'المدينة المنورة', 2, 2, 'مكة المكرمة', 'السبهاني', NULL, 'دكتور', '2000-01-01', 'supervisor', 2, 'كلية الدعوة وأصول الدين', '966555305443', '966555305443', 'yqari1@hidayatqurania.org', 'avat.png', NULL, 'yes', 130, 'true', '2019-03-11 09:44:38', '2019-03-11 09:44:38'),
(75, NULL, NULL, NULL, 'د. محمد نجيب', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 9, NULL, NULL, NULL, 'mqader@hidayatqurania.org', 'avat.png', NULL, 'yes', 128, 'true', '2019-03-04 02:14:02', '2019-03-04 02:14:02'),
(73, NULL, 'O840000', '-', 'د. محمد خازر المجالي', 'أستاذ', 'ذكر', '1961-02-06', 'الزرقاء-الأردن', 8, 12, 'عمان', 'كلية الشريعة-الجامعة الأردنية', NULL, 'أستاذ', '1993-09-04', 'supervisor', 6, 'الشريعة', '00962777622322', '00962777622322', 'malmajali@hidayatqurania.org', 'avat.png', NULL, 'yes', 126, 'true', '2019-03-11 16:24:51', '2019-03-11 16:24:51'),
(74, NULL, 'BL9851935', 'لست مقيما في المملكة', 'د. محمد بلحسان', 'المهدي', 'ذكر', '1963-03-25', 'المغرب', 4, 20, 'القنيطرة', '70، المغرب العربي أ توسعة. القنيطرة', NULL, 'أستاذ التعليم العالي درجة ج', '1994-01-13', 'supervisor', 15, 'كلية الآداب و العلوم الانسانية', '212661406692', '212661406692', 'mbalhsan@hidayatqurania.org', 'avat.png', NULL, 'yes', 127, 'true', '2019-03-11 21:28:56', '2019-03-11 21:28:56'),
(70, NULL, NULL, NULL, 'د. محمد الأمين', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 3, NULL, NULL, NULL, 'maismail@hidayatqurania.org', 'avat.png', NULL, 'yes', 123, 'true', '2019-03-04 02:11:49', '2019-03-04 02:11:49'),
(71, NULL, NULL, NULL, 'د. محمد الحميد', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 11, NULL, NULL, NULL, 'malhumaid@hidayatqurania.org', 'avat.png', NULL, 'yes', 124, 'true', '2019-03-04 02:12:16', '2019-03-04 02:12:16'),
(72, NULL, '1013770449', '1013770449', 'د. محمد بن عبدالله الربيعة', 'الربيعة', 'ذكر', '1969-09-13', 'القصسم', 2, 2, 'القصيم', 'جامعة القصيم - قسم القرآن وعلومه', NULL, 'استاذ مشارك', '2019-03-13', 'supervisor', 12, 'الشريعة والدراسات الإسلامية', '966504882342', '96613424563', 'malrabiah@hidayatqurania.org', 'avat.png', NULL, 'yes', 125, 'true', '2019-03-13 05:24:05', '2019-03-13 05:24:05'),
(61, NULL, 'P03937058', '178-9571-5912', 'د. عائشة علي', 'عائشه', 'أنثى', '1957-01-01', 'دنقلا', 3, 3, 'الخرطوم', 'الخرطوم', NULL, 'دكتوراه', '2010-01-01', 'supervisor', 3, 'القرآن الكريم', '٠٩٢٢٣٩٤٩٠٩', '٠٩٢٢٣٩٤٩٠٩', 'aalimam@hidayatqurania.org', 'avat2.png', NULL, 'yes', 114, 'true', '2019-03-12 17:44:23', '2019-03-12 17:44:23'),
(62, NULL, NULL, NULL, 'د. عبداللطيف أحمد', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 8, NULL, NULL, NULL, 'aramchahi@hidayatqurania.org', 'avat.png', NULL, 'yes', 115, 'true', '2019-03-04 02:08:14', '2019-03-04 02:08:14'),
(63, NULL, 'GS2652452', 'H16450', 'د. عبدالله البخاري', 'العبدي', 'ذكر', '1960-12-31', 'آسفي المملكة المغربية', 4, 20, 'أغادير', 'حي السلام زنقة 942 رقم 20 أغادير', NULL, 'أستاذ التعليم العالي', '2000-01-24', 'supervisor', 14, 'كلية الآداب والعلوم الانسانية', '212668108509', '212668108509', 'aelboukhari@hidayatqurania.org', 'avat.png', NULL, 'yes', 116, 'true', '2019-03-04 23:01:52', '2019-03-04 23:01:52'),
(64, NULL, NULL, NULL, 'د. عبدالله الزبير', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 3, NULL, NULL, NULL, 'asalih@hidayatqurania.org', 'avat.png', NULL, 'yes', 117, 'true', '2019-03-04 02:08:56', '2019-03-04 02:08:56'),
(65, NULL, 'u680627', '1063625147', 'د. علي السكاكر', 'السكاكر', 'ذكر', '1982-06-06', 'بريدة', 2, 2, 'المدينة المتورك', 'الجامعة الإسبامية', NULL, 'استاذ مشارك', '1998-01-11', 'supervisor', 11, 'القرآن الكريم', '+966598541834', '0598541834', 'aalsakaker@hidayatqurania.org', 'avat.png', NULL, 'yes', 118, 'true', '2019-03-11 17:37:54', '2019-03-11 17:37:54'),
(66, NULL, NULL, NULL, 'د. فايز الترجمي', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 11, NULL, NULL, NULL, 'falturjmi@hidayatqurania.org', 'avat.png', NULL, 'yes', 119, 'true', '2019-03-04 02:09:54', '2019-03-04 02:09:54'),
(67, NULL, 'A29131305', '750323-10-5935', 'د. فضلان محمد عثمان', 'الماليزي', 'ذكر', '1975-03-23', 'سلانحور، ماليزيا', 5, 16, 'BANGI', 'PUSAT KELESTARIAN TURATH ISLAMI, FAKULTI PENGAJIAN ISLAM, UNIVERSITI KEBANGSAAN MALAYSIA, 43600 UKM, BANGI, SELANGOR, MALAYSIA', NULL, 'الدكتوراة', '2004-02-12', 'supervisor', 9, 'كلية الدراسات الإسلامية', '0060192233754', '0060192233754', 'fothman@hidayatqurania.org', 'fileName1552451936.jpg', NULL, 'yes', 120, 'true', '2019-03-13 04:38:56', '2019-03-13 04:38:56'),
(68, NULL, NULL, NULL, 'د. فيصل الغزاوي', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 2, NULL, NULL, NULL, 'fghazawi@hidayatqurania.org', 'avat.png', NULL, 'yes', 121, 'true', '2019-03-04 02:10:58', '2019-03-04 02:10:58'),
(69, NULL, NULL, NULL, 'د. مبارك التيجاني', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 4, NULL, NULL, NULL, 'maltijani@hidayatqurania.org', 'avat.png', NULL, 'yes', 122, 'true', '2019-03-04 02:11:25', '2019-03-04 02:11:25'),
(58, NULL, '092287', 'لا يوجد', 'د. سليمان محمد الدقور', 'الدقور', 'ذكر', '1972-11-07', 'الاردن/ الشوبك', 8, 12, 'الجبيهة', 'الجامعة الأردنية', NULL, 'أستاذ', '2007-02-10', 'supervisor', 6, 'الشريعة', '962772345664', '962772345664', 'saldgoor@hidayatqurania.org', 'avat.png', NULL, 'yes', 111, 'true', '2019-03-12 07:28:34', '2019-03-12 07:28:34'),
(59, NULL, NULL, NULL, 'د. صبري محمد', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 9, NULL, NULL, NULL, 'smohamad@hidayatqurania.org', 'avat.png', NULL, 'yes', 112, 'true', '2019-03-04 02:03:09', '2019-03-04 02:03:09'),
(60, NULL, 'P01293162', '2163348879', 'أ.د/ طه عابدين', 'طه حمد', 'ذكر', '1965-06-16', 'دنقلا - السودان', 3, 2, 'مكة المكرمة', 'بطحاء قريش', NULL, 'أستاذ دكتور', '2000-01-01', 'supervisor', 2, 'كلية الدعوة وأصول الدين', '966508166974', '966508166974', 'thamed1@hidayatqurania.org', 'avat.png', NULL, 'yes', 113, 'true', '2019-03-11 09:51:47', '2019-03-11 09:51:47'),
(57, NULL, NULL, NULL, 'د. رضوان الأطرش', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 16, NULL, NULL, NULL, 'ralatrash@hidayatqurania.org', 'avat.png', NULL, 'yes', 110, 'true', '2019-03-04 01:56:34', '2019-03-04 01:56:34'),
(45, NULL, 'Tj2972340', 'J223118', 'د. إبراهيم رضا', 'رضا', 'ذكر', '1965-01-10', 'اكادير  المغرب', 4, 20, 'مراكش', 'اسيل رقم ٣٥٧ مراكش المغرب', NULL, 'استاذ التعليم العالي', '1993-09-01', 'supervisor', 13, 'كلية الاداب والعلوم الانسانية', '٠٦٦٨٦٧٥٨٦١', '٠٦٦٨٦٧٥٨٦١', 'iridha@hidayatqurania.org', 'avat.png', NULL, 'yes', 98, 'true', '2019-03-12 20:47:01', '2019-03-12 20:47:01'),
(46, NULL, NULL, NULL, 'د. أزهري حسين', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 5, NULL, NULL, NULL, 'azmhd@hidayatqurania.org', 'avat.png', NULL, 'yes', 99, 'true', '2019-03-04 01:41:20', '2019-03-04 01:41:20'),
(47, NULL, NULL, NULL, 'د. البدري بشارة', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 3, NULL, NULL, NULL, 'abisharah@hidayatqurania.org', 'avat.png', NULL, 'yes', 100, 'true', '2019-03-04 01:41:49', '2019-03-04 01:41:49'),
(48, NULL, NULL, NULL, 'د. الطاهر أحمد', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 3, NULL, NULL, NULL, 'aqader@hidayatqurania.org', 'avat.png', NULL, 'yes', 101, 'true', '2019-03-04 01:42:18', '2019-03-04 01:42:18'),
(49, NULL, '783691', '12345', 'د. أحمد خالد شكري', 'شكري', 'ذكر', '1960-11-27', 'عمان', 8, 12, 'عمان', 'شفا بدران', NULL, 'أستاذ', '1991-05-09', 'supervisor', 6, 'الشريعة', '00962775432557', '00962798513487', 'ashukri@hidayatqurania.org', 'fileName1552242527.jpg', NULL, 'yes', 102, 'true', '2019-03-11 19:00:18', '2019-03-11 19:00:18'),
(50, NULL, 'T025689', '١٠٧٠٢٦٠٨١٣', 'أ.د أمجد بن محمد زيدان', 'زيدان', 'ذكر', '1980-09-25', 'قرية الواصلي منطقة جازان  السعودية', 2, 2, 'المدينة المنورة', 'إسكان الجامعة  الإسلامية مبنى ٢١ شقة ١٢', NULL, 'أستاذ', '2003-06-01', 'supervisor', 11, 'كلية القرآن الكريم والدراسات الإسلامية', '00966505768597', '00966505768597', 'azaidan@hidayatqurania.org', 'avat.png', NULL, 'yes', 103, 'true', '2019-03-11 16:45:34', '2019-03-11 16:45:34'),
(51, NULL, 'Nh9370951', 'E233498', 'د. توفيق بن ي. أحمد بن ي. عبد الرحمن', 'العبقري', 'ذكر', '1966-11-28', 'اليوسفية', 4, 20, 'مراكش', 'حي بركة البهجة 38، أسيف، مراكش', NULL, 'أستاذ التعليم العالي (ج)', '1995-11-01', 'supervisor', 13, 'كلية الآداب والعلوم الإنسانية', '212615652269', '212615652269', 'talabqari@hidayatqurania.org', 'avat.png', NULL, 'yes', 104, 'true', '2019-03-11 11:31:31', '2019-03-11 11:31:31'),
(52, NULL, 'N526483', 'لا يوجد', 'د. ثابت أحمد أبو الحاج', 'أستاذ مشارك', 'ذكر', '1970-08-24', 'عمّان', 8, 16, 'كوالالمبور', 'قسم القرآن والحديث، أكاديمية الدراسات الإسلامية،جامعة ملايا-كوالالمبور- ماليزيا', NULL, 'الدكتوراة/ أستاذ مشارك', '2012-12-10', 'supervisor', 8, 'الدراسات الإسلامية', '0060166586630', '0060166586630', 'talhaj@hidayatqurania.org', 'fileName1552349902.jpg', NULL, 'yes', 105, 'true', '2019-03-12 00:31:16', '2019-03-12 00:31:16'),
(53, NULL, 'MI2891653', 'H202066', 'د. حسن حميتو', 'حميتو', 'ذكر', '1973-06-09', 'مراكش', 4, 20, 'اكادير', 'رقم ٢٦ بلوك س حي اركانة ايت ملول - المغرب.', NULL, 'استاذ مشارك', '2011-04-18', 'supervisor', 14, 'كلية الاداب والعلوم الانسانية', '٠٠٢١٢٦٦٨٥١٣٩٧٤', '٠٠٢١٢٦٦٨٥١٣٩٧٤', 'hhmeto@hidayatqurania.org', 'fileName1552309658.jpg', NULL, 'yes', 106, 'true', '2019-03-11 13:29:22', '2019-03-11 13:29:22'),
(54, NULL, 'v721750', '1002360491', 'د. خالد بن علي الغامدي', 'الغامدي', 'ذكر', '2019-03-11', 'مكة المكرمة', 2, 2, 'مكة', 'بطحاء قريش', NULL, 'أستاذ مشارك', '2010-01-08', 'supervisor', 2, 'كلية الدعوة وأصول الدين', '00966555526370', '00966555526370', 'kghamdi@hidayatqurania.org', 'avat.png', NULL, 'yes', 107, 'true', '2019-03-11 16:56:20', '2019-03-11 16:56:20'),
(55, NULL, NULL, NULL, 'د. داتو محمد يعقوب', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'supervisor', 8, NULL, NULL, NULL, 'dyaqob@hidayatqurania.org', 'avat.png', NULL, 'yes', 108, 'true', '2019-03-04 01:46:03', '2019-03-04 01:46:03'),
(56, NULL, '37144803', '00', 'د. روحيزان بارو محمد زين', 'روحيزان', 'ذكر', '1966-01-15', 'كوالا ترنقانو', 5, 16, 'كوالا ترنقانو', 'جامعة السلطان زين العابدين ترنقانو ماليزيا', NULL, 'دكتوراه', '1995-10-15', 'supervisor', 7, 'كلية الدراسات الإسلامية المعاصرة', '60199147438+', '60199147438+', 'rbaru@hidayatqurania.org', 'fileName1552370882.jpg', NULL, 'yes', 109, 'true', '2019-03-12 06:08:02', '2019-03-12 06:08:02'),
(90, '38-10', 'P02568234', NULL, 'فاطمة أحمد البدوي', NULL, 'أنثى', '1981-05-15', 'مكة المكرمة', 3, 3, 'الخرطوم', 'الخرطوم / الأزهري / مربع 19', NULL, 'دكتوراة', '2017-12-20', 'searcher', 3, 'الدراسات الإسلامية', '249908525346', '249908525346', 'felbadawi@hidayatqurania.org', 'avat2.png', NULL, 'مفعل', 143, 'true', '2019-03-11 08:44:30', '2019-03-11 08:44:30'),
(91, '39-11', 'K740809', NULL, 'أسامة شاهين العداسي', NULL, 'ذكر', '1986-03-06', 'الأردن - الزرقاء', 8, 12, 'عمان', 'ضاحية الياسمين', NULL, 'دكتوراة', '2018-08-15', 'searcher', 6, 'الشريعة', '962785692454', '962785692454', 'oaladdasi@hidayatqurania.org', 'fileName1552460963.jpg', 'CV1552461087.pdf', 'مفعل', 144, 'true', '2019-03-13 07:11:27', '2019-03-13 07:11:27'),
(92, '39-12', '10638597', NULL, 'مصطفى جمعة', NULL, 'ذكر', '1987-09-03', 'العراق', 16, 12, 'عمان', 'المدينة الرياضية', NULL, 'دكتوراة', '2018-07-09', 'searcher', 6, 'الشريعة', '962788947390', '962788947390', 'mjumaah@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 145, 'true', '2019-03-11 18:04:36', '2019-03-11 18:04:36'),
(93, '39-13', 'P467016 / وأحمل جواز سفر أمريكي برقم 499237877', NULL, 'محمد منذر محمد السالم', NULL, 'ذكر', '1982-09-21', 'الولايات المتحدة الأمريكية (أمريكا)', 8, 12, 'عمّان', 'العاصمة عمان / شارع المطار / ضاحية الأمير علي (بجانب مدارس بيت المقدس', NULL, 'ماجستير من جامعة الشارقة / طالب دكتوراه في الجامعة الأردنية', '2018-08-29', 'searcher', 6, 'كلية الشريعة والدراسات الإسلامية', '962789191970', '962789191970', 'msalem@hidayatqurania.org', 'fileName1551872012.jpg', NULL, 'مفعل', 146, 'true', '2019-03-11 10:14:10', '2019-03-11 10:14:10'),
(94, '39-14', '04820162', NULL, 'أحمد حسن صالح الفقيه', NULL, 'ذكر', '1975-12-01', 'أب _ اليمن', 10, 16, 'كولا ترنجانو', 'AL- FAKIH AHMED HASAN  SALEH MBKT- 21717 , KG.MENGABANG  TELONG  BATU RAKIT, 21020 KUALA TERENGGANU', NULL, 'دكتور', '2018-07-23', 'searcher', 7, 'القرآن والسنة', '601121997745+', '601121997745+', 'aalfakih@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 147, 'true', '2019-03-10 10:52:52', '2019-03-10 10:52:52'),
(95, '39-15', 'A12076328', NULL, 'محمد أزهر', NULL, 'ذكر', '1975-08-31', 'العراق-بغداد', 16, 16, 'KUALA LUMPUR', 'jalan 3a/155 Bukit oug condiminium 3A-13A-6', NULL, 'دكتوراه', '2018-10-22', 'searcher', 8, 'أكاديمية الدراسات الإسلامية', '00601111690757', '00601111690757', 'mibrahim@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 148, 'true', '2019-03-11 10:09:09', '2019-03-11 10:09:09'),
(96, '39-16', 'HJ731F8H', NULL, 'أحمد الأطرش', NULL, 'ذكر', '1978-02-25', 'طرابلس / ليبيا', 19, 16, 'شاه علام', '15 jalan tukul', NULL, 'دكتوراه', '2018-06-07', 'searcher', 9, 'القرآن والسنة', '601121150130', '601121150130', 'alatrash@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 149, 'true', '2019-03-09 02:39:56', '2019-03-09 02:39:56'),
(97, '39-17', '155501154', NULL, 'زينب طلحة', NULL, 'أنثى', '1984-04-29', 'الجزائر', 15, 16, 'كوالا لمبور', 'istac. jalan duta. kuala lumpur', NULL, 'دكتوراه', '2018-02-20', 'searcher', 8, 'اكاديمية الدراسات الاسلامية', '601118910104', '601118910104', 'ztalha@hidayatqurania.org', 'fileName1552323647.jpeg', 'CV1552323709.pdf', 'مفعل', 150, 'true', '2019-03-11 17:01:49', '2019-03-11 17:01:49'),
(98, '39-18', '05803922', NULL, 'محمد المطري', NULL, 'ذكر', '1978-03-04', 'صنعاء', 10, 17, 'صنعاء', 'بني مطر - الصباحة', NULL, 'دكتوراه', '2018-05-02', 'searcher', 10, 'كلية العلوم اﻹسلامية', '967777175927', '967777175927', 'malmatari@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 151, 'true', '2019-03-05 04:46:15', '2019-03-05 04:46:15'),
(100, '39-20', 'A06708052', '2244564544', 'موسى سليمان', NULL, 'ذكر', '1984-09-13', 'كدونا، نيجيريا', 18, 2, 'المدينة الننورة', 'الجامعة الاسلامية', NULL, 'دكتوراه', '2018-07-15', 'searcher', 11, 'كلية القرآن الكريم', '966508452634', '966508452634', 'mabubakar@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 153, 'true', '2019-03-12 00:09:58', '2019-03-12 00:09:58'),
(101, '39-21', '05933440', '2244637332', 'هشام محمد سيف', NULL, 'ذكر', '1985-10-20', 'اليمن', 10, 2, 'المدينة المنورة', 'الجامعة الإسلامية', NULL, 'دكتوراه', '2018-05-16', 'searcher', 11, 'القرآن الكريم والدراسات الإسلامية', '00966550968321', '00966550968321', 'halmalki@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 154, 'true', '2019-03-11 10:45:38', '2019-03-11 10:45:38'),
(102, '39-22', 'P6984102A', '2263673382', 'محمد عطاء إبراهيم عبد الكريم', NULL, 'ذكر', '1987-03-07', 'جنوب الفلبين', 11, 2, 'المدينة النبوية', 'حي الربوية، الحرة الشرقية.', NULL, 'ماجستير', '2018-05-16', 'searcher', 11, 'كلية القرآن الكريم والدراسات الإسلامية', '966534934679', '966534934679', 'mabdulkarim@hidayatqurania.org', 'fileName1551872316.jpg', 'CV1551872664.pdf', 'مفعل', 155, 'true', '2019-03-07 07:03:17', '2019-03-07 07:03:17'),
(103, '39-23', 'AA0069873', '2244637019', 'محمدو دوكوري', NULL, 'ذكر', '1986-08-13', 'Mali', 9, 2, 'المدينة المنورة', 'الجامعة الإسلامية', NULL, 'دكتوراه', '2018-01-01', 'searcher', 11, 'كلية القرآن الكريم', '966544464870', '966544464870', 'mdoucoure@hidayatqurania.org', 'fileName1551703348.jpeg', 'CV1551703493.docx', 'مفعل', 156, 'true', '2019-03-04 13:01:34', '2019-03-04 13:01:34'),
(104, '39-24', 'P05417210', NULL, 'عبدالمحسن المعيلي', NULL, 'ذكر', '1990-05-18', 'الكويت', 13, 2, 'المدينة المنورة', 'حي الأزهري', NULL, 'دكتوراه', '2018-10-10', 'searcher', 11, 'القرآن الكريم', '96597946680', '96597946680', 'aalmeaili@hidayatqurania.org', 'avat.png', 'CV1552378236.pdf', 'مفعل', 157, 'true', '2019-03-12 08:13:40', '2019-03-12 08:13:40'),
(105, '39-25', 'AA092660', '2244637985', 'بكري درامي محمد', NULL, 'ذكر', '1984-06-24', 'كيبا، مالي.', 9, 2, 'المدينة النبوية', 'حي الربوية، الحرة الشرقية.', NULL, 'ماجستير', '2018-05-16', 'searcher', 11, 'كلية القرآن الكريم والدراسات الإسلامية', '966562310799', '966562310799', 'bdrame@hidayatqurania.org', 'fileName1552290155.jpg', NULL, 'مفعل', 158, 'true', '2019-03-11 07:42:35', '2019-03-11 07:42:35'),
(106, '39-26', NULL, NULL, 'مسعود الهاشمي', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, 'searcher', NULL, NULL, NULL, NULL, 'malhashimi@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 159, 'true', '2019-03-04 06:09:20', '2019-03-04 06:09:20'),
(107, '39-27', 'R533358', '1047036809', 'عبدالرحمن الصبحي', NULL, 'ذكر', '1987-06-22', 'جدة - المملكة العربية السعودية', 2, 2, 'المدينة المنورة', 'حي الفيصلية - المدينة المنورة', NULL, 'ماجستير', '2018-07-10', 'searcher', 11, 'كلية القرآن الكريم', '00966540888127', '00966540888127', 'aalsubhy@hidayatqurania.org', 'fileName1552495666.jpg', NULL, 'مفعل', 160, 'true', '2019-03-13 16:57:13', '2019-03-13 16:57:13'),
(108, '39-28', '7745474', '2268131550', 'راشد خالد سعيد الحبسي', NULL, 'ذكر', '1989-02-01', 'سلطنة عمان', 17, 2, 'المدينة المنورة', 'المدينة المنورة', NULL, 'دكتوراة', '2019-03-01', 'searcher', 11, 'كلية القرآن الكريم والدراسات الاسلامية', '966566656946', '966592702773', 'ralhabsi@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 161, 'true', '2019-03-13 09:21:59', '2019-03-13 09:21:59'),
(109, '39-29', '530792258', '2264237807', 'بلكاروف أنزور', NULL, 'ذكر', '1981-10-28', 'روسيا', 20, 2, 'المدينة', 'حي العريض', NULL, 'ماجستير', '2018-11-01', 'searcher', 11, 'القرآن الكريم', '966534230750', '966534230750', 'banzor@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 162, 'true', '2019-03-11 21:56:39', '2019-03-11 21:56:39'),
(110, '39-30', 'u540181', '1064271610', 'أمين عبدالرحمن السكاكر', NULL, 'ذكر', '1990-01-01', 'بريدة', 2, 2, 'القصيم - بريدة', 'حي البساتين', NULL, 'دكتوراه', '2018-10-10', 'searcher', 12, 'كلية الشريعو والدراسات الإسلامية', '966540744466', '966540744466', 'aalsakakir@hidayatqurania.org', 'avat.png', 'CV1552326676.pdf', 'مفعل', 163, 'true', '2019-03-11 17:51:16', '2019-03-11 17:51:16'),
(111, '39-31', 'ٌٌR628702', '1020792139', 'نورةعبد العزيز المانع', NULL, 'أنثى', '1983-01-14', 'عنيزة', 2, 2, 'عنيزة', 'الريان', NULL, 'دكتوراه', '2018-10-12', 'searcher', 12, 'كلية الشريعة والدراسات الإسلامية', '966506158292', '966506158292', 'nalmani@hidayatqurania.org', 'avat2.png', NULL, 'مفعل', 164, 'true', '2019-03-11 21:42:13', '2019-03-11 21:42:13'),
(112, '39-32', 'N418003', '1046117345', 'خالد الحربي', NULL, 'ذكر', '1986-04-26', 'القيصومة', 2, 2, 'حفرالباطن', 'القيصومة', NULL, 'الدكتوراة', '2018-10-16', 'searcher', 2, 'الشريعة', '0508446676', '0508446676', 'kalharbi@hidayatqurania.org', 'fileName1551713485.jpg', 'CV1551713553.pdf', 'مفعل', 165, 'true', '2019-03-11 19:49:50', '2019-03-11 19:49:50'),
(113, '39-33', 'T991163', '1020792147', 'زينب عبدالعزيز المانع', NULL, 'أنثى', '1984-01-18', 'المملكة العربية السعودية القصيم عنيزة', 2, 2, 'القصيم عنيزة', 'القصيم عنيزة حي السلام جادة القنارة. رقم المنزل:7118', NULL, 'محاضر', '2018-05-06', 'searcher', 12, 'كلية الشريعة والدراسات الإسلامية', '966505705560', '966505705560', 'zalmani@hidayatqurania.org', 'avat2.png', NULL, 'مفعل', 166, 'true', '2019-03-11 13:32:55', '2019-03-11 13:32:55'),
(114, '39-34', 'EQ5015789', NULL, 'رشيد الحمداوي', NULL, 'ذكر', '1977-04-15', 'الدار البيضاء', 4, 20, 'مراكش', 'حي أزلي الجنوبي، رقم 788، مراكش', NULL, 'الدكتوراه', '2019-01-01', 'searcher', 13, 'كلية الآداب والعلوم الإنسانية', '212666913601', '212666913601', 'ralhamdaoui@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 167, 'true', '2019-03-12 10:53:43', '2019-03-12 10:53:43'),
(115, '39-35', 'MI9524149', NULL, 'عبد الإله هرماشي', NULL, 'ذكر', '1976-07-25', 'مراكش', 4, 20, 'مراكش', '1253 تجزئة الزرقطوني المحاميد مراكش المغرب', NULL, 'دكتوراه', '2019-01-01', 'searcher', 13, 'كلية الآداب والعلوم الإنسانية', '00212670726050', '00212670726050', 'aharmachi@hidayatqurania.org', 'fileName1552297721.jpg', NULL, 'مفعل', 168, 'true', '2019-03-11 09:48:41', '2019-03-11 09:48:41'),
(116, '39-36', 'JP2610259', 'LC89968', 'أحمد الريفي', NULL, 'ذكر', '1978-02-20', 'دائرة باب برد - إقليم شفشاون', 4, 20, 'العرائش', 'تجزئة المغرب الجديد رقم 1880', NULL, 'ماجستير', '2019-01-01', 'searcher', 13, 'كلية الآداب والعلوم الإنسانية', '212666384124', '212666384124', 'arifi@hidayatqurania.org', 'fileName1551896733.jpg', 'CV1551954454.pdf', 'مفعل', 169, 'true', '2019-03-07 10:27:34', '2019-03-07 10:27:34'),
(117, '39-37', 'WU3970437', NULL, 'عبدالاله الهنا', NULL, 'ذكر', '1975-12-02', 'مراكش', 4, 20, 'مراكش', '41 درب الخشاب سيبع مراكش المغرب', NULL, 'الدكتوراه', '2018-12-10', 'searcher', 14, 'كلية الاداب والعلوم الإنسانية', '212611010011', '212611010011', 'aaitlahna@hidayatqurania.org', 'fileName1552368455.JPG', 'CV1552372555.pdf', 'مفعل', 170, 'true', '2019-03-12 06:35:56', '2019-03-12 06:35:56'),
(118, '39-38', 'CE6513719', NULL, 'نورالدين', NULL, 'ذكر', '1981-08-07', 'Marrakech', 4, 20, 'Marrakech', 'المحاميد 4 رقم 750 مراكش المغرب', NULL, 'ماجستر', '2009-01-01', 'searcher', 13, 'كلية الآداب والعلوم الإنسانية مراكش', '212662495565', '212662495565', 'nakojdad@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 171, 'true', '2019-03-11 16:59:12', '2019-03-11 16:59:12'),
(119, '39-39', 'VT0291813', NULL, 'عبدالجليل حيمود', NULL, 'ذكر', '1984-04-01', 'العطاوية، عمالة قلعة السراغنة، جهة مراكش', 4, 20, 'مراكش', 'مجموعة لحسن أغريب، رقم 229 حي يوسف ابن تاشفين مراكش', NULL, 'ماستر', '2019-01-10', 'searcher', 13, 'كلية الآداب والعلوم الإنسانية مراكش', '21268785556', '212624243058', 'ahaymoud@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 172, 'true', '2019-03-10 23:28:40', '2019-03-10 23:28:40'),
(120, '39-40', 'ls5903213', NULL, 'عبدالرزاق الصادقي', NULL, 'ذكر', '1983-03-01', 'الرشيدية', 4, 20, 'الفقيه بن صالح', 'حي الفرح ،زنقة الفتح،رقم الدار:10', NULL, 'الماستر', '2017-12-04', 'searcher', 15, 'كلية الآداب والعلوم الإنسانية', '0610289926', '0610289926', 'aalsadiki@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 173, 'true', '2019-03-13 12:42:23', '2019-03-13 12:42:23'),
(121, '39-41', 'HB2987573', 'G:375854', 'دنيا الرامي', NULL, 'أنثى', '1980-03-25', 'الجديدة', 4, 20, 'القنيطرة', 'حي الوفاء 2 رقم 64 القنيطرة', NULL, 'الماستر', '2018-12-25', 'searcher', 15, 'كلية الآداب والعلوم الإنسانية', '212675378752', '212682913908', 'derrami@hidayatqurania.org', 'avat2.png', NULL, 'مفعل', 174, 'true', '2019-03-10 00:04:55', '2019-03-10 00:04:55'),
(122, '39-42', 'oq4525917', NULL, 'الجيلالي بوزيري', NULL, 'ذكر', '1987-03-31', 'كيسر سطات المغرب', 4, 20, 'سطات', 'درب عمر. زنقة مولاي إسماعيل. رقم: 10. سطات. المغرب', NULL, 'دكتوراه', '2018-12-06', 'searcher', 14, 'كلية الآداب والعلوم الإنسانية', '212676426844', '212617090980', 'abouziri@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 175, 'true', '2019-03-11 09:42:30', '2019-03-11 09:42:30'),
(123, '39-43', 'YE0756501', NULL, 'محمد العمراني', NULL, 'ذكر', '1972-01-01', 'الراشدية المملكة المغربية', 4, 20, 'مكناس', '27 رياض الزيتون مكناس المملكة المغربية', NULL, 'دكتوراه', '2018-12-01', 'searcher', 14, 'كلية الآداب والعلوم الإنسانية', '212666908421', '212666908421', 'melamrani@hidayatqurania.org', 'avat.png', NULL, 'مفعل', 176, 'true', '2019-03-06 23:57:57', '2019-03-06 23:57:57'),
(124, NULL, NULL, NULL, 'د أحمد خليفة', NULL, NULL, NULL, NULL, 1, 3, NULL, NULL, NULL, NULL, NULL, 'reviewer', NULL, NULL, NULL, NULL, 'akmohammed@hidayatqurania.org', 'avat.png', NULL, 'yes', 190, 'true', '2019-03-04 06:22:55', '2019-03-04 06:22:55'),
(125, NULL, NULL, NULL, 'د يوسف الحسن', NULL, NULL, NULL, NULL, 1, 3, NULL, NULL, NULL, NULL, NULL, 'reviewer', NULL, NULL, NULL, NULL, 'yelhassan@hidayatqurania.org', 'avat.png', NULL, 'yes', 191, 'true', '2019-03-04 06:31:05', '2019-03-04 06:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `reviewersearchs`
--

CREATE TABLE `reviewersearchs` (
  `reviewer` int(11) NOT NULL,
  `search` int(11) NOT NULL
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
(39, 16),
(124, 19);

-- --------------------------------------------------------

--
-- Table structure for table `reviewers_reports`
--

CREATE TABLE `reviewers_reports` (
  `ID` int(11) NOT NULL,
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
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `searchersreports`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `searchers_reports` (
  `ID` int(11) NOT NULL,
  `search` int(11) NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `q9` text NOT NULL,
  `filename` text,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchers_reports`
--

INSERT INTO `searchers_reports` (`ID`, `search`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `filename`, `date`) VALUES
(10, 29, 'كثيرة جدا لله الحمد تربو على الألف هداية.', 'ممتاز جدا', 'لا يوجد', '10-15', '10-20', 'ملتزم تماما إن شاءالله', 'لا يوجد', 'مبحث الهدايات الكلية والتنزيل على الواقع', 'لا يوجد', NULL, '2019-03-12'),
(11, 41, '128 هداية', 'جيدة', 'التواصل موجود', '1', '1', 'ملتزمة', 'اختلاف وجهات النظر', 'لا يوجد', 'أسأل الله التوفيق والإعانة', NULL, '2019-03-12'),
(12, 27, '319', 'ممتاز', 'لايوجد', '6', '10', '90%', 'لايوجد', 'البحث يحتاج \r\n\r\n\r\n\r\n\r\nلايوجد', 'لايوجد', 'fileName1552454285.pdf', '2019-03-13'),
(13, 46, '802', 'ممتاز', '-', '1', '-', 'يتم الالتزام بها في أغلبها', '-', '-', 'التواصل مع المشرف خلال الفترة الماضية كان الكترونيا ولذا كتبت عدد الجلسات جلسة واحدة أما عدد الساعات فيصعب تحديده لأن التواصل كان برسائل.', NULL, '2019-03-13'),
(14, 47, 'لم أبدأ في الهدايات بعد', 'ممتاز', 'لا يوجد', '5 تقريبا', 'ساعتان تقريبا', 'ممتاز', 'ملتزم بها', 'لا يوجد', 'بارك الله فيكم', NULL, '2019-03-13'),
(15, 47, 'لم أبدأ في الهدايات بعد', 'ممتاز', 'لا يوجد', '5 تقريبا', 'ساعتان تقريبا', 'ممتاز', 'ملتزم بها', 'لا يوجد', 'بارك الله فيكم', NULL, '2019-03-13'),
(16, 45, 'لا توج هدايات في هذا المبحث', 'يوجد تواصل بشكل جيد', '....', '5', '5 ساعات تقريبا', 'تم التعديل حسب ملاحظات المشرف', '....', 'العمل جار على ما يرام بفضل الله', '...', NULL, '2019-03-13'),
(17, 43, 'المبحث ليس خاصا بالهدايات', 'نفس الشئ المذكور', '.....', '٥', '٥ تقريبا', 'تم', '.....', '....', '....', NULL, '2019-03-13'),
(18, 42, 'لا يوجد', 'جيد', '....', '٥', '٥ تقريبا', 'تم الالتزام بها والحمدلله', '.....', '....', '.....', NULL, '2019-03-13'),
(19, 44, 'لا توجد هدايات المبحث', 'التواصل مستمر بشكل طيب', '......', '٥', '٥ تقريبا', 'تم الالتزام بها', '......', 'الأمور على ما يرام بفضل الله وحده', '.....', NULL, '2019-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `searcher_critera`
--

CREATE TABLE `searcher_critera` (
  `Searcher` int(11) NOT NULL,
  `Criteria` int(11) NOT NULL,
  `Status` text NOT NULL
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

CREATE TABLE `searchs` (
  `ID` int(11) NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchs`
--

INSERT INTO `searchs` (`ID`, `Code`, `Alias`, `Name`, `Order`, `SearchURL`, `Division`, `Searcher`, `Note`, `Progress`, `Divisionunit`, `Cycle`, `Status`, `created_at`, `updated_at`) VALUES
(31, NULL, 'معاني السورة ومقاصدها', 'معاني السورة ومقاصدها', NULL, 'fileName1552378835.pdf', 2, 104, 'راجعت مع الباحث ما كتبه وأعطيته ملحوظاتي', 'تم الرفع', 4, 1, 'yes', '2019-03-13 10:00:45', '2019-03-13 10:00:45'),
(30, NULL, 'اسم السورة وفضلها وأحوال نزولها', 'اسم السورة وفضلها وأحوال نزولها', NULL, 'fileName1552378760.pdf', 1, 104, 'راجعت مع الباحث ما كتبه وأعطيته ملحوظاتي وعدل الملحوظات', 'تم الرفع', 1, 1, 'yes', '2019-03-13 09:10:01', '2019-03-13 09:10:01'),
(29, NULL, 'التمهيد', 'التمهيد', NULL, 'fileName1552378690.pdf', 7, 104, 'راجعت مع الباحث ما كتبه', 'تم الرفع', 16, 1, 'yes', '2019-03-13 10:00:02', '2019-03-13 10:00:02'),
(28, NULL, 'خطة البحث', 'المقدمة', NULL, 'fileName1552378598.pdf', 6, 104, 'راجعت مع الباحث ما كتبه', 'تم الرفع', 15, 1, 'yes', '2019-03-13 10:00:19', '2019-03-13 10:00:19'),
(27, NULL, 'اسم السورة - فضلها - أحوال نزولها - هدايات 24 آية', 'الفصل الأول - هداية 24آية', NULL, 'fileName1552452513.pdf', 3, 111, NULL, 'تم الرفع', 7, 1, 'yes', '2019-03-13 04:48:33', '2019-03-13 04:48:33'),
(26, NULL, 'اسم السورة - فضلها - أحوال نزولها - هدايات 24 آية', 'الفصل الأول - هداية 24آية', NULL, 'fileName1552337210.pdf', 1, 111, NULL, 'تم الرفع', 3, 1, 'yes', '2019-03-11 20:46:50', '2019-03-11 20:46:50'),
(25, NULL, 'اسم السورة - فضلها - أحوال نزولها - هدايات 24 آية', 'الفصل الأول - هداية 24آية', NULL, 'fileName1552453287.pdf', 1, 111, NULL, 'تم الرفع', 2, 1, 'yes', '2019-03-13 05:01:27', '2019-03-13 05:01:27'),
(24, NULL, 'اسم السورة - فضلها - أحوال نزولها - هدايات 24 آية', 'الفصل الأول - هداية 24آية', NULL, 'fileName1552337053.pdf', 1, 111, NULL, 'تم الرفع', 1, 1, 'yes', '2019-03-11 20:44:13', '2019-03-11 20:44:13'),
(23, NULL, 'اسم السورة - فضلها - أحوال نزولها - هدايات 24 آية', 'الفصل الأول - هداية 24آية', NULL, 'fileName1552337016.pdf', 1, 111, NULL, 'تم الرفع', 1, 1, 'yes', '2019-03-11 20:43:36', '2019-03-11 20:43:36'),
(22, NULL, 'ويشمل: مقاصد السورة، ومعاني المفردات، والمعنى الإجمالي', 'معاني السورة ومقاصدها', NULL, 'fileName1552070755.pdf', 2, 84, NULL, 'تم الرفع', 4, 1, 'yes', '2019-03-08 18:45:55', '2019-03-08 18:45:55'),
(20, NULL, 'التمهيد', 'التمهيد', NULL, 'fileName1552069867.pdf', 7, 84, NULL, 'تم الرفع', 16, 1, 'yes', '2019-03-08 18:31:07', '2019-03-08 18:31:07'),
(21, NULL, 'يشمل: أسماء سورة البقرة، وفضلها، وأحوال نزولها.', 'الباب الأول: (الفصل الأول)', NULL, 'fileName1552070118.pdf', 1, 84, NULL, 'تم الرفع', 1, 1, 'yes', '2019-03-08 18:35:18', '2019-03-08 18:35:18'),
(32, NULL, 'الهدايات الجزئية', 'الهدايات الجزئية', NULL, 'fileName1552378898.pdf', 3, 104, 'راجعت مع الباحث ما كتبه وأعطيته ملحوظاتي وعدل الملحوظات', 'تم الرفع', 7, 1, 'yes', '2019-03-13 09:59:00', '2019-03-13 09:59:00'),
(33, NULL, 'مناسبات السورة وخصائصها وأساليبها', 'مناسبات السورة وخصائصها وأساليبها', NULL, 'fileName1552378960.pdf', 4, 104, 'راجعت مع الباحث ما كتبه وأعطيته ملحوظاتي', 'تم الرفع', 9, 1, 'yes', '2019-03-13 09:59:33', '2019-03-13 09:59:33'),
(34, NULL, 'تعريف الهدايات القرآنية', 'التمهيد', NULL, 'fileName1552386234.pdf', 7, 95, NULL, 'تم الرفع', 16, 1, 'yes', '2019-03-12 10:23:54', '2019-03-12 10:23:54'),
(35, NULL, 'اسم السورة، وفضلها، وأحوال نزولها', 'الفصل الأول: مقدمات تفسيرية لدراسة هدايات سورة الأنعام', NULL, 'fileName1552386382.pdf', 1, 95, NULL, 'تم الرفع', 1, 1, 'yes', '2019-03-12 10:26:22', '2019-03-12 10:26:22'),
(36, NULL, 'اسم السورة، وفضلها، وأحوال نزولها', 'الفصل الأول: مقدمات تفسيرية لدراسة هدايات سورة الأنعام', NULL, 'fileName1552386512.pdf', 1, 95, NULL, 'تم الرفع', 1, 1, 'yes', '2019-03-12 10:28:32', '2019-03-12 10:28:32'),
(37, NULL, 'اسم السورة', 'الفصل الأول', NULL, 'fileName1552402922.pdf', 1, 113, NULL, 'تم الرفع', 1, 1, 'yes', '2019-03-12 15:02:03', '2019-03-12 15:02:03'),
(38, NULL, 'فضل السورة', 'الفصل الأول', NULL, 'fileName1552403094.pdf', 1, 113, NULL, 'تم الرفع', 2, 1, 'yes', '2019-03-12 15:04:54', '2019-03-12 15:04:54'),
(39, NULL, 'أحوال نزول السورة', 'الفصل الأول', NULL, 'fileName1552403299.pdf', 1, 113, NULL, 'تم الرفع', 3, 1, 'yes', '2019-03-12 15:08:19', '2019-03-12 15:08:19'),
(40, NULL, 'مقاصد السورة', 'الفصل الأول', NULL, 'fileName1552403494.pdf', 2, 113, NULL, 'تم الرفع', 4, 1, 'yes', '2019-03-12 15:11:34', '2019-03-12 15:11:34'),
(41, NULL, 'المبحث الأول: الهدايات الخاصة بآيات السورة من آية 1 إلى آية 14', 'الباب الثاني: الفصل الأول: الهدايات الجزئية والكلية في السورة', NULL, 'fileName1552403793.pdf', 3, 113, NULL, 'تم الرفع', 7, 1, 'yes', '2019-03-12 15:16:34', '2019-03-12 15:16:34'),
(42, NULL, 'يتضمن التعريف بالهديات في اللغة واستخداماتها في القرآن الكريم, وتحرير الهدايات اصطلاح وإبراز جوانب من أهميتها.', 'تعريف الهدايات وأهميتها', NULL, 'fileName1552430173.pdf', 7, 103, 'راجعت مع الباحث ما كتبه', 'تم الرفع', 16, 1, 'yes', '2019-03-13 10:03:34', '2019-03-13 10:03:34'),
(43, NULL, 'اسم السورة وذكر الأخبار الواردة به, وبيان وجه التسمية, ومناقشة بعض الأوجه الواردة عن بعض العلماء.', 'اسم السورة', NULL, 'fileName1552430489.pdf', 1, 103, 'راجعت مع الباحث ما كتبه وأعطيته ملحوظاتي وعدل الملحوظات', 'تم الرفع', 1, 1, 'yes', '2019-03-13 10:03:55', '2019-03-13 10:03:55'),
(44, NULL, 'ذكر الفضائل الواردة عن سورة هود وشرح بعضها, وبيان صحيحها من سقيمها.', 'فضائل السورة', NULL, 'fileName1552430671.pdf', 1, 103, 'راجعت مع الباحث ما كتبه وعدل ما يحتاج إلى تعديل', 'تم الرفع', 2, 1, 'yes', '2019-03-13 10:04:15', '2019-03-13 10:04:15'),
(45, NULL, 'ذكر الأحوال المتعلقة بسورة هود بدء بوقت نزولها والأجواء العامة لها, وبيان مكيتها, وعدد آياتها, وترتيبها في المصحف وفي النزول, ومناقشة بعض أسباب نزولها, وذكر مناسبتها لما قبلها...', 'أحوال نزول سورة هود', NULL, 'fileName1552430931.pdf', 1, 103, 'راجعت مع الباحث ما كتبه وعدل ما يحتاج إلى تعديل وأنا معه', 'تم الرفع', 3, 1, 'yes', '2019-03-13 10:03:11', '2019-03-13 10:03:11'),
(46, NULL, 'الهدايات الجزئية للآيات من 16 - 24 من سورة البقرة', 'الهدايات الجزئية في السورة', NULL, 'fileName1552468444.pdf', 3, 81, NULL, 'تم الرفع', 7, 1, 'yes', '2019-03-13 09:14:04', '2019-03-13 09:14:04'),
(47, NULL, 'القسم الأول - الباب الأول  - الفصل الثاني - المبحث الثاني', 'الهدايات القرآنية من  آخر سورة الأعراف - أول سورة الأنفال', NULL, 'fileName1552464950.pdf', 2, 98, NULL, 'تم الرفع', 5, 1, 'yes', '2019-03-13 08:15:50', '2019-03-13 08:15:50'),
(48, NULL, 'أهمية الهدايات القرآنية', 'التمهيد', NULL, 'fileName1552488351.pdf', 7, 95, NULL, 'تم الرفع', 16, 1, 'yes', '2019-03-13 14:45:51', '2019-03-13 14:45:51'),
(49, NULL, 'الفصل الأول', 'الباب الاول', NULL, 'fileName1552490253.pdf', 1, 94, NULL, 'تم الرفع', 3, 1, 'yes', '2019-03-13 15:17:33', '2019-03-13 15:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervisorsreports`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisorsreports`
--

INSERT INTO `supervisorsreports` (`ID`, `Supervisor`, `TypeCyclic`, `DateSupervisor`, `DoneRange`, `QualityProcess`, `QualityDirection`, `UpdatedRange`, `DateCommittee`, `Difficulties`, `NotesPositive`, `NotesNegative`, `URL`, `Status`, `created_at`, `updated_at`) VALUES
(1, 12, 'صنف 1', '2018-10-18', 10, '2', 3, 5, '2018-10-17', 'oooo', 'llll', 'pppp', 'fileName1540748008.pdf', 'no', '2018-10-28 18:10:51', '2018-10-28 16:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors_reports`
--

CREATE TABLE `supervisors_reports` (
  `ID` int(11) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `search` int(11) NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `note` text,
  `filename` text,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisors_reports`
--

INSERT INTO `supervisors_reports` (`ID`, `supervisor`, `search`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `note`, `filename`, `date`) VALUES
(9, 78, 46, '50%', 'الطالب جاد وعمله متقن', 'ممتاز', 'أكثر من 80%', '1) جودة العمل المنجز\r\n2) كثرة الهدايات المستنبطة.\r\n3) جودة التنسيق والاخراج', '1/ الاستطراد في بعض الهوامش والتعليقات', 'لايوجد', 'اختصار الهوامش والتعليقات', NULL, NULL, '2019-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `theses`
--

CREATE TABLE `theses` (
  `ID` int(11) NOT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `ProgramDuration` varchar(45) DEFAULT NULL,
  `BeginningDate` varchar(45) DEFAULT NULL,
  `CompletionDate` varchar(45) DEFAULT NULL,
  `Notes` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Supervisor` int(11) NOT NULL,
  `Searcher` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theses`
--

INSERT INTO `theses` (`ID`, `Title`, `ProgramDuration`, `BeginningDate`, `CompletionDate`, `Notes`, `Status`, `created_at`, `Supervisor`, `Searcher`) VALUES
(15, 'الهدايات القرآنية في  سورة الفاتحة وفي سورة البقرة من الآية ( 1– 74  ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:22:15', 78, 81),
(16, 'الهدايات القرآنية في سورة البقرة من الآية ( 75-141) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:23:53', 77, 82),
(17, 'الهدايات القرآنية في سورة البقرة من الآية ( 142-202) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:24:59', 68, 83),
(18, 'الهدايات القرآنية في سورة البقرة من الآية ( 203-252) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:26:13', 54, 84),
(19, 'الهدايات القرآنية في سورة البقرة من الآية ( 252) إلى آخر السورة ،وفي سورة آل عمران من الآية (1-14)  دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:27:16', 60, 85),
(20, 'الهدايات القرآنية في سورة آل عمران من الآية ( 15-92 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:28:39', 69, 86),
(21, 'الهدايات القرآنية في سورة آل عمران من الآية ( 93  –170 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:29:47', 70, 87),
(22, 'الهدايات القرآنية في سورة آل عمران من الآية (171) إلى آخر السورة، وفي سورة النساء من الآية (1–23) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:30:58', 46, 88),
(23, 'الهدايات القرآنية في سورة النساء من الآية ( 24  –87 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:32:15', 48, 89),
(24, 'الهدايات القرآنية في سورة النساء من الآية ( 88  –147 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:37:51', 64, 90),
(25, 'الهدايات القرآنية في سورة النساء من الآية (148) إلى آخر السورة، وفي سورة المائدة من الآية ( 1 – 26 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 02:40:18', 73, 91),
(26, 'الهدايات القرآنية في سورة المائدة من الآية ( 27 – 81 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 04:44:54', 58, 92),
(27, 'الهدايات القرآنية في سورة المائدة من الآية 82 إلى آخر السورة، وفي سورة الأنعام من الآية (1– 35) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 04:46:11', 49, 93),
(28, 'الهدايات القرآنية في سورة الأنعام من الآية ( 36 – 110 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 04:56:42', 56, 94),
(29, 'الهدايات القرآنية في سورة الأنعام من الآية (111) إلى آخر السورة – دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 04:57:54', 52, 95),
(30, 'الهدايات القرآنية في سورة الأعراف من الآية ( 1 – 87 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 04:59:10', 75, 96),
(31, 'الهدايات القرآنية في سورة الأعراف من الآية (88 – 170) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:00:16', 62, 97),
(32, 'الهدايات القرآنية في سورة الأعراف من الآية (171) إلى آخر السورة وفي سورة الأنفال من الآية (1 – 40) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:01:24', 79, 98),
(33, 'الهدايات القرآنية في سورة الأنفال من الآية (41) إلى آخر السورة وفي سورة التوبة من الآية (1 – 33) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:02:30', 57, 99),
(34, 'الهدايات القرآنية في سورة التوبة من الآية ( 34 ) إلى الآية (92) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:03:32', 50, 100),
(35, 'الهدايات القرآنية في سورة التوبة من الآية ( 93 )إلى آخر السورة وفي سورة يونس من الآية ( 1-25)دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:04:35', 65, 101),
(36, 'الهدايات القرآنية في سورة يونس من الآية ( 26 )إلى آخر السورة دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:05:30', 76, 102),
(37, 'الهدايات القرآنية في سورة هود من الآية ( 1 ) إلى ( 83 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:07:01', 76, 103),
(38, 'الهدايات القرآنية في سورة هود من الآية ( 84 ) إلى آخر السورة وفي سورة يوسف من الآية ( 1-52) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:08:05', 76, 104),
(39, 'الهدايات القرآنية في سورة يوسف من الآية ( 53 ) إلى آخر السورة وفي سورة الرعد من الآية ( 1-18) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:09:12', 66, 105),
(40, 'الهدايات القرآنية في سورة الرعد من الآية ( 19 ) إلى آخر السورة وفي سورة إبراهيم دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:10:48', 66, 106),
(41, 'الهدايات القرآنية في سورة الحجر وفي سورة النحل من الآية ( 1 -50) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:11:51', 66, 107),
(42, 'الهدايات القرآنية في سورة النحل من الآية ( 51 ) إلى آخر السورة دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:12:45', 71, 108),
(43, 'الهدايات القرآنية في سورة الإسراء دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:13:51', 71, 109),
(44, 'الهدايات القرآنية في سورة الكهف دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:14:56', 72, 110),
(45, 'الهدايات القرآنية في سورة مريم دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:16:09', 72, 111),
(46, 'الهدايات القرآنية في سورة طه دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:17:36', 72, 112),
(47, 'الهدايات القرآنية في سورة الأنبياء دراسة تطبيقية', '12', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:18:38', 72, 113),
(48, 'الهدايات القرآنية في سورة الحج دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:19:41', 51, 114),
(49, 'الهدايات القرآنية في سورة المؤمنون و سورة النور  من الآية (1-26) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:20:52', 45, 115),
(50, 'الهدايات القرآنية في سورة النور  من الآية (27-آخر السورة) وفي سورة الفرقان من الآية (1-20) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:22:00', 45, 116),
(51, 'الهدايات القرآنية في سورة الفرقان  من الآية (21-آخر السورة ) وفي سورة الشعراء من الآية ( 1-110 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:23:11', 63, 117),
(52, 'الهدايات القرآنية في سورة الشعراء من الآية ( 111-آخر السورة ) وفي سورة النمل من الآية ( 1-55) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:24:29', 51, 118),
(53, 'الهدايات القرآنية في سورة النمل من الآية ( 56-آخر السورة) وفي سورة القصص من الآية ( 1-50 )دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:25:23', 51, 119),
(54, 'الهدايات القرآنية في سورة القصص من الآية ( 51 –آخر السورة ) وفي سورة العنكبوت : دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:26:28', 74, 120),
(55, 'الهدايات القرآنية في سورتي الروم ولقمان دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:27:34', 74, 121),
(56, 'الهدايات القرآنية في سورة السجدة وفي سورة الأحزاب من الآية ( 1-30 ) دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:28:42', 63, 122),
(57, 'الهدايات القرآنية في سورة الأحزاب من الآية ( 31-آخر السورة ) وفي سورة سبأ : دراسة تطبيقية', '24', '2019-01-01', '2022-01-01', NULL, NULL, '2019-03-04 05:29:58', 53, 123);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`ID`, `Code`, `Name`, `President`, `Countrie`, `City`, `Location`, `Phonne`, `Fax`, `Email`, `Logo`, `ContractID`, `ContractDate`, `Status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'جامعة أم القرى', 'أ.د عبدالله بافيل', 2, 'مكة المكرمة', 'العابدية', '0000000', '0000000', 'info@info.com', 'fileName1538685413.jpg', '0000', '2019-03-04', 'yes', '2019-03-04 00:01:43', '2018-10-04 18:25:40'),
(3, NULL, 'جامعة أفريقيا العالمية', 'اسم مدير الجامعة', 3, 'الخرطوم', 'العنوان', '0627391548', '0523141185', 'info@info.com', 'fileName1538867590.jpg', '0000', '2019-03-04', 'yes', '2019-03-03 23:59:30', '2018-10-04 18:36:53'),
(4, NULL, 'جامعة القرآن الكريم', 'اسم مدير الجامعة', 3, 'أم درمان', 'أم درمان', '000000', '000000', 'info@info.com', NULL, '0000', '2019-03-04', 'yes', '2019-03-04 00:07:19', '2019-03-04 00:07:19'),
(5, NULL, 'جامعة أم درمان الإسلامية', 'اسم مدير الجامعة', 3, 'أم درمان', 'أم درمان', '000000', '000000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:08:55', '2019-03-04 00:08:55'),
(6, NULL, 'الجامعة الأردنية', 'اسم مدير الجامعة', 12, 'عمان', 'الأردن', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:09:42', '2019-03-04 00:09:42'),
(7, NULL, 'جامعة سلطان زين العابدين', 'مدير الجامعة', 16, 'كوالا ترينقانو', 'كوالا ترينقانو', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:10:57', '2019-03-04 00:10:57'),
(8, NULL, 'جامعة ملايا', 'مدير الجامعة', 16, 'كوالالمبور', 'كوالالمبور', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:11:35', '2019-03-04 00:11:35'),
(9, NULL, 'الجامعة الوطنية الماليزية', 'اسم مدير الجامعة', 16, 'كوالالمبور', 'كوالالمبور', '0000', '0000', 'info@info.com', NULL, '0000', '2019-03-04', 'yes', '2019-03-04 00:13:40', '2019-03-04 00:13:40'),
(10, NULL, 'جامعة المدينة العالمية', 'اسم مدير الجامعة', 16, 'كوالالمبور', 'كوالالمبور', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:14:57', '2019-03-04 00:14:57'),
(11, NULL, 'الجامعة الإسلامية بالمدينة', 'اسم مدير الجامعة', 2, 'المدينة المنورة', 'المدينة المنورة', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 01:55:23', '2019-03-04 00:17:39'),
(12, NULL, 'جامعة القصيم', 'اسم المدير', 2, 'القصيم', 'القصيم', '00000', '00000', 'info@info.com', NULL, '0000', '2019-03-04', 'yes', '2019-03-04 00:18:57', '2019-03-04 00:18:57'),
(13, NULL, 'جامعة القاضي عياض', 'اسم المدير', 20, 'مراكش', 'مراكش', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:20:20', '2019-03-04 00:20:20'),
(14, NULL, 'جامعة ابن زهر', 'اسم الرئيس', 20, 'أغادير', 'أغادير', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:21:20', '2019-03-04 00:21:20'),
(15, NULL, 'جامعة ابن طفيل', 'اسم الرئيس', 20, 'القنيطرة', 'القنيطرة', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 00:22:33', '2019-03-04 00:22:33'),
(16, NULL, 'الجامعة الإسلامية العالمية', 'اسم الرئيس', 16, 'كوالالمبور', 'كوالالمبور', '00000', '00000', 'info@info.com', NULL, '00000', '2019-03-04', 'yes', '2019-03-04 01:55:59', '2019-03-04 01:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(39, 'admin', 'admin@admin.com', '$2y$10$CJcyRgxWll4yVl.Pc1Onn.NIgoW0Zz4SaEE3YhMOTV1/L0LuUCGNO', 1, 'mZuwhrXRXTNapQmpBchTXJUTBHPbS2vZpfRtjuUjVagNqihUPyWDwPskj4NZ', '2019-03-07 06:48:50', '2018-10-03 08:22:44'),
(146, 'محمد منذر', 'msalem@hidayatqurania.org', '$2y$10$APvHZehPZlEmUXthNQYM5eK20acLPqeVdwhqr9lajip/JHFX3PZ4W', 2, 'v5zHHCYIxayrXFsCE3onDYO1wCetDVhUyCwuNmXiyj01w7QXgCGUbKI5LiYg', '2019-03-13 15:55:33', '2019-03-04 04:46:11'),
(145, 'مصطفى جمعة', 'mjumaah@hidayatqurania.org', '$2y$10$NImxwPdIG9PNGPvHu04ReuhbJa5cR5RfeVZGDJDGkiF2C.HCGJyye', 2, 'Bgj77MbJk3CtvbyQncUNjiRNQDp8eBbf8QvDn2Jk8Rctaq2r58jFB1iThKwl', '2019-03-11 18:34:04', '2019-03-04 04:44:54'),
(124, 'د. محمد الحميد', 'malhumaid@hidayatqurania.org', '$2y$10$JCrDjAMk0wSAg2uyUftLc.be3.wJecCmAQLtByAuIar6Og7iUhXou', 3, 'OfEOXkPoK9gEcW5I3KPv6pkw89vaxAwAvEByk8PwHMCrAquT9e0lJ8HSh7hz', '2019-03-13 12:05:36', '2019-03-04 02:12:16'),
(125, 'د. محمد الربيعة', 'malrabiah@hidayatqurania.org', '$2y$10$z83l.eQPfIQSWyQq4aVpG.9tX04mcg3MMXnVxIJUj1scXN8kQNxP.', 3, '3Dz4TDkZbbRfls9W7RlpUjx2kRfYWhhsPNxT8lOyNmHxyG4t5g6UPUqn2Hrt', '2019-03-04 21:23:47', '2019-03-04 02:12:42'),
(126, 'د. محمد المجالي', 'malmajali@hidayatqurania.org', '$2y$10$ZOUGpUkd.mWd72vUOB4YhO49XxtsNdvjvo2Zdzw1DWs1dAn/f/3/y', 3, 'KLnxjYcz9jWLpphhGk1Ty3oGMreDEUnm5ZPpl3Nvl5MVh5ZMRYjVRQS7uXI4', '2019-03-11 16:13:26', '2019-03-04 02:13:07'),
(127, 'د. محمد بلحسان', 'melhassane@hidayatqurania.org', '$2y$10$C3s3pcMyNIT9GQNpLoNXfOTFZgmC8OfWDEbsgL7DtABZCJo8Pa.86', 3, 'ZUxWVegrpjLWWPBcSguiSHAcTzrqt0SwuBTmrey8G8ojvirmJYVq4iAOevXO', '2019-03-11 21:14:01', '2019-03-04 02:13:34'),
(128, 'د. محمد نجيب', 'mabdulqadir@hidayatqurania.org', '$2y$10$MMyoPNIdQQ3vSqaPKgmPquAgKehtSjqnnQQ7fX0668CwGSBHtz3su', 3, NULL, '2019-03-04 20:25:32', '2019-03-04 02:14:02'),
(129, 'د. نبيل الجوهري', 'nelqouhari@hidayatqurania.org', '$2y$10$N23JrJaBTWFqhHf8b9PpGePwGPpOoKgvlcOVnrQ1rfZk9CJsAPCOu', 3, 'Lw2dDebkFaflNxTtHQJrTLPz6PNjtWEGKqPVZzqmaBVuEZC6inD49ens0bmm', '2019-03-13 10:04:43', '2019-03-04 02:14:48'),
(122, 'د. مبارك التيجاني', 'maltijani@hidayatqurania.org', '$2y$10$4f48MdqIx5oMt79WWhWyi.3aNLPI4O2saR/p4UNaTsmVxgsSNDFqS', 3, NULL, '2019-03-04 02:11:25', '2019-03-04 02:11:25'),
(123, 'د. محمد الأمين', 'maismail@hidayatqurania.org', '$2y$10$6nYQP4ymNRT4PWSxbh61fuvCJHjJBXcw1/VGk7Wk8Iu/3JLIJiwY6', 3, NULL, '2019-03-04 02:11:49', '2019-03-04 02:11:49'),
(144, 'أسامة العداسي', 'oaladdasi@hidayatqurania.org', '$2y$10$C67Pn871MLrH/JN3Uuqp7uqSPkSPJzgnkC1JC4wGB0HSPMY4AzYj2', 2, 'YH5LXpjDGWBlIQpE6d78knYBTGuA8AZdOl4Q9IBxAdYwhtEvKQw4iz9xOxXn', '2019-03-13 07:10:31', '2019-03-04 02:40:18'),
(143, 'فاطمة البدوي', 'felbadawi@hidayatqurania.org', '$2y$10$cMgxbM005ZCk55s8n1xvI.CkmqUN4Am.1lraLPT1n6XzJhYH5sEN.', 2, '00nIH4lXSzgaXqtOruo8fpUbwIWLmDnI2gjssuP9tqpoU589vjbui9aiBh2t', '2019-03-12 18:23:32', '2019-03-04 02:37:51'),
(142, 'هالة هاشم أبوزيد', 'hahmed@hidayatqurania.org', '$2y$10$DaY/QDHjPiyzrVcvtm1Q1.Y/BmdptFDMc.LTYR4EK6QKn/OXDsT1m', 2, 'mUcdE75Gjpn6k3s0vvAJ8xXz0ZjabZKahmjFcAZ1XC39zWb20yB06zuxy0KE', '2019-03-13 09:48:18', '2019-03-04 02:32:15'),
(141, 'مايو إدريس بحر', 'mbahar@hidayatqurania.org', '$2y$10$9WfZff59Yhuz//ZUL7LBNetT4BAmGCDen7rv03CzXff8CEPSSFRxW', 2, 'empp8CkFNT05zgyCXf1HLXVW0szQ6Pm3eFZF1ned1xiVwsYL51T8trvGF6wh', '2019-03-07 08:10:08', '2019-03-04 02:30:58'),
(140, 'عثمان محمد', 'oali@hidayatqurania.org', '$2y$10$mI7S5Hww2NV.e8Lr9JRluebBBt9gk1J2EzkCnVE0w5j/nQtx9BIYa', 2, 'OPvvZnqYW9jBy6GAYYxUBbKqJRztPkkljkhpmNnmsa0QeqfvjYnpTtNGh0Ud', '2019-03-12 10:10:16', '2019-03-04 02:29:47'),
(139, 'عبدالله التركاوي', 'aalterkawi@hidayatqurania.org', '$2y$10$V1P//LrnI6oD4/PfQ/O5nuC2wBIV/VtZUHWjKg3rZfBZzYmdrdbPa', 2, '3FPzTAwKafeyCgwtFLXQP52VYwPLwlZzbPCXF8F5kqjUWneaLqI6GIR94gWb', '2019-03-13 08:58:01', '2019-03-04 02:28:39'),
(137, 'أيمن صابر', 'asaber@hidayatqurania.org', '$2y$10$YeHscc46O2LEbDD/ObTp6.pbkQykIb4nRRsiiGTKnSR2nSZlZm72C', 2, 'dIi2DdU8VZBROI48TtPFgcS0qIfxX6yjeE285SAQ7MqMgFH7zuHvwDco1zeg', '2019-03-08 16:48:59', '2019-03-04 02:26:13'),
(138, 'عبدالهادي الشمراني', 'aalshamrani@hidayatqurania.org', '$2y$10$S2jR2Ti5H7aUMMfdM1onMuQQWqAFNMvtEYxdnIIwgBHENRR388ST2', 2, 'gH2nY7eTMWQKIsZEZxtsJzbWDnREfyVQBif15VzUYCIV79H24WoRF2e1SpqT', '2019-03-11 18:00:40', '2019-03-04 02:27:16'),
(136, 'محمد الدعيس', 'malduays@hidayatqurania.org', '$2y$10$7noofHfo/FSlsIx1z0FeguQ8HNt0WfgcP3gqx99PYeYBWFe6sb6fi', 2, 'bcje3iZhLNdo6M1y5SuXG6zlqnVNkpz1TXe1uJYloe5RuB4Y8cTeFuOeLPCH', '2019-03-04 20:05:03', '2019-03-04 02:24:59'),
(135, 'محمد آل منشط', 'masiri@hidayatqurania.org', '$2y$10$6AiUrHUAdrK5ReUzBFoyIuEGEOYXLuc50OCPim7C8vGIObr8lpA3m', 2, 'mKQ5QIWacef2tch3CANXBq528oJzjDoTdSGrCig9DQVuerwn4K6GEA39CVrf', '2019-03-11 18:23:16', '2019-03-04 02:23:53'),
(121, 'د. فيصل غزاوي', 'fqhazzawi@hidayatqurania.org', '$2y$10$.6J0yH4kTBsp1F9BUJqxJ.38G.amJXZ9ll.RFXstRTpM4RtXL95N.', 3, NULL, '2019-03-04 20:22:21', '2019-03-04 02:10:58'),
(110, 'د. رضوان الأطرش', 'ralatrash@hidayatqurania.org', '$2y$10$22icVjjckJusbUpfs2oW9uKlTOFu72xVN.bNZ93NY3pMDDCQgbqz.', 3, NULL, '2019-03-04 01:56:34', '2019-03-04 01:56:34'),
(111, 'د. سليمان الدقو', 'saldgoor@hidayatqurania.org', '$2y$10$SEWi90sl01U4wzlGlFq.DejMxGGsCZTveiT3AT9f6X4so3h1vg452', 3, '9fnDtb5bkUZnqZG7Z5gFX35xeHCDqzyVajcehQ0Hi96ofj5TrTyoNR2cqCt6', '2019-03-12 07:31:32', '2019-03-04 01:57:27'),
(112, 'د. صبري محمد', 'smohamad@hidayatqurania.org', '$2y$10$jkcx4xUOD7piWidLaVfgrOWNR96nBsG9gL1MfpzFRypxunZY5ZBC.', 3, NULL, '2019-03-04 02:03:09', '2019-03-04 02:03:09'),
(113, 'د. طه عابدين', 'thamed1@hidayatqurania.org', '$2y$10$47qk/SNXecRFJyHwEv2YbOdrs16D7iFLy1rKWrU2U4eS6rm6HC6j.', 3, 'akIVyH4stA9K9PYC2cQdsZzW5TxVafn05HniAvCePa7tgxyBxpeXbAGGQky2', '2019-03-11 09:52:53', '2019-03-04 02:03:46'),
(114, 'د. عائشة علي', 'aalimam@hidayatqurania.org', '$2y$10$f1olrNES.5VMeMUdgF8AWOSrsQmenovM1FNnBgfNU/wB16ZjZP4Xu', 3, 'EewKRFbwhCaxbWJS9m234oRS6LDidD3g58K0s69te541OK78TgG5lGyQpKXT', '2019-03-12 17:30:55', '2019-03-04 02:07:43'),
(115, 'د. عبداللطيف أحمد', 'aramchahi@hidayatqurania.org', '$2y$10$OUt5nRi3viEYMi32ELr3PuH1561eiBYUohGoJyTmFZOhjiUbNTBmy', 3, NULL, '2019-03-04 02:08:13', '2019-03-04 02:08:13'),
(116, 'د. عبدالله البخاري', 'aelboukhari@hidayatqurania.org', '$2y$10$7/dDK.udCWLsgFS3mQCF1upGmx54ycwrkzQ5dnhdlJUpGI/jBaaI6', 3, 'LsPg12HXHtvUHkrNR3lMz59Ptb67NT8KopwNBk9uScntrDWHNzj9Sz50MiiY', '2019-03-04 23:03:41', '2019-03-04 02:08:34'),
(117, 'د. عبدالله الزبير', 'asalih@hidayatqurania.org', '$2y$10$8byWn3eRbzrEcsSBgIE.bee28hUi80GjB6Sqt/bw5lXHGXlRNgJAq', 3, NULL, '2019-03-04 02:08:56', '2019-03-04 02:08:56'),
(118, 'د. علي السكاكر', 'aalsakaker@hidayatqurania.org', '$2y$10$X4zWiorQagHDifQB0rvRZ.HMNqD4S.r4snDPchMDOJdoqDbPPOH/O', 3, 'Oofg25qdzBkVNenWJizVf3d8U33o0G4rJMApjan2yOVbLzNcte6HfznXAEJy', '2019-03-04 21:25:51', '2019-03-04 02:09:33'),
(119, 'د. فايز الترجمي', 'faltarjami@hidayatqurania.org', '$2y$10$dGs9ZdhSsfOkD2uqyxQ3/u2JrKI213ps9csh552ob8RVRVX68.UF6', 3, NULL, '2019-03-04 20:21:34', '2019-03-04 02:09:54'),
(120, 'د. فضلان محمد', 'fothman@hidayatqurania.org', '$2y$10$V55ntg6N4SfqH7ibxmLx/uUSg0svKeI9KaB8tIJipZS/YEVgkFbRK', 3, 'jZHHPQ2Q6cEfhf16Ho5LFc5mm26dPKX2G9rttQAHTDQcF1ocQ7VbkoeNnzAj', '2019-03-13 04:40:03', '2019-03-04 02:10:25'),
(134, 'عادل ضحوي', 'adahawi@hidayatqurania.org', '$2y$10$cmBdd2KGNq/g.Vi2ShBDie2F4OYlc2tT/unNhPeLSrDVTZ2CGVYu.', 2, 'EPxUWxpxvu9knbAoQZy4UA9aK5Eehro64FYJOAJNpcc1zt3zAOIXj8NK92Ls', '2019-03-04 19:19:22', '2019-03-04 02:22:15'),
(132, 'د. يوسف محمد', 'ymohammed@hidayatqurania.org', '$2y$10$VSYM6C8dDr3LLCeY6eV0SeOBO.xCUhgA8OeokcTKXVbKuxwjOVF6q', 3, '7Q24ERfI75NPnmcEDCAFqBTZK5UX9usEFsCBSO57mciuEN63gKozClP3RYXN', '2019-03-06 03:48:35', '2019-03-04 02:16:05'),
(130, 'د. ياسين قاري', 'yqari1@hidayatqurania.org', '$2y$10$VXwHJCxcjy0tlDhTJpo8O.XJnm7U13vtMXw8OMlfp9c2XNoyPcaZe', 3, 'RK2DJ6z6Ht3MKK5mCuBtnfiWPmxNYahlJXl7laV9F3mIqTpLGp71M5gHMmcm', '2019-03-11 09:45:45', '2019-03-04 02:15:10'),
(131, 'أ.د يحيى زمزمي', 'yzamzami1@hidayatqurania.org', '$2y$10$sEXNnyVZhUmkvFKwkShe7ecarxWsVYDMYhpYJHVb.xRoEnTza4meK', 3, 'QCJvJgucT1vWJEYNxcky9FNEGC5bMn1gwjxG3LIRLOVN66dKUchaM4CZHhiz', '2019-03-11 09:46:37', '2019-03-04 02:15:35'),
(98, 'د. إبراهيم رضا', 'irida@hidayatqurania.org', '$2y$10$aijHW8.f9jc3mGCrC51.puct.LvY/dDVhaBr7YmKrcFs2w5HEXn/e', 3, 'TunVNd35Qadlog4b2iXWXLZBS6NuaNESgVGJ5ru7cPMrcADKsi27KuM89fIl', '2019-03-12 20:24:58', '2019-03-04 01:40:05'),
(99, 'د. أزهري حسين', 'azmhd@hidayatqurania.org', '$2y$10$XTIQxvZMJ8u6vrnFQDPeF.2PbtoAixqUhXLjcgUxi5GGLZqKyKS.u', 3, NULL, '2019-03-04 01:41:20', '2019-03-04 01:41:20'),
(100, 'د. البدري بشارة', 'abisharah@hidayatqurania.org', '$2y$10$T44mmGB8kM7DkPZLk2D1PephbBDRT0s30UOvClrewxO64hbpLibU.', 3, NULL, '2019-03-04 01:41:49', '2019-03-04 01:41:49'),
(101, 'د. الطاهر أحمد', 'aqader@hidayatqurania.org', '$2y$10$bizFzHiXfZgVnPRf.Lord.iwpyqLQQh9Z601cBgawj0qiQKCFHLYu', 3, NULL, '2019-03-04 01:42:18', '2019-03-04 01:42:18'),
(102, 'د. أحمد شكري', 'ashukri@hidayatqurania.org', '$2y$10$08uuo0PUNxPCSoSKlips1eSkqr7urQhbianPyVP.w.1gSlD/Ld6Mq', 3, 'T9sraxdlzhJIAbcq5BOukqvvbUgwK1upK1hMSoEJlZO2m20oE1sLE7w0BL2n', '2019-03-11 19:00:33', '2019-03-04 01:42:51'),
(103, 'د. أمجد زيدان', 'azedan@hidayatqurania.org', '$2y$10$8mz3B12S.nxJMhe2uZXUyuSmAOC12r4hRpHvr655dAcDaELEXqBo.', 3, 'IKxtRTJauab5bwAgyWppV9VsTr2dy6eqQlwDetsFRfv7jd5bFykVWP419zg0', '2019-03-11 16:32:14', '2019-03-04 01:43:21'),
(104, 'د. توفيق العبقري', 'talaabqary@hidayatqurania.org', '$2y$10$HNjCFnzti/652NpLSl0DLuaKLrxbKLjPJOr6J/1bmG9c8u9rraDHy', 3, 'P2ZHGHzt5SX16Xp7xNO6jvzMHWp4ZZ2ylDErK3rbqKWgJi9AH4rP8rlSMvQV', '2019-03-11 10:43:59', '2019-03-04 01:43:52'),
(105, 'د. ثابت أحمد', 'talhaj@hidayatqurania.org', '$2y$10$5y6ONqYqSlwkYKnXCD93VOFeE0/knle3CQlZj988c38.xp2GvLMay', 3, 'TUIZcXiXtDs5qHcWf7pUvCiESEsOIEAqeRdZ2OCzfVSk4tbfhss5HIJIJmC4', '2019-03-12 00:33:58', '2019-03-04 01:44:21'),
(106, 'د. حسن حميتو', 'hhmito@hidayatqurania.org', '$2y$10$CrBYIZoVsu4U3mVqvJOp8esmwwtbB8FUA9Qvk6YH/R7GjRZ//zFnK', 3, 'kHDQhFz6JSQAtugx2B7x0eBTcjjYaCIRUhJTkXsHYOhyq2FEjXe0KewXnqxH', '2019-03-11 13:08:19', '2019-03-04 01:44:54'),
(107, 'د. خالد الغامدي', 'kghamdi@hidayatqurania.org', '$2y$10$7i2TJsWm/cFgpo969UiPNuiKESIz45KwbQ6YjEvNqMY7FU71FSysi', 3, 'DPMqrmdNvQxRgnAuiyjvTxF0PqInj2Jc4ZCRG7x5KZphuL9ozfsxm8TmldoW', '2019-03-11 16:44:58', '2019-03-04 01:45:31'),
(108, 'د. ذو الكفل محمد يوسف', 'zyusoff@hidayatqurania.org', '$2y$10$2r5/eV4JWRjVWX1nzy2vGOO3qRP5lC.lIEXBI0zOPn78FJM64moWK', 3, NULL, '2019-03-04 20:20:54', '2019-03-04 01:46:03'),
(109, 'د. رحيزان بن بارو', 'rbaru@hidayatqurania.org', '$2y$10$CRzRarMl2yPuL4SQyDkt6O1PwTF5y17qpdBGkoH.bER0GUyhEQt/e', 3, 'nCqgMlvmjo6Q6gA2kTF6ulfb0Wb7UKIChTg1kvYejzYmiKwRpdsZUD3Qjiad', '2019-03-12 05:58:20', '2019-03-04 01:46:33'),
(147, 'أحمد الفقيه', 'aalfakih@hidayatqurania.org', '$2y$10$qHj/Fv263nAa00wfDhTgMelo0MB6MhZdRspSvHt7gOoduULA4GZzu', 2, 'PGNVp0tUFynHpAsge9uwkPgBcgnB0TqWgQ3hj8FUgyJOa1mf0JaO67ItKjJF', '2019-03-10 03:00:25', '2019-03-04 04:56:42'),
(148, 'محمد أزهر', 'mibrahim@hidayatqurania.org', '$2y$10$jP3sN2X2jLian0cWWsq8VuhFQl9Z/rKBFzl/pwKZ70XsonNklK5TG', 2, '2eqXZqJ0UFDW8ZDbIbMoUHGw53hvMIjE6LWd24Swj9PhNutz1GCsK4evLPMH', '2019-03-11 10:09:48', '2019-03-04 04:57:54'),
(149, 'أحمد الأطرش', 'alatrash@hidayatqurania.org', '$2y$10$/MCZyR9er9S541RURIAVM.izLkDm5sep0P4zxFT6bECn3rrM19vj2', 2, 'CYJx07c6bNyHqgQYABmPUOtdwiOnAjQMGPsXN2GLubXGSH9M47ka0XNqnWYu', '2019-03-04 11:36:56', '2019-03-04 04:59:10'),
(150, 'زينب طلحة', 'ztalha@hidayatqurania.org', '$2y$10$qUOgWRF8EvM1kwEDr4wAIOu4En3HgJQhJYBGapmKsNCGpU3x4ttiC', 2, 'CNeSzUmwvWx78grllcZ6DCJctCYkWcE4rYkklWzQfgzFltnu3RJ7w3iGZTfp', '2019-03-11 17:01:08', '2019-03-04 05:00:16'),
(151, 'محمد المطري', 'malmatari@hidayatqurania.org', '$2y$10$PoOpMSabjG2jboP4bC1.auIaNj09S.KNEYVGlg.jr2FZcL5zy53Z.', 2, '9fIODr9ORpCWkT61Bv3aBl1jUDIcCquZ2v8P4LjEenXbXMYcYG7oxAfTDuCJ', '2019-03-05 06:24:31', '2019-03-04 05:01:24'),
(153, 'موسى سليمان', 'mabubakar@hidayatqurania.org', '$2y$10$sMp8jOIsvklUYUDcgLMHJ.n0usYStlEkWJ/MYu6HUicHAfQ0Nzvcu', 2, 'U1RC6vO29fpHrjYNSR6H3sA4It641ff87Y5jTdmDuVvY44sUvzsxHZD32t4B', '2019-03-11 23:37:22', '2019-03-04 05:03:32'),
(154, 'هشام المليكي', 'halmalki@hidayatqurania.org', '$2y$10$cBQfx9pT9jW1j41ftd6BAexKZl5PTnJptpoSB.zUaZR2pW1qMLIfm', 2, 'l1pbCwYg32eTltBw8T48apkgDkQSq8oJtqA7xODSxoRuIhbyGqHM6c3vr6sc', '2019-03-11 10:49:33', '2019-03-04 05:04:35'),
(155, 'محمد عطاء', 'mabdulkarim@hidayatqurania.org', '$2y$10$tKXFGbNdZbzUTZdWQ5IPQexs0DPYXhar2Opkb6QTWX3rjSROoITjO', 2, 'vmqW4BFZqMCETmly6aUmJonzmAcZWzAoS8akDJfqvZD318uAu4jVGasp1jf2', '2019-03-11 07:31:44', '2019-03-04 05:05:30'),
(156, 'محمدو دوكوري', 'mdoucoure@hidayatqurania.org', '$2y$10$5nqXCIz3/WTRNl2a.fUP2ODj659GjXPBpaG.rRvkqde3OP3k367H6', 2, 'tCNEulb8oae2cdbFPwGFQMq4BkWGQkcNuWvep4dbIt6eetTpcFN6uQ247Gq9', '2019-03-13 11:41:21', '2019-03-04 05:07:01'),
(157, 'عبدالمحسن المعيلي', 'aalmeaili@hidayatqurania.org', '$2y$10$rP8H.cEUXxI.csL.0ZkpS.Yi6kk/sgGs.6zg5skJQpdb3JD7.Spku', 2, 'DFMIOppnGtW9OJ085qdMSXudV8JvH4qaBxPF4JrhLql9jdYtwhCkEtBiRdQa', '2019-03-13 10:52:31', '2019-03-04 05:08:05'),
(158, 'بكري درامي', 'bdrame@hidayatqurania.org', '$2y$10$4qgJh0ZfBC2CqVetYYcJ0eweY5fyzqK42UOm.xd9eWBSy9/.8x6hO', 2, 'XMB4m3P1hAQiD16G4hWXIrTXCPlN4S4VnB3gN0lGHkE2zbHmfHH6CeM75QjV', '2019-03-11 07:47:45', '2019-03-04 05:09:12'),
(159, 'مسعود الهاشمي', 'malhashimi@hidayatqurania.org', '$2y$10$/4Btj.PyRyMyZRgZxD1oA.Z0QMgEyey.AR72iHRyVL3Nw39G0TqUa', 2, NULL, '2019-03-04 05:10:48', '2019-03-04 05:10:48'),
(160, 'عبدالرحمن الصبحي', 'aalsubhy@hidayatqurania.org', '$2y$10$yccNF0RiknbRe4lHzzMBquLmXrj7y45Raeyxh0D4f3.53Qs1Zm4XO', 2, 'WW4jsHZOpbCbYyes5iCMa8VqugVfHVJPTol4ru48rnEVLXuLvDZZVfgw8EpO', '2019-03-13 17:00:48', '2019-03-04 05:11:51'),
(161, 'راشد الحبسي', 'ralhabsi@hidayatqurania.org', '$2y$10$r3zoVy1vJnNILzQgtGlHpOdFfkAou1DU.C4Ybhx6XaB9O7BLJwUKm', 2, '8xOVfbdaSZ0DCcgvri0PF3xDVLYKSH2VQITk1AEB2IAJkLKk9jlLCZwssf0A', '2019-03-13 09:26:30', '2019-03-04 05:12:45'),
(162, 'بلكاروف أنزور', 'banzor@hidayatqurania.org', '$2y$10$qbFty6ncroPta4/eWRHdzeH.gjicowvB5IpFkWzf3XPMVyuFBQsrS', 2, 'RKP10qYk6ULscEIVNZqbX8x8yVvHFgKTflfefmxJqkzckNAp9FeQAy0z8GxN', '2019-03-07 06:57:35', '2019-03-04 05:13:51'),
(163, 'أمين السكاكر', 'aalsakakir@hidayatqurania.org', '$2y$10$KOycyLRhw4XfLah3S1l43uXvjMwGsgXLHJNXc3at/6arLAyLbvAu6', 2, 'dk9C2XVdSR9puHNYaMjJLd57BKVRc3x4u4MSpxuO7ConvgpLgc7MwI1y4nQl', '2019-03-04 15:40:26', '2019-03-04 05:14:56'),
(164, 'نورة المانع', 'nalmani@hidayatqurania.org', '$2y$10$Sci04BpQp2qpGMjiKVszu.T.3/9UJXfWRW2dnNUMMMZVd66mBHEt2', 2, 'TdGapsTWdFTU4dd6TouPglIrz1318HAaxlQ5Q3i6p2I00uiRd9u4zFX66AOj', '2019-03-13 05:23:58', '2019-03-04 05:16:09'),
(165, 'خالد الحربي', 'kalharbi@hidayatqurania.org', '$2y$10$Xtn/c6wTYti0SxyHtOf0s.2gCGOVlp1HkCn5.ftS8EM/xhGiuMZ1C', 2, 'EF2VnzYkFvO7is3vkpl18nUAcp4c4CmkHVwF7TY88YvCafcAbVQNMkjnAbBW', '2019-03-04 15:27:25', '2019-03-04 05:17:36'),
(166, 'زينب المانع', 'zalmani@hidayatqurania.org', '$2y$10$JoopkhMLWTs9YGJDKvs7XO5jnMRnpPCYEEy7CovG4P2mGwLFyyn.a', 2, '23RPukJyD5dmdkugqM285fqUbSefv9SqLH3BzoZUBOvXHrY48kdy1n7NgcTY', '2019-03-12 15:28:39', '2019-03-04 05:18:38'),
(167, 'رشيد الحمداوي', 'ralhamdaoui@hidayatqurania.org', '$2y$10$2nT4gkeugPI/DJt7hd5ssevvQvXTM4cZFFHdvdybKNj87EUqBqzdW', 2, 'ZiiFWz3W4RUgZex2H3jlLwKBL1P3BdKgBxdc9oFMnL5PaOS9bBpGe6tDRs7d', '2019-03-11 16:00:27', '2019-03-04 05:19:41'),
(168, 'عبدالاله هرماشي', 'aharmachi@hidayatqurania.org', '$2y$10$vCNjV1EgFTFlXXbVrdEi2.LfRLnzAuMEq3U/83OdZhImOrqfiUF4K', 2, 'Syat1FR0GUmq2FkpHGeoCTUS8r4PPuX4zIcHQIYd5wpEmrR6xFBmnZ7kAToj', '2019-03-11 09:54:42', '2019-03-04 05:20:52'),
(169, 'أحمد الريفي', 'arifi@hidayatqurania.org', '$2y$10$QgnQPrUiffVMrZkLUpd7ueS3XQEFlfnt70.lZ7XNgPfFzlWOg2h2a', 2, 'IXn7jBocgai0GxSIWHlSmNbCFcGH3KQjK4C5goYTLSOIy91YPOvmUbxTUtcW', '2019-03-06 19:18:51', '2019-03-04 05:22:00'),
(170, 'عبدالاله الهنا', 'aaitlahna@hidayatqurania.org', '$2y$10$3.5ofeskRtFamSpgGendU.7Q0jmpT6CeUO/hB3mHcmjGFN6FaFf7.', 2, 'Hqms8pvYqrn0LatliYw3Np9flniOtZBZK2W2AjtpfiyCwy7HOu7IQ17ZEg8u', '2019-03-12 06:36:49', '2019-03-04 05:23:11'),
(171, 'نور الدين أقجضاض', 'nakojdad@hidayatqurania.org', '$2y$10$NcCDjgZ3rgvQ6saYj9Fsqu6lCxTkaRuPPiCQvPTc/UfM.BbV0KpG2', 2, '7mwhQVbCv9HNC42V8tK19tqPjzp8TVmmcqEKv4rlePi8ybtD3MeLa4otJSFF', '2019-03-11 16:49:38', '2019-03-04 05:24:29'),
(172, 'عبدالجليل حيمود', 'ahaymoud@hidayatqurania.org', '$2y$10$16NGidF9WuDBxP98cqUBJeB816oUBPkmYub5ffFOgzxKkSC/lZYGW', 2, 'w4BUe9hupwVKrVPfE9hD2kxlNyhpbplF17l35I8msX6z0vknYhJLw5F8ytQv', '2019-03-10 23:30:20', '2019-03-04 05:25:23'),
(173, 'عبدالرزاق الصادقي', 'aalsadiki@hidayatqurania.org', '$2y$10$3cppYTz1fbvRK3z0N199DOfI93iDTy/X1ZVp3TJO9tj4WWdoNXo7m', 2, 'UIlO6QVZkg8hqPIjylxC6OU9slW7MefFslQ4zgp673Ik4ZEweLHVP5SaSpps', '2019-03-06 11:44:56', '2019-03-04 05:26:28'),
(174, 'دنيا الرامي', 'derrami@hidayatqurania.org', '$2y$10$mlEZhx.ohp71g1dxXGo/mOIm8jy7l0cqv2gW39zaKVo3rh3qdEq0W', 2, 'rm2P2fu1MSs68jK12wBcMBalgcbb9AlK2nAi5PdVVnS3Ee0eUR2UGKTlp8Y0', '2019-03-07 20:49:19', '2019-03-04 05:27:34'),
(175, 'بوزيري الجيلالي', 'abouziri@hidayatqurania.org', '$2y$10$P9YPl1hqG5.qyLmGmG.joOeOSlDGikf6NPVESnm6bjd08JTFlT3zq', 2, 'JYc0x4Af04ulpUvrPo89V4YjeuZOj6rOACrDKqiobzklL5dxZDmNmvNPC3zT', '2019-03-12 05:40:45', '2019-03-04 05:28:42'),
(176, 'محمد العمراني', 'melamrani@hidayatqurania.org', '$2y$10$nVjwkX.XyZ9vqfP/1dJD7O8AKQzTD7Q9wL9CKtFDo/7RUoUwpLNG6', 2, '173GuBjq82pqwDSncEVrG21Jj5Hiw8vuMPtb7xpQr2Rbgg5OU5w1Tbq1Ckeo', '2019-03-06 22:19:45', '2019-03-04 05:29:58'),
(177, 'أ.د يحيى زمزمي', 'yzamzami@hidayatqurania.org', '$2y$10$cZZyShOgSJyf8G6DJHAt8u93g1H4/Ld9Nmqe5ufB9HR8t7xavO8j.', 1, NULL, '2019-03-04 05:35:25', '2019-03-04 05:31:30'),
(178, 'أ.د طه عابدين', 'thamed@hidayatqurania.org', '$2y$10$.N8BsX4vkHatVepLN/3TW.KgzbmD83FP7iS4S5lenynUdfLJujojS', 4, 'eRFCifVQK03fQLA0JKUWLqlI6evrnj7YTDUdXcjI1sxspdWzPN84IGGGmLeo', '2019-03-11 16:36:46', '2019-03-04 05:32:12'),
(179, 'د. سالم الزهراني', 'salzahrani@hidayatqurania.org', '$2y$10$ZKlgGz/Ga36V1nLNuM.w8e.68Hi.g4DMuSwQFyBbIA2TpDRWiHkRu', 4, NULL, '2019-03-04 05:32:45', '2019-03-04 05:32:45'),
(180, 'د. ياسين قاري', 'yqari@hidayatqurania.org', '$2y$10$AT/yN8E4gAabTl21iA01heMhKyFGBSWEAscN14kWXE.hYjdysufPe', 1, NULL, '2019-03-04 05:33:09', '2019-03-04 05:33:09'),
(181, 'د. أحمد الفريح', 'aalfrih@hidayatqurania.org', '$2y$10$cEKcYtffg3NK9eyeSSj0OOtUe8h3ouomW2IdYKgVnYIKvRlVObHJ2', 4, NULL, '2019-03-04 05:33:34', '2019-03-04 05:33:34'),
(182, 'د. يوسف الباحوث', 'yalbahooth@hidayatqurania.org', '$2y$10$AdUEZGyGkHJnzTvq8dWWOO0VasK7bbg/8j7rack.DrCrWiGpggQfS', 4, NULL, '2019-03-04 05:34:01', '2019-03-04 05:34:01'),
(183, 'د. فخر الدين الزبير', 'felzubair@hidayatqurania.org', '$2y$10$krsCVj4lrykFsjs7dTaHTO0u71MJb696RE9IkGdMD8LEA.8KJpUhW', 4, NULL, '2019-03-04 05:34:29', '2019-03-04 05:34:29'),
(184, 'د. علال بندويش', 'abendouich@hidayatqurania.org', '$2y$10$7LV4ywwiPcgDk5tQikYk8OGrqDqfQ8n.4ZA2pl6kmgcYbcOpBeNXm', 4, 'MEBkwrXWvZYmAJFZ7pn4aGVNRmxb0HgFrSYKArkYN0RxNS43VdBmI9z9Vm0Y', '2019-03-07 17:43:03', '2019-03-04 05:36:25'),
(185, 'أ. عماد الدين الكناني', 'ealkinani@hidayatqurania.org', '$2y$10$kgo8OuIUm9mmQS/AUXvT.uc8A.TTVuxAF2N9uRLQ0qh3cApDXoqUq', 4, '182fzWRd12c3shfOpPp7MquZEnOWfiCK48ObdcanAhLEk6pA9KoytdvBdA3H', '2019-03-05 09:11:58', '2019-03-04 05:36:52'),
(186, 'أ. حسني بكر مرسي', 'hbakr@hidayatqurania.org', '$2y$10$3Kk8QLXl/5uxgDznbzcJdObN5qc.msrg8M5zAhv8esAZdvE7GJihG', 4, 'bL745T4Zq5usOOXWhf3VrDzwJZHiV6kLny27BgP1AbccDKMZPq2h56UfhTrr', '2019-03-05 08:34:41', '2019-03-04 05:37:18'),
(187, 'أ. أحمد الحاج', 'azamzami@hidayatqurania.org', '$2y$10$5n5NvsOYFHx0DMSt7mOkBuqcpacFYrfjPCgcgDZ81J4Un2E.HSs4m', 1, 'txJlXgybjA9lP5WfUO5GF7x7PanK1E1mXu1bLBeHxT8I6uqoKoC7Q7U2Yj7v', '2019-03-10 06:48:23', '2019-03-04 05:38:07'),
(188, 'أ. رامي الحاج', 'rzamzami@hidayatqurania.org', '$2y$10$q2SlkrgMURP23z0hEtO1VeQCySk5k6RkW.CjW6v7AQfrUNBvGFNKm', 1, '2KSzbvzKI37vuv4PPt0DaWlIqe2I6RHXk9S5vWxMcX4A4gdvP2fcEwNqMKP7', '2019-03-05 06:40:40', '2019-03-04 05:38:51'),
(189, 'أ. هشام كالو', 'hkalo@hidayatqurania.org', '$2y$10$azLL3d36a2CtDD4T9txUDeBtbxhJ/IPPYhsui28FcxKkhkRqmdf/6', 1, 'LNDg2IiFE0eIK5lIi8GEk7jvwydyJbuIQjqOWUW3rX6kLTK7WY8uc8gn7Acs', '2019-03-13 10:40:09', '2019-03-04 05:39:43'),
(190, 'د أحمد خليفة', 'akmohammed@hidayatqurania.org', '$2y$10$HTwQ9Y0qeMUi7C5lF/7GluTytC1Z4sBx6QWDJs6Nq8mySIXzYiwma', 5, '4YpQLUTSZMC8iHWmgZQBpVP9RGEgFgADxO85olejEi8YVVBUwci6xRmbFvYN', '2019-03-04 10:43:45', '2019-03-04 06:22:55'),
(191, 'د يوسف الحسن', 'yelhassan@hidayatqurania.org', '$2y$10$hf9NjrrIko2RQ5XavpusX.lpdf3.tcokWmXZS8v/P7neQJMHiQXuK', 5, NULL, '2019-03-04 06:31:05', '2019-03-04 06:31:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin2_reports`
--
ALTER TABLE `admin2_reports`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `committesreports`
--
ALTER TABLE `committesreports`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_CommittesReports_Sections1_idx` (`Section`),
  ADD KEY `Committee` (`Committee`),
  ADD KEY `Searcherreports` (`Searcherreports`),
  ADD KEY `Supervisorreports` (`Supervisorreports`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cycles`
--
ALTER TABLE `cycles`
  ADD PRIMARY KEY (`ID`,`name`,`startDate`,`endDate`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Divisions_Sections1_idx` (`Section`);

--
-- Indexes for table `divisionunits`
--
ALTER TABLE `divisionunits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Division` (`Division`);

--
-- Indexes for table `examsfiles`
--
ALTER TABLE `examsfiles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_ExamsFiles_Provides1_idx` (`Provide`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `University` (`University`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`ID`,`Searcher`),
  ADD KEY `fk_Helps_Searchers1_idx` (`Searcher`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `meetings_searchers`
--
ALTER TABLE `meetings_searchers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Meeting` (`Meeting`),
  ADD KEY `Searcher` (`Searcher`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Searcher` (`Searcher`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Searcher` (`Searcher`);

--
-- Indexes for table `provides`
--
ALTER TABLE `provides`
  ADD PRIMARY KEY (`ID`,`Searcher`,`Book`),
  ADD KEY `fk_Provides_Searchers1_idx` (`Searcher`),
  ADD KEY `fk_Provides_Books1_idx` (`Book`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User` (`User`),
  ADD KEY `dm` (`Countrie`),
  ADD KEY `Nationalitie` (`Nationalitie`);

--
-- Indexes for table `reviewersearchs`
--
ALTER TABLE `reviewersearchs`
  ADD PRIMARY KEY (`reviewer`,`search`),
  ADD KEY `search` (`search`);

--
-- Indexes for table `reviewers_reports`
--
ALTER TABLE `reviewers_reports`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `search` (`search`),
  ADD KEY `reviewer` (`reviewer`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `searchersreports`
--
ALTER TABLE `searchersreports`
  ADD PRIMARY KEY (`ID`,`Searcher`,`Section`),
  ADD KEY `fk_SearchersReports_Searchers1_idx` (`Searcher`),
  ADD KEY `fk_SearchersReports_Sections1_idx` (`Section`);

--
-- Indexes for table `searchers_reports`
--
ALTER TABLE `searchers_reports`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `searcher_critera`
--
ALTER TABLE `searcher_critera`
  ADD PRIMARY KEY (`Searcher`,`Criteria`),
  ADD KEY `Criteria` (`Criteria`);

--
-- Indexes for table `searchs`
--
ALTER TABLE `searchs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Searchs_Divisions1_idx` (`Division`),
  ADD KEY `Searcher` (`Searcher`),
  ADD KEY `Divisionunit` (`Divisionunit`),
  ADD KEY `cycle` (`Cycle`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Sessions_Searchers1_idx` (`Searcher`);

--
-- Indexes for table `supervisorsreports`
--
ALTER TABLE `supervisorsreports`
  ADD PRIMARY KEY (`ID`,`Supervisor`),
  ADD KEY `fk_SearchersReports_copy1_Supervisors1_idx` (`Supervisor`);

--
-- Indexes for table `supervisors_reports`
--
ALTER TABLE `supervisors_reports`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `theses`
--
ALTER TABLE `theses`
  ADD PRIMARY KEY (`ID`,`Supervisor`,`Searcher`),
  ADD KEY `fk_Theses_Searchers1` (`Searcher`),
  ADD KEY `fk_Theses_Supervisors_idx` (`Supervisor`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `Countrie` (`Countrie`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin2_reports`
--
ALTER TABLE `admin2_reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `committesreports`
--
ALTER TABLE `committesreports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cycles`
--
ALTER TABLE `cycles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divisionunits`
--
ALTER TABLE `divisionunits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meetings_searchers`
--
ALTER TABLE `meetings_searchers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `reviewers_reports`
--
ALTER TABLE `reviewers_reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `searchersreports`
--
ALTER TABLE `searchersreports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `searchers_reports`
--
ALTER TABLE `searchers_reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `searchs`
--
ALTER TABLE `searchs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisorsreports`
--
ALTER TABLE `supervisorsreports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisors_reports`
--
ALTER TABLE `supervisors_reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `theses`
--
ALTER TABLE `theses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
