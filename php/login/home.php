<?php

require("session_security.php"); // mandatory inclusion, else give fatal error, stop executing.
// include("session_security.php") ; // optional inclusion, else give warning error and continue further code

// require_once();
// include_once();
?>

welcome home


3 condition to destroy session upon:
1. browser life
2. logout
3. inactivity

<hr>
<a href="logout.php">Logout</a>