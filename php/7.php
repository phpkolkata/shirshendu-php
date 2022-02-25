<?php

// loop (iteration) (start, target(condition), step)
// for - logic
// while - db fetching - hw
// do while - no use - hw

for($i=1;$i<=10;$i++){
print $i."<br>";
}


$i =1;
while($i<=10){
    echo $i;
    $i++;
}


$i =1;
do{
    echo $i;
    $i++;
}while($i<=10);