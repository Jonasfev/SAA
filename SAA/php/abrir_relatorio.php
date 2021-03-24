
<!-- Página destinada aos professores e coordenadores -->
<!-- Possui 3 opção no menu, a primeira para exibir os relatorios do proprio usuario, opção valida para professores e coordenadores -->
<!-- Segunda opção destinada aos coordenadores, que permitem eles acessarem os relatorios de todos professores, mas não de todos coordenadores, apenas os proprios relatorios e dos professores ficaram visiveis para o usuario -->
<!-- A ultima opção é um botão para retornar a pagina homem -->

<?php
require_once "valida_acesso.php";                       //validador de acesso
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
        <a href="home.php" class="navbar-brand">
            <img src="../image/navbar.png" alt="Logo do App" width="85" class="d-inline-block align-top">
            Sistemas de Acompanhamento de Atividades - <?= $_SESSION['nome'] ?> - <? if ($_SESSION['cargo'] == 0) { ?>ADM<? } else if ($_SESSION['cargo'] == 1) { ?>Coordenador<? } else { ?>Professor<? } ?>
            <!-- exibir nome e cargo no header da pagina -->
        </a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="navlink">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        SELECIONAR RELATÓRIOS
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                                <a href="consulta_relatorio.php">
                                    <img src="../image/professor.png" alt="Icone para Abrir Relatorios pessoais" width="83"  data-toggle="tooltip" title="Relatórios Pessoais">
                                </a>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <a href="valida_coordenador.php">
                                    <img src="../image/coordenador.png" alt="Icone para Abrir Relatórios dos professores" width="75"  data-toggle="tooltip" title="Relatórios dos professores">
                                </a>
                            </div>

                            <div class="col-4 d-flex justify-content-center">
                                <a href="home.php">
                                    <img src="../image/back.png" alt="Icone para voltar a pagina anterios" width="80"  data-toggle="tooltip" title="Voltar">
                                </a>
                            </div>
                        </div>
                        <!-- se tiver error de permissão exibir msg -->
                        <? if (isset($_GET['error']) && $_GET['error'] == 'erro4') { ?>
                            <div class="text-danger" style="text-align: center;">
                                Você não tem permissão!
                            </div>
                        <? } ?>

                        <? if (isset($_GET['error']) && $_GET['error'] == 'erro5') { ?>
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