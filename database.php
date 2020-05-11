<?php

$server = 'localhost';
$username = 'root';
$password = '1213';
$database = 'login-php';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
