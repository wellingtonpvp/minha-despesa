CREATE DATABASE bd_mocidade
    DEFAULT CHARACTER SET utf8mb4
    DEFAULT COLLATE utf8mb4_general_ci;

CREATE TABLE registros(
    id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    titulo VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    carteira VARCHAR(255) NOT NULL,
    tipo_valor VARCHAR(10) NOT NULL,
    data_cadastro DATETIME NOT NULL
);

CREATE TABLE carteiras(
    id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    nome VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
);

INSERT INTO carteiras 
    (id, nome, valor) 
VALUES
    (DEFAULT, 'digital', 0),
    (DEFAULT, 'fisico', 0);