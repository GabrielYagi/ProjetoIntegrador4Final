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
			<a class="site-logo" href="index.php">
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
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/slider-1.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>Crie suas <span>Ligas</span></h2>
						<p>Divirta-se com seus amigos, junte a galera para ver quem é o melhor.<br>Chame seu Squad e forme seu time, e mostre quem são os verdadeiros campeões.<br>E o melhor de tudo, isso tudo de GRAÇA.</p>
						<a <?php if(@$_SESSION['usuarioID'] == null){ ?> href="login.php" <?php	}else{ ?>  href="cadastroLigas.php" <?php	} ?> class="site-btn">Começar</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>Conheça <span>League of Legends</span></h2>
						<p>Independentemente de você jogar solo ou com amigos, <br>League of Legends é um jogo acelerado, estratégico e altamente competitivo<br>desenvolvido para quem gosta de vitórias suadas.</p>
						<a target="_blank" href="https://play.br.leagueoflegends.com/pt_BR" class="site-btn">Saber Mais</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Recent game section  -->
	<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.jpg">
		<div class="container">
			<div class="section-title">
				
				<h2>Ligas Recentes</h2>
			</div>
			<div class="row">
			<?php
                    include ("conecta_sql.php");
   
                    $query= mysqli_query($con,"select * from ligas order by id_liga desc limit 3");
                    while($campo= mysqli_fetch_array($query)){?>

				
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
							
						</div>
						<div class="rgi-content">
							<h5><?= $campo['nome']?></h5>
							<p><?= $campo['descricao']?></p>
							<!--<a href="#" class="comment">10 Participantes</a>-->
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<?php } ?>

			</div>
		</div>
	</section>
	<!-- Recent game section end -->

	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Times</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>Comece Criando seu Time!</h4>
								<p>Chame seus amigos e comece a caminhada de vocês rumo ao topo.</p>
								<br><br>
								<a <?php if(@$_SESSION['usuarioID'] == null){ ?> href="login.php" <?php	}else{ ?>  href="cadastroTimes.php" <?php	} ?> class="site-btn">Começar</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Ligas</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>Crie agora sua Liga!</h4>
								<p>Crie uma liga para mostrar quem são os melhores entre seus amigos, montem seus times e decidam. </p>
								<br><br>
								<a <?php if(@$_SESSION['usuarioID'] == null){ ?> href="login.php" <?php	}else{ ?>  href="cadastroLigas.php" <?php	} ?> class="site-btn">Criar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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