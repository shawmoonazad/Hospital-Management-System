<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
		border-collapse:collapse;
		color:black;
		width:100%;
		font-family:sans-serif;
		font-size:25px;
		text-align:left;
		padding-left:15px;
		padding-bottom:15px;
	}
	table,th,td{
		border:1px solid black;
	}
	th{
	 	background-color:#4CAF50;
		color:white;
		height:50px;
	}
	td{
		height:10px;
		vertical-align:bottom;
	}
    tr:nth-child(even){background-color: #f2f2f2}	
	</style>

</head>
<body>
	<table>
		<tr>
			<th>Bill_ID</th>
			<th>Patient_ID</th>
			<th>Admission_ID</th>
			<th>Bill_Date</th>
			<th>Total_Amount</th>
			<th>Discount</th>
			<th>Status</th>
		</tr>
		<?php
     $conn =mysqli_connect("localhost", "root", "", "hospital");


     $get=$_POST['search'];
   if($get)
    {
	$pid="SELECT * FROM bill JOIN patient ON bill.patient_id = patient.id WHERE bill.admission_id='$get'";
	$res=mysqli_query($conn,$pid);
	while ( $row = mysqli_fetch_array($res))
	{
	 echo "<tr><td> " . $row["bill_id"]. "</td><td> " . $row["patient_id"]. " </td><td>" . $row["admission_id"]. "</td><td>".$row["bill_date"]. " </td><td>" . $row["total_amount"]. " </td><td>" . $row["discount"]. " </td><td>"  .$row["status"]."</td></tr>";
    
	  }
	  echo "</table>";
	
	}
    else{
	echo "Nothing Found";
    }
   
      $conn->close();
 
		 ?>
	</table>


</body>
</html>