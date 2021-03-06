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
<html lang="en">
  <head>
    <title>CompraCerta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.css">
  
    <link rel="icon" type="image/png" href="img/ref_icon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/index.js"></script>
  </head>
  
  <body>
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

    

      <!--PRODUTO DETALHADO-->
      
      <div class="container border p-3" style="margin-top: 100px; align-items: center; color:black;">
        <div class="row">
          <div class="col"> 
          <img class="card-img-top" src="img/itens/soja.jpg" alt="Livros em promoção" style="width:400px">
        </div>
          <div class="col">
            <div class="row">
              <h3 class="mb-3 text-monospace">Soja em grãos Orgânico Importada 500g</h3>
            
          </div>
          <hr>
           <div class="row" style="margin-right: 30px;">
            <br><p class="card-title forma-texto" >Soja em Grãos Orgânica Certificada rico em proteínas que auxilia na redução dos níveis do colesterol ruim (LDL) e ajuda a elevar os níveis do colesterol bom (HDL). O alimento também possui isoflavonas, substâncias que ajudam a atenuar os efeitos da menopausa e evitar a perda de massa óssea. Além de ser livre de agrotóxicos e livre de transgênicos, seguindo todas as diretrizes da agricultura orgânica.</p>
          </div><hr>
          <div class="container" style="margin-top: 10px; color: black">
           <div class="row d-flex align-items-center">
            <div class="col-sm-1"></div>
            
            <div class="col-sm-5 mt-2">
              <h4 class="p-2" style="border:solid 0.2px ; border-radius: 5px">Valor: R$ 3,59</h4>
            </div>

            <div class="col-sm-5">
              <div class="btn-group" role="group" aria-label="Exemplo básico">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white" onClick="btnCounter('input-count', 'sub');">-</button>
                <input id="input-count" type="number" value="1" class="form-control text-center w-75">
                <button type="button" class="btn cor-bg-teal font-weight-bold text-white" onClick="btnCounter('input-count', 'sum');">+</button>
              </div>
            </div>

            <div class="col-sm-1"></div>

          </div>
          <div class="container d-flex justify-content-center mt-4">
            <button onclick=location.href="carrinho.php" type="button" class="btn cor-bg-teal font-weight-bold text-white mb-2" style="width: 88%;">Adicionar ao carrinho</button>
          </div>
        </div>
      </div>
     </div>

     <!--MAIS DETALHES-->
     <div class="container-lg" style="margin-top: 50px; align-items: center; color:black">
     <div class="row">
       <div class="col">
        <h3 class="mb-3 text-monospace">Detalhes do produto:</h3>
     <div class="row">
       <div class="col">       
      <table>
       <tr>
      <th>Categoria:</th>
      <td>Mercearia Orgânica</td>
      </tr>
     <tr>
       <th>Descrição:</th>
       <td>Soja Orgânica</td>
      </tr>
      <tr>
        <th>Tipo:</th>
        <td>em grãos</td>
       </tr>
    </table>
    </div>
    <div class="col">
      <table>
       <tr>
        <th>Marca:</th>
      <td>OSM</td>
      </tr>
      <tr>
        <th>Embalagem:</th>
      <td>pacote</td>
        </tr>
     
        <tr>
          <th>Peso/Quant:</th>
        <td>500g/1UN</td>
          </tr>
       </div>
      </table>
       </div>
       </div>
      </div>
    </div>
  </div>
  

     <!--ITENS PARA VOCÊ-->

     <div class="container offs-container" style="margin-top: 200px;">
      <div class="row">
          <div class="col-8">
              <h3 class="mb-3 text-monospace">Aproveite e veja também:</h3>
          </div>
          <div class="col-4 text-right">
              <a class="btn btn-primary mb-3 mr-1 btn-success" href="#carouselExampleIndicators2" role="button"  data-slide="prev">
                  <i class="carousel-control-prev-icon"></i>
              </a>
              <a class="btn btn-primary mb-3 btn-success" href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <i class="carousel-control-next-icon"></i>
              </a>
          </div>
          
          
     <div class="col-12">
      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">

                      <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="img/itens/castanha-do-brasil-media-organica.jpg">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Castanha do Brasil média 250g</p>
                                  <h5 class="text-success mb-2"><b>R$ 24,99</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>

                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="img/itens/cravo-da-india-organico.jpg">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Cravo da Índia 20g</p>
                                  <h5 class="text-success mb-2"><b>R$ 7,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="img/itens/farinha-de-trigo-especial-organico.jpg">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Farinha de trigo especial 500g</p>
                                  <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
              <div class="carousel-item">
                  <div class="row">

                      <div class="col-md-4 mb-3">
                        <div class="card offs-card-size">
                            <img class="img-fluid offs-img-size" src="img/itens/farinha-de-trigo-integral-organico.jpg">
                            <div class="card-body">
                              <div class="form-group">
                                <p class="card-text offs-text-name text-monospace">Farinha de trigo integral 500g</p>
                                <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                                <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card offs-card-size">
                          <img class="img-fluid offs-img-size" src="img/itens/farinha-flocada-de-mandioca-organica.jpg">
                          <div class="card-body">
                            <div class="form-group">
                              <p class="card-text offs-text-name text-monospace">Farinha de mandioca flocada 500g</p>
                              <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                              <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card offs-card-size">
                        <img class="img-fluid offs-img-size" src="img/itens/fuba-de-milho.jpg">
                        <div class="card-body">
                          <div class="form-group">
                            <p class="card-text offs-text-name text-monospace">Fubá de milho 500g</p>
                            <h5 class="text-success mb-2"><b>R$ 6,90</b><small> à vista</small></h5>
                            <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                          </div>
                        </div>
                    </div>
                </div>

                  </div>
              </div>
                  <div class="carousel-item">
                      <div class="row">

                        <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="img/itens/feijao-preto-organico.jpg">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Feijão Preto 500g</p>
                                  <h5 class="text-success mb-2"><b>R$ 14,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                            <img class="img-fluid offs-img-size" src="img/itens/tremoco-em-graos-organico.jpg">
                            <div class="card-body">
                              <div class="form-group">
                                <p class="card-text offs-text-name text-monospace">Feijão Tremoço 500g</p>
                                <h5 class="text-success mb-2"><b>R$ 8,90</b><small> à vista</small></h5>
                                <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="card offs-card-size">
                              <img class="img-fluid offs-img-size" src="img/itens/acucar-mascavo-organico.jpg">
                              <div class="card-body">
                                <div class="form-group">
                                  <p class="card-text offs-text-name text-monospace">Açúcar Mascavo 1kg</p>
                                  <h5 class="text-success mb-2"><b>R$ 17,90</b><small> à vista</small></h5>
                                  <button type="button" class="btn cor-bg-teal font-weight-bold text-white w-100 mb-2">Comprar</button>
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
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
    </footer><!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>