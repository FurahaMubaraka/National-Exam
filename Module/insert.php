<?php
include("connect.php");

$insert=mysqli_query($conn,"INSERT INTO module values('','$_POST[module_name]','$_POST[trainer_id]')");

if($insert)
{
    echo"<script>alert('Module Inserted Successfully');window.location.href='../view/content.php';</script>";
}

?>