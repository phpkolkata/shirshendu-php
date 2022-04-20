<?php
require("db-connect.php");

// search
$where = "";
extract($_POST);
if(isset($srch)){
    $where = " Where name like '%$srch%'";
}
// end search


// count records
$sql = "SELECT * FROM `category` $where";
$res = mysqli_query($con, $sql);
$total = mysqli_num_rows($res);
// echo $total;




$start = 0;
$limit = 2;
$pages = ceil($total / $limit); //upword round figure by ceil funciton

if(isset($_REQUEST['p'])){
    $start = ($_REQUEST['p'] - 1) * $limit;
}




$sql = "SELECT * FROM `category` $where LIMIT $start,$limit"; //Limit start,steps  0,2 - 2,2 - 4,2 - 6-2
$res = mysqli_query($con, $sql);

if(isset($_REQUEST['msg'])){
    echo "<div style='color:green'>$_REQUEST[msg]</div>";
}

print "<a href='add-cat.php'>add more...</a>";  


// search

print"<form action='' method='post'>Search:<input type='text' name='srch'><input type='submit' value='Search'>";

// search end


print "<table border='1' width='300'>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>isActive</th>
        <th>Option</th>
        </tr>
";

// mysqli_fetch_assoc, row, array, object
while($row = mysqli_fetch_assoc($res)){

    print "<tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
        <td><a href='del-cat.php?id=$row[id]'>del</a> / <a href='edit-cat.php?id=$row[id]'>edit</a> </td>
    </tr>";
    // print "<pre>";
    // print_r($row);
}

print "</table>";

print"<hr>";

for($i=1;$i<=$pages;$i++){
    echo "<a href='?p=$i'>$i</a> | ";
}