<?php

session_start();

require_once '../vendor/autoload.php';
require_once '../DAO/usuarioDAO.php';

use Classes\Usuario;

$usuario = new Usuario($_POST['email'], $_POST['senha'], $_POST['nome'], $_POST['usuar']);

$ret = cadastrarUsuar($usuario);

if($ret == 'Cadastrado'){
    $_SESSION['cadastro'] = $ret;
    header('Location: http://127.0.0.1/login/index.php');
}else{
    $_SESSION['cadastro'] = $ret;
    header('Location: http://127.0.0.1/login/cadastro.php');
}