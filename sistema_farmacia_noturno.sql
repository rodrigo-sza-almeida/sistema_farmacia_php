-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Set-2021 às 01:10
-- Versão do servidor: 5.7.12
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_farmacia_noturno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idagendamento` varchar(5) NOT NULL,
  `paciente_prontuario` varchar(5) NOT NULL,
  `paciente_responsavel_idresponsavel` varchar(5) NOT NULL,
  `funcionario_idfuncionario` varchar(5) NOT NULL,
  `data_solicitacao` varchar(45) NOT NULL,
  `horario` varchar(45) NOT NULL,
  `data_procedimento` varchar(45) NOT NULL,
  `realizado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`idagendamento`, `paciente_prontuario`, `paciente_responsavel_idresponsavel`, `funcionario_idfuncionario`, `data_solicitacao`, `horario`, `data_procedimento`, `realizado`) VALUES
('01', '01', '', '01', '25/09/2021', '20:00', '25/09/2021', 'Sim'),
('02', '02', '', '02', '25/09/2021', '17:19', '25/09/2021', 'Sim'),
('03', '03', '', '03', '25/09/2021', '19:45', '25/09/2021', 'NÃ£o'),
('04', '04', '', '04', '25/09/2021', '16:08', '25/09/2021', 'Sim'),
('05', '05', '', '05', '25/09/2021', '21:30', '25/09/2021', 'NÃ£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` varchar(5) NOT NULL,
  `categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `categoria`) VALUES
('01', 'AntibiÃ³ticos'),
('02', 'Curativos'),
('03', 'Insulina'),
('04', 'Anti-Depressivos'),
('05', 'AnalgÃ©siocos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_has_produto`
--

CREATE TABLE `categoria_has_produto` (
  `categoria_has_produto` varchar(5) NOT NULL,
  `produto_idproduto` varchar(5) NOT NULL,
  `categoria_idcategoria` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `idestoque` varchar(5) NOT NULL,
  `produto_idproduto` varchar(5) NOT NULL,
  `quantidade` varchar(45) NOT NULL,
  `prateleira` varchar(45) NOT NULL,
  `fila` varchar(45) NOT NULL,
  `qtd_max` varchar(45) NOT NULL,
  `qtd_min` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`idestoque`, `produto_idproduto`, `quantidade`, `prateleira`, `fila`, `qtd_max`, `qtd_min`) VALUES
('01', '01', '100', '01', '01', '100 unidades', '01 unidade'),
('02', '02', '50', '02', '01', '100 unidades', '01 unidade'),
('03', '03', '50', '03', '01', '100 unidades', '01 unidade'),
('04', '04', '50', '04', '01', '50 unidades', '01 unidade'),
('05', '05', '25', '05', '01', '50 unidades', '01 unidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `idfabricante` varchar(5) NOT NULL,
  `cnpj` varchar(45) NOT NULL,
  `nomecomercial` varchar(45) NOT NULL,
  `num_licenca_farmaceutica` varchar(45) NOT NULL,
  `representante_legal` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `endereco_eletronico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fabricante`
--

INSERT INTO `fabricante` (`idfabricante`, `cnpj`, `nomecomercial`, `num_licenca_farmaceutica`, `representante_legal`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `telefone`, `endereco_eletronico`) VALUES
('01', '90898-98', 'Fanzini LTDA', '1898918', 'Rodrigo', 'Rua Lajes', '34', '1', 'Jd Liviero', '90890-908', '(11) 7890-9009', 'www.fanzini.com.br'),
('02', '7897897-90', 'Medicalpharma LTDA', '087878789-987', 'Marcelo', 'Rua JaÃº', '890', 'n/d', 'Vila SuiÃ§a', '09880-907', '(11) 7800-9086', 'www.medicalpharma.com.br'),
('03', '90890890-908', 'Pfizer', '0980808-8778', 'Juliane', 'Avenida Marginal Pinheiros', '5890', '8Âº andar', 'Vila OlÃ­mpia', '98980-234', '(11) 09890-34556', 'www.pfizer.com'),
('04', '987897-089', 'Astrazeneca', '098908908-887', 'Marcelle', 'Avenida Europa', '556', '7Âº  andar', 'Cerqueira CÃ©sar', '08788-009', '(11) 9800-4534', 'www.astrazeneca.com'),
('05', '89789789-09', 'Nitsamisu', '8909908-5456', 'Roberto', 'Rua GlÃ³ria', '78', '3Âº andar', 'Jd. Paulista', '08990-987', '(11) 5684-9098', 'www.nitsamisu.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante_has_produto`
--

CREATE TABLE `fabricante_has_produto` (
  `fabricante_has_produto` varchar(5) NOT NULL,
  `fabricante_idfabricante` varchar(5) NOT NULL,
  `produto_idproduto` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` varchar(5) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `data_admissao` varchar(45) NOT NULL,
  `setor` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nome_pai` varchar(45) NOT NULL,
  `nome_mae` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `nacionalidade` varchar(45) NOT NULL,
  `data_nascimento` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `estado_civil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `login`, `senha`, `data_admissao`, `setor`, `nome`, `nome_pai`, `nome_mae`, `sexo`, `nacionalidade`, `data_nascimento`, `cpf`, `rg`, `endereco`, `estado_civil`) VALUES
('01', '01', '01', '25/09/2021', 'FarmÃ¡cia', 'Milton CÃ©sar Souza', 'Marcelo Souza', 'Maria Souza', 'Masculino', 'Brasileiro', '09/08/1987', '870989090', '58767696', 'Rua Gina, 89', 'Solteiro'),
('02', '02', '02', '25/09/2021', 'FarmÃ¡cia', 'Jaqueline Novaes', 'Anderson Novaes', 'Joana Novaes', 'Feminino', 'Brasileira', '04/03/1968', '0989980-00', '89789897-009', 'Rua Marcilio Dias, 67', 'Casada'),
('03', '03', '03', '25/09/2021', 'FarmÃ¡cia', 'PatrÃ­cia Medeiros', 'Wellington Medeiros', 'Carla Medeiros', 'Feminino', 'Brasielira', '06/07/1983', '9898989399', '098989-00', 'Rua BulgÃ¡ria, 65', 'Casada'),
('04', '04', '04', '25/09/2021', 'FarmÃ¡cia', 'AndrÃ© Costa Leite', 'RogÃ©rio Costa Leita', 'Adriana Costa Leita', 'Masculino', 'Brasileiro', '04/04/1980', '098908908', '989898666', 'Rua Marina, 80', 'Casado'),
('05', '05', '05', '25/09/2021', 'FarmÃ¡cia', 'Priscila Joana Santos', 'AdÃ©lio Santos', 'Maria Santos', 'Feminino', 'Brasileira', '06/06/1999', '8787897', '8709989', 'Rua JapÃ£o, 90', 'Solteira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_do_agendamento`
--

CREATE TABLE `itens_do_agendamento` (
  `itens_do_agendamento` varchar(5) NOT NULL,
  `produto_idproduto` varchar(5) NOT NULL,
  `agendamento_idagendamento` varchar(5) NOT NULL,
  `agendamento_paciente_prontuario` varchar(5) NOT NULL,
  `agendamento_paciente_responsavel_idresponsavel` varchar(5) NOT NULL,
  `agendamento_funcionario_idfuncionario` varchar(5) NOT NULL,
  `quantidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `prontuario` varchar(5) NOT NULL,
  `responsavel_idresponsavel` varchar(5) NOT NULL,
  `data_entrada` varchar(45) NOT NULL,
  `data_alta` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nome_pai` varchar(45) NOT NULL,
  `nome_mae` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `nacionalidade` varchar(45) NOT NULL,
  `data_nascimento` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `tipo_sanguineo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`prontuario`, `responsavel_idresponsavel`, `data_entrada`, `data_alta`, `nome`, `nome_pai`, `nome_mae`, `sexo`, `nacionalidade`, `data_nascimento`, `cpf`, `rg`, `endereco`, `tipo_sanguineo`) VALUES
('01', '01', '25/09/2021', '25/09/2021', 'Jair Menezes Silva', 'AntÃ´nio Luis Lopes', 'Maria JosÃ© Lopes', 'Masculino', 'Brasileiro', '08/08/1998', '8798787-09', '098989-009', 'Rua Marrocos, 34', 'Tipo O positivo'),
('02', '02', '07/09/2021', '25/09/2021', 'Nair Melo Souza', 'Amauri Melo Souza', 'Joana Melo Souza', 'Feminino', 'Brasileira', '17/05/1971', '098890-009', '0-90-9000', 'Rua Texas, 890', 'Tipo O positivo'),
('03', '03', '14/08/2021', '25/09/2021', 'Marcelo Pires', 'Nilton JosÃ© Peixoto', 'Ana Peixoto', 'Masculino', 'Brasileiro', '05/08/1982', '8700989-998', '98-089-009', 'Rua Faliseu, 235', 'Tipo O positvo'),
('04', '04', '04/09/2021', '25/09/2021', 'Julia Silva Moraes', 'Marcelo Silva Moraes', 'Ana Claudia Silvia Moraes', 'Feminino', 'Brasileira', '08/08/1987', '879870709', '9878897897', 'Rua Haiti, 89', 'Tipo positvo'),
('05', '05', '03/09/2021', '25/09/2021', 'Miriam Kelly Farias', 'Paulo JosÃ© Farias', 'AngÃªla Farias', 'Feminino', 'Brasileira', '09/09/1986', '0708098-00', '98-090-90-9', 'Rua AustrÃ¡lia, 70', 'Tipo O Negativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `principioativo`
--

CREATE TABLE `principioativo` (
  `idprincipioativo` varchar(5) NOT NULL,
  `principioativo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `principioativo`
--

INSERT INTO `principioativo` (`idprincipioativo`, `principioativo`) VALUES
('01', 'Morfina'),
('02', 'CorticÃ³ide'),
('03', 'Insulina'),
('04', 'Magaldrato'),
('05', 'MagnÃ©sio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `principioativo_has_produto`
--

CREATE TABLE `principioativo_has_produto` (
  `principioativo_has_produto` varchar(5) NOT NULL,
  `produto_idproduto` varchar(5) NOT NULL,
  `principioativo_idprincipioativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` varchar(5) NOT NULL,
  `denominacao` varchar(45) NOT NULL,
  `dosagem` varchar(45) NOT NULL,
  `fabricacao` varchar(45) NOT NULL,
  `validade` varchar(45) NOT NULL,
  `lote` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `qtd_max_empilhagem` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `denominacao`, `dosagem`, `fabricacao`, `validade`, `lote`, `valor`, `qtd_max_empilhagem`) VALUES
('01', 'Maleato de Enalapril', '30 mg', '25/09/2021', '25/09/2025', 'TUVD-09-XC', '524,45', '100 unidades'),
('02', 'Insulina', '15 unidades', '25/09/2021', '25/09/2025', 'WEVBN-098H', '89,00', '50 unidades'),
('03', 'Morfina', '8 ml', '25/09/2021', '25/09/2025', 'EEEBNH098', '1089,87', '50 unidades'),
('04', 'Paclitaxel', '7 ml', '25/09/2025', '25/09/2025', '9089JKHJK', '2089,90', '15 unidades'),
('05', 'Paracetamol', '5 ml', '25/09/2021', '25/09/2025', 'WHNNNB098JK', '15,00', '100 unidades');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `idresponsavel` varchar(5) NOT NULL,
  `nome_responsavel` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `rg` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`idresponsavel`, `nome_responsavel`, `cpf`, `rg`) VALUES
('01', 'Julio Oliveira Santos', '878700-988', '09890890-65'),
('02', 'Marina Spinelli', '0870789-998', '8765223-89'),
('03', 'Maicon Arruda Alves', '87897897-645', '2299755-08'),
('04', 'Michelle Carrara', '98908908-998', '865657-09'),
('05', 'Bernardo Luiz AlcÃ¢ntara', '08790890-009', '5539928-999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idagendamento`),
  ADD KEY `paciente_prontuario` (`paciente_prontuario`),
  ADD KEY `funcionario_idfuncionario` (`funcionario_idfuncionario`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indexes for table `categoria_has_produto`
--
ALTER TABLE `categoria_has_produto`
  ADD PRIMARY KEY (`categoria_has_produto`),
  ADD KEY `produto_idproduto` (`produto_idproduto`),
  ADD KEY `categoria_idcategoria` (`categoria_idcategoria`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`idestoque`),
  ADD KEY `produto_idproduto` (`produto_idproduto`);

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`idfabricante`);

--
-- Indexes for table `fabricante_has_produto`
--
ALTER TABLE `fabricante_has_produto`
  ADD PRIMARY KEY (`fabricante_has_produto`),
  ADD KEY `fabricante_idfabricante` (`fabricante_idfabricante`),
  ADD KEY `produto_idproduto` (`produto_idproduto`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `itens_do_agendamento`
--
ALTER TABLE `itens_do_agendamento`
  ADD PRIMARY KEY (`itens_do_agendamento`),
  ADD KEY `produto_idproduto` (`produto_idproduto`),
  ADD KEY `agendamento_idagendamento` (`agendamento_idagendamento`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`prontuario`),
  ADD KEY `responsavel_idresponsavel` (`responsavel_idresponsavel`);

--
-- Indexes for table `principioativo`
--
ALTER TABLE `principioativo`
  ADD PRIMARY KEY (`idprincipioativo`);

--
-- Indexes for table `principioativo_has_produto`
--
ALTER TABLE `principioativo_has_produto`
  ADD PRIMARY KEY (`principioativo_has_produto`),
  ADD KEY `produto_idproduto` (`produto_idproduto`),
  ADD KEY `principioativo_idprincipioativo` (`principioativo_idprincipioativo`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`idresponsavel`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `agendamento_ibfk_1` FOREIGN KEY (`paciente_prontuario`) REFERENCES `paciente` (`prontuario`),
  ADD CONSTRAINT `agendamento_ibfk_2` FOREIGN KEY (`paciente_prontuario`) REFERENCES `paciente` (`prontuario`),
  ADD CONSTRAINT `agendamento_ibfk_3` FOREIGN KEY (`funcionario_idfuncionario`) REFERENCES `funcionario` (`idfuncionario`);

--
-- Limitadores para a tabela `categoria_has_produto`
--
ALTER TABLE `categoria_has_produto`
  ADD CONSTRAINT `categoria_has_produto_ibfk_1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`),
  ADD CONSTRAINT `categoria_has_produto_ibfk_2` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`);

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`);

--
-- Limitadores para a tabela `fabricante_has_produto`
--
ALTER TABLE `fabricante_has_produto`
  ADD CONSTRAINT `fabricante_has_produto_ibfk_1` FOREIGN KEY (`fabricante_idfabricante`) REFERENCES `fabricante` (`idfabricante`),
  ADD CONSTRAINT `fabricante_has_produto_ibfk_2` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`);

--
-- Limitadores para a tabela `itens_do_agendamento`
--
ALTER TABLE `itens_do_agendamento`
  ADD CONSTRAINT `itens_do_agendamento_ibfk_1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`),
  ADD CONSTRAINT `itens_do_agendamento_ibfk_2` FOREIGN KEY (`agendamento_idagendamento`) REFERENCES `agendamento` (`idagendamento`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`responsavel_idresponsavel`) REFERENCES `responsavel` (`idresponsavel`);

--
-- Limitadores para a tabela `principioativo_has_produto`
--
ALTER TABLE `principioativo_has_produto`
  ADD CONSTRAINT `principioativo_has_produto_ibfk_1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`),
  ADD CONSTRAINT `principioativo_has_produto_ibfk_2` FOREIGN KEY (`principioativo_idprincipioativo`) REFERENCES `principioativo` (`idprincipioativo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
