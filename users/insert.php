<?php
include("connect.php");

$insert=mysqli_query($conn,"INSERT INTO users values('','$_POST[username]','$_POST[password]')");

if($insert)
{
    echo"<script>alert('User Inserted Successfully');window.location.href='../view/content.php';</script>";
}

?>