-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 10:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblister`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Developer'),
(2, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(2, 2, 'Maven', 'Junior Marketer', 'Rhoncus pretium eu ullam inventore voluptatem lorem fusce, adipiscing facere, voluptatum parturient. Quidem nobis eius venenatis, aliquam aut, nulla diam atque natoque fames officia libero.', '100000', 'yangon', 'liam', 'liam@gmail.com', '2020-09-20 19:25:40'),
(3, 2, 'Maven Technology', 'Junior Developer', 'Repudiandae massa rutrum do possimus! Incidunt aute mollis repellendus justo hymenaeos quia! Amet aspernatur? Purus, nesciunt? Accusamus, wisi, luctus libero? Optio conubia integer montes maiores blanditiis dis placerat! Sit corrupti? Atque fames, iaculis', '800,000 mmk', 'Thuwanna', 'liam', 'liam@gmail.com', '2020-09-26 20:11:23'),
(4, 1, 'Maven Technology', 'Senior Developer', '                Sed laoreet veritatis modi imperdiet proin nonummy aliquip perferendis, cupiditate, repellat earum praesent cubilia. In. Et do scelerisque, faucibus nec mollis consequatur, sagittis, recusandae nonummy, varius saepe ipsa similique per, ist', '2,500,000 mmk', 'Thuwanna', 'liam', 'liam@gmail.com', '2020-09-26 20:39:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
