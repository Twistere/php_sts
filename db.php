<?php

class Db {
    protected $connection;

    function __construct($host_name='127.0.0.1', $db_name='profsts1', $user='mamp', $passwd='root')
    {
        $this->connection = new PDO("mysql:host=$host_name;port=8889;dbname=$db_name", $user, $passwd);
    }
    
    function connexion()
    {
        return $this->connection;
    }
}
?>