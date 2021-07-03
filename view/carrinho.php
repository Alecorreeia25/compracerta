  <?php
session_start();

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
    <Title> Carrinho </title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <style>
        .botao-comprar {
            width: 100%;
        }
    </style>
</head>

<body>
<?php
require_once "../model/consultas.php";
        $email= $_SESSION['email'];
        $consulta = new Consultas();
        $produtos = $consulta->listarProdutos($email);
        ?>
        
    <h2>Lista de produtos:</h2>    
   
<div class="table-responsive-xl">
  <table class="table">
<table class="table table-striped">

 <form class="w-50 p-3 pt-5 mx-auto mt-5" method="post" action="../controller/confirmarCompra.php">
                
            <table border = "1">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Situacao</th>              
                 <style>
                    th{
                        margin-top: 10px;
                    }
                </style>
                </tr>
                <?php
                 $i= 0;
                foreach ($produtos as $item) {
                    ?>
<tr>
                        <td><?php echo $item["nomeProduto"]; ?></td>
                        <td><?php echo $item["quantidade"]; ?></td>
                        <td><?php echo $item["valor"]; ?></td>
                        <td><?php echo $item["situacao"]; ?> </td>
</tr>
                    <?php
                     ++$i; }
                ?>
                </table>
            <div >
   
   <a>Dinheiro</a>
    <input type="radio" id="Choice1"
     name="formaP" value="dinheiro">
    
    <a >Cartão</a>
    <input type="radio" id="Choice2"
     name="formaP" value="cartao">   
    
  </div>
     <input type="submit" class="btn btn-info" value="Concluir">
     <style>.btn-info{} </style>
     
            </form>


            </table>
</div>




</div>
</body>

</html>