create database faculdade;
use faculdade;

/*Taty*/
create table protocolo(
	id_protocolo int(5) auto_increment,
    observacao_protocolo varchar(50) not null,
    valor_protocolo float(5) not null,
    situacao_protocolo varchar(50) not null,
    primary key(id_protocolo)
);

/*Bruno*/
create table chamada(
	id_chamada int(5) auto_increment,
    data_chamada varchar(50) not null,
    horario_chamada varchar(50) not null,
    disciplina_chamada varchar(50) not null,
    aluno_chamada varchar(50) not null,
    presenca_chamada varchar(50) not null,
    primary key(id_chamada)
);

/*Jorge*/
create table professor(
	id_professor int(5) auto_increment,
    nome_professor varchar(50) not null,
    disciplina_professor varchar(50) not null,
    ponto_professor varchar(50) not null,
    rg_professor varchar(50) not null,
    cpf_professor varchar(50) not null,
    telefone_professor varchar(50) not null,
    endereco_professor varchar(50) not null,
    primary key(id_professor)
);

/*Thiago*/
create table aluno(
id_aluno int(5) auto_increment,
nome_aluno varchar(50) not null,
sobrenome_aluno varchar(50) not null,
telefone_aluno varchar(50) not null,
idade_aluno int(5) not null,
curso_aluno varchar(50) not null,
turma_aluno varchar(50) not null,
primary key(id_aluno)
);

/*Luiz / Savio*/
create table ponto(
	id_ponto int(5) auto_increment,
    nome_colaborador_ponto varchar(50) not null,
    data_ponto varchar(50) not null,
    acao_ponto varchar(50) not null,
	hora_ponto varchar(50) not null,
    primary key(id_ponto)
);

/*Giovani*/
CREATE TABLE funcionario(
	id_funcionario int(5) auto_increment,
    nome_funcionario varchar(50) not null,
    cpf_funcionario varchar(50) not null,
    rg_funcionario varchar (20) not null,
    pis_funcionario varchar(20) not null,
    cargo_funcionario varchar(50) not null,
    endereco_funcionario varchar(50) not null,
	salario_funcionario float(50) not null,
    carga_horaria_funcionario int(10) not null,
    telefone_funcionario varchar(50) not null,
    primary key(id_funcionario)
);

/*Vinicius*/
create table estacionamento(
	id_estacionamento int(5) auto_increment,
    carro_estacionamento varchar(50) not null,
    placa_estacionamento varchar(50) not null,
    vaga_estacionamento varchar(50) not null,
    primary key(id_estacionamento)
);

/*Gabriel B.*/
create table nota(
	id_nota int(5) auto_increment,
    aluno_nota varchar(50) not null,
    disciplina_nota varchar(50) not null,
    periodo_nota float(5) not null,
    nota1_nota float(5) not null,
    nota2_nota float(5) not null,
    nota3_nota float(5) not null,
    nota4_nota float(5) not null,
    exame_final_nota float(5) not null,
    media_final_nota float(5) not null,
    situacao_nota varchar(50) not null,
    primary key(id_nota)
);

/*Gabriel R.*/
CREATE TABLE turma(
id_turma int (5) auto_increment,
curso_turma varchar (50) not null,
periodo_turma int (5) not null,
qtd_aluno_turma int (5) not null, 
sala_turma int (5) not null,
representante_turma varchar (50) not null,
materias_turma varchar (50) not null,
primary key (id_turma)

);

/*Matheus*/
CREATE TABLE fornecedor(

    id_fornecedor int AUTO_INCREMENT,
    razao_social_fornecedor varchar(30) NOT NULL,
    fantasia_fornecedor varchar(30) NOT NULL,
    cnpj_fornecedor varchar(20) NOT NULL,
    inscricao_estadual_fornecedor varchar(20) NOT NULL,
    endereco_fornecedor varchar(30) NOT NULL,
    pais varchar(10) NOT NULL,
    segmento varchar(20) NOT NULL,    
    PRIMARY KEY(id_fornecedor)
);

/*Diego*/
create table disciplina(
	id_disciplina int(5) auto_increment,
    nome_disciplina varchar(50) not null,
    carga_horario_disciplina varchar(50) not null,
    curso_disciplina varchar(50) not null,
    primary key(id_disciplina)
);

/*Karan*/
create table cantina(
	id_compra_cantina int(5) auto_increment,
    produto_cantina varchar(50) not null,
    vendedor_cantina varchar(50) not null,
    quantidade_cantina int(5) not null,
    valor_unitario_cantina float(5) not null,
    valor_total_cantina float(5) not null,
    primary key(id_compra_cantina)
);

/*Jackson*/
create table sala(
	id_sala int(5) auto_increment,
    andar_sala int(5) not null,
    curso_sala varchar(50) not null,
    periodo_sala varchar(50) not null,
    turno_sala varchar(50) not null,
    primary key(id_sala)
);