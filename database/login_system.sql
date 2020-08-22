-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 08:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `m_depart` varchar(200) NOT NULL,
  `m_mobile` varchar(200) NOT NULL,
  `m_telephone` varchar(200) NOT NULL,
  `m_email` varchar(200) NOT NULL,
  `m_password` varchar(200) NOT NULL,
  `m_address` varchar(500) NOT NULL,
  `m_status` varchar(200) NOT NULL,
  `m_image` varchar(200) NOT NULL,
  `m_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`m_id`, `m_name`, `m_depart`, `m_mobile`, `m_telephone`, `m_email`, `m_password`, `m_address`, `m_status`, `m_image`, `m_date`) VALUES
(1, 'Ahtisahm', 'HR', '03113201832', '0311320132', 'user@gmail.com', '123', 'North', 'red', './files_image/1425209421.jpg', '2020-03-03 12:03:05'),
(2, 'Noman', 'HR', '0311320132', '03113201', 'noman@gmail.com', '123', 'North', 'red', 'images/2.jpg', '2020-03-03 12:03:05'),
(3, 'Atik', 'HR', '031132018322', '03113201832', 'atik@gmail.com', '123', 'North', 'red', 'images/1.jpg', '2020-03-03 12:06:00'),
(4, 'Talha', 'HR', '03113201831', '03113201830', 'talha@gmail.com', '123', 'North', 'red', './files_image/1104141666.jpg', '2020-03-03 12:10:44'),
(10, 'Virat Kohli', 'CR DEP', '03113202222', '03111111111', 'virat@gmail.com', '123', 'India', '', 'images/22.jpg', '2020-03-18 08:10:29'),
(5, 'Saad', 'HR', '0311320135', '0311320139', 'saad@gmail.com', '123', 'North', 'green', './files_image/486532698.png', '2020-03-03 12:24:47'),
(6, 'Jahanzaib', 'HR', '0311320187', '0311230154', 'jahanziab@gmail.com', '123', 'North', 'red', 'images/22.jpg', '2020-03-03 12:27:27'),
(7, 'Arbaz', 'HR', '03112365987', '03112589631', 'arbaz@gmail.com', '123', 'North', 'red', 'images/8.jpg', '2020-03-03 12:27:27'),
(8, 'Shahzaib', 'HR', '03112154856', '03125485455', 'shahziab@gmail.com', '123', 'North', 'red', 'images/2.jpg', '2020-03-03 12:29:28'),
(9, 'Waseem', 'HR', '03113216548', '03226987452', 'waseem@gmail.com', '123', 'North', 'red', 'images/22.jpg', '2020-03-03 12:29:28'),
(11, 'Aatik', 'IT', '03002384177', '03002384177', 'aatik@gmail.com', '123', 'North Bangaal', '', 'images/atik.jpg', '2020-03-19 11:39:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_mobile` (`m_mobile`),
  ADD UNIQUE KEY `m_email` (`m_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
