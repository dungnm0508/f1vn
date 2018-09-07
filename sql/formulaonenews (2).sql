-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 07, 2018 at 09:58 AM
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
-- Database: `formulaonenews`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `difference` int(11) NOT NULL,
  `id_race` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `uid`, `summary`, `start`, `end`, `year`, `difference`, `id_race`, `created_at`, `updated_at`) VALUES
(1, 'f1cal50@formula1.com', 'FORMULA 1 2018 ROLEX AUSTRALIAN GRAND PRIX - FIRST PRACTICE SESSION', '1521741600', '1521747000', 2018, 8, 1, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(2, 'f1cal59@formula1.com', 'FORMULA 1 2018 ROLEX AUSTRALIAN GRAND PRIX - SECOND PRACTICE SESSION', '1521756000', '1521761400', 2018, 8, 1, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(3, 'f1cal80@formula1.com', 'FORMULA 1 2018 ROLEX AUSTRALIAN GRAND PRIX - THIRD PRACTICE SESSION', '1521835200', '1521838800', 2018, 8, 1, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(4, 'f1cal86@formula1.com', 'FORMULA 1 2018 ROLEX AUSTRALIAN GRAND PRIX - QUALIFYING SESSION', '1521846000', '1521849600', 2018, 8, 1, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(5, 'f1cal115@formula1.com', 'FORMULA 1 2018 ROLEX AUSTRALIAN GRAND PRIX - GRAND PRIX (58 LAPS OR 120 MINS)', '1521929400', '1521936600', 2018, 8, 1, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(6, 'f1cal138@formula1.com', 'FORMULA 1 2018 GULF AIR BAHRAIN GRAND PRIX - FIRST PRACTICE SESSION', '1522987200', '1522992600', 2018, 7, 2, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(7, 'f1cal145@formula1.com', 'FORMULA 1 2018 GULF AIR BAHRAIN GRAND PRIX - SECOND PRACTICE SESSION', '1523001600', '1523007000', 2018, 7, 2, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(8, 'f1cal160@formula1.com', 'FORMULA 1 2018 GULF AIR BAHRAIN GRAND PRIX - THIRD PRACTICE SESSION', '1523077200', '1523080800', 2018, 7, 2, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(9, 'f1cal166@formula1.com', 'FORMULA 1 2018 GULF AIR BAHRAIN GRAND PRIX - QUALIFYING SESSION', '1523088000', '1523091600', 2018, 7, 2, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(10, 'f1cal188@formula1.com', 'FORMULA 1 2018 GULF AIR BAHRAIN GRAND PRIX - GRAND PRIX (57 LAPS OR 120 MINS)', '1523175000', '1523182200', 2018, 7, 2, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(11, 'f1cal203@formula1.com', 'FORMULA 1 2018 HEINEKEN CHINESE GRAND PRIX - FIRST PRACTICE SESSION', '1523559600', '1523565000', 2018, 7, 3, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(12, 'f1cal210@formula1.com', 'FORMULA 1 2018 HEINEKEN CHINESE GRAND PRIX - SECOND PRACTICE SESSION', '1523574000', '1523579400', 2018, 7, 3, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(13, 'f1cal224@formula1.com', 'FORMULA 1 2018 HEINEKEN CHINESE GRAND PRIX - THIRD PRACTICE SESSION', '1523649600', '1523653200', 2018, 7, 3, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(14, 'f1cal229@formula1.com', 'FORMULA 1 2018 HEINEKEN CHINESE GRAND PRIX - QUALIFYING SESSION', '1523660400', '1523664000', 2018, 7, 3, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(15, 'f1cal246@formula1.com', 'FORMULA 1 2018 HEINEKEN CHINESE GRAND PRIX - GRAND PRIX (56 LAPS OR 120 MINS)', '1523747400', '1523754600', 2018, 7, 3, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(16, 'f1cal266@formula1.com', 'FORMULA 1 2018 AZERBAIJAN GRAND PRIX - FIRST PRACTICE SESSION', '1524794400', '1524799800', 2018, 7, 4, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(17, 'f1cal273@formula1.com', 'FORMULA 1 2018 AZERBAIJAN GRAND PRIX - SECOND PRACTICE SESSION', '1524808800', '1524814200', 2018, 7, 4, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(18, 'f1cal287@formula1.com', 'FORMULA 1 2018 AZERBAIJAN GRAND PRIX - THIRD PRACTICE SESSION', '1524884400', '1524888000', 2018, 7, 4, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(19, 'f1cal291@formula1.com', 'FORMULA 1 2018 AZERBAIJAN GRAND PRIX - QUALIFYING SESSION', '1524895200', '1524898800', 2018, 7, 4, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(20, 'f1cal307@formula1.com', 'FORMULA 1 2018 AZERBAIJAN GRAND PRIX - GRAND PRIX (51 LAPS OR 120 MINS)', '1524978600', '1524985800', 2018, 7, 4, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(21, 'f1cal327@formula1.com', 'FORMULA 1 GRAN PREMIO DE ESPAÑA EMIRATES 2018 - FIRST PRACTICE SESSION', '1526004000', '1526009400', 2018, 7, 5, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(22, 'f1cal333@formula1.com', 'FORMULA 1 GRAN PREMIO DE ESPAÑA EMIRATES 2018 - SECOND PRACTICE SESSION', '1526018400', '1526023800', 2018, 7, 5, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(23, 'f1cal351@formula1.com', 'FORMULA 1 GRAN PREMIO DE ESPAÑA EMIRATES 2018 - THIRD PRACTICE SESSION', '1526094000', '1526097600', 2018, 7, 5, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(24, 'f1cal355@formula1.com', 'FORMULA 1 GRAN PREMIO DE ESPAÑA EMIRATES 2018 - QUALIFYING SESSION', '1526104800', '1526108400', 2018, 7, 5, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(25, 'f1cal381@formula1.com', 'FORMULA 1 GRAN PREMIO DE ESPAÑA EMIRATES 2018 - GRAND PRIX (66 LAPS OR 120 MINS)', '1526191800', '1526199000', 2018, 7, 5, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(26, 'f1cal397@formula1.com', 'FORMULA 1 GRAND PRIX DE MONACO 2018 - FIRST PRACTICE SESSION', '1527127200', '1527132600', 2018, 7, 6, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(27, 'f1cal406@formula1.com', 'FORMULA 1 GRAND PRIX DE MONACO 2018 - SECOND PRACTICE SESSION', '1527141600', '1527147000', 2018, 7, 6, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(28, 'f1cal438@formula1.com', 'FORMULA 1 GRAND PRIX DE MONACO 2018 - THIRD PRACTICE SESSION', '1527303600', '1527307200', 2018, 7, 6, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(29, 'f1cal442@formula1.com', 'FORMULA 1 GRAND PRIX DE MONACO 2018 - QUALIFYING SESSION', '1527314400', '1527318000', 2018, 7, 6, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(30, 'f1cal464@formula1.com', 'FORMULA 1 GRAND PRIX DE MONACO 2018 - GRAND PRIX (78 LAPS OR 120 MINS)', '1527401400', '1527408600', 2018, 7, 6, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(31, 'f1cal484@formula1.com', 'FORMULA 1 GRAND PRIX HEINEKEN DU CANADA 2018 - FIRST PRACTICE SESSION', '1528441200', '1528446600', 2018, 7, 7, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(32, 'f1cal490@formula1.com', 'FORMULA 1 GRAND PRIX HEINEKEN DU CANADA 2018 - SECOND PRACTICE SESSION', '1528455600', '1528461000', 2018, 7, 7, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(33, 'f1cal505@formula1.com', 'FORMULA 1 GRAND PRIX HEINEKEN DU CANADA 2018 - THIRD PRACTICE SESSION', '1528531200', '1528534800', 2018, 7, 7, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(34, 'f1cal510@formula1.com', 'FORMULA 1 GRAND PRIX HEINEKEN DU CANADA 2018 - QUALIFYING SESSION', '1528542000', '1528545600', 2018, 7, 7, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(35, 'f1cal531@formula1.com', 'FORMULA 1 GRAND PRIX HEINEKEN DU CANADA 2018 - GRAND PRIX (70 LAPS OR 120 MINS)', '1528629000', '1528636200', 2018, 7, 7, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(36, 'f1cal557@formula1.com', 'FORMULA 1 PIRELLI GRAND PRIX DE FRANCE 2018 - FIRST PRACTICE SESSION', '1529636400', '1529641800', 2018, 7, 8, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(37, 'f1cal562@formula1.com', 'FORMULA 1 PIRELLI GRAND PRIX DE FRANCE 2018 - SECOND PRACTICE SESSION', '1529650800', '1529656200', 2018, 7, 8, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(38, 'f1cal579@formula1.com', 'FORMULA 1 PIRELLI GRAND PRIX DE FRANCE 2018 - THIRD PRACTICE SESSION', '1529726400', '1529730000', 2018, 7, 8, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(39, 'f1cal585@formula1.com', 'FORMULA 1 PIRELLI GRAND PRIX DE FRANCE 2018 - QUALIFYING SESSION', '1529737200', '1529740800', 2018, 7, 8, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(40, 'f1cal618@formula1.com', 'FORMULA 1 PIRELLI GRAND PRIX DE FRANCE 2018 - GRAND PRIX (53 LAPS OR 120 MINS)', '1529824200', '1529831400', 2018, 7, 8, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(41, 'f1cal637@formula1.com', 'FORMULA 1 EYETIME GROSSER PREIS VON ÖSTERREICH 2018 - FIRST PRACTICE SESSION', '1530237600', '1530243000', 2018, 7, 9, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(42, 'f1cal645@formula1.com', 'FORMULA 1 EYETIME GROSSER PREIS VON ÖSTERREICH 2018 - SECOND PRACTICE SESSION', '1530252000', '1530257400', 2018, 7, 9, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(43, 'f1cal664@formula1.com', 'FORMULA 1 EYETIME GROSSER PREIS VON ÖSTERREICH 2018 - THIRD PRACTICE SESSION', '1530327600', '1530331200', 2018, 7, 9, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(44, 'f1cal671@formula1.com', 'FORMULA 1 EYETIME GROSSER PREIS VON ÖSTERREICH 2018 - QUALIFYING SESSION', '1530338400', '1530342000', 2018, 7, 9, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(45, 'f1cal698@formula1.com', 'FORMULA 1 EYETIME GROSSER PREIS VON ÖSTERREICH 2018 - GRAND PRIX (71 LAPS OR 120 MINS)', '1530425400', '1530432600', 2018, 7, 9, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(46, 'f1cal723@formula1.com', 'FORMULA 1 2018 ROLEX BRITISH GRAND PRIX - FIRST PRACTICE SESSION', '1530842400', '1530847800', 2018, 7, 10, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(47, 'f1cal731@formula1.com', 'FORMULA 1 2018 ROLEX BRITISH GRAND PRIX - SECOND PRACTICE SESSION', '1530856800', '1530862200', 2018, 7, 10, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(48, 'f1cal748@formula1.com', 'FORMULA 1 2018 ROLEX BRITISH GRAND PRIX - THIRD PRACTICE SESSION', '1530932400', '1530936000', 2018, 7, 10, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(49, 'f1cal754@formula1.com', 'FORMULA 1 2018 ROLEX BRITISH GRAND PRIX - QUALIFYING SESSION', '1530943200', '1530946800', 2018, 7, 10, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(50, 'f1cal785@formula1.com', 'FORMULA 1 2018 ROLEX BRITISH GRAND PRIX - GRAND PRIX (52 LAPS OR 120 MINS)', '1531030200', '1531037400', 2018, 7, 10, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(51, 'f1cal786@formula1.com', 'FORMULA 1 EMIRATES GROSSER PREIS VON DEUTSCHLAND 2018 - FIRST PRACTICE SESSION', '1532052000', '1532057400', 2018, 7, 11, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(52, 'f1cal787@formula1.com', 'FORMULA 1 EMIRATES GROSSER PREIS VON DEUTSCHLAND 2018 - SECOND PRACTICE SESSION', '1532066400', '1532071800', 2018, 7, 11, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(53, 'f1cal788@formula1.com', 'FORMULA 1 EMIRATES GROSSER PREIS VON DEUTSCHLAND 2018 - THIRD PRACTICE SESSION', '1532142000', '1532145600', 2018, 7, 11, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(54, 'f1cal789@formula1.com', 'FORMULA 1 EMIRATES GROSSER PREIS VON DEUTSCHLAND 2018 - QUALIFYING SESSION', '1532152800', '1532156400', 2018, 7, 11, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(55, 'f1cal790@formula1.com', 'FORMULA 1 EMIRATES GROSSER PREIS VON DEUTSCHLAND 2018 - GRAND PRIX (67 LAPS OR 120 MINS)', '1532239800', '1532247000', 2018, 7, 11, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(56, 'f1cal791@formula1.com', 'FORMULA 1 MAGYAR NAGYDÍJ 2018 - FIRST PRACTICE SESSION', '1532656800', '1532662200', 2018, 7, 12, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(57, 'f1cal792@formula1.com', 'FORMULA 1 MAGYAR NAGYDÍJ 2018 - SECOND PRACTICE SESSION', '1532671200', '1532676600', 2018, 7, 12, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(58, 'f1cal793@formula1.com', 'FORMULA 1 MAGYAR NAGYDÍJ 2018 - THIRD PRACTICE SESSION', '1532746800', '1532750400', 2018, 7, 12, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(59, 'f1cal794@formula1.com', 'FORMULA 1 MAGYAR NAGYDÍJ 2018 - QUALIFYING SESSION', '1532757600', '1532761200', 2018, 7, 12, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(60, 'f1cal795@formula1.com', 'FORMULA 1 MAGYAR NAGYDÍJ 2018 - GRAND PRIX (70 LAPS OR 120 MINS)', '1532844600', '1532851800', 2018, 7, 12, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(61, 'f1cal796@formula1.com', 'FORMULA 1 2018 JOHNNIE WALKER BELGIAN GRAND PRIX - FIRST PRACTICE SESSION', '1535076000', '1535081400', 2018, 7, 13, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(62, 'f1cal797@formula1.com', 'FORMULA 1 2018 JOHNNIE WALKER BELGIAN GRAND PRIX - SECOND PRACTICE SESSION', '1535090400', '1535095800', 2018, 7, 13, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(63, 'f1cal798@formula1.com', 'FORMULA 1 2018 JOHNNIE WALKER BELGIAN GRAND PRIX - THIRD PRACTICE SESSION', '1535166000', '1535169600', 2018, 7, 13, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(64, 'f1cal799@formula1.com', 'FORMULA 1 2018 JOHNNIE WALKER BELGIAN GRAND PRIX - QUALIFYING SESSION', '1535176800', '1535180400', 2018, 7, 13, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(65, 'f1cal800@formula1.com', 'FORMULA 1 2018 JOHNNIE WALKER BELGIAN GRAND PRIX - GRAND PRIX (44 LAPS OR 120 MINS)', '1535263800', '1535271000', 2018, 7, 13, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(66, 'f1cal801@formula1.com', 'FORMULA 1 GRAN PREMIO HEINEKEN D\'ITALIA 2018 - FIRST PRACTICE SESSION', '1535680800', '1535686200', 2018, 7, 14, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(67, 'f1cal802@formula1.com', 'FORMULA 1 GRAN PREMIO HEINEKEN D\'ITALIA 2018 - SECOND PRACTICE SESSION', '1535695200', '1535700600', 2018, 7, 14, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(68, 'f1cal803@formula1.com', 'FORMULA 1 GRAN PREMIO HEINEKEN D\'ITALIA 2018 - THIRD PRACTICE SESSION', '1535770800', '1535774400', 2018, 7, 14, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(69, 'f1cal804@formula1.com', 'FORMULA 1 GRAN PREMIO HEINEKEN D\'ITALIA 2018 - QUALIFYING SESSION', '1535781600', '1535785200', 2018, 7, 14, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(70, 'f1cal805@formula1.com', 'FORMULA 1 GRAN PREMIO HEINEKEN D\'ITALIA 2018 - GRAND PRIX (53 LAPS OR 120 MINS)', '1535868600', '1535875800', 2018, 7, 14, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(71, 'f1cal806@formula1.com', 'FORMULA 1 2018 SINGAPORE AIRLINES SINGAPORE GRAND PRIX - FIRST PRACTICE SESSION', '1536888600', '1536894000', 2018, 7, 15, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(72, 'f1cal807@formula1.com', 'FORMULA 1 2018 SINGAPORE AIRLINES SINGAPORE GRAND PRIX - SECOND PRACTICE SESSION', '1536903000', '1536908400', 2018, 7, 15, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(73, 'f1cal808@formula1.com', 'FORMULA 1 2018 SINGAPORE AIRLINES SINGAPORE GRAND PRIX - THIRD PRACTICE SESSION', '1536980400', '1536984000', 2018, 7, 15, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(74, 'f1cal809@formula1.com', 'FORMULA 1 2018 SINGAPORE AIRLINES SINGAPORE GRAND PRIX - QUALIFYING SESSION', '1536991200', '1536994800', 2018, 7, 15, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(75, 'f1cal810@formula1.com', 'FORMULA 1 2018 SINGAPORE AIRLINES SINGAPORE GRAND PRIX - GRAND PRIX (61 LAPS OR 120 MINS)', '1537074600', '1537081800', 2018, 7, 15, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(76, 'f1cal811@formula1.com', 'FORMULA 1 2018 VTB RUSSIAN GRAND PRIX - FIRST PRACTICE SESSION', '1538096400', '1538101800', 2018, 7, 16, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(77, 'f1cal812@formula1.com', 'FORMULA 1 2018 VTB RUSSIAN GRAND PRIX - SECOND PRACTICE SESSION', '1538110800', '1538116200', 2018, 7, 16, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(78, 'f1cal813@formula1.com', 'FORMULA 1 2018 VTB RUSSIAN GRAND PRIX - THIRD PRACTICE SESSION', '1538186400', '1538190000', 2018, 7, 16, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(79, 'f1cal814@formula1.com', 'FORMULA 1 2018 VTB RUSSIAN GRAND PRIX - QUALIFYING SESSION', '1538197200', '1538200800', 2018, 7, 16, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(80, 'f1cal815@formula1.com', 'FORMULA 1 2018 VTB RUSSIAN GRAND PRIX - GRAND PRIX (53 LAPS OR 120 MINS)', '1538280600', '1538287800', 2018, 7, 16, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(81, 'f1cal816@formula1.com', 'FORMULA 1 2018 JAPANESE GRAND PRIX - FIRST PRACTICE SESSION', '1538676000', '1538681400', 2018, 7, 17, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(82, 'f1cal817@formula1.com', 'FORMULA 1 2018 JAPANESE GRAND PRIX - SECOND PRACTICE SESSION', '1538690400', '1538695800', 2018, 7, 17, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(83, 'f1cal818@formula1.com', 'FORMULA 1 2018 JAPANESE GRAND PRIX - THIRD PRACTICE SESSION', '1538769600', '1538773200', 2018, 7, 17, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(84, 'f1cal819@formula1.com', 'FORMULA 1 2018 JAPANESE GRAND PRIX - QUALIFYING SESSION', '1538780400', '1538784000', 2018, 7, 17, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(85, 'f1cal820@formula1.com', 'FORMULA 1 2018 JAPANESE GRAND PRIX - GRAND PRIX (53 LAPS OR 120 MINS)', '1538863800', '1538871000', 2018, 7, 17, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(86, 'f1cal821@formula1.com', 'FORMULA 1 PIRELLI 2018 UNITED STATES GRAND PRIX - FIRST PRACTICE SESSION', '1539936000', '1539941400', 2018, 7, 18, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(87, 'f1cal822@formula1.com', 'FORMULA 1 PIRELLI 2018 UNITED STATES GRAND PRIX - SECOND PRACTICE SESSION', '1539950400', '1539955800', 2018, 7, 18, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(88, 'f1cal823@formula1.com', 'FORMULA 1 PIRELLI 2018 UNITED STATES GRAND PRIX - THIRD PRACTICE SESSION', '1540033200', '1540036800', 2018, 7, 18, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(89, 'f1cal824@formula1.com', 'FORMULA 1 PIRELLI 2018 UNITED STATES GRAND PRIX - QUALIFYING SESSION', '1540044000', '1540047600', 2018, 7, 18, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(90, 'f1cal825@formula1.com', 'FORMULA 1 PIRELLI 2018 UNITED STATES GRAND PRIX - GRAND PRIX (56 LAPS OR 120 MINS)', '1540120200', '1540127400', 2018, 7, 18, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(91, 'f1cal826@formula1.com', 'FORMULA 1 GRAN PREMIO DE MÉXICO 2018 - FIRST PRACTICE SESSION', '1540540800', '1540546200', 2018, 7, 19, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(92, 'f1cal827@formula1.com', 'FORMULA 1 GRAN PREMIO DE MÉXICO 2018 - SECOND PRACTICE SESSION', '1540555200', '1540560600', 2018, 7, 19, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(93, 'f1cal828@formula1.com', 'FORMULA 1 GRAN PREMIO DE MÉXICO 2018 - THIRD PRACTICE SESSION', '1540627200', '1540630800', 2018, 7, 19, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(94, 'f1cal829@formula1.com', 'FORMULA 1 GRAN PREMIO DE MÉXICO 2018 - QUALIFYING SESSION', '1540638000', '1540641600', 2018, 7, 19, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(95, 'f1cal830@formula1.com', 'FORMULA 1 GRAN PREMIO DE MÉXICO 2018 - GRAND PRIX (71 LAPS OR 120 MINS)', '1540728600', '1540735800', 2018, 7, 19, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(96, 'f1cal831@formula1.com', 'FORMULA 1 GRANDE PRÊMIO HEINEKEN DO BRASIL 2018 - FIRST PRACTICE SESSION', '1541746800', '1541752200', 2018, 7, 20, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(97, 'f1cal832@formula1.com', 'FORMULA 1 GRANDE PRÊMIO HEINEKEN DO BRASIL 2018 - SECOND PRACTICE SESSION', '1541761200', '1541766600', 2018, 7, 20, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(98, 'f1cal833@formula1.com', 'FORMULA 1 GRANDE PRÊMIO HEINEKEN DO BRASIL 2018 - THIRD PRACTICE SESSION', '1541836800', '1541840400', 2018, 7, 20, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(99, 'f1cal834@formula1.com', 'FORMULA 1 GRANDE PRÊMIO HEINEKEN DO BRASIL 2018 - QUALIFYING SESSION', '1541847600', '1541851200', 2018, 7, 20, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(100, 'f1cal835@formula1.com', 'FORMULA 1 GRANDE PRÊMIO HEINEKEN DO BRASIL 2018 - GRAND PRIX (71 LAPS OR 120 MINS)', '1541934600', '1541941800', 2018, 7, 20, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(101, 'f1cal836@formula1.com', 'FORMULA 1 2018 ETIHAD AIRWAYS ABU DHABI GRAND PRIX - FIRST PRACTICE SESSION', '1542938400', '1542943800', 2018, 7, 21, '2018-08-20 04:44:07', '2018-08-20 04:44:07'),
(102, 'f1cal837@formula1.com', 'FORMULA 1 2018 ETIHAD AIRWAYS ABU DHABI GRAND PRIX - SECOND PRACTICE SESSION', '1542952800', '1542958200', 2018, 7, 21, '2018-08-20 04:44:08', '2018-08-20 04:44:08'),
(103, 'f1cal838@formula1.com', 'FORMULA 1 2018 ETIHAD AIRWAYS ABU DHABI GRAND PRIX - THIRD PRACTICE SESSION', '1543028400', '1543032000', 2018, 7, 21, '2018-08-20 04:44:08', '2018-08-20 04:44:08'),
(104, 'f1cal839@formula1.com', 'FORMULA 1 2018 ETIHAD AIRWAYS ABU DHABI GRAND PRIX - QUALIFYING SESSION', '1543039200', '1543042800', 2018, 7, 21, '2018-08-20 04:44:08', '2018-08-20 04:44:08'),
(105, 'f1cal840@formula1.com', 'FORMULA 1 2018 ETIHAD AIRWAYS ABU DHABI GRAND PRIX - GRAND PRIX (55 LAPS OR 120 MINS)', '1543126200', '1543133400', 2018, 7, 21, '2018-08-20 04:44:08', '2018-08-20 04:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url_driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_team` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_team` (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `url_driver`, `image_driver`, `number_driver`, `name_driver`, `id_team`, `created_at`, `updated_at`) VALUES
(1, '/en/championship/drivers/lewis-hamilton.html', '/content/fom-website/en/championship/drivers/lewis-hamilton/_jcr_content/image.img.320.medium.jpg/1533294345447.jpg', '44 ', 'Lewis Hamilton', 1, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(2, '/en/championship/drivers/sebastian-vettel.html', '/content/fom-website/en/championship/drivers/sebastian-vettel/_jcr_content/image.img.320.medium.jpg/1533294389985.jpg', '5 ', 'Sebastian Vettel', 2, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(3, '/en/championship/drivers/kimi-raikkonen.html', '/content/fom-website/en/championship/drivers/kimi-raikkonen/_jcr_content/image.img.320.medium.jpg/1533300922935.jpg', '7 ', 'Kimi Räikkönen', 2, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(4, '/en/championship/drivers/valtteri-bottas.html', '/content/fom-website/en/championship/drivers/valtteri-bottas/_jcr_content/image.img.320.medium.jpg/1533294370081.jpg', '77 ', 'Valtteri Bottas', 1, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(5, '/en/championship/drivers/max-verstappen.html', '/content/fom-website/en/championship/drivers/max-verstappen/_jcr_content/image.img.320.medium.jpg/1533295146020.jpg', '33 ', 'Max Verstappen', 3, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(6, '/en/championship/drivers/daniel-ricciardo.html', '/content/fom-website/en/championship/drivers/daniel-ricciardo/_jcr_content/image.img.320.medium.jpg/1533301149434.jpg', '3 ', 'Daniel Ricciardo', 3, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(7, '/en/championship/drivers/nico-hulkenberg.html', '/content/fom-website/en/championship/drivers/nico-hulkenberg/_jcr_content/image.img.320.medium.jpg/1533295082756.jpg', '27 ', 'Nico Hulkenberg', 4, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(8, '/en/championship/drivers/kevin-magnussen.html', '/content/fom-website/en/championship/drivers/kevin-magnussen/_jcr_content/image.img.320.medium.jpg/1533300863113.jpg', '20 ', 'Kevin Magnussen', 5, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(9, '/en/championship/drivers/fernando-alonso.html', '/content/fom-website/en/championship/drivers/fernando-alonso/_jcr_content/image.img.320.medium.jpg/1533301109284.jpg', '14 ', 'Fernando Alonso', 6, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(10, '/en/championship/drivers/sergio-perez.html', '/content/fom-website/en/championship/drivers/sergio-perez/_jcr_content/image.img.320.medium.jpg/1533294426481.jpg', '11 ', 'Sergio Perez', 10, '2018-08-29 01:11:58', '2018-08-29 01:11:58'),
(11, '/en/championship/drivers/esteban-ocon.html', '/content/fom-website/en/championship/drivers/esteban-ocon/_jcr_content/image.img.320.medium.jpg/1533294282682.jpg', '31 ', 'Esteban Ocon', 10, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(12, '/en/championship/drivers/carlos-sainz.html', '/content/fom-website/en/championship/drivers/carlos-sainz/_jcr_content/image.img.320.medium.jpg/1533301219327.jpg', '55 ', 'Carlos Sainz', 4, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(13, '/en/championship/drivers/pierre-gasly.html', '/content/fom-website/en/championship/drivers/pierre-gasly/_jcr_content/image.img.320.medium.jpg/1533294246796.jpg', '10 ', 'Pierre Gasly', 7, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(14, '/en/championship/drivers/romain-grosjean.html', '/content/fom-website/en/championship/drivers/romain-grosjean/_jcr_content/image.img.320.medium.jpg/1533294405847.jpg', '8 ', 'Romain Grosjean', 5, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(15, '/en/championship/drivers/charles-leclerc.html', '/content/fom-website/en/championship/drivers/charles-leclerc/_jcr_content/image.img.320.medium.jpg/1533294000633.jpg', '16 ', 'Charles Leclerc', 8, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(16, '/en/championship/drivers/stoffel-vandoorne.html', '/content/fom-website/en/championship/drivers/stoffel-vandoorne/_jcr_content/image.img.320.medium.jpg/1533294305801.jpg', '2 ', 'Stoffel Vandoorne', 6, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(17, '/en/championship/drivers/marcus-ericsson.html', '/content/fom-website/en/championship/drivers/marcus-ericsson/_jcr_content/image.img.320.medium.jpg/1533295125317.jpg', '9 ', 'Marcus Ericsson', 8, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(18, '/en/championship/drivers/lance-stroll.html', '/content/fom-website/en/championship/drivers/lance-stroll/_jcr_content/image.img.320.medium.jpg/1533294264620.jpg', '18 ', 'Lance Stroll', 9, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(19, '/en/championship/drivers/brendon-hartley.html', '/content/fom-website/en/championship/drivers/brendon-hartley/_jcr_content/image.img.320.medium.jpg/1533294231878.jpg', '28 ', 'Brendon Hartley', 7, '2018-08-29 01:11:59', '2018-08-29 01:11:59'),
(20, '/en/championship/drivers/sergey-sirotkin.html', '/content/fom-website/en/championship/drivers/sergey-sirotkin/_jcr_content/image.img.320.medium.jpg/1533294188636.jpg', '35 ', 'Sergey Sirotkin', 9, '2018-08-29 01:11:59', '2018-08-29 01:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_09_093500_create_calendar_table', 1),
(4, '2018_08_22_095743_create_race_table', 2),
(5, '2018_08_29_072320_create_teams_table', 3),
(6, '2018_08_29_080430_create_drivers_table', 4),
(7, '2018_09_07_092936_create_news_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `url_news`, `img_news`, `tag_news`, `caption_news`, `created_at`, `updated_at`) VALUES
(47, '/en/latest/article.toto-wolff-mercedes-will-re-evaluate-junior-programme-if-drivers-don\'t-get-2019-f1-seat.3GoS5QOUIwOi0oEW2i2U8s.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/China/Saturday/dcd1814ap11.jpg.transform/4col/image.jpg', 'News', 'Mercedes will re-evaluate junior programme if drivers don’t get 2019 F1 seat – Wolff', '2018-09-07 02:51:41', '2018-09-07 02:51:41'),
(41, '/en/latest/article.honda-power-figures-very-promising-verstappen.4P103FnTDGCQaKUq0AyigQ.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Friday/dcd1831au697.jpg.transform/4col/image.jpg', 'News', 'Honda power figures &#39;very promising&#39; – Verstappen', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(40, '/en/latest/article.the-rookie-brendon-hartleys-spa-and-monza-debrief.5KWODbEKWsKyaqAao4aCm0.html', 'https://www.formula1.com/content/dam/fom-website/ooyala-videos/2018/9/U0Nnc0ZzE64LFrqVGsxTuQOEBE3J-sRr.transform/4col/image.jpg', 'Video', 'THE ROOKIE: Brendon Hartley&#39;s Spa and Monza debrief', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(39, '/en/latest/article.podcast-romain-grosjean-on-criticism-psychology-and-his-racing-future.3a5kmK6XjWyqWUyEcISi26.html', 'https://www.formula1.com/content/dam/fom-website/ooyala-videos/2018/9/RteXc0ZzE6rsotIaD3yRQMkSJxonbcrq.transform/4col/image.jpg', 'Audio / Podcast', 'PODCAST: Romain Grosjean on criticism, psychology and his racing future', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(38, '/en/latest/article.faith-in-youth-mclarens-young-driver-track-record.629NzrIV9uY0ESacQsCEOE.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Germany/Saturday/dcb1821jy383.jpg.transform/4col/image.jpg', 'Feature', 'FAITH IN YOUTH: McLaren&#39;s young driver track record', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(37, '/en/latest/article.road-to-f1-makino-takes-shock-win-as-monza-musters-magical-weekend.46LY6QWrugukMIQos0euIC.html', 'https://www.formula1.com/content/dam/fom-website/manual/Misc/ROAD_TO_F1/Tadasuke%20Makino%20podium.jpg.transform/4col/image.jpg', 'Feature', 'ROAD TO F1: Makino takes shock win as Monza musters magical weekend', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(35, '/en/latest/article.mclaren-re-hire-former-engineering-chief.32rH0m32ZimI8WqKuKyiCo.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2016/Japan/Thursday/dcd1606oc646.jpg.transform/4col/image.jpg', 'News', 'McLaren re-hire former engineering chief', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(36, '/en/latest/article.f1-power-rankings-hamilton-retains-top-spot-as-vettel-and-verstappen-drop.4Sg1WEc2w8uqgAg02ioS4K.html', 'https://www.formula1.com/content/dam/fom-website/manual/Misc/POWER_RANKINGS/Power%20Rankings_new.jpg.transform/4col/image.jpg', 'Feature', 'F1 POWER RANKINGS: Hamilton retains top spot as Vettel and Verstappen drop down order', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(34, '/en/latest/article.tech-tuesday-dealing-with-flat-out-monza\'s-unique-challenges.1c29HLAG4Q8wCweeiS2gAs.html', 'https://www.formula1.com/content/dam/fom-website/manual/Technical/2018Piola/Italy/125-2018%20MERCEDES%20F%20WING%20MONZA.jpg.transform/4col/image.jpg', 'Technology', 'TECH TUESDAY: Dealing with flat-out Monza’s unique challenges', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(33, '/en/latest/article.dt\'s-10-thoughts-on-italy-and-beyond.3AmOxrEiS4yqIWoG0YUokI.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcb1802au311.jpg.transform/4col/image.jpg', 'Feature', 'DT’S 10 THOUGHTS… On Italy and beyond', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(32, '/en/latest/article.mclaren-reliability-has-gone-backwards-alonso.5KpiICrWgM0WcqeIeMMKsO.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcb1802au239.jpg.transform/4col/image.jpg', 'News', 'McLaren reliability has gone backwards - Alonso', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(31, '/en/latest/article.\'we-pieced-the-puzzle-together\'-stroll-hails-\'fantastic\'-p9.6km8cu7FWE0Q0igU8EWou4.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcd1802se608.jpg.transform/4col/image.jpg', 'News', '‘We pieced the puzzle together’ – Stroll hails ‘fantastic’ P9', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(30, '/en/latest/article.mixed-feelings-for-perez-after-fine-recovery-drive.7piOOnqsI80aq2yGOYSMUq.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcb1802au186.jpg.transform/4col/image.jpg', 'News', 'Mixed feelings for Perez after fine Monza recovery drive', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(29, '/en/latest/article.lando-norris-all-you-need-to-know-about-mclarens-f1-debutant.1LCJQMjHRW6KMwcWkciwUa.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/HungaryTest/Day%20Two/dcd1801au430.jpg.transform/4col/image.jpg', 'Feature', 'LANDO NORRIS: All you need to know about McLaren&#39;s F1 debutant', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(28, '/en/latest/article.winners-and-losers-italian-grand-prix-edition.1cQPCUbGsASQUqeQ2Q0Kmm.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcd1802se1020.jpg.transform/4col/image.jpg', 'Feature', 'WINNERS AND LOSERS – Italian Grand Prix edition', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(27, '/en/latest/article.norris-to-partner-sainz-at-mclaren-in-2019.6nJQRFpYYMkwUoA4saswCo.html', 'https://www.formula1.com/content/dam/fom-website/manual/1016866370-LAT-20180824-_2ST2476.jpg.transform/4col/image.jpg', 'News', 'Norris to partner Sainz at McLaren in 2019', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(23, '/en/latest/article.grosjean-disqualified-from-italian-gp-haas-to-appeal.68UyYVyxWgMk40QoSGauwo.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Saturday/dcd1801se68.jpg.transform/4col/image.jpg', 'News', 'Grosjean disqualified from Italian GP, Haas to appeal', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(24, '/en/latest/article.highlights-2018-italian-grand-prix.4CUKmhvxvWMOewu0UUC0E4.html', 'https://www.formula1.com/content/dam/fom-website/ooyala-videos/2018/9/k2cjk0ZzE6m1tk6QH8wYR9nv2la9dK7r.transform/4col/image.jpg', 'Video', 'HIGHLIGHTS: 2018 Italian Grand Prix', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(25, '/en/latest/article.hamilton-snatches-victory-from-raikkonen-in-dramatic-italian-grand-prix.3bTryOzt5SeoQskWeGqkQY.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcb1802au55.jpg.transform/4col/image.jpg', 'Report', 'Hamilton snatches victory from Raikkonen in dramatic Italian Grand Prix', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(26, '/en/latest/article.vandoorne-to-leave-mclaren-at-the-end-of-2018.22BBI1e1awuGqgkesKk4I4.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Belgium/Thursday/dcb1823au101.jpg.transform/4col/image.jpg', 'News', 'Vandoorne to leave McLaren at the end of 2018', '2018-09-07 02:49:56', '2018-09-07 02:49:56'),
(45, '/en/latest/article.force-india-targeting-mclarens-sixth-place-after-strong-monza.5ezh6uaxfqsEyguagUGcUu.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcb1802au280.jpg.transform/4col/image.jpg', 'News', 'Force India targeting McLaren&#39;s sixth place after strong Monza', '2018-09-07 02:51:41', '2018-09-07 02:51:41'),
(46, '/en/latest/article.ocon-is-exceptional-hamilton.6DlOGMSSvSUIG2cEMSm8aI.html', 'https://www.formula1.com/content/dam/fom-website/sutton/2018/Italy/Sunday/dcd1802se1378.jpg.transform/4col/image.jpg', 'News', 'Ocon is exceptional – Hamilton', '2018-09-07 02:51:41', '2018-09-07 02:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
CREATE TABLE IF NOT EXISTS `race` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_race` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_detail_race` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`id`, `country`, `name_race`, `url_detail_race`, `date_from`, `date_to`, `created_at`, `updated_at`) VALUES
(1, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Australia\\/_jcr_content\\/countryFlag.img.jpg\\/1422627081354.jpg\",\"name\":\"Australia \"}', 'FORMULA 1 2018 ROLEX AUSTRALIAN GRAND PRIX', '/en/racing/2018/Australia.html', '                             22 Mar 2018                         ', '                             25 Mar 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(2, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Bahrain\\/_jcr_content\\/countryFlag.img.jpg\\/1422627082446.jpg\",\"name\":\"Bahrain \"}', 'FORMULA 1 2018 GULF AIR BAHRAIN GRAND PRIX', '/en/racing/2018/Bahrain.html', '                             06 Apr 2018                         ', '                             08 Apr 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(3, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/China\\/_jcr_content\\/countryFlag.img.gif\\/1423083661085.gif\",\"name\":\"China \"}', 'FORMULA 1 2018 HEINEKEN CHINESE GRAND PRIX', '/en/racing/2018/China.html', '                             13 Apr 2018                         ', '                             15 Apr 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(4, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Azerbaijan\\/_jcr_content\\/countryFlag.img.jpg\\/1450105476347.jpg\",\"name\":\"Azerbaijan \"}', 'FORMULA 1 2018 AZERBAIJAN GRAND PRIX', '/en/racing/2018/Azerbaijan.html', '                             27 Apr 2018                         ', '                             29 Apr 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(5, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Spain\\/_jcr_content\\/countryFlag.img.gif\\/1423082945849.gif\",\"name\":\"Spain \"}', 'FORMULA 1 GRAN PREMIO DE ESPAÑA EMIRATES 2018', '/en/racing/2018/Spain.html', '                             11 May 2018                         ', '                             13 May 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(6, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Monaco\\/_jcr_content\\/countryFlag.img.jpg\\/1422627085995.jpg\",\"name\":\"Monaco \"}', 'FORMULA 1 GRAND PRIX DE MONACO 2018', '/en/racing/2018/Monaco.html', '                             24 May 2018                         ', '                             27 May 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(7, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Canada\\/_jcr_content\\/countryFlag.img.jpg\\/1496854304511.jpg\",\"name\":\"Canada \"}', 'FORMULA 1 GRAND PRIX HEINEKEN DU CANADA 2018', '/en/racing/2018/Canada.html', '                             08 Jun 2018                         ', '                             10 Jun 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(8, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/france\\/_jcr_content\\/countryFlag.img.gif\\/1423762801429.gif\",\"name\":\"France \"}', 'FORMULA 1 PIRELLI GRAND PRIX DE FRANCE 2018', '/en/racing/2018/france.html', '                             22 Jun 2018                         ', '                             24 Jun 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(9, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Austria\\/_jcr_content\\/countryFlag.img.gif\\/1423087232648.gif\",\"name\":\"Austria \"}', 'FORMULA 1 EYETIME GROSSER PREIS VON ÖSTERREICH 2018', '/en/racing/2018/Austria.html', '                             29 Jun 2018                         ', '                             01 Jul 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(10, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Great_Britain\\/_jcr_content\\/countryFlag.img.gif\\/1423088820610.gif\",\"name\":\"Great Britain \"}', 'FORMULA 1 2018 ROLEX BRITISH GRAND PRIX', '/en/racing/2018/Great_Britain.html', '                             05 Jul 2018                         ', '                             08 Jul 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(11, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Germany\\/_jcr_content\\/countryFlag.img.gif\\/1423087857930.gif\",\"name\":\"Germany \"}', 'FORMULA 1 EMIRATES GROSSER PREIS VON DEUTSCHLAND 2018', '/en/racing/2018/Germany.html', '                             20 Jul 2018                         ', '                             22 Jul 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(12, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Hungary\\/_jcr_content\\/countryFlag.img.gif\\/1423091561048.gif\",\"name\":\"Hungary \"}', 'FORMULA 1 ROLEX MAGYAR NAGYDÍJ 2018', '/en/racing/2018/Hungary.html', '                             27 Jul 2018                         ', '                             29 Jul 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(13, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Belgium\\/_jcr_content\\/countryFlag.img.jpg\\/1422627081530.jpg\",\"name\":\"Belgium \"}', 'FORMULA 1 2018 JOHNNIE WALKER BELGIAN GRAND PRIX', '/en/racing/2018/Belgium.html', '                             24 Aug 2018                         ', '                             26 Aug 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(14, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Italy\\/_jcr_content\\/countryFlag.img.jpg\\/1422627085189.jpg\",\"name\":\"Italy \"}', 'FORMULA 1 GRAN PREMIO HEINEKEN D&#39;ITALIA 2018', '/en/racing/2018/Italy.html', '                             31 Aug 2018                         ', '                             02 Sep 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(15, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Singapore\\/_jcr_content\\/countryFlag.img.jpg\\/1422627085505.jpg\",\"name\":\"Singapore \"}', 'FORMULA 1 2018 SINGAPORE AIRLINES SINGAPORE GRAND PRIX', '/en/racing/2018/Singapore.html', '                             14 Sep 2018                         ', '                             16 Sep 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(16, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Russia\\/_jcr_content\\/countryFlag.img.jpg\\/1422627086003.jpg\",\"name\":\"Russia \"}', 'FORMULA 1 2018 VTB RUSSIAN GRAND PRIX', '/en/racing/2018/Russia.html', '                             28 Sep 2018                         ', '                             30 Sep 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(17, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Japan\\/_jcr_content\\/countryFlag.img.jpg\\/1422627084575.jpg\",\"name\":\"Japan \"}', 'FORMULA 1 2018 JAPANESE GRAND PRIX', '/en/racing/2018/Japan.html', '                             05 Oct 2018                         ', '                             07 Oct 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(18, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/United_States\\/_jcr_content\\/countryFlag.img.jpg\\/1422627086486.jpg\",\"name\":\"United States \"}', 'FORMULA 1 PIRELLI 2018 UNITED STATES GRAND PRIX', '/en/racing/2018/United_States.html', '                             19 Oct 2018                         ', '                             21 Oct 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(19, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Mexico\\/_jcr_content\\/countryFlag.img.jpg\\/1496854473853.jpg\",\"name\":\"Mexico \"}', 'FORMULA 1 GRAN PREMIO DE MÉXICO 2018', '/en/racing/2018/Mexico.html', '                             26 Oct 2018                         ', '                             28 Oct 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(20, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Brazil\\/_jcr_content\\/countryFlag.img.jpg\\/1422627082794.jpg\",\"name\":\"Brazil \"}', 'FORMULA 1 GRANDE PRÊMIO HEINEKEN DO BRASIL 2018', '/en/racing/2018/Brazil.html', '                             09 Nov 2018                         ', '                             11 Nov 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54'),
(21, '{\"image\":\"\\/content\\/fom-website\\/en\\/racing\\/2018\\/Abu_Dhabi\\/_jcr_content\\/countryFlag.img.jpg\\/1423335527922.jpg\",\"name\":\"Abu Dhabi \"}', 'FORMULA 1 2018 ETIHAD AIRWAYS ABU DHABI GRAND PRIX', '/en/racing/2018/Abu_Dhabi.html', '                             23 Nov 2018                         ', '                             25 Nov 2018                         ', '2018-08-22 03:05:54', '2018-08-22 03:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `system_config`
--

DROP TABLE IF EXISTS `system_config`;
CREATE TABLE IF NOT EXISTS `system_config` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_config`
--

INSERT INTO `system_config` (`key`, `value`) VALUES
('free_trial_days', '14');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `url_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_country_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `podiums` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `championships` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_car_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_team` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `url_team`, `img_country_team`, `name_team`, `img_team`, `podiums`, `championships`, `img_car_team`, `color_team`, `created_at`, `updated_at`) VALUES
(1, '/en/championship/teams/Mercedes.html', '/content/fom-website/en/championship/teams/Mercedes/_jcr_content/countryFlag.img.png/1421365156900.png', 'Mercedes', '/content/fom-website/en/championship/teams/Mercedes/_jcr_content/logo.img.jpg/1486740144183.jpg', '152', '4', '/content/fom-website/en/championship/teams/Mercedes/_jcr_content/image16x9.img.320.medium.jpg/1519732606237.jpg', '#00D2BE', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(2, '/en/championship/teams/Ferrari.html', '/content/fom-website/en/championship/teams/Ferrari/_jcr_content/countryFlag.img.jpg/1422627085189.jpg', 'Ferrari', '/content/fom-website/en/championship/teams/Ferrari/_jcr_content/logo.img.jpg/1521797345005.jpg', '755', '16', '/content/fom-website/en/championship/teams/Ferrari/_jcr_content/image16x9.img.320.medium.jpg/1521018692996.jpg', '#DC0000', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(3, '/en/championship/teams/Red-Bull.html', '/content/fom-website/en/championship/teams/Red-Bull/_jcr_content/countryFlag.img.gif/1423087232648.gif', 'Red Bull Racing', '/content/fom-website/en/championship/teams/Red-Bull/_jcr_content/logo.img.jpg/1514762875081.jpg', '155', '4', '/content/fom-website/en/championship/teams/Red-Bull/_jcr_content/image16x9.img.320.medium.jpg/1519732266132.jpg', '#1E41FF', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(4, '/en/championship/teams/Renault.html', '/content/fom-website/en/championship/teams/Renault/_jcr_content/countryFlag.img.gif/1423762801429.gif', 'Renault', '/content/fom-website/en/championship/teams/Renault/_jcr_content/logo.img.jpg/1509095937427.jpg', '59', '2', '/content/fom-website/en/championship/teams/Renault/_jcr_content/image16x9.img.320.medium.jpg/1519732155789.jpg', '#FFF500', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(5, '/en/championship/teams/Haas.html', '/content/fom-website/en/championship/teams/Haas/_jcr_content/countryFlag.img.jpg/1422627086486.jpg', 'Haas', '/content/fom-website/en/championship/teams/Haas/_jcr_content/logo.img.jpg/1496929111587.jpg', 'N/A', 'N/A', '/content/fom-website/en/championship/teams/Haas/_jcr_content/image16x9.img.320.medium.jpg/1519732415092.jpg', '#828282', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(6, '/en/championship/teams/McLaren.html', '/content/fom-website/en/championship/teams/McLaren/_jcr_content/countryFlag.img.jpg/1422627084440.jpg', 'McLaren', '/content/fom-website/en/championship/teams/McLaren/_jcr_content/logo.img.jpg/1515152671364.jpg', '485', '8', '/content/fom-website/en/championship/teams/McLaren/_jcr_content/image16x9.img.320.medium.jpg/1519732479270.jpg', '#FF8700', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(7, '/en/championship/teams/Toro-Rosso.html', '/content/fom-website/en/championship/teams/Toro-Rosso/_jcr_content/countryFlag.img.jpg/1422627085189.jpg', 'Toro Rosso', '/content/fom-website/en/championship/teams/Toro-Rosso/_jcr_content/logo.img.jpg/1521797337296.jpg', '1', 'N/A', '/content/fom-website/en/championship/teams/Toro-Rosso/_jcr_content/image16x9.img.320.medium.jpg/1519732344725.jpg', '#469BFF', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(8, '/en/championship/teams/Sauber.html', '/content/fom-website/en/championship/teams/Sauber/_jcr_content/countryFlag.img.gif/1423744089017.gif', 'Sauber', '/content/fom-website/en/championship/teams/Sauber/_jcr_content/logo.img.jpg/1516986071412.jpg', '27', 'N/A', '/content/fom-website/en/championship/teams/Sauber/_jcr_content/image16x9.img.320.medium.jpg/1519732309156.jpg', '#9B0000', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(9, '/en/championship/teams/Williams.html', '/content/fom-website/en/championship/teams/Williams/_jcr_content/countryFlag.img.jpg/1422627084440.jpg', 'Williams', '/content/fom-website/en/championship/teams/Williams/_jcr_content/logo.img.jpg/1496922875259.jpg', '311', '9', '/content/fom-website/en/championship/teams/Williams/_jcr_content/image16x9.img.320.medium.jpg/1519732384172.jpg', '#FFFFFF', '2018-08-29 00:32:57', '2018-08-29 00:32:57'),
(10, '/en/championship/teams/Force-India.html', '/content/fom-website/en/championship/teams/Force-India/_jcr_content/countryFlag.img.jpg/1422627084440.jpg', 'Force India', '/content/fom-website/en/championship/teams/Force-India/_jcr_content/logo.img.jpg/1535288357341.jpg', 'N/A', 'N/A', '/content/fom-website/en/championship/teams/Force-India/_jcr_content/image16x9.img.320.medium.jpg/1535129892158.jpg', '#F596C8', '2018-08-29 00:32:57', '2018-08-29 00:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
