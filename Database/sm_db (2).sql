-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 05:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id_material` int(11) NOT NULL,
  `material_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `quality` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `roomID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id_material`, `material_name`, `quantity`, `quality`, `date`, `roomID`) VALUES
(1, 'pen', 40, 'medium', '2019-12-12', 1),
(5, 'Pens', 12, 'Heigh Quanlity', '2020-01-10', 9),
(6, 'Computers', 5, 'Medium Quanlity', '2020-01-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id_room` int(11) NOT NULL,
  `room_name` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id_room`, `room_name`, `floor`, `description`) VALUES
(1, 'B05', 'ground floor', 'contain computers'),
(9, 'A20', 'ground floor', 'Contain something'),
(14, 'B24', 'second floor', 'Store paper');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', '12345', 1),
(2, 'normal@gmail.com', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_material`
--

CREATE TABLE `user_has_material` (
  `user_id` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_has_material`
--

INSERT INTO `user_has_material` (`user_id`, `material_id`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `roomID` (`roomID`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_has_material`
--
ALTER TABLE `user_has_material`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `material_id` (`material_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD CONSTRAINT `id_room` FOREIGN KEY (`roomID`) REFERENCES `tbl_room` (`id_room`) ON DELETE CASCADE,
  ADD CONSTRAINT `roomID` FOREIGN KEY (`roomID`) REFERENCES `tbl_room` (`id_room`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_id` FOREIGN KEY (`roomID`) REFERENCES `tbl_room` (`id_room`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_material_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `tbl_room` (`id_room`);

--
-- Constraints for table `user_has_material`
--
ALTER TABLE `user_has_material`
  ADD CONSTRAINT `material_id` FOREIGN KEY (`material_id`) REFERENCES `tbl_material` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_has_material_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `user_has_material_ibfk_2` FOREIGN KEY (`material_id`) REFERENCES `tbl_material` (`id_material`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
