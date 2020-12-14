-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 01:18 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_quetions`
--

CREATE TABLE `add_quetions` (
  `questions_id` int(11) NOT NULL,
  `question` varchar(1024) DEFAULT NULL,
  `option_1` varchar(100) DEFAULT NULL,
  `option_2` varchar(100) DEFAULT NULL,
  `option_3` varchar(100) DEFAULT NULL,
  `option_4` varchar(100) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `answer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_quetions`
--

INSERT INTO `add_quetions` (`questions_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `course_id`, `answer`) VALUES
(5, 'how many type of form do we have in angular frame work ioeghejinvnv jkvsjnkvnkvnjkvjnksvnjksvjnkdnkbbnkdbnk', 'Two', 'Three', 'one', 'Four', 2, ''),
(7, 'Biology is the study of what', 'kin', 'life', 'rice', 'world', 4, 'life'),
(8, 'cnkvvbjkvbjdvjkvjksdvkllnksdnnvkdvnjvjnd', 'fkoim', 'joshua', 'holala', 'nfgn', 2, 'joshua'),
(9, 'dash is where to inject our component ', 'low', 'constructor ', 'middle', 'con', 2, 'constructor '),
(11, '____ is a name of any person animal  place or things', 'noun', 'pronoun', 'verb', 'consonant', 6, 'noun'),
(12, 'full meaning of php', 'hypertex preoccessor', 'html', 'css', 'javascipt', 7, 'hypertex preoccessor');

-- --------------------------------------------------------

--
-- Table structure for table `course_and_tutor`
--

CREATE TABLE `course_and_tutor` (
  `course_id` int(100) NOT NULL,
  `tutorsname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_and_tutor`
--

INSERT INTO `course_and_tutor` (`course_id`, `tutorsname`, `course`) VALUES
(1, 'Atom', 'React'),
(2, 'Mr Favor', 'Angular'),
(3, 'Mr Oladejo', 'Math'),
(4, 'Mr wale', 'biology'),
(6, 'Mr Joseph', 'English'),
(7, 'Mr james', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `registration_tb`
--

CREATE TABLE `registration_tb` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tb`
--

INSERT INTO `registration_tb` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(3, 'ezekiel', 'oladuniii', 'rindex@gmail.com', 'kola1234567'),
(4, 'Oyesetan ', 'victor', 'pepper@gmail.com', 'pepepe13455'),
(5, 'joshua', 'olarewaju', 'rinde@gmail.com', 'kolamide123'),
(6, 'Olarinde', 'Joshua', 'olajoshua@gmail.com', 'olamidejosh123'),
(7, 'olarinde', 'fatimo', 'olafati@gmail.com', 'olafati1234'),
(8, 'joseph', 'olawale', 'joolawale@gmail.com', 'halawusa14567');

-- --------------------------------------------------------

--
-- Table structure for table `score_tb`
--

CREATE TABLE `score_tb` (
  `id` int(225) NOT NULL,
  `score` int(255) NOT NULL,
  `student_id` int(225) NOT NULL,
  `course_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_tb`
--

INSERT INTO `score_tb` (`id`, `score`, `student_id`, `course_name`) VALUES
(1, 2, 3, 'Angular'),
(2, 1, 3, 'biology'),
(3, 1, 3, 'biology'),
(4, 1, 3, 'biology'),
(5, 0, 3, 'biology'),
(6, 1, 3, 'Mr felix'),
(7, 2, 7, 'Angular'),
(8, 1, 3, 'php'),
(9, 1, 3, 'php'),
(10, 1, 3, 'Angular'),
(11, 0, 3, 'Angular'),
(12, 0, 3, 'Angular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_quetions`
--
ALTER TABLE `add_quetions`
  ADD PRIMARY KEY (`questions_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `course_id_2` (`course_id`),
  ADD KEY `course_id_3` (`course_id`);

--
-- Indexes for table `course_and_tutor`
--
ALTER TABLE `course_and_tutor`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `registration_tb`
--
ALTER TABLE `registration_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score_tb`
--
ALTER TABLE `score_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_quetions`
--
ALTER TABLE `add_quetions`
  MODIFY `questions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_and_tutor`
--
ALTER TABLE `course_and_tutor`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration_tb`
--
ALTER TABLE `registration_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `score_tb`
--
ALTER TABLE `score_tb`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_quetions`
--
ALTER TABLE `add_quetions`
  ADD CONSTRAINT `add_quetions_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_and_tutor` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
