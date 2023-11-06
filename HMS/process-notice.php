<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $serial = $_POST['serial'];
	 $dname= $_POST['dname'];
	 $notice= $_POST['notice'];
	 $edate= $_POST['edate'];
	 $assign_by= $_POST['assign_by']; 
	 $status= $_POST['status'];
	 $sql = "INSERT INTO notice (`SL`, `department_name`, `notice`,`End_Date`,`Assign_By` ,`Status`)
	 VALUES ('$serial','$dname','$notice','$edate','$assign_by','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>