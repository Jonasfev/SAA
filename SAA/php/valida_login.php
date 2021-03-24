<!-- Codigo para validação de login e criação de variaveis de sessão -->
<!-- cargo -> 0 = Administrador -->
<!-- cargo -> 1 = Professor -->
<!-- cargo -> 2 = Coordenador -->



<?php
    session_start();
    $user_autenticado=false;
    $usuario_id=null;
    $usuario_perfil_id=null;
    $usuario_user=null;

    /* abrir arquivo */
    $arquivo = fopen('../../usuarios.txt','r');
    while(!feof($arquivo)){
        $registro = fgets($arquivo);
        $chamado[] = $registro;
        foreach($chamado as $chamados){
        $chamado_dados = explode('#', $chamados);
   
        /* verificar login e senha, recuperar dados do arquivo */
        if($chamado_dados[1] == $_POST['user'] && $chamado_dados[2] == $_POST['senha']) {
            $user_autenticado = true;
            $usuario_id = $chamado_dados[4];
            $usuario_perfil_id = $chamado_dados[3];
            $usuario_user = $chamado_dados[1];
            $usuario_nome = $chamado_dados[0];
        }
    }

    /* caso login e senha estajam corretos definir as variaveis da sessão */
    if ($user_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['nome'] = $usuario_nome;
        $_SESSION['cargo'] = $usuario_perfil_id;
        $_SESSION['user'] = $usuario_user;
        $_SESSION['user_id'] = $usuario_id;
        /* definir a home do usuario, variando para a home do adm */
        if ($_SESSION['cargo'] != 0) {
            header('Location: home.php');

        } else {
            header('Location: home_adm.php');
        }
        /* error caso login esteja invalido */
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: ../index.php?login=erro');
    } 
}
    fclose($arquivo);
?>