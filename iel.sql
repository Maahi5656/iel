-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:29 PM
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
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `description`, `image`, `image2`, `image3`) VALUES
(1, 'Integer placerat arcu quis sem aliquet tempor. Maecenas in dictum arcu. Curabitur cursus est libero, id accumsan sapien ullamcorper quis. Pellentesque imperdiet mi quis volutpat facilisis. In facilisis sit amet lacus ut convallis. Aenean congue porta dolo', 'uploads/img-06.jpg', 'uploads/gal-5.jpeg', 'uploads/img-04.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `missionvision`
--

CREATE TABLE `missionvision` (
  `ID` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missionvision`
--

INSERT INTO `missionvision` (`ID`, `image`, `mission`, `vision`) VALUES
(1, 'uploads/18839582_1686350871661246_3450757903297976071_o.jpg', 'The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy text using the starting sequence \"Lorem ipsum\". Fortunately, the phrase \'Lorem Ipsum\' is now recognized by electronic pre-press systems and, when found, an alarm can be raised.\r\n\r\n1) Which toil and pain can procure great pleasure.\r\n2) Any right to find man who annoying.\r\n3) Consequences, avoids a pain that produces.\r\n\r\nloredjldjld depodopkd pdpdpdwdpdpedkpd pekpedpepwewm d[wdo[deoed[wdo[wdodd', 'The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy text using the starting sequence \"Lorem ipsum\". Fortunately, the phrase \'Lorem Ipsum\' is now recognized by electronic pre-press systems and, when found, an alarm can be raised.\r\n\r\nWhich toil and pain can procure great pleasure.\r\nAny right to find man who annoying.\r\nConsequences, avoids a pain that produces.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ID` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `officeHours` varchar(255) NOT NULL,
  `officeClosed` varchar(255) NOT NULL,
  `companyLogo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`ID`, `username`, `password`, `email`, `contact`, `website`, `address`, `officeHours`, `officeClosed`, `companyLogo`) VALUES
(1, 'maahi7821', '', 'ajwadmaahi56@gmail.com', '01981088606', 'http://iel.com.bd/', 'BNS Center, Uttara, Dhaka, Bangladesh', 'Sat - Thu 9.00 - 19.00 ', 'Friday Closed', '');

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
-- Indexes for table `missionvision`
--
ALTER TABLE `missionvision`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
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

--
-- AUTO_INCREMENT for table `missionvision`
--
ALTER TABLE `missionvision`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
