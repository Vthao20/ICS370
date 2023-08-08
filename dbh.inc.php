<?php
$dsn = "mysql:host=localhost;dbname=ics370";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO ($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Connection failed: " . $e- >getMessages();
}