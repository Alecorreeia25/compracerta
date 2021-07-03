<?php

session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  $logado=false;
  header('location:login.php');
  }else{
$logado = true;
$email=$_SESSION['email'];
  }
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
        
        $consulta = new Consultas();
        $produtos = $consulta->listarTodosProdutos();
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
    <ul class="menu">
      <li class="">
        <a class="menuLink" href="../index.php">Home</a>
      </li>
      <li> > </li>
      <li>
        <a class="menuLink likAtivo" href="#"> Produtos</a>
      </li>    
    </ul>

    <div class="row" style="margin-top: 50px;">


      <div class="col-sm-1"></div>


      <div class="col-sm-2">
        <div class="row">
          <h6 class = "titulo">Ordenar por:</h6>
        </div>
        <div class="row">
          <div class="form-group">
            <label for=""></label>
            <select class="form-control-select select" aria-label="Default select example" name="" id="">
              <option selected>Relevância</option>
              <option value="">Nome [A-Z]</option>
              <option value="">Nome [Z-A]</option>
              <option value="">Preço [Maior]</option>
              <option value="">Preço [Menor]</option>
            </select>
          </div>
        </div>

        <div class="row">
          <h6 class = "titulo" >Filtrar:</h6>
        </div>

        <div class="col-md-10-mb-6 .col-prod filtro">
          <div class="container btn-group">
            <a class="btnSubmit filtro" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Categoria</a>
            <i class="fa fa-plus filtro cor-icone mt-2" aria-hidden="true" data-toggle="collapse" data-target="#multiCollapseExample1" style="cursor: pointer"></i>
          </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card card-body">
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust adjust-checkbox-collapse"  name="customCheck" id="customControlInline1">
                <label class="custom-control-label" for="customControlInline1">Fruta Orgânica</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust-checkbox-collapse" name="customCheck" id="customControlInline2">
                <label class="custom-control-label" for="defaultCheck">Legume Orgânico</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust-checkbox-collapse" name="customCheck" id="customControlInline2">
                <label class="custom-control-label" for="defaultCheck">Ovos Orgânico</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10-mb-6 col-prod filtro">
          <div class="container btn-group">
            <a class="btnSubmit filtro" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Disponibilidade</a>
            <i class="fa fa-plus filtro cor-icone mt-2" aria-hidden="true" data-toggle="collapse" data-target="#multiCollapseExample2" style="cursor: pointer"></i>
          </div>
        </div>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card card-body">
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust adjust-checkbox-collapse"  name="customCheck" id="customControlInline1">
                <label class="custom-control-label" for="customControlInline1">Disponível (30)</label>
              </div>
            </div>
            <div class="form-inline">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input adjust-checkbox-collapse" name="customCheck" id="customControlInline2">
                <label class="custom-control-label" for="defaultCheck">Indisponivel (5)</label>
              </div>
            </div>
          </div>
        </div>
      </div>
              
        
      <div class="col-sm-8 card">
        <h3 class="mb-3 offs-label text-monospace mt-2">Todos os produtos</h3>
        <div class="row">
          <div class="container-fluid">
            <div class="produtos d-flex flex-wrap">             

<?php
                 $i= 0;
                foreach ($produtos as $item) {
                    ?>
              <div class="card mais-vendidos-card-size">
          
                <img class="card-img-top mais-vendidos-img-size" src="<?php echo $item["img"]; ?>" alt="Batatas">
                <form action="../controller/adicionarPCarrinho.php" method="post">

                   <div class="card-body">
                      <p class="card-text offs-text-name text-monospace" ><?php echo $item["nome"]; ?></p>
                      <input type= "hidden" value="<?php echo $item["nome"]; ?>" name="nomeProduto">
                      <input type= "hidden"  name="emailUser" value="<?php echo $email ?>">
                      <h5 class="text-success mb-2" ><b><?php echo $item["valor"]; ?></b> <small> à vista</small></h5>                     
                      <input type= "hidden" value="<?php echo $item["valor"]; ?>" name="valor">
                      <div class="btn-group" role="group" aria-label="Exemplo básico">
                        <input type="submit" name="adicionar" class="btn cor-bg-salmao-dark font-weight-bold text-white" value="Adicionar ao Carrinho">
                        <select name="quantidade">
                          <option>1
                            <option>2
                              <option>3
                                <option>4
                                  <option>5
                                    <option>6
                                      <option>7
                                        <option>8
                        </select>
                      </div>
                    </div>
                </form>
                </div>
                <?php
                     ++$i; }
                ?>
                
                       
                                  
                                  </div>
              </div>
            </div>
          </div>
        </div>

      <div class="col-sm-1"></div>

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