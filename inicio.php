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
    <h1>Bazar Axe Aqui</h1>

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