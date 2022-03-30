<?php
print_r($_POST);
extract($_POST);

if(isset($rem)){
    setcookie("em", $em, time()+60*60*60*48);
    setcookie("pw", $pw,  time()+60*60*60*48);
}