-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3307
-- Létrehozás ideje: 2020. Feb 14. 09:16
-- Kiszolgáló verziója: 10.1.34-MariaDB
-- PHP verzió: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `bajkaipatrik`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `villanykapcsolok`
--

CREATE TABLE `villanykapcsolok` (
  `id` int(11) NOT NULL,
  `nev` varchar(25) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL,
  `szin` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `keret` varchar(20) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `villanykapcsolok`
--

INSERT INTO `villanykapcsolok` (`id`, `nev`, `ar`, `szin`, `keret`) VALUES
(1, 'Vimar', 2500, 'Fekete', 'Kőkeret'),
(5, 'Eikon', 3000, 'Fekete', 'Bőr keret');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `villanykapcsolok`
--
ALTER TABLE `villanykapcsolok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `villanykapcsolok`
--
ALTER TABLE `villanykapcsolok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
