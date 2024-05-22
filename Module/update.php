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
    $select=mysqli_query($conn,"SELECT * FROM module where module_id='$upd'");
    $row=mysqli_fetch_array($select);
    ?>
        <form method="post">
            <h1>Update User</h1>
            <label>Module_name</label><br>
            <input type="text" name="module_name" id="" value="<?php echo $row['module_name'] ?>"><br><br>
            <label>trainer_id</label><br>
            <input type="number" name="trainer_id" id="" value="<?php echo $row['trainer_id'] ?>"><br><br>
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

        $update=mysqli_query($conn,"UPDATE module SET module_name='$_POST[module_name]',trainer_id='$_POST[trainer_id]' where module_id='$upd'");

        echo"<script>alert('Module Updated Successfully');window.location.href='display.php';</script>";
    }
    ?>