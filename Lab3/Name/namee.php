<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <?php
    include("Name.php");
    ?>

    <h2>Login</h2>
    <form action="process_login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
