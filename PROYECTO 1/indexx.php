<?php include('sessions/indexx.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Picture</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to My Picture</h1>
    <?php if(isset($_SESSION['username'])): ?>
        <p>Hello, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a> or <a href="register.php">Register</a></p>
    <?php endif; ?>
</body>
</html>
