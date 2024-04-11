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
        
        // Redirigir al usuario a la página principal o a donde quieras
        header('Location: indexx.php');
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
</head>
<body>
    <h2>Login</h2>
    <?php echo $message; ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
