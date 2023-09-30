create database futebol;
use futebol;


create table equipa (
idEquipa int primary key AUTO_INCREMENT NOT NULL, 
nomeEquipa VARCHAR(50)
);

create table jogador (
idJogador int primary key AUTO_INCREMENT NOT NULL, 
nomeJogador VARCHAR(50),
idadeJogador INT,
pesoJogador DECIMAL(4,2),
alturaJogador DECIMAL(3,1),
idEquipa INT,
FOREIGN KEY (idEquipa) 
REFERENCES equipa(idEquipa)
on delete CASCADE 
);

create table jogo(
idJogo int primary key AUTO_INCREMENT NOT NULL,
temaJogo VARCHAR(50),
idEquipaA int,
FOREIGN KEY (idEquipaA) REFERENCES equipa(idEquipa) on delete CASCADE,
idEquipaB int,
FOREIGN KEY (idEquipaB) REFERENCES equipa(idEquipa) on delete CASCADE,
horaJogo TIME,
dataJogo DATE,
estadoJogo bool,
infoJogo bool 
);