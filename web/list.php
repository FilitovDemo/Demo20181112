<?php
// https://bit.ly/2zkZwx1
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

$stmt = $db->prepare('select * from users');
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="zh_Hant">
<head>
    <meta charset="utf-8">
    <title>列表</title>
</head>
<body>
    <h1>已經登錄的token</h1>
    <ul>
<?php
while( $r = $stmt->fetch() ){
    echo '<li>';
    echo $r['name'];
    echo '(';
    echo $r['token'];
    echo ')</li>';
}
?>
    </ul>
</body>
</html>
