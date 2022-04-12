-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 12 apr 2022 om 06:36
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
-- Tabelstructuur voor tabel `autohuren`
--

CREATE TABLE `autohuren` (
  `id` int(11) NOT NULL,
  `Begindatum` date NOT NULL,
  `Einddatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `autohuren`
--

INSERT INTO `autohuren` (`id`, `Begindatum`, `Einddatum`) VALUES
(1, '2022-04-07', '2022-04-09'),
(2, '2022-04-08', '2022-04-11');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `autohuren`
--
ALTER TABLE `autohuren`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `autohuren`
--
ALTER TABLE `autohuren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `autohuren`
--
ALTER TABLE `autohuren`
  ADD CONSTRAINT `autohuren_ibfk_1` FOREIGN KEY (`id`) REFERENCES `auto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
