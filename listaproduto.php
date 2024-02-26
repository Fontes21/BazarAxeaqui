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

    include_once("produto.php");
    $u = new Produto(); 
    $lista = $u->ListarProduto();

    echo "<table>

    <tr>
       
         <th>Titulo</th>
         <th>Marca</th>
         <th>SemMarca</th>
         <th>Descricao</th>
         <th>ProdutoNovo</th>
         <th>ProdutoUsado</th>
         <th>Departamento</th>
         <th>Categoria</th>
         <th>Quantidade</th>
         <th>Tamanho</th>
         <th>Peso</th>
         <th>Preco</th>
         <th>TipoDeEntrega</th>
      </tr>";

  foreach ($lista as $item) 
  {

      echo "

      <tr>
         
           <td>" . $item ["Titulo"] . "</td>
           <td>" . $item ["Marca"] . "</td>
           <td>" . $item ["SemMarca"] . "</td>
           <td>" . $item ["Descricao"] . "</td>
           <td>" . $item ["ProdutoNovo"] . "</td>
           <td>" . $item ["ProdutoUsado"] . "</td>
           <td>" . $item ["Departamento"] . "</td>
           <td>" . $item ["Categoria"] . "</td>
           <td>" . $item ["Quantidade"] . "</td>
           <td>" . $item ["Tamanho"] . "</td>
           <td>" . $item ["Peso"] . "</td>
           <td>" . $item ["Preco"] . "</td>
           <td>" . $item ["TipoDeEntrega"] . "</td>
           <td> <a href='delete.php?pid=" . $item["idproduto"] .  "' onClick='return confirmar()'>Excluir</a> </td>
           <td> <a href='atualizar.php?pid=" . $item["idproduto"] .  "' >Atualizar</a> </td> 

               
      </tr>";          
  }
            echo "</table>"

?>
</body>
</html>