-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2026 at 06:27 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `strj_unit2_ex1_contacts`
--

DROP TABLE IF EXISTS `strj_unit2_ex1_contacts`;
CREATE TABLE IF NOT EXISTS `strj_unit2_ex1_contacts` (
  `contact_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_year` smallint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contact_id`),
  UNIQUE KEY `uq_email` (`email`),
  KEY `idx_last_first` (`last_name`,`first_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strj_unit2_ex1_contacts`
--

INSERT INTO `strj_unit2_ex1_contacts` (`contact_id`, `first_name`, `last_name`, `email`, `phone`, `major`, `grad_year`, `created_at`) VALUES
(1, 'Sara', 'Johnson', 'sara.johnson@example.com', '312-555-0141', 'Computer Science', 2026, '2026-03-01 17:49:42'),
(2, 'Tyler', 'Reed', 'tyler.reed@example.com', '773-555-0188', 'Information Systems', 2025, '2026-03-01 17:49:42'),
(3, 'Riya', 'Patel', 'riya.patel@example.com', NULL, 'Cybersecurity', 2027, '2026-03-01 17:49:42'),
(4, 'Jamal', 'Brooks', 'jamal.brooks@example.com', '630-555-0120', 'Software Dev', 2026, '2026-03-01 17:49:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
