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
			<th>Admission_ID</th>
			<th>Patient_ID</th>
			<th>Room_Number</th>
			<th>Bed_Number</th>
			<th>Admission_Date</th>
			<th>Release_Date</th>
		</tr>
		<?php
     $conn =mysqli_connect("localhost", "root", "", "hospital");
    $set=$_POST['search'];
   if($set)
    {
	$query="SELECT * FROM admission WHERE patient_id ='$set'";
	$result=mysqli_query($conn,$query);
	while ( $row = mysqli_fetch_array($result))
	{
	 echo "<tr><td> " . $row["admission_id"]. "</td><td> " . $row["patient_id"]. " </td><td>" . $row["room_number"]. "</td><td>" .$row["bed_number"]."</td><td>".$row["admission_date"]."</td><td>".$row["release_date"]."</td></tr>";
    
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