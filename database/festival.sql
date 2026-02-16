-- =====================================================
-- DATABASE
-- =====================================================
CREATE DATABASE IF NOT EXISTS festival
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_unicode_ci;

USE festival;

-- =====================================================
-- ADMINS
-- =====================================================
CREATE TABLE admins (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(120) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- senha: 123456
INSERT INTO admins (email, senha)
VALUES (
    'admin@email.com',
    '$2y$10$wH8KqJ0bXQ9Y6lKQJQ7kUO7qZqj3Qq7Qq7Qq7Qq7Qq7Qq7Qq7Qq7Q'
);
-- 🔐 gere com password_hash no PHP

-- =====================================================
-- PARTICIPANTES
-- =====================================================
CREATE TABLE participantes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150),
    telefone VARCHAR(20),
    cidade VARCHAR(100),
    doacao DECIMAL(10,2) DEFAULT 0.00,
    observacao TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    INDEX (nome),
    INDEX (cidade)
) ENGINE=InnoDB;

-- =====================================================
-- PROGRAMAÇÃO
-- =====================================================
CREATE TABLE programacao (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    atividade VARCHAR(255) NOT NULL,
    responsavel VARCHAR(150),

    INDEX (data),
    INDEX (hora)
) ENGINE=InnoDB;
