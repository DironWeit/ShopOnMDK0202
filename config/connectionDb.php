<?php
$host = "localhost";
$user = "postgres";
$password = "0000";
$dbname = "mdk0202";
$port = "5432";


$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

try {
  $connection = new PDO($dsn, $user, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
  echo "Подключение к базе данных прошло успешно!";
} catch (PDOException $error) {
  die('Ошибка подключения: ' . $error->getMessage());
}






?>