<?php
include '../conecta_sql.php';

$nome = filter_input(INPUT_GET, 'name');
$senha = filter_input(INPUT_GET, 'password');
$email = filter_input(INPUT_GET, 'email');
$nick = filter_input(INPUT_GET, 'nick');



$sql="INSERT INTO usuario(nome,senha,email,nickLol,nivel_acesso) values('$nome','$senha','$email','$nick','0')";



mysqli_query($con, $sql);
mysqli_close($con);        
header("location: ../login.php"); 