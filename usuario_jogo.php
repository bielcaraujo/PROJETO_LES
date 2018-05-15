<?php

use Classes\Database;

function getMyUsuarioJogo() {
    if($_SESSION) {
        $usuario = $_SESSION["id"];
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM USUARIO_JOGO WHERE cd_usuario = '$usuario'");

        $array = array();
        while($fetch = $result->fetch_assoc()) {
            $array[$fetch["cd_jogo"]] = $fetch;
        }
        $result->free();
        $connection->close();
        return $array;
    }
}

function getUsuarioJogoFrom($id) {
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM USUARIO_JOGO WHERE cd_usuario = '$id'");

        $array = array();
        while($fetch = $result->fetch_assoc()) {
            $array[$fetch["cd_jogo"]] = $fetch;
        }

        $result->free();
        $connection->close();
        return $array;
    }
}

function insertUsuarioJogo($jogo, $conhecimento, $tipo) {
    $db = new Database();
    $connection = $db->$mysqli;
    $insert = $connection->prepare("INSERT INTO USUARIO_JOGO(cd_usuario, cd_jogo, ds_conhecimento, nm_tipo) VALUES(?, ?, ?, ?)");
    
    $insert->bind_param("iiss", $_SESSION["id"], $jogo, $conhecimento, $tipo);
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

function updateUsuarioJogo($id_jogo, $conhecimento, $tipo) {
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $insert = $connection->prepare("UPDATE USUARIO_JOGO SET ds_conhecimento = ?, nm_tipo = ? WHERE cd_jogo = '$id_jogo'");
    
        $insert->bind_param("ss", $conhecimento, $tipo);
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

function deleteUsuarioJogo($id_jogo) {
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $usuario = $_SESSION["id"];
        $insert = $connection->prepare("DELETE FROM USUARIO_JOGO WHERE cd_jogo = '$id_jogo' AND cd_usuario = '$usuario'");  
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
