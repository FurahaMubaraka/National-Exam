<?php
include("connect.php");

$dlt=$_GET['dlt'];

$delete=mysqli_query($conn,"DELETE FROM users where user_id='$dlt'");

if($delete)
{
    echo"<script>alert('User Deleted Successfully');window.location.href='display.php';</script>";
}

?>