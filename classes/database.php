<?php

namespace classes;

class Database {
    public static $host = 'localhost';
    public static $db = 'les';
    public static $user = 'root';
    public static $password = '';
    public $mysqli;

    function __construct()
    {
        $this->$mysqli = new \MySqli(self::$host, self::$user, self::$password, self::$db);
        if ($this->$mysqli->connect_errno)
        {
            die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
            exit();
        }
    }
}