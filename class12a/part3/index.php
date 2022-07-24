<?php
$user = "admin";
$pass = "1234";


$userName = isset($_POST["user"]) ? $_POST["user"] : NULL;
$password = isset($_POST["pass"]) ? $_POST["pass"] : NULL;

if(isset($_POST["sub"])){

    if($userName == $user && $password == $pass){
        $success = "You Are Logged In";

    }elseif($password == $pass){
        $wruser = "Wrong User Name";
    }elseif($userName == $user){
        $wrpass = "Wrong Password";
    }else{
        $fullwr = "Wrong User And Password";
    }

}else{
    echo "Input Your Orginal Data";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .vulval{
            color: brown;
        }
    </style>
</head>
<body>
    <?php if(isset($success)){
        echo $success;
    }?>
    <form action="?" method="post">
        <label>User : </label><br>
        <input type="text" name="user"><br>
        <?php if(isset($wruser)){
            echo $wruser."<br>";
        }?>
        
        <label>Pass : </label><br>
        <input type="password" name="pass"><br>
        <?php if(isset($wrpass)){
            echo $wrpass."<br>";
        }?>
        <input type="submit" value="Log In" name="sub">
    </form>
    <?php if(isset($fullwr)){
        echo "<h4 class='vulval'>".$fullwr."</h4>";
    }?>
</body>
</html>