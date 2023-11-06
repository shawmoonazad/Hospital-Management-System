<!DOCTYPE html>
<html>
<title>Admin Panel</title>
<head>
<style>
  *{
    padding:0;
    margin: 0;
    box-sizing:border-box;
  }
  .head{
    text-align: center;
    margin-bottom:5px;
    background-color:#f2f2f2;
  }
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding:15px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.dropbtn-1 {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-1 {
  position: relative;
  display: inline-block;
}

.dropdown-content-1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-1 a:hover {background-color: #f1f1f1}

.dropdown-1:hover .dropdown-content-1 {
  display: block;
}
.dropbtn-2 {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-2 {
  position: relative;
  display: inline-block;
}

.dropdown-content-2 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-2 a:hover {background-color: #f1f1f1}

.dropdown-2:hover .dropdown-content-2 {
  display: block;
}
.dropbtn-3 {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-3 {
  position: relative;
  display: inline-block;
}

.dropdown-content-3 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-3 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-3 a:hover {background-color: #f1f1f1}

.dropdown-3:hover .dropdown-content-3 {
  display: block;
}
.dropbtn-4 {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-4 {
  position: relative;
  display: inline-block;
}

.dropdown-content-4 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-4 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-4 a:hover {background-color: #f1f1f1}

.dropdown-4:hover .dropdown-content-4 {
  display: block;
}
.dropbtn-5{
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-5 {
  position: relative;
  display: inline-block;
}

.dropdown-content-5 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-5 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-5 a:hover {background-color: #f1f1f1}

.dropdown-5:hover .dropdown-content-5 {
  display: block;
}
.dropbtn-6{
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-6 {
  position: relative;
  display: inline-block;
}

.dropdown-content-6 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-6 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-6 a:hover {background-color: #f1f1f1}

.dropdown-6:hover .dropdown-content-6 {
  display: block;
}
.dropbtn-7{
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-7 {
  position: relative;
  display: inline-block;
}

.dropdown-content-7 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-7 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-7 a:hover {background-color: #f1f1f1}

.dropdown-7:hover .dropdown-content-7 {
  display: block;
}
.dropbtn-8{
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-8{
  position: relative;
  display: inline-block;
}

.dropdown-content-8 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-8 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-8 a:hover {background-color: #f1f1f1}

.dropdown-8:hover .dropdown-content-8{
  display: block;
}
.dropbtn-9{
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  margin-left:25px; 
  border: none;
  cursor: pointer;
}

.dropdown-9 {
  position: relative;
  display: inline-block;
}

.dropdown-content-9{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content-9 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content-9 a:hover {background-color: #f1f1f1}

.dropdown-9:hover .dropdown-content-9 {
  display: block;
}
</style>
</head>
<body>
  <div class="head">
  <h1>GREEN HOSPITAL</h1>
  </div>
<div class="dropdown">
  <button class="dropbtn">Department</button>
  <div class="dropdown-content">
  <a href="add_department.php">Add Department</a>
  <a href="display/disy-dept.php">Department List</a>
  </div>
  </div>
  <div class="dropdown-1">
  <button class="dropbtn-1">Doctor</button>
  <div class="dropdown-content-1">
  <a href="add_doctor.php">Add Doctor</a>
   <a href="display/add-doctor.php">Doctor List</a>
  

  </div>
 </div>

<div class="dropdown-3">
  <button class="dropbtn-3">Employee</button>
  <div class="dropdown-content-3">
  <a href="add_employee.php">Add Employee</a>
   <a href="display/list-employee.php">Employee List</a>
  </div>
 </div>

 <div class="dropdown-5">
  <button class="dropbtn-5">Shedule</button>
  <div class="dropdown-content-5">
  <a href="add_dshedule.php">Add Doctor Shedule</a>
  <a href="display/list-dshedule.php">Doctor Shedule List</a>
  <a href="add_eshedule.php">Add Employee Shedule</a>
   <a href="display/list-eshedule.php"> Employee Shedule List</a>
  </div>
 </div>
 <div class="dropdown-2">
  <button class="dropbtn-2">Patient</button>
  <div class="dropdown-content-2">
  <a href="add_patient.php">Add Patient</a>
  <a href="display/list-patient.php">Patient List</a>
  <a href="add_docoment.php">Add Document</a>
   <a href="display/list-docoment.php">Document List</a>
  </div>
 </div>
 <div class="dropdown-4">
  <button class="dropbtn-4">Admission</button>
  <div class="dropdown-content-4">
  <a href="new_admission.php">New Admission</a>
   <a href="display/list-admission.php">Admission List</a>
  </div>
 </div>

 <div class="dropdown-6">
  <button class="dropbtn-6">Billing</button>
  <div class="dropdown-content-6">
  <a href="add_bill.php">Add Bill</a>
  <a href="display/list-bill.php">Bill List</a>
  </div>
 </div>
 <div class="dropdown-7">
  <button class="dropbtn-7">Service</button>
  <div class="dropdown-content-7">
  <a href="add_service.php">Add Service</a>
  <a href="display/list-service.php">Service List</a>
  </div>
 </div>
 <div class="dropdown-8">
  <button class="dropbtn-8">Bed List</button>
  <div class="dropdown-content-8">
  <a href="add_bed.php">Add Bed</a>
  <a href="display/list-bed.php">Bed List</a>
  </div>
 </div>
 <div class="dropdown-9">
  <button class="dropbtn-9">NoticeBoard</button>
  <div class="dropdown-content-9">
  <a href="add_notice.php">Add Notice</a>
   <a href="display/list-notice.php">Notice List</a>
  </div>
 </div>
 

  <div class="single">
  <img src="aaa.jpg" alt="">
  </div>
</body>
</html>