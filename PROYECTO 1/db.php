<?php
include('config.php');

function register_user($username, $password, $role) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', '$role')";
    return mysqli_query($conn, $sql);
}

function find_user($username, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}
?>
