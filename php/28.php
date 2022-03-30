<?php
$em = "";
$pw ="";

if(isset($_COOKIE['em'])){
    $em = $_COOKIE['em'];
}
if(isset($_COOKIE['pw'])){
    $pw = $_COOKIE['pw'];
}


?>

<form action="29.php" method="post">
    email: <input type="email" name="em" value="<?php echo $em ?>"><br>
    pass: <input type="password" name="pw"  value="<?php echo $pw ?>"><br>
    remember me <input type="checkbox" name="rem"><br>
    <button>submit</button>
</form>