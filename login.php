<?php

use Classes\Database;

function login($data) {
    $login = $data["login"];
    $senha = $data["senha"];
    $db = new Database();
    $connection = $db->$mysqli;
    $result = $connection->query("SELECT * FROM usuario WHERE cd_login = '{$login}' AND cd_senha = '{$senha}'");
    if($fetch = $result->fetch_assoc()) {
        $retorno["status"] = "success";
        $retorno["tipo"] = $fetch["cd_tipo"];
        //criar session
        session_start();
        $_SESSION["id"] = $fetch["cd_usuario"];
        $_SESSION["usuario"] = $fetch["nm_usuario"];
        $_SESSION["tipo"] = $fetch["cd_tipo"];
    }
    else {
        $retorno["status"] = "failure";
    }
    return $retorno;
}

function logout() {
    session_start();
    if(session_destroy()) {
        $retorno["status"] = "success";
        return $retorno;
    }
    else {
        $retorno["status"] = "failure";
        return $retorno;
    }
}
function getSession() {
    session_start();
    return $_SESSION;
}