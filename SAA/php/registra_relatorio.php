<!-- Codigo fonte utilizado para registrar relatorios na database -->

<?php
    session_start();   

    //contar qnts de linhas no arquivo
    for ($linhas = 0, $arq = fopen('../../arquivo.txt', 'r'); !feof($arq); $linhas++){
        fgets( $arq );
    }
    rewind($arq);
    fclose( $arq);

    /* dados a serem salvo no arquivo */

    $nome = str_replace('#', '-', $_SESSION['nome']);
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $data = str_replace('#', '-', $_POST['data']);
    $hora_inicio = str_replace('#', '-', $_POST['hora_inicio']);
    $hora_fim = str_replace('#', '-', $_POST['hora_fim']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $perfil = str_replace('#', '-', $_SESSION['cargo']);
    $id_perfil = str_replace('#', '-', $_SESSION['user_id']);

    /* preparacao da string a ser salva no arquivo */
    $texto = round($linhas - ($linhas/2)).'#'.$nome.'#'.$data.'#'.$hora_inicio.'#'.$hora_fim.'#'.$descricao.'#'.$categoria.'#'.$perfil.'#'.
    $id_perfil.'#'.$titulo.PHP_EOL;

    $arquivo = fopen('../../arquivo.txt', 'a');

    fwrite($arquivo,$texto);

    fclose($arquivo);

    header('Location: relatorio_sucesso.php');
?>