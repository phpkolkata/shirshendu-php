<?php
session_start();
// if(!$_SESSION['login'])
if($_SESSION['login'] != true){
    header("location:index.php?msg=wrong attempt, please login first.");
}
?>