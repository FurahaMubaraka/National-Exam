<?php
include("connect.php");

$dlt=$_GET['dlt'];

$delete=mysqli_query($conn,"DELETE FROM module where module_id='$dlt'");

if($delete)
{
    echo"<script>alert('Module Deleted Successfully');window.location.href='display.php';</script>";
}

?>