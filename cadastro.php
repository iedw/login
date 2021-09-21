<?php
require_once 'PHP/verLogin.php';
require_once './vendor/autoload.php';
checkLoged();

if(!isset($_SESSION['cadastro'])){
    $_SESSION['cadastro'] = 'Cadastrado';
}

$class = $_SESSION['cadastro'] == 'Cadastrado' ? 'invisible' : 'visible';

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body class="bg-dark text-light">
<div class="container">
    <div class="jumbotron bg-primary p-3 my-3">
        <h1>Login PHP</h1>
    </div>

    <div class="col-xl-5 col-md-7 mx-auto p-5 text-dark">
        <div class="card">
            <div class="card-body">
                <h2>Usuário - Cadastro</h2>
                <form name="cadastrar" method="POST" action="PHP/cadastrar.php">
                    <div class="form-group">
                        <label for="nome">Nome Completo: </label>
                        <input type="text" name="nome" id="nome" class="form-control">
                        <label for="usuar">Usuário: </label>
                        <input type="text" name="usuar" id="usuar" class="form-control">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha" class="form-control">
                        <br>
                    </div>
                    <div class="row <?= $class ?>"> <?php unset($_SESSION['cadastro']);?>
                        <p class="text-center">Email e/ou usuário já cadastrados</p>
                    </div>
                    <div class="col d-grid gap-2">
                        <input type="submit" class="btn btn-primary btn-block" value="Cadastrar">
                    </div>
                    <div class="text-center pt-3">
                        <h6>Já possui uma conta? <a class="link-primary" href="http://127.0.0.1/login/login.php">Faça Login</a></h6>
                    </div>
                </form>
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
</body>
</html>