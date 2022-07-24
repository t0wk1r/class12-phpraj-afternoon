<?php
error_reporting(0);
$bangla = $_POST["bn"];
$english = $_POST["en"];
$math = $_POST["math"];


if(isset($_POST["sub"])){
    if($bangla >=33 && $english>=33 && $math>=33){
        echo "pass"." ".($bangla+$english+$math)/3;
    }else{
        echo "fail";
    }
    
}
?>


<form action="?" method="post">
    <input type="text"placeholder="bangla" name="bn" ><br>
    <input type="text"placeholder="english" name="en" ><br>
    <input type="text"placeholder="math" name="math" ><br>
    <input type="submit" name="sub" ><br>
</form>