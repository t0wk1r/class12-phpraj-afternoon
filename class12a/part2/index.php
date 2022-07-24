<?php
$user = "admin";
$pass = "1234";


$userName = isset($_POST["user"]) ? $_POST["user"] : NULL;
$password = isset($_POST["pass"]) ? $_POST["pass"] : NULL;

if(isset($_POST["sub"])){
    #### step 1 #####
        // if($userName == $user && $password == $pass){
        //     echo "You Are Logged In";
        // }elseif($userName != $user && $password == $pass){
        //     echo "Wrong User Name";
        // }elseif($userName == $user && $password != $pass){
        //     echo "Wrong Password";
        // }else{
        //     echo "Wrong User And Password";
        // }

    ##### step 2 #####
    // if($userName == $user && $password == $pass){
    //     echo "You Are Logged In";
    // }elseif($password == $pass){
    //     echo "Wrong User Name";
    // }elseif($userName == $user){
    //     echo "Wrong Password";
    // }else{
    //     echo "Wrong User And Password";
    // }

    ##### step 3 ########

    if($userName == $user){
            if($password == $pass){
                echo "Logged In";
            }else{
                echo "Password Not Match";
            }
    }else{
        echo "User Not Match";
    }
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
        <label>User : </label><br>
        <input type="text" name="user"><br>
        <label>Pass : </label><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Log In" name="sub">
    </form>
</body>
</html>