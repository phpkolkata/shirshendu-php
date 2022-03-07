<?php
// $x = 10; // variable - temporary memory location
// echo $x;

// array index(key) and value
// Numeric array - because it has numeric keys starts from 0
$x = array("a","b","c", "d", "e"); // 0=a, 1=b, 2=c


// echo $x[0];
// echo $x[1];
// echo $x[2];
// echo $x[3];
// echo $x[4];

// DRY - Don't Repeat Yourself

for($i=0;$i<=4;$i++){
    echo $x[$i]."<br>";
}

print "<b>hello india</b>";
print "hello"."india";

//----------------------------------------------

// 3 methods to create a numeric array

// method 1 (standard way - by array function)
$x = array("a","b","c");

// debug purpose
// print"<br>";
// print_r($x);


// method 2 (direct way - with keys)
// $x[0] = "a";
// $x[1] = "b";
// $x[2] = "c";

// print"<br>";
// print_r($x);

// $x = array();empty array
// method 3 (direct without keys)
$x[] = "a";
$x[] = "b";
$x[] = "c";

print"<br>";
print_r($x);

