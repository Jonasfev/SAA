<!-- Codigo fonte utilizado para registrar usuarios na database -->


<?php
    session_start();

    $linhas = 0; 
    $erro = 0;

    /* abrir arquivo para leitura e contagem de linhas */
    $arq = fopen('../../usuarios.txt','r'); 
    while ( !feof( $arq ) ) { 
        $linhas++; 
        $registro = fgets($arq);
        $chamado[] = $registro;
        foreach($chamado as $chamados){
            $chamado_dados = explode('#', $chamados);
            /* se ja houver alguma matricula igual no arquivo definir como error */
            if($chamado_dados[1] == $_POST['matricula']){
                $erro = 1;  
            }
        }
    }
    rewind($arq);
    fclose($arq);

    /* se não houver error de duplicidade no arquivo, resgistrar novo usuario*/
    if ($erro == 0){

        $id_perfil = $linhas - 1;
        $nome = str_replace('#', '-', $_POST['nome']);
        $matricula = str_replace('#', '-', $_POST['matricula']);
        $senha = str_replace('#', '-', $_POST['senha']);
        $cargo = str_replace('#', '-', $_POST['cargo']);

        $texto = $nome.'#'.$matricula.'#'.$senha.'#'.$cargo.'#'.$id_perfil.PHP_EOL;

        $arquivo = fopen('../../usuarios.txt', 'a');

        fwrite($arquivo,$texto);

        fclose($arquivo);

        header('Location: perfil_sucesso.php');

        /* se houver error de duplicidade no arquivo, retornar o error */
    } else {
        header('Location: criar_usuario.php?error=erro6');
    }
?>