-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2023 at 10:22 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `inform`
--

CREATE TABLE `inform` (
  `id` int(11) NOT NULL,
  `sername` text NOT NULL,
  `name` text NOT NULL,
  `classnum` text NOT NULL,
  `room` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `history` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inform`
--

INSERT INTO `inform` (`id`, `sername`, `name`, `classnum`, `room`, `program`, `history`) VALUES
(1, 'Otto', 'Mark', '2', 6, 2020, 500),
(2, 'Jacob', 'Thornton', '3', 9, 2019, 550),
(3, 'Larry', 'Bird', '1', 4, 2021, 600),
(4, 'Lovin', 'Alex', '2', 18, 2020, 250);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` text NOT NULL,
  `message` text NOT NULL,
  `d` text NOT NULL,
  `tosend` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `d`, `tosend`) VALUES
('1001', 'Hello', '2022-11-27 17:42:40', '1002'),
('1002', 'Hi', '2022-11-27 17:42:48', '1001'),
('2', '', '2022-12-03 15:28:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `textotziv` text NOT NULL,
  `username` text NOT NULL,
  `fotourl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `textotziv`, `username`, `fotourl`) VALUES
(1, 'Дуже зручний веб-сайт для спілкування', '@svitlana_m', 'src=\"img/p2.jpg\"'),
(2, 'Здорово', '@alex_v', 'src=\"img/p1.jpg\"'),
(3, 'Я обрала цей сайт для контролем за дитиною', '@kira2012', 'src=\"img/p3.jpg\"'),
(4, 'Я так радий', '@vlad01', 'src=\"img/p4.jpg\"'),
(5, 'Very well!!!', 'a89307', 'src=\"img/p3.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `id` int(11) NOT NULL,
  `sername` text NOT NULL,
  `name` text NOT NULL,
  `classname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`id`, `sername`, `name`, `classname`) VALUES
(1, 'Otto', 'Mark', '6A'),
(2, 'Jacob', 'Thornton', '7B'),
(3, 'Larry', 'Bird', '5C');

-- --------------------------------------------------------

--
-- Table structure for table `subject_class`
--

CREATE TABLE `subject_class` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `classname` text NOT NULL,
  `teachername` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_class`
--

INSERT INTO `subject_class` (`id`, `subject`, `classname`, `teachername`) VALUES
(1, 'Math', '5C', 'Viento'),
(2, 'Programming', '7B', 'Rondo');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE `teacher_class` (
  `id` int(11) NOT NULL,
  `sername` text NOT NULL,
  `subject` text NOT NULL,
  `classname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_class`
--

INSERT INTO `teacher_class` (`id`, `sername`, `subject`, `classname`) VALUES
(1, 'Viento', 'Math', '5C'),
(2, 'Rondo', 'Programming', '7B'),
(3, 'Rondo', 'Programming', '6A'),
(4, 'Misterio', 'History', '5C');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `sername` text NOT NULL,
  `name` text NOT NULL,
  `fotourl` text NOT NULL,
  `adress` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `sername`, `name`, `fotourl`, `adress`, `phone`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'admin', 'src=\"uploades/95bb3c52-3519-41a0-9607-cd11da1db499.jfif\"', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `usersactive`
--

CREATE TABLE `usersactive` (
  `id` int(11) NOT NULL,
  `d` text NOT NULL,
  `ready` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usersactive`
--

INSERT INTO `usersactive` (`id`, `d`, `ready`) VALUES
(2, '1674296537', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
