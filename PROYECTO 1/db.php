<?php
include('config.php');

function register_user($username, $password, $role) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute(['username' => $username, 'password' => $hashed_password, 'role' => $role]);
}

function find_user($username, $password) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}
?>
