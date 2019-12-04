<?php
$servidor = "localhost";
$usuario_mysql = "root";
$senha_mysql = "";
$banco_dados = "lolmanager";
$con = mysqli_connect($servidor, $usuario_mysql, $senha_mysql, $banco_dados);
mysqli_set_charset($con, "utf8");



?>