<?php
    include 'db.php';
    include 'insert.php';

    try {
        $host_name = $_ENV["HOSTNAME"];
        $db_name = $_ENV["DBNAME"];
        $user = $_ENV["USERDB"];
        $passwd = $_ENV["USERPASSWORD"];
        $db = new Db($host_name, $db_name, $user, $passwd);
    } catch (Exception $_) {
        $db = new Db();
    }
    
    $insert = new Insert($db);
    $insert->add_teacher(3, 'Tristan', 'Talotté', 'Philosophie'); 
?>