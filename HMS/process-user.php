
   <?php
   include_once 'database.php';
   if(isset($_POST['save']))
   {	 
      $user_id= $_POST['user_id'];
      $pass = $_POST['pass'];

      $result =  mysqli_query($conn,"SELECT User_id,password from user where user_id = '$user_id' and password= '$pass'");
      if (!$result || mysqli_num_rows($result)!=0) {
         //$url="http://localhost/HMS/";
         //header("Refresh:6, URL=$url");
         header("location:index.php");
         
      } else {
         echo "you've entered wrong user id or password";
      }
     
   }
   ?>