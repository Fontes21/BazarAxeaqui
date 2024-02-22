<?php
   
 class Produto
 {
     private $Titulo;
     private $Marca;
     private $SemMarca;
     private $Descricao;
     private $ProdutoNovo;
     private $ProdutoUsado;
     private $Departamento;
     private $Categoria;
     private $Subcategoria;
     private $Quantidade;
     private $Tamanho;
     private $Peso;
     private $Preco;
     private $TipoDeEntrega;


     public function __construct(){}

     public function create($_Titulo, $_Marca, $_SemMarca,$_Descricao, $_produtoNovo, $_produtoUsado, $_Departamento, $_Categoria, $_Subcategoria, $_Quantidade, $_Tamanho, $_Peso, $_Preco, $_TipoDeEntrega) {

        $this->Titulo = $_Titulo;
        $this->Marca = $_Marca;
        $this->SemMarca= $_SemMarca;
        $this->Descricao = $_Descricao;
        $this->ProdutoNovo= $_ProdutoNovo;
        $this->ProdutoUsado = $_ProdutoUsado;
        $this->Departamento = $_Departamento;
        $this->Categoria = $_Categoria;
        $this->Subcategoria = $_Subcategoria;
        $this->Quantidade = $_Quantidade;
        $this->Tamanho = $_Tamanho;
        $this->Peso = $_Peso;
        $this->Preco = $_Preco;
        $this->TipoDeEntrega = $_TipoDeEntrega;
     }

     public function getTitulo() {
         return $this->Titulo;
     }

     public function getMarca() {
         return $this->Marca;
     }
    
     public function getSemMarca() {
         return $this->SemMarca;
     }

     public function getDescricao() {
         return $this->Descricao;
     }

     public function getProdutoNovo() {
         return $this->ProdutoNovo;
     }

     public function getProdutoUsado() {
        return $this->ProdutoUsado;
    }

    public function getDepartamento() {
        return $this->Departamento;
    }

    public function getTamanho() {
        return $this->Tamanho;
    }

    public function getSubcategoria() {
        return $this->Subcategoria;
    }

    public function getTamanho() {
        return $this->Tamanho;
    }

    public function getQuantidade() {
        return $this->Quantidade;
    }

    public function getPeso() {
        return $this->Peso;
    }

    public function getPreco () {
        return $this->Preco ;
    }

    public function getTipoDeEntrega() {
        return $this->TipoDeEntrega;
    }


//set

    public function setTitulo($_Titulo) {
        $this->Titulo = $_Titulo;
    }
     public function setMarca($_Marca) {
         $this->Marca = $_Marca;
     }

     public function setSemMarca($_SemMarca) {
        $this->senha = $_SemMarca;
    }

     public function setDescricao($_Descricao) {
         $this->Descricao = $_Descricao;
     }
     public function setProdutoNovo($_ProdutoNovo) {
         $this->ProdutoNovo = $_ProdutoNovo;
     }

     public function setProdutoUsado($_ProdutoUsado) {
         $this->ProdutoUsado = $_ProdutoUsado;
     }

     public function setDepartamento($_Departamento) {
         $this->Departamento = $_Departamento;
     }

     public function setCategoria($_Categoria) {
         $this->Categoria = $_Categoria;
     }

     public function setSubcategoria($_Subcategoria) {
        $this->Subcategoria= $_Subcategoria;
    }

    public function setTamanho($_Tamanho) {
        $this->Tamanho= $_Tamanho;
    }

    public function setQuantidade($_Quantidade) {
        $this->Quantidade = $_Quantidade;
    }

    public function setPeso($_Peso) {
        $this->Peso = $_Peso;
    }

    public function setPreco($_Preco) {
        $this->Preco = $_Preco;
    }

    public function setTipoDeEntrega($_TipoDeEntrega) {
        $this->TipoDeEntrega= $_TipoDeEntrega;
    }


    public function produto() {

        include_once('./db/conn.php');
        $sql = "CALL piProduto(:Titulo, :Marca, :SemMarca, :Descricao, :produtoNovo, :produtoUsado, :Departamento, :Categoria, :Subcategoria, :Quantidade, :Tamanho, :Peso, :Preco, :TipoDeEntrega)";

        $data = [
            'Titulo' => $this->Titulo,
            'Marca' => $this->Marca,
            'SemMarca' => $this->SemMarca,
            'Descricao' => $this->Descricao,
            'produtoNovo' => $this->produtoNovo,
            'produtoUsado' => $this->produtoUsado,
            'Departamento' => $this->Departamento,
            'Categoria' => $this->Categoria,
            'Subcategoria' => $this->Subcategoria
            'Quantidade' => $this->Quantidade,
            'Tamanho' => $this->Tamanho,
            'Peso' => $this->Peso,
            'Preco' => $this->Preco
            'TipoDeEntrega' => $this->TipoDeEntrega
        ];

        $statement = $conn->prepare($sql);
        $statement->execute($data);

        return true;
    }













 }
     ?>