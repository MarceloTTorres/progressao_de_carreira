create database UPWISE;
use UPWISE;


create table Usuario(
ID_usuario int primary key auto_increment not null, 
Score  int not null, 
Foto blob, 
Nome varchar(20) not null,
Email varchar(40) not null,
Tipo varchar (20), 
Senha int not null
);

select*from usuario;

create table Nivel(
ID_nivel int primary key not null auto_increment,
Descricao varchar(30),
Requisitos varchar(20)
);


create table Linguagem_atual(
ID_linguagem int primary key auto_increment not null,
Desktop varchar(20),
 Web varchar(20),
 Mobile varchar(20)
);


create table Curso(
ID_curso int primary key auto_increment not null,
Conteudo mediumblob, 
Carga_horaria time,
Nome varchar(20),
Certificado varchar(40),
FOREIGN KEY (ID_curso) REFERENCES Linguagem_atual(ID_linguagem)
);


create table Curso_usuario(
ID_curso_usuario int primary key auto_increment not null,
FOREIGN KEY (ID_curso_usuario) REFERENCES Curso(ID_curso),
FOREIGN KEY (ID_curso_usuario) REFERENCES Usuario(ID_usuario)
);


create table Teste(
ID_teste int primary key auto_increment not null, 
Nota decimal(10,2),
FOREIGN KEY (ID_teste) REFERENCES Curso(ID_curso),
FOREIGN KEY (ID_teste) REFERENCES Usuario(ID_usuario),
FOREIGN KEY (ID_teste) REFERENCES Nivel(ID_nivel)
);







