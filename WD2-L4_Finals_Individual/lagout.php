<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGOUT PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login"> <div class="container">
        <h2>Thank you for using!</h2>
        <p>You have been logged out.</p>
        <a href="login.php" class="btn-logout">Login Again</a>
    </div>
</div>
</body>
</html>