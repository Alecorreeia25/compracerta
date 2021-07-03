<?php
session_start();
 unset($_SESSION['email']);
  unset($_SESSION['senha']);
?>
<html>
	<head>
    <title>CompraCerta</title>
    <!-- Required meta tags -->
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" type="image/png" href="img/ref_icon.png" />

    <link href="css/style.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
              
              <a class="nav-link" aria-current="page" href="login.php">Login/Cadastro</a>
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
			
	<?php
		
	?>	
	<div id="lachicacontainer" class="container">
    
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="false">Cadastre-se</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
          <!-- LOGIN FORM -->
          <!-- LOGIN FORM -->
          <div class="col-md-6 login-form-1">
            <h3>Faça login </h3>
            <form action="../controller/validacaoUsuario.php" method="post">
                <div class="form-group">
                  <div class="text-field">
					<input type="email" name="email" required>
                    <label>E-mail</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="text-field">
					<input type="password" name="senha" required>
                    <label>Senha</label>
                  </div>
                </div>
                <div class="form-group">
				<input type="submit" class="btnSubmit" name="logar" value="Entrar">
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Esqueceu sua senha?</a>
                </div>
            </form>
        </div>
        </div>
        <div class="tab-pane fade" id="cadastro" role="tabpanel" aria-labelledby="cadastro-tab">
          <!-- REGISTER FORM -->
          <div class="col-md-6 login-form-1">
            <h3>Cadastre-se na nossa loja</h3>
            <form action="../controller/cadastroUsuario.php" method="POST">
                <div class="form-group">
                  <div class="text-field">
                    <input type="text" id="text_cpf" name="cadCpf" required>
                    <label>CPF</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="text-field">
                    <input type="email" id="text_email" name="cadEmail" required>
                    <label>E-mail</label>
                  </div>
                </div>
                <div class="form-group">
                    <div class="text-field">
                      <input type="password" id="text_password" name="cadSenha" required>
                      <label>Senha</label>
                    </div>
                </div>
                <div class="form-group">
                  <div class="text-field">
                    <input type="password" id="text_password" name="cadSenha2" required>
                    <label>Confirme sua senha</label>
                  </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Continuar" />
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

	<?php
		
	?>
	    
		


	<?php
		
	?>
	
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