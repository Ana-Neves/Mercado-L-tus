<?php

include '../model/cliente.class.php';

$cliente = new cliente;

$cliente->setNome($_POST['nome']);
$cliente->setTelefone($_POST['txtfone']);
$cliente->setEndereco($_POST['endereco']);
$cliente->setPagamento($_POST['pagamento']);


header('location:../view/final.php?&nome='.$cliente->getNome().
'&telefone='.$cliente->getTelefone().
'&endereco='.$cliente->getEndereco().
'&pagamento='.$cliente->getPagamento());

?>