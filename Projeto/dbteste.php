<?php 
$test Connection = mysql_connect('localhost', 'root', ''); 

if (!$testConnection) { die('Error: ' . mysql_error()); } echo 'Congratulations! The database connection works!'; 
mysql_close($testConnection); 

?>
