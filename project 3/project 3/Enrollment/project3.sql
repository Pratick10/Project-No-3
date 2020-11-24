-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 03:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `password`, `role`) VALUES
(1, '12345678', '12345678', 'admin'),
(3, '1234567', '1234567', 'student'),
(5, '123456789', '123456789', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `requested`
--

CREATE TABLE `requested` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requested`
--

INSERT INTO `requested` (`id`, `session_id`, `student_id`, `subject_id`, `type`) VALUES
(1, 4, 3, 1, 2),
(2, 4, 3, 3, 3),
(3, 4, 3, 1, 2),
(4, 4, 3, 3, 3),
(5, 4, 3, 1, 2),
(6, 4, 3, 3, 3),
(7, 4, 3, 1, 1),
(8, 4, 3, 4, 2),
(9, 4, 1, 1, 1),
(10, 4, 1, 3, 2),
(11, 5, 1, 1, 2),
(12, 5, 1, 3, 3),
(13, 4, 1, 1, 2),
(14, 4, 1, 3, 1),
(15, 4, 1, 4, 3),
(16, 4, 1, 1, 2),
(17, 4, 1, 3, 3),
(18, 4, 1, 4, 1),
(19, 5, 1, 1, 2),
(20, 5, 1, 3, 3),
(21, 5, 1, 4, 1),
(22, 3, 5, 1, 1),
(23, 5, 3, 0, 1),
(24, 5, 3, 0, 1),
(25, 4, 3, 1, 0),
(26, 4, 3, 3, 0),
(27, 5, 3, 1, 2),
(28, 5, 3, 3, 3),
(29, 4, 8, 1, 1),
(30, 4, 8, 3, 1),
(31, 4, 8, 1, 1),
(32, 4, 8, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `requestedcours`
--

CREATE TABLE `requestedcours` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestedcours`
--

INSERT INTO `requestedcours` (`id`, `session_id`, `student_id`, `subject_id`) VALUES
(1, 3, 0, 1),
(2, 3, 0, 3),
(3, 3, 3, 1),
(4, 3, 3, 3),
(5, 5, 3, 1),
(6, 5, 3, 3),
(7, 5, 3, 1),
(8, 5, 3, 3),
(9, 4, 3, 1),
(10, 4, 3, 1),
(11, 4, 3, 1),
(12, 4, 3, 1),
(13, 3, 3, 1),
(14, 3, 3, 3),
(15, 4, 3, 1),
(16, 4, 3, 3),
(17, 4, 3, 3),
(18, 3, 3, 1),
(19, 3, 3, 3),
(20, 4, 3, 1),
(21, 4, 3, 3),
(22, 4, 3, 1),
(23, 4, 3, 3),
(24, 4, 3, 3),
(25, 3, 3, 1),
(146, 4, 3, 1),
(147, 4, 3, 3),
(148, 4, 3, 1),
(149, 4, 3, 3),
(150, 4, 3, 1),
(151, 4, 3, 3),
(152, 4, 3, 1),
(153, 4, 3, 3),
(154, 4, 3, 1),
(155, 4, 3, 3),
(156, 4, 3, 1),
(157, 4, 3, 3),
(158, 4, 3, 1),
(159, 4, 3, 3),
(160, 4, 3, 0),
(161, 4, 3, 0),
(162, 4, 3, 0),
(163, 4, 3, 0),
(164, 4, 3, 0),
(165, 4, 3, 0),
(166, 4, 3, 0),
(167, 4, 3, 0),
(168, 4, 3, 0),
(169, 4, 3, 0),
(170, 4, 3, 0),
(171, 4, 3, 0),
(172, 4, 3, 0),
(173, 4, 3, 0),
(174, 4, 3, 0),
(175, 4, 3, 0),
(176, 4, 3, 0),
(177, 4, 3, 0),
(178, 4, 3, 0),
(179, 4, 3, 0),
(180, 4, 3, 0),
(181, 4, 3, 0),
(182, 4, 3, 0),
(183, 4, 3, 0),
(184, 4, 3, 0),
(185, 4, 3, 0),
(186, 4, 3, 0),
(187, 4, 3, 1),
(188, 4, 3, 3),
(189, 4, 3, 1),
(190, 4, 3, 3),
(191, 4, 3, 1),
(192, 4, 3, 3),
(193, 4, 3, 1),
(194, 4, 3, 3),
(195, 4, 3, 0),
(196, 4, 3, 0),
(197, 5, 3, 0),
(198, 5, 3, 0),
(199, 4, 3, 0),
(200, 4, 3, 0),
(201, 4, 3, 1),
(202, 4, 3, 3),
(203, 4, 3, 1),
(204, 4, 3, 3),
(205, 4, 3, 1),
(206, 4, 3, 3),
(207, 4, 3, 1),
(208, 4, 3, 3),
(209, 4, 3, 1),
(210, 4, 3, 3),
(211, 4, 3, 1),
(212, 4, 3, 3),
(213, 4, 3, 1),
(214, 4, 3, 3),
(215, 4, 3, 1),
(216, 4, 3, 3),
(217, 4, 3, 1),
(218, 4, 3, 3),
(219, 4, 3, 1),
(220, 4, 3, 3),
(221, 4, 3, 1),
(222, 4, 3, 3),
(223, 4, 3, 1),
(224, 4, 3, 3),
(225, 4, 3, 1),
(226, 4, 3, 3),
(227, 3, 3, 0),
(228, 4, 3, 1),
(229, 4, 3, 3),
(230, 3, 3, 1),
(231, 3, 3, 3),
(232, 4, 3, 1),
(233, 4, 3, 3),
(234, 4, 3, 1),
(235, 4, 3, 3),
(236, 4, 3, 1),
(237, 4, 3, 3),
(238, 4, 3, 1),
(239, 4, 3, 3),
(240, 4, 3, 0),
(241, 4, 3, 0),
(242, 4, 3, 1),
(243, 4, 3, 3),
(244, 4, 3, 1),
(245, 4, 3, 3),
(246, 4, 3, 1),
(247, 4, 3, 3),
(248, 4, 3, 1),
(249, 4, 3, 3),
(250, 4, 3, 1),
(251, 4, 3, 3),
(252, 4, 3, 1),
(253, 4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`) VALUES
(4, 'C5A'),
(5, 'C5C');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session`) VALUES
(3, 'Spring2020'),
(4, 'Spring2021'),
(5, 'Spring2021');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `student_id`, `password`, `role`) VALUES
(5, 'joya', 'joyaacharjee090@gmail.com', 1234, 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(6, 'Pratick', 'pratick@gmail.com', 1477, '25d55ad283aa400af464c76d713c07ad', 'admin'),
(7, 'joya', 'joya@gmail.com', 1466, 'fcea920f7412b5da7be0cf42b8c93759', 'student'),
(8, 'samsu', 'samsu@gmail.com', 1454, 'fcea920f7412b5da7be0cf42b8c93759', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_code`, `sub_name`, `section_id`) VALUES
(1, 'CE-301', 'Communication Engineering', 5),
(3, 'CE-302', 'Microprocessors and Microcontroler', 4),
(4, 'CSE-303', 'Organizational Behaviour', 2);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type_name`) VALUES
(1, 'Regular'),
(2, 'Retake'),
(3, 'Recourse');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studentid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requested`
--
ALTER TABLE `requested`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestedcours`
--
ALTER TABLE `requestedcours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requested`
--
ALTER TABLE `requested`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `requestedcours`
--
ALTER TABLE `requestedcours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
