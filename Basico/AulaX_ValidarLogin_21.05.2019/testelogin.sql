
CREATE DATABASE aulas;
USE aulas;

CREATE TABLE cadastro(
id int(15) AUTO_INCREMENT,
email varchar(50) NOT NULL,
senha varchar (255) NOT NULL,
id_permissao int(15) NOT NULL,
PRIMARY KEY (id)

);

CREATE TABLE permissao(
id int (15) AUTO_INCREMENT,
nome varchar(50) NOT NULL,
PRIMARY KEY (id)
);
INSERT INTO permissao (id,nome) VALUES (1,'Admin');
INSERT INTO permissao (id,nome) VALUES (2,'Seller');
INSERT INTO permissao (id,nome) VALUES (3,'User');


select * from cadastro;