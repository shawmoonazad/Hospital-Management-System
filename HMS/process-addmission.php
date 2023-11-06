<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $admission_id= $_POST['admission_id'];
	 $p_id = $_POST['p_id'];
	 $rnumber = $_POST['rnumber'];
	 $bed_no = $_POST['bed_no'];
	 $admission_date = $_POST['admission_date'];
	 $release_date = $_POST['release_date'];
	 $sql = "INSERT INTO `admission`(`admission_id`, `patient_id`, `room_number`, `bed_number`, `admission_date`, `release_date`)
	 VALUES ('$admission_id','$p_id','$rnumber','$bed_no','$admission_date','$release_date')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>