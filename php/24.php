<?php
if(isset($_REQUEST['msg']))
echo "<div style='color:red'> $_REQUEST[msg] </div>";
?>



<!-- enctype and post method is important while uploading any type of file -->
<form action="25.php" method="post" enctype="multipart/form-data">

Name:<input type="text" name="nm"><br>
Image:<input type="file" name="im"><br>

<button>Submit</button>
</form>

