<?php
include("connect.php");

$insert=mysqli_query($conn,"INSERT INTO assessment values('','$_POST[module_id]','$_POST[trade_id]','$_POST[trainer_id]','$_POST[ass_date]')");

if($insert)
{
    echo"<script>alert('Assessment Inserted Successfully');window.location.href='../view/content.php';</script>";
}

?>