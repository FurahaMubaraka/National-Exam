<?php
include("connect.php");

$insert=mysqli_query($conn,"INSERT INTO trainee values('','$_POST[trainer_id]','$_POST[trainee_name]','$_POST[trainee_dofb]','$_POST[trainee_address]')");

if($insert)
{
    echo"<script>alert('User Inserted  In Trainee Table Successfully');window.location.href='../view/content.php';</script>";
}

?>