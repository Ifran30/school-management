<?php 

include "db.php";
$usid = $_POST["sid"];
$usubname = $_POST["ssubname"];
$usubpid = $_POST["subpid"];
$ucid = $_POST["cid"];
$uadid = $_POST["adid"];


$sql = "INSERT INTO student (S_ID,name,parent_ID,C_ID,ADMIN_id) values($usid,'".$usubname."',$usubpid,$ucid,$uadid)";

if($conn->query($sql) === TRUE){
	echo "Admin Added successfully";
}
else
{
	echo "There is some error!";
}
$conn->close();
?>