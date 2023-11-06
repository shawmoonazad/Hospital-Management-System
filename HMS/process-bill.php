<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $bill_id= $_POST['bill_id'];
	 $p_id = $_POST['p_id'];
	 $admission_id = $_POST['admission_id'];
	 $bill_date = $_POST['bill_date'];
	 $total_amount = $_POST['total_amount'];
	 $discount = $_POST['discount'];
	 $status = $_POST['status'];
     $sql = "INSERT INTO bill (`bill_id`, `patient_id`, `admission_id`, `bill_date`,
      `total_amount`,`discount`,`status`)
	 VALUES ('$bill_id','$p_id','$admission_id','$bill_date','$total_amount','$discount','$status')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>