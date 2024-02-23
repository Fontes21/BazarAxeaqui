<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div id="CADASTRE-SE AGORA:">

    <h1>Cadastrar Produto</h1>
</div>

<div class="caixa">

    <div id="cadastro">

    <form method="POST">

 
        <label>Titulo:</label><br> 
        <input type="text" placeholder= "ex: “blusa azul marinho”" name="Titulo" minlength="3" required><br><br>
 
        <label>Marca:</label><br>
        <input type="text" placeholder="qual a marca do produto?" name="Marca" minlength="3" required><br><br>

        <label>Produto sem marca</label><br></br>
       <input type="checkbox" name="SemMarca"><br></br>
 
        <label>Descrição:</label><br>
        <input type="text" placeholder="quase nuca usei, marca boa uma camisa linda.." name="Descricao" minlength="3" required><br><br>

        <label>Produto Novo</label><br></br>
        <input type="checkbox" name="ProdutoNovo"><br></br>

        <label>Produto Usado</label><br></br>
        <input type="checkbox" name="ProdutoUsado"><br></br>

        <label> Departamento:</label><br>
        <input type="text" placeholder="mulhes, homens,crianças,casa.." name="Departamento" minlength="3" required><br><br>

        <label> Categoria:</label><br>
        <input type="text" placeholder="roupa, acessórios, brinquedo..." name="Categoria" minlength="3" required><br><br>

        <label> Subcategoria:</label><br>
        <input type="text" placeholder="calça,moleton,lençol.." name="Subcategoria" minlength="3" required><br><br>
  
        <label>Quantidade:</label><br>
        <input type="text" placeholder="" name="Quantidade" required><br><br>

        <label>Tamanho:</label><br>
        <input type="text" placeholder="" name="Tamanho"  required><br><br>
      
        <label>Peso:</label><br>
        <input type="text" placeholder="" name="Peso" minlength="1" required><br><br>

        <label>Preço R$:</label><br>
        <input type="text" placeholder="" name="Preco" minlength="3" required><br><br>
      
        <label>Tipo de entrega:</label><br>
        <input type="text" placeholder="" name="TipoDeEntrega" minlength="3" required><br><br>


        <?php
 
        if (isset($_REQUEST["inserir"]) ) 
         {
            
            if (isset($_REQUEST["SemMarca"]))
            {
                $semMarca = 1;
            }
            else
            {
                $semMarca = 0;
            }

            if (isset($_REQUEST["ProdutoNovo"]))
            {
                $produtoNovo = 1;
            }
            else
            {
                $produtoNovo = 0;
            }

            if (isset($_REQUEST["ProdutoUsado"]))
            {
                $produtoUsado = 1;
            }
            else
            {
                $produtoUsado = 0;
            }


            include_once("produto.php");
            $u = new Produto (); 
            $u->create($_REQUEST["Titulo"], $_REQUEST["Marca"], $semMarca, $_REQUEST["Descricao"],$produtoNovo, $produtoUsado,$_REQUEST["Departamento"],$_REQUEST["Categoria"],$_REQUEST["Subcategoria"], $_REQUEST["Quantidade"], $_REQUEST["Tamanho"], $_REQUEST["Peso"],$_REQUEST["Preco"],$_REQUEST["TipoDeEntrega"]);
            echo $u->produto() == true 
             ?"<p>Produto cadastrado com sucesso.</p>" 
              :  "<p>Ocorreu um erro.</p>";
        }
    ?>

    <input type="submit" name="inserir" value="Cadastrar">

</form>