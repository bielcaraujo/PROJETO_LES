<?php

use Classes\Database;

function getAllUsuario() {
    session_start();
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM usuario");

        $array = array();
        while($fetch = $result->fetch_assoc()) {
            $array[$fetch["cd_usuario"]] = $fetch;
        }
        $result->free();
        $connection->close();
        return $array;
    }
}

function getUsuario($id) {
    session_start();
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM usuario WHERE cd_usuario = '$id'");

        $array = array();
        while($fetch = $result->fetch_assoc()) {
            $array[$fetch["cd_usuario"]] = $fetch;
        }

        $result->free();
        $connection->close();
        return $array;
    }
}

function insertUsuario($nome, $idade, $tipo, $login, $senha, $genero, $desc) {
    $db = new Database();
    $connection = $db->$mysqli;
    $insert = $connection->prepare("INSERT INTO usuario(nm_usuario, cd_idade, cd_tipo, cd_login, cd_senha, nm_genero, ds_usuario) VALUES(?, ?, ?, ?, ?, ?, ?)");
    
    $insert->bind_param("sisssss", $nome, $idade, $tipo, $login, $senha, $genero, $desc);
    if($insert->execute()) {
        $connection->close();
        $retorno["status"] = "SUCCESS";        
        return $retorno;
    }
    else {
        $retorno["status"] = "FAIL";
        return $retorno;
    }
}

function updateUsuario($id, $nome, $idade, $tipo, $login, $senha, $genero, $desc) {
    session_start();
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $insert = $connection->prepare("UPDATE usuario SET nm_usuario = ?, cd_idade = ?, cd_tipo = ?, cd_login = ?, cd_senha = ?, nm_genero = ?, ds_usuario = ? WHERE cd_usuario = '$id'");
    
        $insert->bind_param("siissss", $nome, $idade, $tipo, $login, $senha, $genero, $desc);
        if($insert->execute()) {
            $connection->close();
            $retorno["status"] = "SUCCESS";        
            return $retorno;
        }
        else {
            $retorno["status"] = "FAIL";
            return $retorno;
        }
    }
}
