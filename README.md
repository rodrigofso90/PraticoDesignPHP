# PraticoDesignPHP
Projeto de Gestão Pratico Design.
C.R.U.D da pagina de clientes feito em PHP.




Banco de Dados:

create database db_pratico_design;

use db_pratico_design;

CREATE TABLE cliente (
  ClienteId int NOT NULL AUTO_INCREMENT,
  NomeRazaoSocial varchar(45) NOT NULL,
  Email varchar(45) NOT NULL,
  IeRg varchar(15) NOT NULL,
  CpfCnpj varchar(15) NOT NULL,
  Telefone varchar(15) NOT NULL,
  Rua varchar(45) NOT NULL,
  Bairro varchar(45) NOT NULL,
  Cidade varchar(45) NOT NULL,
  Estado varchar(45) NOT NULL,
  Cep varchar(15) NOT NULL,
  Observacoes varchar(255) DEFAULT NULL,
  cancelado int DEFAULT '0',
  PRIMARY KEY (ClienteId)
);
