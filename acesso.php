<?php
    include_once("cliente.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="stylee.css" rel="stylesheet">
    <script src="assets/js/util.js"></script>
</head>
<body>

   <img src="img/banner.png">

    <h1>Acesso</h1>

 

    <div id="cadastro">

    <form method="POST">
        <label>Email:</label> 
        <input type="text" name="email" minlength="3" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" minlength="3" required><br><br>

        <input type="submit" name="acessar" value="Acessar">

        
    </div>

        <?php

            if (isset($_REQUEST["acessar"]))
            {
                $u = new Cliente ();
        

                if ($u->conectarCliente($_REQUEST["email"], $_REQUEST["senha"]) == 0)
                {
                    echo "<p>Email e/ou senha incorreto(s).</p>";                   
                }
                else {
                    session_start();
                    $_SESSION["nome"] = $u->getNome();

           
                    // $cookieName = "nome";
                    // $cookieValue = $u->getNome();
                    // setcookie($cookieName, $cookieValue, time() + 86400, "/");
                    header("Location: inicio.php");
                }
            }
            

        ?>

    </form>


    
</body>
</html>