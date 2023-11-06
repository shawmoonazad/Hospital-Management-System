<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $id = $_POST['id'];
	 $fname= $_POST['fname'];
	 $lname= $_POST['lname'];
	 $department_name = $_POST['department_name'];
	 //$email = $_POST['email'];
	 $sex= $_POST['sex'];
	 $blood_group= $_POST['blood_group'];


	 $sql = "INSERT INTO doctor (`ID`, `First_Name`, `Last_Name`, `department_name`, `Sex`, `Blood_Group`)
	 VALUES ('$id','$fname','$lname','$department_name','$sex','$blood_group')";
	 if (mysqli_query($conn, $sql)) {
		echo "New Doctor record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>