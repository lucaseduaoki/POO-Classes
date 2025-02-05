CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(1), /* Filme (F) ou Série (S)*/
    nome VARCHAR(255) NOT NULL,
    data_lanc DATE NOT NULL,
    class_indicativa INT NOT NULL,
    diretor_id INT NOT NULL,
    genero VARCHAR(100) NOT NULL,
    adaptado_de_livro BOOLEAN NOT NULL DEFAULT 0,
    disponivel_web BOOLEAN NOT NULL DEFAULT 0,
    num_temporadas INT,
    temp_aprox_ep INT,
    num_aprox_ep INT,
    tempo_duracao INT,
    continuidade BOOLEAN NOT NULL DEFAULT 0,
    cinema BOOLEAN NOT NULL DEFAULT 0,
    unidade_fisica BOOLEAN NOT NULL DEFAULT 0,
);
