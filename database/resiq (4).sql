-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 08:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resiq`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemulung`
--

CREATE TABLE `pemulung` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `usia` int(10) NOT NULL,
  `Alamat` longtext NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `organik` enum('ya','tidak') NOT NULL,
  `an-organik` enum('ya','tidak') NOT NULL,
  `soal1` varchar(255) NOT NULL,
  `soal2` longtext NOT NULL,
  `soal3` longtext NOT NULL,
  `soal4` varchar(255) NOT NULL,
  `soal5` longtext NOT NULL,
  `soal6` varchar(255) NOT NULL,
  `soal7` longtext NOT NULL,
  `soal8` longtext NOT NULL,
  `soal9` longtext NOT NULL,
  `soal10` longtext NOT NULL,
  `soal11` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemulung`
--

INSERT INTO `pemulung` (`id`, `nama`, `usia`, `Alamat`, `pekerjaan`, `organik`, `an-organik`, `soal1`, `soal2`, `soal3`, `soal4`, `soal5`, `soal6`, `soal7`, `soal8`, `soal9`, `soal10`, `soal11`) VALUES
(1, 'aripin', 35, '', 'Pemulung', 'ya', 'ya', '1', '20', '14', '1', 'plastik', '1', '1', '1x sehari', '7000', 'asa', '20');

-- --------------------------------------------------------

--
-- Table structure for table `question_answer`
--

CREATE TABLE `question_answer` (
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idUJenis` int(11) NOT NULL,
  `idQMaster` int(11) NOT NULL,
  `answer` longtext NOT NULL,
  `idQATipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question_answerpilihan`
--

CREATE TABLE `question_answerpilihan` (
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(10) NOT NULL,
  `idOATipe` int(10) NOT NULL,
  `pilihanAnswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question_answertipe`
--

CREATE TABLE `question_answertipe` (
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(10) NOT NULL,
  `namaTipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE `question_master` (
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idUJenis` int(11) NOT NULL,
  `question` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `timestamps`
--

CREATE TABLE `timestamps` (
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idUJenis` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `sandi` varchar(255) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`create_time`, `update_time`, `id`, `idUJenis`, `username`, `sandi`, `nama`) VALUES
('2021-08-25 12:57:42', NULL, 1, 1, 'admin', '$2y$10$fgffU0fUl16ae.w5VycpfeuTrePas9HL4fLlDRq/r4y.mXr.x5qEC', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users_jenis`
--

CREATE TABLE `users_jenis` (
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `namaJenis` varchar(45) DEFAULT NULL,
  `hakAkses` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_jenis`
--

INSERT INTO `users_jenis` (`create_time`, `update_time`, `id`, `namaJenis`, `hakAkses`) VALUES
('2021-08-25 12:53:30', NULL, 1, 'Admin', NULL),
('2021-08-25 12:53:30', NULL, 2, 'Suplier', NULL),
('2021-08-25 12:53:30', NULL, 3, 'Client', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemulung`
--
ALTER TABLE `pemulung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_answer`
--
ALTER TABLE `question_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question_answer_users_jenis1_idx` (`idUJenis`),
  ADD KEY `fk_question_answer_question_master1_idx` (`idQMaster`);

--
-- Indexes for table `question_answerpilihan`
--
ALTER TABLE `question_answerpilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_answertipe`
--
ALTER TABLE `question_answertipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_master`
--
ALTER TABLE `question_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question_master_users_jenis1_idx` (`idUJenis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_users_jenis_idx` (`idUJenis`);

--
-- Indexes for table `users_jenis`
--
ALTER TABLE `users_jenis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemulung`
--
ALTER TABLE `pemulung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question_answer`
--
ALTER TABLE `question_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_answerpilihan`
--
ALTER TABLE `question_answerpilihan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_answertipe`
--
ALTER TABLE `question_answertipe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_master`
--
ALTER TABLE `question_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_jenis`
--
ALTER TABLE `users_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question_answer`
--
ALTER TABLE `question_answer`
  ADD CONSTRAINT `fk_question_answer_question_master1` FOREIGN KEY (`idQMaster`) REFERENCES `question_master` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_question_answer_users_jenis1` FOREIGN KEY (`idUJenis`) REFERENCES `users_jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question_master`
--
ALTER TABLE `question_master`
  ADD CONSTRAINT `fk_question_master_users_jenis1` FOREIGN KEY (`idUJenis`) REFERENCES `users_jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_users_jenis` FOREIGN KEY (`idUJenis`) REFERENCES `users_jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
