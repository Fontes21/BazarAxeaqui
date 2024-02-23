<?php

include_once("produto.php");
$p = new Produto ();

$p ->excluirProduto ($_GET["pid"]);
echo "Usuario excluido";


?>