<?php
$user = "admin";
$email = "abc@gmail.com";
$pass = "1234";


$userName = isset($_POST["user"]) ? $_POST["user"] : NULL;
$password = isset($_POST["pass"]) ? $_POST["pass"] : NULL;

if(isset($_POST["sub"])){
    if(($userName == $user || $userName == $email) && $password == $pass){
        echo "You Are Logged In";
    }else{
        echo "Wrong Information";
    }
}else{
    echo "Input Your Data";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?" method="post">
        <label>User or Email: </label><br>
        <input type="text" name="user"><br>
        <label>Pass : </label><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Log In" name="sub">
    </form>
</body>
</html>