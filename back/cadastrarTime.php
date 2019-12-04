<?php
session_start();
include '../conecta_sql.php';

$nomeTime = filter_input(INPUT_POST, 'nomeTime');
$jogador1 = filter_input(INPUT_POST, 'jogador1');
$jogador2 = filter_input(INPUT_POST, 'jogador2');
$jogador3 = filter_input(INPUT_POST, 'jogador3');
$jogador4 = filter_input(INPUT_POST, 'jogador4');
$jogador5 = filter_input(INPUT_POST, 'jogador5');
$jogador6 = filter_input(INPUT_POST, 'jogador6');
$id_criador = $_SESSION['usuarioID'];


$sql= " INSERT INTO times(nome,player1,player2,player3,player4,player5,player6,id_criador)
 values('$nomeTime','$jogador1','$jogador2','$jogador3','$jogador4','$jogador5','$jogador6','$id_criador')";

mysqli_query($con, $sql);
mysqli_close($con);        
header("location: ../listarTimes.php"); 