<?php
//require_once('config.php');


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>be hopfull!!</title>
</head>
<body>

	<div>
		<?php

		include("config2.php");

		 if($_SERVER['REQUEST_METHOD']=='POST'){
		 	//if(isset("POST")){}
			$firstname = $_POST['firstname'];
			
			$password = $_POST['password'];


		$query= mysqli_query("SELECT * FROM user WHERE firstname='$firstname' and password='$password'" , $db);


       // $result= mysqli_query($db, $query);

       $result= mysqli_fetch_array($query);




       echo "firstname"+$result["firstname"];
       echo "lastname"+$result["lastname"];
       echo "password"+$result["password"];
    

		?>
	</div>
     
    
    
    
    <form action="loginvallidator.php" method="POST">

     	<div class="container">
     		<h1>LogIn</h1>
     		
     		<label for="firstname"><b>firstname</b></label>
     		 <input type="text" name="firstname" required>

             <label>Password:</label>
     		<input type="password" name="password" required>

     		<input type="submit" name="submit"  value="sign up">
     		

     	</div>
     	
     </form>



</body>
</html>