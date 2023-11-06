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
			<th>Mobile_Number</th>
			<th>Address</th>
			<th>Sex</th>
			<th>Admisssion</th>
		</tr>
  <?php
$conn =mysqli_connect("localhost", "root", "", "hospital");
$set=$_POST['search'];
if($set)
  {
	$query="SELECT * FROM patient WHERE First_Name LIKE '%$set%'";
	$result=mysqli_query($conn,$query);
	while ( $row = mysqli_fetch_array($result))
	{
	 echo "<tr><td> " . $row["id"]. "</td><td> " . $row["first_name"]. " </td><td>" . $row["last_name"]. "</td><td>" .$row["mobile_number"]."</td><td>".$row["address"]."</td><td>".$row["sex"]."</td><td>".$row 
	 ["addmission"]."</td></tr>";
    
	  }
	}
    else{
	echo "Nothing Found";
    }
   
    $see=$_POST['search'];
    if($see)
     {
	$sq="SELECT * FROM patient WHERE ID ='$see'";
	$sr=mysqli_query($conn,$sq);
	while ( $row = mysqli_fetch_array($sr))
	 {
	 echo "<tr><td> " . $row["id"]. "</td><td> " . $row["first_name"]. " </td><td>" . $row["last_name"]. "</td><td>". $row["mobile_number"]. "</td><td>". $row["address"]. "</td><td>". $row["sex"]. "</td><td>".$row["addmission"]."</td></tr>";
    
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