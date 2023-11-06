<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.btn{
      background-color: #228B22;
      color: white;
      padding: 5px 12px;
      border: none;
        border-radius: 2px;
        cursor: pointer;
        float: left;
        font-size:20px;
     }
  input[type=text] {
  width: 10%;
  padding: 8px 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-bottom:10px;
}
.container{
			
      padding-bottom:10px;


		}
		table{
		border-collapse:collapse;
		color:black;
		width:100%;
		font-family:sans-serif;
		font-size:25px;
		text-align:left;
		padding-left:15px;
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
	<div class="container">
		<form action="search-amployee.php" method="post">
			<input type="text" name="search" >
			<button class="btn">search</button>	
		</form>
	<table>
		<tr>
			<th>ID</th>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Start_Date</th>
			<th>Department</th>
			<th>Mobile_Number</th>
			<th>Sex</th>
			<th>Designation</th>
			<th>Blood_Group</th>
		</tr>
		<?php
		$conn =mysqli_connect("localhost", "root", "", "hospital");
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
              }
          $sql = "SELECT id,first_name,last_name,start_date,department_name,mobile_number,sex,designation,blood_group FROM employee";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr><td> " . $row["id"]. "</td><td> " . $row["first_name"]. " </td><td>" . $row["last_name"]. "</td><td>" .$row["start_date"]."</td><td>".$row["department_name"]."</td><td>".$row["mobile_number"]."</td><td>".$row["sex"]."</td><td>".$row["designation"]."</td><td>".$row["blood_group"]."</td></tr>"; }
              echo"</table>";
               } 
              else {
              echo "0 results";
        
               }
             $conn->close();

	  
		?>
	</table>

</body>
</html>