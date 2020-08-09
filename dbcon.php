<?php 
$con= mysqli_connect("localhost", "root", "");
$res= mysqli_select_db($con, "test");
if($res)    echo 'hey';
else    echo 'bye';
?>