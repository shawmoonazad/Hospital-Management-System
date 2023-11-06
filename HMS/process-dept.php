<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 
	 $dname = $_POST['dname'];
	 $dloc = $_POST['dloc'];
	 $status = $_POST['status'];
	 $sql = "INSERT INTO department (`Department_Name`, `D_Location`, `Status`)
	 VALUES ('$dname','$dloc','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "New Department record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>