<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $serial = $_POST['serial'];
	 $sname = $_POST['sname'];
	 $p_id = $_POST['p_id'];
	 $description = $_POST['description'];
	 $quantity=$_POST['quantity'];
	 $rate=$_POST['rate'];
	 $status = $_POST['status'];
	 $sql = "INSERT INTO `service`(`sl`, `service_name`, `patient_id`, `description`, `quantity`, `rate`, `status`)
	 VALUES ('$serial','$sname','$p_id','$description','$quantity','$rate','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>