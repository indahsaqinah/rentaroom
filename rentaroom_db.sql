-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 08:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentaroom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--
-- Creation: Dec 27, 2021 at 01:27 PM
-- Last update: Dec 27, 2021 at 05:06 PM
--

CREATE TABLE `tbl_room` (
  `id` int(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double(8,2) NOT NULL,
  `deposit` double(8,2) NOT NULL,
  `state` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `latitude` double(9,5) NOT NULL,
  `longitude` double(9,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id`, `contact`, `title`, `description`, `price`, `deposit`, `state`, `area`, `date_created`, `latitude`, `longitude`) VALUES
(1, '0195552235', 'Middle Room at Kiara Residence 2', 'Prefer move-in immediately, 6 month, 12 month and above, Malaysian, student, employed', 600.00, 300.00, 'Kuala Lumpur', 'Mount Kiara', '2021-12-27 21:36:59.785744', 3.17030, 101.68269),
(2, '0123456789', 'Room at Cyberia Smarthome', 'Prefer student, Malaysian, single', 380.00, 250.00, 'Selangor', 'Cyberjaya', '2021-12-27 21:38:25.499810', 2.92131, 101.65593),
(3, '0182786887', 'Small Room at BU2, Bandar Utama', 'Prefer move-in immediately, 6 month and above, Malay, Chinese, student', 380.00, 280.00, 'Selangor', 'Bandar Utama', '2021-12-27 21:43:28.259109', 5.86350, 118.05638),
(4, '0102202633', 'Luxury Studio at Sunway Resort Suites', 'Prefer move-in immediately, 6 month and above, student, employed, Malaysian', 3600.00, 1800.00, 'Selangor', 'Bandar Sunway', '2021-12-27 21:47:49.465168', 3.06837, 101.60248),
(5, '0123766888', 'Suite at KL Gateway', 'Prefer move-in immediately, Malaysian, employed, student, single, couple', 3488.00, 2000.00, 'Kuala Lumpur', 'Bangsar South', '2021-12-27 21:53:23.837435', 3.10972, 101.66540),
(6, '0199568094', 'Middle Room at SS15', 'Prefer 6 months, 12 months and above, employed, unemployed, student', 800.00, 400.00, 'Selangor', 'Subang Jaya', '2021-12-27 22:01:20.963515', 3.07360, 101.58740),
(7, '0126946700', 'Studio Room at Puchong', 'Prefer single, married, student, Malaysian', 900.00, 500.00, 'Selangor', 'Puchong', '2021-12-28 00:53:57.526495', 3.13973, 101.75760),
(9, '018796541', 'Master Bedroom at Puchong', 'Prefer married, employed, Malaysian', 800.00, 400.00, 'Selangor', 'Puchong', '2021-12-28 01:06:11.763877', 3.14530, 101.63250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
