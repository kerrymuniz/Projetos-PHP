<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <title>Cadastro</title>
    </head>
    <body>
        <!-- NAV BAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cadastro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=novo">Novo Usuário</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=listar">Listar Usuários</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <!-- FIRST CODE PHP -->
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        //incluindo conexão com o banco
                        include("config.php");

                        //recuperando a partir da request a página("page") e setando parâmetros "novo" ou "listar" para fazer o include
                        switch(@$_REQUEST["page"]) {
                            case "novo":
                                include("novo-usuario.php");
                                break;
                            case "listar":
                                include("listar-usuario.php");
                                break;
                            case "salvar":
                                include("salvar-usuario.php");
                                break;
                            case "editar":
                                include("editar-usuario.php");
                                break;
                            default:
                                print "<h1>Bem vindos!</h1>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <!-- SCRIPT JS/BOOTSTRAP -->
        <script src="js/bootstrap.bundle.min.js"></script>


    </body>
</html>