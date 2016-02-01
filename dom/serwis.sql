-- phpMyAdmin SQL Dump
-- version 4.4.15.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 01 Lut 2016, 21:48
-- Wersja serwera: 5.6.28
-- Wersja PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis`
--
CREATE DATABASE IF NOT EXISTS `serwis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `serwis`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kwiatki`
--

DROP TABLE IF EXISTS `kwiatki`;
CREATE TABLE IF NOT EXISTS `kwiatki` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kwiatki`
--

INSERT INTO `kwiatki` (`id`, `nazwa`, `data`) VALUES
(1, 'PHP', '2016-02-20'),
(2, 'PHP', '2016-01-01'),
(3, 'Javascript', '2016-01-01'),
(4, 'Javascript', '2016-01-01'),
(5, 'Actionscript', '2016-01-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zlecenia`
--

DROP TABLE IF EXISTS `zlecenia`;
CREATE TABLE IF NOT EXISTS `zlecenia` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `data_poczatek` date NOT NULL,
  `data_koniec` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zlecenia`
--

INSERT INTO `zlecenia` (`id`, `nazwa`, `data_poczatek`, `data_koniec`) VALUES
(1, 'PHP', '2016-02-20', '0000-00-00'),
(2, 'PHP', '2016-01-01', '0000-00-00'),
(3, 'Javascript', '2016-01-01', '0000-00-00'),
(4, 'Javascript', '2016-01-01', '0000-00-00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kwiatki`
--
ALTER TABLE `kwiatki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zlecenia`
--
ALTER TABLE `zlecenia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kwiatki`
--
ALTER TABLE `kwiatki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `zlecenia`
--
ALTER TABLE `zlecenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
