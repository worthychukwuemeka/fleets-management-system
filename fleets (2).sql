-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 12:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fleets`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_num` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `vehicle` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `name`, `email`, `phone_num`, `address`, `vehicle`, `status`, `role`) VALUES
(1111, 'Ayotunde Babalola', 'ayotunde.babalola@cu.edu.ng', '07011772239', 'Ramoth Estate, Canaanland Ota', 'Toyota Corolla', 0, 'Fleet Manager'),
(2222, 'Somto Davies', 'somto.davies@cu.edu.ng', '08023456782', 'Staff Quarters, Covenant University Ota', 'Toyota Camry', 1, 'Fleet Manager'),
(3333, 'Peter Hassan', 'peter.hassan@cu.edu.ng', '09124537628', 'Yaba, Lagos', 'Nissan Quest', 0, 'Fleet Manager'),
(4444, 'John Doe', 'john.doe@cu.edu.ng', '09122337562', 'Canaanland-Ota', 'Toyota Corolla', 1, 'Driver'),
(5555, 'Abraham Daniel', 'abraham.daniel@cu.edu.ng', '07034678192', 'Faith Academy Staff Qtrs, Canaanland-Ota', 'Toyota Camry', 1, 'Driver');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_no` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `email`, `phone_no`) VALUES
(1, 'Yusuf Musa', 'yusuf.musa@cu.edu.ng', '07023452617'),
(2, 'David Babatunde', 'david.babatunde@cu.edu.ng', '09124357835'),
(3, 'John Mark', 'john.mark@cu.edu.ng', '08033446723'),
(4, 'Kelvin Sadiq', 'kelvin.sadiq@cu.edu.ng', '09122367892'),
(5, 'Mary Joseph', 'mary.joseph@cu.edu.ng', '07023678991');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `maintenance_id` int(11) NOT NULL,
  `type` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `vehicle_id` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `trip_id` int(11) NOT NULL,
  `type` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `type`, `description`, `status`, `date`) VALUES
(1011, 'Within CU', 'Going from Esther Hall to CST', 0, '2023-06-15 15:03:46'),
(1012, 'Outside CU', 'Going from CU to Faith Tabernacle', 1, '2023-06-23 12:20:34'),
(1013, 'Outside CU', 'Going from Dorcas Hall to CUCRID', 1, '2023-06-18 09:03:46'),
(1014, 'Outside CU', 'Going from CU to Faith Tabernacle', 0, '2023-06-15 00:00:00'),
(1015, 'Outside CU', 'Going from CU to Faith Tabernacle', 0, '2023-06-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `make` varchar(500) NOT NULL,
  `plate_no` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `driver` varchar(500) NOT NULL,
  `estimated_mileage` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `name`, `make`, `plate_no`, `type`, `driver`, `estimated_mileage`, `status`) VALUES
(1111, 'Toyota Corolla', 'Toyota', 'LSD675RV', 'Car', 'Ayotunde Babalola', '120KM', 1),
(2222, 'Toyota Camry', 'Toyota', '123CU5RV', 'Car', 'Somto Davies', '110KM', 1),
(3333, 'Nissan Quest', 'Nissan', 'GHK236LI', 'Van\r\n', 'Peter Hassan', '80KM', 0),
(4444, 'Toyota Corolla', 'Toyota', 'KUF128SG', 'Car', 'John Doe', '80KM', 0),
(5555, 'Toyota Corolla', 'Toyota', 'MUK249DC', 'Car', 'Abraham Daniel', '60KM', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`maintenance_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5556;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `maintenance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5556;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
