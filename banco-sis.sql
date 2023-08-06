
USE SIS;

CREATE TABLE Aluno(
id INT PRIMARY KEY,
nome VARCHAR(100),
endereco VARCHAR(80),
idade SMALLINT,
datanascimento DATE,
statusaluno BOOL,
matricula VARCHAR(11)
);

CREATE TABLE Professor(
id smallint AUTO_INCREMENT PRIMARY KEY,
nome varchar(100),
cpf varchar(11),
SIAPE varchar(10), 
idade smallint, 
datanascimento date, 
endereco varchar(100), 
statusProf BOOL
);

CREATE TABLE Disciplina(
  id SMALLINT(6) NOT NULL PRIMARY KEY ,
  nomedisciplina VARCHAR(100) DEFAULT NULL,
  ch varchar(3) DEFAULT NULL,
  semestre varchar(5) DEFAULT NULL
);