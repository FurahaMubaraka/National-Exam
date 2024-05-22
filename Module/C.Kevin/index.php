<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method="POST">
    username:<input type="text"><br><br>
    password:<input type="text"><br><br>
    <button>submit</button>
</form>
</body>
<?php 
$error="";
if($_server["REQUEST_METHOD"]="POST")
{
    if(empty($_POST["username"]))
    {
        $error="username is required";
    }else{
        $username=$_POST["username"];
    }
}
?>
</html>