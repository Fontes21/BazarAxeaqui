<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    
<?php

          include_once("cliente.php");
          $u = new  Cliente(); 
          $lista = $u->listarCliente();

          echo "<table>

          <tr>
             
               <th>nome</th>
               <th>email</th>
               <th>senha</th>
               <th>femininas</th>
               <th>masculinas</th>
               <th>outrosPrduto</th>
               <th>vender</th>
               <th>comprar</th>
               <th>ambos</th>

            </tr>";

        foreach ($lista as $item) 
        {

            echo "

            <tr>
               
                 <td>" . $item ["nome"] . "</td>
                 <td>" . $item ["email"] . "</td>
                 <td>" . $item ["senha"] . "</td>
                 <td>" . $item ["femininas"] . "</td>
                 <td>" . $item ["masculinas"] . "</td>
                 <td>" . $item ["outrosProdutos"] . "</td>
                 <td>" . $item ["vender"] . "</td>
                 <td>" . $item ["comprar"] . "</td>
                 <td>" . $item ["ambos"] . "</td>
              
                     
            </tr>";          
        }
                  echo "</table>"

?>



</body>
</html>