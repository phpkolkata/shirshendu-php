<?php
require("db-connect.php");

$id = $_REQUEST['id'];

$sql = "delete from category where id='$id'";
$res = mysqli_query($con, $sql) or die("error in query - ". mysqli_error($con));

header("location:category.php?msg=record deleted successfully");