CREATE DATABASE carro;

CREATE TABLE tb_carro(
    id_cr int PRIMARY KEY AUTO_INCREMENT,
    nome_cr VARCHAR(100),
    ano_cr INT,
    preco_cr DOUBLE,
    descricaoCarro_cr VARCHAR(100),
    fotoNome_cr VARCHAR(100),
    caminhoFoto_cr VARCHAR(100)    
);