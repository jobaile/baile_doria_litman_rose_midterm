-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2019 at 07:16 AM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `country` varchar(75) NOT NULL,
  `subdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`sub_id`, `firstname`, `lastname`, `email`, `country`, `subdate`, `lastupdate`) VALUES
(1, 'Hello', 'New', 'tester@admin.com', 'Antigua', '2019-02-11 14:07:22', '2019-02-11 19:19:05'),
(2, 'admin', 'test', 'test@gmail.ca', 'Canada', '2019-02-11 13:29:22', '2019-02-11 19:09:54'),
(3, 'Admin', 'Tester', 'hello@test.ca', 'Canada', '2019-02-11 13:36:32', '2019-02-11 18:36:32'),
(4, 'From', 'Other', 'other@hello.ca', 'Colombia', '2019-02-11 13:45:03', '0000-00-00 00:00:00'),
(5, 'Joanna', 'Baile', 'joannabaile@gmail.com', 'CA', '2019-02-11 13:56:51', '2019-02-11 19:11:06'),
(6, 'Jojo', 'Baile', 'joannabaile@gmail.com', 'CA', '2019-02-11 13:59:01', '2019-02-11 19:11:06'),
(7, 'Time', 'Tester', 'timetest@no.com', 'Åland Islands', '0000-00-00 00:00:00', '2019-02-11 19:12:38'),
(8, 'Time', 'Two', 'tester@admin.ca', 'Antarctica', '2019-02-11 14:12:47', '2019-02-11 19:20:48'),
(9, 'Name', 'New', 'admin@tester.ca', 'Anguilla', '2019-02-11 14:20:55', '2019-02-11 19:21:28'),
(10, 'Hello', 'Vue', 'vue@test.ca', 'Albania', '2019-02-11 16:18:04', '2019-02-11 21:18:04'),
(11, 'New', 'Subscriber', 'Test@subsciber.com', 'United States Minor Outlying Islands', '2019-02-11 16:24:59', '2019-02-11 21:24:59'),
(12, 'Joanna', 'Updated', 'orangejb5@gmail.com', 'Canada', '2019-02-11 16:25:26', '2019-02-11 22:17:01'),
(13, 'Email', 'Test', 'newemail@email.com', 'Belize', '2019-02-11 17:07:32', '2019-02-11 22:07:32'),
(14, 'MailChimp', 'TEST', 'mailchimp@test.ca', 'New Caledonia', '2019-02-11 17:24:57', '2019-02-11 22:24:57'),
(15, 'Last', 'Register', 'please@done.com', 'Andorra', '2019-02-12 01:05:08', '2019-02-12 06:05:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
