<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="dashboard">

    <header>
        <h1>Dashboard</h1>

        <a href="logout.php" class="logout">
            Logout
        </a>
    </header>

    <main>

        <div class="welcome-card">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>

            <p>
                You have successfully logged into the system.
            </p>
        </div>

        <div class="cards">

            <div class="card">
                <h3>Users</h3>
                <p>Manage system users.</p>
                <a href="#">View Users</a>
            </div>

            <div class="card">
                <h3>Reports</h3>
                <p>View system reports.</p>
                <a href="#">View Reports</a>
            </div>

            <div class="card">
                <h3>Profile</h3>
                <p>View your account information.</p>
                <a href="#">View Profile</a>
            </div>

        </div>

    </main>

</div>

</body>
</html>