CREATE TABLE usuario (
    idcliente       INT PRIMARY KEY AUTO_INCREMENT,  
    nome            VARCHAR(100) not null,
    email           VARCHAR(100) not null,
    senha           VARCHAR(100) not null,
    feminina        INt,
    masculina       INT,
    outrosProdutos  INT,
    vender          INt,
    comprar         INt,
    ambos           INt
);


DELIMITER //
 
CREATE PROCEDURE picliente (
    IN _nome            VARCHAR(100),
    IN _email           VARCHAR(100),
    IN _senha			VARCHAR(100),
    IN _femininas       INT(0),
    IN _masculinas      INT(0),
    IN _outrosProdutos  INT(0),
    IN _vender          INT(0),
    IN _comprar         INT(0),
    IN _ambos           INT(0)
)
BEGIN
    INSERT INTO usuario (nome, email,femninas, masculinas, outrosProdutos, vender, comprar,ambos)
    VALUES (_nome, _email, _senha, _femininas , _masculinas, _outrosProdutos, _vender, _comprar, _ambos);
END //
 
