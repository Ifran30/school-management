<?php 

include "db.php";
$uname = $_POST["name"];
$uid = $_POST["id"];

$sql = "INSERT INTO admin (admin_id,name) values($uid,'".$uname."')";

if($conn->query($sql) === TRUE){
	echo "Admin Added successfully";
}
else
{
	echo "There is some error!";
}
$conn->close();
?>