<?php

session_start();

require_once "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1) {

    $user = $result->fetch_assoc();

    if ($password === $user['password']) {

        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];

        header("Location: dashboard.php");
        exit();

    }
}

header("Location: login.php?error=1");
exit();

?>