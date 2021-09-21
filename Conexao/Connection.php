<?php

namespace Conexao;

abstract class Connection{
    private static $conn;

    public static function getConn(){
        if(!self::$conn){
            self::$conn = new \PDO('mysql:host=localhost;port=33066;dbname=final', 'root', '');
        }

        return self::$conn;
    }
}