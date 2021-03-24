<!-- Codigo fonte para verificação de acesso a paginas protegidas -->


<?php
    session_start();
     /* autenticação de permissão acesso para pagina de criação de usuario */
    if($_SESSION['cargo'] != 2 ) {
        header('Location: criar_usuario.php');
    } else {
        header('Location: home.php?error=erro3');
    }
?>