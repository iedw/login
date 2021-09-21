<?php

require_once __DIR__.'/../vendor/autoload.php';

use Conexao\Connection;
use Classes\Usuario;

    function login(Usuario $usuario){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM USUARIO WHERE email = :e and senha = :s';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':e', $usuario->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':s', $usuario->getSenha(), PDO::PARAM_STR);
        $result = $stmt->execute();

        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(PDO::FETCH_OBJ);
    }}

    function cadastrarUsuar(Usuario $usuario){
        $conn = Connection::getConn();
        $sql = 'SELECT 1 FROM USUARIO WHERE email = :e or nusuar = :u';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':e', $usuario->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':u', $usuario->getNUsuar(), PDO::PARAM_STR);
        $result = $stmt->execute();

        if($stmt->rowCount() > 0){
            return 'Não Cadastrado';
        }else{
            $sql = 'INSERT INTO USUARIO(ncomp, nusuar, email, senha) VALUES (:n, :u, :e, :s)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':n', $usuario->getNComp(), PDO::PARAM_STR);
            $stmt->bindValue(':u', $usuario->getNUsuar(), PDO::PARAM_STR);
            $stmt->bindValue(':e', $usuario->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':s', $usuario->getSenha(), PDO::PARAM_STR);
            $stmt->execute();
            return 'Cadastrado';
        }
    }

    function listarUsuar(){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM USUARIO';
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function pestUsuar($nome){
        $nome = '%'.$nome.'%';
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM USUARIO where ncomp like :n';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':n', $nome, PDO::PARAM_STR);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }