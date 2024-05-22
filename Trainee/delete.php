<?php
include("connect.php");

$dlt=$_GET['dlt'];

$delete=mysqli_query($conn,"DELETE FROM trainee where trainee_id='$dlt'");

if($delete)
{
    echo"<script>alert('Trainee Deleted Successfully');window.location.href='display.php';</script>";
}

?>