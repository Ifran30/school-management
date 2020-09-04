<?php 

$dbhost= "localhost"; 
$db_user = "root"; 
$db_pass = ""; 
$db_name= "school"; 

$conn = new mysqli($dbhost,$db_user,$db_pass,$db_name);



 if($conn->error){
 	die ("Sorry to say - Error Connecting to MySql with Server- tomar database name check koro :p ");
 }

?>