<!-- Pagina Index -->
<!-- Possui card para login -->
<!-- Exibição de erros caso login esteja incorreto -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAA</title>
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="SHORTCUT ICON" href="image/senai_web.png">
</head>
<body style="min-width: 100%; background-color: #343a40; ">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="image/navbar.png" alt="Logo do Site" width="85" class="d-inline-block align-top">
            Sistemas de Acompanhamento de Atividades
        </a>
    </nav>
    <div class="fundo">
        <div class="container">
            <div class="row">
                <div class="card-login">
                    <div class="card">
                        <div class="card-header" style="text-align: center;">
                            LOGIN
                        </div>
                        <div class="card-body">
                            <form action="php/valida_login.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="user" class="form-control" placeholder="Matrícula">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                                </div>

                                <? if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                                    <div class="text-danger" style="text-align: center;">
                                        Usuário ou senha inválido(s)
                                    </div>
                                <? } ?>

                                <? if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                                    <div class="text-danger" style="text-align: center;">
                                        Por favor, faça login antes de acessar as paginas protegidas!
                                    </div>
                                <? } ?>

                                <button type="submit" class="btn btn-lg btn-primary btn-block" style="margin: 10px 0;">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="test">
        <p style="text-align: center">Todos os Direitos Reservados © 2020</p>
        <p style="text-align: center">Andre Jesus, Breno Robert, Danilo Souza, Hugo Esquivel, Jonas Félix</p>
    </footer>
</body>
</html>