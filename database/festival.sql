CREATE DATABASE festival;
USE festival;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(120) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO admins (email, senha)
VALUES ('admin@email.com', SHA2('123456', 256));

CREATE TABLE participantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150),
    telefone VARCHAR(20),
    cidade VARCHAR(100),
    doacao DECIMAL(10,2),
    observacao TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
