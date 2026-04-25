<?php
session_start();

// Redirect user to landing page if they are already logged in
if (isset($_SESSION["username"])) {
    header("Location: landing.php");
    exit();
}

$users = [
    "lariane" => "lariane19",
    "admin" => "secret123"
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION["username"] = $username;
        header("Location: landing.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOG IN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <form action="login.php" method="POST"> 
            <h1>LOG IN</h1>
            
            <?php if($error): ?>
                <p style="color: #ff6b6b; font-weight: bold;"><?php echo $error; ?></p>
            <?php endif; ?>

            <p>Username</p>
            <input type="text" name="username" placeholder="Enter your username" required>
            
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>