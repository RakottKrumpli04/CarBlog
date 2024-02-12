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

CREATE TABLE `autok` (
  `id` int(1) DEFAULT NULL,
  `marka` varchar(15) DEFAULT NULL,
  `cim` varchar(23) DEFAULT NULL,
  `roviden` varchar(49) DEFAULT NULL,
  `kep` varchar(24) DEFAULT NULL,
  `oldalid` varchar(24) DEFAULT NULL,
  `fajta` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `autok`
--

INSERT INTO `autok` (`id`, `marka`, `cim`, `roviden`, `kep`, `oldalid`, `fajta`) VALUES
(1, 'Ford', 'Ford Mustang Dark Horse', 'Dark Horse, avagy az utolsó V8-as', 'FordMustangDarkHorse.jpg', 'FordMustangDarkHorse.jpg', 'auto'),
(2, 'Ford', 'Ford GT40', 'Legenda volt a GT40, de miért is?', 'FordGT40.jpg', 'FordGT40', 'tortenet'),
(3, 'Ford', 'Ford Ismertető', 'Amit a Ford-ról tudni érdemes', 'Ford.jpg', 'Ford', 'ismerteto'),
(4, 'AstonMartin', 'Aston Martin DB5', 'Az autó, amiről mindenkinek James Bond jut eszébe', 'AstonMartinDB5.jpg', 'AstonMartinDB5', 'auto'),
(5, 'AstonMartin', 'Aston Martin Valkyrie', 'A közúti autó, amit versenypályára terveztek', 'AstonMartinValkyrie.jpg', 'AstonMartinValkyrie', 'tortenet'),
(6, 'AstonMartin', 'Aston Martin Ismertető', 'Amit az Aston Martin-ról tudni érdemes', 'AstonMartin.jpg', 'AstonMartin', 'ismerteto'),
(7, 'Subaru', 'Subaru BRZ', 'A szegény ember sportautója ', 'SubaruBRZ.jpg', 'SubaruBRZ', 'auto'),
(8, 'Subaru', 'Subaru Impreza WRX', 'Nincs rally Subaru nélkül - Impreza WRX STI', 'SubaruImprezaWRXSTI.jpg', 'SubaruImprezaWRXSTI', 'tortenet'),
(9, 'Subaru', 'Subaru Ismertető', 'Amit a Subaru-ról tudni érdemes', 'Subaru.jpg', 'Subaru', 'ismerteto');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
