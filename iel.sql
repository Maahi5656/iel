-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 01:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `description`, `image`) VALUES
(1, 'dasdsafdsafds', 'uploads/6045d49c5f0ff1.45888300.png');

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

CREATE TABLE `concern` (
  `ID` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ShortDescription` varchar(255) NOT NULL,
  `LongDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`ID`, `name`, `image`, `ShortDescription`, `LongDescription`) VALUES
(1, 'Food Chain', 'uploads/6045ec32b6c947.56976780.jpg', 'Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Modi, illo, obcaecati. Ex sed officiis doloremque inventore reiciendis nostrum, totam nobis temporibus ipsam iusto earum dignissimos, voluptas voluptatibus distinctio quaerat fugiat.'),
(2, 'Medical Service', 'uploads/6045fbf62e70a1.39408024.png', 'Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Modi, illo, obcaecati. Ex sed officiis doloremque inventore reiciendis nostrum, totam nobis temporibus ipsam iusto earum dignissimos, voluptas voluptatibus distinctio quaerat fugiat.'),
(3, 'Tour, Travel and Accomodation Service', 'uploads/tour-2.jpg', 'Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, incidunt, possimus. Saepe libero et corrupti, quos, repudiandae vero laudantium quam nisi nihil labore modi voluptas tempore cumque eveniet consequatur voluptate.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `concern`
--
ALTER TABLE `concern`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `concern`
--
ALTER TABLE `concern`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
