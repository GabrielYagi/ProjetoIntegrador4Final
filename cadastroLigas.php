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
				<img src="img/logo.png" alt="">
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



		<div class="container .col-md-6 " style="padding-top:40px">
			<div class="section-title">
				
				<h2>Cadastrar Liga</h2>
				<br>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <form method="POST" action="back/cadastrarLiga.php">
                                <div class="form-group" >
                                    <label for="nomeLiga">Nome</label>
                                    <input type="text" class="form-control" name="nomeLiga" id="nomeLiga" placeholder="Nome do Liga">
                                </div>
                                <div class="form-group">
                                    
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" id="descricao" name="descricao" rows="3" >
                                    </textarea>   

                                </div>
 
 
                                                       
								<br>
								<button class="site-btn btn-sm" type="submit" >Salvar</button>
                      
                            </form>
                        </div>
                    </div>   
			</div>

		</div>

<br>

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