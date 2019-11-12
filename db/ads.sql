-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 12:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `web` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `currency_type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category`, `sub_category`, `title`, `web`, `discription`, `country`, `state`, `city`, `address`, `zipcode`, `price`, `currency_type`, `name`, `email`, `file`, `type`, `created_at`, `updated_at`) VALUES
(1, 'car', '0', 'TEST', '', 'qwerty', '', '', '', 'Lahore Cant', '', '12345', '0', 'shahbaz', 'shahbaziqbal150@gmail.com', '', 'free', '2019-10-20 11:24:26', '2019-10-20 11:24:26'),
(2, 'car', '0', 'cat', '', 'cat is busy', '', '', '', 'Lahore Cant', '', '25', '0', 'shahbaz', 'shahbaziqbal150@gmail.com', '', 'free', '2019-10-20 11:27:43', '2019-10-20 11:27:43'),
(3, 'car', '0', 'TEST', '', 'gesgd', '', '', '', 'dsvs', '', '12345', '0', 'admin', 'shahbaz_iqbal007@yahoo.com', '', 'free', '2019-10-20 11:48:15', '2019-10-20 11:48:15'),
(4, 'property', '0', 'drhdhrdhdt', '', 'hdtdht', '', '', '', 'Lahore Cant', '', '12345', '0', 'shahbaz', 'amir@gmal.com', '', 'free', '2019-10-20 11:49:54', '2019-10-20 11:49:54'),
(5, 'car', '0', 'TEST', '', 'dcvbn', '', '', '', 'Lahore Cant', '', '12345', '0', 'admin', 'shahbaz_iqbal007@yahoo.com', '', 'paid', '2019-10-20 11:50:29', '2019-10-20 11:50:29'),
(6, 'car', '0', 'admin', '', 'dzvds', '', '', '', '', '', '', '0', '', '', '', 'free', '2019-10-20 11:56:47', '2019-10-20 11:56:47'),
(7, 'property', '0', 'TEST', '', 'we', '', '', '', 'Lahore Cant', '', '12345', '0', 'shahbaz', 'shahbaziqbal150@gmail.com', '', 'free', '2019-10-20 12:06:46', '2019-10-20 12:06:46'),
(8, 'property', '0', 'dog', '', 'wertyui', '', '', '', 'Lahore Cant', '', '12345', '0', 'admin', 'shahbaz_iqbal007@yahoo.com', '', 'free', '2019-10-20 12:44:34', '2019-10-20 12:44:34'),
(9, 'car', '0', 'tewr', '', '', '', '', '', 'Lahore', '', '123', '0', 'shahbaz ow', 'shahbaz_iqbal007@yahoo.com', '', 'free', '2019-10-20 12:49:44', '2019-10-20 12:49:44'),
(10, 'property', '0', 'TEST', '', '', '', '', '', 'Lahore Cant', '', 'sc', '0', '', '', '', 'free', '2019-10-20 12:50:39', '2019-10-20 12:50:39'),
(11, 'car', '0', 'TEST', '', 'hhhh', '', '', '', 'lhr', '', 'sc', '0', 'shahbaz', 'shahbaz_iqbal007@yahoo.com', '', 'free', '2019-10-20 12:51:29', '2019-10-20 12:51:29'),
(12, 'property', '0', 'cat', '', 'qwert', '', '', '', 'Lahore Cantgnh', '', '', '0', '', '', '', 'free', '2019-10-20 12:56:23', '2019-10-20 12:56:23'),
(13, 'property', '0', 'TEST', '', 'qwert', '', '', '', 'lhr', '', '12345', '0', 'shahbaz', 'shahbaz_iqbal007@yahoo.com', 'mobile_center (13).sql', 'free', '2019-10-20 14:45:32', '2019-10-20 14:45:32'),
(14, 'property', '0', 'TEST', '', 'werty', '', '', '', 'Lahore Cant', '', 'sc', '0', 'shahbaz', 'amir@gmal.comm', 'mobile_center (13).sql', 'free', '2019-10-20 14:50:34', '2019-10-20 14:50:34'),
(15, 'car', '0', 'cat', '', 'sdbd', '', '', '', 'dsv', '', '12345', '0', 'shahbaz', 'shahbaziqbal150@gmail.com', '', 'free', '2019-10-20 15:07:46', '2019-10-20 15:07:46'),
(16, 'property', '0', 'dog', '', 'qwertyu', '', '', '', 'lhr', '', '25', '0', 'shahbaz', 'shahbaziqbal150@gmail.com', 'mobile_center (13).sql', 'free', '2019-10-20 15:09:05', '2019-10-20 15:09:05'),
(17, 'car', '0', 'TEST', '', 'vdssvdvds', '', '', '', 'Lahore Cant', '', '12345', '0', 'admin', 'shahbaziqbal150@gmail.com', '', 'free', '2019-10-20 15:33:01', '2019-10-20 15:33:01'),
(18, 'car', '0', 'cat', '', 'qwerty', '', '', '', 'bwp', '', '2345', '0', 'shahbaz', 'shahbaziqbal150@gmail.com', '', 'paid', '2019-10-20 15:34:32', '2019-10-20 15:34:32'),
(19, 'Select A Category', '0', '', '', '', '', '', '', '', '', '123', '0', 'shahbaz', 'shahbaziqbal150@gmail.com', '0', 'free', '2019-10-20 16:01:57', '2019-10-20 16:01:57'),
(20, 'Select A Category', '0', '', '', '', '', '', '', '', '', '', '0', 'bcbg', 'shahbaziqbal150@gmail.com', '1571591372.png', 'free', '2019-10-20 17:13:43', '2019-10-20 17:13:43'),
(21, 'Pets', '', 'cat', 'cAT  test', 'ojanslndjallkas    adddddd', 'Andorra', 'La Massana', 'la Massana', 'bwp', '133', '12345', '0', 'shahbaz', 'shahbaz_iqbal007@yahoo.com', '1572717205.png', 'free', '2019-11-02 19:02:07', '2019-11-02 19:02:07'),
(22, 'Rent', 'HousesForRent', 'TEST', 'cAT  test', 'fbxfb', 'Bahamas', 'Central Eleuthera', 'Governor\'s Harbour', 'bwp', '133', '2345', '0', 'admin', 'admin@gmail.com', '1572721580.png', 'free', '2019-11-02 19:06:23', '2019-11-02 19:06:23'),
(23, 'Select A Category', '', 'cat', 'cAT  test', 'vbcv', 'Albania', 'Diber', 'Bulqiz', 'bwp', '133', 'sc', '0', 'shahbaz', 'amir@gmal.comm', '1572722281.png', 'free', '2019-11-02 19:18:36', '2019-11-02 19:18:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
