-- phpMyAdmin SQL Dump
-- version 4.4.15.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 26 Lut 2016, 14:59
-- Wersja serwera: 5.6.29
-- Wersja PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rejestr`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obieg`
--

CREATE TABLE IF NOT EXISTS `obieg` (
  `kto` text COLLATE utf8_polish_ci NOT NULL,
  `co` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `obieg`
--

INSERT INTO `obieg` (`kto`, `co`) VALUES
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'dfgfdgfdgfdg'),
('m', 'Tresc.\r\n  fdgfdgfdg'),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Lala idzie dzo siptala\r\n  '),
('m', 'Lala idzie dzo siptala\r\n  '),
('m', 'Lala idzie dzo siptala\r\n  '),
('m', 'Lala idzie dzo siptala\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Zleconko'),
('m', 'Zleconko'),
('m', 'Zleconko'),
('m', 'Zleconko'),
('m', 'Zleconko'),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  xxx'),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  '),
('m', 'Tresc.\r\n  ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stan`
--

CREATE TABLE IF NOT EXISTS `stan` (
  `up_do` text COLLATE utf8_polish_ci NOT NULL,
  `co` text COLLATE utf8_polish_ci NOT NULL,
  `kto` text COLLATE utf8_polish_ci NOT NULL,
  `numerek` int(11) NOT NULL,
  `data_generacji` datetime NOT NULL,
  `stan_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `stan`
--

INSERT INTO `stan` (`up_do`, `co`, `kto`, `numerek`, `data_generacji`, `stan_id`) VALUES
('SVN', 'Tresc.\r\n  ', 'sgajek', 2, '2016-02-23 22:23:03', 1),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 3, '2016-02-25 09:09:15', 2),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 7, '2016-02-25 09:09:18', 3),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 8, '2016-02-25 09:09:20', 4),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 9, '2016-02-25 09:09:22', 5),
('SVN', 'dfgfdgfdgfdg', 'sgajek2', 10, '2016-02-25 09:09:26', 6),
('Zlecenie nadania uprawnien', 'Tresc.\r\n  fdgfdgfdg', 'sgajek2', 11, '2016-02-25 09:09:30', 7),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 12, '2016-02-25 09:59:29', 8),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 13, '2016-02-25 09:59:32', 9),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 14, '2016-02-25 09:59:36', 10),
('Zlecenie nadania uprawnien', 'Lala idzie dzo siptala\r\n  ', 'sgajek2', 19, '2016-02-25 10:00:01', 11),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 23, '2016-02-25 14:14:10', 12),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 24, '2016-02-25 14:14:33', 13),
('SVN', 'Tresc.\r\n  ', 'sgajek', 25, '2016-02-25 14:14:55', 14),
('SVN', 'Tresc.\r\n  ', 'sgajek', 26, '2016-02-25 14:15:13', 15),
('SVN', 'Tresc.\r\n  ', 'sgajek', 28, '2016-02-25 14:16:49', 16),
('SVN', 'Tresc.\r\n  ', 'sgajek', 29, '2016-02-25 14:26:59', 17),
('SVN', 'Tresc.\r\n  ', 'sgajek', 30, '2016-02-25 14:43:08', 18),
('SVN', 'Tresc.\r\n  ', 'sgajek', 31, '2016-02-25 14:43:24', 19),
('SVN', 'Tresc.\r\n  ', 'sgajek', 33, '2016-02-25 14:45:21', 20),
('SVN', 'Tresc.\r\n  ', 'sgajek', 34, '2016-02-25 14:45:26', 21),
('SVN', 'Tresc.\r\n  ', 'sgajek', 36, '2016-02-25 14:46:50', 22),
('SVN', 'Tresc.\r\n  ', 'sgajek', 37, '2016-02-25 14:46:52', 23),
('SVN', 'Tresc.\r\n  ', 'sgajek', 38, '2016-02-25 14:46:54', 24),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 39, '2016-02-25 14:52:25', 25),
('SVN', 'Tresc.\r\n  ', 'sgajek2', 42, '2016-02-25 14:52:52', 26),
('Zlecenie nadania uprawnien', 'Zleconko', 'sgajek2', 45, '2016-02-25 15:30:19', 27),
('SVN', 'Tresc.\r\n  ', 'sgajek', 50, '2016-02-25 15:56:55', 28),
('SVN', 'Tresc.\r\n  xxx', 'mjablonski', 53, '2016-02-25 15:58:09', 29),
('SVN', 'Tresc.\r\n  ', 'sgajek', 54, '2016-02-25 15:58:28', 30),
('SVN', 'Tresc.\r\n  ', 'sgajek', 57, '2016-02-25 15:59:00', 31),
('Zlecenie nadania uprawnien', 'Tresc.\r\n  ', 'aszatkowski', 60, '2016-02-26 09:10:29', 32),
('SVN', 'Tresc.\r\n  ', 'sgajek', 63, '2016-02-26 14:22:21', 33);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usery`
--

CREATE TABLE IF NOT EXISTS `usery` (
  `userylogin` char(20) COLLATE utf8_polish_ci NOT NULL,
  `userycn` char(100) COLLATE utf8_polish_ci NOT NULL,
  `mail` text COLLATE utf8_polish_ci NOT NULL,
  `manager` text COLLATE utf8_polish_ci NOT NULL,
  `departmend` text COLLATE utf8_polish_ci NOT NULL,
  `dn` text COLLATE utf8_polish_ci NOT NULL,
  `poziom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `usery`
--

INSERT INTO `usery` (`userylogin`, `userycn`, `mail`, `manager`, `departmend`, `dn`, `poziom`) VALUES
('aszatkowski', 'Szatkowski Artur', 'Artur.Szatkowski@bsb.pl', 'CN=Grajkowski Marcin,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych - ZespÃ³Å‚ Oprog.', 'CN=Szatkowski Artur,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('cnawrocki', 'Nawrocki Cezary', 'Cezary.Nawrocki@bsb.pl', 'CN=Grajkowski Marcin,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych -ZespÃ³Å‚ Arch In', 'CN=Nawrocki Cezary,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('darekd', 'Danilewicz Dariusz', 'Dariusz.Danilewicz@bsb.pl', 'CN=Nawrocki Cezary,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych -ZespÃ³Å‚ Arch In', 'CN=Danilewicz Dariusz,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('dgolebiewski', 'Golebiewski Daniel', 'Seweryn.Gajek@bsb.pl', 'CN=Kuminek Jacek,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wsparcia -ZespÃ³Å‚ ZarzÄ…dzania Zasobami Informat.', 'CN=Golebiewski Daniel,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('jkowalewski', 'Kowalewski Jacek', 'Jacek.Kowalewski@bsb.pl', 'CN=Nawrocki Cezary,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych -ZespÃ³Å‚ Arch In', 'CN=Kowalewski Jacek,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('mjablonski', 'Jablonski Michal', 'Michal.Jablonski@bsb.pl', 'CN=Golebiewski Daniel,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wsparcia -ZespÃ³Å‚ ZarzÄ…dzania Zasobami Informat.', 'CN=Jablonski Michal,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('mradecki', 'Radecki Maciej', 'Maciej.Radecki@bsb.pl', 'CN=Nawrocki Cezary,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych -ZespÃ³Å‚ Arch In', 'CN=Radecki Maciej,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('rpodkowinski', 'Podkowinski Rafal', 'Rafal.Podkowinski@bsb.pl', 'CN=Szatkowski Artur,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych - ZespÃ³Å‚ Oprog.', 'CN=Podkowinski Rafal,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('sgajek', 'Gajek Seweryn', 'Seweryn.Gajek@bsb.pl', 'CN=Golebiewski Daniel,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wsparcia -ZespÃ³Å‚ ZarzÄ…dzania Zasobami Informat.', 'CN=Gajek Seweryn,OU=BSB,DC=bsb,DC=com,DC=pl', 666),
('sgajek2', 'Gajek2', '', 'CN=Nawrocki Cezary,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych -ZespÃ³Å‚ Arch In', 'CN=Gajek2,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('ssarnowski', 'Sarnowski Slawomir', 'Slawomir.Sarnowski@bsb.pl', 'CN=Kuminek Jacek,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wsparcia - Stanowisko ds. BezpieczeÅ„stwa', 'CN=Sarnowski Slawomir,OU=BSB,DC=bsb,DC=com,DC=pl', 0),
('wradecki', 'Radecki Wiktor', 'Wiktor.Radecki@bsb.pl', 'CN=Szatkowski Artur,OU=BSB,DC=bsb,DC=com,DC=pl', 'Departament Wytwarzania SystemÃ³w Informatycznych - ZespÃ³Å‚ Oprog.', 'CN=Radecki Wiktor,OU=BSB,DC=bsb,DC=com,DC=pl', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zlecenia`
--

CREATE TABLE IF NOT EXISTS `zlecenia` (
  `id` int(11) NOT NULL,
  `up_do` text NOT NULL,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `dla` text NOT NULL,
  `tresc` text NOT NULL,
  `skladajacy` text NOT NULL,
  `numerek` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zlecenia`
--

INSERT INTO `zlecenia` (`id`, `up_do`, `data_od`, `data_do`, `dla`, `tresc`, `skladajacy`, `numerek`) VALUES
(1, '', '2016-02-24', '2016-02-25', 'sgajek', 'sdsdsd', 'sgajek', 0),
(2, 'SVN', '2016-02-23', '2016-02-23', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 1),
(3, 'SVN', '2016-02-23', '2016-02-23', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 2),
(4, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 3),
(5, 'SVN', '2016-02-25', '2016-02-25', 'darekd', 'Tresc.\r\n  ', 'sgajek2', 3),
(6, 'SVN', '2016-02-25', '2016-02-25', 'jkowalewski', 'Tresc.\r\n  ', 'sgajek2', 3),
(7, 'SVN', '2016-02-25', '2016-02-25', 'mradecki', 'Tresc.\r\n  ', 'sgajek2', 3),
(8, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 7),
(9, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 8),
(10, 'SVN', '2016-02-25', '2016-02-25', 'jkowalewski', 'Tresc.\r\n  ', 'sgajek2', 9),
(11, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'dfgfdgfdgfdg', 'sgajek2', 10),
(12, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  fdgfdgfdg', 'sgajek2', 11),
(13, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 12),
(14, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 13),
(15, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 14),
(16, 'SVN', '2016-02-25', '2016-02-25', 'cnawrocki', 'Tresc.\r\n  ', 'sgajek2', 14),
(17, 'SVN', '2016-02-25', '2016-02-25', 'darekd', 'Tresc.\r\n  ', 'sgajek2', 14),
(18, 'SVN', '2016-02-25', '2016-02-25', 'jkowalewski', 'Tresc.\r\n  ', 'sgajek2', 14),
(19, 'SVN', '2016-02-25', '2016-02-25', 'mradecki', 'Tresc.\r\n  ', 'sgajek2', 14),
(20, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'sgajek2', 'Lala idzie dzo siptala\r\n  ', 'sgajek2', 19),
(21, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'cnawrocki', 'Lala idzie dzo siptala\r\n  ', 'sgajek2', 19),
(22, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'darekd', 'Lala idzie dzo siptala\r\n  ', 'sgajek2', 19),
(23, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'mradecki', 'Lala idzie dzo siptala\r\n  ', 'sgajek2', 19),
(24, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 23),
(25, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 24),
(26, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 25),
(27, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 26),
(28, 'SVN', '2016-02-25', '2016-02-25', 'mjablonski', 'Tresc.\r\n  ', 'sgajek', 26),
(29, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 28),
(30, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 29),
(31, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 30),
(32, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 31),
(33, 'SVN', '2016-02-25', '2016-02-25', 'mjablonski', 'Tresc.\r\n  ', 'sgajek', 31),
(34, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 33),
(35, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 34),
(36, 'SVN', '2016-02-25', '2016-02-25', 'mjablonski', 'Tresc.\r\n  ', 'sgajek', 34),
(37, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 36),
(38, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 37),
(39, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 38),
(40, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 39),
(41, 'SVN', '2016-02-25', '2016-02-25', 'darekd', 'Tresc.\r\n  ', 'sgajek2', 39),
(42, 'SVN', '2016-02-25', '2016-02-25', 'jkowalewski', 'Tresc.\r\n  ', 'sgajek2', 39),
(43, 'SVN', '2016-02-25', '2016-02-25', 'sgajek2', 'Tresc.\r\n  ', 'sgajek2', 42),
(44, 'SVN', '2016-02-25', '2016-02-25', 'jkowalewski', 'Tresc.\r\n  ', 'sgajek2', 42),
(45, 'SVN', '2016-02-25', '2016-02-25', 'mradecki', 'Tresc.\r\n  ', 'sgajek2', 42),
(46, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'sgajek2', 'Zleconko', 'sgajek2', 45),
(47, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'cnawrocki', 'Zleconko', 'sgajek2', 45),
(48, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'darekd', 'Zleconko', 'sgajek2', 45),
(49, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'jkowalewski', 'Zleconko', 'sgajek2', 45),
(50, 'Zlecenie nadania uprawnien', '2016-02-25', '2016-02-25', 'mradecki', 'Zleconko', 'sgajek2', 45),
(51, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 50),
(52, 'SVN', '2016-02-25', '2016-02-25', 'dgolebiewski', 'Tresc.\r\n  ', 'sgajek', 50),
(53, 'SVN', '2016-02-25', '2016-02-25', 'mjablonski', 'Tresc.\r\n  ', 'sgajek', 50),
(54, 'SVN', '2016-02-25', '2016-02-25', 'mjablonski', 'Tresc.\r\n  xxx', 'mjablonski', 53),
(55, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 54),
(56, 'SVN', '2016-02-25', '2016-02-25', 'dgolebiewski', 'Tresc.\r\n  ', 'sgajek', 54),
(57, 'SVN', '2016-02-25', '2016-02-25', 'mjablonski', 'Tresc.\r\n  ', 'sgajek', 54),
(58, 'SVN', '2016-02-25', '2016-02-25', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 57),
(59, 'SVN', '2016-02-25', '2016-02-25', 'dgolebiewski', 'Tresc.\r\n  ', 'sgajek', 57),
(60, 'SVN', '2016-02-25', '2016-02-25', 'mjablonski', 'Tresc.\r\n  ', 'sgajek', 57),
(61, 'Zlecenie nadania uprawnien', '2016-02-26', '2016-02-26', 'aszatkowski', 'Tresc.\r\n  ', 'aszatkowski', 60),
(62, 'Zlecenie nadania uprawnien', '2016-02-26', '2016-02-26', 'rpodkowinski', 'Tresc.\r\n  ', 'aszatkowski', 60),
(63, 'Zlecenie nadania uprawnien', '2016-02-26', '2016-02-26', 'wradecki', 'Tresc.\r\n  ', 'aszatkowski', 60),
(64, 'SVN', '2016-02-26', '2016-02-26', 'sgajek', 'Tresc.\r\n  ', 'sgajek', 63),
(65, 'SVN', '2016-02-26', '2016-02-26', 'mjablonski', 'Tresc.\r\n  ', 'sgajek', 63);

--
-- Wyzwalacze `zlecenia`
--
DELIMITER $$
CREATE TRIGGER `copy_pid` AFTER INSERT ON `zlecenia`
 FOR EACH ROW BEGIN
set @tresc = new.tresc;
INSERT INTO obieg  VALUES ('m',@tresc);

END
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `stan`
--
ALTER TABLE `stan`
  ADD PRIMARY KEY (`stan_id`);

--
-- Indexes for table `usery`
--
ALTER TABLE `usery`
  ADD PRIMARY KEY (`userylogin`);

--
-- Indexes for table `zlecenia`
--
ALTER TABLE `zlecenia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `stan`
--
ALTER TABLE `stan`
  MODIFY `stan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT dla tabeli `zlecenia`
--
ALTER TABLE `zlecenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

