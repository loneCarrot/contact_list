-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Okt 03. 20:15
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `contact_list`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contact_list`
--

CREATE TABLE `contact_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `contact_list`
--

INSERT INTO `contact_list` (`id`, `name`, `phone_number`, `phone_number2`, `profile_picture`, `description`, `email_add`) VALUES
(1, 'Fazekas Balázs', '+36308512943', '+36308512943', NULL, NULL, 'fazibalazs3@gmail.com'),
(3, 'Lorem Ipsum', '+36301233212', '+36301233212', NULL, 'Hello Balázs én csak egy teszt adat vagyok ne foglalkozz velem!', 'lorem@ipsum.io'),
(4, 'Balázs Fazekas', '+36301233212', '+36308512943', NULL, NULL, 'fazi145@asd.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210929200600', '2021-09-29 22:08:32', 447),
('DoctrineMigrations\\Version20210929220234', '2021-09-30 00:03:03', 235);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `contact_list`
--
ALTER TABLE `contact_list`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `contact_list`
--
ALTER TABLE `contact_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
