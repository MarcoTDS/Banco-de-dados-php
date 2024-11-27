-- Active: 1732575140111@@localhost@3306@produtos
CREATE TABLE produtos (
	id INTEGER NOT NULL AUTO_INCREMENT,
	descricao VARCHAR(50) NOT NULL,
	un_medida VARCHAR(50) NOT NULL,
	CONSTRAINT pk_produtos PRIMARY KEY (id)
);
