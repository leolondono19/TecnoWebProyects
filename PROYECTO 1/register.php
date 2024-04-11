<?php
include('db.php');

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (register_user($username, $password, $role)) {
        // Registro exitoso
        $message = "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        // Error en el registro
        $message = "Error al registrar el usuario.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Register</h2>
    <?php echo $message; ?>
    <form action="register.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
