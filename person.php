<?php include_once('config.php');   

 $person = $_POST['person'];
  $id = $_POST['veh'];
  $q = "SELECT * FROM vehicle where vid='$id' ";
$result = mysqli_query($conn,$q);
$vf = mysqli_fetch_array($result);
$nop = $vf['nperson'];
if($person>$nop)
{
	echo "1";
}
else
{
	echo "2";
}

							 ?>