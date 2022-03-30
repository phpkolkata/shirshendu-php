<?php
// $name = "raj"
setcookie("name", "raj", time()+30);

extract($_COOKIE);

echo $name;