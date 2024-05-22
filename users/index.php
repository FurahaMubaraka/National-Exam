<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <fieldset>
        <form action="insert.php" method="post">
            <h1>Sign Up</h1>
            <label>Username</label><br>
            <input type="text" name="username" id=""><br><br>
            <label>Password</label><br>
            <input type="password" name="password" id=""><br><br>
            <input type="submit" name="submit" value="submit">
            <br><br>
            <h3>
                Already have an Account? <a href="login.php">Login...</a>
            </h3>
        </form>
    </fieldset>
</body>
</html>