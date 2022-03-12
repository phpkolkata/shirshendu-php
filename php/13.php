<?php
$weeks = array("sunday", "monday","tuesday", "wednesday","thursday", "friday", "saturday");

// homework, fetch array value into html dropdown
print "<select>";
for($i=0;$i<=6;$i++){
    print "<option>$weeks[$i]</option>";
}
print"</select>";

?>

<!-- <select>
<option>sunday</option>
<option>monday</option>
<option>tuesday</option>
<option>wednesday</option>
<option>friday</option>
<option>saturday</option>
</select> -->