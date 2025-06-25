-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 02:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neatrasta`
--

-- --------------------------------------------------------

--
-- Table structure for table `atsiliepimas`
--

CREATE TABLE `atsiliepimas` (
  `aID` int(11) NOT NULL,
  `atsiliepimas` text COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `vartoID` int(11) NOT NULL,
  `paroID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `atsiliepimas`
--

INSERT INTO `atsiliepimas` (`aID`, `atsiliepimas`, `data`, `vartoID`, `paroID`) VALUES
(1, 'Neįtikėtinos iliustracijos, labai įdomus ir nematytas piešimo stilius.', '2021-12-20', 1, 1),
(2, 'Nuostabu, taip ir toliau.', '2021-12-20', 2, 1),
(3, 'Gražūs darbai, matosi, jog įdėta labai daug darbo, detalu, įdomu.', '2021-12-20', 6, 1),
(4, 'Labai realistiškos, įdomus stilius, atrodo lyg pieštos ranka ant popieriaus, bet jos pieštos programomis, nerealu!', '2021-12-21', 5, 1),
(5, 'Puikiai sužaista su apšvietimu.', '2021-12-15', 3, 3),
(6, 'Nematyta ir labai gražu.', '2021-12-17', 6, 3),
(7, 'Puikiai atspindėta tema.', '2021-12-13', 1, 3),
(8, 'Nuostabios nuotraukos ir originalios stiklinės figūrėles.', '2021-12-13', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nuotrauka`
--

CREATE TABLE `nuotrauka` (
  `nID` int(11) NOT NULL,
  `mNuotrauka` varchar(50) COLLATE utf8_bin NOT NULL,
  `dNuotrauka` varchar(50) COLLATE utf8_bin NOT NULL,
  `nPavadinimas` tinytext COLLATE utf8_bin NOT NULL,
  `nAprasymas` text COLLATE utf8_bin NOT NULL,
  `metai` int(4) NOT NULL,
  `parID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `nuotrauka`
--

INSERT INTO `nuotrauka` (`nID`, `mNuotrauka`, `dNuotrauka`, `nPavadinimas`, `nAprasymas`, `metai`, `parID`) VALUES
(1, 'e1.jpg', 'De1.jpg', 'Portretas', 'Portretas kurtas naudojantis „Adobe Photoshop“.', 2021, 1),
(2, 'e2.jpg', 'De2.jpg', 'Niekada nenustojanti dirbti', 'Iliustracija kurta naudojantis „Adobe Photoshop“.', 2020, 1),
(3, 'e3.jpg', 'De3.jpg', 'Portretas', 'Portretas kurtas naudojantis „Adobe Photoshop“.', 2021, 1),
(4, 'e4.jpg', 'De4.jpg', 'Plukė', 'Ameninio prekės ženklo „Plukė“ logotipas. Kurtas naudojantis „Adobe Illustrator“.', 2021, 1),
(5, 'e5.jpg', 'De5.jpg', 'Stilius', 'Iliustracija kurta naudojantis „Adobe Photoshop“.', 2020, 1),
(6, 'e6.jpg', 'De6.jpg', 'Mergina', 'Iliustracija kurta naudojantis „Adobe Photoshop“.', 2020, 1),
(7, 'e7.jpg', 'De7.jpg', 'Magija', 'Iliustracija kurta naudojantis „Adobe Photoshop“.', 2021, 1),
(8, 'e8.jpg', 'De8.jpg', 'Laukimas', 'Iliustracija kurta naudojantis „Adobe Photoshop“.', 2018, 1),
(9, 'r1.jpg', 'Dr1.jpg', 'Stiklinės figūrėles nr1.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(10, 'r2.jpg', 'Dr2.jpg', 'Stiklinės figūrėles nr2.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(11, 'r3.jpg', 'Dr3.jpg', 'Stiklinės figūrėles nr3.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(12, 'r4.jpg', 'Dr4.jpg', 'Stiklinės figūrėles nr4.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(13, 'r5.jpg', 'Dr5.jpg', 'Stiklinė figūrėlė iš arti nr1.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(14, 'r6.jpg', 'Dr6.jpg', 'Stiklinės figūrėles nr5.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(15, 'r7.jpg', 'Dr7.jpg', 'Stiklinė figūrėlė iš arti nr2.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(16, 'r8.jpg', 'Dr8.jpg', 'Stiklinė figūrėlė iš arti nr3.', 'Nuotraukos fotografuotos skaitmeniniu fotoaparatu.', 2020, 3),
(17, 'r21.jpg', 'Dr21.jpg', 'CD viršelis nr1.', 'Iliustracija padaryta raižant CD diską specialia adata, dažant išraižytą paviršių ir atspaudžiant atvaizdą ant popieriaus.', 2016, 2),
(18, 'r22.jpg', 'Dr22.jpg', 'CD viršelis nr2.', 'Iliustracija padaryta raižant CD diską specialia adata, dažant išraižytą paviršių ir atspaudžiant atvaizdą ant popieriaus.', 2016, 2),
(19, 'r23.jpg', 'Dr23.jpg', 'CD viršelis nr3.', 'Iliustracija padaryta raižant CD diską specialia adata, dažant išraižytą paviršių ir atspaudžiant atvaizdą ant popieriaus.', 2016, 2),
(20, 'r24.jpg', 'Dr24.jpg', 'Avinas nr1.', 'Iliustracija daryta atspaudžiant trafarretą ant popieriaus ir pripiešiant detales ranka.', 2016, 2),
(21, 'r25.jpg', 'Dr25.jpg', 'Avinas nr2.', 'Iliustracija daryta atspaudžiant trafarretą ant popieriaus ir pripiešiant detales ranka.', 2016, 2),
(22, 'r26.jpg', 'Dr26.jpg', 'Avinas nr3.', 'Iliustracija išgauta naudojant padarytą trafaretą iš popieriaus ir purškiamus dažus.', 2016, 2),
(23, 'r27.jpg', 'Dr27.jpg', 'Natiurmortas kitaip nr1.', 'Darbas padarytas su tušu ir plunksna.', 2016, 2),
(24, 'r28.jpg', 'Dr28.jpg', 'Natiurmortas kitaip nr2.', 'Darbas padarytas su tušu ir plunksna.', 2016, 2);

-- --------------------------------------------------------

--
-- Table structure for table `paroda`
--

CREATE TABLE `paroda` (
  `pID` int(11) NOT NULL,
  `pPavadinimas` tinytext COLLATE utf8_bin NOT NULL,
  `pradzia` date NOT NULL,
  `pabaiga` date NOT NULL,
  `vartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `paroda`
--

INSERT INTO `paroda` (`pID`, `pPavadinimas`, `pradzia`, `pabaiga`, `vartID`) VALUES
(1, 'Skaitmeninės iliustracijos', '2021-12-20', '2021-12-26', 3),
(2, 'Iliustracijos', '2021-11-29', '2021-12-05', 2),
(3, 'Fotografijos tema „Žmogus trapus kaip stiklas“', '2021-12-13', '2021-12-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `uzklausa`
--

CREATE TABLE `uzklausa` (
  `uID` int(11) NOT NULL,
  `uPavadinimas` tinytext COLLATE utf8_bin NOT NULL,
  `uAprasymas` text COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `varID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `uzklausa`
--

INSERT INTO `uzklausa` (`uID`, `uPavadinimas`, `uAprasymas`, `data`, `varID`) VALUES
(1, 'Pasaulis kitaip', 'Skaitmeninių fotografijų ciklas, kuriose pateikiu atrodo ne visiems pastebimus dalykus, savo požiūrį į pasaulį.', '2021-12-15', 1),
(2, 'Plukės prekės ženklo vizualinis identitetas', 'Mano asmeninio prekės ženklo vizualinis identiteta, nuo logotipo iki reklamų pavyzdžių. Prekės ženklas skirtas animacijos studijai.', '2021-12-17', 3),
(3, 'Nespalvotai spalvota', 'Nespalvotai spalvota, tai pieštuku piešti darbai, kurie įamžina įsimintiniausius įvykius mano gyvenime, kurie kelia šiltus prisiminimus, nors ir yra nupiešti pilku pieštuku ant balto popieriaus.', '2021-12-18', 6),
(4, 'Spalvotos gatvės', 'Ant apleistų pastatų piešti graffiti darbai, kurie pagyvina pastatus, pagražina aplinką ir nespalvotas niūrias gatves paverčia meno paroda.', '2021-12-20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `vartotojas`
--

CREATE TABLE `vartotojas` (
  `vID` int(11) NOT NULL,
  `vardas` varchar(20) COLLATE utf8_bin NOT NULL,
  `pavarde` varchar(40) COLLATE utf8_bin NOT NULL,
  `nuotrauka` varchar(50) COLLATE utf8_bin NOT NULL,
  `elpastas` varchar(70) COLLATE utf8_bin NOT NULL,
  `telnr` varchar(12) COLLATE utf8_bin NOT NULL,
  `fb` varchar(70) COLLATE utf8_bin NOT NULL,
  `ig` varchar(70) COLLATE utf8_bin NOT NULL,
  `apie` text COLLATE utf8_bin NOT NULL,
  `slaptazodis` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vartotojas`
--

INSERT INTO `vartotojas` (`vID`, `vardas`, `pavarde`, `nuotrauka`, `elpastas`, `telnr`, `fb`, `ig`, `apie`, `slaptazodis`) VALUES
(1, 'Vaiva', 'Noraitytė', 'vartotojas.png', 'v.nor@gmail.com', '+37064651980', 'Vaiva Noraitytė', 'vaiva_nor', 'Esu kūrybinga,\r\nHumoro jausmo man nestinga.\r\nNaujos mintys kaip žuvys užkimba,\r\nMano galvoje niekad nesninga.', '1d61ebd0a67920a95931bc8d300f9058'),
(2, 'Ūla', 'Repšytė', 'ula.png', 'u.rep@gmail.com', '+37068482576', 'Ūla Repšytė', 'u_rep', 'Esu Ūla Repšytė. Visada stengiuosi savęs neapriboti, taigi nieko nuostabaus, kad mano kūryba aprėpia keletą sričių – priklausomai nuo to, kokį rezultatą ar darbą siekiu sukurti, renkuosi, kurios priemonės geriausiai leis realizuoti mano idėjas.', 'e35d9362e01ccaa778e13ea23af86cee'),
(3, 'Saulė', 'Dainytė', 'saule.png', 's.dain@gmail.com', '+37068971456', 'Saulė Dainytė', 'saule_dain', 'Esu Saulė Dainytė. Turiu puikius piešimo įgūdžius tiek skaitmeninėje, tiek neskaitmeninėje erdvėje. Siekiu mokytis ir augti ne tik kaip menininkė, bet ir kaip profesionali iliustratorė, grafikos dizainerė. Svajoju tapti animatore ir tikslingai siekiu savo tikslo.', 'd79583c9a7e658bbbc2576903bedfb6a'),
(4, 'Vaiva', 'Noraitytė', 'vartotojas.png', 'admin@neatrasta.lt', '+37064761981', 'Vaiva Noraitytė', 'vaiva.noraityte', '-', '0192023a7bbd73250516f069df18b500'),
(5, 'Polis', 'Pakalnis', 'polis.png', 'pol.pakal@gmail.com', '+37068831654', 'Polis Pakalnis', 'p_pakal', 'Pieštukas - geriausias mano ginklas. Juo galiu perteikti ne tik žodžius, bet ir vaizdus, kurie priverčia susimąstyti.', 'cd09389ba4bf0f1f8e673f6579dc1752'),
(6, 'Natas', 'Repšys', 'vartotojas.png', 'natas.repsys@gmail.com', '+37068462295', 'Natas Repšys', 'repšys_n', 'Esu Grafiti stiliaus meistras. Net nuobodžiausias pastatas gali tapti gražiausiu meno kūriniu.', 'afb4a5968b0c2e3acca95203b9f08437');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atsiliepimas`
--
ALTER TABLE `atsiliepimas`
  ADD PRIMARY KEY (`aID`),
  ADD KEY `vartoID` (`vartoID`),
  ADD KEY `paroID` (`paroID`);

--
-- Indexes for table `nuotrauka`
--
ALTER TABLE `nuotrauka`
  ADD PRIMARY KEY (`nID`),
  ADD KEY `parID` (`parID`);

--
-- Indexes for table `paroda`
--
ALTER TABLE `paroda`
  ADD PRIMARY KEY (`pID`),
  ADD KEY `vartID` (`vartID`);

--
-- Indexes for table `uzklausa`
--
ALTER TABLE `uzklausa`
  ADD PRIMARY KEY (`uID`),
  ADD KEY `varID` (`varID`);

--
-- Indexes for table `vartotojas`
--
ALTER TABLE `vartotojas`
  ADD PRIMARY KEY (`vID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atsiliepimas`
--
ALTER TABLE `atsiliepimas`
  MODIFY `aID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nuotrauka`
--
ALTER TABLE `nuotrauka`
  MODIFY `nID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `paroda`
--
ALTER TABLE `paroda`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uzklausa`
--
ALTER TABLE `uzklausa`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vartotojas`
--
ALTER TABLE `vartotojas`
  MODIFY `vID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atsiliepimas`
--
ALTER TABLE `atsiliepimas`
  ADD CONSTRAINT `atsiliepimas_ibfk_1` FOREIGN KEY (`vartoID`) REFERENCES `vartotojas` (`vID`),
  ADD CONSTRAINT `atsiliepimas_ibfk_2` FOREIGN KEY (`paroID`) REFERENCES `paroda` (`pID`);

--
-- Constraints for table `nuotrauka`
--
ALTER TABLE `nuotrauka`
  ADD CONSTRAINT `nuotrauka_ibfk_1` FOREIGN KEY (`parID`) REFERENCES `paroda` (`pID`);

--
-- Constraints for table `paroda`
--
ALTER TABLE `paroda`
  ADD CONSTRAINT `paroda_ibfk_1` FOREIGN KEY (`vartID`) REFERENCES `vartotojas` (`vID`);

--
-- Constraints for table `uzklausa`
--
ALTER TABLE `uzklausa`
  ADD CONSTRAINT `uzklausa_ibfk_1` FOREIGN KEY (`varID`) REFERENCES `vartotojas` (`vID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
