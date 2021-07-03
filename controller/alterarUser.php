<?php
session_start();
require_once "../model/alteraUsuarioM.php";
$cad = new alterarUsu();
$cpf= $_POST["txtCpf"];
$email= $_POST["txtEmail"];
$senha= $_POST["txtSenha"];
$senha2= $_POST["txtSenha2"];

if($senha==$senha2) {    
    $cad->alterarUser($cpf, $email, $senha);
    header("Location:../../view/editar_dados_usr.php");   
    }else{
        
 header("Location:../../view/editar_dados_usr.php?erro3");  
    }
?>