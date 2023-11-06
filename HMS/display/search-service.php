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
			<th>SL</th>
			<th>Service_Name</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>Status</th>
		</tr>
		<?php
     $conn =mysqli_connect("localhost", "root", "", "hospital");
    $set=$_POST['search'];
   if($set)
    {
	$query="SELECT SL,Service_Name,Quantity,Rate,Status FROM service WHERE  Service_Name LIKE '%$set%' ORDER BY SL";
	$result=mysqli_query($conn,$query);
	while ( $row = mysqli_fetch_array($result))
	{
	 echo "<tr><td> " . $row["SL"]. " </td><td>" . $row["Service_Name"]. "</td><td> " . $row["Quantity"]. " </td><td>" . $row["Rate"]. "</td><td>" .$row["Status"]."</td></tr>";
    
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