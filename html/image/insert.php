<?php
$username = $_POST['username'];
$firsname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$email = $_POST['email'];

if(!empty($username) || !empty($firstname) || !empty($lastname) || !empty($password) || !empty($confirmpassword) || !empty($email)){
	$host = "localhost";
	$dbusername = "root";
	$password = "";
	
	$dbname = "new";
	$con = new mysqli($host,$dbusername,$password,$dbname);
	//mysql_select_db($dbname);
	if(mysqli_connect_error()){
		die('connect error(' . mysql_connect_errono(). ')'.mysqli_connect_error());
	}

	else{
		$SELECT = "SELECT email From registor Where email = ? Limit 1";
		$INSERT = "INSERT INTO registor (username,firsname,lastname,password,confirmpassword,email) values(?,?,?,?,?,?)";
		$stmt = $conn-> prepare($SELECT);
		$stmt->bind_param("s" , $email);
		$stmt-> excute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if($rnum == 0){
			$stmt->close();
			$stmt = $con->prepare($INSERT);
			$stmt->bind_param("ssssii" , $username , $firsname, $lastname, $password, $confirmpassword,$email );
			$stmt->excute();
			echo "new recored inserted succesfully";
		}
		else{
			echo "some one already registored";
		}
		$stmt->close();
		$con->close();


	}

}
else{
	echo "all feilds are required";
	die();
}
?>