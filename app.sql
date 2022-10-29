-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: ian. 26, 2021 la 06:17 AM
-- Versiune server: 8.0.21
-- Versiune PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `app`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `event_name` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Eliminarea datelor din tabel `events`
--

INSERT INTO `events` (`id_event`, `id_user`, `event_name`, `date`) VALUES
(3, 1, 'Prezentare proiect DAW', '2021-01-12'),
(5, 1, 'Test RC', '2021-01-19'),
(7, 1, 'Prezentare proiect LFC', '2021-01-19'),
(10, 1, 'Ziua Mariei', '2021-01-23'),
(121, 1, 'Ziua Irinei', '2021-09-23'),
(120, 1, 'A nins !', '2021-01-11'),
(140, 1, 'Prezentare proiect DAW', '2021-01-26'),
(139, 4, 'Competitie de sah', '2021-01-20'),
(138, 4, 'Concert', '2021-02-10'),
(137, 1, 'Verisorii vin in vizita', '2021-09-02'),
(136, 1, 'Ziua lui Ionut', '2021-12-21'),
(135, 1, 'Ziua lui Bogdan si Angela', '2021-10-27'),
(134, 1, 'Ziua lui Jerry', '2021-10-20'),
(133, 1, 'Craciun', '2021-12-25'),
(132, 1, 'Examen SD', '2021-02-19'),
(131, 1, 'Examen LFC', '2021-02-15'),
(130, 1, 'Examen DAW', '2021-02-10'),
(129, 1, 'Examen BD', '2021-02-05'),
(128, 1, 'Examen RC', '2021-02-02'),
(127, 1, 'Ziua bunicului', '2021-04-14'),
(126, 1, 'Ziua bunicii', '2021-04-01'),
(125, 1, 'Ziua Găbiței', '2021-04-17'),
(124, 1, 'Ziua mamei', '2021-09-06'),
(123, 1, 'Ziua tatei', '2021-12-27'),
(119, 2, 'Craciun', '2021-12-25'),
(118, 2, 'Revelion', '2021-01-01'),
(117, 2, 'De cumparat: un card de 32G', '2021-02-22'),
(116, 2, 'Petrecere surpriza', '2021-04-15'),
(115, 2, 'Excursie in Japonia', '2021-06-18'),
(114, 2, 'Incepe sesiunea', '2021-01-25'),
(113, 2, 'Ziua Irinei', '2021-09-23'),
(112, 2, 'Ziua lui Adelin', '2021-04-24'),
(111, 2, 'Plecare la munte', '2021-02-07'),
(110, 2, 'Mergi cu catelul la veterinar', '2021-01-30'),
(109, 2, 'Extragere Willis giveaway 5pm', '2021-02-23'),
(108, 2, 'Ziua Anei', '2021-03-10'),
(107, 1, 'Ziua mea', '2021-06-14'),
(106, 1, 'Concert Sala Palatului', '2021-02-10'),
(105, 1, 'De cumparat: rosii, castraveti, branza', '2021-01-13'),
(104, 2, 'Plec la mare', '2021-08-19'),
(103, 2, 'Examen auto', '2021-01-21'),
(122, 1, 'Ziua lui Mihai', '2021-06-09');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id_user`, `user`, `pass`) VALUES
(1, 'admin', 'admin00'),
(2, 'panda', 'trambulina'),
(4, 'owl', 'givemebread');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
