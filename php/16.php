<?php
// multidiamensional array

$a = array("a","b","c");
$l = array("l","m","n");
$x = array("x","y","z", $l);

$arr = array($a, $x);

// echo $arr[1][2];


print "<pre>";
print_r($arr);