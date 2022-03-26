<?php
// print_r($_POST);
// print "<hr>";
// print_r($_FILES);
// print "<hr>";   


// short cut process
// copy(source, destination with file name)
// copy($_FILES['im']['tmp_name'], "images/".$_FILES['im']['name']);


$im = extract($_FILES['im']);

// $im = $_FILES['im'];
// $name = $im['name'];
// $type = $im['type'];
// $error = $im['error'];
// $tmp_name = $im['tmp_name'];
// $size = $im['size'];

// $name = $_FILES['im']['name'];
// $type = $_FILES['im']['type'];
// $tmp_name = $_FILES['im']['tmp_name'];
// $size = $_FILES['im']['size'];
// $error = $_FILES['im']['error'];

$id = rand(0,1000);
$path = "images/";
$file_name = $id."-".$name;
$full_path = $path.$file_name; 

if($error == 0){
   if($type == "image/jpg" || $type == "image/jpeg" || $type == "image/gif" || $type == "image/png"){
        copy($tmp_name, $full_path);
       header("location:24.php?msg=file uploaded successfully!");
   }
   else{
       header("location:24.php?msg=wrong format");
        die("wrong format!");
   }
}
else{
    header("location:24.php?msg=some error");
    die("something went wrong.");
}