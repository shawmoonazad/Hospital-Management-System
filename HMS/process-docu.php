<?php
include_once 'database.php';
if(isset($_POST['save']))

{	 $document_id = $_POST['document_id'];
	 $patient_id= $_POST['patient_id'];
	 $doctor_id = $_POST['doctor_id'];
	 $document_title = $_POST['document_title'];
	 $date = $_POST['date'];
	 $update_by = $_POST['update_by'];
	 $sql = "INSERT INTO document(`document_id`, `document_title`, `doctor_id`, `patient_id`, `date`, `updated_by`)
	 VALUES ('$document_id','$document_title','$doctor_id','$patient_id','$date','$update_by')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>