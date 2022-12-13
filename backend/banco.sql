    DROP DATABASE IF EXISTS loopdb;
    
    CREATE DATABASE IF NOT EXISTS loopdb;
    
    USE loopdb;

    CREATE TABLE usuario( 
        usuario_id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL, 
        senha VARCHAR(40) NOT NULL,
        email VARCHAR(120) NOT NULL,
        telefone varchar(20) NOT NULL,
        dataentrada date NOT NULL,
        PRIMARY KEY (usuario_id)
    );
    CREATE TABLE musica(
        musica_id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL, 
        destaque INT DEFAULT 0,
        lancamento INT DEFAULT 0,
        PRIMARY KEY (musica_id)
    );

    INSERT INTO `usuario`(`nome`, `senha`, `email`, `telefone`,`dataentrada`) VALUES ('admin','123','admin@gmail.com','(00) 00000-0000','2022-10-04');
    INSERT INTO `usuario`(`nome`, `senha`, `email`, `telefone`,`dataentrada`) VALUES ('teste','123','tete@gmail.com','(99) 99999-9999','2022-10-04');