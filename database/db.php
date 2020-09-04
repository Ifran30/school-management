<?php 

$db['db_host'] = "localhost"; 
$db['db_user'] = "root"; 
$db['db_pass'] = ""; 
$db['db_name'] = "school"; 

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);



 if($conn){

 }
 else{
 	die ("Sorry to say - Error Connecting to MySql with Server- tomar database name check koro :p ");
 }












?>