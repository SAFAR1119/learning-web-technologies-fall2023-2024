<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<form method="post" action="../controller/usersignupCheck.php" enctype="">
            <fieldset>
                <legend>Signup</legend>
                Username:  <input type="text" name="username" value="" required/> <br>
                Password:  <input type="password" pattern="(?=.*d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one uppercase,one lowercase and one number, and at least 8 character" name="password" value="" required /> <br>
                Email:  <input type="email" name="email" value="" required/> <br>
                Phone:  <input type="text" name="phone" value="" required/> <br>
                Gender:<input type="radio" name="gender" value="" /> Male
                       <input type="radio" name="gender" value="" /> Female
                       <input type="radio" name="gender" value="" /> Other <br>
                    <input type="submit" name="submit" value="Submit" />
            </fieldset>
                
        </form>
</body>
</html>