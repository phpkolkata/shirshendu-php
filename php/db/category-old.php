<?php

require("db-connect.php");

$sql = "SELECT * FROM `category`"; //table name and column name must be wraped with `` and value with '' 
$res = mysqli_query($con, $sql);

if(isset($_REQUEST['msg'])){
    echo "<div style='color:green'>$_REQUEST[msg]</div>";
}

print "<a href='add-cat.php'>add more...</a>";  

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