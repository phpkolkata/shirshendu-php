
<?php
extract($_REQUEST);

if(isset($msg)){
    print "<div style='color:red'>$msg</div>";
}
?>

<form action="login-check.php" method="post">
email:<input type="text" name="email"><br>
Pass:<input type="password" name="pass"><br>
<button>Login</button>

</form>