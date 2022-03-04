<?php
//-------------------------------------------
// condition
// 0-3 - infant
// 4-12 - kid
// 13-19 -teen age
// 20 above - adult

$age = 19;
echo $age;

// and - &&
// or - ||

// method 1 (bad)
// if($age <= 3){
//     echo "infant";
// }
// if($age >= 4 && $age <=12){
//     echo "kid";
// }
// if($age >= 13 && $age <=19){
//     echo "teen age";
// }
// if($age > 19){
//     echo "adult";
// }

// method 2 (good)
if($age <= 3){
    echo "infant";
}
else if($age <= 12){
    echo "kid";
}
else if($age <= 19){
    echo "teen age";
}
else{
    echo "adult";
}



// switch case - hw