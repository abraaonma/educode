-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2020 às 04:15
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `datacursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dc_cursos`
--

CREATE TABLE `dc_cursos` (
  `id_cursos` int(11) NOT NULL,
  `img_cursos` varchar(200) NOT NULL,
  `nome_cursos` varchar(100) NOT NULL,
  `indice_cursos` decimal(2,1) NOT NULL,
  `ch_cursos` varchar(10) NOT NULL,
  `valor_in_cursos` decimal(8,2) NOT NULL,
  `valor_fin_cursos` decimal(8,2) NOT NULL,
  `button_cursos` varchar(100) NOT NULL,
  `desc_cursos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dc_cursos`
--

INSERT INTO `dc_cursos` (`id_cursos`, `img_cursos`, `nome_cursos`, `indice_cursos`, `ch_cursos`, `valor_in_cursos`, `valor_fin_cursos`, `button_cursos`, `desc_cursos`) VALUES
(1, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.nerdwallet.com%2Fassets%2Fblog%2Fwp-content%2Fuploads%2F2019%2F01%2F25-Best-Apps-for-Small-Business-1-600x400.jpg&f=1&nofb=1', 'O Poder do Diagrama 80/20', '4.9', '15h', '89.90', '69.90', 'include/desc.php', '<p><span style=\"display: inline !important; float: none; background-color: #ffffff; color: #000000; font-family: arial; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Curso orientado para profissionais que objetivam maior efici&ecirc;ncia sobre o tempo investido no trabalho, com a finalidade de adquirir mais tempo livre.</span><u></u><span style=\"text-decoration: line-through;\"></span></p>\r\n<p><strong><span style=\"text-align: left; color: #000000; text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-style: normal; font-variant: normal; text-decoration: none; word-spacing: 0px; display: inline !important; white-space: normal; orphans: 2; float: none; -webkit-text-stroke-width: 0px; background-color: #ffffff;\">Aulas:</span></strong></p>\r\n<p><span style=\"text-align: left; color: #000000; text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-variant: normal; word-spacing: 0px; display: inline !important; white-space: normal; orphans: 2; float: none; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"display: inline !important; float: none; background-color: #ffffff; color: #000000; font-family: arial; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">1. Planejamento di&aacute;rio, semanal, mensal, semestral e anual. </span></span></p>\r\n<p><span style=\"text-align: left; color: #000000; text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-variant: normal; word-spacing: 0px; display: inline !important; white-space: normal; orphans: 2; float: none; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"display: inline !important; float: none; background-color: #ffffff; color: #000000; font-family: arial; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">2. Download de planilha. </span></span></p>\r\n<p><span style=\"text-align: left; color: #000000; text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: arial; font-size: 16px; font-variant: normal; word-spacing: 0px; display: inline !important; white-space: normal; orphans: 2; float: none; -webkit-text-stroke-width: 0px; background-color: #ffffff;\"><span style=\"display: inline !important; float: none; background-color: #ffffff; color: #000000; font-family: arial; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">3. Experi&ecirc;ncia com atividades online do Datacursos.</span><u></u><span style=\"text-decoration: line-through;\"></span></span></p>'),
(2, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseofiles.s3.amazonaws.com%2Fseo%2Fmedia%2Fimages%2Fsolution%2FUnit_1_Business_Strategy_Enterprise_Assignment.jpg&f=1&nofb=1', 'Economia Doméstica', '4.9', '5h', '89.90', '9.90', 'comprar', 'Aula 1: Conceitos gerais de economia;\r\nAula 2: Relação entre economia doméstica e vida saudável;\r\nAula 3: Aplicando conceitos sobre planejamento e organização financeira.'),
(3, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.telegraph.co.uk%2Fcontent%2Fdam%2Fmoney%2FSpark%2Ff-and-c%2Fman-investing-on-touchscreen.jpg%3Fimwidth%3D450&f=1&nofb=1', 'Investimentos Bancários', '4.9', '5h', '89.90', '9.90', 'comprar', 'Aula 1: O que é investimento;\r\nAula 2: Para quê investir?\r\nAula 3: Como escolher o melhor modelo de investimento.'),
(4, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.spherion.com%2Fugc%2Fimages%2FEmployer%2Ftalent-selection-process.jpg&f=1&nofb=1', 'Recrutamento e Seleção', '5.0', '30h', '89.90', '69.90', 'index.php', '<p>O curso <strong><em>Recrutamento e Sele&ccedil;&atilde;o de Pessoas </em></strong>&eacute; baseado em bibliografia especializada em <em>Gest&atilde;o de Pessoas</em>, de forma a trazer ao aluno da <em>DataCursos.com</em> maior qualidade em seus estudos.<br /><strong>Aula 1:</strong> Conceitos de recrutamento e sele&ccedil;&atilde;o;<br /><strong>Aula 2:</strong> An&aacute;lise de postura profissional;<br /><strong>Aula 3:</strong> Comportamento organizacional e &eacute;tica profissional;<br /><strong>Aula 4:</strong> An&aacute;lise de curriculum vitae;<br /><strong>Aula 5:</strong> O processo de recrutamento de pessoas;<br /><strong>Aula 6:</strong> O processo de sele&ccedil;&atilde;o de pessoas;<br /><strong>Aula 7:</strong> Reda&ccedil;&atilde;o oficial e editais.</p>'),
(5, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg-aws.ehowcdn.com%2F340x221p%2Fs3-us-west-1.amazonaws.com%2Fcontentlab.studiod%2Fgetty%2F16adf33922a3483594447aa86db45d5f&f=1&nofb=1', 'Processo Administrativo', '4.9', '30h', '89.90', '69.90', 'index.php', '<p>O curso <em><strong>Processo Administrativo</strong></em> foi desenvolvido com foco na profissionaliza&ccedil;&atilde;o de pessoas, a partir de excelentes refer&ecirc;ncias selecionadas. Neste curso, voc&ecirc; aprender&aacute;:</p>\r\n<p><strong>Aula 1:</strong> Conceitos e teoria de processos;</p>\r\n<p><strong>Aula 2:</strong> Etapas do processo administrativo;</p>\r\n<p><strong>Aula 3:</strong> Fun&ccedil;&otilde;es da administra&ccedil;&atilde;o: planejamento, organiza&ccedil;&atilde;o, dire&ccedil;&atilde;o e controle;</p>\r\n<p><strong>Aula 4:</strong> Aplica&ccedil;&atilde;o em casos reais;</p>\r\n<p><strong>Aula 5:</strong> Exerc&iacute;cios.</p>'),
(6, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fdeboracarvalhocoaching.files.wordpress.com%2F2016%2F12%2Fpre-val.png%3Fw%3D383%26h%3D276&f=1&nofb=1', 'Formação de Preço', '4.9', '30h', '89.90', '69.90', 'index.php', '<p>No curso <strong>Forma&ccedil;&atilde;o de Pre&ccedil;o</strong> voc&ecirc; aprender&aacute;:</p>\r\n<p><strong>Aula 1:</strong> Conceito de pre&ccedil;o;</p>\r\n<p><strong>Aula 2:</strong> Calculando o Custo Fixo e Vari&aacute;vel;</p>\r\n<p><strong>Aula 3:</strong> Definindo o lucro;</p>\r\n<p><strong>Aula 4:</strong> Formando o pre&ccedil;o.</p>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dc_cursos`
--
ALTER TABLE `dc_cursos`
  ADD PRIMARY KEY (`id_cursos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dc_cursos`
--
ALTER TABLE `dc_cursos`
  MODIFY `id_cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
