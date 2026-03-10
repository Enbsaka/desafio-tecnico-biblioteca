CREATE DATABASE biblioteca;

USE biblioteca;

CREATE TABLE categoria (
codigo INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100)
);

INSERT INTO categoria (nome) VALUES
('Tecnologia'),
('Romance'),
('Ficção Científica'),
('História');

CREATE TABLE livro (
codigo INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(255),
autor VARCHAR(255),
ano_publicacao INT,
categoria INT
);