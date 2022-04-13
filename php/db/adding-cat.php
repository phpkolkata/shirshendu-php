<?php
require("db-connect.php");

extract($_POST);

$sql = "INSERT INTO `category`  VALUES (NULL, '$nm', '$is_active')";
$res = mysqli_query($con, $sql) or die("error in query - ". mysqli_error($con));

header("location:category.php?msg=record added successfully");