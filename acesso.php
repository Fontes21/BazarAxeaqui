<?php
    include_once("cliente.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> 
    <link href="CSS/stylee3.css" rel="stylesheet">
</head>
<body>


<div class="banner">
    <div class= "hamburguer">
    <button id="botao-hamburguer">☰</button>
    </div>


<div class='bannermenu'>
</div>

    <h1>Area de Login</h1>

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
    
<footer>

 <div class="rodape">

<div class='redes'>
</div>

</div>
    <p>Av. Conselheiro Nébias, 309 Vila Matias, Santos - SP, 11015-003-  (13)  12345-6789</p> 
    <p>Abre Seg a Sexta às 08:00 até 18:00  Dom e Sáb: 09:00 ás 13:00 </p>
    <p>@Bazar_AxeAki     Bazar_AxeAki   Bazar_axeaki@gmail.com </p>
</div>
 

</footer>
    
</body>
</html>