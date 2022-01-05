<?php
    //Development Connection
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    //Remote Database Connection
    //$host = 'remotemysql.com';
    //$db = 'fky2nxaKI3';
    //$user = 'fky2nxaKI3';
    //$pass = 'ftc6aLINJP';
    //$charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        //echo "<h1 class = 'text-danger'>No Database Found</h1>";
       throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");

?>