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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> 
    <link href="CSS/stylee4.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<header class="header">
    <div class="menu">
        <a>Inicio</a>
        <a>Contato</a>
        <a>Minha Sacola</a>
        <a>Perfil</a>
    </div>
</header>


<header class="principal"> 
 <div class="menuu">
        <a>Inicio</a>
        <a>Contato</a>
        <a>Minha Sacola</a>
        <a>Perfil</a>
    </div>
    <button class="CP">Cadastrar Produto</button>
    <button class="CP">Login</button>
</header>


<div class="banner">
    <div class= "hamburguer">
    <button id="botao-hamburguer">☰</button>
    </div>


<div class='bannermenu'>
</div>

<header class="categorias">
 <div class="pecas">
        <a>Novo</a>
        <a>Semi-novo</a>
        <a>Sapato</a>
        <a>Short</a>
        <a>Camisa</a>
        <a>Moleton</a>
        <a>Brinquedo</a>
    </div>

</header>

<?php

        session_start();
  
       
          if (isset($_SESSION["nome"]))
        {
        echo "<p class='bemvindo'>Seja Bem-vindo/a, " . $_SESSION["nome"] . "</p>";
        }
          else {
          header("Location: acesso.php");
     }
 
?>

    <h1>Compre por categoria</h1>


<div id="fila1">
    <div class="foto1"> 
    <h2>Bolsas</h2>
    <button id="Peca">Ver peças</button>
    </div>
    <div class="foto2"> 
    <h2>Acessórios</h2>
    <button id="Peca">Ver peças</button>
    </div>

</div>


<div id="fila2">
    <div class="foto3"> 
    <h2>Sapatos</h2>
    <button id="Peca">Ver peças</button>
    </div>
    <div class="foto4"> 
    <h2>Roupas</h2>
    <button id="Peca">Ver peças</button>
    </div>

</div>
<h1>Peças em Destaque</h1>

<h3>Peças Femininas</h3>

<div class="femininas">
  <div class="matelasse"> 
    <h2>R$ 189,00</h2>
    </div>   

    <div class="camisa"> 
    <h2>R$50,00</h2>
    </div>

    <div class="camisaB"> 
    <h2>R$65,00</h2>
    </div>

    <div class="camisaV"> 
    <h2>R$59,00</h2>
    </div>
</div>

</div>




<h3>Sapatos</h3>

<div class="Sapato">
  <div class="tenis"> 
    <h2>R$109,90 </h2>
    </div>  

    <div class="tenisp"> 
    <h2>R$80,00</h2>
    </div>

    <div class="tenisc"> 
    <h2>R$99,00  </h2>
    </div>

    <div class="tenisj"> 
    <h2>R$112,00 </h2>
    </div>
</div>

<h3>Peças Masculinas</h3>

<div class="masculinas">
  <div class="short"> 
    <h2>R$65,00</h2>
    </div>   
    <div class="Nike"> 
    <h2>R$65,00</h2>
    </div>
    <div class="camiseta"> 
    <h2>R$50,00 </h2>
    </div>
    <div class="verde"> 
    <h2>Por apenas R$25,00</h2>
    </div>
</div>

<footer>

<div class="rodape">

<div class='redes'>
</div>

</div>
    <p>Av. Conselheiro Nébias, 309 Vila Matias, Santos - SP, 11015-003-  (13)  12345-6789</p> 
    <p>Abre Seg a Sexta às 08:00 até 18:00  Dom e Sáb: 09:00 ás 13:00 </p>
    <p>@Bazar_AxeAki     Bazar_AxeAki   Bazar_axeaki@gmail.com </p>
</div>
 



</body>
</html>