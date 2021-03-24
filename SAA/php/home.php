<!-- Página home destinada a professores e coordenadores -->
<!-- Possui 4 botões -->
<!-- Primeiro redireciona o usuario para criação de relatorios -->
<!-- Disponivel para Professores e Coordenadores -->
<!-- Segundo redireciona para pagina de seleção de tipo de visualizacão dos relatorios -->
<!-- Disponivel para professores e coordenadores -->
<!-- Terceira redireciona para pagina de crição de usuarios-->
<!-- Disponivel apenas para Coordenadores -->
<!-- Quarta Opção é usada para fazer logoff da sessão -->
<!-- Novas Funcoes serão adiocionadas -->

<?php
require_once "valida_acesso.php";                               //validador de acesso
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAA</title>
    <link rel="stylesheet" href="../lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/extra.css">
    <link rel="SHORTCUT ICON" href="../image/senai_web.png">


</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="../image/navbar.png" alt="Logo do App" width="85" class="d-inline-block align-top">
            Sistemas de Acompanhamento de Atividades - <?= $_SESSION['nome'] ?> - <? if ($_SESSION['cargo'] == 0) { ?>ADM<? } else if ($_SESSION['cargo'] == 1) { ?>Coordenador<? } else { ?>Professor<? } ?>
            <!-- exibir nome e cargo no header da pagina -->
        </a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        MENU
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center">
                                <a href="criar_relatorio.php">
                                    <img src="../image/relatorio.png" alt="Icone para Abrir Chamados" width="80" data-toggle="tooltip" title="Criar Relatórios">
                                </a>
                            </div>

                            <div class="col-3 d-flex justify-content-center">
                                <a href="abrir_relatorio.php">
                                    <img src="../image/cadastrar_atividades.png" alt="Icone para consultar os Chamados" width="55"  data-toggle="tooltip" title="Consultar Relatórios">
                                </a>
                            </div>

                            <div class="col-3 d-flex justify-content-center">
                                <a href="valida_usario.php">
                                    <img src="../image/cadastro_usuario.png" alt="Icone para cadastro_professor" width="70"  data-toggle="tooltip" title="Cadastrar Usuários">

                                </a>

                            </div>

                            <div class="col-3 d-flex justify-content-center">
                                <a href="logoff.php">
                                    <img src="../image/exit.png" alt="Icone para fazer logoff" width="80"  data-toggle="tooltip" title="Sair">
                                </a>
                            </div>
                        </div>
                        
                        <!-- Exibir erro se algum usuario professor tentar acessar pagina de criar usuarios -->
                        <? if (isset($_GET['error']) && $_GET['error'] == 'erro3') { ?>
                            <div class="text-danger" style="text-align: center;">
                                Você não tem permissão!
                            </div>
                        <? } ?>
                        <? if(isset($_GET['error']) && $_GET['error'] == 'erro5') {?>
                            <div class="text-danger" style="text-align: center;">
                                Você não tem permissão para acessar essa página!
                            </div>                        
                        <?}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>