-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 10:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_no`, `is_correct`, `text`) VALUES
(0, 1, 0, 'a'),
(0, 2, 0, 'a'),
(0, 3, 0, 'b'),
(0, 4, 0, 'g'),
(0, 5, 1, 'aaa'),
(0, 1, 0, 'a'),
(0, 2, 0, 'a'),
(0, 3, 0, 'b'),
(0, 4, 0, 'g'),
(0, 5, 1, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `choies`
--

CREATE TABLE `choies` (
  `id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `is_correct` int(11) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choies`
--

INSERT INTO `choies` (`id`, `question_no`, `is_correct`, `text`) VALUES
(6, 1, 0, 'à¶’à¶š à·™à¶œ à¶´à¶° (Flat File Systems)'),
(7, 1, 0, 'à¶»à·à·€ à¶†à¶šà·˜à¶º (Hierarchical Model) '),
(8, 1, 0, 'à¶¢à·à¶½ à¶†à¶šà·˜à¶º (Network Model) à·ƒà¶¶à¶°à¶š à¶†à¶šà·˜à¶º (Relational Model)'),
(9, 1, 0, 'à·€à·ƒà·Š à·ƒà¶¶à¶°à¶š à¶†à¶šà·˜à¶º (Object Relational Model)'),
(10, 1, 1, 'à¶´à¶œà¶«à¶šà¶º à¶‘à¶š à¶·à·à·€à·’à¶­ à·™à·€à¶± à¶•à¶±à·‘à¶¸ à·™à¶¯à¶ºà¶šà·Š'),
(16, 2, 1, 'à¶’à¶š à·™à¶œ à¶´à¶° (Flat File Systems)'),
(17, 2, 0, 'à¶»à·à·€ à¶†à¶šà·˜à¶º (Hierarchical Model) '),
(18, 2, 0, 'à¶¢à·à¶½ à¶†à¶šà·˜à¶º (Network Model) à·ƒà¶¶à¶°à¶š à¶†à¶šà·˜à¶º (Relational Model)'),
(19, 2, 0, 'à·€à·ƒà·Š à·ƒà¶¶à¶°à¶š à¶†à¶šà·˜à¶º (Object Relational Model)'),
(20, 2, 0, 'à¶´à¶œà¶«à¶šà¶º à¶‘à¶š à¶·à·à·€à·’à¶­ à·™à·€à¶± à¶•à¶±à·‘à¶¸ à·™à¶¯à¶ºà¶šà·Š'),
(21, 3, 1, '1'),
(22, 3, 0, '1'),
(23, 3, 0, '1'),
(24, 3, 0, '1'),
(25, 3, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE `id` (
  `username` varchar(510) NOT NULL,
  `pass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`username`, `pass`) VALUES
('a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_no` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_no`, `text`) VALUES
(1, 'à¶¯à¶­à·Šà¶­ à¶ºà¶±à·” ?'),
(2, 'à¶´à¶»à·’à¶œà¶±à¶š à·™à¶œà·à¶«à·” à¶…à·à¶šà·˜à¶­à·’à¶ºà¶šà·’'),
(3, 'my name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choies`
--
ALTER TABLE `choies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id`
--
ALTER TABLE `id`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choies`
--
ALTER TABLE `choies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
