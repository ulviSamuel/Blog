-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 02, 2024 alle 17:45
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogulivi`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tmodificapost`
--

CREATE TABLE `tmodificapost` (
  `idModifica` int(11) NOT NULL,
  `idPost` int(11) DEFAULT NULL,
  `dataModificaPost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tmodificapost`
--

INSERT INTO `tmodificapost` (`idModifica`, `idPost`, `dataModificaPost`) VALUES
(1, 1, '2024-01-29'),
(2, 2, '2024-01-18'),
(3, 3, '2024-01-13'),
(4, 4, '2024-01-01'),
(5, 5, '2024-01-31');

-- --------------------------------------------------------

--
-- Struttura della tabella `tpost`
--

CREATE TABLE `tpost` (
  `idPost` int(11) NOT NULL,
  `titoloPost` varchar(20) DEFAULT NULL,
  `descrizionePost` text DEFAULT NULL,
  `dataCreazionePost` date DEFAULT NULL,
  `pathFotoPost` varchar(255) DEFAULT NULL,
  `dataEliminazionePost` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tpost`
--

INSERT INTO `tpost` (`idPost`, `titoloPost`, `descrizionePost`, `dataCreazionePost`, `pathFotoPost`, `dataEliminazionePost`) VALUES
(1, 'Montagna', 'Imponente e maestosa, la montagna si erge fieramente verso il cielo, un gigante di pietra e neve che sfida il tempo e la natura stessa. Le sue vette scoscese si perdono tra le nuvole, mentre i versanti rocciosi e innevati raccontano storie millenarie di avventure e conquiste. L\'aria fresca e cristallina, carica di promesse e misteri, avvolge la sua imponente sagoma, mentre la luce del sole dipinge sfumature dorate sulle cime innevate. La montagna, silenziosa testimone dei segreti della terra, invita gli avventurieri audaci a scalare le sue vette e a immergersi nella sua grandiosità senza tempo.', '2024-01-29', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', NULL),
(2, 'Spiaggia', 'Un\'incantevole spiaggia al tramonto, un\'ode alla serenità e alla bellezza della natura. Il cielo si tinge di caldi toni arancioni e rosa, mentre il sole, sospeso sull\'orizzonte, dipinge la scena con una luce dorata che si riflette sull\'acqua cristallina. Le onde cullano dolcemente la sabbia dorata, creando un\'armonia perfetta tra terra e mare. La brezza leggera porta con sé il dolce profumo del mare e delle alghe, avvolgendo l\'ambiente in un abbraccio rassicurante. Le silhouette delle palme danzano delicatamente contro il cielo infuocato, aggiungendo un tocco di magia a questo spettacolo della natura. È un momento di pace e tranquillità, un\'esperienza che nutre l\'anima e lascia un\'impronta indelebile nel cuore di chiunque abbia il privilegio di assistervi.', '2024-01-28', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoSpiaggia.jpg', NULL),
(3, 'New York', 'Una scintillante New York emerge nel buio della notte, trasformandosi in una città di luce e movimento incessante. I grattacieli si ergono verso il cielo notturno come titanici monoliti, illuminati da una miriade di luci che si stagliano contro il buio. I riflessi scintillanti dei grattacieli danzano sull\'acqua tranquilla del fiume Hudson, creando uno spettacolo di luci che si riflettono in un gioco incantato di colori e ombre. I viali urbani sono animati dal flusso costante di luci dei veicoli e dal vociare sommesso dei passanti, mentre le insegne al neon brillano con promesse di divertimento e avventura. In lontananza, l\'orizzonte è punteggiato da una sinfonia di edifici illuminati, che si perdono nell\'infinito della notte urbana. È una città che non dorme mai, un labirinto di emozioni e possibilità, dove ogni angolo nasconde una storia da raccontare e un sogno da inseguire.', '2024-01-27', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoNewYork.jpg', NULL),
(4, 'Quarto Post', 'Questa è la descrizione del quarto post.', '2024-01-26', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', '2024-01-09'),
(5, 'Quinto Post', 'Questa è la descrizione del quinto post.', '2024-01-25', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', '2024-01-18'),
(6, 'Sesto Post', 'Questa è la descrizione del sesto post.', '2024-01-24', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', '2024-01-29'),
(7, 'Settimo Post', 'Questa è la descrizione del settimo post.', '2024-01-23', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', '2024-01-08'),
(8, 'Ottavo Post', 'Questa è la descrizione dell\'ottavo post.', '2024-01-22', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', '2024-01-25'),
(9, 'Nono Post', 'Questa è la descrizione del nono post.', '2024-01-21', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', '2024-01-09'),
(10, 'Decimo Post', 'Questa è la descrizione del decimo post.', '2024-01-20', 'http://localhost/quinte/5f/ulivi/Informatica/HTML/ImmaginiBlog/fotoMontagna.jpg', '2024-01-09');

-- --------------------------------------------------------

--
-- Struttura della tabella `tutente`
--

CREATE TABLE `tutente` (
  `idUtente` int(11) NOT NULL,
  `userName` varchar(10) DEFAULT NULL,
  `passWord` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tutente`
--

INSERT INTO `tutente` (`idUtente`, `userName`, `passWord`) VALUES
(1, 'user1', 'password1'),
(2, 'user2', 'password2'),
(3, 'user3', 'password3'),
(4, 'user4', 'password4'),
(5, 'user5', 'password5'),
(6, 'user6', 'password6'),
(7, 'user7', 'password7'),
(8, 'user8', 'password8'),
(9, 'user9', 'password9'),
(10, 'user10', 'password10');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `tmodificapost`
--
ALTER TABLE `tmodificapost`
  ADD PRIMARY KEY (`idModifica`),
  ADD KEY `idPost` (`idPost`);

--
-- Indici per le tabelle `tpost`
--
ALTER TABLE `tpost`
  ADD PRIMARY KEY (`idPost`);

--
-- Indici per le tabelle `tutente`
--
ALTER TABLE `tutente`
  ADD PRIMARY KEY (`idUtente`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `tmodificapost`
--
ALTER TABLE `tmodificapost`
  MODIFY `idModifica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `tpost`
--
ALTER TABLE `tpost`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `tutente`
--
ALTER TABLE `tutente`
  MODIFY `idUtente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `tmodificapost`
--
ALTER TABLE `tmodificapost`
  ADD CONSTRAINT `tmodificapost_ibfk_1` FOREIGN KEY (`idPost`) REFERENCES `tpost` (`idPost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
