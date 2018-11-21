-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 16 dec 2016 om 10:41
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `surfboard`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afmetingen`
--

CREATE TABLE IF NOT EXISTS `afmetingen` (
  `Afmetingen` varchar(40) NOT NULL,
  `Lengte` varchar(40) NOT NULL,
  `Breedte` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

CREATE TABLE IF NOT EXISTS `bestellingen` (
  `Bestelnummer` int(8) NOT NULL,
  `Naam` varchar(40) NOT NULL,
  `Adres` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefoon` varchar(40) NOT NULL,
  `Postcode` varchar(7) NOT NULL,
  `Afmetingen` varchar(40) NOT NULL,
  `Datumop` varchar(11) NOT NULL,
  `Datumaf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bestellingen`
--

INSERT INTO `bestellingen` (`Bestelnummer`, `Naam`, `Adres`, `Email`, `Telefoon`, `Postcode`, `Afmetingen`, `Datumop`, `Datumaf`) VALUES
(2, 'C Dokter', 'Verlengde Scholtends Kanaal 49, a', 'chj@hotmail.nl', '0682948582', '7881JT', '200X200', '20-10-2016', '25-10-2017');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `ID` int(8) NOT NULL,
  `Gebruikers` varchar(40) NOT NULL,
  `Wachtwoord` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`ID`, `Gebruikers`, `Wachtwoord`) VALUES
(1, 'Admin', 'Admin');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `afmetingen`
--
ALTER TABLE `afmetingen`
 ADD PRIMARY KEY (`Afmetingen`);

--
-- Indexen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
 ADD PRIMARY KEY (`Bestelnummer`), ADD UNIQUE KEY `Afmetingen` (`Afmetingen`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
 ADD PRIMARY KEY (`ID`);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `afmetingen`
--
ALTER TABLE `afmetingen`
ADD CONSTRAINT `afmetingen_ibfk_1` FOREIGN KEY (`Afmetingen`) REFERENCES `bestellingen` (`Afmetingen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
