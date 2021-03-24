<!-- Codigo fonte para verificação de acesso a paginas protegidas -->

<?php
    session_start();
    /* valida o acesso nas paginas protegidas do sistema */
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('Location: ../index.php?login=erro2');
    }
?>