<?php
$hostname = "localhost";
$database = "easy";
$username = "root";
$password = "";
// Создаем соединение
$mysqli = new mysqli($hostname, $username, $password, $database);
// Проверяем соединение
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
?>