<?php
require_once "../model/adicionarACarrinho.php";
$inserir = new adicionar();
$email= $_POST["emailUser"];
$produto = $_POST["nomeProduto"];
$quantidade= $_POST["quantidade"];
$custoProduto= $_POST["valor"];
$valor= $quantidade * $custoProduto;
$situacao= "aguardo";
$data= date("Y-m-d",time());

  
    $inserir->adicionarCarrinho($email, $produto,$quantidade, $valor,$situacao,$data);
    
    header("Location:../view/produtos.php");   
    
?>