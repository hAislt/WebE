-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Mrz 2020 um 12:14
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `shop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `beschreibung` text NOT NULL,
  `preis` double NOT NULL,
  `bild` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `name`, `beschreibung`, `preis`, `bild`) VALUES
(1, '6GB MSI GeForce GTX 1660 ARMOR 6G OC Aktiv PCIe 3.0 x16 (Retail)', 'Seit dem 14.03.2019 im Sortiment\r\n\r\nTURING-SHADER\r\nTuring-Shader ermöglichen beeindruckende Leistungssteigerungen für aktuelle Spiele durch die gleichzeitige Ausführung von Gleitkomma- und Ganzzahloperationen, adaptive Shading-Technik und einer neuen Speicherarchitektur mit doppelt so großem Cache im Vergleich zu Vorgänger-Grafikkarten.\r\n\r\nSTARKE PERFORMANCE\r\nSei bereit für aktuelle Spiele mit der GeForce GTX 1660 Ti, die auf einem Level mit der GeForce GTX 1070 steht.\r\n\r\nGEFORCE EXPERIENCE\r\nFange dein Spielerlebnis mit Videos und Screenshots ein und teile es mit der Welt, auch in einem Livestream. Halte deine GeForce-Treiber auf dem neusten Stand und optimiere deine Spiele-Einstellungen. GeForce Experience™ ist eine essentielle Software für die Verwendung deiner GeForce-Grafikkarte.\r\n\r\nDIE ARMOR-SERIE\r\nStylisch zocken und sich von der Masse abheben - beides wird von unseren ARMOR-Modellen ermöglicht. ARMOR-Grafikkarten sind die perfekten Komponenten für Spieler und Case-Modder, die auf der Suche nach etwas anderem sind. Hier trifft Gaming auf Klasse.\r\n\r\nDAS ARMOR-KÜHLSYSTEM\r\nZwei preisgekrönte TORX 2.0 Lüfter mit Doppelkugellager machen das Kühlsystem der ARMOR-Grafikkarten zu einer überaus zuverlässigen Kühllösung für lange Gaming-Sessions.\r\n\r\nBRILLIANZ AUF DER SPUR\r\nUnter all diesem Material befinden sich mehrschichtige Leiterbahnen, die das Printed Circuit Board ausmachen. Diese Bahnen verbinden alle wichtigen Komponenten miteinander und ermöglichen diesen die blitzschnelle Kommunikation untereinander.\r\n\r\nDIE BESTE ERFAHRUNG\r\nHole das Beste aus deiner MSI Grafikkarte heraus. Die verfügbare Software bietet unzählige Anpassungsmöglichkeiten, um die gewünschte Leistung in Spielen zu sichern.', 241.99, '1300282_0__72667.jpg'),
(2, '4GB MSI GeForce GTX 1050 Ti GAMING X 4G Aktiv PCIe 3.0 x16', 'Seit dem 22.10.2016 im Sortiment\r\n\r\nMSI präsentiert mit der GeForce® GTX 1050 Ti GAMING X 4G eine Grafikkarte, die beste Leistung mit modernster Technik in einem optimalen Gamingumfeld kombiniert. Die Grafikkarte verfügt über die moderne MSI TORX 2.0 Technik. Mithilfe dieser erklimmt TWIN FROZR VI eine neue Leistungsebene der Grafikkartenkühlung. TORX 2.0 Kühler generieren 22% mehr Luftdruck und sind zugleich leiser.\r\n\r\nUnter dem Cover der GeForce® GTX 1050 Ti GAMING X 4G befindet sich ein Meisterstück der Ingenieurskunst, das dazu entwickelt wurde die Grafikkarte absolut kühl zu halten. Jedes einzelne Detail des komplizierten Kühlkörpers trägt dazu bei, ein kühles und leises Spielerlebnis zu bieten. Durch den Einsatz fortschrittlicher Aerodynamik lenkt die Luftstrom-Kontrolltechnik mehr Luft zu den TWIN FROZR VI Heatpipes. Die speziellen Ableiter auf dem Kühlkörper vergrößern dessen Oberfläche, was sowohl die Temperatur als auch die Leistung spürbar positiv beeinflusst.\r\n\r\nErleben Sie die Zukunft des Gamings. So unterstütz die innovative Grafikkarte von MSI unter anderem DirectX 12. Dank der NVIDIA® G-Sync™-Technologie stehen Ihnen bedeutet die flüssigsten, schnellsten und aufregendsten Gaming-Erlebnisse bevor. Screen-Tearing, Bildruckeln oder Input-Lags gehören mit der GeForce® GTX 1050 Ti GAMING X 4G der Vergangenheit an. Freuen Sie sich stattdessen auf Ultra-High Definition (UHD) und eine weitaus schärfere und realitätsgetreuere Detaildarstellung in Games.', 148.99, '1125753_0__68857.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
