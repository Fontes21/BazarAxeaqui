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

    <h1>Área de Login</h1>

    <form method="POST">


        <label>Email:</label> 
        <input type="text" name="email" minlength="3" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" minlength="3" required><br><br>

        <input type="submit" name="acessar" value="Acessar">

        
        <?php

            if (isset($_REQUEST["acessar"]))
            {
                $u = new cliente();
        

                if ($u->cliente($_REQUEST["email"], $_REQUEST["senha"]) == 0)
                {
                    echo "<p>Email e/ou senha incorreto(s).</p>";                   
                }
                else {
                    ////Utilizando dados em sessão
                    // session_start();
                    // $_SESSION["nome"] = $u->getEmail();
                    // header("Location: areaRestrita.php"); //redirecionando para outra página

                    $cookieName = "nome";
                    $cookieValue = $u->getNome();
                    setcookie($cookieName, $cookieValue, time() + 86400, "/");
                    header("Location: areaRestrita.php");
                }
            }
            

        ?>
