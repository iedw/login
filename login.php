<?php
require_once 'PHP/verLogin.php';
require_once './vendor/autoload.php';
checkLoged();
if(!isset($_SESSION['erro'])){
    $_SESSION['erro'] = 0;
}

if(!isset($_SESSION['cadastro'])){
    $_SESSION['cadastro'] = 'Não Cadastrado';
}

$class = $_SESSION['cadastro'] == 'Não Cadastrado' ? 'invisible' : 'visible';
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-dark text-light">
<div class="container">
    <div class="jumbotron bg-primary p-3 my-3">
        <h1>Login PHP</h1>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center <?= $class ?>" role="alert"> <?php unset($_SESSION['cadastro']);?>
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            Usuário cadastrado com sucesso, faça login!
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mx-auto p-5 text-dark">
        <div class="card">
            <div class="card-body">
                <h2>Login</h2>
                <form name="login" method="POST" action="PHP/conLogin.php">
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha" class="form-control">
                        <br>
                    </div>
                    <div class="row <?php
                    if($_SESSION['erro'] == 0){
                        echo 'invisible';}else{
                        $_SESSION['erro']--;
                        }?>">
                        <p class="text-center">Usuário e/ou Senha inválidos</p>
                    </div>
                    <div class="col d-grid gap-2">
                        <input type="submit" class="btn btn-primary btn-block" value="Login">
                    </div>
                    <div class="text-center pt-3">
                        <h6>Não tem uma conta? <a class="link-primary" href="cadastro.php">Cadastre-se</a></h6>
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