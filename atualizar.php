<?php
  include_once("produto.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src= "JavaScript/util.js"></script>
    <link href="styleee.css" rel="stylesheet">
</head>
<body>
    <?php

        $p = new Produto();
        $p->buscarProduto($_GET["pid"]);

        echo "
            <form method='POST'>

            <label>Titulo:</label>
            <input type='text' name='Titulo' 'value='" . $p->getTitulo() . "' readonly> <br>

            <label> Marca:</label>
            <input type='text' name='Marca' minlength='3' 'value='" . $p->getMarca() . "' required> <br>

            <label> SemMarca</label>
            <input type='checkbox' name='SemMarca' minlength='3' 'value='" . $p->getSemMarca() . " ' required> <br>

            <label> Descricao:</label>
            <input type='text' name='Descricao' minlength='3' 'value='" . $p->getDescricao() . " ' required> <br>

            <label> ProdutoNovo:</label>
            <input type='checkbox' name='ProdutoNovo' minlength='3' 'value='" . $p->getProdutoNovo() . " ' required> <br>

            <label> ProdutoUsado:</label>
            <input type='checkbox' name='ProdutoUsado' minlength='3' 'value='" . $p->getProdutoUsado() . " ' required> <br>

            <label> Departamento:</label>
            <input type='checkbox' name='Departamento' minlength='3' 'value='" . $p->getDepartamento() . " ' required> <br>

            <label> Categoria:</label>
            <input type='text' name='Categoria' minlength='3' 'value='" . $p->getCategotia() . " ' required> <br>

            <label> Subcategoria:</label>
            <input type='text' name='Subcategoria' minlength='3' 'value='" . $p->getSubcategoria() . " ' required> <br>

            <label> Quantidade:</label>
            <input type='text' name='Quantidade' minlength='3' 'value='" . $p->getQuantidade() . " ' required> <br>

            <label>Tamanho:</label>
            <input type='text' name='Tamanho' minlength='3' 'value='" . $p->getTamanho() . " ' required> <br>

            <label>Peso:</label>
            <input type='text' name='Peso' minlength='3' 'value='" . $p->getPeso() . " ' required> <br>

            <label>Preco:</label>
            <input type='text' name='Preco' minlength='3' 'value='" . $p->getPreco() . " ' required> <br>

            <label>TipoDeEntrega:</label>
            <input type='text' name='TipoDeEntrega' minlength='3' 'value='" . $p->getTipoDeEntrega() . " ' required> <br>


            <input type='submit' name='atualizar' value='Atualizar'>
        ";

        if ( isset($_REQUEST["atualizar"]) ) 
        {
           
            $p->setTitulo($_REQUEST["Titulo"]);
            $p->setMarca($_REQUEST["Marca"]);
            $p->setSemMarca($_REQUEST["SemMarca"]);
            $p->setDescricao($_REQUEST["Descricao"]);
            $p->setProdutoNovo($_REQUEST["ProdutoNovo"]);
            $p->setProdutoUsado($_REQUEST["ProdutoUsado"]);
            $p->setDepartamento($_REQUEST["Departamento"]);
            $p->setCategoria($_REQUEST["Categoria"]);
            $p->setSubCategoria($_REQUEST["SubCategoria"]);
            $p->setQuantidade($_REQUEST["Quantidade"]);
            $p->setTamanho($_REQUEST["Tamanho"]);
            $p->setpeso($_REQUEST["peso"]);
            $p->setpreco($_REQUEST["preco"]);
            $p->setTipoDeEntrega($_REQUEST["TipoDeEntrega"]);

            echo $p->atualizarProduto($_REQUEST["id"]) == true ?
                    "<p>Usuario atualizado.</p>" :
                    "<p>Ocorreu um erro.</p>";
        }
    ?>

</form>
</body>
</html>