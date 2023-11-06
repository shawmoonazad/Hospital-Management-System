<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number] {
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
  border-radius: 15px;
  background-color: #f2f2f2;
  padding: 150px;
  margin-left:80px;
  margin-right:120px;
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
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 50%;
    margin-top: 0;
  }
}
	</style>
</head>
<html>
  <body>
  	<div class="container">
	<form method="post" action="process-dept.php">
    <div class="row">
      <div class="col-25">
        <label>Department Name</label>
      </div>
      <div class="col-75">
        <input type="text"  name="dname" placeholder="Enter Department Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Department Location</label>
      </div>
      <div class="col-75">
        <input type="text"  name="dloc" placeholder="Enter Department Location">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Status</label>
      </div>
      <div class="col-75">
        <input type="text"  name="status" placeholder="Enter Status">
      </div>
    </div>
	<div class="row">
      <input type="submit" name="save" value="submit">
    </div>
	</form>
	</div>
  </body>
</html>