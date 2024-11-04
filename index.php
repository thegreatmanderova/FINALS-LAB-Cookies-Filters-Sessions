<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to Our Website</h1>
            <p>Group 7</p>
        </header>
        <main>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<p>Hello, " . htmlspecialchars($_SESSION['username']) . "!</p>";
                echo "<a href='profile.php' class='button'>View Profile</a>";
                echo "<a href='logout.php' class='button'>Logout</a>";
            } else {
                echo "<a href='login.php' class='button'>Login</a>";
            }
            ?>
        </main>
    </div>
</body>
</html>
