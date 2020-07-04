-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 04:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `email` varchar(20) NOT NULL,
  `wa` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pamflet` varchar(100) NOT NULL,
  `id` int(5) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`nama`, `deskripsi`, `email`, `wa`, `password`, `pamflet`, `id`, `jenis`) VALUES
('makan bersama', 'akbcbiauonboighbdsfhgsnnlsn\r\ndj hadai\r\nj dnauib d', 'aldjahiw@ipasdjao', '1028371981', 'lkadna', 'IMG_8589.JPG', 1, ''),
('makan bersama', 'makan baesama diadhuawdgu\r\nasdlahdgyw\r\naldhgayuw', 'admin@oasdyiau', '8172391', 'admin', 'kemenag3.png', 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_event`
--

CREATE TABLE `jenis_event` (
  `no` int(3) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_event`
--

INSERT INTO `jenis_event` (`no`, `jenis`) VALUES
(1, 'seminar'),
(2, 'konser');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `password`, `foto`, `nim`, `email`, `wa`) VALUES
('', '', '', '112', '', ''),
('a', 'a', '', 'a', '', ''),
('adaw', 'admin', 'loading.gif', 'ad', 'admin@sda', '1283189');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_event`
--
ALTER TABLE `jenis_event`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_event`
--
ALTER TABLE `jenis_event`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
