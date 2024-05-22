<?php
include("connect.php");

$select=mysqli_query($conn,"SELECT * FROM users where username='$_POST[username]'and user_password='$_POST[password]'");
$query=mysqli_fetch_array($select,MYSQLI_ASSOC);
$count=mysqli_num_rows($select);


if($count){
    echo"<script>alert('User Inserted Successfully');window.location.href='../view/content.php';</script>";
}
else{
    echo"<script>alert('User Not Found');window.location.href='../users/login.php';</script>";
}




?>