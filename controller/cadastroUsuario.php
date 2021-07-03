<?php
session_start();
require_once "../model/cadastroUsuarioM.php";
$cad = new cadastro();
$cpf= $_POST["cadCpf"];
$email= $_POST["cadEmail"];
$senha= $_POST["cadSenha"];
$senha2= $_POST["cadSenha2"];

if($senha==$senha2) {    
    $cad->inserirUser($cpf, $email, $senha);
    header("Location:../view/login.php");   
    }else{
        
 header("Location:../view/login.php?erro2");  
    }
?>