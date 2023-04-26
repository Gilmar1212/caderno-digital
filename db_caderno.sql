-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Abr-2023 às 03:34
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
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_anotacoes`
--

INSERT INTO `tbl_anotacoes` (`id_anotacoes`, `anotacoes`, `id_materia`, `assunto_anotacoes`) VALUES
(132, 'Ações ordinárias, são as ações que dão direito ao voto aos acionistas quando houver assembleias, quanto maior o volume de ações, maior o seu peso de participação.<br>\r\n\r\n<b>Ações ordinárias</b> são representados pelo número 3 no final de cada sigla.\r\n\r\n<b>Ações preferenciais</b>, quem possui essa classe de ações possui prioridade no recebimento de dividendos, entretanto quem possui essa classe de ações não possui direito ao voto nas assembleias.<br>\r\n\r\nPorém, se a empresa vir a falência esses acionistas tem direito ao reembolso superior a quem possui ação ordinária.<br>\r\n\r\nO final de todas as siglas das ações preferenciais possuem o número 4.<br>\r\n\r\nSempre olhe o tipo de ação que o sócio majoritário possui e optar por comprar esse tipo de ação.<br>\r\n\r\nE novamente , sempre optar por comprar ações com alta liquidez.<br>\r\n\r\n\r\n', 19, 'Ações ordinárias e preferenciais.'),
(131, 'E ideal uma ação não ultrapassar mais de 5% da sua carteira, sempre que uma ação atingir mais de 5% e bom começar a balancear aportando em outros setores, sempre diversificando em outros setores', 19, 'Montagem da carteira de ações'),
(139, 'E um pacote que inclui ações ordinárias e preferenciais.<br>\r\n\r\nE bom evitar por que em caso de lucro terá que pagar IR.<br>\r\n\r\nEssa ação tem no final o número 11.\r\n', 19, 'Ações units'),
(140, 'No Brasil a compra e venda de ações e feita pela IBOVESPA.<br>\r\n\r\nEssas transações ocorrem por meio de corretoras que são autorizadas pela cvm (comissão de valores mobiliários) que regulariza esses processos.\r\n\r\nO maior capital aplicado na bolsa vem de outros países.', 19, 'Como funciona a bolsa de valores'),
(141, 'Para uma empresa se tornar uma S.A aberta ela precisa cumprir diversos requisitos determinados pela CVM, mas se ela fizer mais que isso ela ganha um selo de qualidade.<br>\r\n\r\nNível 1: No mínimo 25% das ações ordinárias e preferencias da empresa precisam estar em circulação.<br>\r\n\r\nNível 2: Obrigatoriedade de tag along (Tag Along e o mecanismo que te dar o direito de vender as suas ações conjuntas com o sócio majoritário com mesmo valor que o sócio majoritário).<br>\r\n\r\nNovo mercado Nível 3: Obrigatório ter 100% das ações do tipo ordinária e 100% tag along.<br>\r\n\r\n<b>Free Float:</b> e a quantidade percentual de ações livres para negociação no mercado, uma empresa deve ter pelo menos 30% de free float.<br>\r\n\r\nPara calcular o free float, deve-se somar a quantidade de ações ordinárias e preferenciais e dividir por 2.<br>\r\n\r\n\r\n\r\n\r\n\r\n', 19, 'Governança corporativa e freefloat'),
(118, '<b>Risco sistemático:<b> São riscos que não podemos evitar numa carteira, exemplo, Eleição, alguma noticia ruim, etc.<br>\r\n\r\n<b>Risco não sistemático:<b> É o risco que se pode diminuir a carteira através de diversificação de ativos.<br>\r\n\r\nManter a carteira dividida em várias porcentagens em diversos tipos de investimentos.<br>\r\n\r\n<b>Liquidez alta:</b> Capacidade de oferta e demanda aquele ativo.\r\n\r\n<b>Liquidez baixa:</b> Capacidade baixa de oferta e demanda daquele ativo.\r\n\r\n\r\n<b>Dica:</b> é sempre bom aportar empresas com alta liquidez (mais de 200.000 de liquidez diária).', 19, 'Risco sistemático e não sistemático'),
(115, 'teste', 23, 'teste'),
(105, 'asdasdasdasd', 21, 'asddsasdds'),
(106, 'asdasdasd', 22, 'asdasdasd'),
(142, '<b>Blue chips:</b> são empresas grandes e consolidadas no seu mercado de atuação e que possuem alta liquidez e segurança.<br>\r\n\r\n<b>Small caps:</b> São empresas ainda não consolidadas no seu ramo de atuação, mas com alto potencial de valorização.<br> \r\n\r\nSmall caps geralmente possuem entre 3 a 10 bilhões de patrimônio liquido. \r\n', 19, 'Blue chips e small caps'),
(143, '<b>Analise top down:</b>Começa-se a analisar desde indicadores macroeconômicos a nível global até chegar na analise da ação.<br>\r\n\r\nessa analise não e interessante a longo prazo mas é legal para evitar setores complicados como os setores cíclicos.<br>\r\n\r\n\r\n<b>Análise bottom up:</b> esse tipo de analise e feita de cima para baixo, ou seja, primeiro inicia analisando a ação e assim sucessivamente.\r\n', 19, 'Analise top down e bottom up'),
(144, 'Apresentam de forma organizada e padronizada informações para os investidores entender os resultados da empresa em um determinado tempo.<br>\r\n\r\nPara ver as demonstrações financeiras você deve pesquisar o nome da empresa e ri no final.<br>\r\n\r\n<b>ITR Informações trimestrais:</b> São as informações dos balanços trimestrais que as empresas divulgam.<br>\r\n\r\n<b>1 ITR:</b> Geralmente divulgado até dia 15 de abril.<br>\r\n\r\n<b>2 ITR:</b> Geralmente divulgado até o dia 20 de julho<br>\r\n\r\n<b>3 ITR:</b> Geralmente divulgado até o dia 15 de outubro<br>\r\n\r\n<b>4 ITR:</b> Divulga o balanço do quarto trimestre e o ano todo<br>', 19, 'Demonstrações financeiras'),
(145, 'Capitação: A existência da empresa se dá através do aporte de recursos que outras pessoas, físicas e jurídicas nela fizeram. Os sócios aportam capital social, e os terceiros aportam recursos sob as mais diferentes formas, como empréstimos concedidos por instituições financeiras. Capitalização seca: Esse indicador indica quanto dinheiro foi capitado pelos socios e quanto foram capitados por terceiros, quanto maior valor melhor, acima de 1. a forma do calculo é patrimônio liquido - investimentos dividido por passivo não circulante + ativo não circulante.<br>\r\n\r\n<b>Disponibilidades Calculo:</b> Caixa + Aplicações financeiras de curto prazo.<br><br>\r\nO Caixa/ disponibilidades devem ter fluxo constante e crescente.<br>\r\n\r\nO gráfico de disponibilidade de caixa e feito da direita para esquerda, para conseguir visualizar, vai no excel > Seleciona linha de caixa e equivalentes de caixa > Inserir > Gráficos recomendados > Gráfico de linha.<br>\r\n\r\n<b>Capitação de curto prazo:</b> Recurso de terceiros a longo prazo é mais vantajoso para a empresa, quanto menor o valor melhor, até 0,6 é aceitável, pois se estiver acima disso significa que a empresa deverá pagar no curto prazo muito valor em passivo.<br>\r\n\r\n<b>Como calcular:</b> Passivo circulante dividido por passivo circulante + passivo não circulante.<br>\r\n\r\n<b>Endividamento:</b> Calcula o tanto de endividamento com terceiros a empresa tem de acordo com o seu património liquido quanto menor melhor.(Até 0,8 é aceitável)</br>\r\n<b>Como calcular: </b> Passivo não circulante + passivo circulante dividido por património liquido \r\n\r\n\r\n\r\n', 19, 'Indicadores do balanço patrimonial'),
(146, 'Rotas são caminhos por onde a aplicação vai passar.\r\n\r\nExemplo www.minhaaplicacao.com.br\r\n', 29, 'Rotas'),
(147, 'São informações contábeis de empresas que acontecem em um intervalo de tempo\r\n\r\n<b>Receita bruta: </b> tudo que a empresa lucrou sem descontos.<br>\r\n\r\n<b>Receita bruta com o desconto de imposto sobre receita, Devoluções e descontos e igual o valor da receita liquida</b><br>\r\n<b>Receita liquida menos custo de produtos vendidos (Sigla CPV que é o custo de da produção de produtos vendidos) é igual a Lucro bruto</b>\r\n<b>Lucro bruto menos despesas com vendas, gerais e administrativas é igual ao Lucro operacional (EBIT)</b>\r\n<b>Com o desconto do resultado financeiro seja ele positivo ou negativo</b>\r\n<b>Lucro antes de ir</b>\r\n<b>Imposto de renda e contribuição social</b>\r\n<b>chega no lucro liquido</b><br>\r\n\r\n<b>O lucro liquido e o indicador mais importante pois através dele que a empresa pode crescer e gerar dividendos</b><br>\r\n\r\n<b>Quando um valor do DRE tiver parênteses ou seja o valor envolto em (VALOR AQUI) então o valor e negativo</b><br>\r\n\r\n<b>EBIT = lucros antes de descontar juros e imposto de renda</b><br>\r\n<b>EBITA = lucros antes de descontar juros e imposto de renda depreciação(depreciação e a perca de valor das posses da empresa), amortização (Valor retirado para cobrir a perda causada pela depreciação dos passivos da empresa)</b><br>\r\n<b>Para encontrar a depreciação e amortização e só fazer EBITDA menos  EBIT</b>\r\n', 19, ' Demonstração de resultados do exercício (DRE)');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_materias`
--

INSERT INTO `tbl_materias` (`id_materia`, `materias`, `imagens`, `id_anotacoes`) VALUES
(19, 'Curso de analise fundamentalista', NULL, NULL),
(29, 'Curso de Laravel', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
