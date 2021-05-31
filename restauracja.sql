-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Maj 2021, 12:25
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `restauracja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation`
--

CREATE TABLE `reservation` (
  `id` int(5) NOT NULL,
  `number_tel` int(9) DEFAULT NULL,
  `date` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  `time` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  `id_table` int(5) DEFAULT NULL,
  `random` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `reservation`
--

INSERT INTO `reservation` (`id`, `number_tel`, `date`, `time`, `id_table`, `random`) VALUES
(53, 1234, '2021-05-19', '20:00', 2, 307175),
(57, 12, '2021-05-31', '19:00', 4, 338815),
(58, 123, '2021-05-31', '19:00', 2, 688331),
(59, 123, '2021-05-31', '20:00', 7, 114443),
(60, 1235, '2021-05-31', '20:00', 5, 147936),
(61, 123, '2021-06-01', '20:00', 3, 860902),
(62, 12, '2021-05-31', '20:00', 1, 807487),
(64, 1, '2021-05-31', '19:00', 6, 673939),
(66, 2, '2021-06-01', '20:00', 6, 883199),
(67, 52, '2021-06-01', '20:00', 5, 712776),
(68, 153, '2021-06-01', '20:00', 7, 322270),
(69, 123, '2021-05-31', '20:00', 11, 285461),
(70, 123456, '2021-06-01', '20:00', 4, 165542),
(71, 1234, '2021-05-31', '20:00', 8, 893608),
(72, 123454, '2021-06-03', '20:00', 3, 317099),
(74, 1231231, '2021-06-01', '20:00', 10, 364595),
(75, 15151, '2021-06-04', '20:00', 9, 724589),
(76, 123456, '2021-06-03', '20:00', 9, 935715);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `max_liczba` int(5) NOT NULL,
  `rodzaj` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `miejsce` varchar(32) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `tables`
--

INSERT INTO `tables` (`id`, `max_liczba`, `rodzaj`, `miejsce`) VALUES
(1, 6, 'ławy', 'na zewnątrz'),
(2, 6, 'ławy', 'na zewnątrz'),
(3, 4, 'fotele', 'wewnątrz'),
(4, 4, 'krzesła', 'wewnątrz'),
(5, 4, 'krzesła', 'na zewnątrz'),
(6, 4, 'krzesła', 'na zewnątrz'),
(7, 8, 'krzesła', 'wewnątrz'),
(8, 8, 'sofy', 'wewnątrz'),
(9, 8, 'sofy', 'wewnątrz'),
(10, 2, 'krzesła', 'na zewnątrz'),
(11, 2, 'krzesła', 'na zewnątrz'),
(12, 4, 'krzesła', 'wewnątrz'),
(13, 12, 'sofy', 'wewnątrz'),
(14, 5, 'fotele', 'wewnątrz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `test`
--

CREATE TABLE `test` (
  `id` int(3) NOT NULL,
  `name` varchar(10) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'asd'),
(2, 'asd'),
(1, 'asd'),
(2, 'asd'),
(1, 'assd'),
(2, 'assd'),
(1, 'assdz'),
(3, 'assdz'),
(4, 'asd'),
(5, 'asd'),
(4, 'assd'),
(5, 'assd'),
(2, 'asd'),
(2, 'assd'),
(1, 'assd'),
(475567, 'a'),
(293432, 'a'),
(899576, 'a'),
(128345, 'a');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT dla tabeli `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
