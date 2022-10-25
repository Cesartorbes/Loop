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
        premium INT default 0,
        PRIMARY KEY (usuario_id)
    );
    CREATE TABLE musica(
        musica_id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL, 
        datacadastro date NOT NULL,
        premium INT,
        destaque INT,
        lancamento INT,
        PRIMARY KEY (musica_id)
    )

    INSERT INTO `usuario`(`nome`, `senha`, `email`, `telefone`,`dataentrada`,`premium`) VALUES ('admin','123','admin@gmail.com','(00) 0000-0000','2022-10-04','1');
    INSERT INTO `usuario`(`nome`, `senha`, `email`, `telefone`,`dataentrada`,`premium`) VALUES ('teste','123','tete@gmail.com','(99) 9999-9999','2022-10-04','0');