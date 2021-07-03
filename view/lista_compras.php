<?php
session_start();

$logado = true;
   

        ?>

<html>

<head>
    <Title> Compras </title>
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
        $data= $_POST['dataV'];
        $produtos = $consulta->listarCompras($email,$data);
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
                        
</tr>
                    <?php
                     ++$i; }
                ?>
                </table>
            <div >
   
   
     
            </form>


            </table>
</div>




</div>
</body>

</html>