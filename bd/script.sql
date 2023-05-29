-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE experimento (
idExperimento INT AUTO_INCREMENT PRIMARY KEY ,
idParticipante VARCHAR(13),
codAtividade INT,
dataHoraInicio DATETIME,
acerto BOOL,
dataHoraFinal DATETIME,
duracao FLOAT(10,2)
);

