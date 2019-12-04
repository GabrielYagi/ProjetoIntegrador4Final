<?php
session_start();
session_destroy();

// Destruir todas as infomações(por segurança apenas)

    unset(
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioSenha'],
    $_SESSION['usuarioID'],
    $_SESSION['usuarioEmail']
    );

// Volta para página de login

    header("Location: ../index.php");    
