/* Aula OO - Persistência */

CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(1) NOT NULL, /* Filme (F) ou Série (S)*/
    nome VARCHAR(255) NOT NULL,
    data_lanc DATE NOT NULL,
    class_indicativa INT NOT NULL,
    diretor VARCHAR(100) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    adaptado_de_livro VARCHAR(5) NOT NULL DEFAULT 0,
    disponivel_web VARCHAR(5) NOT NULL DEFAULT 0,
    num_temporadas INT,
    temp_aprox_ep INT,
    num_aprox_ep INT,
    tempo_duracao INT,
    continuidade VARCHAR(5),
    cinema VARCHAR(5),
    unidade_fisica VARCHAR(5)
);
