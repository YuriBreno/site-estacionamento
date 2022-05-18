
-- Banco de dados: `bd_estacionamento`
--
CREATE DATABASE  `bd_estacionamento` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_estacionamento`;


-- Estrutura da tabela `tb_veiculos`


DROP TABLE IF EXISTS `tb_veiculos`;
CREATE TABLE `tb_veiculos` (
  `id` int(5) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Extraindo dados da tabela `tb_veiculos`

INSERT INTO `tb_veiculos` (`id`, `marca`, `modelo`, `placa`, `nome`, `hora`) VALUES
(1, 'Fiat', 'Siena', 'HVC-2342', 'Francisco Santos', '13:42:00'),
(2, 'Mercedes', 'C340', 'NJD-4352', 'Aloísio S Sousa', '09:30:00'),
(3, 'Honda', 'Civic', 'AAJ-1111', 'Vera Lúcia de Medeiro', '16:32:00'),
(4, 'Jeep', 'Cobrac', 'JRD-3843', 'Carlos Vicente', '04:33:00'),
(5, 'Volkswagen', 'Fusca', 'FGH-4521', 'Marlene Matos', '10:00:00'),
(6, '', '', '', '', '00:00:00'),
(7, 'Mercedes', 'Civic', 'HVC-2342', 'Brendo', '18:11:00'),
(8, 'Honda', '', 'FGH-4521', 'Yuri Breno Pereira', '11:11:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_veiculos`
--
ALTER TABLE `tb_veiculos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
