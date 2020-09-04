<?php 

include "db.php";
$suid = $_POST["subid"];
$suname = $_POST["subname"];
$claas = $_POST["claas"];
$adminid = $_POST["id"];


$sql = "INSERT INTO subject (
	subject_id,name,class,admin_id) values($suid,'".$suname."',$claas,$adminid)";

if($conn->query($sql) === TRUE){
	echo "Admin Added successfully";
}
else
{
	echo "There is some error!";
}
$conn->close();
?>