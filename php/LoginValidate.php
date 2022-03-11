<?php
session_start();


$con = new mysqli('localhost','root','','afalagi');


if ($con->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}


    $password=$_POST["password"];
  
    $email=$_POST["email"];



     $sql="select * from datingusers where email='$email' and password='$password'";



   $result = $con->query($sql);

     
 if($result->num_rows > 0){
        $data["result"]="yes";
        $data["email"]=$email;
        $data["password"]=$password;

        $_SESSION["email"]=$email;
        $_SESSION["passwordOfUser"]=$password;
        $_SESSION["message"]="successfully registered";

        echo json_encode($data);
        
    }
    else{
        $data["result"]="no";
        echo json_encode($data);
    }
    $con->close();
?>