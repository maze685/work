-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 02:40 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `image`, `link`) VALUES
(1, 'Tourism and Hotels', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis totam iusto officiis, necessitatibus\r\n            assumenda sint quis odit facere odio architecto numquam quo, aperiam perferendis doloribus debitis atque.\r\n            Eum, sit earum.', 'one.jpeg', 'https://www.youtube.com/watch?v=Niql-Mo2oAY&list=PLCnpz0pxHFUwW6jF_RcyE3AoKMHEE-D5D'),
(2, 'Management Information Systems', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nam illum veritatis incidunt fuga\r\n            debitis amet commodi inventore voluptatem, repudiandae dicta maiores, molestiae ullam, dolores harum\r\n            deleniti eaque libero consequuntur?', 'two.jpeg', 'https://www.youtube.com/playlist?list=PLDoPjvoNmBAzH72MTPuAAaYfReraNlQgM'),
(3, 'literary studies', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quia illum. Odio animi veniam quidem\r\n            consequatur aliquid aliquam quaerat, dicta ea necessitatibus eligendi maiores sit unde nulla ipsum vel\r\n            error?', 'three.jpeg', 'https://www.youtube.com/watch?v=g9ERJuCj1e4'),
(4, 'Engineering', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos autem minus tenetur mollitia ducimus velit ut\r\n            perferendis aperiam porro nesciunt, quis repudiandae consectetur! Ipsam nesciunt pariatur perspiciatis quod\r\n            harum quibusdam.', 'four.jpeg', 'https://www.youtube.com/watch?v=zTJGBVQ-rMA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(90) NOT NULL,
  `surname` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `gender` enum('male','female','custom') DEFAULT NULL,
  `date_of_birth` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `email`, `password`, `gender`, `date_of_birth`) VALUES
(8, 'test', 'account', 'test@google.com', '25f9e794323b453885f5181f1b624d0b', 'male', '1-January-2022');

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE `user_courses` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `user_id`, `course_id`) VALUES
(1, 8, 1),
(2, 8, 2),
(3, 8, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_courses`
--
ALTER TABLE `user_courses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD CONSTRAINT `user_courses_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `user_courses_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
