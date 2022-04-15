<?php
require("db-connect.php");

extract($_REQUEST);
// extract($_POST);
// print_r($_REQUEST);

$sql = "UPDATE `category` SET `name` = '$nm', `is_active`='$is_active' WHERE `id` = '$id'";
$res = mysqli_query($con, $sql) or die("error in query - ". mysqli_error($con));

header("location:category.php?msg=record updated successfully");