<?php

require_once 'PHP/verLogin.php';
require_once 'DAO/usuarioDAO.php';
require_once './vendor/autoload.php';
checkLogin();

$usuarios = listarUsuar();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Home</title>
</head>
<body class="bg-dark text-light">
<div class="container">
    <div class="jumbotron bg-primary p-3 my-3">
        <h1>Login PHP</h1>
    </div>

    <div class="col-xl-9 col-md-11 mx-auto p-5 text-dark">
        <div class="card">
            <div class="card-body">

                <form name="pesq" id="pesq" method="POST" action="">
                    <div class="form-group">
                        <input type="text" autocomplete="off" name="nome" id="nome" class="form-control" placeholder="Digite o nome a ser pesquisado...">
                        <br>
                    </div>
                </form>

                <table class="table table-striped">
                    <thead class="thead-dark table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Nome de Usuário</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                    </tr>
                    </thead>
                    <tbody class="teste">
                    <?php
                        foreach ($usuarios as $usuario){
                            echo "<tr>
                                    <td>" . $usuario->id . "</td>
                                    <td>". $usuario->ncomp ."</td>
                                    <td>". $usuario->nusuar ."</td>
                                    <td>". $usuario->email ."</td>
                                    <td>". $usuario->senha ."</td>
                                </tr>";
                        }
                    ?>
                    </tbody>
                </table>

                <div class="col-xl-2 col-md-2 mx-auto p-1 d-grid gap-2">
                    <a class="btn btn-primary" href="PHP/logout.php">Logout</a>
                </div>


            </div>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col">
            <h3>Wesley Vitorio</h3>
        </div>
        <div class="col text-end">
            <h6>2021</h6>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>