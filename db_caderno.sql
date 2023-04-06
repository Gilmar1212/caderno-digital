-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Abr-2023 às 02:17
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_caderno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_anotacoes`
--

DROP TABLE IF EXISTS `tbl_anotacoes`;
CREATE TABLE IF NOT EXISTS `tbl_anotacoes` (
  `id_anotacoes` int(11) NOT NULL AUTO_INCREMENT,
  `anotacoes` varchar(6000) DEFAULT NULL,
  `id_materia` int(11) NOT NULL,
  `assunto_anotacoes` varchar(6000) NOT NULL,
  PRIMARY KEY (`id_anotacoes`),
  KEY `fk_materia` (`id_materia`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_anotacoes`
--

INSERT INTO `tbl_anotacoes` (`id_anotacoes`, `anotacoes`, `id_materia`, `assunto_anotacoes`) VALUES
(132, 'Ações ordinárias, são as ações que dão direito ao voto aos acionistas quando houver assembleias, quanto maior o volume de ações, maior o seu peso de participação.<br>\r\n\r\n<b>Ações ordinárias</b> são representados pelo número 3 no final de cada sigla.\r\n\r\n<b>Ações preferenciais</b>, quem possui essa classe de ações possui prioridade no recebimento de dividendos, entretanto quem possui essa classe de ações não possui direito ao voto nas assembleias.<br>\r\n\r\nPorém, se a empresa vir a falência esses acionistas tem direito ao reembolso superior a quem possui ação ordinária.<br>\r\n\r\nO final de todas as siglas das ações preferenciais possuem o número 4.<br>\r\n\r\nSempre olhe o tipo de ação que o sócio majoritário possui e optar por comprar esse tipo de ação.<br>\r\n\r\nE novamente , sempre optar por comprar ações com alta liquidez.<br>\r\n\r\n\r\n', 19, 'Ações ordinárias e preferenciais.'),
(131, 'E ideal uma ação não ultrapassar mais de 5% da sua carteira, sempre que uma ação atingir mais de 5% e bom começar a balancear aportando em outros setores, sempre diversificando em outros setores', 19, 'Montagem da carteira de ações'),
(118, '<b>Risco sistemático:<b> São riscos que não podemos evitar numa carteira, exemplo, Eleição, alguma noticia ruim, etc.<br>\r\n\r\n<b>Risco não sistemático:<b> É o risco que se pode diminuir a carteira através de diversificação de ativos.<br>\r\n\r\nManter a carteira dividida em várias porcentagens em diversos tipos de investimentos.<br>\r\n\r\n<b>Liquidez alta:</b> Capacidade de oferta e demanda aquele ativo.\r\n\r\n<b>Liquidez baixa:</b> Capacidade baixa de oferta e demanda daquele ativo.\r\n\r\n\r\n<b>Dica:</b> é sempre bom aportar empresas com alta liquidez (mais de 200.000 de liquidez diária).', 19, 'Risco sistemático e não sistemático'),
(115, 'teste', 23, 'teste'),
(105, 'asdasdasdasd', 21, 'asddsasdds'),
(106, 'asdasdasd', 22, 'asdasdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_materias`
--

DROP TABLE IF EXISTS `tbl_materias`;
CREATE TABLE IF NOT EXISTS `tbl_materias` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `materias` varchar(99) NOT NULL,
  `imagens` blob,
  `id_anotacoes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materia`),
  KEY `fk_anotacoes` (`id_anotacoes`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_materias`
--

INSERT INTO `tbl_materias` (`id_materia`, `materias`, `imagens`, `id_anotacoes`) VALUES
(19, 'Curso de analise fundamentalista', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
