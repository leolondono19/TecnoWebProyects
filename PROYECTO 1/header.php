<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Picture</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="cont-header">
    <header>
        <img src="img/logo.png" alt="Logo">
        <button class="abrir-menu" id="abrir"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x-lg"></i></button>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="galeria.php">Galería</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="contactos.php">Contactos</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Iniciar Sesión</a></li>
                    <li><a href="register.php">Registrar</a></li> 
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</div>

</body>
</html>
