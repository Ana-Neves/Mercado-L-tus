<?php

include '../model/compras.class.php';

$produto = new produto;

$produto->setTipoDeCarne($_POST['carnes']);
$produto->setTipoDeDoce($_POST['doces']);
$produto->setTipoDeItemHigienico($_POST['itens']);
$produto->setKilos($_POST['kilos']);
$produto->setQuantidadeDoces($_POST['quantidadeDoces']);
$produto->setQuantidadeItens($_POST['quantidadeItens']);

// echo " ".$produto->__toString();

header('location:../view/cliente.php?tipoDeCarne='.$produto->getTipoDeCarne().
'&TipoDeDoce=' .$produto->getTipoDeDoce(). 
'&TipoDeItemHigienico='.$produto->getTipoDeItemHigienico().
'&kilos='.$produto->getKilos().
'&quantidadeDoces='.$produto->getQuantidadeDoces().
'&quantidadeItens='.$produto->getQuantidadeItens().
'&valorCarnes='.$produto->valorDasCarnes().
'&valorDoces='.$produto->valorDosDoces().
'&valorItens='.$produto->valorDosItens().
'&valorFinal='.$produto->valorFinal());

?>