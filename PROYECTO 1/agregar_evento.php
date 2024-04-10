<?php
$host = "localhost";
$port = "5555";
$dbname = "MyPicture";
$user = "postgres";
$password = "admin";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_FILES['imagen']['name'];
    $imagen_temp = $_FILES['imagen']['tmp_name'];

    move_uploaded_file($imagen_temp, "ruta/donde/guardar/imagenes/" . $imagen);

    $stmt = $conn->prepare("INSERT INTO eventos (titulo, descripcion, imagen) VALUES (:titulo, :descripcion, :imagen)");
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':imagen', $imagen);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
