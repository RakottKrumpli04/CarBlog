-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Feb 12. 17:42
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `autok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `autok`
--

CREATE TABLE `cikkek` (
  `id` int(1) DEFAULT NULL,
  `marka` varchar(25) DEFAULT NULL,
  `cikktipus` varchar(30) DEFAULT NULL,
  `cim` varchar(40) DEFAULT NULL,
  `roviden` varchar(75) DEFAULT NULL,
  `kep` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `autok`
--

INSERT INTO `cikkek` (`id`, `marka`, `cikktipus`, `cim`, `roviden`, `kep`) VALUES
(1, 'Ford', 'Autóajánló', 'Ford Mustang Dark Horse', 'Dark Horse, avagy az utolsó V8-as', 'https://i.ibb.co/c2BvYf4/Ford-Mustang-Dark-Horse.jpg'),
(2, 'Ford', 'Autós történetek', 'Ford GT40', 'Legenda volt a GT40, de miért is?', 'https://i.ibb.co/G9GgpjV/FordGT40.jpg'),
(3, 'Ford', 'Cégismertető', 'Ford Ismertető', 'Amit a Ford-ról tudni érdemes', 'https://i.ibb.co/mGd1Z3N/Ford.webp'),
(4, 'Aston Martin', 'Autós történetek', 'Aston Martin DB5', 'Az autó, amiről mindenkinek James Bond jut eszébe', 'https://i.ibb.co/smRzQb1/Aston-Martin-DB5.webp'),
(5, 'Aston Martin', 'Autóajánló', 'Aston Martin Valkyrie', 'A közúti autó, amit versenypályára terveztek', 'https://i.ibb.co/WPNTzDZ/Aston-Martin-Valkyrie.jpg'),
(6, 'Aston Martin', 'Cégismertető', 'Aston Martin Ismertető', 'Amit az Aston Martin-ról tudni érdemes', 'https://i.ibb.co/zX3Bq1y/Aston-Martin.webp'),
(7, 'Subaru', 'Autóajánló', 'Subaru BRZ', 'A szegény ember sportautója ', 'https://i.ibb.co/6FNHd2H/Subaru-BRZ.jpg'),
(8, 'Subaru', 'Autós történetek', 'Subaru Impreza WRX', 'Nincs rally Subaru nélkül - Impreza WRX STI', 'https://i.ibb.co/9cSByBQ/Subaru-Impreza-WRXSTI.jpg'),
(9, 'Subaru', 'Cégismertető', 'Subaru Ismertető', 'Amit a Subaru-ról tudni érdemes', 'https://i.ibb.co/hdmd7k2/Subaru.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;