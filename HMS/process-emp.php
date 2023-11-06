<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $id = $_POST['id'];
	 $fname= $_POST['fname'];
	 $lname= $_POST['lname'];
	 $department = $_POST['department'];
	 $mnumber = $_POST['mnumber'];
	 $sdate = $_POST['sdate'];
	 $sex= $_POST['sex'];
	 $designation= $_POST['designation'];
	 $blood_group= $_POST['blood_group'];

	 $sql = " INSERT INTO `employee`(`id`, `first_name`, `last_name`, `start_date`, `department_name`, `mobile_number`, `sex`, `designation`, `blood_group`)
	 VALUES ('$id','$fname','$lname','$sdate','$department','$mnumber','$sex','$designation',
	 '$blood_group')";
	 if (mysqli_query($conn, $sql)) {
		echo "New Employee record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>