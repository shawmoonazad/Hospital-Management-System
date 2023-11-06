<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $id = $_POST['id'];
	 $fname= $_POST['fname'];
	 $lname= $_POST['lname'];
	 $mnumber = $_POST['mnumber'];
	 $addrs = $_POST['addrs'];
	 $sex= $_POST['sex'];
	 $admiss= $_POST['admiss'];


	 $sql = "INSERT INTO patient (`ID`, `First_Name`, `Last_Name`, `Mobile_Number`, `Address`, `Sex`, `addmission`)
	 VALUES ('$id','$fname','$lname','$mnumber','$addrs','$sex','$admiss')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>