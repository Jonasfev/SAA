<!-- Pagina Home destina ao ADM -->
<!-- Possui apenas duas funções, acessar a criação de usúario e logoff -->
<!-- Pagina disponivel apenas para ADMs -->
<!-- Funções futuras serão adicionadas -->



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
    <a href="#" class="navbar-brand">
        <img src="../image/navbar.png" alt="Logo do App" width = "85" class="d-inline-block align-top">
        Sistemas de Acompanhamento de Atividades - <?=$_SESSION['nome']?> - <?if($_SESSION['cargo'] == 0){?>ADM<?} else if($_SESSION['cargo'] == 1) {?>Coordenador<?} else{?>Professor<?}?>
        <!-- exibir nome e cargo no header da pagina -->
    </a>
    </nav>

    <div class = "container">
        <div class = "row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header"  style="text-align: center;">
                        MENU
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="criar_usuario.php">
                                    <img src="../image/cadastro_usuario.png" alt="Icone para cadastro_professor" width="70"  data-toggle="tooltip" title="Criar Usuário"> 
                                </a>
                            </div>

                            <div class="col-6 d-flex justify-content-center">
                                <a href="logoff.php">
                                    <img src="../image/exit.png" alt="Icone para cadastro_professor" width="80"  data-toggle="tooltip" title="Sair"> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>