<?php
$server = 'localhost';
$username = 'root';
 $dsn = "mysql:host=$server;dbname=exam2";
try {
$pdo = new PDO($dsn, $username);
} 
catch (PDOException $e) {
    print_r("PDO Error:  " + $e);
}
?>