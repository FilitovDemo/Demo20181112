<?php
//預期用戶會發送POST 過來  t=TOKEN&n=NAME
$token = isset($_POST['t'])? $_POST['t'] : '';
$name  = isset($_POST['n'])? $_POST['n'] : '';


try{
    $db = new PDO('mysql:host=localhost;dbname=pndemo;charset=utf8mb4','root','',
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
            )
        );
}catch(PDOException $e){
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'ERROR';
    exit(0);
}
