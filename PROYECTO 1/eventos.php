<?php
$host = 'localhost';
$port = '5555';
$dbname = 'MyPicture';
$user = 'postgres';
$password = 'admin';

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM eventos";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $eventos = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PICTURE - Eventos</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Estilo adicional para eventos */
        .evento-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            margin-top: 20px;
        }

        .evento {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .evento img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .evento-info {
            padding: 15px;
            background-color: #fff;
        }

        .evento-titulo {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .evento-descripcion {
            font-size: 1rem;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    
    <main>
        <h1>Eventos</h1>
        <div class="evento-container">
            <?php foreach ($eventos as $evento): ?>
                <div class="evento">
                    <img src="<?php echo $evento['imagen']; ?>" alt="<?php echo $evento['titulo']; ?>">
                    <div class="evento-info">
                        <h2 class="evento-titulo"><?php echo $evento['titulo']; ?></h2>
                        <p class="evento-descripcion"><?php echo $evento['descripcion']; ?></p>
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
