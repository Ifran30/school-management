<?php 

include "db.php";
$uid = $_POST["fmid"];
$uname = $_POST["pname"];

$sql = "INSERT INTO parent (p_id,name) values($uid,'".$uname."')";

if($conn->query($sql) === TRUE){
	echo "Admin Added successfully";
}
else
{
	echo "There is some error!";
}
$conn->close();
?>