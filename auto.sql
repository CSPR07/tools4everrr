-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 12 apr 2022 om 06:34
-- Serverversie: 10.5.12-MariaDB
-- PHP-versie: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18739086_tools4ever`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `id` int(10) NOT NULL,
  `naam` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `prijs` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brandstof` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`id`, `naam`, `datum`, `prijs`, `brandstof`) VALUES
(1, 'Skoda Citigo', '2022-04-07', '1200', 'Benzine'),
(2, 'Volkswagen polo', '2022-04-08', '2300', 'Benzine'),
(5, 'Volkswagen Tiguan', '2022-04-07', '8000', 'Benzine'),
(6, 'BMW 116 116i', '2022-04-09', '8250', 'Benzine'),
(7, 'Audi SQ5', '2022-04-09', '25950', 'Diesel'),
(8, 'Audi a7 sportsback', '2022-04-11', '39950', 'Diesel'),
(9, 'Volkswagen Tiguan', '2022-04-07', '8000', 'Benzine'),
(10, 'BMW 116 116i', '2022-04-09', '8250', 'Benzine'),
(11, 'Audi SQ5', '2022-04-09', '25950', 'Diesel'),
(12, 'Audi a7 sportsback', '2022-04-11', '39950', 'Diesel');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
