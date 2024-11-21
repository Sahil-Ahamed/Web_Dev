-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 03:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `likh.le`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_data`
--

CREATE TABLE `main_data` (
  `IP_Address` varchar(20) NOT NULL,
  `MAC_Address` varchar(20) NOT NULL,
  `Time_Stamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_data`
--

INSERT INTO `main_data` (`IP_Address`, `MAC_Address`, `Time_Stamp`, `Message`) VALUES
('::1', '08-00-27-52-8E-47', '2024-11-16 10:46:20.000000', 'mogambo khush hua'),
('::1', '08-00-27-52-8E-47', '2024-11-16 10:46:30.000000', 'Haila la la Haila la la'),
('::1', '08-00-27-52-8E-47', '2024-11-16 10:46:50.000000', 'Yo buddyyy testing testing '),
('::1', '08-00-27-52-8E-47', '2024-11-16 10:48:10.000000', 'dfhg,fnhbkjfjhnjkdrhguihgherheurihguierhgerghsrtfh354r5h45srth456sr4fh68sr4fh684rh84rtth\r\nearhg654er5h46er4hrth\r\nerth654era854ea864hget\r\nhear54g4e8548dtr4gherthg\r\near5g48er4gerd4g64earg64earg\r\nearr54g4ear85g485era4g5earg43we'),
('::1', '08-00-27-52-8E-47', '2024-11-16 10:50:52.000000', 'fiii'),
('::1', '08-00-27-52-8E-47', '2024-11-16 10:51:27.000000', 'yo yo bantai rapper'),
('::1', '08-00-27-52-8E-47', '2024-11-16 10:51:55.000000', 'aii ba na na tasty'),
('::1', '08-00-27-52-8E-47', '2024-11-16 11:08:05.000000', 'hello, this one is just for testing'),
('::1', '08-00-27-52-8E-47', '2024-11-16 13:04:51.000000', 'dfgdfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfgdfgdfgdfgdfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\nfdg\r\ndfg\r\ndfg\r\ndfdgdfgdf\r\ngdf\r\ngfd\r\ngdfg\r\nfdg\r\n'),
('::1', '08-00-27-52-8E-47', '2024-11-16 13:05:07.000000', 'dfgdfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfgdfgdfgdfgdfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\nfdg\r\ndfg\r\ndfg\r\ndfdgdfgdf\r\ngdf\r\ngfd\r\ngdfg\r\nfdg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Email_Address` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Email_Address`, `Password`) VALUES
('testmail@gmail.com', 'testmail'),
('yotesting@gmail.com', 'yotesting'),
('adamas@gmail.com', 'adamas'),
('vxvxcvxcvxc@gkg', 'sdfw45345'),
('dsfs@gmail.com', 'ds5'),
('sahil@hotmail.com', 'sahil'),
('testmail@gmail.com', 'testmail'),
('testmail@gmail.com', 'testmail');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
