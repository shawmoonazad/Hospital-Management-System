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
			<th>ID_No</th>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Department_Name</th>
			<th>Shift</th>
			<th>Status</th>
		</tr>
		<?php
     $conn =mysqli_connect("localhost", "root", "", "hospital");
    $set=$_POST['search'];
   if($set)
    {
	$query="SELECT employee.id,employee.first_name,employee.last_name,department.department_name,eshedule.shift,department.status FROM(( employee JOIN department ON employee.department_name=department.department_name)JOIN eshedule ON employee.id=eshedule.employee_id) WHERE eshedule.shift='$set'OR employee.id ='$set'";
	$result=mysqli_query($conn,$query);
	while ( $row = mysqli_fetch_array($result))
	{
	 echo "<tr><td> ". $row["id"]. " </td><td>" . $row["first_name"]." </td><td>" . $row["last_name"]." </td><td>" . $row["department_name"]. "</td><td> " . $row["shift"]." </td><td>" . $row["status"]."</td></tr>";
    
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