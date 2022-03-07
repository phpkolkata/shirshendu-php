<?php

// small case - hello india
// upper case - HELLO INDIA
// camel case - helloIndia - variable or func
// pascal case - HelloIndia -oops
// snake case - hello_india - variable or func


// user defined functions
function sayHello(){
    echo "hello";
}

// sayHello();

// 1. function name
// 2. function arguments/parameters
// 3. optional args/params
// 4. process / return
// 5. return type




function add($v1, $v2){
    $z = $v1 + $v2;
    // print $z. "<br>"; // process
    // if($z > 20){
    //     return "hello";
    // }
    // else{
    //     return 1;
    // }
    return $z;
}

// echo add(3,3);
$tot = add(20, 30);
echo $tot;
$avg = $tot / 2;

// add(209, 305);


function getData($age){
    if($age <= 3){
        return "infant";
    }
    else if($age <= 12){
        return "kid";
    }
    else if($age <= 19){
        return "teen age";
    }
    else{
        return "adult";
    }
}

echo getData(20);
echo "<br>";
echo getData(2);

// ------------------------
function calculate($v1,$v2,$act="add"){
    if($act == "add"){
        return $v1+$v2;
    }
    else if($act == "sub"){
        return $v1-$v2;
    }
    else if($act == "mul"){
        return $v1*$v2;
    }
    else if($act == "div"){
        return $v1/$v2;
    }
}

print "<hr>";
$total = calculate(30, 20, "sub");
echo $total;