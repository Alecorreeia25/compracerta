<?php
include_once('../controller/ProdutoDAO.php');
session_start();
$_SESSION['cart'] = array();


if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  $logado=false;
  header('location:login.php');
  }

$logado = true;
   

        ?>

<html>

<head>
    <Title>comprou</title>
    <link href="view/css/estilo.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
</head>

<body>
    <main>
        <h2>Comprou!!!</h2>

    </main>
</body>

</html>