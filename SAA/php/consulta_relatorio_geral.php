<!-- Pagina para exibição de relatorios em geral-->
<!-- apenas disponivel para coordenadores -->
<!-- tem a função de exibir relatorios de todos professores e apenas do proprio coordenador -->
<!-- funções futuras serão adicionadas -->


<?php
require_once "valida_acesso.php";                             //validador de aceso

if ($_SESSION['cargo'] == 2) {
    header('Location: abrir_relatorio.php?error=erro5');      //se o cargo for de professor não acessar a pagina
}

$chamado = array();
$arquivo = fopen('../../arquivo.txt', 'r');                  //abrir arquivo com relatorios
while (!feof($arquivo)) {
    $registro = fgets($arquivo);
    $chamado[] = $registro;
}
fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAA </title>
    <link rel="stylesheet" href="../lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/extra.css">
    <link rel="SHORTCUT ICON" href="../image/senai_web.png">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="home.php" class="navbar-brand">
            <img src="../image/navbar.png" alt="Logo do App" width="85" class="d-inline-block align-top">
            Sistemas de Acompanhamento de Atividades - <?= $_SESSION['nome'] ?> - <? if ($_SESSION['cargo'] == 0) { ?>ADM<? } else if ($_SESSION['cargo'] == 1) { ?>Coordenador<? } else { ?>Professor<? } ?>
            <!-- exibir Nome e cargo no header da pagina -->
        </a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        CONSULTAR RELATÓRIO
                    </div>
                    <div class="card-body">
                        <? foreach ($chamado as $chamados) { ?>
                            <? $chamado_dados = explode('#', $chamados);            //separar os dados do arquivo
                            if (count($chamado_dados) < 5) {
                                continue;
                            } ?>
                            <!-- verificar se o id do chamado é o mesmo do usuario da sessao para apenas exibir os relatorios do proprio usuario-->
                            <? if ($chamado_dados[7] == 2) { ?>
                                <!-- Relatorios de Professores -->
                                <div class="card mb-3 bg-light">
                                    <div class="card-body">
                                        <h4 class="card-title">Professor: <?= $chamado_dados[1] ?></h4>
                                        <h5 class="card-text">Titulo: <?= $chamado_dados[9] ?></h5>
                                        <h5 class="card-text">Data: <?= $chamado_dados[2] ?></h5>
                                        <h5 class="card-text">Hora Inicio: <?= $chamado_dados[3] ?></h5>
                                        <h5 class="card-text">Hora Fim: <?= $chamado_dados[4] ?></h5>
                                        <h5 class="card-text">Descrição: <?= $chamado_dados[5] ?></h5>
                                        <h5 class="card-text">Tipo: <?= $chamado_dados[6] ?></h5>
                                    </div>
                                </div>
                            <? } ?>
                        <? } ?>
                        <div class="row mt-5">
                            <div class="col-6">
                                <a href="abrir_relatorio.php" class="btn btn-lg btn-dark btn-block">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>