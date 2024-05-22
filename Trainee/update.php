<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/trainee.css">
</head>
<body>
    <fieldset>
    <?php
    include("connect.php");
    $upd=$_GET['upd'];
    $select=mysqli_query($conn,"SELECT * FROM trainee where trainee_id='$upd'");
    $row=mysqli_fetch_array($select);
    ?>
        <form method="post">
        <h1>Update User</h1><br>
            <label>Trainer_id</label><br>
            <input type="number" name="trainer_id" id="" value="<?php echo $row['trainer_id'] ?>"><br><br>
            <label>Trainee_name</label><br>
            <input type="text" name="trainee_name" id="" value="<?php echo $row['trainee_name'] ?>"><br><br>
            <label>Trainee_DofB</label><br>
            <input type="date" name="trainee_dofb" id="" value="<?php echo $row['trainee_dofb'] ?>"><br><br>
            <label>Trainee_address</label><br>
            <input type="text" name="trainee_address" id="" value="<?php echo $row['trainee_address'] ?>"><br><br>
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

        $update=mysqli_query($conn,"UPDATE trainee SET trainer_id='$_POST[trainer_id]',trainee_name='$_POST[trainee_name]' ,trainee_dofb='$_POST[trainee_dofb]',trainee_address='$_POST[trainee_address]' where trainee_id='$upd'");

        echo"<script>alert('Trainee Updated Successfully');window.location.href='display.php';</script>";
    }
    ?>