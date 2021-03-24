<!-- Codigo fonte para verificação de acesso a paginas protegidas -->


<?php
    session_start();
    /* autenticação de permissão acesso para pagina de consultar relatorios em geral */
    if($_SESSION['cargo'] != 2 ) {
        header('Location: consulta_relatorio_geral.php');
    } else {
        header('Location: abrir_relatorio.php?error=erro4');
    }

?>