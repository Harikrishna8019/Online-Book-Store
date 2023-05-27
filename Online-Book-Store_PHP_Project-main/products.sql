-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 06:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proproduct`


--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Image`, `price`) VALUES
(1, 'C Programming', 'h1.jpg', 350),
(2, 'Python Programming', 'h2.webp', 410),
(3, 'Data Structures With C', 'h3.webp', 400),
(4, 'Object Oriented Programming with C++', 'h4.jpg', 300),
(5, 'Operating System', 'osy.jpg', 300),
(6, 'Database Management System', 'h5.jpg', 360),
(7, 'Advanced Data Structures in c', 'h.jpg', 370),
(8, 'Agile Software Engineering', 'haa.jpg', 200),
(9, 'Web based Application Development with Django Python', 'h8.jpg', 360),
(10, 'Environmental Studies', 'est.jpg', 390);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



CREATE TABLE `Details` (
  
  `Name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `PinCode` varchar(20) NOT NULL,
  `PaymentMode` varchar(25) NOT NULL,
  `State` varchar(50) NOT NULL
);


INSERT INTO `Details` (`Name`, `Email`, `Address`,`PhoneNumber`, `PinCode`, `PaymentMode`, `State`) VALUES
(`rajesh`, `hari11@gmail.com`, `cbe`,`1234567898`, `641402`, `onlone`, `goa`);



create table `Personal Details`(

`Name` varchar(20) NOT NULL,
  `Email address` varchar(25) NOT NULL,
  `Full Residential Address:` varchar(50) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
   `Select Quantity` int(10) NOT NULL,
  `PinCode` varchar(20) NOT NULL,
  `Select PaymentMode` varchar(25) NOT NULL,
  ` Select State` varchar(50) NOT NULL
);


INSERT INTO `Personal Details` (`Name`, `Email address`, ` Full Residential Address`,`PhoneNumber`,`Select Quantity`,`Pincode`,`Select PaymentMode`,`Select State`) VALUES
(``, ``, ``,``, ``, ``, ``);

