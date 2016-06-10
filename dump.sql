-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 10-Jun-2016 às 16:32
-- Versão do servidor: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `api_sintegra`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sintegra`
--

CREATE TABLE `sintegra` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cnpj` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `json` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sintegra`
--

INSERT INTO `sintegra` (`id`, `id_usuario`, `cnpj`, `json`) VALUES
(1, 1, '31804115000222', '{"cnpj":" 31804115000243","Inscrição Estadual":" 082254281","Razão Social":"CEREAIS DO NICO LTDA","Endereço":{"Logradouro":"RUA IPE","Numero":" 10","Bairro":"MOVELAR","Município":"LINHARES","UF":"ES","CEP":" 29906120"},"INFORMAÇÕES COMPLEMENTARES":{"Atividade Econômica":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","Data de Inicio de Atividade":"26\\/03\\/2004","Situação Cadastral Vigente":"HABILITADO"}}'),
(2, 10, ' 31804115000243', '{"cnpj":" 31804115000243","Inscrição Estadual":" 082254281","Razão Social":"CEREAIS DO NICO LTDA","Endereço":{"Logradouro":"RUA IPE","Numero":" 10","Bairro":"MOVELAR","Município":"LINHARES","UF":"ES","CEP":" 29906120"},"INFORMAÇÕES COMPLEMENTARES":{"Atividade Econômica":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","Data de Inicio de Atividade":"26\\/03\\/2004","Situação Cadastral Vigente":"HABILITADO"}}'),
(3, 10, ' 31804115000243', '{"cnpj":" 31804115000243","Inscrição Estadual":" 082254281","Razão Social":"CEREAIS DO NICO LTDA","Endereço":{"Logradouro":"RUA IPE","Numero":" 10","Bairro":"MOVELAR","Município":"LINHARES","UF":"ES","CEP":" 29906120"},"INFORMAÇÕES COMPLEMENTARES":{"Atividade Econômica":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","Data de Inicio de Atividade":"26\\/03\\/2004","Situação Cadastral Vigente":"HABILITADO"}}'),
(4, 10, ' 31804115000243', '{"cnpj":" 31804115000243","Inscrição Estadual":" 082254281","Razão Social":"CEREAIS DO NICO LTDA","Endereço":{"Logradouro":"RUA IPE","Numero":" 10","Bairro":"MOVELAR","Município":"LINHARES","UF":"ES","CEP":" 29906120"},"INFORMAÇÕES COMPLEMENTARES":{"Atividade Econômica":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","Data de Inicio de Atividade":"26\\/03\\/2004","Situação Cadastral Vigente":"HABILITADO"}}'),
(5, 10, ' 31804115000243', '{"cnpj":" 31804115000243","Inscrição Estadual":" 082254281","Razão Social":"CEREAIS DO NICO LTDA","Endereço":{"Logradouro":"RUA IPE","Numero":" 10","Bairro":"MOVELAR","Município":"LINHARES","UF":"ES","CEP":" 29906120"},"INFORMAÇÕES COMPLEMENTARES":{"Atividade Econômica":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","Data de Inicio de Atividade":"26\\/03\\/2004","Situação Cadastral Vigente":"HABILITADO"}}'),
(6, 10, ' 31804115000243', '{"cnpj":" 31804115000243","Inscrição Estadual":" 082254281","Razão Social":"CEREAIS DO NICO LTDA","Endereço":{"Logradouro":"RUA IPE","Numero":" 10","Bairro":"MOVELAR","Município":"LINHARES","UF":"ES","CEP":" 29906120"},"INFORMAÇÕES COMPLEMENTARES":{"Atividade Econômica":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","Data de Inicio de Atividade":"26\\/03\\/2004","Situação Cadastral Vigente":"HABILITADO"}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sintegra`
--
ALTER TABLE `sintegra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sintegra`
--
ALTER TABLE `sintegra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;