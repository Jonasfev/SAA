<!-- Página acessada a partir da criação de um novo usuario com sucesso -->
<!-- Visibilidade para Admin e coordenadores -->
<!-- Exibe uma Mensagem de Sucesso caso o novo usuario tenha sido criado com Êxito -->
<!-- Possui um botão para voltar a pagina anterior -->



<?php
require_once "valida_acesso.php";
//validador de acesso
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
    </nav>

    <div class="container">
        <div class="row">
            <div class="abrir-coordenador">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        PERFIL
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="registra_relatorio.php" method="post">
                                    <div class="form-group">

                                        <div class="alert alert-success" role="alert">
                                            Perfil criado com sucesso!
                                        </div>
                                        <!-- voltar para a home de usuario ou adm dependendo do cargo da sessao -->
                                        <? if ($_SESSION['cargo'] == 0) { ?>
                                            <div class="row mt-5">
                                                <div class="col-6">
                                                    <a href="home_adm.php" class="btn btn-lg btn-dark btn-block">Ok</a>
                                                </div>
                                            </div>
                                        <? } else { ?>
                                            <div class="row mt-5">
                                                <div class="col-6">
                                                    <a href="home.php" class="btn btn-lg btn-dark btn-block">Ok</a>
                                                </div>
                                            </div>
                                        <? } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>