<?php include_once('config.php');   

 $nameid = $_POST['datapost'];
 $q = "SELECT * FROM vehicle  WHERE city='$nameid'";
$result = mysqli_query($conn,$q);
while ($rows = mysqli_fetch_array($result)) {
								?>
								<option value="<?php echo $rows['vid'];?>"><?php echo $rows['name'];?></option>
							<?php 
							}

							 ?>