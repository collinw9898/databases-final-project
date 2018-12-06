<!DOCTYPE html>
<html> 
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>


<?php
require("dbconnect.php");
require("tableshow.php");
show_artists($conn);
show_albums($conn);
?>



<br><br><br><br>
<hr width="50">
<a href="index.php" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
