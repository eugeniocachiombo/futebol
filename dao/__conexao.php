<?php

    function GetConexao(){
        try {
            $host = "mysql:host=localhost;dbname=futebol;charset=utf8";
            $user = "root";
            $pass = "";

            $pdo = new PDO($host,$user,$pass);
            return $pdo;
        } catch (Exception $e) {
            echo "Erro ao conectar com a base de dados: " . $e->getMessage();
        }
    }