-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 11:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MapYourAncestors`
--

USE MapYourAncestors;

-- --------------------------------------------------------

--
-- Table structure for table `ancestor`
--

CREATE TABLE `ancestor` (
  `ancestor_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `occupation` varchar(15) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `dateofdeath` date DEFAULT NULL,
  `placeofdeath` varchar(20) DEFAULT NULL,
  `causeofdeath` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ancestor`
--

INSERT INTO `ancestor` (`ancestor_id`, `name`, `occupation`, `location`, `status`, `dateofdeath`, `placeofdeath`, `causeofdeath`) VALUES
(1, 'kloos', 'dada', 'dad', 'ada', '2021-12-02', 'daa', 'dad');

-- --------------------------------------------------------

--
-- Table structure for table `DNA`
--

CREATE TABLE `DNA` (
  `dna_id` int(11) NOT NULL,
  `height` decimal(2,1) DEFAULT NULL,
  `eye_color` varchar(10) DEFAULT NULL,
  `hair_color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `age` tinyint(3) UNSIGNED DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_of_birth` varchar(20) DEFAULT NULL,
  `nationality` varchar(25) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `first_name`, `middle_name`, `last_name`, `age`, `gender`, `date_of_birth`, `place_of_birth`, `nationality`, `email`, `password`) VALUES
(1, 'gffd', 'cfc', 'Afram', 21, 'female', '2021-12-21', 'accra', 'ghanaian', 'awura.afram@ashesi.edu.gh', '123'),
(2, 'Awura', 'nhh', 'Afram', 21, 'female', '2021-12-20', 'accra', 'ghanaian', 'edwita87@gmail.com', '123'),
(3, 'Awura', 'Tibuaah', 'Afram', 21, 'female', '2000-12-20', 'accra', 'ghanaian', 'awuraafram87@gmail.com', '123'),
(4, 'Awura', 'nhh', 'Afram', 21, 'female', '2021-12-21', 'accra', 'ghanaian', 'awura.afram@ashesi.edu.gh', '123'),
(5, 'Melissa', 'Yaa', 'Owusu', 23, 'female', '2021-12-14', 'Koforidua', 'Ghanaian', 'o@gmail.com', 'qwerty'),
(6, 'Melissa', 'Yaa', 'Owusu', 23, 'female', '2021-12-14', 'Koforidua', 'Ghanaian', 'o@gmail.com', 'qwerty'),
(7, 'nmm', 'nmm', 'mmm', 12, 'female', '2021-12-13', 'jmmm', 'kkll', 'edwita@gmail.com', 'njjj'),
(8, 'nmm', 'nmm', 'mmm', 12, 'female', '2021-12-13', 'jmmm', 'kkll', 'edwita@gmail.com', 'qwert'),
(9, 'nmm', 'nmm', 'mmm', 21, 'male', '2021-12-14', 'jmmm', 'ghanaian', 'o@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ancestor`
--
ALTER TABLE `ancestor`
  ADD PRIMARY KEY (`ancestor_id`);

--
-- Indexes for table `DNA`
--
ALTER TABLE `DNA`
  ADD PRIMARY KEY (`dna_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ancestor`
--
ALTER TABLE `ancestor`
  MODIFY `ancestor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
