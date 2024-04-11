<?php
session_save_path(str_replace('\\', '/', __DIR__) .'/session_data/');
session_start();

$host = 'localhost';
$port = '5555';
$dbname = 'MyPicture';
$user = 'postgres';
$password = 'admin';

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: No se pudo conectar. " . $e->getMessage());
}
?>
