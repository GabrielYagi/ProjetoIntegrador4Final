<?php
session_start();
$usuariot = $_POST['email'];
$senhat = $_POST['password'];
include_once('../conecta_sql.php');

$result = mysqli_query($con,"SELECT * from usuario WHERE email='$usuariot' and senha='$senhat' limit 1 ");
$resultado = mysqli_fetch_assoc($result);


if(empty($resultado)){
    
    //Mensagem Erro
    $_SESSION['loginErro']= "Email ou Senha Inválido";
    
    //Volta para login
    header("Location: ../login.php");
     
}else{
    $_SESSION['usuarioNome'] = $resultado['nome'];
    $_SESSION['usuarioSenha'] = $resultado['senha'];
    $_SESSION['usuarioID'] = $resultado['id_usu'];
    $_SESSION['usuarioEmail'] = $resultado['email'];
    
    
    
    header("Location: ../index.php");
    
}