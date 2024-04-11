<?php
$host = 'localhost';
$port = '5555';
$dbname = 'MyPicture';
$user = 'postgres';
$password = 'admin';

$message = '';
$eventos = [];

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener los títulos de los eventos
    $stmt = $conn->query("SELECT titulo FROM eventos");
    $eventos = $stmt->fetchAll(PDO::FETCH_COLUMN);
} catch (PDOException $e) {
    die("ERROR: No se pudo conectar. " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];

        $conn->beginTransaction();

        $sql = "INSERT INTO pedidos (nombre, correo, direccion, producto, cantidad) VALUES (:nombre, :correo, :direccion, :producto, :cantidad)";
        $stmt = $conn->prepare($sql);

        if ($stmt->execute(['nombre' => $nombre, 'correo' => $correo, 'direccion' => $direccion, 'producto' => $producto, 'cantidad' => $cantidad])) {
            $message = "Pedido recibido. Redireccionando a la página principal...";
            echo "<script>setTimeout(function() { window.location.href = 'index.php'; }, 3000);</script>";
            $conn->commit();
        } else {
            $message = "Error al procesar el pedido.";
            $conn->rollBack();
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        die("ERROR: No se pudo registrar el pedido. " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PICTURE - Pedidos</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        main {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select,
        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 50%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 20px;
            font-size: 1.2em;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    
    <main>
        <h1>Realizar Pedido</h1>
        <form action="pedidos.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="direccion">Dirección de entrega:</label>
            <textarea id="direccion" name="direccion" rows="4" required></textarea>

            <label for="producto">Tipo de Servicio:</label>
            <select id="producto" name="producto" required>
                <option value="eventos">Eventos</option>
                <option value="sesiones">Sesiones de Fotografías</option>
            </select>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" min="1" required>

            <input type="submit" value="Realizar Pedido">
        </form>
        <div class="message"><?php echo $message; ?></div>

        <?php if (!empty($eventos)): ?>
            <h2>Eventos Disponibles</h2>
            <ul>
                <?php foreach ($eventos as $evento): ?>
                    <li><?php echo $evento; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
