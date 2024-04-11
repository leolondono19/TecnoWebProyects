<?php
$host = 'localhost';
$port = '5555';
$dbname = 'MyPicture';
$user = 'postgres';
$password = 'admin';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $titulo = $_POST['titulo'];
        
        // Subir imagen y obtener su ruta
        $imagen = $_FILES['imagen']['name'];
        $ruta = "C:\xampp\htdocs\PROYECTO 1 GRUPAL" . basename($imagen);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

        $sql = "INSERT INTO fotos (titulo, imagen) VALUES (:titulo, :imagen)";
        $stmt = $conn->prepare($sql);

        if ($stmt->execute(['titulo' => $titulo, 'imagen' => $ruta])) {
            $message = "Foto agregada correctamente.";
            echo json_encode(['status' => 'success', 'message' => $message]);
        } else {
            $message = "Error al agregar foto.";
            echo json_encode(['status' => 'error', 'message' => $message]);
        }
    } catch (PDOException $e) {
        die("ERROR: No se pudo conectar o agregar foto. " . $e->getMessage());
    }
}
?>
