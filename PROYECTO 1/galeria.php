<?php
$host = 'localhost';
$port = '5555';
$dbname = 'MyPicture';
$user = 'postgres';
$password = 'admin';

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM fotos";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $fotos = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PICTURE - Galería de Fotos</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Estilo adicional para galería */
        .galeria-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            margin-top: 20px;
        }

        .foto {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .foto img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .foto-info {
            padding: 15px;
            background-color: #fff;
        }

        .foto-titulo {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    
    <main>
        <h1>Galería de Fotos</h1>
        <div class="galeria-container">
            <?php foreach ($fotos as $foto): ?>
                <div class="foto">
                    <img src="<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
                    <div class="foto-info">
                        <h2 class="foto-titulo"><?php echo $foto['titulo']; ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
