<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/trainer.css">
</head>
<body>
    <fieldset>
    <?php
    include("connect.php");
    $upd=$_GET['upd'];
    $select=mysqli_query($conn,"SELECT * FROM trainer where trainer_id='$upd'");
    $row=mysqli_fetch_array($select);
    ?>
        <form  method="post">
        <h1>Update User</h1>
            <label>User_id</label><br>
            <input type="number" name="user_id" id="" value="<?php echo $row['user_id'] ?>"><br><br>
            <label>Trade_id</label><br>
            <input type="number" name="trade_id" id="" value="<?php echo $row['trade_id'] ?>"><br><br>
            <label>Trainer_name</label><br>
            <input type="text" name="trainer_name" id="" value="<?php echo $row['trainer_name'] ?>"><br><br>
            <label>Trainer_age</label><br>
            <input type="number" name="trainer_age" id="" value="<?php echo $row['trainer_age'] ?>"><br><br>
            <label>Phone_Number</label><br>
            <input type="number" name="phone_number" id="" value="<?php echo $row['phone_number'] ?>"><br><br>
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

        $update=mysqli_query($conn,"UPDATE trainer SET user_id='$_POST[user_id]',trade_id='$_POST[trade_id]' ,trainer_name='$_POST[trainer_name]',trainer_age='$_POST[trainer_age]',phone_number='$_POST[phone_number]' where trainer_id='$upd'");

        echo"<script>alert('User Updated Successfully');window.location.href='display.php';</script>";
    }
    ?>