-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 15. bře 2024, 09:45
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `kalisz`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `pocasi_bundesland`
--

CREATE TABLE `pocasi_bundesland` (
  `mapa` varchar(255) NOT NULL,
  `vlajka` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `short_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vypisuji data pro tabulku `pocasi_bundesland`
--

INSERT INTO `pocasi_bundesland` (`mapa`, `vlajka`, `id`, `name`, `short_name`) VALUES
('Map_Baden-Württemberg.png', 'Flag_of_Baden-Württemberg.png', 1, 'Baden-Würtemberg', 'BW'),
('Map_Bavaria.png', 'Flag_of_Bavaria.png', 2, 'Bayern', 'BY'),
('Map_Berlin_in_Germany.png', 'Flag_of_Berlin.png', 3, 'Berlin', 'BE'),
('Map_Brandenburg.png', 'Flag_of_Brandenburg.png', 4, 'Brandenburg', 'BB'),
('Map_Bremen_in_Germany.png', 'Flag_of_Bremen.png', 5, 'Bremen', 'HB'),
('Map_Hamburg_in_Germany.png', 'Flag_of_Hamburg.svg.png', 6, 'Hamburg', 'HH'),
('Map_Hesse_in_Germany.png', 'Flag_of_Hesse.png', 7, 'Hessen', 'HE'),
('Map_Mecklenburg-Vorpommern.png', 'Flag_of_Mecklenburg-Western_Pomerania.png', 8, 'Mecklenburg-Vorpommern', 'MV'),
('Map_Lower-Saxony_in_Germany.png', 'Flag_of_Lower_Saxony.png', 9, 'Niedersachesen', 'NI'),
('Map_North_Rhine-Westphalia_in_Germany.png', 'Flag_of_North_Rhine-Westphalia.png', 10, 'Nordrhein-Westfalen', 'NW'),
('Map_Rhineland-Palatinate_in_Germany.png', 'Flag_of_Rhineland-Palatinate.png', 11, 'Rheinland-Pfalz', 'RP'),
('Map_Saarland_in_Germany.png', 'Flag_of_Saarland.png', 12, 'Saarland', 'SL'),
('Map_Saxony_in_Germany.png', 'Flag_of_Saxony.png', 13, 'Sachsen', 'SN'),
('Map_Saxony-Anhalt_in_Germany.png', 'Flag_of_Saxony-Anhalt.png', 14, 'Sachsen-Anhalt', 'ST'),
('Map_Schleswig-Holstein_in_Germany.png', 'Flag_Schleswig-Holstein.png', 15, 'Schleswig-Holstein', 'SH'),
('Map_Thuringia.png', 'Flag_of_Thuringia.png', 16, 'Thüringen', 'TH');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `pocasi_bundesland`
--
ALTER TABLE `pocasi_bundesland`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `pocasi_bundesland`
--
ALTER TABLE `pocasi_bundesland`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
