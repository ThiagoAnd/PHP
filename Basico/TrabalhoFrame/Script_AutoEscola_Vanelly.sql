
CREATE DATABASE escola;


CREATE TABLE alunos(
id_aluno int AUTO_INCREMENT,
nome varchar(30) NOT NULL,
idade int (15) NOT NULL,
cidade varchar(30) NOT NULL,
estado varchar (30) NOT NULL,
pais varchar (30) NOT NULL,
telefone int(15) NOT NULL,
PRIMARY KEY (id_aluno)
);

CREATE TABLE professores(
id_professor int AUTO_INCREMENT,
nome varchar(30) NOT NULL,
idade int (15) NOT NULL,
cidade varchar(30) NOT NULL,
estado varchar (30) NOT NULL,
pais varchar (30) NOT NULL,
telefone int(15) NOT NULL,
PRIMARY KEY (id_professor)
);

INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Thiago",30,"Pinhais","Parana","Brasil",998896547);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Matheus",25,"Pinhais","Parana","Brasil",898896548);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Bruno",26,"Pinhais","Parana","Brasil",988896547);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Diego",20,"Pinhais","Parana","Brasil",888896547);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Alex",29,"Pinhais","Parana","Brasil",998896547);

INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Kauan",19,"Curitiba","Parana","Brasil",978896547);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Luiz",19,"Curitiba","Parana","Brasil",778896547);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Taty",21,"Curitiba","Parana","Brasil",994896541);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Jorge",24,"Curitiba","Parana","Brasil",998896540);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Willian",22,"Curitiba","Parana","Brasil",718896547);

INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Jackson",27,"Piraquara","Parana","Brasil",798896547);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Maicon",22,"Piraquara","Parana","Brasil",718606547);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Roberto",23,"Piraquara","Parana","Brasil",928896541);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Cristina",22,"Piraquara","Parana","Brasil",918806543);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Valeria",32,"Piraquara","Parana","Brasil",718896512);

INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Joao",18,"Colombo","Parana","Brasil",798891512);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Rodrigo",27,"Colombo","Parana","Brasil",918893512);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Vitor",28,"Colombo","Parana","Brasil",715896592);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Arthur",26,"Colombo","Parana","Brasil",918896592);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Bianca",25,"Colombo","Parana","Brasil",918816512);
INSERT INTO alunos (nome,idade,cidade,estado,pais,telefone) VALUES ("Bianca",25,"Colombo","Parana","Brasil",918816512);





INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Vanelly",35,"Pinhais","Parana","Brasil",818846512);
INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Marcelo",35,"Pinhais","Parana","Brasil",818846513);
INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Adilson",45,"Curitiba","Parana","Brasil",918846512);
INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Rodrigo",31,"Pinhais","Parana","Brasil",918846012);
INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Paula",55,"Curitiba","Parana","Brasil",718046512);
INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Carlos",38,"Piraquara","Parana","Brasil",818006512);
INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Elis",34,"Colombo","Parana","Brasil",818844512);
INSERT INTO professores (nome,idade,cidade,estado,pais,telefone) VALUES ("Ana",49,"Piraquara","Parana","Brasil",818847502);





SELECT cidade FROM alunos UNION SELECT cidade FROM professores;



SELECT cidade FROM alunos UNION ALL SELECT cidade FROM professores;


SELECT nome FROM alunos WHERE nome LIKE "A%" UNION SELECT nome FROM professores WHERE nome LIKE "A%";

SELECT "alunos" AS Tabela,nome FROM alunos WHERE nome LIKE "A%" UNION SELECT "professores" ,nome FROM professores WHERE nome LIKE "A%";

SELECT "alunos" AS Tabela,alunos.* FROM alunos WHERE idade<20 AND cidade ="Curitiba" UNION  SELECT "professores",professores.* FROM professores WHERE telefone LIKE "%2" AND cidade = "Piraquara" ORDER BY estado ASC;


ALTER TABLE alunos ADD salario float(11);
ALTER TABLE professores ADD salario float(11);
INSERT INTO alunos (salario) VALUES (1.500);

use escola;


UPDATE alunos SET salario=1.700 WHERE id_aluno = 20;



UPDATE professores SET salario=2.700 WHERE id_professor = 1;
UPDATE professores SET salario=3.700 WHERE id_professor = 2;
UPDATE professores SET salario=3.770 WHERE id_professor = 3;
UPDATE professores SET salario=2.270 WHERE id_professor = 4;
UPDATE professores SET salario=3.900 WHERE id_professor = 5;
UPDATE professores SET salario=4.470 WHERE id_professor = 6;
UPDATE professores SET salario=2.607 WHERE id_professor = 7;
UPDATE professores SET salario=4.150 WHERE id_professor = 8;
/*Tabela temporaria - Usar um SELECT como se fosse uma tabela para chegar a um resultado que necessite de uma comparação*/
SELECT nome,idade,salario FROM alunos,( SELECT avg(salario) AS Msalario FROM alunos) AS media WHERE alunos.salario > media.Msalario;

SELECT nome,idade,salario FROM alunos,( SELECT avg(salario) AS Msalario FROM professores) AS media WHERE alunos.salario < media.Msalario;


SELECT alunos.nome,Alunos.salario FROM alunos,(SELECT avg(salario) AS salario FROM( (SELECT salario from professores)
UNION ALL (SELECT salario from alunos)) AS Temp)AS Temp WHERE alunos.salario > Temp.salario;
/*------------------------------------------------------------------------------------------------------------------------------------------------------------*/

create database AutoEscola;

USE AutoEscola;
/*aluno,professor,carro,franquia,tipocurso nome1 habilitação,categoria,telefone*/

CREATE TABLE Alunos(
Id int(15) AUTO_INCREMENT,
Nome varchar(30) NOT NULL,
Sobrenome varchar(30) NOT NULL,
CPF varchar (30) NOT NULL,
Telefone varchar (30) NOT NULL,
Idade int (15) NOT NULL,
PRIMARY KEY (Id)
);
USE AutoEscola;
SELECT * FROM Alunos;
SELECT nome FROM Alunos WHERE nome="Erica";

CREATE TABLE Instrutores(
Id int(15) AUTO_INCREMENT,
Nome varchar(30) NOT NULL,
Sobrenome varchar(30) NOT NULL,
RG varchar (30) NOT NULL,
Telefone varchar (30) NOT NULL,
Idade int (15) NOT NULL,
PRIMARY KEY (Id)
);
USE AutoEscola;
SELECT * FROM Instrutores;

CREATE TABLE Carros(
Id int(15) AUTO_INCREMENT,
Modelo varchar (30) NOT NULL,
Marca varchar (30) NOT NULL,
Ano int (15) NOT NULL,
Chassi varchar (30)NOT NULL,
Tipo varchar (30) NOT NULL,/*Hatch ou Sedan*/
PRIMARY KEY (Id)
);
SELECT * FROM Carros;
CREATE TABLE Cursos(
Id int(15) AUTO_INCREMENT,
Nome varchar(30) NOT NULL,
Turno varchar(30) NOT NULL,
C_Horaria int(15) NOT NULL,
Qtd_Alunos int(15) NOT NULL,
Professor varchar(30) NOT NULL,
PRIMARY KEY (Id)
);






















