<?php
    session_start();
    if (isset($_SESSION['email'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <form action="./login_process.php" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <br>

        <div>
        <label for="password">Password</label>
            <input type="password" name="password" id="pasword">
        </div>
        <br>

        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>
</html>