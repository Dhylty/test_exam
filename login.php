<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-container">

    <div class="login-box">
        <h1>Welcome Back</h1>
        <p>Login to your account</p>

        <?php if (isset($_GET['error'])): ?>
            <div class="error">
                Invalid username or password.
            </div>
        <?php endif; ?>

        <form action="authenticate.php" method="POST">

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>

        </form>

        <p class="register">
            Don't have an account?
            <a href="register.php">Register</a>
        </p>
    </div>

</div>

</body>
</html>