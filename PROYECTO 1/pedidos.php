<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PICTURE - Pedidos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    
    <main>
        <h1>Realizar Pedido</h1>
        <form action="procesar_pedido.php" method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            
            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo" required><br>
            
            <label for="direccion">Dirección de entrega:</label><br>
            <textarea id="direccion" name="direccion" rows="4" required></textarea><br>
            
            <label for="producto">Producto:</label><br>
            <select id="producto" name="producto" required>
                <option value="foto1">Foto 1</option>
                <option value="foto2">Foto 2</option>
                <option value="foto3">Foto 3</option>
            </select><br>
            
            <label for="cantidad">Cantidad:</label><br>
            <input type="number" id="cantidad" name="cantidad" min="1" required><br>
            
            <input type="submit" value="Realizar Pedido">
        </form>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
