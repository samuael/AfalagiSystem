<?

  
// session_start();


$data["result"]='yes';
echo json_encode($data);
//   function validate($username, $email, $password, $confirm){
//     if($user_email='' || $password='' || $confirm_password='' || $user_name=''){
//       return false;
//     }
//     else if(!($password == $confirm)){
//       return false;
//     }
//     else{
//       return true;
//     }
//   }
//   function uniquename(){
//       return "asdfghjkituylert";
//   }

 
  
// 	$username=$_POST['username'];
// 	$firstname=$_POST['firstname'];
// 	$lastname=$_POST['lastname'];
	
// 	$age=$_POST['age'];
// 	$sex=$_POST['sex'];
// 	$country=$_POST['country'];
// 	$state=$_POST['state'];
// 	$religion=$_POST['religion'];
// 	$password=$_POST['password'];
// 	$biography=$_POST["biography"];
//     $email=$_POST["email"];
//     $phoneno=$_POST["phoneno"];
//     $confirm=$_POST["confirm"];



//     $file_name = $file['name'];
//     $file_tmp_name = $file['tmp_name'];
//     $file_size = $file['size'];
//     $file_error = $file['error'];
//     $file_type = $file['type'];

//     $file_ext = explode('.', $file_name);
//     $file_actual_ext = strtolower(end($file_ext));

//     $allowed = array('jpg', 'jpeg', 'png' );


    
//     if (in_array($file_actual_ext, $allowed)) {
//       if ($file_error === 0) {
//         if ($file_size < 10000000) {

//           //// Validating the values entered using the validate function
//           if($username=='' || $password=='' || $confirm=='' || $email==''){
//             $_SESSION['message'] = "Please fill the form first!";
//             header('location: registor.php');
//           }
//           else if(!($password == $confirm_password)){
//             $_SESSION['message'] = "Password Doesn't Match!";
//             header('location: registor.php');
//           }
//           else{

//         //Loading the sent file to the Folder of the Web Server ................................    

//             $file_new_name = uniquename().".".$file_actual_ext;
//             $file_destination = ''.$file_new_name;
//             move_uploaded_file($file_tmp_name, $file_destination);  /// Getting The file Sent Over The Network 
            
			
//             // $val = uniqid('', true);
//             $loc = "http://localhost/AfalagiSystem/WebImages/";


//             //Create A database Connection 
//             $con = new mysqli('127.0.0.1','root','','afalagi');

//      $sql="INSERT INTO datingusers( username ,firstname , lastname , age , sex , country , states , religion , password , images , biography , email , phoneno ) 
//      value('$username','$firstname','$lastname' ,'$age' ,'$sex','$country','$state','$religion','$password','$loc$file_destination','$biography','$email','$phoneno')";

//               if($con->query($sql)) {
//                 $_SESSION['name'] = $username;
//                 $_SESSION['email'] = $email;
//                 $_SESSION['profile'] = $loc.$file_destination;
// 				$_SESSION['message'] = "successfull signup";
// 				header('location: registor.php');
				
				
// 				$data["username"]=$username;
// 				$data["email"]=$email;
//                 $data["password"]=$password;
//                 $data["result"]='yes';
// 				$data["imageDir"]=$loc.$file_destination;
				
// 				echo json_encode($data);
				
				
//                  //header('registor.php: event_view.php');
//               }else {
//                 $_SESSION['message'] = "Sign Up failed, please try again!";
//                 header('location: registor.php');
//                 $data["result"]='no';
//                 $data["message"]="Sign Up failed, please try again!";
//                 echo json_encode($data);
                 
//               }
//                $con->close();
//            }
//         }else {
//           $_SESSION['message'] = "Sign Up failed, please try again!";
//           header('location: registor.php');
//           $data["result"]='no';
//           $data["message"]="Sign Up failed, please try again!";
//           echo json_encode($data);
          
//         }
//       }else {
//         $_SESSION['message'] = "Error uploading your file!";
//         header('location: registor.php');
//         $data["result"]='no';
//         $data["message"]="Error uploading your file!!";
//         echo json_encode($data);
//         // echo "Error uploading your file!";
//       }
//     }else {
//       $_SESSION['message'] = "You cannot upload a file of this type!";
//       header('location: registor.php');
//       $data["result"]='no';
//       $data["message"]="You cannot upload a file of this type!";
//       echo json_encode($data);
      
//     }

 ?>