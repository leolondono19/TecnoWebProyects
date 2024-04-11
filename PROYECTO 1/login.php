<?php
include('db.php');

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = find_user($username, $password);

    if ($user) {
        // Iniciar sesión
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];
        
        // Redirigir al usuario según su rol
        if ($_SESSION['role'] == 'admin') {
            header('Location: admin_eventos.php');
            exit;
        } else {
            header('Location: pedidos.php');
            exit;
        }
    } else {
        // Error en el login
        $message = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container .message {
            text-align: center;
            color: red;
            margin-bottom: 20px;
        }
        .container label {
            display: block;
            margin-bottom: 8px;
        }
        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p class="message"><?php echo $message; ?></p>
        <form action="login.php" method="post" id="loginForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>

    <script>
        // Validación del formulario
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username.trim() === '' || password.trim() === '') {
                alert('Por favor, complete todos los campos.');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
