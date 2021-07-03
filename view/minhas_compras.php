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
<html lang="pt-br">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" type="image/png" href="img/ref_icon.png" />

    <link href="css/style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body>
    <?php
require_once "../model/consultas.php";
        $email= $_SESSION['email'];
        $consulta = new Consultas();
        $produtos = $consulta->listarDatasCompra($email);
        ?>
  <!-- ======= Header ======= --> 
   <header id="header" class="fixed-top">   
    <!-- .nav-menu -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
        <a class="navbar-brand" style="font-size: 40px; font-family: emoji;" href="#">CompraCerta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php">Início</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="produtos.php">Hortifruti</a></li>
                  <li><a class="dropdown-item" href="produtos.php">Hortifruti</a></li>
                  <li><a class="dropdown-item" href="produtos.php">Hortifruti</a></li>
                </ul>               
                              
              </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meu Perfil</a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="meus_enderecos.php">Endereços</a></li>
                  <li><a class="dropdown-item" href="minhas_compras.php">Minhas Compras</a></li>
                  <li><a class="dropdown-item" href="editar_dados_usr.php">Editar Meus Dados</a></li>
                </ul>               
                              
              </li>
              </li>

          </ul>
          <a href="carrinho.php">
            <i class="fa fa-shopping-cart fa-2x cor-black"></i>
            <span class="badge badge-primary badge-pill adm-conf-emb-span ml-1">5</span>
          </a>
        </div>
      </div>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

    
    <!--MENU FIXO-->
    <div class="container" style="margin-left: 15%;">
      <ul class="menu">
        <li class="">
          <a class="menuLink" href="minha_conta.html">Minha conta</a>
        </li>
        <li>  </li>
        <li>
          <a class="menuLink likAtivo" href="#"> Minhas compras</a>
        </li>    
      </ul>
    </div>

      
    <!--compra -->
    <div class="container">
        <div class="table-responsive-xl">
  <table class="table">
<table class="table table-striped">

 <form class="w-50 p-3 pt-5 mx-auto mt-5" method="post" action="lista_compras.php">
                
            <table border = "1">
                <tr>
                    <th>Datas</th>
                                 
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
                        <td><input type="submit" name="dataV" value="<?php echo $item["dataCompra"]; ?>" class="dropdown-item"> </td>
                        
</tr>
                    <?php
                     ++$i; }
                ?>
                </table>
           
     <input type="submit" class="btn btn-info" value="Concluir">
     <style>.btn-info{} </style>
     
            </form>


            </table>
</div>
        
    </div>
    
   
    <!-- The Modal -->
    <div>
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
        <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="offs-label text-monospace text-center">Resumo da compra</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          
          <!-- Modal body -->
            <div class="modal-body">
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-5">
                    <img class="card-img-top" src="img/itens/pimentao.webp" alt="" style="width:130px"> 
                  </div>
                  <div class="col-md-7">
                      <h6 class="offs-label">Pimentão verde</h6>
                      <small style="line-height: 10px;">
                          Receba até 20 de maio<br>
                          Qtd:1<br>
                          R$ 8,90
                      </small>
                  </div>
              </div> <hr>
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-5">
                <img class="card-img-top" src="img/itens/caqui.jpeg" style="width:130px"> </div>
                <div class="col-md-7">
                    <h6 class="offs-label">Caqui</h6>
                    <small style="line-height: 10px;">
                        Receba até 20 de maio<br>
                        Qtd:1<br>
                        R$ 8,90  
                    </small>
                </div>
              </div>
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-5">
                  <img class="card-img-top" src="img/itens/laranja.jpg" alt="Laranja" style="width:130px"> 
                </div>
                <div class="col-md-7">
                    <h6 class="offs-label">Laranja</h6>
                    <small style="line-height: 10px;">
                        Receba até 20 de maio<br>
                        Qtd:1<br>
                        R$ 8,90
                    </small>
                </div>
            </div> <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="footer-info">
                <h3>Mercado CompraCerta</h3>
                <p class="pb-3"><em>Endereço: R. da Mangueira, 33 - Nazaré, Salvador - BA, 40040-400</em></p>
                <p>
                  Salvador <br>
                  Bahia, Brasil<br><br>
                  <strong>Telefone:</strong> <a href='#'>+55 (71) 0800-0000</a><br>
                  <strong>Email:</strong> <a
                    href='#'>CompraCerta@gmail.com</a><br>
                </p>
              </div>
            </div>
           </div>
      </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; <strong><span>CompraCerta</span></strong>.<br> Todos os direitos são reservados aos seus respectivos autores.
        </div>
        <div class="credits">
          Designed by <a href="#">PATEM</a>
        </div>
      </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>