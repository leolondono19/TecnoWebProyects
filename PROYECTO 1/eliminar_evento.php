<?php
$host = "localhost";
$port = "5555";
$dbname = "MyPicture";
$user = "postgres";
$password = "admin";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id_evento = $_POST['id_evento'];

    $stmt = $conn->prepare("DELETE FROM eventos WHERE id_evento = :id_evento");
    $stmt->bindParam(':id_evento', $id_evento);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
