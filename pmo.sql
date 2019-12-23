-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jun-2019 às 00:19
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apontamento`
--

CREATE TABLE `apontamento` (
  `ID_APON` int(11) NOT NULL,
  `DATA` varchar(10) NOT NULL,
  `CLIENTE` varchar(250) NOT NULL,
  `PROJETO` varchar(250) NOT NULL,
  `ENTRADA` varchar(15) NOT NULL,
  `T_ALMOCO` varchar(15) NOT NULL,
  `SAIDA` varchar(15) NOT NULL,
  `HORA` varchar(15) NOT NULL,
  `ALMOCO` varchar(15) NOT NULL,
  `ESTADIA` varchar(15) NOT NULL,
  `KM` varchar(15) NOT NULL,
  `PEDAGIO` varchar(15) NOT NULL,
  `HOSP` varchar(15) NOT NULL,
  `TAXI` varchar(15) NOT NULL,
  `DESP` varchar(15) NOT NULL,
  `OBS` varchar(250) NOT NULL,
  `CONSUL` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `apontamento`
--

INSERT INTO `apontamento` (`ID_APON`, `DATA`, `CLIENTE`, `PROJETO`, `ENTRADA`, `T_ALMOCO`, `SAIDA`, `HORA`, `ALMOCO`, `ESTADIA`, `KM`, `PEDAGIO`, `HOSP`, `TAXI`, `DESP`, `OBS`, `CONSUL`) VALUES
(19, '2018-06-12', 'Empresa ABC', '24042018S - Consultoria Desenvolvimento', '14:00', '00:00', '17:30', '3,30', '0,00', '0,00', '0,00', '0,00', '0,00', '0,00', '0,00', 'Infraestrutura', 'Eduardo Henrique Silva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `ID_CARGO` int(11) NOT NULL,
  `CARGO` varchar(250) NOT NULL,
  `CLT` varchar(15) NOT NULL,
  `VA` varchar(15) NOT NULL,
  `VR` varchar(15) NOT NULL,
  `PREM` varchar(15) NOT NULL,
  `TRI` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`ID_CARGO`, `CARGO`, `CLT`, `VA`, `VR`, `PREM`, `TRI`) VALUES
(35, 'Junior 1', '2300,00', '400,00', '360,00', '400,00', '1000,00'),
(36, 'junior 2', '3100,00', '400,00', '360,00', '400,00', '1000,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultores`
--

CREATE TABLE `consultores` (
  `ID_CONSUL` int(11) NOT NULL,
  `NOME` varchar(250) NOT NULL,
  `PJ` varchar(15) NOT NULL,
  `VT` varchar(15) NOT NULL,
  `SAUDE` varchar(15) NOT NULL,
  `VIDA` varchar(15) NOT NULL,
  `CEL` varchar(15) NOT NULL,
  `CUSTO` varchar(15) NOT NULL,
  `CARGO` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consultores`
--

INSERT INTO `consultores` (`ID_CONSUL`, `NOME`, `PJ`, `VT`, `SAUDE`, `VIDA`, `CEL`, `CUSTO`, `CARGO`) VALUES
(27, 'Eduardo Henrique Silva', '0,00', '0,00', '317,62', '35,00', '230,00', '80,89', 'Junior 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mif`
--

CREATE TABLE `mif` (
  `ID_MIF` int(11) NOT NULL,
  `PROJETO` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `MEMORIA_CALCULO` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `CRONOGRAMA_PROJ` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `EASY_PROJ` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_ATA` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_ABERTURA` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_ABERTURA_ASS` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_TAREFA` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_ENCERRAMENTO` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_ENCERRAMENTO_ASS` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_STATUS` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_ENGENHARIA` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `MIF_ENGENHARIA_ASS` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `mif`
--

INSERT INTO `mif` (`ID_MIF`, `PROJETO`, `MEMORIA_CALCULO`, `CRONOGRAMA_PROJ`, `EASY_PROJ`, `MIF_ATA`, `MIF_ABERTURA`, `MIF_ABERTURA_ASS`, `MIF_TAREFA`, `MIF_ENCERRAMENTO`, `MIF_ENCERRAMENTO_ASS`, `MIF_STATUS`, `MIF_ENGENHARIA`, `MIF_ENGENHARIA_ASS`) VALUES
(22, '24042018S - Consultoria Desenvolvimento', '0', '0', '1', '0', '1', '1', '0', '0', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apontamento`
--
ALTER TABLE `apontamento`
  ADD PRIMARY KEY (`ID_APON`);

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`ID_CARGO`);

--
-- Indexes for table `consultores`
--
ALTER TABLE `consultores`
  ADD PRIMARY KEY (`ID_CONSUL`);

--
-- Indexes for table `mif`
--
ALTER TABLE `mif`
  ADD PRIMARY KEY (`ID_MIF`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apontamento`
--
ALTER TABLE `apontamento`
  MODIFY `ID_APON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `consultores`
--
ALTER TABLE `consultores`
  MODIFY `ID_CONSUL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mif`
--
ALTER TABLE `mif`
  MODIFY `ID_MIF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
