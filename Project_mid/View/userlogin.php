<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controller/userloginCheck.php" enctype="">
            <fieldset>
                <legend>Login</legend>
                Username: <input type="text" name="username" value="" required/> <br>
                Password: <input type="password" name="password" value="" required /> <br>
                     <input type="submit" name="submit" value="Submit" required />
                     <a href="usersignup.php">Signup</a>
            </fieldset>
                
        </form>
</body>
</html>  