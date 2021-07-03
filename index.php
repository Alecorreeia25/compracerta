<?php
?>

<html lang="pt-br">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="view/css/style.min.css">
    <link rel="icon" type="image/png" href="view/img/ref_icon.png" />

    <link href="view/css/style.css" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body>
 
  <header id="header" class="fixed-top">   
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
        <a class="navbar-brand" style="font-size: 40px; font-family: emoji;" href="#">CompraCerta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Início</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="view/produtos.php">Hortifruti</a></li>
                  <li><a class="dropdown-item" href="view/produtos.php">Higiene</a></li>
                  <li><a class="dropdown-item" href="view/produtos.php">Frios</a></li>
               </ul>
              </li>
              
              <a class="nav-link" aria-current="page" href="view/login.php">Login/Cadastro</a>
              </li>

          </ul>
          <a href="view/carrinho.php">
            <i class="fa fa-shopping-cart fa-2x cor-black"></i>
            <span class="badge badge-primary badge-pill adm-conf-emb-span ml-1">5</span>
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>


  
    <div id="carouselExampleIndicators" style="margin: 9% 0% 0% 0%;" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner text-center">
			  <div class="carousel-item active">
				  <img class="img-fluid mt-0 w-100" src="view/img/banners/campo.jpg" alt="First slide">
			  </div>
        <div class="carousel-item">
				  <img class="img-fluid mt-0 w-100" src="view/img/banners/campo2.jpg" alt="Second slide">
			  </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>

      <div class="container offs-container">
        <div class="row">
            <div class="col-8">
                <h3 class="mb-3 offs-label text-monospace">Confira as nossas promoções!</h3>
            </div>
            <div class="col-4 text-right">
                <a class="btn btn-primary mb-3 mr-1 btn-success" href="#carouselExampleIndicators2" role="button"  data-slide="prev">
                    <i class="carousel-control-prev-icon"></i>
                </a>
                <a class="btn btn-primary mb-3 btn-success" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="carousel-control-next-icon"></i>
                </a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
    
                            <div class="col-md-4 mb-3">
                                    <div class="card ">
                                        <img class="img-fluid offs-img-size" src="view/img/itens/caqui.jpeg">
                                        <form action="view/produtos.php" method="post">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Caqui Fuyu Orgânico</p>
                                            <input type="hidden" name="idProduto" value="4">
                                            <input type="hidden" name="produto" value="Creme Dental Colgate">
                                            <div class="card-text text-muted"><s>De: R$ 10,99</s> por:<h5 class="text-success mb-2"><b>R$ 6,99</b><small> à vista</small></h5></div>
                                            <input type="hidden" name="preco" value="1.67">
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
                                            <input type="submit" name="adicionar" class="btn cor-bg-salmao-dark font-weight-bold text-white" value="Adicionar ao Carrinho">
                                          </div>
                                        </div>
                                        </form>
                                     </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card ">
                                        <img class="img-fluid offs-img-size" src="view/img/itens/caqui.jpeg">
                                        <form action="view/produtos.php" method="post">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Laranja</p>
                                            <input type="hidden" name="idProduto" value="4">
                                            <input type="hidden" name="produto" value="Creme Dental Colgate">
                                            <div class="card-text text-muted"><s>De: R$ 11,99</s> por:<h5 class="text-success mb-2"><b>R$ 4,99</b><small> à vista</small></h5></div>
                                            <input type="hidden" name="preco" value="1.67">
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
                                            <input type="submit" name="adicionar" class="btn cor-bg-salmao-dark font-weight-bold text-white" value="Adicionar ao Carrinho">
                                          </div>
                                        </div>
                                        </form>
                                     </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card ">
                                        <img class="img-fluid offs-img-size" src="view/img/itens/caqui.jpeg">
                                        <form action="view/produtos.php" method="post">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Melão</p>
                                            <input type="hidden" name="idProduto" value="4">
                                            <input type="hidden" name="produto" value="Creme Dental Colgate">
                                            <div class="card-text text-muted"><s>De: R$ 6,99</s> por:<h5 class="text-success mb-2"><b>R$ 4,99</b><small> à vista</small></h5></div>
                                            <input type="hidden" name="preco" value="1.67">
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
                                            <input type="submit" name="adicionar" class="btn cor-bg-salmao-dark font-weight-bold text-white" value="Adicionar ao Carrinho">
                                          </div>
                                        </div>
                                        </form>
                                     </div>
                                  </div>
    
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
    
                            <div class="col-md-4 mb-3">
                                    <div class="card ">
                                        <img class="img-fluid offs-img-size" src="view/img/itens/caqui.jpeg">
                                        <form action="view/produtos.php" method="post">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Uva</p>
                                            <input type="hidden" name="idProduto" value="4">
                                            <input type="hidden" name="produto" value="Creme Dental Colgate">
                                            <div class="card-text text-muted"><s>De: R$ 5,99</s> por:<h5 class="text-success mb-2"><b>R$ 3,99</b><small> à vista</small></h5></div>
                                            <input type="hidden" name="preco" value="1.67">
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
                                            <input type="submit" name="adicionar" class="btn cor-bg-salmao-dark font-weight-bold text-white" value="Adicionar ao Carrinho">
                                          </div>
                                        </div>
                                        </form>
                                     </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card ">
                                        <img class="img-fluid offs-img-size" src="view/img/itens/caqui.jpeg">
                                        <form action="view/produtos.php" method="post">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Melancia</p>
                                            <input type="hidden" name="idProduto" value="4">
                                            <input type="hidden" name="produto" value="Creme Dental Colgate">
                                            <div class="card-text text-muted"><s>De: R$ 5,99</s> por:<h5 class="text-success mb-2"><b>R$ 3,99</b><small> à vista</small></h5></div>
                                            <input type="hidden" name="preco" value="1.67">
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
                                            <input type="submit" name="adicionar" class="btn cor-bg-salmao-dark font-weight-bold text-white" value="Adicionar ao Carrinho">
                                          </div>
                                        </div>
                                        </form>
                                     </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <div class="card ">
                                        <img class="img-fluid offs-img-size" src="view/img/itens/caqui.jpeg">
                                        <form action="view/produtos.php" method="post">
                                        <div class="card-body">
                                          <div class="form-group">
                                            <p class="card-text offs-text-name text-monospace">Maracujá</p>
                                            <input type="hidden" name="idProduto" value="4">
                                            <input type="hidden" name="produto" value="Creme Dental Colgate">
                                            <div class="card-text text-muted"><s>De: R$ 6,99</s> por:<h5 class="text-success mb-2"><b>R$ 4,99</b><small> à vista</small></h5></div>
                                            <input type="hidden" name="preco" value="1.67">
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
                                            <input type="submit" name="adicionar" class="btn cor-bg-salmao-dark font-weight-bold text-white" value="Adicionar ao Carrinho">
                                          </div>
                                        </div>
                                        </form>
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
    

    <!--Card-Produtos-->
    <div class="container offs-container">
    <div class="row justify-content-center" style=" margin-top: 110px; color: rgb(121, 121, 121);">
      <h3 class="mb-3 offs-label text-monospace">Produtos mais vendidos:</h3>
    </div>
    <div class="container-fluid">
      <div class="produtos d-flex flex-wrap">
      <div class="card mais-vendidos-card-size">
          
          <img class="card-img-top mais-vendidos-img-size" src="view/img/itens/batata.jpg" alt="Livros em promoção">
          <form action="view/produtos.php" method="post">
             <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Batatas</p>
                <input type="hidden" name="idProduto" value="4">
                <input type="hidden" name="produto" value="Creme Dental Colgate">
                <h5 class="text-success mb-2"><b>R$ 5,99</b> <small> à vista</small></h5>
                <input type="hidden" name="preco" value="1.67">
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
          <div class="card mais-vendidos-card-size">
          
          <img class="card-img-top mais-vendidos-img-size" src="view/img/itens/batata.jpg" alt="Livros em promoção">
          <form action="view/produtos.php" method="post">
             <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Tomate</p>
                <input type="hidden" name="idProduto" value="4">
                <input type="hidden" name="produto" value="Creme Dental Colgate">
                <h5 class="text-success mb-2"><b>R$ 6,99</b> <small> à vista</small></h5>
                <input type="hidden" name="preco" value="1.67">
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
          <div class="card mais-vendidos-card-size">
          
          <img class="card-img-top mais-vendidos-img-size" src="view/img/itens/batata.jpg" alt="Livros em promoção">
          <form action="view/produtos.php" method="post">
             <div class="card-body">
                <p class="card-text offs-text-name text-monospace">Alface</p>
                <input type="hidden" name="idProduto" value="4">
                <input type="hidden" name="produto" value="Creme Dental Colgate">
                <h5 class="text-success mb-2"><b>R$ 6,99</b> <small> à vista</small></h5>
                <input type="hidden" name="preco" value="1.67">
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
        </div>
      </div>
    </div>
      
    <!-- Footer -->
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
    </footer> <!-- Terminou o footer-->


    <script src="view/js/index.js"></script>
    <script src="view/jquerry.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>