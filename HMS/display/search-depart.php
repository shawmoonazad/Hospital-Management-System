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
			
			<th>Department_Name</th>
			<th>Doctor ID</th>
			<th>Doctor Name</th>
			<th>employee ID</th>
			<th>employee Name</th>

		</tr>
		<?php
     $conn =mysqli_connect("localhost", "root", "", "hospital");
    $set=$_POST['search'];
   if($set)
    {
	$query="SELECT department.department_name,doctor.id As Doctor_id ,doctor.first_name As Doctor_firstname,employee.id as Employee_id,employee.first_name as Employee_firstname
	FROM doctor
	LEFT JOIN department ON doctor.department_name = department.department_name
	LEFT JOIN employee ON department.department_name=employee.department_name
	WHERE department.department_name Like'%$set%'";
	$result=mysqli_query($conn,$query);
	while ( $row = mysqli_fetch_array($result))
	{
	 echo "<tr><td> ". $row["department_name"]. " </td><td>" . $row["Doctor_id"]. "</td><td>" .$row["Doctor_firstname"]."</td><td>". $row["Employee_id"]."</td><td>" .$row["Employee_firstname"]."</td></tr>";
    
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