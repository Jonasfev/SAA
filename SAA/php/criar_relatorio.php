<!-- Pagina destinada a criação de relatorios -->
<!-- Disponivel para professores e coordenadores -->
<!-- Possui Verificações de campos -->
<!-- Todos os campos são obrigatorios -->



<?php
require_once "valida_acesso.php";                                   //validador de acesso
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

    <!-- Dados para abertura de relatorios -->
    <div class="container">
        <div class="row">
            <div class="abrir-coordenador">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        ABERTURA DE RELATÓRIO
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="registra_relatorio.php" method="post">
                                    <div class="form-group">
                                        <input type="text" name="titulo" class="form-control" placeholder="Título" required>
                                    </div>

                                    <div>
                                        <label for="data">Data</label>
                                        <input type="date" id="data" name="data" min="2020-01-01" max="2020-12-31" required>

                                        <label for="hora_inicio">Inicio: </label>
                                        <input id="hora_inicio" type="time" name="hora_inicio" required>

                                        <label for="hora_fim">Fim: </label>
                                        <input id="hora_fim" type="time" name="hora_fim" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea name="descricao" class="form-control" rows="3" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Tipo: </label>
                                        <select name="categoria" class="form-control" required>
                                            <option>ASSESORIA ÁREA FIM</option>
                                            <option>ASSESORIA DN</option>
                                            <option>CONVÊNIO</option>
                                            <option>COORDENADOR DE ESTAGIO / VIVÊNCIA PROFISSIONAL</option>
                                            <option>DESLOCAMENTO</option>
                                            <option>INTÉRPRETE</option>
                                            <option>MANUTENÇÃO</option>
                                            <option>MESTRADO / DOUTORADO</option>
                                            <option>OLIMPIADA ESTADUAL</option>
                                            <option>OLIMPIADA INTERNACIONAL</option>
                                            <option>OLIMPIADA NACIONAL</option>
                                            <option>ORIENTAÇÃO AO TCC - PÓS</option>
                                            <option>RECESSO ESCOLAR -CURSOS REGULARES</option>
                                            <option>SERVIÇOS EDUCACIONAIS</option>
                                            <option>SERVIÇOS TECNOLÓGICOS</option>
                                            <option>TREINAMENTO</option>
                                            <option>TUTORIA</option>
                                        </select>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a href="home.php" class="btn btn-lg btn-dark btn-block">Voltar</a>
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