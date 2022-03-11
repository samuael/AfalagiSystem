<?php
session_start();
?>

<?php

// include('registor.php');

if (isset($_POST['button'])){



  // include('config.php');
  
  $file = $_FILES['image'];

	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$religion=$_POST['religion'];
	$password=$_POST['password'];
	$biography=$_POST["biography"];
  $email=$_POST["email"];
  $phoneno=$_POST["phoneno"];
  $confirm=$_POST["confirm"];



  function validate($username, $email, $password, $confirm){
    if($user_email='' || $password='' || $confirm_password='' || $user_name=''){
      return false;
    }
    else if(!($password == $confirm)){
      return false;
    }
    else{
      return true;
    }
  }

    global  $imagename;
    global $username;
    global $lastid;

  function uniquename(){
    $seed = str_split('abcdefghijklmnopqrstuvwxyz'
    .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    .'0123456789!@#$%^&*jlkjklj-_+=vcxvvbsusjlkj()'); // and any other characters
    shuffle($seed); // probably optional since array_is randomized; this may be redundant
    $rand = '';
    foreach (array_rand($seed, 10) as $k)
    {$rand .= $seed[$k];}
    return $rand;
  }
    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_type = $file['type'];
    $file_ext = explode('.', $file_name);





    $file_actual_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'jpeg', 'png' );

    if (in_array($file_actual_ext, $allowed)) {
      if ($file_error == 0) {
        // if ($file_size < 10000) {

          if($username=='' || $password=='' || $confirm=='' || $email==''){
            $_SESSION['message'] = "Please fill the form first!";
            include('../html/registor.php');
          }
          else if(!($password == $confirm)){
            $_SESSION['message'] = "Password Doesn't Match!";
            include('../html/registor.php');
          }
          else{
            $file_new_name = uniquename().".".$file_actual_ext;
      
            move_uploaded_file($file_tmp_name, "WebImages/".$file_new_name);  
            $loc = "http://localhost/AfalagiSystem/php/WebImages/";


           
            $imagename=$loc."".$file_new_name;
            $con = new mysqli('127.0.0.1','root','','afalagi');

              $sql="INSERT INTO datingusers( username ,firstname , lastname , age , sex , country , states , religion , password , images , biography , email , phoneno ) 
              VALUES ('$username','$firstname','$lastname' ,'$age' ,'$sex','$country','$state','$religion','$password','$imagename','$biography','$email','$phoneno') ;";
              $res= mysqli_query($con,$sql);

//--------------------------------Getting the Id of the user------------------------------
              $lastid=mysqli_insert_id($con);
//-----------------------------------------------------------------------------------------
              
              if($res) {
                $_SESSION['name'] = $username."";
                $_SESSION['email'] = $GLOBALS["email"];
                $_SESSION['imageDirectory'] = $imagename."";
                $_SESSION['passwordOfUser']=$password."";
                $_SESSION['id']=$lastid;
                $_SESSION['message'] = "successfully signup";
                $_SESSION['sex']=$sex;
                mysqli_close($con);
                header('location:MainDating.php');
                
              }else {
                // echo $firstname." " .$lastname." " . $username." ".$age." ".$sex." ".$country." ".$state."  ".$religion." ".$password." ".$imagename." ".$biography." ".$email."  ".$phoneno."  ";

                $_SESSION['message'] = "Sign Up failed, please try again!";
                include('../html/registor.php');
              }
              
           }
        // }else {
          // $_SESSION['message'] = "Sign Up failed, please try again!";
        //   include('../html/registor.php');
        // }
      }else {
        $_SESSION['message'] = "Error uploading your file!";
        include('../html/registor.php');
      }
    }else {
      $_SESSION['message'] = "You cannot upload a file of this type!";
      include('../html/registor.php');
    }
}
?>