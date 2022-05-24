<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterShop</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php">
        <div class="input-group">
            <label for="username">username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <Confirm for="password_2">Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="text" name="reg_user" class="btn"></button>
        </div>
        <p>
            Already a member? <a href="login.php">sign in</a>
        </p>
    </form>
</body>
</html>