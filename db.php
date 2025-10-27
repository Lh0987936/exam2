<?php
$type = 'mysql'; 
$server = 'localhost';
$db = 'exam2';
$port = '3006';
$charset = 'utf8mb4';
$dsn = `$type:host=$server;dbname=$db;port=$port;charset=$charset`;

try {
$pdo = new PDO($dsn); //Check back in might need userpass(Iforgot)
} catch (PDOException $e) {
    print_r("PDO Error:  " + $e);
}