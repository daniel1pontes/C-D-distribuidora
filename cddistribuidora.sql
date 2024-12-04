-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2024 às 21:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cddistribuidora`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `ID` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`ID`, `nome`, `cpf`, `email`, `senha`) VALUES
(1, 'Daniel Pontes Virginio', '47856932101', 'daniel@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `razao` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`ID`, `razao`, `nome`, `cnpj`, `endereco`, `bairro`, `numero`, `cidade`, `estado`, `cep`, `email`, `telefone`, `senha`) VALUES
(11, 'da', 'daniel', 'dadad', 'adad', 'awdad', 'wdawd', 'wdawd', 'adadad', 'adadd', 'daniel@gmail.com', 'da', '123'),
(12, 'wrewr', 'efwf', 'fwf', 'wfwef', 'wee', 'wewe', 'fwfwfw', 'f', 'fwf', 'efsf@gmail.com', 'fw', ''),
(13, 'wfwf', 'wfw', 'wfewf', 'wfw', 'wefwf', 'wfwfwefw', 'fewfew', 'fewf', 'efwf', 'sdasdasdas@gmail.com', 'fwf', ''),
(15, 'qweqeqeqe', 'eqwewq', 'wewqe', 'qweqweq', 'wd', 'sadwdq', 'qwewq', 'eqwe', 'qweq', 'daniel@gmail.comdasda', 'dqwd', 'eqwdwq');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes_aprovacao`
--

CREATE TABLE `clientes_aprovacao` (
  `ID` int(11) NOT NULL,
  `razao` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes_aprovacao`
--

INSERT INTO `clientes_aprovacao` (`ID`, `razao`, `nome`, `cnpj`, `endereco`, `bairro`, `numero`, `cidade`, `estado`, `cep`, `email`, `telefone`, `senha`) VALUES
(19, 'qweqweqe', 'eqeqeq', 'eqeq', 'eqeq', 'eqe', 'qeq', 'eq', 'eqe', 'qewq', 'sdasdasdas@gmail.comqweq', 'eq', 'qeq');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `ID` int(11) NOT NULL,
  `razao` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `ramo` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`ID`, `razao`, `nome`, `cnpj`, `endereco`, `bairro`, `numero`, `cidade`, `estado`, `cep`, `ramo`, `telefone`, `email`, `senha`) VALUES
(1, '1231231', 'daniel', 'adasd', 'asdasdad', 'asdad', 'adsad', '123131', 'asdad', 'asdasd', 'asdad', 'adad', 'daniel@gmail.com', '123'),
(2, 'wqweq', 'wqeqe', 'eqweq', 'qeqweqwe', 'eqew', 'qweqew', 'qweqe', 'qweqwe', 'wqeqw', 'eqeqewqeq', 'ewq', 'danieqweqewl@gmail.com', '123'),
(3, 'dadawdwada', 'adaw', 'caw', 'cawc', 'cawcawc', 'cwacawc', 'dawd', 'awdw', 'dawcaw', 'awcaw', 'caw', 'daniel@gmail.comawda', 'wdaw');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores_aprovacao`
--

CREATE TABLE `fornecedores_aprovacao` (
  `ID` int(11) NOT NULL,
  `razao` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `ramo` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores_aprovacao`
--

INSERT INTO `fornecedores_aprovacao` (`ID`, `razao`, `nome`, `cnpj`, `endereco`, `bairro`, `numero`, `cidade`, `estado`, `cep`, `ramo`, `telefone`, `email`, `senha`) VALUES
(9, 'acwcac', 'cascdvsd', 'dfgdf', 'dfgdg', 'fgdfg', 'dfgd', 'awc', 'gfgf', 'g', 'gfdgd', 'dg', 'dadae@gmail.comfdg', 'sca'),
(10, 'saddaasdadsa', 'sadada', 'sdasada', 'dad', 'sdasdda', 'asd', 'sadsdasdsa', 'dsadsadssa', 'sda', 'sdadsa', 'asdad', 'sdasdaqwesdas@gmail.com', 'adsa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `ID` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `mensagens`
--

INSERT INTO `mensagens` (`ID`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(9, 'genivaldo', 'daniel@gmail.com', 'Conversa', 'boa noite!');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tipo_embalagem` varchar(100) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `codigo_unidade` varchar(100) NOT NULL,
  `codigo_caixa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `marca`, `descricao`, `tipo_embalagem`, `quantidade`, `codigo_unidade`, `codigo_caixa`) VALUES
(15, 'Guarana', 'Refrigerante', 'Fardo', '6x1', '987654321', '987654321');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nome`, `cpf`, `email`, `senha`) VALUES
(18, 'Genivaldo', '45561223781', 'efsf@gmail.com', '123'),
(19, 'Daniel', '45561223781', 'daniel@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `clientes_aprovacao`
--
ALTER TABLE `clientes_aprovacao`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `fornecedores_aprovacao`
--
ALTER TABLE `fornecedores_aprovacao`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `clientes_aprovacao`
--
ALTER TABLE `clientes_aprovacao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `fornecedores_aprovacao`
--
ALTER TABLE `fornecedores_aprovacao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
