<?php

function getUsers(): PDOStatement{
    $db = dbConnect();
    return $db -> query('SELECT * FROM users WHERE `status` != 0');
}

function getUser($username){
    $db = dbConnect();
    $sql = "SELECT * FROM users WHERE `status` = 1 AND `username` = '".htmlspecialchars($_POST['username']."'");
    $user = $db -> prepare($sql);
    $user -> execute();
    $user = $user -> fetch(PDO::FETCH_ASSOC);
    return $user;
}

function createAdmin($values){
    $db = dbConnect();
    $sql = "INSERT INTO users (username,password) VALUES (?,?)";
    $res = $db -> prepare($sql);
    $res = $res -> execute($values);
    var_dump($res);
    var_dump($sql);
    return $res;
}


function dbConnect(){
    require_once './config.php';
    try {
        $db = new PDO("mysql:host=".SERVER.";dbname=".BASE,USER,PASSWD);
        return $db;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

?>