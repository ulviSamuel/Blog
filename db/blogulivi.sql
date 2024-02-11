-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 11, 2024 alle 18:19
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

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
  `idPost` int(11) NOT NULL,
  `dataModificaPost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `tpost`
--

CREATE TABLE `tpost` (
  `idPost` int(11) NOT NULL,
  `titoloPost` varchar(50) NOT NULL,
  `descrizionePost` text NOT NULL,
  `dataCreazionePost` date NOT NULL,
  `pathFotoPost` varchar(255) NOT NULL,
  `dataEliminazionePost` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `tpost`
--

INSERT INTO `tpost` (`idPost`, `titoloPost`, `descrizionePost`, `dataCreazionePost`, `pathFotoPost`, `dataEliminazionePost`) VALUES
(20, 'Maestosa cima innevata: uno spettacolo naturale', 'Una montagna imponente e maestosa si staglia nel paesaggio, dominando l\'orizzonte con la sua grandezza. Le vette innevate si ergono fieramente verso il cielo, mentre i pendii scoscesi e le creste rocciose conferiscono un senso di possenza e solennità. La luce del sole dipinge sfumature dorate sulle cime, creando uno spettacolo di bellezza senza tempo. Qui, nella quiete delle sue valli e delle sue cime, la natura regna sovrana, offrendo un rifugio di pace e serenità. Osservare questa montagna è un\'esperienza che toglie il fiato, un incontro con la maestosità della natura che ci ricorda la nostra umiltà di fronte alla sua grandezza eterna.', '2024-02-07', 'img/bellissimo-paesaggio-innevato-con-le-montagne.jpg', NULL),
(21, 'Armonia nel deserto: la bellezza dell\'arido', 'Un deserto arido si estende all\'infinito, una vasta distesa di sabbia dorata che si perde all\'orizzonte. Il sole cocente dipinge il paesaggio, creando un panorama mozzafiato di bellezza brulla e selvaggia. Qui, nella vastità di questo deserto, la vita si adatta con grazia e forza alla durezza del clima. Le dune di sabbia si ergono come onde nel mare, mentre le rocce levigate testimoniano l\'incessante lavoro del vento nel plasmare la terra. Esplorare questo deserto è un\'esperienza unica, un viaggio attraverso un paesaggio selvaggio e suggestivo che cattura l\'immaginazione e riempie l\'anima di meraviglia. Respira l\'aria secca e calda del deserto e lasciati trasportare dalla bellezza dell\'arido, una bellezza aspra e selvaggia che ti lascia senza fiato.', '2024-01-16', 'img/iStock-1174299397-1080x720.jpg', NULL),
(22, 'Incanto verde: la vita nella giungla', 'Una giungla lussureggiante si apre davanti ai tuoi occhi, un mare di verde che si estende fino all\'orizzonte. Gli alberi giganti si ergono maestosi, formando un tetto di foglie che filtra la luce del sole, creando un\'atmosfera di magia e mistero. La vita pulsa in ogni angolo di questa giungla, con piante rigogliose e animali esotici che si muovono tra i rami. Il canto degli uccelli e il fruscio delle foglie riempiono l\'aria, creando una sinfonia naturale che incanta i sensi. Qui, nella densità della vegetazione, è possibile immergersi nella bellezza della natura e scoprire la sua ricchezza e diversità. Ogni passo ti porta a una nuova scoperta, un nuovo incontro con la meraviglia della vita selvaggia. Esplorare questa giungla è un\'esperienza unica, un viaggio attraverso un mondo di avventure e meraviglie, dove la bellezza e la grandezza della natura ti avvolgono e ti abbracciano.', '2024-01-06', 'img/Paxzasso1.jpg', NULL),
(23, 'La bellezza fredda: la vita nella tundra', 'La tundra si estende come un mare di desolata bellezza, con paesaggi vasti e aperti che si perdono all\'orizzonte. Qui, il terreno è punteggiato da muschi, licheni e arbusti bassi, adattati alla vita in un ambiente ostile e gelido. La tundra è un mondo di silenziosa grandezza, dove la quiete e la solitudine regnano sovrane. Il cielo infinito si estende sopra di te, spesso attraversato dalle sfumature brillanti dell\'aurora boreale. La luce del sole illumina la tundra con una luce dorata, creando un paesaggio di bellezza fredda e imperturbabile. Qui, tra le basse colline e i corsi d\'acqua ghiacciati, la vita selvatica trova un rifugio invernale, mentre gli uccelli migratori solcano i cieli in cerca di cibo e riparo. Esplorare la tundra è un\'esperienza unica, un viaggio attraverso un paesaggio selvaggio e inospitale che ti lascia senza fiato e ti ricorda la fragilità e la resilienza della vita nella natura più estrema.', '2023-02-10', 'img/64b91d3442595e5ef86337fe.jpg', NULL),
(24, 'Per forzas', 'Imponente e maestosa, la montagna si erge fieramente verso il cielo, un gigante di pietra e neve che sfida il tempo e la natura stessa. Le sue vette scoscese si perdono tra le nuvole, mentre i versanti rocciosi e innevati raccontano storie millenarie di avventure e conquiste. L\'aria fresca e cristallina, carica di promesse e misteri, avvolge la sua imponente sagoma, mentre la luce del sole dipinge sfumature dorate sulle cime innevate. La montagna, silenziosa testimone dei segreti della terra, invita gli avventurieri audaci a scalare le sue vette e a immergersi nella sua grandiosità senza tempo.', '2024-02-11', 'img/Paxzasso1.jpg', '2024-02-11');

-- --------------------------------------------------------

--
-- Struttura della tabella `tutente`
--

CREATE TABLE `tutente` (
  `idUtente` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `passWord` varchar(50) NOT NULL
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
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
