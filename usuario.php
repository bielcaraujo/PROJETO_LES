<?php

use Classes\Database;

function getAllUsuario() {
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM USUARIO");

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
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM USUARIO WHERE cd_usuario = '$id'");

        $array = array();
        while($fetch = $result->fetch_assoc()) {
            $array[$fetch["cd_usuario"]] = $fetch;
        }

        $result->free();
        $connection->close();
        return $array;
    }
}

function insertUsuario($nome, $idade, $tipo, $login, $senha, $genero, $desc, $estado, $cidade) {
    $db = new Database();
    $connection = $db->$mysqli;
    $insert = $connection->prepare("INSERT INTO USUARIO(nm_usuario, cd_idade, cd_tipo, cd_login, cd_senha, nm_genero, ds_usuario, sg_estado, nm_cidade) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $insert->bind_param("sisssssss", $nome, $idade, $tipo, $login, $senha, $genero, $desc, $estado, $cidade);
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

function updateUsuario($id, $nome, $idade, $tipo, $login, $senha, $genero, $desc, $estado, $cidade) {
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $insert = $connection->prepare("UPDATE USUARIO SET nm_usuario = ?, cd_idade = ?, cd_tipo = ?, cd_login = ?, cd_senha = ?, nm_genero = ?, ds_usuario = ?, sg_estado = ?, nm_cidade = ? WHERE cd_usuario = '$id'");
    
        $insert->bind_param("siissssss", $nome, $idade, $tipo, $login, $senha, $genero, $desc, $estado, $cidade);
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
