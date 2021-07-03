<?php
session_start();
require_once "../model/confirmarCompra.php";
        $dataCompra= date("Y-m-d",time());
        $email= $_SESSION['email'];
        $formaPag=$_POST['formaP'];
        $consulta = new compraConf();                                   
        $valorTotal=  $consulta-> buscaValorTotal($email);        
        $produtos = $consulta->upProdutos($email);
        $produtos = $consulta->confCompra($email,$dataCompra,$formaPag,$valorTotal);
        
         header('location:../view/produtos.php');


?>