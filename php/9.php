<?php
$avg = 79;
$class = 9;

if($class <= 6){
    // primary section
    if($avg <= 33){
        echo "D";
    }
    else if($avg <= 55){
        echo "C";
    }
    else if($avg <= 75){
        echo "B";
    }
    else if($avg > 75){
        echo "A";
    }
    else{
        echo "wrong data";
    }
}
else{
    // secondary section
    if($avg <= 33){
        echo "fail";
    }
    else if($avg <= 55){
        echo "3rd";
    }
    else if($avg <= 75){
        echo "2nd";
    }
    else if($avg > 75){
        echo "1ST";
    }
    else{
        echo "wrong data";
    }
}



