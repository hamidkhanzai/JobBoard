-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 08:51 PM
-- Server version: 5.7.16-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modiefied` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `first_name`, `last_name`, `email`, `token`, `created`, `modiefied`) VALUES
(1, 'jobh', 'smith', 'hamid_khanzai@yahoo.com', 'df1d4b96d8976ff5986393e8767f5b', NULL, NULL),
(2, 'jobh', 'smith', 'hamid_khanzai@yahoo.com', '97da629b098b75c294dffdc3e46390', NULL, NULL),
(3, 'sabina', 'lil', 'hamid_khanzai@yahoo.com', '86e8d03fe992d1b0e19656875ee557', NULL, NULL),
(4, 'tofan', 'kargar', 'hamid_khanzai@yahoo.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `summery` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `title`, `type`, `summery`, `created`, `modified`) VALUES
(1, 2, 'junior Ruby On Rails developer', 1, 'Die Sparkassen Rating und Risikosysteme GmbH (SR) ist ein innovatives Unternehmen mit Sitz in der Mitte Berlins. Wir entwickeln und pflegen Modelle, Verfahren und Software-Tools für die Bereiche Scoring, Rating und Risikomanagement. Unsere Experten bündeln dieses Wissen als zentrale Ansprechpartner für alle Sparkassen und Landesbanken.\r\n\r\nUnser Team Datenmanagement stellt die Datenbasis für die Pflege und Weiterentwicklung der Verfahren in der Sparkassen Rating und Risikosysteme GmbH sicher. Zur Unterstützung unseres Teams suchen wir einen Praktikanten (m/w). ', NULL, NULL),
(2, 1, 'junior C# developer ', 1, 'Die Sparkassen Rating und Risikosysteme GmbH (SR) ist ein innovatives Unternehmen mit Sitz in der Mitte Berlins. Wir entwickeln und pflegen Modelle, Verfahren und Software-Tools für die Bereiche Scoring, Rating und Risikomanagement. Unsere Experten bündeln dieses Wissen als zentrale Ansprechpartner für alle Sparkassen und Landesbanken.\r\n\r\nUnser Team Datenmanagement stellt die Datenbasis für die Pflege und Weiterentwicklung der Verfahren in der Sparkassen Rating und Risikosysteme GmbH sicher. Zur Unterstützung unseres Teams suchen wir einen Praktikanten (m/w). ', NULL, NULL),
(3, 2, 'junior java developer ', 1, 'Die Sparkassen Rating und Risikosysteme GmbH (SR) ist ein innovatives Unternehmen mit Sitz in der Mitte Berlins. Wir entwickeln und pflegen Modelle, Verfahren und Software-Tools für die Bereiche Scoring, Rating und Risikomanagement. Unsere Experten bündeln dieses Wissen als zentrale Ansprechpartner für alle Sparkassen und Landesbanken.\r\n\r\nUnser Team Datenmanagement stellt die Datenbasis für die Pflege und Weiterentwicklung der Verfahren in der Sparkassen Rating und Risikosysteme GmbH sicher. Zur Unterstützung unseres Teams suchen wir einen Praktikanten (m/w). ', NULL, NULL),
(4, 3, 'junior cakephp developer ', 1, 'Die Sparkassen Rating und Risikosysteme GmbH (SR) ist ein innovatives Unternehmen mit Sitz in der Mitte Berlins. Wir entwickeln und pflegen Modelle, Verfahren und Software-Tools für die Bereiche Scoring, Rating und Risikomanagement. Unsere Experten bündeln dieses Wissen als zentrale Ansprechpartner für alle Sparkassen und Landesbanken.\r\n\r\nUnser Team Datenmanagement stellt die Datenbasis für die Pflege und Weiterentwicklung der Verfahren in der Sparkassen Rating und Risikosysteme GmbH sicher. Zur Unterstützung unseres Teams suchen wir einen Praktikanten (m/w). ', NULL, NULL),
(5, 1, 'HTML 5 developer', 1, 'this si', NULL, NULL),
(6, 1, 'HTML5 is lovely', 2, 'dsffffffffffffffffff', '2017-01-19 21:19:17', '2017-01-19 21:19:17'),
(7, 1, 'ODBC', 1, 'This is advertis', '2017-01-19 21:20:25', '2017-01-19 21:20:25'),
(8, 1, 'fff', 1, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', NULL, NULL),
(9, 1, 'vxcv', 1, 'sdfffffffffffffffff', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
