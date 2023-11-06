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
			<th>ID</th>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Department_Name</th>
			<th> Doctor's Department Location</th>
			<th>Status</th>

		</tr>
		<?php
     $conn =mysqli_connect("localhost", "root", "", "hospital");
    $set=$_POST['search'];
   if($set)
    {
	$query="SELECT doctor.id,doctor.first_name,doctor.last_name,department.department_name,department.d_location,department.status FROM doctor  JOIN department  ON doctor.department_name =department.department_name WHERE doctor.first_name LIKE'%$set%' 
	OR doctor.id ='$set'";
	$result=mysqli_query($conn,$query);
	while ( $row = mysqli_fetch_array($result))
	{
	 echo "<tr><td> " . $row["id"]. "</td><td> " . $row["first_name"]. " </td><td>" . $row["last_name"]. "</td><td>". $row["department_name"]. "</td><td>". $row["d_location"].
	 " </td><td>" .$row["status"]."</td></tr>";
    
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