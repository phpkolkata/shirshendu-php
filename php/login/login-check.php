<?php
session_start();
extract($_POST);

if($email == "test@test.com" && $pass == "test"){
    $_SESSION['login'] = true;
    header("location:home.php");
}
else{
    header("location:index.php?msg=wrong user/password");
}