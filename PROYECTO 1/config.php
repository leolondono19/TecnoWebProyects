<?php
session_save_path(__DIR__ . '/session_data/');
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'my_picture');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn === false){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
?>
