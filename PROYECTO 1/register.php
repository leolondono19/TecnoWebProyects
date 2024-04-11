<?php
$host = 'localhost';
$port = '5555';
$dbname = 'MyPicture';
$user = 'postgres';
$password = 'admin';

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $message = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
        $stmt = $conn->prepare($sql);

        if ($stmt->execute(['username' => $username, 'password' => $hashed_password, 'role' => $role])) {
            // Registro exitoso
            $message = "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
        } else {
            // Error en el registro
            $message = "Error al registrar el usuario.";
        }
    }
} catch (PDOException $e) {
    die("ERROR: No se pudo conectar o registrar el usuario. " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        select {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php echo $message; ?>
        <form action="register.php" method="post" id="registerForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <input type="submit" value="Register">
        </form>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            const password = document.getElementById("password").value;
            if (password.length < 8) {
                alert("La contraseña debe tener al menos 8 caracteres.");
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
