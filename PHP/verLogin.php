<?php

session_start();

function checkLogin(){
    if(!isset($_SESSION['usuario'])){
        header('Location: http://127.0.0.1/login/login.php');
    }
}

function checkLoged(){
    if(isset($_SESSION['usuario'])){
        header('Location: http://127.0.0.1/login/index.php');
    }
}