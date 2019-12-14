-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 10:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attn_tbl`
--

CREATE TABLE `attn_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(11) NOT NULL,
  `Attendance` varchar(50) NOT NULL,
  `attndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attn_tbl`
--

INSERT INTO `attn_tbl` (`id`, `name`, `roll`, `Attendance`, `attndate`) VALUES
(1, 'Rabiul islam', 17131174, 'present', '2019-12-05'),
(2, 'Rasel', 17131168, 'Absence', '2019-12-05'),
(3, 'Sojib Ahmed', 17131196, 'present', '2019-12-05'),
(4, 'Rabiul islam', 17131174, 'present', '2019-12-06'),
(5, 'Rasel', 17131168, 'Absence', '2019-12-06'),
(6, 'Sojib Ahmed', 17131196, 'present', '2019-12-06'),
(7, 'Rabiul islam', 17131174, 'present', '2019-12-07'),
(8, 'Rasel', 17131168, 'Absence', '2019-12-07'),
(9, 'Sojib Ahmed', 17131196, 'present', '2019-12-07'),
(13, 'Rabiul islam', 17131174, 'Absence', '2019-12-09'),
(14, 'Rasel', 17131168, 'present', '2019-12-09'),
(15, 'Sojib Ahmed', 17131196, 'Absence', '2019-12-09'),
(16, 'Nahida', 17131170, 'Absence', '2019-12-09'),
(17, 'oishy ', 17131162, 'present', '2019-12-09'),
(18, 'Minhajul', 17131177, 'Absence', '2019-12-09'),
(19, 'Nahidul ', 17131180, 'present', '2019-12-09'),
(21, 'Rabiul islam', 17131174, 'Absence', '2019-12-11'),
(22, 'Rasel', 17131168, 'present', '2019-12-11'),
(23, 'Sojib Ahmed', 17131196, 'Absence', '2019-12-11'),
(24, 'Nahida', 17131170, 'present', '2019-12-11'),
(25, 'oishy ', 17131162, 'Absence', '2019-12-11'),
(26, 'Minhajul', 17131177, 'present', '2019-12-11'),
(27, 'Nahidul ', 17131180, 'Absence', '2019-12-11'),
(28, 'Mahir ASIF', 17131178, 'present', '2019-12-11'),
(29, 'Mahir ASIF', 17131178, 'present', '2019-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `db_tbl`
--

CREATE TABLE `db_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_tbl`
--

INSERT INTO `db_tbl` (`id`, `name`, `roll`) VALUES
(33, 'Rabiul islam', 17131174),
(34, 'Rasel', 17131168),
(35, 'Sojib Ahmed', 17131196),
(36, 'Nahida', 17131170),
(37, 'oishy ', 17131162),
(38, 'Minhajul', 17131177),
(39, 'Nahidul ', 17131180),
(41, 'Mahir ASIF', 17131178);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attn_tbl`
--
ALTER TABLE `attn_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_tbl`
--
ALTER TABLE `db_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attn_tbl`
--
ALTER TABLE `attn_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `db_tbl`
--
ALTER TABLE `db_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
