<?php

$marks_22 = array("eng"=>33, "math"=>44,"sci"=>45);
$p_22 = array("name"=>"raj", "age"=>4);
$a_22 = array("class"=>5, "sec"=>"A", "marks"=>$marks_22);
$roll_22 = array("personal"=>$p_22, "academic"=>$a_22); //$v

$marks_35 = array("eng"=>53, "math"=>24,"sci"=>48);
$p_35 = array("name"=>"suman", "age"=>6);
$a_35 = array("class"=>5, "sec"=>"B", "marks"=>$marks_35);
$roll_35 = array("personal"=>$p_35, "academic"=>$a_35); //$v

$std = array("22"=>$roll_22, "35"=>$roll_35);

// print "<pre>";
// print_r($std);

foreach($std as $k=>$v){
    echo "<h1>Roll: $k</h1>";
    foreach($v as $k1=>$v1){
        echo "<b>".$k1.":</b><br>";
        foreach($v1 as $k2=>$v2){
            if(is_array($v2)){
                echo "<b>$k2</b>:<br>";
                foreach($v2 as $k3=>$v3){
                    echo $k3."-".$v3."<br>";
                }
            }
            else{
                echo $k2."-".$v2."<br>";
            }
        }
    }
}

