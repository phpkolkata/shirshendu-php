<?php
require("db-connect.php");

$id = $_REQUEST['id'];

$sql = "select * from category where id='$id'";
$res = mysqli_query($con, $sql) or die("error in query - ". mysqli_error($con));
$row = mysqli_fetch_assoc($res);

print_r($row);
extract($row);

?>


<h1>Edit Category</h1>
<form action="editing-cat.php?id=<?php echo $id ?>" method="post">
<!-- <input type="hidden" name="cat_id" value="<?php // echo $id ?>"> -->
    Name:
    <input type="text" name="nm" value="<?php echo $name ?>"><br>
    isActive:
    <input type="radio" name="is_active" value="y" <?php echo ($is_active == "y") ? "checked" : ""; ?>> yes
    <input type="radio" name="is_active" value="n" <?php echo ($is_active == "n") ? "checked" : ""; ?>> no
<br>
<button>Update</button>
</form>


<!-- if($is_active == "y"){
    echo "checked";
}
else{
    echo "";
}
// shortcut of if else - turnary operator
echo ($is_active == "y") ? "checked" : ""; -->