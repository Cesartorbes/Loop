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
        img VARCHAR(100) NOT NULL,
        destaque_lancamento INT NOT NULL,
        PRIMARY KEY (musica_id)
    );

    INSERT INTO `usuario`(`nome`, `senha`, `email`, `telefone`,`dataentrada`) VALUES ('admin','123','admin@gmail.com','(00) 00000-0000','2022-10-04');
    INSERT INTO `usuario`(`nome`, `senha`, `email`, `telefone`,`dataentrada`) VALUES ('teste','123','tete@gmail.com','(99) 99999-9999','2022-10-04');

    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('Sinfonia dos crias','images/Sinfonia dos crias.jpg',1);
    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('Why we lose','images/why we lose.jpg',0);
    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('amiga da minha mulher','images/amiga da minha mulher.jpg',1);
    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('Fair trade', 'images/Fair trade.jpg', 0);
    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('earfquake', 'images/earfquake.jpg', 1);
    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('finesse', 'images/finesse.jpg', 1);
    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('golden hour', 'images/golden hour.jpg', 0);
    INSERT INTO `musica`(`nome`, `img`,`destaque_lancamento`) VALUES ('Do not disturb', 'images/Do not disturb.jpg', 0);