<!DOCTYPE html>
<html>
<head>
  <Title>
    Admin Panel 
  </Title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=number] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-size:14px;
}
input[type=password] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-size:14px;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;


}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius:15px;
  background-color:lightgrey;
  padding:100px;
  margin-left:200px;
  margin-right:200px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  font-size:20px;
}

.col-75 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.center{
  text-align: center;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}			

</style>
</head>
  <body>
  	<div class="container">
	<form method="post" action="process-reg.php">
    <div class="center">
      <label>
       <h2>Admin Registration Panel</h2> 
      </label>
    </div>
    <div class="row">
      <div class="col-25">
        <label>	Employee ID</label>
      </div>
      <div class="col-75">
        <input type="number"  name="emp_id" placeholder="Enter Employee ID">
      </div>
    </div>
     	<div class="row">
      <div class="col-25">
        <label>	User ID</label>
      </div>
      <div class="col-75">
        <input type="number"  name="user_id" placeholder="Enter User ID">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>	password </label>
      </div>
      <div class="col-75">
        <input type="password"  name="pass" placeholder="password">
      </div>
    </div>
	<div class="row">
      <input type="submit" name="save" value="Sign up">
    </div>
	</form>
	</div>
  </body>
</html>