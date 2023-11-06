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
			<th>Doctor_ID</th>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Department_Name</th>
			<th>Day</th>
			<th>Start_Time</th>
			<th>End_Time</th>
			<th>Status</th>
		</tr>
		<?php
          $conn =mysqli_connect("localhost", "root", "", "hospital");
		 $see=$_POST['search'];
     if($see)
     {
	 $sq="SELECT ds.Doctor_ID,d.First_Name,d.Last_Name,ds.Department,ds.Day,ds.Start_Time,ds.End_Time,ds.Status FROM dshedule AS ds,doctor AS d WHERE ds.Doctor_ID=d.ID AND  Day='$see'";
	 $sr=mysqli_query($conn,$sq);
	 while ( $row = mysqli_fetch_array($sr))
	 {
	 echo "<tr><td> " . $row["Doctor_ID"]. " </td><td>". $row["First_Name"]. "</td><td> " . $row["Last_Name"]. "</td><td> " . $row["Department"]. "</td><td>" .$row["Day"]."</td><td>".$row["Start_Time"]."</td><td>".$row["End_Time"]."</td><td>".$row["Status"]."</td></tr>";
    
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