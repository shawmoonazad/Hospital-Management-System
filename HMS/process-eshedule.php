<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $serial = $_POST['serial'];
	 $e_id= $_POST['e_id'];
	 $rnumber = $_POST['rnumber'];
	 $day= $_POST['day'];
	 $shift= $_POST['shift'];
     $status = $_POST['status'];
	 $sql = "INSERT INTO `eshedule`(`sl`, `employee_id`, `room_number`, `day`, `shift`, `status`)
	 VALUES ('$serial','$e_id','$rnumber','$day','$shift','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "New Employee Schedule record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>