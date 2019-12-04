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
	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row" style="margin-top:-5%">
				<div class="col-lg-12">
				<div class="section-title">

				<?php if(@$_SESSION['usuarioID'] == null){ ?> <h2>Times</h2><?php }else{?> <h2>Meus Times</h2> <?php } ?>	

				</div>
					<div class="row">
				
						<?php
							include ("conecta_sql.php");
							if(@$_SESSION['usuarioID'] == null){
						
							$query= mysqli_query($con,"select * from times order by nome asc");
							while($campo= mysqli_fetch_array($query)){?>

							
							<div class="col-md-6">
								<div class="recent-game-item">
									<div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
										<div class="cata new">League of Legends</div>
									</div>
									<div class="rgi-content" >
										<h5><?= $campo['nome']?></h5>
										<p><?= $campo['player1']?>,<?= $campo['player2']?>,
											<?= $campo['player3']?>,<?= $campo['player4']?>,
											<?= $campo['player5']?>,<?= $campo['player6']?>
										
										
										</p>
										<a href="#" class="comment"><b>Detalhar Times</b></a>

									</div>
								</div>	
							</div>

						<?php }}else{ ?>

						<!-- Logado -->		

						<?php
							$id = $_SESSION['usuarioID'];
							$query= mysqli_query($con,"select * from times where id_criador='$id' order by nome asc");
							while($campo= mysqli_fetch_array($query)){?>

							
							<div class="col-md-6">
								<div class="recent-game-item">
									<div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
										<div class="cata new">League of Legends</div>
									</div>
									<div class="rgi-content" >
										<h5><?= $campo['nome']?></h5>
										<p><?= $campo['player1']?>,<?= $campo['player2']?>,
											<?= $campo['player3']?>,<?= $campo['player4']?>,
											<?= $campo['player5']?>,<?= $campo['player6']?>
										
										
										</p>
										<a href="#" class="comment"><b>Gerenciar Times</b></a>

									</div>
								</div>	
							</div>

						<?php }} ?>

					</div>

				</div>

			</div>
		</div>
	</section>

	
	<!-- Footer section -->
	<footer class="footer-section" style="position:relative;bottom:0;width:100%;">
		<div class="container">


		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>