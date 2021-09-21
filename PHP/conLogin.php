<?php

session_start();

require_once '../vendor/autoload.php';
require_once '../DAO/usuarioDAO.php';

use Classes\Usuario;

$usuario = new Usuario($_POST['email'], $_POST['senha']);

$resultados = login($usuario);

if(isset($resultados)){
    $_SESSION['usuario'] = $resultados[0];
    header('Location: http://127.0.0.1/login/index.php');
}else{
    $_SESSION['erro'] = 1;
    header('Location: http://127.0.0.1/login/login.php');
}