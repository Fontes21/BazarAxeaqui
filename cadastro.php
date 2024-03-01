<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> 
    <link href="style.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="menu">
        <a>Inicio</a>
        <a>Contato</a>
        <a>Minha Sacola</a>
        <a>Perfil</a>
    </div>
</header>

<div class="conjunto"> 

    <div id="cadascliente">

    <h1>CADASTRE-SE AGORA:</h1>

    <form method="POST">

 
        <label>Nome:</label><br> 
        <input type="text" placeholder= "Informe seu nome completo" name="nome" minlength="3" required><br><br>
 
        <label>Email:</label><br>
        <input type="email" placeholder="Informe seu e-mail" name="email" minlength="3" required><br><br>
 
        <label>Senha:</label><br>
        <input type="password" placeholder="Informe uma senha com 8 caracteres ou mais" name="senha" minlength="3" required><br><br>

    
    <label>Tenho interesse em peças:<label><br>

        <div class="opcao">  

      <article class="caixa"> 
       <label>Femininas:</label><br></br>
       <input type="checkbox" name="femininas"><br></br>
       </article>

       <article class="caixa">
        <label>Masculinas:</label><br></br>
        <input type="checkbox" name="masculinas"><br></br>
        </article>
    
        <article class="caixa">
        <label>Outros Produtos:</label><br></br>
        <input type="checkbox" name="outrosProdutos"><br></br>
        </article>

    </div>

        <label>Você deseja:</label><br></br>

        <section class="opcao">

        <article class="caixa">
        <label>Vender:</label><br></br>
        <input type="checkbox" name="vender"><br></br>
        </article>

        <article class="caixa">
        <label>Comprar:</label><br>
        <input type="checkbox" name="comprar"><br></br>
        </article>

        <article class="caixa">
        <label>Ambos:</label><br></br>
        <input type="checkbox" name="ambos"><br></br>
        </article>

        </section>
  
    </div>

<div class='moça'>
</div>

</div>

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