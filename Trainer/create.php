<?php
include("connect.php");

$insert=mysqli_query($conn,"INSERT INTO trainer values('','$_POST[user_id]','$_POST[trade_id]','$_POST[trainer_name]','$_POST[trainer_age]','$_POST[phone_number]')");

if($insert)
{
    echo"<script>alert('User Inserted  In Trainer Table Successfully');window.location.href='../view/content.php';</script>";
}

?>