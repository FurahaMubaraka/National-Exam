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
    <?php
    include("connect.php");
    $upd=$_GET['upd'];
    $select=mysqli_query($conn,"SELECT * FROM users where user_id='$upd'");
    $row=mysqli_fetch_array($select);
    ?>
        <form method="post">
        <h1>Update User</h1>
            <label>Username</label><br>
            <input type="text" name="username" id="" value="<?php echo $row['username'] ?>"><br><br>
            <label>Password</label><br>
            <input type="password" name="password" id="" value="<?php echo $row['user_password'] ?>"><br><br>
            <input type="submit" name="submit" value="submit">
            <br><br>
            <h3>
                Learn more about To update? <a href="">Learn More...</a>
            </h3>
        </form>
    </fieldset>
</body>
</html>
<?php
    include("connect.php");
    if(isset($_POST['submit'])){
        $upd=$_GET['upd'];

        $update=mysqli_query($conn,"UPDATE users SET username='$_POST[username]',user_password='$_POST[password]' where user_id='$upd'");

        echo"<script>alert('User Updated Successfully');window.location.href='display.php';</script>";
    }
    ?>