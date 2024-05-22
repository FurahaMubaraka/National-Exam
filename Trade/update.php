<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/trade.css">
</head>
<body>
    <fieldset>
    <?php
    include("connect.php");
    $upd=$_GET['upd'];
    $select=mysqli_query($conn,"SELECT * FROM trade where trade_id='$upd'");
    $row=mysqli_fetch_array($select);
    ?>
        <form method="post">
        <h1>Update User</h1><br>
            <label>Trade_name</label><br>
            <input type="text" name="trade_name" id="" value="<?php echo $row['trade_name'] ?>"><br><br>
            <label>User_id</label><br>
            <input type="number" name="user_id" id="" value="<?php echo $row['user_id'] ?>"><br><br>
            <label>Trade_student</label><br>
            <input type="number" name="trade_student" id="" value="<?php echo $row['trade_student'] ?>"><br><br>
            <input type="submit" name="submit" value="submit">
            <br><br>
            <h3>
                Learn More About updating user? <a href="">Learn More...</a>
            </h3>
        </form>
    </fieldset>
</body>
</html>

<?php
    include("connect.php");
    if(isset($_POST['submit'])){
        $upd=$_GET['upd'];

        $update=mysqli_query($conn,"UPDATE trade SET trade_name='$_POST[trade_name]',user_id='$_POST[user_id]',trade_student='$_POST[trade_student]' where trade_id='$upd'");

        echo"<script>alert('User Updated Successfully');window.location.href='display.php';</script>";
    }
    ?>