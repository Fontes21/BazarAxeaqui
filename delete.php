<?php

include_once("cliente.php");
$p = new Cliente ();

$p ->excluirCliente ($_GET["pid"]);
echo "Usuario excluido";


?>