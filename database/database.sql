-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 03:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlymau`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` int(11) DEFAULT NULL,
  `bd_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bd_sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bd_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bd_bgroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bd_reg_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bd_phno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
(1, 'Vũ Thị Thủy', 'nữ', '18', 'O', '16/10/2021', '0523218570'),
(2, 'Vũ Đình Đam', 'nam', '25', 'A', '2/9/2021', '0333503821'),
(2, 'Vũ Đình Đam', 'nam', '25', 'A', '2/9/2021', '0333503821');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
