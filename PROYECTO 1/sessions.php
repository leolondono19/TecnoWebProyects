<?php
include('../config.php');
include('../db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = find_user($username, $password);
        if ($user) {
            $_SESSION['username'] = $username;
            header('Location: ../indexx.php');
            exit;
        } else {
            echo "Invalid username or password.";
        }

        if (isset($_POST['role'])) {
            $role = $_POST['role'];
            register_user($username, $password, $role);
            $_SESSION['username'] = $username;
            header('Location: ../index.php');
            exit;
        }
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../index.php');
    exit;
}
?>
