-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2023 at 11:37 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_eidriian`
--

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

DROP TABLE IF EXISTS `comenzi`;
CREATE TABLE IF NOT EXISTS `comenzi` (
  `id_comanda` int(11) NOT NULL AUTO_INCREMENT,
  `id_serviciu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_comanda`),
  KEY `id_serviciu` (`id_serviciu`),
  KEY `comenzi_ibfk_2` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`id_comanda`, `id_serviciu`, `id_user`, `status`) VALUES
(3, 1, 2, 1),
(4, 3, 2, 1),
(5, 1, 3, 1),
(6, 2, 3, 0),
(7, 3, 3, 0),
(8, 4, 3, 0),
(9, 5, 3, 0),
(10, 6, 3, 0),
(11, 7, 3, 0),
(12, 2, 4, 0),
(13, 7, 4, 0),
(15, 1, 5, 0),
(16, 2, 5, 0),
(17, 3, 5, 0),
(18, 4, 5, 0),
(19, 5, 5, 0),
(20, 6, 5, 0),
(21, 7, 5, 0),
(22, 1, 6, 0),
(23, 6, 6, 0),
(36, 1, 7, 0),
(37, 3, 7, 0),
(55, 1, 8, 0),
(56, 3, 8, 0),
(79, 5, 2, 0),
(80, 6, 2, 0),
(81, 7, 2, 0),
(88, 7, 7, 1),
(89, 3, 1, 0),
(90, 1, 1, 0),
(91, 2, 1, 0),
(92, 3, 1, 0),
(93, 4, 1, 0),
(94, 5, 1, 0),
(95, 6, 1, 0),
(96, 7, 1, 0),
(98, 1, 11, 0),
(99, 2, 11, 0),
(100, 3, 11, 1),
(101, 5, 12, 0),
(102, 7, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `servicii`
--

DROP TABLE IF EXISTS `servicii`;
CREATE TABLE IF NOT EXISTS `servicii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `descriere` varchar(100) NOT NULL,
  `timp_estimativ` varchar(50) NOT NULL,
  `pret` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicii`
--

INSERT INTO `servicii` (`id`, `nume`, `descriere`, `timp_estimativ`, `pret`) VALUES
(1, 'Site Web', 'Realizarea unui site web pe baza cerintelor clientului', '3 zile', 500),
(2, 'Software', 'Realizarea unui software pe baza cerintelor clientului', '7 zile', 800),
(3, 'Game Dev', 'Realizarea unui joc video pe baza cerintelor clientului', '14 zile', 1000),
(4, 'Artwork', 'Realizarea artei pentru diferite contexte, pe baza cerintelor clientului', '7 zile', 100),
(5, 'Game testing', 'Testarea unui joc video si gasirea erorilor', '7 zile', 100),
(6, 'Consultanta', 'Consultanta pentru diferite teme din IT', '5 zile', 300),
(7, 'QA Testing', 'Testare ajutomata a diferitelor softwares', '5 zile', 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nume` varchar(20) NOT NULL,
  `prenume` varchar(20) NOT NULL,
  `parola` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nume`, `prenume`, `parola`, `admin`) VALUES
(1, 'EidriiaN', 'adrianneagu309@gmail.com', 'Neagu', 'Adrian', 'sunttare', 1),
(2, 'Cosmin', 'Cosmin@gmail.com', 'Cosmin', 'cosmin', 'cosmin', 0),
(3, 'Rusval', 'valentin@gmail.com', 'Valentin', 'Valentin', 'val', 0),
(4, 'Ale', 'ale@gmail.com', 'ale', 'ale', 'ale', 0),
(5, 'MihX', 'mihaitemelie19@gmail.com', 'Temelie', 'Mihai', '1234', 0),
(6, 'Iza', 'iza@gmail.com', 'iza', 'iza', 'iza', 0),
(7, 'Stefan', 'stefan@gmail.com', 'stefan', 'stefan', 'stefan', 0),
(8, 'Rares', 'rares@gmail.com', 'rares', 'rares', 'rares', 0),
(10, 'Adrian', 'adrianneagu@gmail.com', 'Neagu', 'Adrian', 'asafasfas', 0),
(11, 'Dragos', 'dragos@gmail.com', 'Dragos', 'Dragos', 'dragos', 0),
(12, 'Tataie', 'sorinbanica@gmail.com', 'Sorin', 'Banica', 'tataie', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD CONSTRAINT `comenzi_ibfk_1` FOREIGN KEY (`id_serviciu`) REFERENCES `servicii` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comenzi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
