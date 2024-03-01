<?php
    include_once("cliente.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<div class="banner">
    <div class= "botao">
        <button id="botao-hamburguer">☰</button>
    </div>
        <img src="img/banner2.png" width="390px" height="130px" >  
</div>












    <?php

        session_start();
  
       
          if (isset($_SESSION["nome"]))
        {
        echo "<p>Seja Bem-vindo/a, " . $_SESSION["nome"] . "</p>";
        }
          else {
          header("Location: acesso.php");
     }
 
    ?>
    <a href="sair.php">Login</a>
</body>
</html>