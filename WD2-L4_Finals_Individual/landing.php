<?php
session_start();

// Security check: If not logged in, boot them back to login page
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANDING PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="index">
        <div class="container"> 
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
            <p>You have successfully logged in to the login.</p>
            
            <div class="menu-actions">
                <a href="logout.php" class="btn-logout">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>