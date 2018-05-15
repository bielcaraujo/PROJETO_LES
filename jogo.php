<?php

use Classes\Database;

function getAllJogo() {
    session_start();
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM JOGO");

        $array = array();
        while($fetch = $result->fetch_assoc()) {
            $array[$fetch["cd_jogo"]] = $fetch;
        }
        $result->free();
        $connection->close();
        return $array;
    }
}

function getJogo($id) {
    session_start();
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $result = $connection->query("SELECT * FROM JOGO WHERE cd_jogo = '$id'");

        $array = array();
        while($fetch = $result->fetch_assoc()) {
            $array[$fetch["cd_jogo"]] = $fetch;
        }

        $result->free();
        $connection->close();
        return $array;
    }
}

function insertJogo($nome, $plataforma) {
    $db = new Database();
    $connection = $db->$mysqli;
    $insert = $connection->prepare("INSERT INTO JOGO(nm_jogo, nm_plataforma) VALUES(?, ?)");
    
    $insert->bind_param("ss", $nome, $plataforma);
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

function updateJogo($id, $nome, $plataforma) {
    session_start();
    if($_SESSION) {
        $db = new Database();
        $connection = $db->$mysqli;
        $insert = $connection->prepare("UPDATE JOGO SET nm_jogo = ?, nm_plataforma = ? WHERE cd_jogo = '$id'");
    
        $insert->bind_param("ss", $nome, $plataforma);
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
