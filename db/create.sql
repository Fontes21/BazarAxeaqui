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

//SELECT * FROM Vestuario


DELIMITER  //
CREATE PROCEDURE piProduto(
    
    IN _Titulo          VARCHAR(100),
    IN _Marca           VARCHAR(100),
    IN _SemMarca		INT(0),
    IN _Descricao       VARCHAR(100),
    IN _ProdutoNovo     INT(0),
    IN _ProdutoUsado    INT(0),
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
    INSERT INTO produto (Titulo, Marca, SemMarca, Descricao, ProdutoNovo, ProdutoUsado, Departamento, Categoria, Subcategoria, Quantidade, Tamanho, Peso, Preco, TipoDeEntrega)
    VALUES (_Titulo, _Marca, _SemMarca, _Descricao, _ProdutoNovo, _ProdutoUsado, _Departamento, _Categoria, _Subcategoria, _Quantidade, _Tamanho, _Peso, _Preco, _TipoDeEntrega);
END //


CREATE TABLE Produto (
    idproduto       INT PRIMARY KEY AUTO_INCREMENT,  
    Titulo          VARCHAR(100),
    Marca           VARCHAR(100),
    SemMarca		INT(0),
    Descricao       VARCHAR(100),
    ProdutoNovo     INT(0),
    ProdutoUsado    INT(0),
    Departamento    VARCHAR(100),
    Categoria       VARCHAR(100),
    Subcategoria    VARCHAR(100),
    Quantidade      VARCHAR(100),
    Tamanho         VARCHAR(100),
    Peso            VARCHAR(100),
    Preco           VARCHAR(100),
    TipoDeEntrega   VARCHAR(100)
);


DELIMITER //
CREATE PROCEDURE psListarProduto
(
	IN _Titulo		VARCHAR (100)
)
BEGIN
SELECT *
FROM produto WHERE Titulo LIKE CONCAT(_Titulo, '%');
END


DELIMITER  //
CREATE PROCEDURE pddeletarProduto
(
in _id 		int
)
BEGIN
	DELETE FROM produto WHERE idproduto = _id;
END  // 	


DELIMITER //
CREATE PROCEDURE psLoginCliente
(
	IN	_email		VARCHAR(100),
    IN	_senha			VARCHAR(100)
)
SELECT * FROM Cliente WHERE email = _email AND senha = _senha


DELIMITER //
CREATE PROCEDURE puAtualizar
(
	IN _Titulo          VARCHAR(100),
    IN _Marca           VARCHAR(100),
    IN _SemMarca        INT(0),
    IN _Descricao       VARCHAR(100),
    IN _ProdutoNovo     INT(0),
    IN _ProdutoUsado    INT(0),
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
	UPDATE Produto
    SET
      Titulo = _Titulo,
      Marca = _Marca,
      SemMarca = _SemMarca,
      Descricao = _Descricao,
      ProdutoNovo = _ProdutoNovo,
      ProdutoUsado = _ProdutoUsado,
      Departamento = _Departamento,
      Categoria = _Categoria,
      Subcategoria = Subcategoria,
      Quantidade= _Quantidade,
      Tamanho = Tamanho,
      Peso = _Peso,
      Preco = _Preco,
      TipoDeEntrega = _TipoDeEntrega
      WHERE idProduto= _id;
END

DELIMITER // 
CREATE PROCEDURE psBuscarProduto
(
IN    id 	int
)
BEGIN
 
SELECT * FROM produto
where idproduto = id;
 
END //