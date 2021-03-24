<!-- Pagina destinada a criação de usúarios -->
<!-- Destinada apenas para coordenadores e Admin-->
<!-- Possui verificações de segurança e registro -->
<!-- Apenas Adm podem criar coordenadores -->
<!-- Apenas Coordenadores podem criar Professores -->




<?php
require_once "valida_acesso.php";               //validador de acesso

if ($_SESSION['cargo'] == 2) {
    header('Location: home.php?error=erro5');   //verificação de permissão de cargo
}
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

    <!-- Dados para criação de usuario -->
    <div class="container">
        <div class="row">
            <div class="card-criar-usuario">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        CRIAR USUÁRIO
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="registra_usuario.php" method="post">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input name="nome" type="text" class="form-control" placeholder="Nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Matrícula</label>
                                        <input name="matricula" type="text" class="form-control" placeholder="Número da Matrícula" required>
                                    </div>

                                    <!-- Error se a matricula ja estiver cadastrada no sistema -->
                                    <? if (isset($_GET['error']) && $_GET['error'] == 'erro6') { ?>
                                        <div class="text-danger" style="text-align: center;">
                                            Matrícula já cadastrada!
                                        </div>
                                    <? } ?>

                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Cargo</label>
                                        <!-- exibir opção de coordenador apenas para o ADM -->
                                        <select name="cargo" class="form-control" required>
                                            <? if ($_SESSION['cargo'] == 0) { ?>
                                                <option value="1"> Coordenador </option>
                                            <? } else { ?>
                                                <option value="2"> Professor </option>
                                            <? } ?>
                                        </select>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <!-- Voltar a home do adm se o usuario for ADM -->
                                            <a <? if ($_SESSION['cargo'] == 0) { ?> href="home_adm.php" <? } else { ?> href="home.php" <? } ?> class="btn btn-lg btn-dark btn-block">Voltar</a>
                                        </div>

                                        <div class="col-6">
                                            <button type="submit" class="btn btn-lg btn-primary btn-block">Criar</button>
                                        </div>
                                    </div>
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