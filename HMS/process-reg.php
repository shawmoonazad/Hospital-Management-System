<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $emp_id = $_POST['emp_id'];
	 $user_id= $_POST['user_id'];
	 $pass= $_POST['pass'];

	 $sql = "INSERT INTO `user` (`User_id`, `password`, `employee_id`) VALUES ('$user_id', '$pass','$emp_id');";
	 if (mysqli_query($conn, $sql)) {
		echo "Registration Completed successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>