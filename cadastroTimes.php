<?php

@session_start();



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>LoL Manager</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="img/logo.jpg" alt="">
			</a>
			<?php if(@$_SESSION['usuarioID'] == null){ ?>
			<div class="user-panel">
				<a href="login.php">Login</a>  /  <a href="cadastro/cadastro.php">Registrar-se</a>
			</div>
			<?php }
			else{ ?>
			<div class="user-panel">
				<a href="#"><?php echo @$_SESSION['usuarioNome'] ?></a>  /  <a href="back/sair.php">Sair</a>
			</div>

			<?php	} ?>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>

				<?php if(@$_SESSION['usuarioID'] == null){ ?>
					<li><a href="index.php">Início</a></li>
					<li><a href="listagemLigas.php">Ligas</a></li>
					<li><a href="listarTimes.php">Times</a></li>
				<?php }

				else{ ?>
					<li><a href="index.php">Início</a></li>
					<li><a href="listagemLigas.php">Minhas Ligas</a></li>
					<li><a href="cadastroLigas.php">Criar Liga</a></li>
					<li><a href="cadastroTimes.php">Criar Time</a></li>
					<li><a href="listarTimes.php">Meus Times</a></li>
				<?php	} ?>

				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->



	<!-- Recent game section  -->

		<div class="container .col-md-6 " style="padding-top:40px">
			<div class="section-title">
				
				<h2>Cadastrar Time</h2>
				<br>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <form method="POST" action="back/cadastrarTime.php">
                                <div class="form-group" >
                                    <label for="nomeTime">Nome</label>
                                    <input type="text" class="form-control" name="nomeTime" id="nomeTime" placeholder="Nome do Time">
                                </div>
                                <div class="form-group">
                                    <label for="jogador1">Nick dos Jogadores</label>
                                    <input type="text" class="form-control" name="jogador1" id="jogador1" placeholder="Jogador 1">
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="jogador2" id="jogador2" placeholder="Jogador 2">
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="jogador3" id="jogador3" placeholder="Jogador 3">
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="jogador4" id="jogador4" placeholder="Jogador 4">
                                </div>
                                <div class="form-group" >
                                   
                                    <input type="text"  class="form-control" name="jogador5" id="jogador5" placeholder="Jogador 5">
                                </div>
                                <div class="form-group" >
                                   
                                    <input type="text"  class="form-control" name="jogador6" id="jogador6" placeholder="Jogador 6">
                                </div>                                
								<br>
								<button class="site-btn btn-sm" type="submit" >Salvar</button>
                               <!-- <button type="submit" class="btn btn-primary">Salvar</button> -->
                            </form>
                        </div>
                    </div>   
			</div>

		</div>

	<!-- Recent game section end -->


	<!-- Tournaments section bg -->

	<!-- Footer section -->
	<footer class="footer-section" style="position:relative;bottom:0;width:100%;">
		<div class="container">
	

		</div>
	</footer>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>