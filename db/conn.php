<?php
    // $host = '127.0.0.1';
    // $db = 'udrive_db';
    // $user = 'root';
    // $pass= '';
    // $charset = 'utf8mb4';

    $host = 'remotemysql.com';
    $db = 'IY25LKGGny';
    $user = 'IY25LKGGny';
    $pass= 'iwrpYcV4gW';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try
    {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }
    catch(PDOException $e)
    {
        throw new PDOException($e->getmessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    //$user->insertUser("admin", "password");
?>