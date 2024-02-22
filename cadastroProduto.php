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
        <input type="text" placeholder= "ex: “blusa azul marinho”" name="nome" minlength="3" required><br><br>
 
        <label>Marca:</label><br>
        <input type="email" placeholder="qual a marca do produto?" name="email" minlength="3" required><br><br>

        <label>produto sem marca</label><br></br>
       <input type="checkbox" name="femininas"><br></br>
 
        <label>Descrição:</label><br>
        <input type="password" placeholder="mulhes, homens,crianças,casa.." name="senha" minlength="3" required><br><br>

        <label>produto novo</label><br></br>
        <input type="checkbox" name="femininas"><br></br>

        <label>produto usado</label><br></br>
        <input type="checkbox" name="femininas"><br></br>

        <label> Departamento:</label><br>
        <input type="password" placeholder="mulhes, homens,crianças,casa.." name="senha" minlength="3" required><br><br>

        <label> Categoria:</label><br>
        <input type="password" placeholder="roupa, acessórios, brinquedo..." name="senha" minlength="3" required><br><br>

        <label> Subcategoria:</label><br>
        <input type="password" placeholder="" name="senha" minlength="3" required><br><br>
  
        <label>Quantidade:</label><br>
        <input type="password" placeholder="" name="senha" minlength="3" required><br><br>

        <label>Tamanho:</label><br>
        <input type="password" placeholder="s" name="senha" minlength="3" required><br><br>
      
        <label>Peso:</label><br>
        <input type="password" placeholder="" name="senha" minlength="3" required><br><br>

        <label>Preço:</label><br>
        <input type="password" placeholder="R$" name="senha" minlength="3" required><br><br>
      
        <label>Tipo de entrega:</label><br>
        <input type="password" placeholder="" name="senha" minlength="3" required><br><br>


        <?php
 
        if (isset($_REQUEST["inserir"]) ) 
         {
            
            $feminina = "";
            $masculina = "";
            $outros = "";
            $vender = "";
            $comprar = "";
            $ambos = "";

            include_once("cliente.php");
            $u = new Produto (); 
            $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["senha"], $feminina, $masculina ,$outros, $vender, $comprar,$ambos); 

             echo $u->cliente() == true 
             ?"<p>cadastrado com sucesso.</p>" 
              :  "<p>Ocorreu um erro.</p>";
        }
    ?>

    <input type="submit" name="inserir" value="Cadastrar">

    <?php
 
        if (isset($_REQUEST["inserir"]) ) 
         {
            
            $feminina = "";
            $masculina = "";
            $outros = "";
            $vender = "";
            $comprar = "";
            $ambos = "";

            include_once("cliente.php");
            $u = new Cliente(); 
            $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["senha"], $feminina, $masculina ,$outros, $vender, $comprar,$ambos); 

             echo $u->cliente() == true 
             ?"<p>cadastrado com sucesso.</p>" 
              :  "<p>Ocorreu um erro.</p>";
        }
    ?>

</form>