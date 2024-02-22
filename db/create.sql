CREATE TABLE Cliente (
    idcliente       INT PRIMARY KEY AUTO_INCREMENT,  
    nome            VARCHAR(100) not null,
    email           VARCHAR(100) not null,
    senha           VARCHAR(100) not null,
    femininas       INt,
    masculinas      INT,
    outrosProdutos  INT,
    vender          INt,
    comprar         INt,
    ambos           INt
);



DELIMITER //
CREATE PROCEDURE picliente (
    IN _id              INt,
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
    INSERT INTO usuario (id, nome, email,femninas, masculinas, outrosProdutos, vender, comprar,ambos)
    VALUES (_id,_nome, _email, _senha, _femininas , _masculinas, _outrosProdutos, _vender, _comprar, _ambos);
END //
 


 DELIMITER //
CREATE PROCEDURE psListarCliente
(
	IN _id		INt,
)
BEGIN
SELECT idCliente, nome, email, senha, femininas, masculinas, outrosProdutos, vender, comprar, ambos
FROM cliente WHERE nome LIKE CONCAT(_nome, '%');
END


DELIMITER  //
CREATE PROCEDURE pddeletar
(
in _id 		int
)
BEGIN
	DELETE FROM cliente WHERE idcliente = _id;
END  // 	



DELIMITER  //
CREATE PROCEDURE piProduto(
    
    IN _Titulo          VARCHAR(100),
    IN _Marca           VARCHAR(100),
    IN _SemMarca		INT(0),
    IN _Descricao       VARCHAR(100),
    IN _produtoNovo     INT(0),
    IN _produtoUsado    INT(0),
    IN _Departamento    VARCHAR(100),
    IN _Categoria       VARCHAR(100),
    IN _Subcategoria    VARCHAR(100),
    IN _Quantidade      VARCHAR(100),
    IN _Tamanho         VARCHAR(100),
    IN _Peso            VARCHAR(100),
    IN _Preco           VARCHAR(100),
    IN _TipoDeEntrega   VARCHAR(100)
)
BEGIN
    INSERT INTO usuario (Titulo, Marca, SemMarca, Descricao, produtoNovo, produtoUsado, Departamento, Categoria, Subcategoria, Quantidade, Tamanho, Peso, Preco, TipoDeEntrega)
    VALUES (_Titulo, _Marca, _SemMarca, _Descricao, _produtoNovo, _produtoUsado, _Departamento, _Categoria, _Subcategoria, _Quantidade, _Tamanho, _Peso, _Preco, _TipoDeEntrega);
END //