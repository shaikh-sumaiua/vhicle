<?php
$hname = "localhost";
$user = "root";
$pass ="";
$dbname = "vehicle_booking";
$conn=mysqli_connect($hname,$user,$pass,$dbname);
if($conn){
	//echo "Connection";
}else{
	//echo "not connect";
}
?>