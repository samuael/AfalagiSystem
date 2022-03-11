<?php



$con = new mysqli('localhost','root','','afalagi');


if ($con->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}


    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
// $sex=$_POST['sex'];
$country=$_POST['country'];
$state=$_POST['state'];
$religion=$_POST['religion'];
$password=$_POST['password'];
// $imag=$_POST["image"];

    $biography=$_POST["biography"];
    $email=$_POST["email"];
    $phoneno=$_POST["phoneno"];


    


    

    
    $image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $data["result"]="yes";
        
        echo json_encode($data);

//          $sql="INSERT INTO datingusers( username ,firstname , lastname , age , sex , country , states , religion , password , images , biography , email , phoneno ) 
//      value('$username','$firstname','$lastname' ,'$age' ,'$sex','$country','$state','$religion','$password','$image','$biography','$email','$phoneno')";


//    $result = $con->query($sql);


     
//  if($result->num_rows > 0){
//     $data["email"]=$email;
//     $data["password"]=$password;
//         $data["result"]="yes";
        
//         echo json_encode($data);
//     }
//     else{
//         $data["result"]="no";
//         echo json_encode($data);
//     }
    $con->close();
?>