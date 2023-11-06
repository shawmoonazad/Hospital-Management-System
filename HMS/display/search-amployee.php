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
			<th>Employee_ID</th>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Department</th>
			<th>Day</th>
			<th>Shift</th>
			<th>Designation</th>
			<th>Satus</th>
			
		</tr>
		<?php
     $conn =mysqli_connect("localhost", "root", "", "hospital");
    $set=$_POST['search'];
   if($set)
    {
	$query="SELECT eshedule.Employee_ID,employee.First_Name,employee.Last_Name,employee.Department_Name,eshedule.Day,eshedule.Shift,employee.Designation,eshedule.Status FROM employee,eshedule WHERE eshedule.employee_id=employee.id AND employee.id='$set'";
	$result=mysqli_query($conn,$query);
	while ( $row = mysqli_fetch_array($result))
	{
	echo "<tr><td> " . $row["Employee_ID"]. "</td><td> " . $row["First_Name"]. " </td><td>" . $row["Last_Name"]. "</td><td>". $row["Department_Name"]. "</td><td>". $row["Day"]. "</td><td>". $row["Shift"]. "</td><td>". $row["Designation"]. "</td><td>".$row["Status"]."</td></tr>";
    
    
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