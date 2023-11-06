<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $serial = $_POST['serial'];
	 $d_id= $_POST['d_id'];
	 $department = $_POST['department'];
	 $day= $_POST['day'];
	 $stime= $_POST['stime'];
	 $etime= $_POST['etime'];
     $status = $_POST['status'];
	 $sql = "INSERT INTO dshedule (`SL`, `Doctor_ID`, `Department`, `Day`,`Start_Time`,`End_Time`,`Status`)
	 VALUES ('$serial','$d_id','$department','$day','$stime','$etime','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "New Doctor Shecdule record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>