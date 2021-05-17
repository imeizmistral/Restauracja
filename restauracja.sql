-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Maj 2021, 21:15
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
(21, 123456789, '2021-05-19', '20:00', 2, 422531),
(22, 422, '2021-05-26', '18:00', 2, 393117),
(23, 231231, '2021-05-15', '17:00', 8, 412277),
(24, 123, '2021-05-19', '21:44', 5, 759400),
(29, 123, '2021-05-15', '18:24', 1, 273168),
(30, 123, '2021-05-15', '20:37', 1, 600323),
(44, 12233, '2021-05-14', '22:00', 1, 629378),
(45, 12233, '2021-05-14', '22:00', 1, 945848),
(52, 1121235, NULL, NULL, 4, 268961);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT dla tabeli `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
