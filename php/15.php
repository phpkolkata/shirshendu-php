<?php

$std = array("name"=>"raj", "age"=>12, "class"=>8);

echo $std['name'];

echo "hello", $std['name']; // better approach
echo "hello". $std['name']; // better approach
echo "hello $std[name]"; // not better

echo "<hr>";
// foreach loop for any array
foreach($std as $v){
    echo $v."<br>";
}

echo "<hr>";
// foreach loop for any array with keys
foreach($std as $k=>$v){
    echo $k."=".$v."<br>";
}