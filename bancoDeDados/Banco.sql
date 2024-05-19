CREATE TABLE email(
    id INTERGER AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    senha VARCHAR(255)
)

CREATE TABLE respostas(
    id INTERGER AUTO_INCREMENT PRIMARY KEY,
    pergunta VARCHAR(255),
    respoastas VARCHAR(255),
    respostas_usuarios VARCHAR(255),
    resultado INTERGER (99)
)