<?php
session_start();
include '../conecta_sql.php';

$nomeLiga = filter_input(INPUT_POST, 'nomeLiga');
$descricao = filter_input(INPUT_POST, 'descricao');
$id_criador = $_SESSION['usuarioID'];


$sql= " INSERT INTO ligas(nome,descricao,id_criador)
 values('$nomeLiga','$descricao','$id_criador')";

mysqli_query($con, $sql);
mysqli_close($con);        
header("location: ../listagemLigas.php"); 