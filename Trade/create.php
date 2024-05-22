<?php
include("connect.php");

$insert=mysqli_query($conn,"INSERT INTO trade values('','$_POST[trade_name]','$_POST[user_id]','$_POST[trade_student]')");

if($insert)
{
    echo"<script>alert('User Inserted  In Trade Table Successfully');window.location.href='../view/content.php';</script>";
}

?>