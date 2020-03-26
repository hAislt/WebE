-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Mrz 2020 um 14:25
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
-- Tabellenstruktur für Tabelle `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `beschreibung` text CHARACTER SET utf8 NOT NULL,
  `bescheibung_kurz` text CHARACTER SET utf8 NOT NULL,
  `preis` double NOT NULL,
  `bild` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `name`, `beschreibung`, `bescheibung_kurz`, `preis`, `bild`, `link`) VALUES
(1, '6GB MSI GeForce GTX 1660 ARMOR 6G OC Aktiv PCIe 3.0 x16 (Retail)', 'Seit dem 14.03.2019 im Sortiment\r\n\r\nTURING-SHADER\r\nTuring-Shader ermöglichen beeindruckende Leistungssteigerungen für aktuelle Spiele durch die gleichzeitige Ausführung von Gleitkomma- und Ganzzahloperationen, adaptive Shading-Technik und einer neuen Speicherarchitektur mit doppelt so großem Cache im Vergleich zu Vorgänger-Grafikkarten.\r\n\r\nSTARKE PERFORMANCE\r\nSei bereit für aktuelle Spiele mit der GeForce GTX 1660 Ti, die auf einem Level mit der GeForce GTX 1070 steht.\r\n\r\nGEFORCE EXPERIENCE\r\nFange dein Spielerlebnis mit Videos und Screenshots ein und teile es mit der Welt, auch in einem Livestream. Halte deine GeForce-Treiber auf dem neusten Stand und optimiere deine Spiele-Einstellungen. GeForce Experience™ ist eine essentielle Software für die Verwendung deiner GeForce-Grafikkarte.\r\n\r\nDIE ARMOR-SERIE\r\nStylisch zocken und sich von der Masse abheben - beides wird von unseren ARMOR-Modellen ermöglicht. ARMOR-Grafikkarten sind die perfekten Komponenten für Spieler und Case-Modder, die auf der Suche nach etwas anderem sind. Hier trifft Gaming auf Klasse.\r\n\r\nDAS ARMOR-KÜHLSYSTEM\r\nZwei preisgekrönte TORX 2.0 Lüfter mit Doppelkugellager machen das Kühlsystem der ARMOR-Grafikkarten zu einer überaus zuverlässigen Kühllösung für lange Gaming-Sessions.\r\n\r\nBRILLIANZ AUF DER SPUR\r\nUnter all diesem Material befinden sich mehrschichtige Leiterbahnen, die das Printed Circuit Board ausmachen. Diese Bahnen verbinden alle wichtigen Komponenten miteinander und ermöglichen diesen die blitzschnelle Kommunikation untereinander.\r\n\r\nDIE BESTE ERFAHRUNG\r\nHole das Beste aus deiner MSI Grafikkarte heraus. Die verfügbare Software bietet unzählige Anpassungsmöglichkeiten, um die gewünschte Leistung in Spielen zu sichern.', 'GPU Modell: 	GeForce GTX 1050 Ti\r\nEdition: 	Gaming X 4G\r\nCodename: 	GP107-400-A1\r\nSchnittstelle: 	PCIe 3.0 x16\r\nGPU Anzahl: 	Single GPU\r\nGPU Takt: 	1379MHz\r\nBoost Takt: 	1493MHz', 241.99, '1300282_0__72667.jpg', 'gtx1.php'),
(2, '4GB MSI GeForce GTX 1050 Ti GAMING X 4G Aktiv PCIe 3.0 x16', 'Seit dem 22.10.2016 im Sortiment\r\n\r\nMSI präsentiert mit der GeForce® GTX 1050 Ti GAMING X 4G eine Grafikkarte, die beste Leistung mit modernster Technik in einem optimalen Gamingumfeld kombiniert. Die Grafikkarte verfügt über die moderne MSI TORX 2.0 Technik. Mithilfe dieser erklimmt TWIN FROZR VI eine neue Leistungsebene der Grafikkartenkühlung. TORX 2.0 Kühler generieren 22% mehr Luftdruck und sind zugleich leiser.\r\n\r\nUnter dem Cover der GeForce® GTX 1050 Ti GAMING X 4G befindet sich ein Meisterstück der Ingenieurskunst, das dazu entwickelt wurde die Grafikkarte absolut kühl zu halten. Jedes einzelne Detail des komplizierten Kühlkörpers trägt dazu bei, ein kühles und leises Spielerlebnis zu bieten. Durch den Einsatz fortschrittlicher Aerodynamik lenkt die Luftstrom-Kontrolltechnik mehr Luft zu den TWIN FROZR VI Heatpipes. Die speziellen Ableiter auf dem Kühlkörper vergrößern dessen Oberfläche, was sowohl die Temperatur als auch die Leistung spürbar positiv beeinflusst.\r\n\r\nErleben Sie die Zukunft des Gamings. So unterstütz die innovative Grafikkarte von MSI unter anderem DirectX 12. Dank der NVIDIA® G-Sync™-Technologie stehen Ihnen bedeutet die flüssigsten, schnellsten und aufregendsten Gaming-Erlebnisse bevor. Screen-Tearing, Bildruckeln oder Input-Lags gehören mit der GeForce® GTX 1050 Ti GAMING X 4G der Vergangenheit an. Freuen Sie sich stattdessen auf Ultra-High Definition (UHD) und eine weitaus schärfere und realitätsgetreuere Detaildarstellung in Games.', 'GPU Modell: 	GeForce RTX 2060\r\nEdition: 	Gaming Z\r\nCodename: 	TU106\r\nSchnittstelle: 	PCIe 3.0 x16\r\nGPU Anzahl: 	Single GPU\r\nGPU Takt: 	1365MHz\r\nBoost Takt: 	1830MHz\r\nShader Model: 	6.3', 148.99, '1125753_0__68857.jpg', 'gtx2.php'),
(3, '16GB G.Skill Aegis DDR4-2666 DIMM CL19 Dual Kit', 'G.Skill - leistungsfähige Grafikkarten\r\n\r\nDer taiwanesische Hersteller G.Skill wurde 1989 gegründet und hat sich vor allem auf die Produktion von hochwertigem Arbeitsspeicher und auf überaus funktionale Gaming-Mäuse und Tastaturen spezialisiert. Ganz gleich, ob Gaming-Experte, Content Creator oder PC-Building-Enthusiast: G.Skill überzeugt mit unschlagbarer Performance und dem Willen, das Unternehmen und die eigenen Produkte stetig weiter zu verbessern.', 'Modellname: 	Aegis\r\nGesamtkapazität: 	16GB\r\nAnzahl der Module: 	2x\r\nKapazität der Einzelmodule: 	8192MB\r\nArt des Speichers: 	DDR4-2666\r\nJEDEC Norm: 	PC4-21300U\r\nSpeichertyp: 	unbuffered\r\nBauform: 	DIMM\r\nSpeicherinterface: 	DDR4', 74.99, '1237318_0__8850603.jpg', 'ram.php'),
(4, 'AMD Ryzen 3 3200G 4x 3.60GHz So.AM4 BOX', 'Seit dem 04.06.2019 im Sortiment\r\n\r\nBewährte Technologien und starke Leistung mit dem CPU AMD Ryzen™ 3 3200G.\r\n\r\nAMD Ryzen™ Prozessoren der 3. Generation mit Radeon™ Grafikeinheit kombinieren die Leistung von Zen+\' und Vega\', um anspruchsvollsten Gamern beeindruckende 1080p-Spielerlebnisse zu bieten, alles auf nur einem Prozessor. Nach dem Spielen erledigen Sie Arbeiten leichter und schneller dank AMD Ryzen™ Prozessoren der 2. Genaration mit Radeon™ Grafikeinheit. Office-Apps, Fotobearbeitung, Surfen im Web und Videostreaming - ein Kinderspiel dank überragender Multithread-Verarbeitung. Ryzen™ Prozessoren mit Radeon™ Grafikeinheit liefern hohe Leistung, die man sehen und fühlen kann.\r\n\r\nAls Teil der Ryzen™ 3000 Serie enthalten die AMD Ryzen™ Desktop Prozessoren eine leistungsstarke und schnelle Radeon™ Grafikeinheit. Die Kombination aus starken Ryzen™ Prozessoren und leistungsfähiger Radeon™ Grafikeinheit ermöglicht Hochleistungs-Gaming ohne separate Grafikkarte, auf den Millionen PC-Spieler weltweit vertrauen.\r\n\r\nDie Ryzen™ Desktop-Prozessoren der 3. Generation basieren auf der 7nm Zen 2-Architektur und bieten mehr Kerne, höhere Taktraten und eine verbesserte Energieeffizienz. Weitere Features von Ryzen™ 3000 sind AMD GameCache, Precision Boost 2 oder die AMD StoreMI Technologie.', 'Kerne/Threads 	4/4\r\nMax. Boost** 	Bis zu 4,0 GHz\r\nCache 	6 MB\r\nTDP 	65 W\r\nPCIe-Version 	3.0\r\nFür Übertaktung freigeschaltet1 	Ja\r\nKühlung 	Wraith Stealth\r\nSockel 	AM4', 114.99, '1313641_0__73060.jpg', 'cpu.php');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id_2` (`product_id`,`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
