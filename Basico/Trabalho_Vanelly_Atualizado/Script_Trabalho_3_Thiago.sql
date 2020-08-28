
CREATE DATABASE  AutoEscola;
USE AutoEscola;

CREATE TABLE Alunos(
Id int(15) AUTO_INCREMENT,
Nome varchar(20) NOT NULL,
Sobrenome varchar(20) NOT NULL,
CPF varchar (20) NOT NULL,
Telefone varchar (20) NOT NULL,
Idade int (15) NOT NULL,
PRIMARY KEY (Id)
);

CREATE TABLE Instrutores(
Id int(15) AUTO_INCREMENT,
Nome varchar(20) NOT NULL,
Sobrenome varchar(30) NOT NULL,
RG varchar (20) NOT NULL,
Telefone varchar (20) NOT NULL,
Idade int (15) NOT NULL,
PRIMARY KEY (Id)
);

CREATE TABLE Carros(
Id int(15) AUTO_INCREMENT,
Modelo varchar (20) NOT NULL,
Marca varchar (20) NOT NULL,
Ano int (15) NOT NULL,
Chassi varchar (20)NOT NULL,
Tipo varchar (20) NOT NULL,/*Hatch ou Sedan*/
PRIMARY KEY (Id)
);

CREATE TABLE Cursos(
Id int(15) AUTO_INCREMENT,
Nome varchar(20) NOT NULL,
Turno varchar(20) NOT NULL,
C_Horaria int(15) NOT NULL,
Qtd_Alunos int(15) NOT NULL,
Professor varchar(30) NOT NULL,
PRIMARY KEY (Id)
);






















