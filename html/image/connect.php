<?php 

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if(!empty($username)){
if(!empty($password)){
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	
	$dbname = "youtube";
	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error()){
		die('connect error(' . mysqli_connect_errno() .')'.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO account(username , password) 
		values('$username','$password')";
		if($conn->query($sql)){
			echo "new recored is inserted succusfully";

		}
		else{
			echo "Error: " . $sql . "<br>". $conn->error;
		}
		$conn->close();
	}

	}
	else{
		echo "password should not be empty";
		die();
	}
}
else{
	echo "username should not be empty";
}






?>