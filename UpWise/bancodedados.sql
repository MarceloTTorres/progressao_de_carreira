create database UPWISE;
use UPWISE;


create table Usuario(
ID_usuario int primary key auto_increment not null, 
Score  int not null, 
Foto blob, /*campo que armazena imagens*/
Nome varchar(20),
Email varchar(40),
Tipo varchar (20), /*não entendi esse campo então coloquei varchar mesmo*/
Senha varchar(20)
);


create table Nivel(
ID_nivel int primary key not null auto_increment,
Descricao varchar(30),
Requisitos varchar(20)
);


create table Linguagem(
ID_linguagem int primary key auto_increment not null,
Nome varchar(20),
Modalidade varchar(20)
);


create table Curso(
ID_curso int primary key auto_increment not null,
Conteudo mediumblob, /*Os conteúdos serão em formato de vídeo aula?*/ 
Carga_horaria time,
Nome varchar(20),
Certificado varchar(40),
FOREIGN KEY (ID_curso) REFERENCES Linguagem(ID_linguagem)
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






