<?php
// associative array - because we associate user defined keys instead to auto increment keys ex:0,1,2

// numeric array example
$std = array("raj", "12");
print "<pre>";
print_r($std);

// associative array example
$std = array("name"=>"raj", "age"=>"12");
print "<pre>";
print_r($std);


// method 1 - by array function
$std = array("name"=>"raj", "age"=>"12");

// method 2 - direct with keys
$std['name'] = "raj";
$std['age'] = 12;