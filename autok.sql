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
  `linkid` varchar(30) DEFAULT NULL,
  `marka` varchar(15) DEFAULT NULL,
  `cim` varchar(25) DEFAULT NULL,
  `roviden` varchar(50) DEFAULT NULL,
  `kep` varchar(25) DEFAULT NULL,
  `fajta` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `autok`
--

INSERT INTO `autok` (`id`, `linkid`, `marka`, `cim`, `roviden`, `kep`, `fajta`) VALUES
(1, 'darkhorse.php', 'Ford', 'Ford Mustang Dark Horse', 'Dark Horse, avagy az utolsó V8-as', 'FordMustangDarkHorse.jpg', 'auto'),
(2, 'gt40.php', 'Ford', 'Ford GT40', 'Legenda volt a GT40, de miért is?', 'FordGT40.jpg', 'tortenet'),
(3, 'ford.php', 'Ford', 'Ford Ismertető', 'Amit a Ford-ról tudni érdemes', 'Ford.jpg', 'ismerteto'),
(4, 'db5.php', 'AstonMartin', 'Aston Martin DB5', 'Az autó, amiről mindenkinek James Bond jut eszébe', 'AstonMartinDB5.jpg', 'tortenet'),
(5, 'valkyrie.php', 'AstonMartin', 'Aston Martin Valkyrie', 'A közúti autó, amit versenypályára terveztek', 'AstonMartinValkyrie.jpg', 'auto'),
(6, 'astonmartin.php', 'AstonMartin', 'Aston Martin Ismertető', 'Amit az Aston Martin-ról tudni érdemes', 'AstonMartin.jpg', 'ismerteto'),
(7, 'brz.php', 'Subaru', 'Subaru BRZ', 'A szegény ember sportautója ', 'SubaruBRZ.jpg', 'auto'),
(8, 'imprezawrx.php', 'Subaru', 'Subaru Impreza WRX', 'Nincs rally Subaru nélkül - Impreza WRX STI', 'SubaruImprezaWRXSTI.jpg', 'tortenet'),
(9, 'subaru.php', 'Subaru', 'Subaru Ismertető', 'Amit a Subaru-ról tudni érdemes', 'Subaru.jpg', 'ismerteto');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
