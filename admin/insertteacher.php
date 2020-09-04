<?php 

include "db.php";
$tid = $_POST["tubid"];
$tname = $_POST["subsname"];
$phno = $_POST["phoneno"];
$adid = $_POST["aid"];
$add = $_POST["address"];


$sql = "INSERT INTO teacher (t_id,name,phone_no,address,admin_id) values($tid,$tname,$phno,$adid,$add)";

if($conn->query($sql) === TRUE){
	echo "Admin Added successfully";
}
else
{
	echo "There is some error!";
}
$conn->close();
?>