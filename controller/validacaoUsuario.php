<?php
session_start();
require_once "../model/validacaoUsuarioM.php";
$consulta = new validacao();
$email =$_POST["email"];
$senha = $_POST["senha"];

if ($consulta->validacaoAdm($email,$senha ) === 1) {
$_SESSION["logado"] = true;
	 $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
	header("Location:../view/admin/index.php");
}else{

if ($consulta->validacaoUser($email,$senha ) === 1) {
	$_SESSION["logado"] = true;
	 $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
	header("Location:../view/produtos.php");
} else {
	session_destroy();
        $_SESSION['msg'] = "<div class='alert alert-danger'>Credenciais Incorretas!!</div>";
        header("Location: ../view/login.php?erro=1");
}
}


//echo $_SESSION["logado"];
?>