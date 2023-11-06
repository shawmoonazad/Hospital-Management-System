<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $serial = $_POST['serial'];
	 $rnumber= $_POST['rnumber'];
	 $bnumber= $_POST['bnumber'];
	 $status= $_POST['status'];


	 $sql = "INSERT INTO bed (`SL`, `Room_Number`, `Bed_Number`, `Status`)
	 VALUES ('$serial','$rnumber','$bnumber','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>