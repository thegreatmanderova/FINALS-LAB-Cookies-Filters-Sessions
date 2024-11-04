<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = htmlspecialchars($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h2>The Profile Page</h2>
        </header>
        <main>
            <p>Welcome, <?php echo $username; ?>! This is your profile page.</p>
            <a href="logout.php" class="button">Logout</a>
        </main>
    </div>
</body>
</html>
