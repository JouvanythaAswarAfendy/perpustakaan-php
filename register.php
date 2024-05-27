<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="./register_process.php" method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="pasword"><br>
        <br>

        <input type="submit" value="Register">
</body>
</html>